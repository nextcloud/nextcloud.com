<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/groupware.css?v=3" rel="stylesheet">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta name=”Description” content="Integrated communication, collaboration and planning capabilities for Nextcloud.">
</head>
<div class="background groupware-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Groupware');?></h1>
				<h2><?php echo $l->t('Team planning and email made easy');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1 video">
			<div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/555693729?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Accessibility themes.mp4"></iframe></div>
		</div>
    </div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
<!-- 			<p class="section--paragraph text-center"><?php echo $l->t('Modern organizations rely on always-available access to communication and planning through browser and mobile applications to improve productivity in their teams.');?></p> -->
			<p class="section--paragraph text-center"><?php echo $l->t('Nextcloud Groupware offers easy-to-use web mail, calendaring and contacts that helps your team get things done quicker and easier, integrated with Nextcloud Files.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--overview">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/mobile.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Easy access, anywhere');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('An efficient, modern and easy-to-use web interface for small or large teams.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Less distractions and deep integration in other Nextcloud products means more productivity, wherever you are!');?></p>
		</div>
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/permissions.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Ultimate security');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('An open source, self-hosted product.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Emails, calendars and contacts are stored on your own infrastructure, without any third party ever gaining access.');?></p>
		</div>
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/storage.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Deep integration');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Native integration into iOS, Android, macOS, Windows, Linux, Outlook and Thunderbird.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Simple deployment, configuration and integration lower costs and decrease risk while leveraging your existing IT investments.');?></p>
		</div>
	</div>
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="text-center"><?php echo $l->t('Improve team productivity now with the leading content collaboration platform.');?></p>
            <div class="text-center morebuttondiv">
                <a href="<?php echo home_url('buy') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--keyfeatures">
