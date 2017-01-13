<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/outlook.css">
<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/old/vendor/jquery.youtubepopup.min.js"></script>

<div class="background outlook-background"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Outlook Integration');?></h1>
				<h2><?php echo $l->t('Automatically upload files to replace large attachments or integrate Calendars and Contacts in Microsoft Outlook');?></h2>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="featurerow">
		<div class="row ">
			<div class="col-md-5 yt-img-overlay">
				<a class="youtube" href="https://www.youtube.com/watch?v=9CGQ3dJkDdI" title="Nextcloud 11 in action">
				<img  src="https://img.youtube.com/vi/9CGQ3dJkDdI/hqdefault.jpg" title="Nextcloud 11 in action" />
				<div class="yt-play-btn">
					<i></i> 
				</div>
				</a>
			</div>
			<div class="col-md-6">
				<h1><?php echo $l->t('Secure File Sharing by email');?></h1>
				<p class=""><?php echo $l->t('The Nextcloud Outlook Secure Sharing Add-in enables Nextcloud customers to easily and securely sent files, folders or upload links to others. The Add-in automatically uploads files to Nextcloud and inserts a secure link in the email. It also enables users to provide the recipient with a place where they can securely upload files.');?></p>
			</div>
		</div>
	</div>

	<div class="featurerow">
		<div class="row">
			<div class="col-md-6 featureblock">
				<h2 class="featuretitle"><?php echo $l->t('Secure data and lower costs');?></h2>
				<p class=""><?php echo $l->t('The Secure Sharing Outlook Add-in takes away the IT headache caused by risky attachments.');?></p>
				<p class=""><?php echo $l->t('Storing and sharing files securely through Nextcloud ensures company policies on data availability, retention and safety can be enforced. This enables system administrators for example to make sure attachments are run through the virus scanner, certain file types are protected from being shared outside the company or retention policies are followed.');?></p>
				<p class=""><?php echo $l->t('Another significant advantage for IT departments is the savings in storage space for email servers. The add-in negates the need for storing large amounts of attachments in multiple email boxes and decreases network traffic.');?></p>
				
			</div>
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/upload.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/upload.png" alt="in action" /></a>
			</div>
		</div>
	</div>

	<div class="featurerow">
		<div class="row">
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/options.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/options.png" alt="in action" /></a>
			</div>
			<div class="col-md-6 featureblock">
				<h2 class="featuretitle"><?php echo $l->t('Features');?></h2>
				<p><?php echo $l->t('The Nextcloud Secure Sharing Outlook Add-in supports:');?></p>
				<ul>
				<li><?php echo $l->t('Picking local files and uploading them to Nextcloud');?></li>
				<li><?php echo $l->t('Providing a link where recipient can upload files to');?></li>
				<li><?php echo $l->t('Customization (via html) of the link insert code');?></li>
				<li><?php echo $l->t('Optionally enforced automatic or custom shared link password generation;');?></li>
				<li><?php echo $l->t('optionally default expiry date.');?></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="featurerow">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock text-center">
				<p class=""><?php echo $l->t('Pricing for the Nextcloud Secure Sharing Outlook Add-in starts at USD 5 per user per year with discounts for larger user numbers.');?></p>
				<div class="text-center morebuttondiv">
					<a href="/buy" class="btn btn-primary morebutton"><?php echo $l->t('Request a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="calendar-background-image">
		<h1>Calendar and Contacts syncing</h1>
</div>
<div class="container">
	<div class="featurerow">
		<div class="row ">
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar.png" alt="in action" /></a>
			</div>
			<div class="col-md-6 featureblock">
				<h1><?php echo $l->t('Sync Calendars and Contacts');?></h1>
				<p class=""><?php echo $l->t('Thanks to a collaboration btween the developers behind the Outlook CalDav Synchronizer and Nextcloud, Outlook users can now easily sync their events, tasks and contacts between Outlook and Nextcloud servers.');?></p>
			</div>
		</div>
	</div>

	<div class="featurerow">
		<div class="row ">
			<div class="col-md-6 featureblock">
				<h2 class="featuretitle"><?php echo $l->t('What it does');?></h2>
				<p class=""><?php echo $l->t('The CalDAV and CardDAV plugin offers two-way sync for CalDAV calendars and tasks, CardDAV contacts and can also handle the Google native Contacts and Tasks API.');?></p>
				<p class=""><?php echo $l->t('The plugin handles Outlook categories, mapping CalDAV server colors to Outlook category colors and syncing calendars and tasks to the categories. The plugin also handles timezones and recurring events with exceptions and can deal with Outlook custom properties.');?></p>
			</div>
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-settings.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-settings.png" alt="in action" /></a>
			</div>
		</div>
	</div>


	<div class="featurerow">
		<div class="row ">
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-about.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-about.png" alt="in action" /></a>
			</div>
			<div class="col-md-6 featureblock">
				<h2 class="featuretitle"><?php echo $l->t('Features');?></h2>
				<p><?php echo $l->t('The Outlook CalDav Synchronizer supports:');?></p>
				<ul>
				<li><?php echo $l->t('SSL/TLS, also with self-signed certificates and proxy');?></li>
				<li><?php echo $l->t('Auto discovery of calendars and address books');?></li>
				<li><?php echo $l->t('Configurable sync time range filter');?></li>
				<li><?php echo $l->t('Time-triggered-sync and sync changes from Outlook immediately');?></li>
				<li><?php echo $l->t('Use server settings from Outlook IMAP/POP3 account profile');?></li>
				</ul>
				<div class="text-center morebuttondiv">
					<a href="https://nextcloud.com/blog/nextcloud-offers-caldav-synchronizer-for-outlook-users/" class="btn btn-primary morebutton"><?php echo $l->t('Learn more in our blog');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
				<div class="text-center morebuttondiv">
					<a href="https://sourceforge.net/projects/outlookcaldavsynchronizer/" class="btn btn-primary morebutton"><?php echo $l->t('Get the plugin');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
// $(function () {
	$("a.youtube").YouTubePopup({ hideTitleBar: true });
// });
</script>
