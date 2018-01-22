<?php get_template_part('templates/parts/title'); ?>
<h2>Current Release Information <small> Nextcloud Server <?php echo $VERSIONS_SERVER_MAJOR_STABLE; ?></small></h2>
<a target="_blank" href="https://nextcloud.com/blog/nextcloud-11-sets-new-standard-for-security-and-scalability/" class="btn btn-lg btn-default">Announcement blog</a>
<!-- <a href="/nine" class="btn btn-lg btn-default">Overview of new features</a> -->
<h2>Press releases</h2>
<ul>
    <li><a href="/press/pr20180123">Nextcloud secure file sync and share now available via GEANT and NRENs to educational market</a></li>
    <li><a href="/press/pr20180111-2">Nextcloud achieves stellar growth in 2017 amid increasing awareness of compliance, control and data security among businesses</a></li>
    <li><a href="/press/pr20180111">Nextcloud Talk provides fully self-hosted, complete audio/video and text communication platform</a></li>
    <li><a href="/press/pr20180108">100K app downloads in 2017 shows strong growth of self-hosted online office market</a></li>
    <li><a href="/press/pr20171018/">Nextcloud and Purism Partner to Build and Include End-to-End Encrypted Storage Products and Services</a></li>
    <li><a href="/press/pr20170927/">Nextcloud Launches First Native Integrated End-to-end Encryption in Enterprise File Sync and Share Solution</a></li>
    <li><a href="/press/pr20170824/">Nextcloud iOS app Free for Download on App Store</a></li>
	<li><a href="/press/pr20170807/">Nextcloud and Partners Announce Education Edition With Moodle, Zenodo and other integration features</a></li>
	<li><a href="/press/pr20170522/">Nextcloud announces Global Scale architecture as part of Nextcloud 12</a></li>
	<li><a href="/press/pr20170508/">Nextcloud and Adfinis SyGroup sign strategic partnership</a></li>
	<li><a href="/press/pr20170502/">Nextcloud 12 Beta Introduces the Next Generation of Secure Collaboration</a></li>
    <li><a href="/press/pr20170307/">March 7, 2017: DASEQ and Nextcloud announce partnership</a></li>
	<li><a href="/press/pr20161213/">December 13, 2016: Nextcloud 11 sets new standard for security and scalability</a></li>
	<li><a href="/press/pr20161027/">October 27, 2016: Nextcloud GmbH continues growth path with addition of Head of Sales</a></li>
	<li><a href="/press/pr20160929/">Semptember 29, 2016: Danish research and education network moves from ownCloud to Nextcloud</a></li>
	<li><a href="/press/pr20160916/">Semptember 16, 2016: Nextcloud Box – a private cloud and IoT solution for home users – from Nextcloud, Canonical and WDLabs</a></li>
	<li><a href="/press/pr20160901/">Semptember 1st, 2016: Nextcloud Conference to Feature Launch Event, Keynote Speakers: Jane Silber, CEO of Canonical and Karen Sandler, Executive Director at the Software Freedom Conservancy</a></li>
	<li><a href="/press/pr20160825/">August 25th, 2016: Nextcloud 10 Delivers Secure, Fine Grained Control over Data Access and Workflows</a></li>
	<li><a href="/press/pr20160812/">August 12th, 2016: Press event at IFA 2016: Using everyday technology to make a positive impact</a></li>
	<li><a href="/press/pr20160721/">July 21th, 2016: Beta of Nextcloud 10 with Brute Force Protection, Two-Factor Authentication, Improved Federation and more</a></li>
	<li><a href="/press/pr20160719/">July 19th, 2016: Nextcloud and Collabora Partner to Offer Community and Enterprise Solution for Online Office</a></li>
	<li><a href="/press/pr20160705/">July 5th, 2016: Nextcloud delivers secure enterprise functionality backed by expert support and with partner-provided iOS client</a></li>
	<li><a href="/press/pr20160614">June 14, 2016: Nextcloud 9 Released Ahead of Promised Date and Fully Committed to Open Source</a></li>
	<li><a href="/press/pr20160602">June 2nd, 2016: Core Contributors Fork Into Nextcloud</a></li>
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
