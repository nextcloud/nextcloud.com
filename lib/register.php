<?php
add_action('rest_api_init', 'registration_register_routes');

function registration_register_routes()
{
    register_rest_route('register', '/account', array(
        'methods' => WP_REST_Server::CREATABLE,
        'callback' => 'request_account',
        'args' => array(
            'id' => array(
                'validate_callback' => function ($param) {
                    return is_numeric($param);
                },
            ),
            'email' => array(
                'validate_callback' => function ($param) {
                    return filter_var($param, FILTER_VALIDATE_EMAIL);
                },
            ),
        ),
    ));
    register_rest_route('register', '/providers', array(
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'get_providers_list',
    ));
}

function request_account($request)
{
    $request = json_decode($request->get_body(), true);

    // verify data
    if (!array_key_exists('email', $request) || !array_key_exists('id', $request)) {
        return $request->get_body();
        return new WP_Error('rest_invalid_param', 'Invalid parameter(s)', array('status' => 400));
    }

    // init vars
    $email = $request['email'];
    $providerId = intval($request['id']);
    $newsletter = array_key_exists('newsletter', $request) ? true : false;

    // get providers list
    $json = json_decode(file_get_contents(realpath(dirname(__FILE__)) . '/../assets/preferred.json'));

    if (!array_key_exists($providerId, $json)) {
        return new WP_Error('rest_invalid_param', 'Invalid parameter(s)', array('status' => 400));
    }

    // init post request
    $provider = $json[$providerId];
    $url = $provider->url . '/ocs/v2.php/account/request/' . $provider->key;
    $data = array(
        'headers' => array(
            'Content-Type' => 'application/x-www-form-urlencoded;charset=UTF-8',
        ),
        'body' => 'email=' . $email,
        'timeout' => 5,
    );
    // request account
    $post = wp_remote_post($url, $data);

    if (!array_key_exists('response', $post)) {
        return $post;
    } else if ($post['response']['code'] !== 201) {
        return new WP_Error($post['response']['message'], json_decode($post['body'])->data->message, array('status' => $post['response']['code']));
    }

    $response = json_decode($post['body'])->data;

    if (!is_string($response->setPassword)) {
        return new WP_Error('rest_invalid_param', 'An unknown error occured', array('status' => 400));
    }

    return $response->setPassword;
}

function get_providers_list()
{
    // get providers list
    $json = json_decode(file_get_contents(realpath(dirname(__FILE__)) . '/../assets/preferred.json'));

    // obfuscate keys
    foreach ($json as $provider) {
        unset($provider->key);
    }

    return $json;
}
