<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/blog.css?v=2">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer", "modules/codeHighlights"])
	});
</script>
</head>
<section class="section--blog-header">
<div class="blog-background" style="background:url('<?php echo bloginfo('template_directory').'/assets/img/headers/dots.png'; ?>') no-repeat; background-position:center; background-size:cover; background-color:#0082c9;">
</div>
<section class="section--content">
<div class="container">
    <div class="row">
        <div class="content col-md-10 col-md-offset-1">
            <h1><?php the_title(); ?></h1>
            <h2 class="blog-metadata"><?php get_template_part('templates/entry-meta'); ?>
                    <a target="_blank" href="https://twitter.com/intent/tweet/?url=<?php echo urlencode(get_permalink()); ?>&via=nextclouders&hashtags=nextcloud">
                        <img class="blog-social" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitterround.png"></img>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>">
                        <img class="blog-social" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook.png"></img>
                    </a>
                    <a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>">
                        <img class="blog-social" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/googleplus.png"></img>
                    </a>
                </h2>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        </div>
    </div>
</div>
<style>
</style>
</section>
<section class="section--footer">
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
<!--     <footer> -->
<!--       <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?> -->
        <?php the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next post:') . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous post:', '' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) ); ?>
<!--     </footer> -->
    <?php comments_template('/templates/comments.php'); ?>
    </div>
    </div>
</section>
  </article>
<?php endwhile; ?>
