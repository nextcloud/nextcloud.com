<head>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer"])
	});
</script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/outlook.css?v=1">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-nw.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-nw.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-nw.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-nw.png">
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

<section class="section--file-sharing">
	<div class="container">
		<div class="row featurerow">
			<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Secure File Sharing by email');?></h1>
			<div class="row featurerow">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
				<div data-type="youtube" data-video-id="GPkzeM6jqKE"></div>
				<iframe width="100%" height="550" src="https://www.youtube-nocookie.com/embed/GPkzeM6jqKE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 col-md-offset-3">
					<p class="section--paragraph text-center"><?php echo $l->t('The Sendent Outlook Add-in enables Nextcloud customers to easily and securely send files, folders or upload links to others from within Microsoft Outlook.<br>The Add-in can replace attachments, automatically uploading files to Nextcloud and insert a secure link in the email. It also makes it easy for users to provide others with a secure file upload link.');?></p>
				</div>
			</div>
		</div>


        <div class="row featurerow">
            <div class="col-md-6 image--floated image--feature">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-email-share-link.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-email-share-link.png" alt="in action" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__title"><?php echo $l->t('Secure data and lower costs');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The Sendent Outlook Add-in takes away the IT headache caused by risky attachments.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Storing and sharing files securely through Nextcloud ensures company policies on data availability, retention and safety can be enforced. This enables system administrators for example to make sure attachments are run through the virus scanner, certain file types are protected from being shared outside the company or that retention policies are followed.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Another significant advantage for IT departments is the savings in storage space for email servers. The add-in negates the need for storing large amounts of attachments in multiple email boxes and decreases network traffic.');?></p>
                 <p class="section--paragraph"><?php echo $l->t('Improve communication and collaboration today. Contact us to learn how we can help you.');?></p>
                <div class="morebuttondiv">
                    <a href="<?php echo home_url('buy') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
                </div>
            </div>
        </div>
	</div>
</section>

<section class="section--benefits">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center"><?php echo $l->t('Key benefits');?></h2>
        <div class="row featurerow">
            <div class="col-md-offset-1 col-md-5">
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('Keep inbox growth under control');?></li>
                    <li><?php echo $l->t('Sent files of any size');?></li>
                    <li><?php echo $l->t('Easily share file upload links');?></li>
                </ul></p>
            </div>
            <div class="col-md-6">
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('Protect the content and attachments of mails with Secure Mail');?></li>
                    <li><?php echo $l->t('Use File Access Control to limit access by unauthorized users');?></li>
                    <li><?php echo $l->t('Use Workflow to automatically remove attachments after a set time');?></li>
                </ul></p>
            </div>
        </div>
    </div>
</div>
</section>


<section class="section--file-sharing">
	<div class="container">
        <div class="row featurerow">
            <div class="col-md-6 image--feature">
                    <iframe width="100%" height="350" src="https://www.youtube-nocookie.com/embed/PZs7-qGkupk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__title"><?php echo $l->t('Features');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The Sendent Outlook Add-in turns email attachments into Nextcloud links, manually or automatically. It can insert upload links where the recipient of the email can upload files to. Users can add passwords and expiration dates, the admin can enforce these settings if needed.');?></p>
                <p class="section--paragraph"><?php echo $l->t('New users can enjoy the user-friendly setup dialog to get going, and the Upload Files / Share Public Folder option is directly available in the ‘message’ tab.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Add-in can be configured to automatically upload all attachments the user added to an email starting from a configurable size, for example, all files over 200kb.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Users can also use the easy file selection dialog to insert links to files on their Nextcloud storage.');?></p>
            </div>
        </div>
        <div class="row featurerow">
            <div class="col-md-6 image--feature image--floated">
                  <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-secure-email.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-secure-email.png" alt="in action" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__title"><?php echo $l->t('Secure Mail');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The Secure Mail feature protects the content as well as attachments from emails. It uploads the email body and can automatically create guest accounts for recipients. With account protections like 2-factor authentication, brute-force protection and suspiscious login detection, this provides the level of security that banks, notaries or hospitals need to exchange confidential information with their clients or patients.');?></p>
                <h3 class="section--paragraph__title"><?php echo $l->t('Other features:');?></h3>
                <ul>
                    <li><?php echo $l->t('Users can pick files from the local desktop or from the Nextcloud server');?></li>
                    <li><?php echo $l->t('Activity tracker notifies sender about file uploads/downloads');?></li>
                    <li><?php echo $l->t('App follows server policy enforcement options');?></li>
                    <li><?php echo $l->t('App features customizable upload path');?></li>
                    <li><?php echo $l->t('Domain whitelisting');?></li>
                    <li><?php echo $l->t('Multi Language support');?></li>
                    <li><?php echo $l->t('Branding');?></li>
                    <li><?php echo $l->t('Server app for configuration');?></li>
                </ul>
                <p class="section--paragraph"><?php echo $l->t('The add-in works with Microsoft Outlook 2010, 2013, 2016 and 365 for Windows.');?></p>
            </div>
        </div>
	</div>
