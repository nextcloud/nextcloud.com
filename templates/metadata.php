<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title('-', true, 'right'); ?></title>
<meta name="author" content="Nextcloud">
<meta itemprop="description" content="Nextcloud is the most deployed self-hosted file share and collaboration platform on the web. Access  &amp; collaborate across your devices. Your data remains under your control.">
<meta name="description" content="Nextcloud is the most deployed self-hosted file share and collaboration platform on the web. Access  &amp; collaborate across your devices. Your data remains under your control.">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@nextclouders">
<meta name="twitter:url" content="<?php global $wp; echo home_url( $wp->request ) ?>">
<meta name="twitter:title" content="<?php wp_title('-', true, 'right'); ?>">
<meta name="twitter:description" content="Nextcloud is the most deployed self-hosted file share and collaboration platform on the web. Access  &amp; collaborate across your devices. You stay in control over your data!">

<!-- Twitter summary card with large image must be at least 280x150px -->

<!-- Open Graph data -->
<meta property="og:title" content="<?php wp_title('-', true, 'right'); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php global $wp; echo home_url($wp->request); ?>" />
<meta property="og:description" content="Nextcloud is the most deployed self-hosted file share and collaboration platform on the web. Access  &amp; collaborate across your devices. You decide what happens with your data, where it is and who can access it" />
<meta property="og:site_name" content="Nextcloud" />
<meta property="fb:admins" content="1032807203462807" />

<!-- set images for generic, twitter and Open Graph -->

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<meta itemprop="image" content="<?php echo $image[0]; ?>">
<meta name="twitter:image" content="<?php echo $image[0]; ?>">
<meta name="twitter:image:src" content="<?php echo $image[0]; ?>">
<meta property="og:image" content="<?php echo $image[0]; ?>">
<?php else: ?>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/home/top-banner.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/home/top-banner.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/home/top-banner.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/home/top-banner.png">
<?php endif; ?>

<meta name="theme-color" content="#0082c9">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />
