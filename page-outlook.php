<head>
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer"])
	});
</script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/outlook.css">
</head>

<div class="background outlook-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Outlook Integration');?></h1>
				<h2><?php echo $l->t('Automatically upload files to replace large attachments or integrate Calendars and Contacts in Microsoft Outlook');?></p>
			</div>
		</div>
	</div>
</div>

<section class="file-sharing">
	<div class="container">
		<div class="featurerow">
			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Secure File Sharing by email');?></h1>
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
				<div data-type="youtube" data-video-id="jwhfeJlYBbM"></div>
				</div>
				<div class="col-md-6 col-md-offset-3">
					<p class="section--paragraph text-center"><?php echo $l->t('The Nextcloud Secure Sharing Outlook Add-in enables Nextcloud customers to easily and securely send files, folders or upload links to others from within Microsoft Outlook. The Add-in can replace attachments, automatically uploading files to Nextcloud and inserting a secure link in the email. It also makes it easy for users to provide others with a secure file upload link.');?></p>
				</div>
			</div>
		</div>

		<div class="featurerow">
			<div class="row">
				<div class="col-md-6 image--floated image--feature revealOnScroll">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-nw.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-nw.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 featureblock revealOnScroll">
					<p class="section--paragraph__tittle"><?php echo $l->t('Secure data and lower costs');?></p>
					<p class="section--paragraph"><?php echo $l->t('The Secure Sharing Outlook Add-in takes away the IT headache caused by risky attachments.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Storing and sharing files securely through Nextcloud ensures company policies on data availability, retention and safety can be enforced. This enables system administrators for example to make sure attachments are run through the virus scanner, certain file types are protected from being shared outside the company or that retention policies are followed.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Another significant advantage for IT departments is the savings in storage space for email servers. The add-in negates the need for storing large amounts of attachments in multiple email boxes and decreases network traffic.');?></p>

				</div>
			</div>
		</div>

		<div class="featurerow">
			<div class="row">
				<div class="col-md-6 revealOnScroll image--feature">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-options-nw.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-options-nw.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 revealOnScroll featureblock">
					<p class="section--paragraph__tittle"><?php echo $l->t('Features');?></p>
					<p class="section--paragraph"><?php echo $l->t('The Nextcloud Secure Sharing Outlook Add-in lets you pick local files and upload them to Nextcloud. It can provide a link where the recipient of the email can upload files to and enables customization (via html) of the inserted information. Admins can optionally enforce passwords which can be custom or auto-generated. A default expiration date can also be set.');?></p>
					<p class="section--paragraph"><?php echo $l->t('In addition, the Add-in supports branding and high DPI resolution. Multi Language support is also available.');?></p>
					<p class="section--paragraph"><?php echo $l->t('The Add-in can be configured to automatically upload all attachments the user added to an email starting from a configurable size, for example, all files over 200kb.');?></p>
					<p class="section--paragraph"><?php echo $l->t('New users can enjoy user-friendly setup dialog to get going, and the Upload Files / Share Public Folder option is directly available in the ‘message’ tab "');?></p>
					<p class="section--paragraph"><?php echo $l->t('The plugin works with Microsoft Outlook 2010, 2013 and 2016.');?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="file-sharing">
	<div class="container">
		<div class="featurerow">
			<div class="row">
				<div class="col-md-6 image--feature image--floated revealOnScroll">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-publiclink-nw.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-publiclink-nw.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 featureblock revealOnScroll">
					<p class="section--paragraph__tittle"><?php echo $l->t('Free for home users');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud strives to provide private cloud solution for everyone so we worked with our partner to provide a <a class="hyperlink" href="https://nextcloud.com/blog/secure-outlook-add-in-is-now-available-for-testing-in-free-as-in-beer-version/">free version of the Secure Outlook Add-in</a>. Note that the free version is only meant for home users and small organizations and lacks many of the features of the enterprise version.');?></p>
					<p class="section--paragraph"><?php echo $l->t('The free Secure Outlook Add-in features the core capabilities: sharing from your Nextcloud instance instead of sending insecure large attachments, with an optional expiration date. Branding is limited and some other features for enterprise usage are not included.');?></p>
				</div>
			</div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Free version</th>
                            <th>Enterprise version</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Upload large files to your Nextcloud server</th>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row">Pausing uploads</th>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row">Automatically upload attachments</th>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row">Shared link custom password</th>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row">Expiration date</th>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row">Custom look for shared links via HTML</th>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row">Branding</th>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">✔</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <a href="<?php echo $DOWNLOAD_OUTLOOK_ADDON_FREE; ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Get the free Outlook Add-in');?> </a>
            </div>
		</div>
	</div>
