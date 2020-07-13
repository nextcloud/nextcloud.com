<head>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/migration.css?v=1">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
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
							<h2><a href="<?php echo home_url('pr20160929') ?>"><?php echo $l->t('– Martin Bech, Head of NREN at DeIC');?></a></h2>
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
							<h3><?php echo $l->t('The recent development of Nextcloud, <span class="big">licensing model</span> and <span class="big">wide support</span> of the community encouraged us in the decision to migrate.');?></h3>
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
<section class="section--reasons">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="section--heading-1"><?php echo $l->t('Why migrate:');?><br> <?php echo $l->t('ownCloud vs Nextcloud');?></h1>
            <div class="floated-quote">
            <blockquote>Nextcloud is much more stable than ownCloud</blockquote>
                <div class="referee">
                    <a href="https://www.cloudwards.net/diy-cloud-storage-tools/">
                        <svg class="cws-nav__logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 255.5 60"><path fill="#074B6C" d="M44.4 0h-38.8c-3.1 0-5.6 2.5-5.6 5.5v35.2c0 1.9.8 3.5 2.5 4.6l22.5 14.7 22.5-14.7c1.4-1.1 2.5-2.7 2.5-4.6v-35.2c0-3-2.5-5.5-5.6-5.5zm-8.7 37h-19c-4.8 0-8.7-4.4-8.7-9.8 0-5 3.4-9.1 7.9-9.8 1.8-3.9 5.4-6.5 9.6-6.5 5.4 0 9.8 4.2 10.8 9.8 3.6.3 6.7 3.9 6.7 8.1 0 4.6-3.2 8.2-7.3 8.2z"></path><path d="M63.9 29.7c0-6.3 3.7-12.3 10.4-12.9 3.1-.3 6 .8 8.1 3.1 0 .3-1 1.1-1.2 1.3-.4.5-.9 1-1.3 1.4-2.3-2.3-5.8-2.8-8.4-.8-2.7 2.1-3.3 5.9-3 9.1.2 2.7 1.2 5.7 3.8 7 2.8 1.5 6.1.5 8.1-1.8l1.2 1.3c.2.2 1.2 1 1.2 1.3-2.2 2.5-5.2 3.8-8.5 3.6-3.1-.2-5.9-1.5-7.8-4-1.9-2.3-2.6-5.5-2.6-8.6zM86.6 15.2h3.6c.7 0 .8-.1.8.6v21.6c0 1 .5 1.7 1.6 1.4.2 1.1.4 2.2.6 3.2.1.4-3 .4-3.3.3-1.1-.2-2.1-.7-2.6-1.8-1-1.8-.7-4.2-.7-6.2v-19.099999999999998zM95.7 32.7c0-5.1 3.4-9.8 8.8-9.8s8.9 4.7 8.9 9.8c0 5.1-3.5 9.7-8.9 9.7s-8.8-4.6-8.8-9.7zm4.4 0c0 2.7 1.1 6.2 4.4 6.2 3.3 0 4.4-3.4 4.4-6.2 0-2.7-1.1-6.2-4.4-6.2-3.3 0-4.4 3.5-4.4 6.2zM117.5 23.4h3.6c.1 0 .8-.1.8 0v9.7c0 1.1-.1 2.2.1 3.3.5 2.5 3.1 3 5.1 1.6.4-.3 1.8-1.3 1.8-1.9v-12.6c0-.3 2.2-.1 2.6-.1.4 0 1.8-.3 1.8.3v17.900000000000002c0 .6-.1.4-.7.4-.2 0-2.8.1-2.9 0l-.3-2.7c-.6.2-1.2 1.2-1.7 1.6-.8.6-1.7 1.2-2.7 1.4-1.7.4-3.8.2-5.2-.9-2.1-1.6-2.2-4.6-2.2-7-.1-3.7-.1-7.4-.1-11zM137.6 32.7c0-3.2 1.2-6.6 3.9-8.5 2.9-2.1 6.3-1.5 8.9.7-.1-2.2-.2-4.4-.2-6.6v-2.1c0-.1-.1-1 0-1.1.1-.1 1.1 0 1.2 0h2.4c.7 0 .8-.2.8.5v26c0 .7-.6.4-1.2.4h-2.1c-.5 0-.4-.5-.5-1-.1-.9 0-1.3-.8-.6-1.1.9-2.4 1.7-3.8 1.9-2.4.4-4.8-.5-6.4-2.3-1.7-1.9-2.2-4.7-2.2-7.3zm4.5 0c0 1.7.2 3.7 1.4 5 1.2 1.3 3.3 1.5 4.8.6.4-.2 1.9-1.1 1.9-1.6v-8.3c0-.5-.4-.7-.8-.9-1.6-1.1-3.9-1.3-5.4 0-1.5 1.3-1.9 3.3-1.9 5.2zM158.2 23.4h3.6c.1 0 .7-.1.8 0 .1.4.2.7.2 1.1.6 2.7 1.2 5.4 1.9 8.1l1.1 5.8c.3 0 .8-3 .9-3.4l.5-2.2 2-7.9c.2-.6.1-1.5.8-1.5h2.1c.3 0 1.3-.2 1.5 0l.2.6.4 1.8 1.2 4.5.7 2.7c.3 1.2.6 2.4.9 3.7.1.2.3 1.7.5 1.7s.4-1.8.5-2c.5-2.9 1.2-5.8 1.9-8.7l1-4.2c0-.2 3.7 0 4.1 0l-3.6 14.1c-.1.4-.9 4.5-1.2 4.5h-4c-.2 0-1 .1-1.1 0-.1-.1-.2-.7-.2-.8l-1.9-7.7c-.2-.8-.4-1.6-.5-2.4l-.4-2.1c-.2-.8-.3-1.7-.5-.4-.3 1.8-.7 3.6-1.1 5.4l-1.9 7.7c-.1.6-1.8.2-2.3.2-.3 0-2.8.1-2.8 0-2-6.2-3.6-12.4-5.3-18.6zM187.3 37c0-4.3 4.4-5.8 7.9-6.4l1.6-.3c.4-.1.7-.1 1.1-.1.5-.1.4-.3.3-.7-.2-1.1-.7-2.2-1.8-2.6-2.2-1-5 .4-6.8 1.5l-1.6-2.9c-.1-.2 3.2-1.6 3.5-1.7 1.4-.5 3-.8 4.5-.7 2.3.1 4.5 1 5.6 3.1.8 1.6 1 3.4 1 5.2v10.7h-3.3c-.6 0-.5-1.5-.6-2-.4.1-.8.5-1.1.8-.6.4-1.3.8-1.9 1.1-1.3.6-2.7.7-4 .5-2.8-.6-4.4-2.9-4.4-5.5zm4.2-.4c0 1.6 1.1 2.4 2.7 2.4.8 0 1.6-.2 2.3-.7.3-.2 1.7-1 1.7-1.4v-4.2c-2.2.4-6.7.9-6.7 3.9zM207.9 23.4c.4 0 3.6-.1 3.6 0l.2 2c.1.8-.1 1.8.6.7.8-1.2 1.8-2.3 3.2-2.8.7-.3 1.4-.4 2.1-.3.2 0 1.8.2 1.8.4l-.8 3.8c-2.5-.8-4.7.3-5.9 2.6-.5 1-.4 1.6-.4 2.7v8.6c0 .9.2 1-.8 1h-2.2c-.2 0-1.3.2-1.4 0-.2-.2 0-1.3 0-1.5v-17.2zM220.5 32.7c0-3.2 1.2-6.6 3.9-8.5 2.9-2.1 6.3-1.5 8.9.7-.1-2.2-.2-4.4-.2-6.6v-2.1c0-.1-.1-1 0-1.1.1-.1 1.1 0 1.2 0h2.4c.7 0 .8-.2.8.5v26c0 .7-.6.4-1.2.4h-2.1c-.5 0-.4-.5-.5-1-.1-.9 0-1.3-.8-.6-1.1.9-2.4 1.7-3.8 1.9-2.4.4-4.8-.5-6.4-2.3-1.7-1.9-2.2-4.7-2.2-7.3zm4.5 0c0 1.7.2 3.7 1.4 5 1.2 1.3 3.3 1.5 4.8.6.4-.2 1.9-1.1 1.9-1.6v-8.3c0-.5-.4-.7-.8-.9-1.6-1.1-3.9-1.3-5.4 0-1.5 1.3-1.9 3.3-1.9 5.2zM243.2 37.1c1.4 1.1 3 2 4.8 2.1 1.4.1 3.1-.3 3.3-2 .2-1.8-1.9-2.4-3.2-3-1.8-.7-3.7-1.4-4.9-2.9-2.1-2.6-.7-6.4 2.2-7.7 3.2-1.5 7.1-.5 9.8 1.5l-1.9 2.5c-.2.2-.1.2-.4 0-.5-.4-1.1-.7-1.7-1-1.1-.5-2.5-.6-3.6-.2-.9.4-1.5 1.4-1.2 2.3.4 1.1 1.9 1.6 2.9 1.9 2.2.8 4.9 1.6 5.9 4 .9 2.1.2 4.6-1.5 6.1-1.8 1.5-4.5 1.9-6.8 1.6-.7-.1-6.1-1.9-5.5-2.6.5-.9 1.2-1.8 1.8-2.6z"></path></svg>
                    </a>
                </div>
            </div>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers significant <a class="hyperlink" href="https://nextcloud.com/globalscale">scalability</a>, <a class="hyperlink" href="https://nextcloud.com/secure">security</a> and feature improvements over ownCloud');?> (<a class="hyperlink" href="<?php echo home_url('compare') ?>"><?php echo $l->t('see a full comparison here</a>) and our experienced support team has already helped several dozen customers with <a class="hyperlink" href="https://nextcloud.com/blog/9-german-educational-and-research-institutions-move-to-nextcloud-as-part-of-tu-berlin-migration-more-coming/">sometimes tens of thousands of users</a> migrate successfully. Our customers appreciate expert help from a German, employee-owned company set up to provide a long term relationship between customers and business. Last but not least, Nextcloud has by far the strongest expertise in large scale deployments, as is evident in our work on <a class="hyperlink" href="https://nextcloud.com/globalscale">Global Scale.</a>');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud is fully licensed under the AGPL, giving you <a class="hyperlink" href="https://nextcloud.com/blog/why-the-agpl-is-great-for-business-users/">all the benefits of open source</a> and avoiding any risk of mixing a proprietary enterprise edition with open source components.');?></p>
            <div class="floated-quote">
                <blockquote>ownCloud is (...) less feature rich and less developed than Nextcloud</blockquote>
                <div class="">
                    <a href="https://realprivacy.io/storage.php">
                        <img  class="referee"  src="<?php bloginfo('template_directory'); ?>/assets/img/compare/realprivacy.png">
                    </a>
                </div>
            </div>
            <p class="section--paragraph"><?php echo $l->t('First rate support as well as <a  class="hyperlink" href="https://nextcloud.com/blog/nextcloud-the-most-active-open-source-file-sync-and-share-project/">healthy development</a> happening in public are key to our offering. Employing over a dozen former ownCloud engineers as well as many other experienced software developers, we are in the best position to support you in keeping your data secure and easily accessible to your employees.');?></p>
            <p class="section--paragraph"><?php echo $l->t('We can help you');?> <a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('with a support subscription</a> but you can also look for');?> <a class="hyperlink" href="<?php echo home_url('partners') ?>"><?php echo $l->t('support from one of our partners</a> and of course get <a class="hyperlink" href="https://help.nextcloud.com">community support on our forums.</a>');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <p class="section--paragraph"><?php echo $l->t('We occasionally blog about our customers and some of these evaluated or migrated from ownCloud. Read their stories below.');?></p>
        <ul>
            <li><a class="hyperlink" href="https://nextcloud.com/blog/deges-handling-22-billion-worth-of-complex-infrastructure-projects/">November 11, 2019 - DEGES: handling 22 billion worth of complex infrastructure projects</a></li>
            <li><a class="hyperlink" href="https://nextcloud.com/blog/case-study-north-west-university-in-south-africa-using-nextcloud-and-collabora/">Jun 14, 2018 - Case Study: North-West University in South Africa using Nextcloud and Collabora</a></li>
            <li><a class="hyperlink" href="https://nextcloud.com/blog/9-german-educational-and-research-institutions-move-to-nextcloud-as-part-of-tu-berlin-migration-more-coming/">July 12, 2017 - 9 German Educational and Research institutions move to Nextcloud as part of TU Berlin migration, more coming</a></li>
            <li><a class="hyperlink" href="https://nextcloud.com/blog/veiligheidsregio-brabant-zuidoost-moving-to-nextcloud/">March 30, 2017 - Veiligheidsregio Brabant-Zuidoost: moving to Nextcloud</a></li>
            <li><a class="hyperlink" href="https://nextcloud.com/blog/3000-users-at-ucloud4schools-migrated-to-nextcloud-11-by-regio-it/">February 16, 2017 - 3000 users at ucloud4schools migrated to Nextcloud 11 by regio iT</a></li>
            <li><a class="hyperlink" href="https://nextcloud.com/blog/the-danish-research-and-education-network-moves-from-owncloud-to-nextcloud/">September 29, 2016 - The Danish research and education network moves from ownCloud to Nextcloud</a></li>
        </ul>
    </div>
