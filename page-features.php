	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/velocity.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/velocity.ui.min.js"></script>
<?php get_template_part( 'templates/parts/title'); ?>
<div class="sub-nav">
	<a href="#files"><span class="avoidwrap"><?php echo $l->t('File access & sharing');?></span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#control"><span class="avoidwrap"><?php echo $l->t('Security & control');?></span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#clients"><span class="avoidwrap"><?php echo $l->t('Mobile & desktop clients');?></span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#externalstorage"><span class="avoidwrap"><?php echo $l->t('External storage');?></span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#calendarcontacts"><span class="avoidwrap"><?php echo $l->t('Calendar & Contacts');?></span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#webrtc"><span class="avoidwrap"><?php echo $l->t('Secure audio & video calls');?></span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#onlineoffice"><span class="avoidwrap"><?php echo $l->t('Collabora Online Office');?></span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#video"><span class="avoidwrap"><?php echo $l->t('Videos of Nextcloud in action');?></span></a>
</div>
</div>
<div class="featurerow">
	<div class="row ">
		<div class="col-md-5">
			<a href="https://demo.nextcloud.com"><img alt="Try for yourself!" class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/serverwebui.png" /></a>
		</div>
		<div class="col-md-7 featureblock">
			<h1><?php echo $l->t('Nextcloud puts you in control');?></h1>
			<p class=""><?php echo $l->t('Nextcloud puts your data at your fingertips, under your control. You store your photos, calendar, contacts and documents on a server of your choosing, be it at home, a rented server or at one of our <a href="/providers">providers</a>. Your existing data can stay on that FTP drive at work, dropbox or a NAS you have at home, while you access it through Nextcloud.');?></p>
			<p class=""><?php echo $l->t('A trusted solution giving you access to all data you care about in one convenient place!');?></p>
			<div class="text-center morebuttondiv">
				<a href="https://demo.nextcloud.com" class="btn btn-primary morebutton" target="_blank"><?php echo $l->t('Try it out now!');?> <i class="icon-arrow-circle-o-right icon"></i></a>
			</div>
		</div>
	</div>
</div>

