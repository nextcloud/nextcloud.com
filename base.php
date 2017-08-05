<?php

// Include translation file
require_once __DIR__ . '/l10n.php';

// Base file to handle each page request
require get_template_directory().'/config.php';
require get_template_directory().'/strings.php';
$html = '';

// If news then include nothing
if(is_page('oc-news') || is_page('blogfeed')) {
	ob_clean();
	ob_start();
	include roots_template_path();
	$html .= ob_get_contents();
	ob_end_clean();
} else {

	/**
	 * Pages that still use the old layout and haven't been migrated
	 */
	$oldPages = [
		'404',
		'5years',
// 		'about',
		'advisories',
		'advisory',
		'agreement',
		'android',
		'appform',
		'appform-submit',
		'apply',
		'apply2',
		'changelog',
		'code-of-conduct',
// 		'collaboraonline',
		'community',
// 		'conf',
		'conference-program',
		'confinfo',
		'confsubscribe',
		'connect',
		'consulting',
		'contact',
		'contactform',
		'contactsubmit',
// 		'contribute',
// 		'contributors',
		'design',
		'desktop',
//		'devices',
// 		'events',
		'faq',
		'federation',
		'hackathon',
		'history',
		'impressum',
		'install',
		'install-backup',
		'meetups',
		'news',
		'newsletter',
		'nine',
		'pidrive',
		'policy',
		'pr20160602',
		'pr20160614',
		'pr20160705',
		'pr20160719',
		'pr20160721',
		'pr20160725',
		'pr20160812',
		'pr20160825',
		'pr20160901',
		'pr20160916',
		'pr20160929',
		'pr20161027',
		'pr20161213',
		'pr20170307',
		'pr20170502',
		'pr20170508',
		'pr20170522',
		'pr20170807',
		'press',
		'privacy',
		'promote',
		'providers',
		'providersubmit',
//		'release-channels',
		'salessubmit',
		'securesharesubmit',
// 		'securesharing',
		'security',
// 		'sharing',
		'speaking',
		'spreedbox',
// 		'support',
// 		'team',
		'thanks',
		'thankyou',
		'ordersubmit',
		'theming',
		'threat-model',
		'trademarks',
		'translation',
		'user',
//		'webrtc',
// 		'workflow'

	];
	function is_blog()
	{
		global $post;
		$posttype = get_post_type($post);
		return (((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ($posttype == 'post')) ? true : false;
	}

	$currentPage = strtolower(get_post()->post_name);
	$oldPage = true;
	if (in_array($currentPage, $oldPages) || is_blog()) {
		// It's an old page, use the old template
		ob_clean();
		ob_start();
		get_template_part('templates/head-old');
		$html .= ob_get_contents();
		ob_end_clean();
	} else {
		// It's a new page, use the new template
		ob_clean();
		ob_start();
		get_template_part('templates/head');
		$html .= ob_get_contents();
		ob_end_clean();
		$oldPage = false;
	}

	$html .= '<body ';
	ob_clean();
	ob_start();
	body_class();
	$html .= ob_get_contents() . '>';
	ob_end_clean();

	ob_clean();
	ob_start();
	get_template_part('templates/header-top-navbar');
	$html .= ob_get_contents();
	ob_end_clean();

	// The basic translation for the files
	$l = new L10N(get_post()->post_name);

	if ($oldPage === true) {
		$html .= '<div class="wrap container" role="document"><div class="content row">';
		$html .= '<main class="main ' . roots_main_class() . '; ?>" role="main">';
		ob_clean();
		ob_start();
		include roots_template_path();
		$html .= ob_get_contents();
		ob_end_clean();
		$html .= '</main></div></div>';
	} else {
		ob_clean();
		ob_start();
		include roots_template_path();
		$html .= ob_get_contents();
		ob_end_clean();
	}

	ob_clean();
	ob_start();
	require get_template_directory() . '/templates/footer.php';
	$html .= ob_get_contents();
	ob_end_clean();

	if (PIWIKTRACKING) {
		ob_clean();
		ob_start();
		get_template_part('templates/piwik-tracking');
		$html .= ob_get_contents();
		ob_end_clean();
	}

	$html .= '</body>';
	$html .= '</html>';
}

// Check if the page is completely translated, if so use the translated one. If not default to the cached value.
$storeToCache = false;
$echoed = false;
$hl = '';
$path = parse_url(site_url())['path'];
$language = explode('/', substr($_SERVER['REQUEST_URI'], strlen($path)));
if(isset($language[1]) && $language[1] === 'de') {
	$hl = strtolower((string)$language[1]);
	if (ctype_alnum($hl) && strlen($hl) === 2) {
		$l10nFiles = [
			get_post()->post_name,
			'header-navbar',
			'footer',
		];
		$storeToCache = true;
		foreach($l10nFiles as $file) {
			$translatedPath = __DIR__ . '/l10n/' . $hl . '/' . $file . '.json';
			$originalPath = __DIR__ . '/l10n/base/' . $file . '.json';

			if(file_exists($translatedPath) && file_exists($originalPath)) {
				$translatedFile = json_decode(file_get_contents($translatedPath), true);
				$originalFile = json_decode(file_get_contents($originalPath), true);
			} else {
				$translatedFile = null;
				$originalFile = null;
			}
			if(!is_array($translatedFile) || !is_array($originalFile)) {
				$storeToCache = false;
			}

			if (array_keys($translatedFile) !== array_keys($originalFile)) {
				$storeToCache = false;
			}
		}

		$cacheFile = __DIR__ . '/l10n/cache/' .  md5($_SERVER['REQUEST_URI']);
		if(file_exists($cacheFile) && $storeToCache === false) {
			echo file_get_contents($cacheFile);
			$echoed = true;
		}
		if($storeToCache === true) {
			file_put_contents($cacheFile, $html);
			if(file_exists($cacheFile)) {
				echo file_get_contents($cacheFile);
				$echoed = true;
			}
		}
	}
}

if($echoed === false) {
	echo $html;
}
