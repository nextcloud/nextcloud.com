<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/monitoring.css" rel="stylesheet">
<!--<script>
	require(["require.config"], function() {
		require(["pages/clients"])
	});
</script>-->
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

<section class="section--desktop">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Track file activity');?></p>
			<p class="section--paragraph"><?php echo $l->t('The nextcloud Activity app gives users a clear view on what is happening with their files. It tracks file modifications, downloads of shares and changes to comments or tags, providing an overview in the browser or via email notifications and an RSS feed.');?></p>
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/activity-config.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/activity-config.png" alt="activity settings" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/activity.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/activity.png" alt="activity overview" /></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-wee.png" alt="in action" /></a>
		</div>
		<div class="col-md-8 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Server Information');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud scales to millions of users and at that scale it is important to keep an eye on the health of a system. The Server Information app provides a way for admins to monitor the state and performance of a Nextcloud server installation. Besides the graphical UI, an API endpoint provided makes it possible for system administrators to import this data in their monitoring app so they can keep an eye on Nextcloud operations from the same place they monitor the rest of their infrastructure.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Monitoring and systems intelligence tools <a href="http://opennms.org/" target="_blank">openNMS</a> and <a href="https://splunkbase.splunk.com/apps/#/search/nextcloud/">Splunk</a> already have support for monitoring Nextcloud 10+ systems and <a href="https://github.com/opennms-config-modules/nextcloud" target="_blank">the openNMS configuration module</a> can be easily modified for other tools like Nagios.');?></p>
		</div>
	</div>
	<p class="section--paragraph revealOnScroll"><?php echo $l->t('The app lets you track:');?>
	<ul>
		<li><?php echo $l->t('CPU load and memory usage');?></li>
		<li><?php echo $l->t('Number of active users over time');?></li>
		<li><?php echo $l->t('Number of shares in various categories');?></li>
		<li><?php echo $l->t('storage statistics');?></li>
		<li><?php echo $l->t('Server settings like PHP version, database type and size, memory limits and more');?></li>
	</ul></p>
</div>
</section>
<div class="wrap container-widest">
	<div class="featurerow">
		<h1 class="featuretitle"><?php echo $l->t('Screenshots');?></h1>
		<div class="row">
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-full.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-full.png" /></a>
			</div>
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-API.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-API.png" /></a>
			</div>
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/activity.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/activity.png" /></a>
			</div>
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/activity-config.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/activity-config.png" /></a>
			</div>
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/nextcloud-users.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/nextcloud-users-wee.png" class="img-responsive featureimg" /></a>
			</div>
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/grafana-dashboard.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/grafana-dashboard-wee.png" class="img-responsive featureimg" /></a>
			</div>
		</div>
	</div>
</div>
