<?php 

// Base file to handle each page request
require get_template_directory().'/config.php';
require get_template_directory().'/strings.php';

// If oc-new rss page, only show page content...
if(is_page('oc-news') || is_page('blogfeed')) { include roots_template_path(); } else {
  get_template_part('templates/head'); 
  ?>
  <body <?php body_class(); ?>>

    <!--[if lt IE 8]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
      </div>
    <![endif]-->

    <?php
      do_action('get_header');
      get_template_part('templates/header-top-navbar');
    ?>

    <?php if(is_page('home')) { // Handle home page ?>
	<div class="homepage">
	    <main class="main <?php echo roots_main_class(); ?>" role="main">
	      <?php include roots_template_path(); ?>
	    </main><!-- /.main -->
	</div><!-- /.wrap -->

	<?php } else { // Handle further special layouts ?>

	  <?php if(is_page('5years') /*|| is_page('conf') || is_page('register') || is_page('federation') || is_page('thankyou')*/) { // Handle alternative layout ?>
	    <div class="conference">
	      <div class="wrap container conf-content" role="document">
		<div class="content row">
		  <main class="main <?php echo roots_main_class(); ?>" role="main">
		    <?php include roots_template_path(); ?>
		  </main><!-- /.main -->
		</div><!-- /.content -->
	      </div><!-- /.wrap -->
	    </div>

	  <?php } else { // Handle all other layouts ?>

	    <div class="wrap container" role="document">
	      <div class="content row">
		<main class="main <?php echo roots_main_class(); ?>" role="main">
		  <?php include roots_template_path(); ?>
		</main><!-- /.main -->
	      </div><!-- /.content -->
	    </div><!-- /.wrap -->

	  <?php } ?>
    <?php } ?>
    
    <?php require get_template_directory().'/templates/footer.php'; ?>

    <?php if(PIWIKTRACKING) { get_template_part('templates/piwik-tracking'); } ?>

  </body>
</html>

<?php } ?>
