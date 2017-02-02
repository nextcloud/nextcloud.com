<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/features.css" rel="stylesheet">
<script>
	require(["require.config"], function() {
		require(["pages/features", "modules/submenu"])
	});
</script>

<div class="background features-background second-menu"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud puts you in control');?></h1>
				<h2><?php echo $l->t('Nextcloud puts your data at your fingertips, under your control. Store your documents, calendar, contacts and photos on a server in your data center, at home or at one of our providers');?></h2>
			</div>
		</div>
	</div>
</div>
<div class="second-menu">
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#files"><?php echo $l->t('File access');?></a>
			<a href="#security"><?php echo $l->t('Security');?></a>
			<a href="#workflow"><?php echo $l->t('Workflow');?></a>
			<a href="#clients"><?php echo $l->t('Clients');?></a>
			<a href="#storage"><?php echo $l->t('External storage');?></a>
			<a href="#Calendar"><?php echo $l->t('Calendar & Contacts');?></a>
			<a href="#calls"><?php echo $l->t('Video calls');?></a>
			<a href="#Collabora"><?php echo $l->t('Collabora');?></a>
			<a href="#more"><?php echo $l->t('More');?></a>
		</div>
	</div>
</div>

<section class="section--files">
	<a name="files" id="files"></a>
	<div class="container">
		<div class="col-md-6 image--floated">
			<div class="yt-img-overlay">
				<a class="youtube" href="https://www.youtube.com/watch?v=Fe1I7wYW6hA" title="Creating anonymous upload links">
					<img  src="https://img.youtube.com/vi/Fe1I7wYW6hA/hqdefault.jpg" title="Creating anonymous upload links" />
					<div class="yt-play-btn">
						<i></i> 
					</div>
				</a>
			</div>
		</div>		
		<div class="col-md-6 feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Nextcloud gives you access to all your files wherever you are and whatever device you use.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The easy web interface allows you to share files with other users on your server, to create and send password protected public links, to let others upload files to your cloud and to get notifications on your phone and desktop when a user on another cloud server shares files directly with you. And you can do all these things from the desktop or mobile clients, too.');?></p>
			<a href="/sharing" class="button button--blue button--arrow button--large"><?php echo $l->t('Collaboration in Nextcloud');?></a>
		</div>
	</div>	
</section>

<section class="section--security">
	<a name="security" id="security"></a>
	<div class="container">
		<div class="col-md-6">
		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP.png" alt="in action" >
		</div>

		<div class="col-md-6 feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Security first');?></p>
			<p class="section--paragraph"><?php echo $l->t('We are deeply committed to protect the safety of the data of our customers. Because:');?></p>
			<p class="section--paragraph"><?php echo $l->t('we follow industry best practices around security (aligned to ISO27001c14).');?></p>
			<p class="section--paragraph"><?php echo $l->t('we offer some of the <a class="hyperlink" href="https://nextcloud.com/introducing-the-nextcloud-bug-bounty-program/" target="_blank">highest security bug bounties in the open source industry.</a>');?></p>
			<p class="section--paragraph"><?php echo $l->t('we are confident that Nextcloud offers the best security in the open source file sync and share industry.');?></p>
			<a href="/sharing" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
		</div>
	</div>
</section>

