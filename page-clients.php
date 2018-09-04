<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/clients.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer"])
	});
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/linux.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/linux.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/linux.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/linux.png">
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
                    <a href="<?php echo home_url('install/#install-clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>
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
			<p class="section--paragraph"><?php echo $l->t('Sync one or more folders locally with folders on the server and pick what folders you don\t need.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Right-click a file in your file manager and easily share it with other users, a public link or by email.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Get notified of activities and events, like an incoming call, a comment on a file or a new folder that is shared with you.');?></p>
			<a href="<?php echo home_url('install/#install-clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Get the desktop client');?></a>
		</div>
	</div>
</section>
<section class="section--desktop-features">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center revealOnScroll"><?php echo $l->t('desktop client features');?></h2>
        <div class="row">
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Select any number of local folders to keep in sync with specified remote folders');?></li>
                <li><?php echo $l->t('Exempt any number of subfolders in a synced folder from being synced');?></li>
                <li><?php echo $l->t('Optional warning in case a very big new subfolder was added');?></li>
                <li><?php echo $l->t('Easily pause and resume syncing');?></li>
                </ul></p>
            </div>
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Receive notifications of server events like a new share or audio/video call');?></li>
                <li><?php echo $l->t('Use the activity feed to track what happens on the server');?></li>
                <li><?php echo $l->t('Protect your files with client side,');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption</a> (version >2.4)');?></li>
                </ul></p>
            </div>
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Easily configure a proxy or set bandwidth throttling');?></li>
                <li><?php echo $l->t('Enjoy convenient file manager integration for easy sharing');?></li>
                <li><?php echo $l->t('Branding support for ');?><a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise customers');?></a></li>
                <li><?php echo $l->t('Set up multiple accounts');?></li>
                </ul></p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--mobile">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 revealOnScroll feature--block">
                <h2 class="text-center"><?php echo $l->t('Your files with you wherever you are');?></h2>
                <p class="section--paragraph text-center"><?php echo $l->t('With the Nextcloud clients for Android and iOS you can sync, edit and share your files in a fully secure way through an encrypted connection.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-6 revealOnScroll">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/iPhoneX.png" alt="in action" >
            </div>
            <div class="col-sm-3 col-xs-6 revealOnScroll">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/iPhone2.png" alt="in action" >
            </div>
            <div class="col-sm-3 col-xs-6 revealOnScroll">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/android.png" alt="in action" >
            </div>
            <div class="col-sm-3 col-xs-6 revealOnScroll">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/android2.png" alt="in action" >
            </div>
        </div>
</section>

<section class="section--ios">
	<div class="container">
        <div class="row">
            <div class="col-md-6 revealOnScroll image--floated">
                <div data-type="youtube" data-video-id="5yFKZze6TqM"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/5yFKZze6TqM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
    </div>
</section>

<section class="section--ios-features">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center revealOnScroll"><?php echo $l->t('iOS client features');?></h2>
        <div class="row">
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Display documents, photos, videos, audio files, as a list or thumbnails, sorted as you like.');?></li>
                <li><?php echo $l->t('Edit files on the phone built in or using other apps installed on your iPhone or iPad.');?></li>
                <li><?php echo $l->t('Add, rename, copy, move and delete files and folders');?></li>
                <li><?php echo $l->t('Keep your favorite files available offline');?></li>
                </ul></p>
            </div>
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Share files with others');?></li>
                <li><?php echo $l->t('Client-side,');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption');?></a></li>
                <li><?php echo $l->t('Local and server-side search');?></li>
                <li><?php echo $l->t('Support for server notifications and file activity feed');?></li>
                <li><?php echo $l->t('3D Touch peek&pop and homescreen quick actions');?></li>
                </ul></p>
            </div>
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Multi-account support');?></li>
                <li><?php echo $l->t('Adjusts to Nextcloud server theming preferences');?></li>
                <li><?php echo $l->t('Auto-upload of photos and videos with custom file naming and folder sorting, wifi-only upload and HEIC support');?></li>
                <li><?php echo $l->t('iOS 11 Files app integration');?></li>
                </ul></p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--android">
	<div class="container">
        <div class="row">
            <div class="col-md-6 revealOnScroll image--floated">
                <div data-type="youtube" data-video-id="https://youtu.be/4oY7R14Ydno"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/4oY7R14Ydno" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Well integrated Android app');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Android app makes accessing, syncing and sharing your files easy with its modern and intuitive interface. Our client supports Android 4.0 and later and works with a wide variety of screen sizes and Android features.');?></p>
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
    </div>
</section>

<section class="section--android-features">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center revealOnScroll"><?php echo $l->t('Android app features');?></h2>
        <div class="row">
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Display documents, photos, videos, audio files, as a list or thumbnails, sorted as you like.');?></li>
                <li><?php echo $l->t('Edit files on the phone built in or using other apps installed on your Android device.');?></li>
                <li><?php echo $l->t('Add, rename, copy, move and delete files and folders');?></li>
                <li><?php echo $l->t('Keep your favorite files available offline');?></li>
                </ul></p>
            </div>
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Share files with others');?></li>
                <li><?php echo $l->t('Shared files view');?></li>
                <li><?php echo $l->t('Simple contacts backup & restore');?></li>
                <li><?php echo $l->t('Auto-configuration of Contacts and Calendar integration through DAVDroid');?></li>
                <li><?php echo $l->t('Client-side,');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption');?></a></li>
                <li><?php echo $l->t('Support for server push notifications and file activity feed');?></li>
                </ul></p>
            </div>
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Local and server-side search');?></li>
                <li><?php echo $l->t('Multi-account support');?></li>
                <li><?php echo $l->t('Fingerprint locking');?></li>
                <li><?php echo $l->t('Adjusts to Nextcloud server theming preferences');?></li>
                <li><?php echo $l->t('Auto-upload of photos and videos with custom file naming and folder sorting, wifi-only upload, differential handling of photos and videos');?></li>
                <li><?php echo $l->t('monitor any number of folders so you can upload Whatsapp etc images');?></li>
                </ul></p>
            </div>
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
                    <a href="<?php echo home_url('install/#install-clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>
                </div>
			</div>
		</div>
	</div>
</section>
