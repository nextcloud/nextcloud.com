<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
      <div class="blog-social-icons row">
        <div class="col-md-12 ">
          <a target="_blank" href="https://twitter.com/intent/tweet/?url=<?php echo urlencode(get_permalink()); ?>&via=nextclouders&hashtags=nextcloud">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitterround.png"></img>
          </a>
          <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook.png"></img>
          </a>
          <a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/googleplus.png"></img>
          </a>
        </div>
      </div>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
