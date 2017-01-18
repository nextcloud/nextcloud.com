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
		<h1><?php echo $l->t('Secure File Sharing by email');?></h1>
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10 yt-img-overlay">
				<a class="youtube" href="https://www.youtube.com/watch?v=luWFBBcvkyc" title="Nextcloud Secure Sharing Outlook Add-in">
				<img  src="https://img.youtube.com/vi/luWFBBcvkyc/hqdefault.jpg" title="Nextcloud Secure Sharing Outlook Add-in" />
				<div class="yt-play-btn">
					<i></i> 
				</div>
				</a>
			</div>
			<div class="col-md-6 col-md-offset-3 text-center">
				<p class=""><?php echo $l->t('The Nextcloud Secure Sharing Outlook Add-in enables Nextcloud customers to easily and securely sent files, folders or upload links to others from within Microsoft Outlook. The Add-in can replace attachments, automatically uploading files to Nextcloud and inserting a secure link in the email. It also makes it easy for users to provide others with a secure file upload link.');?></p>
			</div>
		</div>
	</div>

	<div class="featurerow">
		<div class="row">
			<div class="col-md-6 featureblock revealOnScroll">
				<h2 class="featuretitle"><?php echo $l->t('Secure data and lower costs');?></h2>
				<p class=""><?php echo $l->t('The Secure Sharing Outlook Add-in takes away the IT headache caused by risky attachments.');?></p>
				<p class=""><?php echo $l->t('Storing and sharing files securely through Nextcloud ensures company policies on data availability, retention and safety can be enforced. This enables system administrators for example to make sure attachments are run through the virus scanner, certain file types are protected from being shared outside the company or retention policies are followed.');?></p>
				<p class=""><?php echo $l->t('Another significant advantage for IT departments is the savings in storage space for email servers. The add-in negates the need for storing large amounts of attachments in multiple email boxes and decreases network traffic.');?></p>
				
			</div>
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/upload.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/upload.png" alt="in action" /></a>
			</div>
		</div>
	</div>

	<div class="featurerow">
		<div class="row">
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/options.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/options.png" alt="in action" /></a>
			</div>
			<div class="col-md-6 revealOnScroll featureblock">
				<h2 class="featuretitle"><?php echo $l->t('Features');?></h2>
				<p><?php echo $l->t('The Nextcloud Secure Sharing Outlook Add-in lets you pick local files and upload them to Nextcloud. It can provide a link where the recipient of the email can upload files to and enables customization (via html) of the inserted information. Admins can optionally enforce passwords which can be custom or auto-generated. A default expiration date can also be set.');?></p>
				<p><?php echo $l->t('The plugin works with Microsoft Outlook 2010, 2013 and 2016.');?></p>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock text-center revealOnScroll">
				<p class=""><?php echo $l->t('Pricing for the Nextcloud Secure Sharing Outlook Add-in starts at USD 5 per user per year with discounts for larger user numbers.');?></p>
				<div class="text-center morebuttondiv">
					<a href="/buy" class="button button--large button--arrow"><?php echo $l->t('Request a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="featurerow">
		<h1><?php echo $l->t('Sync Calendars and Contacts');?></h1>
		<div class="row ">
			<div class="col-md-1">
			</div>
			<div class="col-md-10 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-header.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-header.png" alt="in action" /></a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 featureblock text-center revealOnScroll">
				<p class=""><?php echo $l->t('With the Outlook CalDav Synchronizer integration with Nextcloud, Outlook users can easily sync their events, tasks and contacts between Microsoft Outlook and their Nextcloud server.');?></p>
			</div>
		</div>
	</div>

	<div class="featurerow">
		<div class="row ">
			<div class="col-md-6 featureblock revealOnScroll">
				<h2 class="featuretitle"><?php echo $l->t('What it does');?></h2>
				<p class=""><?php echo $l->t('The CalDAV and CardDAV plugin offers two-way sync for CalDAV calendars and tasks, CardDAV contacts and can also handle the Google native Contacts and Tasks API.');?></p>
				<p class=""><?php echo $l->t('The plugin handles Outlook categories, mapping CalDAV server colors to Outlook category colors and syncing calendars and tasks to the categories. The plugin also handles timezones and recurring events with exceptions and can deal with Outlook custom properties.');?></p>
			</div>
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-settings.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-settings.png" alt="in action" /></a>
			</div>
		</div>
	</div>

	<div class="featurerow">
		<div class="row ">
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-about.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-about.png" alt="in action" /></a>
			</div>
			<div class="col-md-6 featureblock revealOnScroll">
				<h2 class="featuretitle"><?php echo $l->t('Features');?></h2>
				<p><?php echo $l->t('The Outlook CalDav Synchronizer supports:</br>
				SSL/TLS, also with self-signed certificates and proxy;</br>
				Auto discovery of calendars and address books;</br>
				Configurable sync time range filter;</br>
				Time-triggered-sync and sync changes from Outlook immediately;</br>
				and it can use server settings from an Outlook IMAP/POP3 account profile.');?></p>
				<div class="row">
					<div class="col-md-6">
						<div class="text-center morebuttondiv">
							<a href="https://nextcloud.com/blog/nextcloud-offers-caldav-synchronizer-for-outlook-users/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?> <i class="icon-arrow-circle-o-right icon"></i></a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="text-center morebuttondiv">
							<a href="https://sourceforge.net/projects/outlookcaldavsynchronizer/" class="button button--blue button--arrow button--large"><?php echo $l->t('Get it');?> <i class="icon-arrow-circle-o-right icon"></i></a>
						</div>
					</div>
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
