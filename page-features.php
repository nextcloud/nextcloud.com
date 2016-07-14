<?php get_template_part( 'templates/parts/title'); ?>
<div class="sub-nav"><a href="#files">File access and sharing</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#clients">Mobile and desktop clients</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#externalstorage">External storage</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#calendarcontacts">Calendar and Contacts</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#webrtc">WebRTC video conferencing</a><!--&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#onlineoffice">Online Office</a>-->|&nbsp;&nbsp;<a href="#video">Nextcloud in action</a>
</div>


<a name="files"></a>
<div class="featurerow">
	<h1 class="featuretitle">File access and sharing</h1>
	<div class="row ">
		<div class="col-md-7">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/serverwebui.png" />
		</div>
		<div class="col-md-5 featureblock">
			<p class="">Nextcloud puts your data at your fingertips, under your control. You store your photos, calendar, contacts and documents on a server of your choosing, be it at home, a rented server or at one of our <a href="/providers">providers</a>. Your existing data can stay at that FTP drive at work, dropbox or a NAS you have at home, while you get at it through Nextcloud.</p>
			<p class="">A trusted solution giving you access to all data you care about in one convenient place!</p>
		</div>
	</div>
	<div class="row">
			<div class="col-md-5 featureblock">
			<h2 class="featuretitle">Share on your terms</h2>
			<p class="">Share with other users on your server, send password protected public links, let others upload files to you and get notifications on your phone when a user on another Nextcloud server shares files directly with you.</p>
			<p>Nextcloud makes sharing and collaboration easy!
			</p>
		</div>
		<div class="col-md-7">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/upload.png" class="img-responsive featureimg" />
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing_admin.png" class="img-responsive featureimg" />
		</div>
		<div class="col-md-6">
			<p class="">Features:
			<ul>
				<li>Tag and comment on files, and see tags and comments by others</li>
				<li>See what is happening on your Nextcloud in the Activity feed</li>
				<li>Previous versions of files you modified are retained and can be brought back. Deleted files can be found in the trash.</li>
				<li>Share photo galleries</li>
				<li>Share public links read-only or with editing capabilities</li>
				<li>Anonymous upload hides existing files, providing just an upload target</li>
				<li>Optionally put a password or expiration date on public link shares</li>
				<li>Share directly to users on other Nextcloud, ownCloud or Pydio servers (<a href="/federation">"federation"</a>)</li>
				<li>Admins can control all these abilities, add trusted Federation servers and more</li>
			</ul>
			</p>
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
		<div class="col-md-7">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar.png" />
		</div>
		<div class="col-md-5 featureblock">
			<p class="">The Nextcloud Calendar and Contacts apps allow you to store, sync and share your plans and contacts. You can share with users or groups on your server, sync the calendar or contacts with your devices and access them wherever you are.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 featureblock">
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
		<div class="col-md-7">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/contacts.png" />
		</div>
	</div>
</div>

