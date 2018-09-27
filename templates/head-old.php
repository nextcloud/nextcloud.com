<!DOCTYPE html>
<html class="no-js" itemscope itemtype="http://schema.org/Organization" <?php language_attributes(); ?>>
<head>
    <?php require get_template_directory().'/templates/metadata.php';?>

	<!-- New styles -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/old/header.css?v=1" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/modules/footer.css?v=1" rel="stylesheet">

	<!-- GDPR - block YouTube by default -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

	<!-- Fixes for the new style on legacy pages -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/legacy-fixes.css" rel="stylesheet">

	<!-- Old styles below -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/old/main.min.css?1" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/old/font-awesome.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/old/styles.css"/>
	<script type="text/javascript">
		var templateUrl = '<?= get_bloginfo('template_url'); ?>';
	</script>

	<?php wp_head(); ?>
	<!-- New JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
	<script src="https://cdn.jsdelivr.net/lodash/4.17.4/lodash.core.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.0/bodymovin.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/enquire.js/2.1.6/enquire.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.3/headroom.min.js"></script>

<!-- 	Old JS -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/old/scripts.min.js"></script>
	<?php if(is_page('news')) { ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-infinitescroll/2.1.0/jquery.infinitescroll.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/2.1.04/jquery.masonry.min.js"></script>
	<?php } ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/navigation.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/old/cookieconsent.js"></script>


	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">


</head>
