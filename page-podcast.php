<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/podcast.css?v=1" rel="stylesheet">
<script>
require(["require.config"], function() {
	require(["pages/sharing", "modules/youtubePlayer"])
});
</script>

<!--  podcast player scripts - see https://docs.podlove.org/podlove-web-player/embedding.html -->
<script src="https://cdn.podlove.org/web-player/5.x/embed.js"></script>
<script>
window.podlovePlayer("#podcast-player", "<?php echo get_template_directory_uri(); ?>/assets/podcast/episodes/episode1.json", "<?php echo get_template_directory_uri(); ?>/assets/podcast/config.json")
  .then(store => {
    store.subscribe(() => {
      console.log(store.getState());
    });
  });
</script>
<!--  podcast player scripts -->

<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo/nextcloud-podcast-logo.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo/nextcloud-podcast-logo.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo/nextcloud-podcast-logo.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo/nextcloud-podcast-logo.png">
</head>

<div class="background permissions-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Stay in contact');?></h1>
                <h2><?php echo $l->t('Follow the Nextcloud podcast!');?></h2>
            </div>
        </div>
    </div>
</div>


<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Listen to the latest episode now!');?></p>
            </div>
        <div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center">
                    <!--         podcast player will be displayed here             -->
                    <div id="podcast-player"></div>
                    <!--         podcast player will be displayed here             -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--previous">
    <div class="container">
    <h2 class="text-center"><?php echo $l->t('Previous episodes');?></h2>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <ul>
                    <?php $business_posts = get_posts( array( 'numberposts' => 5, 'category' => get_cat_ID('podcast') ) );
                    foreach ($business_posts as $bpost) { ?>
                        <li><a href="<?php echo wp_get_canonical_url($bpost->ID);?>"><?php echo $bpost->post_title;?></a></li>
                    <?php } ; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