</section>

<div class="container-fluid quote">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2 featureblock revealOnScroll">
				<p class="text-center"><?php echo $l->t('Pricing for the Nextcloud Secure Sharing Outlook Add-in starts at USD 5 per user per year with discounts for larger user numbers.');?></p>
				<div class="text-center">
					<a href="/buy" class="button button--large button--arrow"><?php echo $l->t('Request a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="file-sharing">
	<div class="container">
		<div class="featurerow">
<!-- 			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Mozilla Thunderbird');?></h1> -->
			<div class="row">
				<div class="col-md-6 image--feature image--floated revealOnScroll">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/moztb.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/moztb.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 featureblock revealOnScroll">
					<p class="section--paragraph__tittle"><?php echo $l->t('Mozilla Thunderbird');?></p>
					<p class="section--paragraph"><?php echo $l->t('Users of Mozilla Thunderbird will be delighted to hear that Nextcloud also provides a <a href="https://addons.mozilla.org/en-US/thunderbird/addon/nextcloud-filelink/">Thunderbird Filelink Addon!</a>');?></p>
					<p class="section--paragraph"><?php echo $l->t('"Nextcloud for Filelink" is a Thunderbird extension which makes it easy to send large attachments with Thunderbird by automatically uploading them first to a Nextcloud server and by then inserting the link into the body of your email.');?></p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="calendas-contacts">
	<div class="container">
		<div class="featurerow">
			<h1 class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Sync Calendars and Contacts');?></h1>
			<div class="row ">
				<div class="col-md-1">
				</div>
				<div class="col-md-10 image--feature revealOnScroll">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-header.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-header.png" alt="in action" /></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 featureblock revealOnScroll">
					<p class="text-center section--paragraph"><?php echo $l->t('With the Outlook CalDav Synchronizer integration with Nextcloud, Outlook users can easily sync their events, tasks and contacts between Microsoft Outlook and their Nextcloud server.');?></p>
				</div>
			</div>
		</div>

		<div class="featurerow">
			<div class="row ">
				<div class="col-md-6 image--floated image--feature revealOnScroll">
						<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-settings.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-settings.png" alt="in action" /></a>
				</div>

				<div class="col-md-6 featureblock revealOnScroll">
					<p class="section--paragraph__tittle"><?php echo $l->t('What it does');?></p>
					<p class="section--paragraph"><?php echo $l->t('The CalDAV and CardDAV plugin offers two-way sync for CalDAV calendars and tasks, CardDAV contacts and can also handle the Google native Contacts and Tasks API.');?></p>
					<p class="section--paragraph"><?php echo $l->t('The plugin handles Outlook categories, mapping CalDAV server colors to Outlook category colors and syncing calendars and tasks to the categories. The plugin also handles timezones and recurring events with exceptions and can deal with Outlook custom properties.');?></p>
				</div>
			</div>
		</div>

		<div class="featurerow">
			<div class="row ">
				<div class="col-md-6 image--feature revealOnScroll">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-about.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-about.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 featureblock revealOnScroll">
					<p class="section--paragraph__tittle"><?php echo $l->t('Features');?></p>
					<p class="section--paragraph"><?php echo $l->t('The Outlook CalDav Synchronizer supports:</br>
					SSL/TLS, also with self-signed certificates and proxy;</br>
					Auto discovery of calendars and address books;</br>
					Configurable sync time range filter;</br>
					Time-triggered-sync and sync changes from Outlook immediately;</br>
					and it can use server settings from an Outlook IMAP/POP3 account profile.');?></p>
					<div class="row">
						<div class="wrapper--buttons">
							<a href="https://nextcloud.com/blog/nextcloud-offers-caldav-synchronizer-for-outlook-users/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
							<a href="https://github.com/aluxnimm/outlookcaldavsynchronizer/releases" class="button button--blue button--arrow button--large"><?php echo $l->t('Get it');?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
// $(function () {
// });
</script>
