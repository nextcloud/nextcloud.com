<!-- This is an individual article that shows up on the list of posts -->
<!--
    -->


<article <?php post_class(); ?>>
<div class="post">
    <a href="<?php the_permalink(); ?>"><div class="post--image" style="
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        background: url('<?php the_post_thumbnail_url('full'); ?>');
        <?php else: ?>
        background: url('<?php echo bloginfo('template_directory').'/assets/img/headers/dots.png'; ?>');
        <?php endif; ?>
         ">
    </div></a>

    <div class="post--content">
        <header>
            <h2 class="post--content--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post--content--metadata">
                <?php get_template_part('templates/entry-meta'); ?> in <?php the_category( ', ' ); ?> by <?php the_author( ' ' ); ?>
            </div>
        </header>
        <div class="post--content--excerpt">
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>
</article>
