<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('-', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<meta itemprop="image" content="https://nextcloud.com/wp-content/themes/next/assets/img/home/top-banner.png">
	<meta itemprop="description" content="Nextcloud is an open source, self-hosted file share and communication platform. Access  &amp; sync your files, contacts, calendars  &amp; communicate and collaborate across your devices. You decide what happens with your data, where it is and who can access it!">
	<meta name="description" content="Nextcloud is an open source, self-hosted file share and communication platform. Access  &amp; sync your files, contacts, calendars  &amp; communicate and collaborate across your devices. You decide what happens with your data, where it is and who can access it!">
	<meta name="theme-color" content="#0082c9">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet">

	<script>
		// Use pure javascript to remove the class no-js if javascript is enabled
		document.documentElement.classList.remove("no-js");
	</script>

	<?php wp_head(); ?>
	<script type="text/javascript">
		var templateUrl = '<?= get_bloginfo('template_url'); ?>';
	</script>

	<script data-main="<?php echo get_template_directory_uri(); ?>/assets/js/require.config.js"
	src="<?php echo get_template_directory_uri(); ?>/node_modules/requirejs/require.min.js">
	</script>

	<script>
	require(["require.config"], function() {
		require(["modules/header", "main", "modernizr", "modules/cookieconsent"])
	});
	</script>

</head>
