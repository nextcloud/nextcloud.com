<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('-', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta itemprop="image" content="https://nextcloud.com/wp-content/themes/nextcloudorgnew/assets/img/home/ncsplash.png">
	<meta itemprop="description" content="Nextcloud is an open source, self-hosted file sync and share and communication app platform. Access  &amp; sync your files, contacts, calendars  &amp; communicate and collaborate across your devices. You decide what happens with your data, where it is and who can access it!">
	<meta name="description" content="Nextcloud is an open source, self-hosted file sync and share and communication app platbasform. Access  &amp; sync your files, contacts, calendars  &amp; communicate and collaborate across your devices. You decide what happens with your data, where it is and who can access it!">
	<meta name="theme-color" content="#0082c9">

	<?php wp_head(); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bodymovin.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/navigation.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
	<script src="//cdn.jsdelivr.net/velocity/1.2.3/velocity.min.js"></script>
	<script src="//cdn.jsdelivr.net/velocity/1.2.3/velocity.ui.min.js"></script>
	<script type="text/javascript">

		var templateUrl = '<?= get_bloginfo('template_url'); ?>';
	</script>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet">
	<?php if(is_page('enterprise')) { ?><link href="<?php echo get_template_directory_uri(); ?>/assets/css/enterprise.css" rel="stylesheet"><?php } ?>
	<?php if(is_page('buy')) { ?><link href="<?php echo get_template_directory_uri(); ?>/assets/css/buy.css" rel="stylesheet"><?php } ?>
</head>
