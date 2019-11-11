<!-- A single blog post -->
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/blog.css?v=4">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer", "modules/codeHighlights"])
	});
</script>
</head>
<div class="background blog-background">
	<div class="container">
		<div class="row">
			<div class="topheader">
<!-- 				<h1>The Nextcloud blog</h1> -->

			</div>
		</div>
	</div>
</div>

<section class="section--content">
<div class="container">
    <div class="row">
        <div class="content col-md-10 col-md-offset-1">
            <div class="blog-title-and-subtitle"> <!-- If you move this section in the topheader class above, it works fine, but Jan et all like it more here... -->
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
                <br>
                <small>posted in <?php the_category( ', ' ); ?> by <?php the_author_posts_link(); ?></small>
                </h2>
            </div>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
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
