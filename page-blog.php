<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/blog.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer", "modules/submenu"])
	});
</script>-->
</head>

<div class="background blog-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('<span class="avoidwrap">Nextcloud News</span>');?><a href="/blogfeed" class="rss-button"><img style="vertical-align: top;" width=35 class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/rss.png"></img></a></h1>
				<h2><?php echo $l->t('What is going on in and around Nextcloud?');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--grid">
<div class="container">
<?php echo do_shortcode("[post_grid id='3635']"); ?>
</div>
</section>

<section class="section--newsletter">
    <div class="container-fluid quote">
        <h2 class="text-center revealOnScroll"><?php echo $l->t('Subscribe to our newsletter');?></h2>
        <p class="section--paragraph section--text--center revealOnScroll"><?php echo $l->t('Want to be sure to never miss anything? Subscribe to our newsletter!');?></p>
        <div class="container">
            <div class="row">
                <div class="col-md-12 revealOnScroll">
                    <div class="row text-center">
                        <a href="https://newsletter.nextcloud.com/?p=subscribe&id=1" class="button button--arrow button--large"><?php echo $l->t('Subscribe now');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
