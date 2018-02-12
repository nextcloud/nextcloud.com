// <?php
// require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php');
// ?>
<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/files.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer", "modules/submenu"])
	});
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<div class="background files-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('<span class="avoidwrap">Nextcloud News</span>');?><a href="/blogfeed" class="rss-button"><img style="vertical-align: top;" width=35 class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/rss.png"></img></a></h1>
				<h2><?php echo $l->t('What is going on in Nextcloud?');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center">Welcome to Nextcloud News, our contributor blog roll. Nextcloud contributors should <a href="mailto:jos@nextcloud.com">ask to get added</a>!</p>
                <p class="section--paragraph text-center">Opinions are the responsibility of those who express them. See our <a href="/privacy">privacy policy</a>.</p>
                <p class="section--paragraph text-center">If you'd like to stay up to date with Nextcloud news you could also <a href="https://newsletter.nextcloud.com/?p=subscribe&id=1">subscribe to our newsletter</a>! A RSS feed with only release updates can be <a href="https://github.com/nextcloud/server/releases.atom">found here <i class="icon-rss icon"></i></a></p>
            </div>
        </div>
    </div>
</section>

<section class="section--grid">
<div class="container">
<?php echo do_shortcode("[post_grid id='635']"); ?>
</div>

