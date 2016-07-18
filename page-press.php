<?php get_template_part('templates/parts/title'); ?>
<h2>Current Release Information <small> Nextcloud Server <?php echo $VERSIONS_SERVER_MAJOR_STABLE; ?></small></h2>
<a target="_blank" href="https://nextcloud.com/nextcloud-9-update-brings-security-open-source-enterprise-capabilities-and-support-subscription-ios-app/" class="btn btn-lg btn-default">Announcement</a>
<a href="/nine" class="btn btn-lg btn-default">Overview of new features</a>
<h2>Press releases</h2>
<ul>
	<li></li>
</ul>

<h2>Latest News and Annoucements</h2>
<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html' ) ); ?>
<h2>Nextcloud Resources</h2>
<!-- <p>Find an overview of Nextcloud history <a href="/history">on our history page</a> and an overview with <a href="/faq">frequently asked questions in our FAQ</a>.</p> -->
<a href="/features" class="btn btn-lg btn-default">Key Features of Nextcloud</a>
<a href="/install" class="btn btn-lg btn-default">Download Nextcloud Server <?php echo $VERSIONS_SERVER_MAJOR_STABLE; ?></a>
<div class="row">
	<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/files/screenshots.zip"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/screenshots.png" style="width: 100%" alt="Download a zip file with screenshots" class="img-thumbnail"></a></div>
	<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/files/Logo_files.zip"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/logofiles.png" style="width: 100%" alt="Download a zip file with logo files" class="img-thumbnail"></a></div>
	<div class="col-md-3"><a href="https://www.youtube.com/c/Nextcloud"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/youtube.png" style="width: 100%" alt="View the Nextcloud community YouTube channel" class="img-thumbnail"></a></div>
<!-- 		<div class="col-md-3"><a href="/nine"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/newfeatures.png" style="width: 100%" alt="See what is new in Nextcloud Server <?php echo $VERSIONS_SERVER_MAJOR_STABLE; ?>" class="img-thumbnail"></a></div> -->
</div>
<h2>Branding and Trademark Guidelines</h2>
<p>Our general Trademark guidelines <a href="/trademarks">can be found here</a>.

<!-- Find graphics like posters, stickers, flyers, release banners and other designs in our <a href="https://github.com/nextcloud/promo">promo github account</a>.</p>-->
<h2>Inquiries</h2>
<p>For press inquiries, please contact <a href="mailto:pr@nextcloud.com" target="_blank">Jos Poortvliet</a>.<p>
