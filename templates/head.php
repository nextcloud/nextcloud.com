<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<?php require get_template_directory().'/templates/metadata.php';?>

<!--     <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> -->
<!-- 	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet"> -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css?version=15" rel="stylesheet">
<?php

// Remove quote bodyclass

function wpse15850_body_class( $wp_classes, $extra_classes )
{
    // List of the only WP generated classes allowed
    $whitelist = array( 'logged-in', 'admin-bar' );

    // List of the only WP generated classes that are not allowed
    $blacklist = array( 'quote' );

    // Filter the body classes
    // Whitelist result: (comment if you want to blacklist classes)
    # $wp_classes = array_intersect( $wp_classes, $whitelist );
    // Blacklist result: (uncomment if you want to blacklist classes)
    $wp_classes = array_diff( $wp_classes, $blacklist );

    // Add the extra classes back untouched
    return array_merge( $wp_classes, (array) $extra_classes );
}
add_filter( 'body_class', 'wpse15850_body_class', 10, 2 );

?>

	<?php wp_head(); ?>
	<script type="text/javascript">
		var templateUrl = '<?= get_bloginfo('template_url'); ?>';
	</script>
	<script data-main="<?php echo get_template_directory_uri(); ?>/assets/js/require.config.js"
	src="<?php echo get_template_directory_uri(); ?>/node_modules/requirejs/require.min.js">
	</script>

	<script>
	requirejs.config({ waitSeconds: 0 });
	require(["require.config"], function() {
		require(["modules/header", "main", "overlay", "modernizr", "modules/cookieconsent"])
	});
	</script>



</head>