<a name="files"></a>
<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('File access and sharing');?></h1>
	<div class="row">
		<div class="col-md-6 featureblock">
			<h2 class="featuretitle"><?php echo $l->t('Your files everywhere');?></h2>
			<p class=""><?php echo $l->t('Nextcloud gives you access to all your files wherever you are and whatever device you use.');?></p>
			<p class=""><?php echo $l->t('The easy web interface allows you to share files with other users on your server, to create and send password protected public links, to let others upload files to your cloud and to get notifications on your phone and desktop when a user on another cloud server shares files directly with you. And you can do all these things from the desktop or mobile clients, too.');?></p>
			<p><?php echo $l->t('Nextcloud makes sharing and collaboration easy!');?></p>
			<div class="text-center morebuttondiv">
				<a href="/sharing" class="btn btn-primary morebutton"><?php echo $l->t('Collaboration in Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="yt-img-overlay">
				<a class="youtube" href="https://www.youtube.com/watch?v=Fe1I7wYW6hA" title="Creating anonymous upload links">
					<img  src="https://img.youtube.com/vi/Fe1I7wYW6hA/hqdefault.jpg" title="Creating anonymous upload links" />
					<div class="yt-play-btn">
						<i></i> 
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<a name="control"></a>
<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('Security and control');?></h1>
	<div class="row">
		<div class="col-md-7 featureblock">
			<h2 class="featuretitle"><?php echo $l->t('Security first');?></h2>
			<p><?php echo $l->t('We are deeply committed to protect the safety of the data of our customers. Because:');?></p>
			<ul>
			<li><?php echo $l->t('our development follows industry best practices around security');?></li>
			<li><?php echo $l->t('we implement a wide variety of security features and hardening');?></li>
			<li><?php echo $l->t('we offer the <a href="https://nextcloud.com/introducing-the-nextcloud-bug-bounty-program/" target="_blank">highest security bug bounties in the open source industry</a>');?></li>
			</ul>
			<p><?php echo $l->t('we are confident that Nextcloud offers the best security in the open source file sync and share industry.');?></p>
			<div class="text-center morebuttondiv">
				<a href="/secure" class="btn btn-primary morebutton"><?php echo $l->t('Security in Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
			</div>
		</div>
		<div class="col-md-5">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP-wee.png" alt="in action" /></a>
		</div>

	</div>
	<div class="row">
		<div class="col-md-6 featureblock">
			<h2 class="featuretitle"><?php echo $l->t('Workflow management');?></h2>
			<p class=""><?php echo $l->t('With Nextcloud, system administrators can control and direct the flow of data between users on or between servers. Rule based file tagging and responding to these tags as well as other triggers like physical location, user group, file properties and request type enables administrators to specifically deny access to, convert, delete or retain data following business or legal requirements.');?></p>
			<p><?php echo $l->t('Nextcloud puts you in control of your data and keeps it safe.');?></p>
			<div class="text-center morebuttondiv">
				<a href="/workflow" class="btn btn-primary morebutton"><?php echo $l->t('Workflow handling in Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
			</div>
		</div>
		<div class="col-md-6">
			<!--<div class="yt-img-overlay">
				<a class="youtube" href="https://www.youtube.com/watch?v=Fe1I7wYW6hA" title="Creating anonymous upload links">
					<img  src="https://img.youtube.com/vi/Fe1I7wYW6hA/hqdefault.jpg" title="Creating anonymous upload links" />
					<div class="yt-play-btn">
						<i></i> 
					</div>
				</a>
			</div>-->
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control-wee.png" />
		</div>
	</div>
	<h2 class=""><?php echo $l->t('Monitoring activity on your Nextcloud server');?></h2>
	<div class="row">
		<div class="col-md-4">
	<!-- 		<a href="https://www.youtube.com/watch?v=9-JEmlH2DEg" target="_blank" style="border: none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/federation/federation.gif" alt="in action" /></a> -->
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/monitoring.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-wee.png" alt="in action" /></a>
		</div>
		<div class="col-md-8">
			<p><?php echo $l->t('The Server Information app provides a way for admins to monitor the health and performance of a Nextcloud system. Besides the graphical UI, an API endpoint provided makes it possible for system administrators to import this data in their monitoring app so they can keep an eye on Nextcloud operations from the same place they monitor the rest of their infrastructure.');?></p>
			<p><?php echo $l->t('The nextcloud Activity app gives users a clear view on what is happening with their files. It tracks file modifications, downloads of shares and changes to comments or tags, providing an overview in the browser or via email notifications and an RSS feed.');?></p>
			<div class="text-center morebuttondiv">
				<a href="/workflow#monitoring" class="btn btn-primary morebutton"><?php echo $l->t('Monitoring in Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
			</div>
		</div>
	</div>
</div>



<a name="clients"></a>
<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('Mobile and desktop clients');?></h1>
	<div class="row">
		<div class="col-md-4">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/android.gif" />
		</div>
		<div class="col-md-8 featureblock">
			<p class=""><?php echo $l->t('
			Nextcloud clients for Android, iOS and desktop systems allow you to sync and share files, in a fully secure way through an encrypted connection. The mobile clients feature automatic upload of pictures and videos you take and can synchronize select files and folders. The clients can handle multiple accounts, show all activity happening on your server and notify you of new events such as the availability of new shares.');?></p>
<!--		</div>
	</div>
	<div class="row">
		<div class="col-md-10 featureblock">-->
			<p class=""><?php echo $l->t('While not all clients support all features yet, here is a non-exhaustive list of what you can do today:');?></p>
			<ul>
				<li><?php echo $l->t('Perform file operations such as rename, delete and move');?></li>
				<li><?php echo $l->t('Show previews of documents, photos and videos and choose between list and grid view');?></li>
				<li><?php echo $l->t('Mark files as favourites to keep them in sync with the server and available offline');?></li>
				<li><?php echo $l->t('Upload pictures taken with your phone\'s camera automatically');?></li>
				<li><?php echo $l->t('Share files directly with users on your Nextcloud, with other cloud servers or via public link');?></li>
				<li><?php echo $l->t('Get notified of shares or other events');?></li>
				<li><?php echo $l->t('Show all activity related to your files');?></li>
			</ul>
			</p>
		</div>
<!--		<div class="col-md-2">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/ios.gif" />
		</div>-->
	</div>
</div>

<a name="externalstorage"></a>
<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('External storage');?></h1>
	<div class="row">
		<div class="col-md-7">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png" />
		</div>
		<div class="col-md-5 featureblock">
			<p class=""><?php echo $l->t('The external storage feature of Nextcloud gives you access to your data wherever it is. Nextcloud can access files stored with a wide variety of popular cloud service providers such as Amazon, Google and Dropbox, but you can also access them using standard protocols such as (S)FTP, WebDAV and more.');?></p>
			<p class=""><?php echo $l->t('The Encryption App can encrypt data at rest for both local and remote storage, protecting data stored on networks outside of your infrastructure. Keys can be handled by an external key management server or stored locally, on the server. Nextcloud will keep your data where it is and retrieve it over a secure communication channel whenever you need to access it.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 featureblock">
			<p class=""><?php echo $l->t('External storage features:');?></p>
			<ul>
				<li><?php echo $l->t('Support for SWIFT, (S)FTP, WebDAV, Amazon S3, Google Drive, Dropbox, SMB/CIFS/Windows Network Drive');?><!--TODO , Sharepoint coming in Nc 11 --> <?php echo $l->t('and OpenStack Object Storage (Swift).');?></li>
				<li><?php echo $l->t('Full server side encryption with optional external key management');?></li>
				<li><?php echo $l->t('Encryption can be enabled or disabled for each external storage system');?></li>
				<li><?php echo $l->t('Administrators can control the list of external storage types users have access to');?></li>
			</ul>
		</div>
		<div class="col-md-7">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage2.png" />
		</div>
	</div>
</div>

<a name="calendarcontacts"></a>
<div class="featurerow">
	<h1 class="featuretitle"><?php echo $l->t('Calendar and Contacts');?></h1>
	<div class="row">
		<div class="col-md-6">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar.png" />
		</div>
		<div class="col-md-6 featureblock">
			<p style="padding-bottom: 30px;"><?php echo $l->t('The Nextcloud Calendar and Contacts apps allow you to store, sync and share your plans and contacts. You can share with users or groups on your server or sync the calendar or contacts with your devices and access them wherever you are.');?></p>
		</div>
<!--	</div>
	<div class="row">-->
		<div class="col-md-6">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/contacts.png" />
		</div>
		<div class="col-md-6 featureblock">
			<p style="margin-top: -80px;" class="">
			<?php echo $l->t('The Calendar and Contacts app feature:');?></p>
			<ul>
				<li><?php echo $l->t('Easy to use interface');?></li>
				<li><?php echo $l->t('Private and shared calendars and addressbooks with permissions management');?></li>
				<li><?php echo $l->t('CalDAV and CardDAV sync with third party clients both on mobile and desktop (i.e with Thunderbird)');?></li>
			</ul>
			</p>
		</div>
	</div>
</div>

<a name="webrtc"></a>
<div class="featurerow">
	<h1  class="featuretitle"><?php echo $l->t('Secure audio and video calls');?></h1>
	<div class="row">
		<div class="col-md-5">
			<div class="yt-img-overlay">
				<a class="youtube" href="https://www.youtube.com/watch?v=egLqRqb4sHA" title="Spreedbox explained">
					<img class="img-responsive featureimg" src="https://img.youtube.com/vi/egLqRqb4sHA/hqdefault.jpg" title="Spreedbox explained" />
					<div class="yt-play-btn">
						<i></i> 
					</div>
				</a>
			</div>
			<div class="text-center morebuttondiv">
				<p><?php echo $l->t('<a href="/spreedbox" class="btn btn-primary morebutton">The Spreedbox <i class="icon-arrow-circle-o-right icon"></i></a>');?></p>
				<br/>
				<p><a href="https://spreed.me" class="btn btn-primary morebutton" target="_blank"><?php echo $l->t('Test Spreed.ME');?> <i class="icon-arrow-circle-o-right icon"></i></a></p>
			</div>
		</div>
		<div class="col-md-7">
			<p><?php echo $l->t('Operate your own secure and private audio/video and text chat. Your own video meeting service is accessible through browsers and dedicated apps on computers, mobile phones and tablets through the Internet or limited to an Intranet. Make a call, invite your friends and clients, and collaborate in closed groups through secure, end to end encrypted video/audio, text messaging, and document and file sharing. The Spreed.ME technology used offers peer to peer, WebRTC based communication channels which can not be intercepted even by the admin of the server. It provides an easy to use interface and can optionally interface with telephone lines, handling up to 10 participants in one session and tens of sessions on a single server.');?></p>
			<p><?php echo $l->t('You can integrate this secure communication in your Nextcloud server or purchase our Spreedbox appliance in one cool, aluminum cube!');?></p>
			<div class="text-center morebuttondiv">
				<p><a href="/webrtc" class="btn btn-primary morebutton"><?php echo $l->t('Communication in Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a></p>
			</div>
		</div>
	</div>
</div>

<a name="onlineoffice"></a>
<div class="featurerow">
	<h1  class="featuretitle"><?php echo $l->t('Collabora Online Office');?></h1>
	<div class="row">
		<div class="col-md-5 featureblock">
			<p class=""><?php echo $l->t('Collabora Online is a powerful LibreOffice-based online office suite which supports all major document, spreadsheet and presentation file formats.');?></p>
			<p class=""><?php echo $l->t('Features:');?></p>
			<ul>
				<li><?php echo $l->t('Large document format support:');?>
					<ul>
						<li><?php echo $l->t('DOC, DOCX, PPT, PPTX, XLS, XLSX');?></li>
						<li><?php echo $l->t('ODF, ODS, ODP');?></li>
						<li><?php echo $l->t('Visio (read-only), Publisher, + 100 more');?></li>
					</ul>
				</li>
				<li><?php echo $l->t('High fidelity, WYSIWYG rendering');?></li>
				<li><?php echo $l->t('Basic editing functions');?></li>
				<li><?php echo $l->t('Shared editing');?>
					<ul>
						<li><?php echo $l->t('One editor at a time, others can see changes live. You can assign a different editor at any time.');?></li>
					</ul>
				</li>
			</ul>
			<div class="text-center morebuttondiv">
				<a href="/collaboraonline" class="btn btn-primary morebutton"><?php echo $l->t('Collabora Online');?>  <i class="icon-arrow-circle-o-right icon"></i></a></p>
			</div>
		</div>
		<div class="col-md-7">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png" />
		</div>
	</div>
</div>

</div>
<div class="featurerow">
	<div class="wrap container featuregroup">
	<h1 class="featuretitle"><?php echo $l->t('And more.');?></h1>
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
			<p class=""><?php echo $l->t('Nextcloud offers an easy to use user interface which comes with search functionality, favorites, tags and even more ways to quickly reach the files you need');?></p>
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
			<p class=""><?php echo $l->t('LDAP / Active Directory integration and Shibboleth / SAML 2.0 support');?></p>
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
			<p class=""><?php echo $l->t('Fine-grained control from mobile, desktop or the Web over data access and sharing capabilities. Pick from the list of users and groups, stored either locally or on another, authorised, server. ');?></p>
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
	<p><a href="/install" class="btn btn-lg btn-primary install-8-btn"><?php echo $l->t('Install Nextcloud Server ');?><?php echo $VERSIONS_SERVER_MAJOR_STABLE; ?> <?php echo $l->t('now');?></a></p>
</div>

<a name="video"></a>
<div class="wrap container">
<div class="featurerow">
	<div class="featurewrapper">
		<h1 class="featuretitle"><?php echo $l->t('Nextcloud in Action');?></h1>
	</div>
	<div class="row">
	<!-- 	Theming in 30 seconds -->
		<div class="col-md-4 yt-img-overlay">
			<a class="youtube" href="https://www.youtube.com/watch?v=wqRgeFXYUys" title="Theming Nextcloud in 30 seconds">
			<img  src="https://img.youtube.com/vi/wqRgeFXYUys/hqdefault.jpg" title="Theming Nextcloud in 30 seconds" />
			<div class="yt-play-btn">
				<i></i>
			</div>
			</a>
			</br> <?php echo $l->t('Theming your Nextcloud in 30 seconds!');?>
		</div>
		<div class="col-md-4 yt-img-overlay">
			<a class="youtube" href="https://www.youtube.com/watch?v=Fe1I7wYW6hA" title="Creating anonymous upload links">
			<img  src="https://img.youtube.com/vi/Fe1I7wYW6hA/hqdefault.jpg" title="Creating anonymous upload links" />
			<div class="yt-play-btn">
				<i></i> 
			</div>
			</a>
			</br> <?php echo $l->t('Creating an anonymous upload link');?>
		</div>
	<div class="col-md-4 yt-img-overlay">
			<a class="youtube" href="https://www.youtube.com/watch?v=yqr22XG8P4w" title="Shorten share URL: removing index.php">
			<img  src="https://img.youtube.com/vi/yqr22XG8P4w/hqdefault.jpg" title="Shorten share URL: removing index.php" />
			<div class="yt-play-btn">
				<i></i> 
			</div>
			</a>
			</br> <?php echo $l->t('Shorten share URL: removing index.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 yt-img-overlay">
			<a class="youtube" href="https://www.youtube.com/watch?v=sZpYXUD1ZVM" title="Collabora Online Office in Nextcloud">
			<img  src="https://img.youtube.com/vi/sZpYXUD1ZVM/hqdefault.jpg" title="Collabora Online Office in Nextcloud" />
			<div class="yt-play-btn">
				<i></i> 
			</div>
			</a>
			</br> <?php echo $l->t('Collabora Online Office in Nextcloud');?>
		</div>
	</div>
	<div class="col-md-12 text-center  morebuttondiv">
		<a href="http://www.youtube.com/c/nextcloud " class="btn btn-primary morebutton morebuttonyoutube">Nextcloud on <i class="icon-youtube icon"></i></a>
	</div>
</div>



</div>
<div class="wrap container">
<h2><?php echo $l->t('Get involved!');?></h2>
<p><a target="_blank" href="https://help.nextcloud.com" class="btn btn-lg btn-default"> <i class="icon-bullhorn"></i> <?php echo $l->t('Discuss Nextcloud');?></a></p>
<p><a target="_blank" href="/contribute/" class="btn btn-lg btn-default"> <i class="icon-code"></i> <?php echo $l->t('Contribute to Nextcloud');?></a></p>
</div>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/old/vendor/jquery.youtubepopup.min.js"></script>


<!-- arrow to go to the top -->
<a href="#" class="back-to-top" style="display: inline">
<i class="icon-arrow-circle-up"></i>
</a>

<script>
jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.back-to-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});
</script>

<script type="text/javascript">
// $(function () {
	$("a.youtube").YouTubePopup({ hideTitleBar: true });
// });
</script>