</section>

<section class="section--file-sharing">
	<div class="container">
        <div class="row featurerow">
            <div class="col-md-4 image--feature">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-share-files-uploading.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-share-files-uploading.png" alt="in action" /></a> <br /><?php echo $l->t('Uploading files');?>
            </div>
            <div class="col-md-4 image--feature">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-share-files-password.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-share-files-password.png" alt="in action" /></a><br /><?php echo $l->t('Setting a password');?>
            </div>
            <div class="col-md-4 image--feature">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-configuration-server-app.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-configuration-server-app.png" alt="in action" /></a><br /><?php echo $l->t('Configuration in the Nextcloud app');?>
            </div>
        </div>
	</div>
</section>

</section>


<section>
<div class="container">
    <div class="row">
        <h2 class="text-center"><?php echo $l->t('Feature highlight');?></h2>
    </div>
    <div class="row">
        <h3 class="section--paragraph__title"><?php echo $l->t('Secure Mail');?></h3>
        <p class="section--paragraph"><?php echo $l->t('The Sendent Outlook Add-in includes a secure mailbox feature. This feature protects the contents (body) of email from interception by providing the recipient with a notification that a new email was received. The recipient then has to log in on their (guest) account to access the email and its attachments.');?></p>
        <p class="section--paragraph"><?php echo $l->t('The body of the email is shown with the file attachments. Each email is a folder, linked to in the email notification.');?></p>
        <p class="section--paragraph"><?php echo $l->t('In the screenshots below, the user sends the link and password to the recipient by email. The user can take out the password and send it through another channel. Alternatively, when a guest account is set up for the recipient, the Outlook add-in will detect this and instead share the message to the guest account and include an internal link in the email. The recipient will have to log into their guest account to access the email.');?></p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-secure-email.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-secure-email.png" alt="Secure Mail - Email as it will be sent to recipient" class="img-responsive"></a><br />
            <?php echo $l->t('Email as it will be sent to recipient');?>
        </div>
        <div class="col-md-6">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-mailbox-recipient-view-of-secured-email-in-Nextcloud.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-mailbox-recipient-view-of-secured-email-in-Nextcloud.png" alt="Secure Mail - Recipient view in Secure Mail in Nextcloud" class="img-responsive"></a><br />
            <?php echo $l->t('Recipient view in Secure Mail in Nextcloud');?>
        </div>
    </div>
</div>
</section>

<section class="section--whitepaper quote">
	<div class="container">
        <div class="row featurerow">
			<div class="col-lg-8">
                <h2><?php echo $l->t('Get our datasheet');?></h2>
                <form name="whitepaper" method="post" action="<?php echo home_url('whitepaper-submit') ?>">
                    <p><label for="email"><?php echo $l->t('Download our Outlook Add-in datasheet!');?><br>
                    <td colspan="2">
                    <div class="">
                        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="58">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Subscribe me to the monthly Nextcloud newsletter');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--large" type="submit" value=" Get the datasheet "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/outlook-thumbnail-banner.png"/>
	</div>
</section>

