<?php get_template_part( 'templates/parts/title'); ?>
<div class="sub-nav">
	<a href="#files">File access and sharing</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#clients">Mobile and desktop clients</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#externalstorage">External storage</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#calendarcontacts">Calendar and Contacts</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#webrtc">WebRTC video conferencing</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#onlineoffice">Collabora Online Office</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#video">Videos</a>
</div>
</div>
<div class="featurerow">
	<div class="row ">
		<div class="col-md-5">
			<a href="https://demo.nextcloud.com"><img alt="Try for yourself!" class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/serverwebui.png" /></a>
		</div>
		<div class="col-md-7 featureblock">
			<h1>Nextcloud puts you in control</h1>
			<p class="">Nextcloud puts your data at your fingertips, under your control. You store your photos, calendar, contacts and documents on a server of your choosing, be it at home, a rented server or at one of our <a href="/providers">providers</a>. Your existing data can stay on that FTP drive at work, dropbox or a NAS you have at home, while you access it through Nextcloud.</p>
			<p class="">A trusted solution giving you access to all data you care about in one convenient place!</p>
			<a href="https://demo.nextcloud.com" class="btn btn-primary">Try it out!</a>
		</div>
	</div>
</div>

<a name="files"></a>
<div class="featurerow">
	<h1 class="featuretitle">File access and sharing</h1>
	<div class="row">
		<div class="col-md-6 featureblock">
			<h2 class="featuretitle">Share on your terms</h2>
			<p class="">Nextcloud features an easy to use and powerful web interface. You can access all your files wherever you are and however you like.</p>
			<p class="">The easy interface allows you to share files with other users on your server, to create and send password protected public links, to let others upload files to your cloud and to get notifications on your phone and desktop when a user on another cloud server shares files directly with you.</p>
			<p>Nextcloud makes sharing and collaboration easy!</p>
			<a href="/sharing" class="btn btn-primary">Learn more about sharing in Nextcloud</a>
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


<a name="clients"></a>
<div class="featurerow">
	<h1 class="featuretitle">Mobile and desktop clients</h1>
	<div class="row">
		<div class="col-md-4">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/android.gif" />
		</div>
		<div class="col-md-8 featureblock">
			<p class="">
			Nextcloud clients for Android, iOS and desktop systems allow you to sync and share files, in a fully secure way through an encrypted connection. The mobile clients feature automatic upload of pictures and videos you take and can synchronize select files and folders. The clients can handle multiple accounts, show all activity happening on your server and notify you of new events such as the availability of new shares.</p>
<!--		</div>
	</div>
	<div class="row">
		<div class="col-md-10 featureblock">-->
			<p class="">While not all clients support all features yet, here is a non-exhaustive list of what you can do today:
			<ul>
				<li>Perform file operations such as rename, delete and move</li>
				<li>Show previews of documents, photos and videos and choose between list and grid view</li>
				<li>Mark files as favourites to keep them in sync with the server and available offline</li>
				<li>Upload pictures taken with your phone's camera automatically</li>
				<li>Share files directly with users on your Nextcloud, with other cloud servers or via public link</li>
				<li>Get notified of shares or other events</li>
				<li>Show all activity related to your files</li>
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
	<h1 class="featuretitle">External storage</h1>
	<div class="row">
		<div class="col-md-7">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png" />
		</div>
		<div class="col-md-5 featureblock">
			<p class="">The external storage feature of Nextcloud gives you access to your data wherever it is. Nextcloud can access files stored with a wide variety of popular cloud service providers such as Amazon, Google and Dropbox, but you can also access them using standard protocols such as (S)FTP, WebDAV and more.</p>
			<p class="">The Encryption App can encrypt data at rest for both local and remote storage, protecting data stored on networks outside of your infrastructure. Keys can be handled by an external key management server or stored locally, on the server. Nextcloud will keep your data where it is and retrieve it over a secure communication channel whenever you need to access it.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 featureblock">
			<p class="">External storage features:
			<ul>
				<li>Support for SWIFT, (S)FTP, WebDAV, Amazon S3, Google Drive, Dropbox, SMB/CIFS/Windows Network Drive, Sharepoint and OpenStack Object Storage (Swift).</li>
				<li>Full server side encryption with optional external key management</li>
				<li>Encryption can be enabled or disabled for each external storage system</li>
				<li>Administrators can control the list of external storage types users have access to</li>
			</ul>
			</p>
		</div>
		<div class="col-md-7">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage2.png" />
		</div>
	</div>
</div>

<a name="calendarcontacts"></a>
<div class="featurerow">
	<h1 class="featuretitle">Calendar and Contacts</h1>
	<div class="row">
		<div class="col-md-6">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar.png" />
		</div>
		<div class="col-md-6 featureblock">
			<p style="padding-bottom: 30px;">The Nextcloud Calendar and Contacts apps allow you to store, sync and share your plans and contacts. You can share with users or groups on your server or sync the calendar or contacts with your devices and access them wherever you are.</p>
		</div>
<!--	</div>
	<div class="row">-->
		<div class="col-md-6">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/contacts.png" />
		</div>
		<div class="col-md-6 featureblock">
			<p style="margin-top: -80px;" class="">
			The Calendar and Contacts app feature:
			<ul>
				<li>Easy to use interface</li>
				<li>Private and shared calendars and addressbooks with permissions management</li>
				<li>CalDAV and CardDAV sync with third party clients both on mobile and desktop (i.e with Thunderbird)</li>
			</ul>
			</p>
		</div>
	</div>
</div>

