<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('Security and Authentication');?></h1>
	<p><?php echo $l->t('Nextcloud provides a wide range of security capabilities, from server side encryption and the use of TLS encryption for file transfers to brute force protection and 2-factor authentication.');?></p>
	<div class="row">
		<div class="col-md-7">
			<h2><?php echo $l->t('Brute force protection and 2FA');?></h2>
			<p><?php echo $l->t('Brute Force Protection logs invalid login attempts and slows down multiple attempts from a single IP address (or IPv6 range). This feature is enabled by default and protects against an attacker who tries to guess a password from one or more users.');?></p>
			<p><?php echo $l->t('The login system supports pluggable authentication including two-factor authentication and device specific passwords, complete with a list of connected browsers and devices on the users’ personal page.');?></p>
			<p><?php echo $l->t('Active sessions can be invalidated through the list, by removing the user in the admin settings or by changing passwords. This also works for LDAP users. Admins can enable or disable two-factor authentication for users on the command line.');?></p>
			<p><?php echo $l->t('Nextcloud supports SAML 2.0 (“Shibboleth”) authentication and has extensive LDAP directory integration.');?></p>
		</div>
		<div class="col-md-5">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP-wee.png" alt="in action" /></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-home.png" alt="in action" />
		</div>
		<div class="col-md-7">
			<h2><?php echo $l->t('Server side encryption');?></h2>
			<p><?php echo $l->t('Server side encryption protects files on the Nextcloud server or external storage from being seen by third parties. As files are encrypted and decrypted on the Nextcloud server, this does not protect from malicious system administrators or a compromised server but it provides an additional layer of protection for cases when server hardware gets stolen.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<p><?php echo $l->t('Encryption is particularly useful when used in combination with external storage as the third party storage system will never see unencrypted files.');?></p>
			<p><?php echo $l->t('Nextcloud supports pluggable encryption key handling. If you have an external key server, this can be made to work with Nextcloud.');?></p>
			<p><?php echo $l->t('Administrators can set a system wide recovery key for encrypted files. This ensures that, even when users lose their password, files can always be decrypted. Encrypted files can be shared but after changing encryption settings, shares will have to be re-shared.');?></p>
			<p><?php echo $l->t('Learn how to use server side encryption in our <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank" rel="tooltip" title="Server Side Encryption Configuration">documentation</a>');?></p>
		</div>
		<div class="col-md-5">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-recovery.png" alt="in action" />
		</div>
	</div>
</div>

<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('File Access Control and Workflows');?></h1>
	<div class="row">
		<div class="col-md-6 featureblock">
			<h2 class="featuretitle"><?php echo $l->t('Access on your terms');?></h2>
			<p class=""><?php echo $l->t('Through File Access Control and automatic file tagging, Nextcloud gives administrators control over data access by enabling them to define strict rules requests need to adhere to. If users in certain groups or geographic regions should not be given access to certain file types or if data with a specific tag should not be shared outside the company, administrators can make sure their Nextcloud instance enforces these rules.');?></p>
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
			<h2 class="featuretitle"><?php echo $l->t('Define automated Workflows and retention');?></h2>
			<p class=""><?php echo $l->t('The Workflow engine expands these capabilities, enabling administrators to start any kind of actions based on these triggers, for example converting document file types to PDF upon upload by members of a specified group or emailing files put in a specified folder with a given tag to a given mail address.');?></p>
			<p><?php echo $l->t('File retention and deletion can also be controlled based on tags set manually or automatically, ensuring legal or practical requirements for the longevity of data lifespans can be enforced.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2 class="featuretitle"><?php echo $l->t('File access control at home');?></h2>
			<p class=""><?php echo $l->t('Home users will find that the File Access Control app and other workflow tools can be used to prevent accidental sharing of sensitive data, adding an additional layer of protection to Nextcloud.');?></p>
			<p><?php echo $l->t('The example on the right ensures that files with the "protected" tag are not accessible outside the home network nor synced by the clients. <a href="https://nextcloud.com/?p=869" target="_blank">Learn more in our blog</a>.');?></p>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/FileAccessControl-at-home.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/FileAccessControl-at-home.png" class="img-responsive featureimg" /></a>
		</div>
	</div>
</div>

	<a name="monitoring"></a>
<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('Monitoring your Nextcloud server');?></h1>
	<div class="row">
		<div class="col-md-8">
			<p><?php echo $l->t('The Server Information app provides a way for admins to monitor the health and performance of a Nextcloud system. Besides the graphical UI, an API endpoint provided makes it possible for system administrators to import this data in their monitoring app so they can keep an eye on Nextcloud operations from the same place they monitor the rest of their infrastructure.');?></p>
			<p><?php echo $l->t('The <a href="http://opennms.org/" target="_blank">openNMS monitoring app</a> already has support for monitoring Nextcloud 10 systems and <a href="https://github.com/opennms-config-modules/nextcloud" target="_blank">the configuration module</a> can be easily modified for other tools like Nagios.');?></p>
		</div>
		<div class="col-md-4">
	<!-- 		<a href="https://www.youtube.com/watch?v=9-JEmlH2DEg" target="_blank" style="border: none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/federation/federation.gif" alt="in action" /></a> -->
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-wee.png" alt="in action" /></a>
		</div>
	</div>
	<p><?php echo $l->t('The app lets you track:');?></p>
	<ul>
		<li><?php echo $l->t('CPU load and memory usage');?></li>
		<li><?php echo $l->t('Number of active users over time');?></li>
		<li><?php echo $l->t('Number of shares in various categories');?></li>
		<li><?php echo $l->t('storage statistics');?></li>
		<li><?php echo $l->t('Server settings like PHP version, database type and size, memory limits and more');?></li>
	</ul>
</div>

</div></div>

<div class="wrap container featuregroup">
<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('Screenshots');?></h1>
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
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/nextcloud-users.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/nextcloud-users-wee.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/grafana-dashboard.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/grafana-dashboard-wee.png" class="img-responsive featureimg" /></a>
		</div>
		
		
	</div>
</div>
