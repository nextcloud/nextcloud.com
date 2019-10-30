<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/verticals.css?v=1" rel="stylesheet">
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
				<h2><?php echo $l->t('Nextcloud has a solution for every business, attuned to your needs');?></p>
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

<section class="section--more">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <h3 class="section--paragraph__title"><?php echo $l->t('Can not find what you need?');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Every organization is unique, with different needs and challenges. We are more than happy to help you find the perfect solution for you.');?></p>
            <a href="<?php echo home_url('buy') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Contact us now');?></a>
		</div>
	</div>
</div>
</section>