<section class="section--workflow">
	<a name="workflow" id="workflow"></a>
	<div class="container">
		<div class="col-md-6 image--floated">
			<a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/screenShoots.png" alt="in action"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('Workflow management');?></p>
			<p class="section--paragraph"><?php echo $l->t('With Nextcloud, system administrators can control and direct the flow of data between users on or between servers. Rule based file tagging and responding to these tags as well as other triggers like physical location, user group, file properties and request type enables administrators to specifically deny access to, convert, delete or retain data following business or legal requirements.
				Nextcloud puts you in control of your data and keeps it safe.');?></p>
			<a href="/sharing" class="button button--blue button--arrow button--large"><?php echo $l->t('Workflow handling');?></a>
		</div>
	</div>
</section>

<section class="section--clients">
	<a name="clients" id="clients"></a>
	<div class="container">
		<div class="col-md-6">
			<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png">
		</div>

		<div class="col-md-6 feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Mobile and desktop clients');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud clients for Android, iOS and desktop systems allow you to sync and share files, in a fully secure way through an encrypted connection. The mobile clients feature automatic upload of pictures and videos you take and can synchronize select files and folders. The clients can handle multiple accounts, show all activity happening on your server and notify you of new events such as the availability of new shares.');?></p>
		</div>
	</div>
</section>

<section class="section--storage">
	<a name="storage" id="storage"></a>
	<div class="container">
		<div class="col-md-6 image--floated">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/screenShoots_default.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('External storage');?></p>
			<p class="section--paragraph"><?php echo $l->t('The external storage feature of Nextcloud gives you access to your data wherever it is. Nextcloud can access files stored with a wide variety of popular cloud service providers such as Amazon, Google and Dropbox, but you can also access them using standard protocols such as NFS, (S)FTP, WebDAV and more. <br>
				The Encryption App can encrypt data at rest for both local and remote storage, protecting data stored on networks outside of your infrastructure. Keys can be handled by an external key management server or stored locally, on the server. Nextcloud will keep your data where it is and retrieve it over a secure communication channel whenever you need to access it.');?></p>
		</div>
	</div>
</section>

<section class="section--Calendar">
	<a name="Calendar" id="Calendar"></a>
	<div class="container">
		<div class="col-md-6">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/screenShoots_default.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('Calendar and Contacts');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Nextcloud Calendar and Contacts apps allow you to store, sync and share your plans and contacts. You can share with users or groups on your server or sync the calendar or contacts with your devices and access them wherever you are. The Calendar and Contacts app feature:');?></p>
			<p class="section--paragraph"><?php echo $l->t('Easy to use interface');?></p>
			<p class="section--paragraph"><?php echo $l->t('Private and shared calendars and addressbooks with permissions management');?></p>
			<p class="section--paragraph"><?php echo $l->t('CalDAV and CardDAV sync with third party clients both on mobile and desktop (i.e with Thunderbird)');?></p>
		</div>
	</div>
</section>

<section class="section--calls">
	<a name="calls" id="calls"></a>
	<div class="container">
		<div class="col-md-6 image--floated">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/screenShoots_default.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('Secure audio and video calls');?></p>
			<p class="section--paragraph"><?php echo $l->t('Operate your own secure and private audio/video and text chat. Your own video meeting service is accessible through browsers and dedicated apps on computers, mobile phones and tablets through the Internet or limited to an Intranet. Make a call, invite your friends and clients, and collaborate in closed groups through secure, end to end encrypted video/audio, text messaging, and document and file sharing. The Spreed.ME technology used offers peer to peer, WebRTC based communication channels which can not be intercepted even by the admin of the server. It provides an easy to use interface and can optionally interface with telephone lines, handling up to 10 participants in one session and dozens of sessions on a single server.You can integrate this secure communication in your Nextcloud server or purchase our Spreedbox appliance in one cool, aluminum cube!');?></p>
			<a href="/sharing" class="button button--blue button--arrow button--large"><?php echo $l->t('Communication');?></a>
		</div>
	</div>
</section>

<section class="section--Collabora">
	<a name="Collabora" id="Collabora"></a>
	<div class="container">
		<div class="col-md-6">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/screenShoots_default.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('Collabora Online Office');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Nextcloud Calendar and Contacts apps allow you to store, sync and share your plans and contacts. You can share with users or groups on your server or sync the calendar or contacts with your devices and access them wherever you are. The Calendar and Contacts app feature:Collabora Online is a powerful LibreOffice-based online office suite which supports all major document, spreadsheet and presentation file formats. Features:');?></p>
			<p class="section--paragraph"><?php echo $l->t('Easy to use interface');?></p>
			<p class="section--paragraph"><?php echo $l->t('Private and shared calendars and addressbooks with permissions management');?></p>
			<p class="section--paragraph"><?php echo $l->t('CalDAV and CardDAV sync with third party clients both on mobile and desktop (i.e with Thunderbird)');?></p>
		</div>
	</div>
</section>

<section class="section--more">
	<a name="more" id="more"></a>
	<div class="featurerow">
	<div class="wrap container featuregroup">
	<h1 class="section--heading-1 section--text--center"><?php echo $l->t('And much more.');?></h1>
		<div class="row">
			<div class="col-md-1 featureblock">
			<i class="icon-code-fork icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t(' Nextcloud is open source - there are no limitations and you can inspect, integrate, extend and modify Nextcloud however you want');?></p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-tags icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('Nextcloud offers an easy to use user interface which comes with search functionality, favorites, tags and even more ways to quickly reach the files you need. Full Text search is available using Apache Solr.');?></p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-file-text icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('Document editing and thumbnail previews of PDF, images, text files, office files and more');?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 featureblock">
			<i class="icon-bug icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('Integration of anti-virus scanning functionality with the anti-virus app');?></p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-puzzle-piece icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('LDAP / Active Directory integration, Kerberos and Shibboleth / SAML 2.0 support');?></p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-life-ring icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('Pre-loaded files and folders for new users. Populate a new user\'s Files area with, for example, a tutorial file, which appears when they first log in.');?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 featureblock">
			<i class="icon-key icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('Powerful, integrated logging and password policy control functionalities');?></p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-share-alt icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('Fine-grained control from mobile, desktop or the Web over data access and sharing capabilities. Pick from the list of users and groups, stored either locally or on another, authorized, server. ');?></p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-archive icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('Advanced quota management with configurable accounting of external storage');?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 featureblock">
			<i class="icon-code icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('Sharing and Provisioning REST APIs. Facilitates the integration of remote 3rd party apps');?></p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-certificate icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('Quick access to core functions for app development with the powerful Nextcloud App API and webhooks following the publication / subscription model');?></p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-paint-brush icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""><?php echo $l->t('Built in, easy to use theming');?></p>
			</div>
		</div>
	</div>
</div>
</section>

<div class="calltoaction">
	<h1 class="section--heading-2 section--text--center"><?php echo $l->t('Get started now');?></h1>
	<p class="section--paragraph section--text--center"><?php echo $l->t('Install Nextcloud server');?></p>
	<a href="/sharing" class="button button--blue button--arrow button--large"><?php echo $l->t('Install');?></a>
</div>




