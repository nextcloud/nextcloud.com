<?php
/*
Template Name: Contact
*/
?>

<?php 

require('/srv/www/nextcloud.org/contribook/main/contribook/lib_contribook.php');

?>

<div class="page-header">
	<h1><a href="/about/">About Nextcloud</a></h1>


	<nav class="nav-infopages" role="navigation">
          <?php
          if (has_nav_menu('about-nav')) :
          wp_nav_menu(array('theme_location' => 'about-nav', 'menu_class' => 'navabout'));
          endif;
         ?>
       </nav>



</div>
<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php
$title = get_the_title();
?>
	<div class="span12">
<?php
if( $title != 'About' ){
?>
		<h2><?php the_title();?></h2>
		<hr class="pagetitle">
<?php 
}
?>
		<div class="page-content">
			<?php the_content(); ?>
		</div>
<?php endwhile; endif; ?>

	</div>
</div>

<?php


    $users=CONTRIBOOK_USER::getusers();
    echo('<table>');
    foreach($users as $user) {
      $data=CONTRIBOOK_USER::getuser($user);
      echo('<tr><td style="padding:5px;">');
      if($data['picture_50']<>''){
        echo('<span class="contribook_microbloguserpicture"><a href="'.CONTRIBOOK_USER_URL.$user.'"><img src="'.CONTRIBOOK_PHOTO_URL.$data['picture_50'].'" border="0" /></a></span>');
      }
      echo('</td><td style="padding:5px;">');

      echo('<a href="'.CONTRIBOOK_USER_URL.$user.'">'.$data['name'].'</a><br />');
      echo($data['role']);

      echo('</td></tr>');

    }
    echo('</table>');

?>