<a name="webrtc"></a>
<div class="featurerow">
	<h1  class="featuretitle">Secure WebRTC Conferencing</h1>
	<div class="row">
		<div class="col-md-5">
			<div class="yt-img-overlay">
				<a class="youtube" href="https://www.youtube.com/watch?v=egLqRqb4sHA" title="Introduction to Nextcloud 9">
					<img class="img-responsive featureimg" src="https://img.youtube.com/vi/egLqRqb4sHA/hqdefault.jpg" title="Introduction to Nextcloud 9" />
					<div class="yt-play-btn">
						<i></i> 
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-7">
			<p>Operate your own secure audio/video chat, messaging and file sharing service with the highest measurements for control and security of your own data. Your own video meeting and file sharing service can be available on computers, mobile phones and tablets through the Internet or limited to an Intranet. Make a call, invite your friends and clients, and collaborate in closed groups through video/audio, text messaging, and document and file sharing. You can access your private data in an easy-to-use web interface with PC, Android and iOS devices.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<h3>On any device and platform!</h3>
			<p>You can do video calls in any modern WebRTC browser, currently Chrome, Firefox, Chromium and Opera. <a href="https://caniuse.spreed.me/">Run a test for your system here</a>.</p>

			<p>There is a Spreed.ME video and audio chat Desktop App for Windows, Linux and Mac OS X <a href="https://www.spreed.me/download">to be found here</a>, an <a href="https://itunes.apple.com/app/spreed.me/id1058498417?mt=8">iOS app here</a> and an Android based client is coming soon.</p>

			<h3>Telephony integration</h3>
			Adding to the support for communication through browsers or mobile apps is the optional SIP Gateway support, enabling web conferencing participants to dial in through a more traditional telephone connection. It is also possible to dial out from the Nextcloud interface to land or mobile lines!
		</div>
		<div class="col-md-5">
			<div class="yt-img-overlay"><div class="row featurerow">
				<a class="youtube" href="https://www.youtube.com/watch?v=Yc6avTVowc0" title="Introduction to Nextcloud 9">
					<img class="img-responsive featureimg" src="https://img.youtube.com/vi/Yc6avTVowc0/hqdefault.jpg" title="Introduction to Nextcloud 9" />
					<div class="yt-play-btn">
						<i></i> 
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<h3>Capabilities:</h3>
<p><ul>
	<li>Secure video/audio and text chat with up to 6 people in a meeting</li>
	<li>HD wideband audio codec with 20kHz audio bandwidth and stereo (optional)</li>
	<li>HD video with video resolution of up to 1080p (max. video resolution depends on operating system and USB camera)</li>
	<li>High-Definition screen sharing</li>
	<li>PDF files and Open Document Format (ODF) presentations</li>
	<li>Voice and video recording</li>
	<li>Capable of streaming H.265/HEVC video</li>
</ul>
</p>

<!-- coming soon!!! -->
<!--<a name="#onlineoffice"></a>
<div class="featurerow">
	<h1  class="featuretitle">Online Office</h1>
</div>-->

<h1 class="featuretitle">And more</h1>
<div class="row">
	<ul class="featureslist">
		<li>Nextcloud is open source - there are no limitations and you can inspect, integrate, extend and modify Nextcloud however you want.</li>
		<li>Nextcloud offers an easy user interface with search, favorites, tags and other ways to quickly get at your files.</li>
		<li>File editing and preview support for PDF, images, text files, Open Document, Word files and more.</li>
		<li>Integration of anti-virus scanning functionality with the anti-virus app.</li>
		<li>LDAP / Active Directory integration and SAML 2.0 support</li>
		<li>Example files for new users. Preload a new user's Files area with, for example, a tutorial file, which appears when they first log in.</li>
		<li>Powerful integrated logging and password policy control</li>
		<li>Fine-grained control over access to data and sharing capabilities by user and by group.</li>
		<li>Advanced quota management with configurable accounting of external storage.</li>
		<li>Sharing REST API. Control sharing from mobile apps and desktop clients</li>
		<li>Easy development of 3rd party apps with the share REST API. Quick access to core functions for app development with the powerful Nextcloud App API and webhooks following the publication / subscription model.</li>
		<li>Built in, easy to use theming</li>
	</ul>
<!-- 	<p>Find answers to your questions on our <a href="/faq">Frequently Asked Questions page</a>.</p> -->
</div>

<p><a href="/install" class="btn btn-lg btn-primary install-8-btn">Install Nextcloud Server <?php echo $VERSIONS_SERVER_MAJOR_STABLE; ?> now</a></p>


<a name="video"></a>
<div class="featurewrapper"><h2>Nextcloud in Action</h2></div>

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
<p>Stay tuned for more videos!</p>



<div class="wrap container">
<h2>Get involved!</h2>
<!--<p><a target="_blank" href="/promote/" class="btn btn-lg btn-default"> <i class="icon-bullhorn"></i> Discuss and share Nextcloud</a></p>-->
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
