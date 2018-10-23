x<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/verticals.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<!--<script>
require(["require.config"], function() {
	require(["bootstrap", "modules/youtubePlayer"])
});
</script>-->
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/verticals-small.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/verticals-small.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/verticals-small.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/verticals-small.jpg">
</head>
<div class="verticals-background second-menu">
    <div class="container-fluid background">
        <div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Focus on productivity');?></h1>
				<h2><?php echo $l->t('No matter your business, Nextcloud has a solution for you');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
<!--             <p class="section--paragraph text-center"><?php echo $l->t('You need to give your users what they need to be productive. Your users expect you to keep their data safe. Nextcloud helps you deliver, with an easy user interface, deep integration in your infra structure and unrivaled security.');?></p> -->
            <p class="section--paragraph text-center"><?php echo $l->t('Private or public organization, small or large, Nextcloud delivers the leading self-hosted productivity solution in any sector.');?></p>
		</div>
	</div>
</div>
</section>

<?php require get_template_directory().'/verticals.php';?>
