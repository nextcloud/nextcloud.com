<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/clients.css" rel="stylesheet">
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer"])
	});
</script>
</head>
<div class="background clients-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Mobile and <span class="avoidwrap">desktop clients</span>');?></h1>
				<h2><?php echo $l->t('Have your data handy wherever you are.');?></h2>
			</div>
		</div>
	</div>
</div>
<section class="section--intro">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud gives you access to your files wherever you are. Our easy to use desktop and mobile clients are available for all major platforms at zero cost!');?></p>
                <div class="text-center">
                    <a href="install/#install-clients" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>
                </div>
			</div>
		</div>
	</div>
</section>


<section class="section--desktop">
<a name="hosting" id="hosting"></a>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll feature--block">
			<h2 class="text-center"><?php echo $l->t('Sync and collaborate on your desktop or laptop');?></h2>
			<p class="section--paragraph text-center"><?php echo $l->t('The Nextcloud desktop client keeps photos and documents always up to date, enabling you to work like you always did.');?></p>
        </div>
    </div>
    <div class="row">
		<div class="col-md-6 revealOnScroll">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/linux.png" alt="in action" >
		</div>
		<div class="col-md-6 revealOnScroll feature--block">
			<p class="section--paragraph"><?php echo $l->t('Any file you add, modify or delete in the synced folders on your desktop or laptop will show up, change or disappear on the server and all other connected devices.');?></p>
			<a href="install/#install-clients" class="button button--blue button--arrow button--large"><?php echo $l->t('Get the desktop client');?></a>
		</div>
	</div>
	<div class="row">
        <p class="section--paragraph__tittle text-center"><?php echo $l->t('Key features:');?></p>
        <div class="col-md-6">
			<p class="section--paragraph"><?php echo $l->t('<ul>
            <li>Select any number of local folders to keep in sync with specified remote folders</li>
            <li>Exempt any number of subfolders in a synced folder from being synced</li>
            <li>Optional warning in case a very big new subfolder was added</li>
            <li>Easily pause and resume syncing</li>
			<li>Receive notifications of server events like a new share or audio/video call</li>
			</ul>');?></p>
        </div>
        <div class="col-md-6">
			<p class="section--paragraph"><?php echo $l->t('<ul>
			<li>Use the activity feed to track what happens on the server</li>
            <li>Protect your files with client side, <a class="hyperlink" href="/endtoend">End-to-end encryption</a> (version >2.4)</li>
			<li>Set up multiple accounts</li>
            <li>Easily configure a proxy or set bandwidth throttling</li>
			<li>Enjoy convenient file manager integration for easy sharing</li>
			<li>Branding support for <a class="hyperlink" href="/enterprise">enterprise customers</a></li>
			</ul>');?></p>
        </div>
	</div>
</div>
</section>

<section class="section--mobile">
	<a name="hosting" id="hosting"></a>
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 revealOnScroll feature--block">
                <h2 class="text-center"><?php echo $l->t('Your files with you wherever you are');?></h2>
                <p class="section--paragraph text-center"><?php echo $l->t('With the Nextcloud clients for Android and iOS you can sync, edit and share your files in a fully secure way through an encrypted connection.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll image--floated">
                <div data-type="youtube" data-video-id="5yFKZze6TqM"></div>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('top-rated iOS app');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud iOS app provides a way for users to access and sync files on the go in a easy and intuitive interface. The client is kept always up to date with the latest iOS versions and designed for both smaller and newer iPhones, iPhone X and iPad.');?></p>
                <div class="row">
                <div class="col-xs-6 mobileclientbuttons">
                    <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png">
                    </a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 revealOnScroll image--floated">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/iPhoneX.png" alt="in action" >
            </div>
            <div class="col-md-8 revealOnScroll feature--block">
                <p class="section--paragraph"><?php echo $l->t('The iOS client has the following key features:
                <ul>
                <li>Display documents, photos, videos, audio files, as a list or thumbnails, sorted as you like.</li>
                <li>Edit files on the phone built in or using other apps installed on your iPhone or iPad.</li>
                <li>Add, rename, copy, move and delete files and folders</li>
                <li>Keep your favorite files synchronized offline</li>
                <li>Share files with others</li>
                <li>Client-side, <a class="hyperlink" href="/endtoend">End-to-end encryption</a> (version >2.20)</li>
                <li>Local and server-side search</li>
                <li>Support for server notifications and file activity feed</li>
                <li>3D Touch peek&pop and homescreen quick actions</li>
                <li>Multi-account support</li>
                <li>Adjusts to Nextcloud server theming preferences</li>
                <li>Auto-upload of photos and videos with:
                <ul>
                <li>optional automatic folder categorization based on date taken</li>
                <li>Optional wifi-only upload</li>
                <li>Custom file naming</li>
                <li>Choose between JPG and HEIC for photo uploads</li>
                </ul></li>
                </ul>');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll image--floated">
                <div data-type="youtube" data-video-id="https://youtu.be/4oY7R14Ydno"></div>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Well integrated Android app');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Android app makes accessing, syncing and sharing your files easy and fun with its modern and intuitive interface. Our client supports Android 4.0 and later and works with a wide variety of screen sizes and Android features.');?></p>
                <div class="row">
                    <div class="col-xs-6">
                        <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png"></a><br />
                    </div>
                    <div class="col-xs-6">
                        <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/fdroid.png"></a><br />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 revealOnScroll image--floated">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/android.png" alt="in action" >
            </div>
            <div class="col-md-8 revealOnScroll feature--block">
                <p class="section--paragraph"><?php echo $l->t('The Android client has the following features:
                <ul>
                <li>Display documents, photos, videos, audio files, as a list or thumbnails, sorted as you like.</li>
                <li>Edit files on the phone built in or using other apps installed on your Android device.</li>
                <li>Add, rename, copy, move and delete files and folders</li>
                <li>Keep your favorite files synchronized offline</li>
                <li>Share files with others</li>
                <li>Shared files view</li>
                <li>Simple contacts backup & restore</li>
                <li>Auto-configuration of Contacts and Calendar integration through DAVDroid</li>
                <li>Client-side, <a class="hyperlink" href="/endtoend">End-to-end encryption</a> (version >2.1)</li>
                <li>Local and server-side search</li>
                <li>Support for server push notifications and file activity feed</li>
                <li>Multi-account support</li>
                <li>Fingerprint locking</li>
                <li>Adjusts to Nextcloud server theming preferences</li>
                <li>Auto-upload of photos and videos with:
                <ul>
                <li>optional automatic folder categorization based on date taken</li>
                <li>Handle videos and photos differently</li>
                <li>Optional wifi-only and/or charging-only upload</li>
                <li>Choice between the folders on your device so you can also upload images from other apps like Whatsapp</li>
                </ul></li>
                </ul>');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--intro">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('We\'re grateful to our hundreds of thousands of users for the great ratings in the Play store and Apple App store and look forward to hear your feedback!');?></p>
                <div class="text-center">
                    <a href="install/#install-clients" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>
                </div>
			</div>
		</div>
	</div>
</section>
