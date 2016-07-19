<?php get_template_part( 'templates/parts/title'); ?>
<div class="sub-nav">
	<a href="#files">File access and sharing</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#clients">Mobile and desktop clients</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#externalstorage">External storage</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#calendarcontacts">Calendar and Contacts</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#webrtc">WebRTC video conferencing</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#onlineoffice">Collabora Online Office</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#video">Nextcloud in action</a>
</div>
</div>
<div class="featurerow">
	<div class="row ">
		<div class="col-md-5">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/serverwebui.png" />
		</div>
		<div class="col-md-7 featureblock">
			<h1>Nextcloud puts you in control</h1>
			<p class="">Nextcloud puts your data at your fingertips, under your control. You store your photos, calendar, contacts and documents on a server of your choosing, be it at home, a rented server or at one of our <a href="/providers">providers</a>. Your existing data can stay at that FTP drive at work, dropbox or a NAS you have at home, while you get at it through Nextcloud.</p>
			<p class="">A trusted solution giving you access to all data you care about in one convenient place!</p>
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
			<p class="">The easy interface allows you to share with other users on your server, send password protected public links, let others upload files to you and get notifications on your phone when a user on another Nextcloud server shares files directly with you.</p>
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
			Nextcloud clients for Android, iOS and desktop systems allow you to sync and share files, fully secured and encrypted. The mobile clients feature automatic upload of pictures and videos you take and can synchronize select files and folders. The clients can handle multiple accounts, show you activities on your server and give notifications of new shares and other important updates.</p>
<!--		</div>
	</div>
	<div class="row">
		<div class="col-md-10 featureblock">-->
			<p class="">While not all clients support all features yet, this is by an large what you can do with them:
			<ul>
				<li>File handling like renaming, deleting and moving of files</li>
				<li>Display of documents, photos, videos, audio files with previews</li>
				<li>Favorite files to keep them synchronized and available offline</li>
				<li>Automatic uploading of images taken with the phone camera</li>
				<li>Share directly to users on your Nextcloud, other servers or via a public link</li>
				<li>Get notified of shares or other events</li>
				<li>See what happens with your files on the server</li>
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
			<p class="">The external storage feature of Nextcloud gives you access to your data wherever it is. Nextcloud can access your files residing at a wide variety of external storage providers, from known cloud service providers like Amazon, Google and Dropbox to general standards like (S)FTP, WebDAV and more.</p>
			<p class="">The Encryption App can encrypt data on the Nextcloud server for local or remote storage. Keys can be handled by an external key management server or be kept local. Nextcloud will keep your data where they are and grab them over a secure channel whenever you need access to them.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 featureblock">
			<p class="">External storage features:
			<ul>
				<li>Support for SWIFT, (S)FTP, WebDAV, Amazon S3, Google Drive, Dropbox, SMB/CIFS/Windows Network Drive and Open Stack Object Storage.</li>
				<li>Full Server side encryption with optional external key management</li>
				<li>Encryption can be enabled or disabled for each external storage system</li>
				<li>Admin can control if and which types of external storage users can add</li>
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
			<p class="">The Nextcloud Calendar and Contacts apps allow you to store, sync and share your plans and contacts. You can share with users or groups on your server, sync the calendar or contacts with your devices and access them wherever you are.</p>
		</div>
<!--	</div>
	<div class="row">-->
		<div class="col-md-6">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/contacts.png" />
		</div>
		<div class="col-md-6 featureblock">
			<p class="">
			The Calendar and Contacts app feature:
			<ul>
				<li>Easy to use interface</li>
				<li>Private and shared calendars with permission handling</li>
				<li>Private and shared addressbooks with permission handling</li>
				<li>CalDAV and CardDAV sync with third party clients on Android, native in iOS, Thunderbird etc</li>
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
			<p class="">Collabora Online is a powerful LibreOffice-based online office suite that supports all major document, spreadsheet and presentation file formats.</p>
			<p class="">Features:
			<ul>
				<li>Basic editing</li>
				<li>Document Support:
					<ul>
						<li>DOC, DOCX, PPT, PPTX, XLS, XLSX + ODF</li>
						<li>Import/View Visio, Publisher, + 100 more</li>
					</ul>
				</li>
				<li>High fidelity, WYSIWYG rendering</li>
				<li>Shared editing
					<ul>
						<li>One user edits, others can follow. You can change who edits.</li>
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
			<p class="">Nextcloud offers an easy user interface with search, favorites, tags and other ways to quickly get at your files</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-file-text icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">File editing and preview support for PDF, images, text files, Open Document, Word files and more</p>
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
			<p class="">LDAP / Active Directory integration and SAML 2.0 support</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-life-ring icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Example files for new users. Preload a new user's Files area with, for example, a tutorial file, which appears when they first log in.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 featureblock">
			<i class="icon-key icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Powerful integrated logging and password policy control</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-share-alt icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Fine-grained control over access to data and sharing capabilities by user and by group</p>
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
			<p class="">Sharing REST API. Control sharing from mobile apps and desktop clients</p>
			</div>
			<div class="col-md-1 featureblock">
			<i class="icon-certificate icon"></i>
			</div>
			<div class="col-md-3 featureblock">
			<p class="">Easy development of 3rd party apps with the share REST API. Quick access to core functions for app development with the powerful Nextcloud App API and webhooks following the publication / subscription model</p>
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
