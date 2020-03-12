<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/404.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
</head>

<div class="background generic-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
                <h1>404</h1>
            </div>
        </div>
    </div>
</div>

<section class="section--404">
<div class="container">

    <h2>Page Not Found</h2>

    <p>Sorry, but the page you were trying to view does not exist. Try searching instead:</p>

    <?php get_search_form(); ?>

</div>

</section>
