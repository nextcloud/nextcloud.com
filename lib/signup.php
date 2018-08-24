<?php

use GeoIp2\Database\Reader;

require_once realpath(dirname(__FILE__)) . '/../vendor/autoload.php';
require_once realpath(dirname(__FILE__)) . '/../config.php';

const USER_AGENT_CLIENT_ANDROID = '/^Mozilla\/5\.0 \(Android\) (ownCloud|Nextcloud)\-android.*$/';
const USER_AGENT_TALK_ANDROID = '/^Mozilla\/5\.0 \(Android\) Nextcloud\-Talk v.*$/';
const USER_AGENT_CLIENT_DESKTOP = '/^Mozilla\/5\.0 \([A-Za-z ]+\) (mirall|csyncoC)\/.*$/';
const USER_AGENT_CLIENT_IOS = '/^Mozilla\/5\.0 \(iOS\) (ownCloud|Nextcloud)\-iOS.*$/';
const USER_AGENT_TALK_IOS = '/^Mozilla\/5\.0 \(iOS\) Nextcloud\-Talk v.*$/';

add_action('rest_api_init', 'registration_register_routes');

$redis = new Predis\Client(REDIS);
$readerCity = new Reader(realpath(dirname(__FILE__)) . '/../assets/GeoLite2/GeoLite2-City.mmdb');
$readerCountry = new Reader(realpath(dirname(__FILE__)) . '/../assets/GeoLite2/GeoLite2-Country.mmdb');

// Get proper ip in case of reverse proxy
function whatismyip() {
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	} else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	} else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	} else if (isset($_SERVER['HTTP_FORWARDED'])) {
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	} else if (isset($_SERVER['REMOTE_ADDR'])) {
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	} else {
		$ipaddress = null;
	}

	return $ipaddress;
}

function get_device() {
	$userAgents = [
		'Android' => USER_AGENT_CLIENT_ANDROID,
		'Android Talk' => USER_AGENT_TALK_ANDROID,
		'Desktop' => USER_AGENT_CLIENT_DESKTOP,
		'iOS' => USER_AGENT_CLIENT_IOS,
		'iOS Talk' => USER_AGENT_TALK_IOS
	];

	if (isset($_SERVER['HTTP_USER_AGENT'])) {
		$userAgent = $_SERVER['HTTP_USER_AGENT'];
		foreach ($userAgents as $name => $regex) {
			if (preg_match($regex, $userAgent)) {
				return $name;
			}
		}
		return 'Website';
	}
	return 'unknown';
}

function registration_register_routes() {
	register_rest_route('signup', '/account', array(
		'methods'  => WP_REST_Server::CREATABLE,
		'callback' => 'request_account',
		'args'     => array(
			'id'    => array(
				'validate_callback' => function ($param) {
					return is_numeric($param);
				}
			),
			'email' => array(
				'validate_callback' => function ($param) {
					return filter_var($param, FILTER_VALIDATE_EMAIL);
				}
			)
		)
	));
	register_rest_route('signup', '/providers', array(
		'methods'  => WP_REST_Server::READABLE,
		'callback' => 'get_providers_list'
	));
}

function request_account($request) {

	// redis rate limit
	global $redis;
	global $readerCountry;

	$limit = [
		'interval'     => 3660, // seconds
		'num_requests' => 5, // number of requests allowed per interval
		'user_ip'      => whatismyip() // getting the user IP.
	];

	$rateId    = "requests_count_{$limit['user_ip']}";
	$rateLimit = (int) $redis->get($rateId);
	if ($rateLimit + 1 > $limit['num_requests']) {
		return new WP_Error('rate_limit_exceeded', 'Too many requests', array('status' => 429));
	}

	$request = json_decode($request->get_body(), true);

	// verify data
	if (!array_key_exists('email', $request) || !array_key_exists('id', $request)) {
		return new WP_Error('rest_invalid_param', 'Invalid parameter(s)', array('status' => 400));
	}

	// init vars
	$email      = $request['email'];
	$providerId = intval($request['id']);
	$locationId = intval($request['location']);
	$newsletter = array_key_exists('newsletter', $request) ? true : false;
	$subscribe  = boolval($request['subscribe']);

	// get providers list && check provider id
	$json = json_decode(file_get_contents(PROVIDERS_FILE));
	if (!array_key_exists($providerId, $json)) {
		return new WP_Error('rest_invalid_param', 'Invalid parameter(s)', array('status' => 400));
	}

	// init post request
	$provider = $json[$providerId];
	$url      = $provider->locations[$locationId]->url . '/ocs/v2.php/account/request/' . $provider->locations[$locationId]->key;
	$data     = array(
		'headers' => array(
			'Content-Type' => 'application/x-www-form-urlencoded;charset=UTF-8'
		),
		'body'    => 'email=' . $email,
		'timeout' => 15
	);

	// request account && consume one rate token
	$post = wp_remote_post($url, $data);
	$ttl  = $redis->ttl($rateId);
	$redis->set($rateId, $rateLimit + 1);
	$redis->expire($rateId, $ttl > 0 ? $ttl : $limit['interval']);


	if (!array_key_exists('response', $post)) {
		return $post;
	} else if ($post['response']['code'] !== 201) {
		return new WP_Error($post['response']['message'], json_decode($post['body'])->data->message, array('status' => $post['response']['code']));
	}

	$response = json_decode($post['body'])->data;

	if (!is_string($response->setPassword)) {
		return new WP_Error('rest_invalid_param', 'An unknown error occured', array('status' => 400));
	}

	// SUCCESS let's continue
	if ($subscribe) {
		// don't do anything else even if it fails.
		// let's focus on the ux flow
		subscribe($email);
	}

	if (array_key_exists('ocsapi', $request) && $request['ocsapi'] === true) {
		return $response->setPassword . '/ocs';
	}

    // store stats
    try {
        $country = $readerCountry->country(whatismyip())->country->isoCode;
    } catch (Exception $e) {
        $country = 'unknown';
    }
    $redis->set(time(), json_encode([
        'device' => get_device(),
        'country' => $country
    ]));

	return $response->setPassword;
}

function get_providers_list() {
	// get providers list
	$json = json_decode(file_get_contents(PROVIDERS_FILE));

	// obfuscate keys
	foreach ($json as $provider) {
		// safety fallback
		unset($provider->key);
		unset($provider->url);
		foreach ($provider->locations as $location) {
			unset($location->key);
			unset($location->url);
		}
	}

	return $json;
}

function subscribe($email) {

	$data = array(
		'headers' => array(
			'Content-Type' => 'application/x-www-form-urlencoded;charset=UTF-8'
		),
		'body'    => 'login=' . NEWSLETTER_API_USER . '&password=' . NEWSLETTER_API_TOKEN,
		'timeout' => 5
	);

	// login
	$post = wp_remote_post(NEWSLETTER_API_URL . '&cmd=login', $data);

	// subscribe
	$data['body'] .= '&email=' . $email . '&lists=' . NEWSLETTER_ID;
	$post = wp_remote_post(NEWSLETTER_API_URL . '&cmd=subscribe', $data);

	return $post;
}