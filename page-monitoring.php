<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/monitoring.css" rel="stylesheet">
<!--<script>
	require(["require.config"], function() {
		require(["pages/clients"])
	});
</script>-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<div class="background monitoring-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Monitoring your Nextcloud server');?></h1>
				<h2><?php echo $l->t('Keep an eye on what happens with your files and check the health of your server');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <p class="section--paragraph"><?php echo $l->t('With your file sync and share solution central to the productivity of hundreds, thousands or even millions of users it is crucial to have an overview of its performance and service. Your users want to know what is happening to their files. And last but not least, so does your legal department!');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud has your back with our Server Information, Activities and Auditing apps.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--activity">
<div class="container">
    <h1 class="featuretitle revealOnScroll"><?php echo $l->t('What happens with my files?');?></h1>
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<a target="_blank" href="<?php bloginfo('template_directory'); ?>/assets/img/features/activity.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/activity-nw.png" alt="activity overview" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Track file activity');?></p>
			<p class="section--paragraph"><?php echo $l->t('The nextcloud Activity app gives users a clear view on what is happening with their files.');?></p>
			<p class="section--paragraph"><?php echo $l->t('It provides users with an overview of recent changes like:
			<ul>
                <li>New or deleted files in shared folders</li>
                <li>File modifications</li>
                <li>Download of shared files</li>
                <li>New comments or tags</li>
                <li>Calendar invitations</li>
                <li>Incoming calls or chat requests</li>
                <li>and more!</li>
			</ul>');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a target="_blank" href="<?php bloginfo('template_directory'); ?>/assets/img/features/activity-config.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/activity-config-nw.png" alt="activity settings" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Configurable');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Activity app allows users to enable or disable showing any of the events in their stream and to receive mail notifications only for the type of events they require.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Users can see what happened in the browser, choose to receive email notifications or follow changes through an RSS feed.');?></p>

		</div>
	</div>
</div>
</section>
<section class="section--monitoring">
<div class="container">
	<h1 class="featuretitle revealOnScroll"><?php echo $l->t('How is the server doing?');?></h1>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a target="_blank" href="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-full.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-nw.png" alt="in action" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Server Information');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud scales to millions of users and at that scale it is important to keep an eye on the health of a system. The Server Information app provides a way for admins to monitor the state and performance of a Nextcloud server installation. Besides the graphical UI, an API endpoint provided makes it possible for system administrators to import this data in their monitoring app so they can keep an eye on Nextcloud operations from the same place they monitor the rest of their infrastructure.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<a target="_blank" href="<?php bloginfo('template_directory'); ?>/assets/img/features/grafana-dashboard.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-app-nw.png" class="img-responsive featureimg" /></a>
        </div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Integration in tools');?></p>
			<p class="section--paragraph"><?php echo $l->t('Monitoring and systems intelligence tools <a href="http://opennms.org/" target="_blank">openNMS</a> and <a href="https://splunkbase.splunk.com/apps/#/search/nextcloud/">Splunk</a> already have support for monitoring Nextcloud 10+ systems and <a href="https://github.com/opennms-config-modules/nextcloud" target="_blank">the openNMS configuration module</a> can be easily modified for other tools like Nagios.');?></p>
		</div>
	</div>
	<div class="row">
        <div class="col-md-6 revealOnScroll">
				<a target="_blank" href="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-API.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-API-nw.png" /></a>
        </div>
        <div class="col-md-6 revealOnScroll">
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('The app and its API lets you track:');?>
            <ul>
                <li><?php echo $l->t('CPU load and memory usage');?></li>
                <li><?php echo $l->t('Number of active users over time');?></li>
                <li><?php echo $l->t('Number of shares in various categories');?></li>
                <li><?php echo $l->t('storage statistics');?></li>
                <li><?php echo $l->t('Server settings like PHP version, database type and size, memory limits and more');?></li>
            </ul></p>
        </div>
	</div>
</div>
</section>
<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
			<div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('Get our datasheet');?></h2>
                <form name="whitepaper" method="post" action="../auditing-whitepapersubmit">
                    <p><label for="email"><?php echo $l->t('Download our free <br /> auditing and monitoring datasheet!');?><br>
                    <td colspan="2">
                    <div class="">
                        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                    </div>
                    </td>
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large" type="submit" value=" Get the datasheet "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/monitoring-thumbnail-banner.png"/>
	</div>
</section>
<section class="section--auditing">
<div class="container">
	<h1 class="featuretitle revealOnScroll"><?php echo $l->t('Auditing logs');?></h1>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
            <a target="_blank" href="<?php bloginfo('template_directory'); ?>/assets/img/features/auditlog.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/auditlog-nw.png" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph"><?php echo $l->t('Nextcloud logs data in the nextcloud.log file provided in the root of its data directory. You can optionally record a full audit trail there, provided the ‘info’ log level is set. This can be used by Data Loss Prevention and Mobile Device Management tools as user agent information is available alongside extensive user, IP and date/time logs.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Audit logs provided include user session information, file handling, user management, sharing and other actions.');?></p>
		</div>
	</div>
</div>
</section>