</div>
</section>

<section class="section--migration">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
	<h1 class="section--paragraph__tittle"><?php echo $l->t('The Nextcloud migration tool');?></h1>
	<p class="section--paragraph"><?php echo $l->t('The easiest way to migrate is using our migration tool. This tool supports ownCloud 8.2 to ownCloud 10, migrating to the appropriate Nextcloud release automatically.');?></p>
    <p class="section--paragraph"><?php echo $l->t('Note that ownCloud 10.0.10 can run on PHP 7.2 while Nextcloud 12 works, at most, with PHP 7.1, complicating migration. On Ubuntu you can switch the PHP version to 7.1 via <a href="https://launchpad.net/~ondrej/+archive/ubuntu/php">this PPA.</a>');?></p>
    <p class="section--paragraph"><?php echo $l->t('Over time it has become harder and harder to migrate due to changes on both sides and mis-matches of the required PHP versions. If you run into such issues or have an ownCloud version newer than 10.0.10, you can search and ask for help <a href="https://help.nextcloud.com/search?q=migration">on our forums</a>. For custom enterprise migrations,');?> <a href="<?php echo home_url('buy') ?>"><?php echo $l->t('contact our sales team.');?></a></p>

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
    <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/QKI85Yq01wo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <p class="section--paragraph"><?php echo $l->t('In this video we show ownCloud, switch to the terminal, execute the commands to download the migrator and switch back to the browser to run it.');?></p>

	<p class="section--paragraph"><?php echo $l->t('You can do the last step manually from the command line, which is adviced on large installations where the time-out on PHP via the web interface can be a problem. You can update from ownCloud 10.0.10 and older to Nextcloud 12.0.12 after which you can use our update to move to a newer Nextcloud release. We continuously monitor new releases, test them and enable upgrading but note that ownCloud is backporting a lot of big features to \'stable\' releases, which threatens stability and might make upgrading harder in the future.');?></p>
    <h2 class="section--paragraph__title"><?php echo $l->t('The manual process');?></h2>
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

	<p class="section--paragraph"><?php echo $l->t('Note that, as ownCloud does not reliably support skipping releases, upgrades have to go through all releases between the existing ownCloud release and the desired Nextcloud release. We will support upgrades from ownCloud 8.2 and onwards. If you are on an older release and need help, please visit our <a class="hyperlink" href="https://help.nextcloud.com">community support forums</a> or');?> <a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('contact our Sales team for a custom quote.</a>');?></p>
	<h2 class="section--paragraph__title"><?php echo $l->t('Upgrade path');?></h2>
	<p class="section--paragraph"><?php echo $l->t('Depending on your current ownCloud release, you have to follow a different upgrade path. Nextcloud 9.0 is compatible with ownCloud 9.0; Nextcloud 10.0 is compatible with ownCloud 9.1. You can not skip releases like going from ownCloud 8.0 to Nextcloud 10, that would be skipping ownCloud 8.1, 8.2 and 9.0. You can upgrade from an ownCloud release to a compatible Nextcloud release or one newer. We generally recommend to move to the latest Nextcloud release that is compatible first before upgrading.');?></p>
	<p class="section--paragraph"><?php echo $l->t('This is the compatiblity overview:');?></p>
	<ul>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 9.0.x is compatible with Nextcloud 9.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 9.1.x is compatible with Nextcloud 10.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 10.0.x is compatible with Nextcloud 12.0.x');?></li>
	</ul>
	<p class="section--paragraph"><?php echo $l->t('This essentially means you can treat Nextcloud 9.0.x as an upgrade to ownCloud 9.0.x and Nextcloud 10.0.x as an upgrade to ownCloud 9.1.x');?></p>
	<p class="section--paragraph"><?php echo $l->t('Note that ownCloud 9.1.6 breaks easy upgrading to Nextcloud 10.0.5. We fixed this in 10.0.6! Similar, ownCloud 10.0.2 and 10.0.3 can only be upgraded from Nextcloud 12.0.4. We make sure we properly test the upgrade paths!');?></p>
	<p class="section--paragraph"><?php echo $l->t('These are some examples of an upgrade path. The minor release (.x below) should always be the latest bugfix release. You can find these on the changelog pages,');?> <a  class="hyperlink" href="<?php echo home_url('changelog') ?>"><?php echo $l->t('here for Nextcloud.</a>');?></p>
	<ul>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 8.0.x -> ownCloud 8.1.x -> ownCloud 8.2.x -> Nextcloud 9.0.x -> Nextcloud 10.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 8.2.x -> Nextcloud 9.0.x -> Nextcloud 10.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 9.0.x -> Nextcloud 9.0.x -> Nextcloud 10.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 9.1.x -> Nextcloud 10.0.x -> Nextcloud 11.0.x');?></li>
		<li class="section--paragraph"><?php echo $l->t('ownCloud 10.0.- -> Nextcloud 12.0.0');?></li>
	</ul>
	<p class="section--paragraph"><?php echo $l->t('When upgrading, make sure to enable apps after every upgrade step so they can run their own upgrade scripts. We have fixed this issue in Nextcloud 12: apps will no longer be disabled when upgrading on systems running PHP 7. Note that we recommend to move to Nextcloud as soon as possible, to ensure a more reliable upgrade process.');?></p>
	<p class="section--paragraph"><?php echo $l->t('If you are on a very old ownCloud release or want more details, read our advanced and detailed upgrade documentation in our blog on how to <a  class="hyperlink" href="https://nextcloud.com/blog/protect-your-privacy-time-to-upgrade-to-nextcloud-11./">protect your privacy by upgrading to Nextcloud 11 or higher.</a> Note that upgrading from a Windows Server is not supported beyond moving over the data.');?></p>
	<h2 class="section--paragraph__title"><?php echo $l->t('Settings');?></h2>
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
	<h2 class="section--paragraph__title"><?php echo $l->t('License Compliance');?></h2>
	<p class="section--paragraph"><?php echo $l->t('Nextcloud is licensed exclusively under the AGPL or less restrictive open source licenses, removing any risk of mixing incompatible licenses or other legal issues. If you have not made any changes to the code of ownCloud Server and did not develop custom ownCloud applications, you will not need to do anything to be in compliance with the open source licenses of Nextcloud. Note that theme changes or branding are unaffected by AGPL licensing. Find more information in our FAQ. Our sales team will be happy to <a class="hyperlink" href="');?><?php echo home_url('contact') ?>"><?php echo $l->t('answer any questions you have.</a>');?></p>

	<h2 class="section--paragraph__title"><?php echo $l->t('Take over of support contract');?></h2>
	<p class="section--paragraph"><?php echo $l->t('Nextcloud will honor any valid contract with ownCloud which has started before the 2nd of June 2016 for free if a new agreement is signed for a period of at least 12 months.');?></p>

	<p class="section--paragraph"><?php echo $l->t('<small>All product names and trademarks are the property of their respective owners, which might in no way be associated or affiliated with Nextcloud.</small>');?></p>
</div>
</div>
</div>
</section>
