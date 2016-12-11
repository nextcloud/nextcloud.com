<div class="featurerow">
	<h1 class="featuretitle page-header"><?php echo $l->t('File Access Control and Workflows');?></h1>
	<div class="row">
		<div class="col-md-6 featureblock">
			<h2 class="featuretitle"><?php echo $l->t('Access on your terms');?></h2>
			<p class=""><?php echo $l->t('Through File Access Control and automatic file tagging, Nextcloud gives administrators control over data access by enabling them to define strict rules requests need to adhere to. If users in certain groups or geographic regions should not be given access to certain file types or if data with a specific tag should not be shared outside the company, administrators can make sure their Nextcloud instance enforces these rules.');?></p>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control-wee.png" /></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention-wee.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<h2 class="featuretitle"><?php echo $l->t('Define automated Workflows and retention');?></h2>
			<p class=""><?php echo $l->t('The Workflow engine expands these capabilities, enabling administrators to start any kind of actions based on these triggers, for example converting document file types to PDF upon upload by members of a specified group or emailing files put in a specified folder with a given tag to a given mail address.');?></p>
			<p><?php echo $l->t('File retention and deletion can also be controlled based on tags set manually or automatically, ensuring legal or practical requirements for the longevity of data lifespans can be enforced.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2 class="featuretitle"><?php echo $l->t('File access control at home');?></h2>
			<p class=""><?php echo $l->t('Home users will find that the File Access Control app and other workflow tools can be used to prevent accidental sharing of sensitive data, adding an additional layer of protection to Nextcloud.');?></p>
			<p><?php echo $l->t('The example on the right ensures that files with the "protected" tag are not accessible outside the home network nor synced by the clients. <a href="https://nextcloud.com/?p=869" target="_blank">Learn more in our blog</a>.');?></p>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/FileAccessControl-at-home.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/FileAccessControl-at-home.png" class="img-responsive featureimg" /></a>
		</div>
	</div>
</div>

	<a name="monitoring"></a>
<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('Monitoring your Nextcloud server');?></h1>
	<div class="row">
		<div class="col-md-6">
			<p><?php echo $l->t('The nextcloud Activity app gives users a clear view on what is happening with their files. It tracks file modifications, downloads of shares and changes to comments or tags, providing an overview in the browser or via email notifications and an RSS feed.');?></p>
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/activity-config.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/activity-config.png" alt="activity settings" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/activity.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/activity.png" alt="activity overview" /></a>
		</div>
	</div>
	<h2 class="featuretitle"><?php echo $l->t('Server Information');?></h2>
	<div class="row">
		<div class="col-md-4">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-wee.png" alt="in action" /></a>
		</div>
		<div class="col-md-8">
			<p><?php echo $l->t('Nextcloud scales to millions of users and at that scale it is important to keep an eye on the health of a system. The Server Information app provides a way for admins to monitor the state and performance of a Nextcloud server installation. Besides the graphical UI, an API endpoint provided makes it possible for system administrators to import this data in their monitoring app so they can keep an eye on Nextcloud operations from the same place they monitor the rest of their infrastructure.');?></p>
			<p><?php echo $l->t('Monitoring and systems intelligence tools <a href="http://opennms.org/" target="_blank">openNMS</a> and <a href="https://splunkbase.splunk.com/apps/#/search/nextcloud/">Splunk</a> already have support for monitoring Nextcloud 10+ systems and <a href="https://github.com/opennms-config-modules/nextcloud" target="_blank">the openNMS configuration module</a> can be easily modified for other tools like Nagios.');?></p>
		</div>
	</div>
	<p><?php echo $l->t('The app lets you track:');?></p>
	<ul>
		<li><?php echo $l->t('CPU load and memory usage');?></li>
		<li><?php echo $l->t('Number of active users over time');?></li>
		<li><?php echo $l->t('Number of shares in various categories');?></li>
		<li><?php echo $l->t('storage statistics');?></li>
		<li><?php echo $l->t('Server settings like PHP version, database type and size, memory limits and more');?></li>
	</ul>
</div>

</div></div>

<div class="wrap container featuregroup">
<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('Screenshots');?></h1>
	<div class="row">
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP-login.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP-login.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-home.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-home.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-default.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-default.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-full.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-full.png" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-API.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring-API.png" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/activity.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/activity.png" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/activity-config.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/activity-config.png" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/nextcloud-users.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/nextcloud-users-wee.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/grafana-dashboard.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/grafana-dashboard-wee.png" class="img-responsive featureimg" /></a>
		</div>
		
		
	</div>
</div>
