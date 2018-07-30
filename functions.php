<?php
/**
 * Roots includes
 */
require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/wrapper.php');         // Theme wrapper class
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/activation.php');      // Theme activation
require_once locate_template('/lib/titles.php');          // Page titles
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/nav.php');             // Custom nav modifications
require_once locate_template('/lib/gallery.php');         // Custom [gallery] modifications
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/relative-urls.php');   // Root relative URLs
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/custom.php');          // Custom functions
require_once locate_template('/lib/register.php');        // Custom functions

function translationUrlFilter($url) {
	$path = parse_url(site_url())['path'];
	$language = explode('/', substr($_SERVER['REQUEST_URI'], strlen($path)));
	if(isset($language[1]) && $language[1] === 'de') {
		$url = explode('/', $url);
		if($path !== null) {
			$count = 4;
		} else {
			$count = 3;
		}
		$languageEntry = ['de'];
		array_splice($url, $count, 0, $languageEntry);
		return implode('/', $url);
	}
	if(isset($language[1]) && $language[1] === 'br') {
		$url = explode('/', $url);
		if($path !== null) {
			$count = 4;
		} else {
			$count = 3;
		}
		$languageEntry = ['br'];
		array_splice($url, $count, 0, $languageEntry);
		return implode('/', $url);
	}
	if(isset($language[1]) && $language[1] === 'es') {
		$url = explode('/', $url);
		if($path !== null) {
			$count = 4;
		} else {
			$count = 3;
		}
		$languageEntry = ['es'];
		array_splice($url, $count, 0, $languageEntry);
		return implode('/', $url);
	}
	if(isset($language[1]) && $language[1] === 'fr') {
		$url = explode('/', $url);
		if($path !== null) {
			$count = 4;
		} else {
			$count = 3;
		}
		$languageEntry = ['fr'];
		array_splice($url, $count, 0, $languageEntry);
		return implode('/', $url);
	}
	if(isset($language[1]) && $language[1] === 'nl') {
		$url = explode('/', $url);
		if($path !== null) {
			$count = 4;
		} else {
			$count = 3;
		}
		$languageEntry = ['nl'];
		array_splice($url, $count, 0, $languageEntry);
		return implode('/', $url);
	}
	if(isset($language[1]) && $language[1] === 'mx') {
		$url = explode('/', $url);
		if($path !== null) {
			$count = 4;
		} else {
			$count = 3;
		}
		$languageEntry = ['mx'];
		array_splice($url, $count, 0, $languageEntry);
		return implode('/', $url);
	}
	if(isset($language[1]) && $language[1] === 'cz') {
		$url = explode('/', $url);
		if($path !== null) {
			$count = 4;
		} else {
			$count = 3;
		}
		$languageEntry = ['cz'];
		array_splice($url, $count, 0, $languageEntry);
		return implode('/', $url);
	}
	return $url;
}

function custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter('home_url', 'translationUrlFilter');
add_theme_support( 'post-thumbnails' );
