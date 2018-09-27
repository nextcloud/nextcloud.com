<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>404</h1>
        </div>
    </div>
</div>

<section class="content">
<div class="container">

    <h2>Page Not Found</h2>

    <p>Sorry, but the page you were trying to view does not exist. Try searching instead:</p>

    <?php get_search_form(); ?>

</div>

</section>
