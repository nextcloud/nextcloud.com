<head>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/migration.css">
<script>
	require(["require.config"], function() {
		require(["pages/migration", "modules/youtubePlayer"])
	});
</script>
</head>
 
<div class="background migration-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Migration Guide');?></h1>
				<h2><?php echo $l->t('Nextcloud strives to make migration of customers from ownCloud as seamless as possible. Due to the large technical overlap, the migration of the application is easy. Business processes are equally easily updated.');?></h2>
			</div>
			<div class="col-md-6 topquote">
				<div class="row">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				<!--	<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>-->

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<h3><?php echo $l->t('We require a <span class="big">truly scalable</span> and 100% open source enterprise solution from a <span class="big">reliable partner</span> so we decided to <span class="big">migrate from ownCloud to Nextcloud</span>');?></h3>
							<h2><a href="/pr20160929"><?php echo $l->t('– Martin Bech, Head of NREN at DeIC');?></a></h2>
						</div>

						<div class="item">
							<h3><?php echo $l->t('The migration was like a <span class="big">typical ownCloud upgrade</span>');?></h3>
							<h2><a href="https://nextcloud.com/blog/9-german-educational-and-research-institutions-move-to-nextcloud-as-part-of-tu-berlin-migration-more-coming/"><?php echo $l->t('– Dr.-Ing. Thomas Hildmann, head of Infrastructure at the TU Berlin');?></a></h2>
						</div>

						<div class="item">
							<h3><?php echo $l->t('We are glad to have found a partner in Nextcloud with a <span class="big">healthy community</span> and <span class="big">strong development and support capabilities</span?>.');?></h3>
							<h2><a href="https://nextcloud.com/blog/3000-users-at-ucloud4schools-migrated-to-nextcloud-11-by-regio-it/"><?php echo $l->t('– Stefan Döhler, project manager at regio iT');?></a></h2>
						</div>

						<div class="item">
							<h3><?php echo $l->t('Die aktuellen Entwicklungen von Nextcloud, <span class="big">das Lizenzmodell</span> und die <span class="big">breite Unterstützung</span> der Community haben uns bei dieser Entscheidung bestärkt.');?></h3>
							<h2><a href="https://blog.hrz.tu-chemnitz.de/urzcommunity/2017/01/25/neuigkeiten-von-sync-n-share/"><?php echo $l->t('–  Andreas Heik, Universitätsrechenzentrum, TU Chemnitz');?></a></h2>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-md-8 col-md-offset-2">
	<h2 class="section--heading-1"><?php echo $l->t('Why migrate: ownCloud vs Nextcloud');?></h2>
	<p class="section--paragraph"><?php echo $l->t('Nextcloud offers significant <a class="hyperlink" href="https://nextcloud.com/?p=1373">scalability</a>, <a class="hyperlink" href="https://nextcloud.com/?p=1334">security</a> and <a class="hyperlink" href="https://nextcloud.com/?p=1332">feature improvements</a> over ownCloud (<a class="hyperlink" href="/compare">see a full comparison here</a>) and our experienced support team has already helped several dozen customers with <a class="hyperlink" href="https://nextcloud.com/blog/9-german-educational-and-research-institutions-move-to-nextcloud-as-part-of-tu-berlin-migration-more-coming/">sometimes tens of thousands of users</a> migrate successfully. Our customers appreciate expert help from a German, employee-owned company set up to provide a long term relationship between customers and business. Last but not least, Nextcloud has by far the strongest expertise in large scale deployments, as is evident in our work on <a class="hyperlink" href="https://nextcloud.com/globalscale">Global Scale.</a>');?></p>
	<p class="section--paragraph"><?php echo $l->t('Nextcloud is fully licensed under the AGPL, giving you <a class="hyperlink" href="https://nextcloud.com/blog/why-the-agpl-is-great-for-business-users/">all the benefits of open source</a> and avoiding any risk of mixing a proprietary enterprise edition with open source components.');?></p>
	<p class="section--paragraph"><?php echo $l->t('First rate support as well as <a  class="hyperlink" href="https://nextcloud.com/?p=1222">healthy development</a> happening in public are key to our offering. Employing over a dozen former ownCloud engineers as well as many other experienced software developers, we are in the best position to support you in keeping your data secure and easily accessible to your employees.');?></p>
	<p class="section--paragraph"><?php echo $l->t('We can help you <a class="hyperlink" href="/enterprise">with a support subscription</a> but you can also look for <a class="hyperlink" href="/partners">support from one of our partners</a> and of course get <a class="hyperlink" href="https://help.nextcloud.com">community support on our forums.</a>');?></p>

	<h2 class="section--paragraph__tittle"><?php echo $l->t('The Nextcloud migration tool');?></h2>
	<p class="section--paragraph"><?php echo $l->t('The easiest way to migrate is using our migration tool. This tool supports ownCloud 8.2 to ownCloud 10, migrating to the appropriate Nextcloud release automatically.');?></p>

	<p class="section--paragraph"><?php echo $l->t('Here\'s how to use the migrator.');?></p>

	<p class="section--paragraph"><?php echo $l->t('
        <ul>
        <li>Log into the ownCloud server using a command line terminal emulator, navigate to the folder where ownCloud is installed. That is typically something like <code>/var/www/html/owncloud</code>.</li>
        <li>2. Use these commands to download our migration script:<br/>
        <code>wget https://download.nextcloud.com/server/installer/migrator/index.php</code><br/>
        and then put it in the updater folder:<br/>
        <code>mv index.php.1 updater/index.php</code><br/>
        (there is already an index.php in the owncloud folder so the newly downloaded one will be called index.php.1)</li>
        <li>3. Now go to the URL of your ownCloud server in a browser and log in. Then append to the URL this: <em>updater/index.php</em> so it looks like: <code>your.owncloudserver.com/updater/index.php</code></li>
        <li>4. Now you should see the migrator and you can just follow the steps! Watch our video below to see how easy it is.</li></ul>');?></p>

    <div data-type="youtube" data-video-id="QKI85Yq01wo"></div>
    <p class="section--paragraph"><?php echo $l->t('In this video we show ownCloud, switch to the terminal, execute the commands to download the migrator and switch back to the browser to run it.');?></p>

	<p class="section--paragraph"><?php echo $l->t('You can do the last step manually from the command line, which is adviced on large installations where the time-out on PHP via the web interface can be a problem. Note that <strong>ownCloud 10.0.1 can not yet be migrated to Nextcloud 12</strong>, we are still testing this upgrade path to make sure it is 100% reliable!');?></p>
    <h2 class="section--paragraph__tittle"><?php echo $l->t('The manual process');?></h2>
	<p class="section--paragraph"><?php echo $l->t('Moving from ownCloud to Nextcloud follows the same process as a upgrade within either product. You can essentially follow our');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/manual_upgrade.html" target="_blank" rel="tooltip" title="<?php echo $l->t('Nextcloud administrator Documentation">usual upgrade documentation.</a>');?></p>

	<p class="section--paragraph"><?php echo $l->t('The steps are as follows:');?></p>
	<ul>
	<li class="section--paragraph"><?php echo $l->t('1. Enable Maintenance Mode with the command line tool<br> or set <code>\'maintenance\' => true,</code> in config/config.php');?></li>
	<li class="section--paragraph"><?php echo $l->t('2. Backup existing configuration and database');?></li>
	<li class="section--paragraph"><?php echo $l->t('3. Delete the ownCloud code (except the data- and config-directories) and extract the Nextcloud code');?></li>
	<li class="section--paragraph"><?php echo $l->t('4. Start the upgrade process with the command line tool<br> or set <code>\'maintenance\' => false,</code> in config/config.php and visit the login page');?></li>
	<li class="section--paragraph"><?php echo $l->t('5. Disable Maintenance Mode via command line<br> or set <code>\'maintenance\' => false,</code> in config/config.php');?></li>
	</ul>

	<p class="section--paragraph"><?php echo $l->t('Find more details in');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/manual_upgrade.html" target="_blank" rel="tooltip" title="<?php echo $l->t('Nextcloud administrator Documentation">our documentation.</a>');?></p>

	<p class="section--paragraph"><?php echo $l->t('Note that, as ownCloud does not support skipping releases, upgrades have to go through all releases between the existing ownCloud release and the desired Nextcloud release. We will support upgrades from ownCloud 8.2 and onwards. If you are on an older release and need help, please visit our <a class="hyperlink" href="https://help.nextcloud.com">community support forums</a> or');?> <a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('contact our Sales team for a custom quote.</a>');?></p>
	<h2 class="section--paragraph__tittle"><?php echo $l->t('Upgrade path');?></h2>
	<p class="section--paragraph"><?php echo $l->t('Depending on your current ownCloud release, you have to follow a different upgrade path. Nextcloud 9.0 is compatible with ownCloud 9.0; Nextcloud 10.0 is compatible with ownCloud 9.1. You can not skip releases like going from ownCloud 8.0 to Nextcloud 10, that would be skipping ownCloud 8.1, 8.2 and 9.0. You can upgrade from an ownCloud release to a compatible Nextcloud release or one newer. We generally recommend to move to the latest Nextcloud release that is compatible first before upgrading.');?></p>
	<p class="section--paragraph"><?php echo $l->t('This is the compatiblity overview:');?></p>
	<ul>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 9.0.x is compatible with Nextcloud 9.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 9.1.x is compatible with Nextcloud 10.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 10.0.x is compatible with Nextcloud 12.0.x');?></li>
	</ul>
	<p class="section--paragraph"><?php echo $l->t('This essentially means you can treat Nextcloud 9.0.x as an upgrade to ownCloud 9.0.x and Nextcloud 10.0.x as an upgrade to ownCloud 9.1.x');?></p>
	<p class="section--paragraph"><?php echo $l->t('Note that ownCloud 9.1.6 breaks easy upgrading to Nextcloud 10.0.5. We will fix this in 10.0.6! Similar, ownCloud 10.0.2 and 10.0.3 can\'t yet be upgraded to Nextcloud 12, which will be fixed with Nextcloud 12.0.1. We want to make sure we properly test the upgrade paths!');?></p>
	<p class="section--paragraph"><?php echo $l->t('These are some examples of an upgrade path. The minor release (.x below) should always be the latest bugfix release. You can find these on the changelog pages, <a  class="hyperlink" href="/changelog">here for Nextcloud.</a>');?></p>
	<ul>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 8.0.x -> ownCloud 8.1.x -> ownCloud 8.2.x -> Nextcloud 9.0.x -> Nextcloud 10.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 8.2.x -> Nextcloud 9.0.x -> Nextcloud 10.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 9.0.x -> Nextcloud 9.0.x -> Nextcloud 10.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 9.1.x -> Nextcloud 10.0.x -> Nextcloud 11.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 10.0.- -> Nextcloud 12.0.0');?></li>
	</ul>
	<p class="section--paragraph"><?php echo $l->t('When upgrading, make sure to enable apps after every upgrade step so they can run their own upgrade scripts. We have fixed this issue in Nextcloud 12: apps will no longer be disabled when upgrading on systems running PHP 7.');?></p>
	<p class="section--paragraph"><?php echo $l->t('If you are on a very old ownCloud release or want more details, read our advanced and detailed upgrade documentation in our blog on how to <a  class="hyperlink" href="https://nextcloud.com/blog/protect-your-privacy-time-to-upgrade-to-nextcloud-11./">protect your privacy by upgrading to Nextcloud 11 or higher.</a> Note that upgrading from a Windows Server is not supported beyond moving over the data.');?></p>
	<h2 class="section--paragraph__tittle"><?php echo $l->t('Settings');?></h2>
	<p class="section--paragraph"><?php echo $l->t('Nearly all ownCloud settings will be migrated to Nextcloud during the upgrade procedure. That means that internal and public (link) shares keep working, users keep their settings and you will retain app configuration, LDAP and external storage settings and more.');?></p>
	<p class="section--paragraph"><?php echo $l->t('Settings from proprietary extensions from ownCloud which have open source replacements in Nextcloud, however, will sometimes need to be reconfigured. The following apps have a Nextcloud equivalent but need re-configuration:');?></p>
	<ul>
		<li class="section--paragraph"><?php echo $l->t('File Retention');?></li>
		<li class="section--paragraph"><?php echo $l->t('File Firewall');?></li>
		<li class="section--paragraph"><?php echo $l->t('File Automated Tagging');?></li>
		<li class="section--paragraph"><?php echo $l->t('File Drop');?></li>
		<li class="section--paragraph"><?php echo $l->t('SharePoint');?></li>
	</ul>
	<p class="section--paragraph"><?php echo $l->t('The open source replacements of these apps in Nextcloud offer at least the same and typically more capabilities. Configuration settings not mentioned in this list will be carried over from ownCloud to Nextcloud during upgrade.');?>
	<h2 class="section--paragraph__tittle"><?php echo $l->t('License Compliance');?></h2>
	<p class="section--paragraph"><?php echo $l->t('Nextcloud is licensed exclusively under the AGPL or less restrictive open source licenses, removing any risk of mixing incompatible licenses or other legal issues. If you have not made any changes to the code of ownCloud Server and did not develop custom ownCloud applications, you will not need to do anything to be in compliance with the open source licenses of Nextcloud. Note that theme changes or branding are unaffected by AGPL licensing. Find more information in our FAQ. Our sales team will be happy to <a class="hyperlink" href="');?><?php echo home_url('contact') ?>"><?php echo $l->t('answer any questions you have.</a>');?></p>

	<h2 class="section--paragraph__tittle"><?php echo $l->t('Take over of support contract');?></h2>
	<p class="section--paragraph"><?php echo $l->t('Nextcloud will honor any valid contract with ownCloud which has started before the 2nd of June 2016 for free if a new agreement is signed for a period of at least 12 months.');?></p>

	<p class="section--paragraph"><?php echo $l->t('<small>All product names and trademarks are the property of their respective owners, which might in no way be associated or affiliated with Nextcloud.</small>');?></p>
</div>
</div>