<a name="webrtc"></a>
<div class="featurerow">
	<h1  class="featuretitle">Secure WebRTC Conferencing</h1>
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
		</div>
		<div class="col-md-7">
			<p>Operate your own secure audio/video chat, messaging and file sharing service with the highest measurements for control and security of your own data. Your own video meeting and file sharing service can be available on computers, mobile phones and tablets through the Internet or limited to an Intranet. Make a call, invite your friends and clients, and collaborate in closed groups through video/audio, text messaging, and document and file sharing. You can access your private data in an easy-to-use web interface with PC, Android and iOS devices.</p>
			<p><a href="/spreedbox" class="btn btn-primary">Learn more about Secure WebRTC Conferencing</a></p>
		</div>
	</div>
</div>

<a name="onlineoffice"></a>
<div class="featurerow">
	<h1  class="featuretitle">CollaboraOnline Office</h1>
	<div class="row">
		<div class="col-md-5 featureblock">
			<p class="">Collabora Online is a powerful LibreOffice-based online office suite which supports all major document, spreadsheet and presentation file formats.</p>
			<p class="">Features:
			<ul>
				<li>Large document format support:
					<ul>
						<li>DOC, DOCX, PPT, PPTX, XLS, XLSX</li>
						<li>ODF, ODS, ODP</li>
						<li>Visio (read-only), Publisher, + 100 more</li>
					</ul>
				</li>
				<li>High fidelity, WYSIWYG rendering</li>
				<li>Basic editing functions</li>
				<li>Shared editing
					<ul>
						<li>One editor at a time, others can see changes live. You can assign a different editor at any time.</li>
					</ul>
				</li>
			</ul>
		<a href="/collaboraonline" class="btn btn-primary">Learn more about Collabora Online</a></p>
		</div>
		<div class="col-md-7">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png" />
		</div>
	</div>
</div>

</div>
<div class="featurerow">
	<div class="wrap container featuregroup">
	<h1 class="featuretitle">And more.</h1>
		<div class="row">
			<div class="col-md-1 featureblock">
			<i class="icon-code-fork icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class=""> Nextcloud is open source - there are no limitations and you can inspect, integrate, extend and modify Nextcloud however you want</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-tags icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Nextcloud offers an easy to use user interface which comes with search functionality, favorites, tags and even more ways to quickly reach the files you need</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-file-text icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Document editing and thumbnail previews of PDF, images, text files, office files and more</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 featureblock">
			<i class="icon-bug icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Integration of anti-virus scanning functionality with the anti-virus app</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-puzzle-piece icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">LDAP / Active Directory integration and Shibboleth / SAML 2.0 support</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-life-ring icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Pre-loaded files and folders for new users. Populate a new user's Files area with, for example, a tutorial file, which appears when they first log in.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 featureblock">
			<i class="icon-key icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Powerful, integrated logging and password policy control functionalities</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-share-alt icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Fine-grained control from mobile, desktop or the Web over data access and sharing capabilities. Pick from the list of users and groups, stored either locally or on another, authorised, server. </p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-archive icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Advanced quota management with configurable accounting of external storage</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 featureblock">
			<i class="icon-code icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Sharing and Provisioning REST APIs. Facilitates the integration of remote 3rd party apps</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-certificate icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Quick access to core functions for app development with the powerful Nextcloud App API and webhooks following the publication / subscription model</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-paint-brush icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Built in, easy to use theming</p>
			</div>
		</div>
	</div>
	<p><a href="/install" class="btn btn-lg btn-primary install-8-btn">Install Nextcloud Server <?php echo $VERSIONS_SERVER_MAJOR_STABLE; ?> now</a></p>
</div>

<a name="video"></a>
<div class="wrap container">
<div class="featurerow">
	<div class="featurewrapper">
		<h1 class="featuretitle">Nextcloud in Action</h1>
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
			</br> Theming your Nextcloud in 30 seconds!
		</div>
		<div class="col-md-4 yt-img-overlay">
			<a class="youtube" href="https://www.youtube.com/watch?v=Fe1I7wYW6hA" title="Creating anonymous upload links">
			<img  src="https://img.youtube.com/vi/Fe1I7wYW6hA/hqdefault.jpg" title="Creating anonymous upload links" />
			<div class="yt-play-btn">
				<i></i> 
			</div>
			</a>
			</br> Creating an anonymous upload link
		</div>
	<div class="col-md-4 yt-img-overlay">
			<a class="youtube" href="https://www.youtube.com/watch?v=yqr22XG8P4w" title="Shorten share URL: removing index.php">
			<img  src="https://img.youtube.com/vi/yqr22XG8P4w/hqdefault.jpg" title="Shorten share URL: removing index.php" />
			<div class="yt-play-btn">
				<i></i> 
			</div>
			</a>
			</br> Shorten share URL: removing index.php
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
			</br> Collabora Online Office in Nextcloud
		</div>
	</div>
</div>

</div>
<div class="wrap container">
<h2>Get involved!</h2>
<p><a target="_blank" href="https://help.nextcloud.com" class="btn btn-lg btn-default"> <i class="icon-bullhorn"></i> Discuss Nextcloud</a></p>
<p><a target="_blank" href="/contribute/" class="btn btn-lg btn-default"> <i class="icon-code"></i> Contribute to Nextcloud</a></p>
<!-- <p><a target="_blank" href="/conf/" class="btn btn-lg btn-default"> <i class="icon-group"></i> Nextcloud Contributor Conf</a></p> -->
</div>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/jquery.youtubepopup.min.js"></script>


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
$(function () {
	$("a.youtube").YouTubePopup({ hideTitleBar: true });
});
</script>