<div class="container">
    <div class="row">
        <h2 class="text-center"><?php echo $l->t('Key features');?></h2>
    </div>
	<div class="row">
		<div class="col-md-6 image--feature new-img">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/mail_threaded_view.png"><img alt="<?php echo $l->t('screenshot of mail reading emails');?>" class="overlay-trigger img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mail_threaded_view.png" /></a>
        </div>
        <div class="col-md-6"><h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Mail');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Send and receive emails in a breeze');?></p>
			<p class="section--paragraph"><?php echo $l->t('<ul>
			<li>Multiple accounts with unified inbox</li>
			<li>Recognizes travel itineraries and adds them to calendar</li>
			<li>Supports end-to-end encryption using OpenPGP</li>
			</ul>
			<br>
			<small><strong>Note:</strong> Nextcloud Mail is a client for IMAP servers;<br>Nextcloud does not include a mail server.</small>
			');?></p>
        </div>
	</div>
    <div class="row">
		<div class="col-md-6 image--feature">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/mail_mailbox_management.png"><img alt="<?php echo $l->t('screenshot of mailbox management in action');?>" class="overlay-trigger img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mail_mailbox_management.png" /></a><br />
			<?php echo $l->t('Mailbox management');?>
        </div>
		<div class="col-md-6 image--feature">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/mail_itinerary.png"><img alt="<?php echo $l->t('screenshot of mail itinerary reading in action');?>" class="overlay-trigger img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mail_itinerary.png" /></a><br />
            <?php echo $l->t('Adding an itinerary to the Calendar');?>
        </div>
	</div>
	<div class="row">
		<div class="col-md-6 image--floated image--feature">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar.png"><img class="overlay-trigger img-responsive featureimg" alt="<?php echo $l->t('pic of calendar in action');?>" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar.png" /></a>
        </div>
        <div class="col-md-6"><h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Calendar');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Schedule work and meetings online');?></p>
			<p class="section--paragraph"><?php echo $l->t('<ul>
			<li>Create and share multiple calendars</li>
            <li>Integrate external calendar resources (WebCal)</li>
			<li>Book resources through a busy view or plan a Talk meeting</li>
			</ul>
			');?></p>
        </div>
	</div>
    <div class="row">
		<div class="col-md-6 image--feature">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar_list_view.png"><img alt="<?php echo $l->t('Calendar list view');?>" class="overlay-trigger img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar_list_view.png" /></a><br />
			<?php echo $l->t('Calendar list view');?>
        </div>
		<div class="col-md-6 image--feature">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar_day_view.png"><img alt="<?php echo $l->t('Calendar day view');?>" class="overlay-trigger img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar_day_view.png" /></a><br />
            <?php echo $l->t('Calendar day view');?>
        </div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<img class="overlay-trigger img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/contacts-nw.png" />
        </div>
        <div class="col-md-6"><h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Contacts');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Keep your relations organized');?></p>
			<p class="section--paragraph"><?php echo $l->t('<ul>
			<li>Track birthdays of your contacts</li>
			<li>Share your address books with your team</li>
			<li>Sync your contacts with phones and other devices</li>
			</ul>
			');?></p>
        </div>
	</div>
    <div class="row">
        <div class="col-md-6 image--floated">
            <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/570275577?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="User defined groups in Nextcloud"></iframe></div>
        </div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('User-defined group management');?></h3>
            <p class="section--paragraph"><?php echo $l->t('In Contacts, users can define their own, custom groups, named Circles. These can be managed in various ways, including with invitations, through an open listing where users can join with or without an approval step, with designated sub-managers and so on.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Users can share with these groups the same way as administrator-defined Nextcloud groups. Users can add members of a circle to a conversation, share a folder to a circle, assign a task to a circle and so on.');?></p>
        </div>
    </div>
	<div class="row">
		<div class="col-md-6 image--feature new-img">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/deck-projects.png"><img class="overlay-trigger img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/deck-projects.png" alt="a project in deck" /></a>
        </div>
        <div class="col-md-6"><h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Deck');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Manage your work with others');?></p>
			<p class="section--paragraph"><?php echo $l->t('<ul>
			<li>Create any number of private or shared Kanban-style task boards</li>
			<li>Drag\'n\'drop cards, assign them to team members and set due dates</li>
			<li>Use checklists, attach files & export boards</li>
			</ul>
			');?></p>
        </div>
	</div>
    <div class="row">
		<div class="col-md-6 image--feature">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/deck_modal_card_view.png"><img alt="<?php echo $l->t('Viewing a card in Deck');?>" class="overlay-trigger img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/deck_modal_card_view.png" /></a><br />
			<?php echo $l->t('Viewing a card in Deck');?>
        </div>
		<div class="col-md-6 image--feature">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/deck_in_calendar.png"><img alt="<?php echo $l->t('Deck integration in Calendar');?>" class="overlay-trigger img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/deck_in_calendar.png" /></a><br />
            <?php echo $l->t('Deck integration in Calendar');?>
        </div>
	</div>
	<div class="row">
        <div class="col-md-6">
            <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/570271904?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Chat and project management integration"></iframe></div>
        </div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('Integrated groupware, chat and project management');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud features tightly integrated chat, project management, mail, calendaring and more. Chat messages can be directly transformed into tasks, task deadlines are visible in the Calendar and files can be attached to a task from the sharing dialog.');?></p>
            <p class="section--paragraph"><?php echo $l->t('A single platform means there is no need to juggle different accounts, keep track of where in the many cloud platforms the latest version of a document is floating around, or worry about security threats and invisible costs.');?></p>
            <a href="<?php echo home_url('content-collaboration-platform') ?>" class="overlay-trigger button button--blue button--arrow button--large"><?php echo $l->t('Benefits of a single platform');?></a>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud fluently integrates into your existing infrastructure while also providing its own. Note that Nextcloud Mail is a client for IMAP-infrastructure; Nextcloud does not include a mail server.');?></p>
        </div>
	</div>
</div>
</section>

<section class="section--advantages">
<div class="container-fluid quote">
    <div class="row">
        <h2 class="text-center"><?php echo $l->t('Unique advantages');?></h2>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <h3 class="section--paragraph__title"><?php echo $l->t('Integration');?></h3>
            <p class="section--paragraph"><?php echo sprintf($l->t('
            Nextcloud Groupware is designed to deeply integrate in your infrastructure, using existing user directories and file storage systems.<br>
            <a class="hyperlink" href="%s">Learn more about user management</a><br>
            <a class="hyperlink" href="%s">Learn more about storage technologies</a>
            '), home_url('usermanagement'), home_url('storage'));?></p>
        </div>
        <div class="col-sm-4">
            <h3 class="section--paragraph__title"><?php echo $l->t('Security');?></h3>
            <p class="section--paragraph"><?php echo $l->t('
            Nextcloud Groupware is engineered from the ground up to be secure with the latest web protections and secure login technologies like Brute Force Protection and 2-factor authentication.') ?><br>
            <a class="hyperlink" href="<?php echo home_url('secure') ?>"><?php echo $l->t('Learn more about security</a>
            ');?></p>
        </div>
        <div class="col-sm-4">
            <h3 class="section--paragraph__title"><?php echo $l->t('Control');?></h3>
            <p class="section--paragraph"><?php echo $l->t('
            Nextcloud Groupware is built to host yourself and work with existing SMTP and IMAP servers. This simplifies compliance by putting you in control. Nextcloud supports you with excellent monitoring and audit-ready logging functionality.') ?><br>
            <a class="hyperlink" href="<?php echo home_url('monitoring') ?>"><?php echo $l->t('Learn more about monitoring and logging</a>
            ');?></p>
        </div>
    </div>
    <div class="row">
         <p class="section--paragraph text-center"><a class="button button-medium" href="#pricing"><?php echo $l->t('See pricing');?></a></p>
    </div>
</div>
</section>

<section class="section--outlook">
	<div class="container">
		<div class="featurerow">
			<h2 class="text-center"><?php echo $l->t('Sync Calendars and Contacts<br>with Microsoft Outlook');?></h1>
			<div class="row ">
				<div class="col-md-1">
				</div>
				<div class="col-md-10 image--feature">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/integration.png" alt="in action" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 featureblock">
					<p class="text-center section--paragraph"><?php echo $l->t('With the Outlook CalDav Synchronizer, Outlook users can easily sync their events, tasks and contacts between Microsoft Outlook and their Nextcloud server.');?></p>
				</div>
			</div>
		</div>

		<div class="featurerow">
			<div class="row ">
				<div class="col-md-6 image--floated image--feature">
						<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-settings.png"><img class="overlay-trigger img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-settings.png" alt="in action" /></a>
				</div>

				<div class="col-md-6 featureblock">
					<h3 class="section--paragraph__title"><?php echo $l->t('Full Outlook synchronization');?></h3>
					<p class="section--paragraph"><?php echo $l->t('The CalDAV and CardDAV plugin offers two-way sync for CalDAV calendars and tasks, CardDAV contacts and can also handle the Google native Contacts and Tasks API.');?></p>
					<p class="section--paragraph"><?php echo $l->t('The plugin handles Outlook categories, mapping CalDAV server colors to Outlook category colors and syncing calendars and tasks to the categories. The plugin also handles timezones and recurring events with exceptions and can deal with Outlook custom properties.');?></p>
				</div>
			</div>
		</div>

		<div class="featurerow">
			<div class="row ">
				<div class="col-md-6 image--feature">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/calendar-about.png"><img class="overlay-trigger img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/calendar-about.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 featureblock">
					<h3 class="section--paragraph__title"><?php echo $l->t('Features');?></h3>
					<p class="section--paragraph"><?php echo $l->t('The Outlook CalDav Synchronizer supports:
					<ul>
					<li>SSL/TLS, also with self-signed certificates and proxy;</li>
					<li>Auto discovery of calendars and address books;</li>
					<li>Configurable sync time range filter;</li>
					<li>Time-triggered-sync and sync changes from Outlook immediately;</li>
					<li>and it can use server settings from an Outlook IMAP account profile.</li>
					</ul>');?></p>
<!--					<div class="row">
						<div class="wrapper--buttons">
							<a href="https://nextcloud.com/blog/nextcloud-offers-caldav-synchronizer-for-outlook-users/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
							<a href="https://github.com/aluxnimm/outlookcaldavsynchronizer/releases" class="button button--blue button--arrow button--large"><?php echo $l->t('Get it');?></a>
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</section>

<section class="file-sharing">
	<div class="container">
		<div class="featurerow">
<!-- 			<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Mozilla Thunderbird');?></h1> -->
			<div class="row">
				<div class="col-md-6 image--feature image--floated">
					<img class="overlay-trigger img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/moztb-2.png" alt="in action" />
				</div>
				<div class="col-md-6 featureblock">
					<h3 class="section--paragraph__title"><?php echo $l->t('Mozilla Thunderbird');?></h3>
					<p class="section--paragraph"><?php echo $l->t('Thanks to the Mozilla Thunderbird Lightning Calendar add-in and the Cardbook Thunderbird Contacts add-in, Nextcloud Groupware integrates great into Thunderbird.');?></p>
					<p class="section--paragraph"><a class="hyperlink" href="<?php echo $DOCUMENTATION_USER; ?>pim/sync_thunderbird.html"><?php echo $l->t('Learn more in our documentation.');?></a></p>
				</div>
			</div>
<!-- 		</div> -->
	</div>
</section>

<a id="pricing">
<section class="section--contact quote">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph text-center"><?php echo $l->t('
            Nextcloud Groupware starts at EUR 750/year for 50 users with volume discounts.
            ');?></p>
        </div>
        <div class="text-center morebuttondiv">
            <a href="<?php echo home_url('buy') ?>" class="button button-button--large button--arrow"><?php echo $l->t('Contact sales for a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a>
        </div>
    </div>
</div>
</section>
<?php require get_template_directory().'/overlay.php'; ?>

<?php
include get_template_directory() . '/verticals.php';
