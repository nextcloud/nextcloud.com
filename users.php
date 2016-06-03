<?php
/*
Template Name: Users Page
*/
?>

<?php

 
//require('/srv/www/nextcloud.org/contribook/main/contribook/lib_contribook.php');

get_header(); 

?>

<div class="page-header"><h1>Contact</h1>
</div>


<div class="row">
	<div class="span3">
		<div class="sidebar">
			<?php 
			//<div class="well">
	//		wp_nav_menu(array('theme_location' => 'dev-nav'));
			//</div>
			?>
		</div>
	</div>
	
	<div class="span9">
		<div class="page-content">
<?php

/*
  // the latest twitter posts of all users
  echo('<h3>The latest twitter posts</h3>');
  CONTRIBOOK_MICROBLOG::show(0,10);

  // the latest github posts of all users
//  echo('<h3>The latest github posts</h3>');
//  CONTRIBOOK_GITHUB::showall(0,10);

  // the latest news
  echo('<h3>The latest news</h3>');
  CONTRIBOOK_NEWS::show(0,10);

  // the latest posts from the forum
  echo('<h3>The latest from the forum</h3>');
  CONTRIBOOK_FORUM::show(0,10);

*/

?>




		</div>

	</div>
</div>

<?php get_footer(); ?>
