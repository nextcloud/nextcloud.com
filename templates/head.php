<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<?php require get_template_directory().'/templates/metadata.php';?>

<!--     <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> -->
<!-- 	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet"> -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css?version=14" rel="stylesheet">


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