<section class="file-sharing">
	<div class="container">
        <div class="row featurerow">
            <div class="col-md-6 image--feature image--floated">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/outlook-pick-date-public-share.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-pick-date-public-share.png" alt="in action" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__title"><?php echo $l->t('Free for home users');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud strives to provide private cloud solution for everyone so we worked with our partner to provide a <a class="hyperlink" href="https://nextcloud.com/blog/secure-outlook-add-in-is-now-available-for-testing-in-free-as-in-beer-version/">free version of the Secure Outlook Add-in</a>. Note that the free version is only meant for home users and small organizations and lacks many of the features of the enterprise version.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The free Secure Outlook Add-in features the core capabilities: sharing from your Nextcloud instance instead of sending insecure large attachments, with an optional expiration date. Branding is limited and some other features for enterprise usage are not included.');?></p>
            </div>
        </div>
        <div class="row featurerow">
            <div class="col-md-8 col-md-offset-2">
            <h3 class="section--paragraph__title"><?php echo $l->t('Version comparison');?></h3>
            <p class="section--paragraph"><?php echo $l->t('There are four versions of the Outlook Add-in: Free, Basic, Professional and Premium.');?></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th><?php echo $l->t('Free');?></th>
                            <th><?php echo $l->t('Basic');?></th>
                            <th><?php echo $l->t('Professional');?></th>
                            <th><?php echo $l->t('Premium');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $l->t('Upload large files to your Nextcloud server');?></th>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row"><?php echo $l->t('Pausing uploads');?></th>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row"><?php echo $l->t('Set expiration date');?></th>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row"><?php echo $l->t('Automatically upload attachments');?></th>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row"><?php echo $l->t('Shared link custom password');?></th>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row"><?php echo $l->t('Enterprise deployment capabilities');?></th>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row"><?php echo $l->t('Activity Tracker');?></th>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row"><?php echo $l->t('Nextcloud app for central configuration');?></th>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row"><?php echo $l->t('Custom look for shared links via HTML');?></th>
                            <td class="text-center red">❌</td>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">✔</td>
                            <td class="text-center green">✔</td>
                        </tr>
                        <tr>
                            <th scope="row">Secure Mail <small>(<?php echo $l->t('create and send message through guest account');?>)</small></th>
                            <td class="text-center red">❌</td>
                            <td class="text-center green">❌</td>
                            <td class="text-center green">❌</td>
                            <td class="text-center green">✔</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row featurerow">
            <div class="text-center">
                <a href="<?php echo $DOWNLOAD_OUTLOOK_ADDON_FREE; ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Get the free Outlook Add-in');?> </a>
            </div>
		</div>
	</div>
</section>

<section class="section--quote quote">
<div class="container">
    <div class="row featurerow">
        <div class="col-md-8 col-md-offset-2 featureblock">
            <p class="text-center"><?php echo $l->t('Pricing for the Sendent Outlook Add-in starts at €6,48 per user per year with discounts for larger user numbers.');?></p>
            <div class="text-center">
                <a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Request a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="file-sharing">
	<div class="container">
<!-- 			<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Mozilla Thunderbird');?></h1> -->
        <div class="row featurerow">
            <div class="col-md-6 image--feature image--floated">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/moztb.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/moztb.png" alt="in action" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__title"><?php echo $l->t('Mozilla Thunderbird');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Users of Mozilla Thunderbird will be delighted to hear that there is a <a href="https://addons.thunderbird.net/en-US/thunderbird/addon/filelink-nextcloud-owncloud/">Thunderbird Filelink Addon!</a>');?></p>
                <p class="section--paragraph"><?php echo $l->t('This Thunderbird extension makes it easy to send large attachments with Thunderbird by automatically uploading them first to a Nextcloud server and by then inserting the link into the body of your email.');?></p>
            </div>
        </div>
	</div>
</section>


<section class="calendas-contacts">
	<div class="container">
		<div class="row featurerow">
			<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Sync Calendars and Contacts');?></h1>
			<div class="row  featurerow">
				<div class="col-md-1">
				</div>
				<div class="col-md-10 image--feature">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-header.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-header.png" alt="in action" /></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 featureblock">
					<p class="text-center section--paragraph"><?php echo $l->t('With the Outlook CalDav Synchronizer integration with Nextcloud, Outlook users can easily sync their events, tasks and contacts between Microsoft Outlook and their Nextcloud server.');?></p>
				</div>
			</div>
		</div>

		<div class="row featurerow">
            <div class="col-md-6 image--floated image--feature">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-settings.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-settings.png" alt="in action" /></a>
            </div>

            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__title"><?php echo $l->t('What it does');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The CalDAV and CardDAV plugin offers two-way sync for CalDAV calendars and tasks, CardDAV contacts and can also handle the Google native Contacts and Tasks API.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The plugin handles Outlook categories, mapping CalDAV server colors to Outlook category colors and syncing calendars and tasks to the categories. The plugin also handles timezones and recurring events with exceptions and can deal with Outlook custom properties.');?></p>
            </div>
		</div>

		<div class="row featurerow">
            <div class="col-md-6 image--feature">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-about.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-about.png" alt="in action" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__title"><?php echo $l->t('Features');?></h3>
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
</section>
<section class="file-sharing">
	<div class="container">
<!-- 			<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Mozilla Thunderbird');?></h1> -->
        <div class="row featurerow">
            <div class="col-md-6 image--feature image--floated">
                <img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/moztb-2.png" alt="in action" />
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__title"><?php echo $l->t('Mozilla Thunderbird');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Thanks to the Mozilla Thunderbird Lightning Calendar add-in and the Cardbook Thunderbird Contacts add-in, Nextcloud Groupware integrates great into Thunderbird.');?></p>
                <p class="section--paragraph"><a class="hyperlink" href="<?php echo $DOCUMENTATION_USER; ?>pim/sync_thunderbird.html"><?php echo $l->t('Learn more in our documentation.');?></a></p>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
// $(function () {
// });
</script>
