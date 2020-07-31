<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/clients.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["modules/scrollingtohash"])
	});
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/laptop.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/laptop.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/laptop.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/laptop.jpg">
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
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud gives you access to your data and communication wherever you are. Our easy to use desktop and mobile clients are available for all major platforms at zero cost!');?></p>
                <div class="text-center">
                    <a href="<?php echo home_url('install/#install-clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>
                </div>
			</div>
		</div>
	</div>
</section>

<section class="section--feature">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/edit-documents-on-the-go.jpg" alt="in action" >
        </div>
        <div class="col-md-6">
            <p class="section--paragraph__tittle"><?php echo $l->t('Files, notes, chat, calendars, passwords and more');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud Hub features a wide range of communication and collaboration capabilities. These are reflected in a wide variety of mobile apps from Nextcloud GmbH, the wider Nextcloud community as well as independent, third party apps that can communicate with Nextcloud servers thanks to our use of open standards.');?></p>
            <p class="section--paragraph"><a class="hyperlink" href="https://apps.nextcloud.com/integrations"><?php echo $l->t('Find dozens of apps and connection tools in our app store.');?></a></p>
            <a class="button button--white button-arrow button--small" href="https://apps.nextcloud.com/categories/integration?search=android"><i class="fa-android"></i> <?php echo $l->t('Apps for Android');?></a> <a class="button button--white button-arrow button--small" href="https://apps.nextcloud.com/categories/integration?search=iOS"><i class="fa-apple"></i> <?php echo $l->t('Apps for iOS');?></a>
        </div>
    </div>
</div>
</section>

<section class="section--feature">
<div class="container">
    <div class="row">
        <h2 class="text-center"><?php echo $l->t('Nextcloud Files');?></h2>
        <p class="section--paragraph text-center"><?php echo $l->t('All Nextcloud Files clients support a common set of features.');?></p>
        <div class="row">
            <div class="col-sm-4">
                <ul>
                    <li><?php echo $l->t('Consistent interface for conveniently sharing files to users and groups, with expiration date, password and other features');?></li>
                    <li><?php echo $l->t('Use the activity feed to track what happens to your data');?></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li><?php echo $l->t('Receive and respond to notifications of server events like a new share or audio/video call');?></li>
                    <li><?php echo $l->t('Remote wipe to clean data and accounts from the client');?></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li><?php echo $l->t('Protect your files with client side,');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption');?></a></li>
                    <li><?php echo $l->t('Branding support for ');?><a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise customers');?></a></li>
                    <li><?php echo $l->t('Set up multiple accounts with different servers');?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <h2 class="text-center"><?php echo $l->t('Highlights');?></h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div data-type="youtube" data-video-id="oyWXMjb-6ik"></div>
            <iframe width="100%" height="300" src="https://www.youtube-nocookie.com/embed/oyWXMjb-6ik" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('Remote Wipe');?></h3>
            <p class="section--paragraph"><?php echo $l->t('While Nextcloud supports Mobile Device Management solutions, thanks to built-in support, remote wipe will work on systems not under management of the company. This is useful for home users but also large universities and of course in a scenario where guest accounts were handed to a third party. If you permit downloading of documents by the third party, you can wipe the documents from their devices when the the collaboration has ended.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Remote wipe can be used on a per-device basis by users and on a per-user base by the administrator.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/remote-wipe-user.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/remote-wipe-user.png" alt="Remote wipe as a user, per device" class="img-responsive"></a><br />
            <?php echo $l->t('Remote wipe as a user, per device');?>
        </div>
        <div class="col-md-4">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/remote-wipe-admin.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/remote-wipe-admin.png" alt="Remote wipe as admin, per user" class="img-responsive"></a><br />
            <?php echo $l->t('Remote wipe as admin, per user');?>
        </div>
        <div class="col-md-4">
            <div data-type="youtube" data-video-id="QmR86-LsGus"></div>
            <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/QmR86-LsGus" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe><br />
            <?php echo $l->t('Demo of remote wipe in the desktop client');?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div data-type="youtube" data-video-id="8bS4-JELEdk"></div>
            <iframe width="100%" height="300" src="https://www.youtube-nocookie.com/embed/8bS4-JELEdk" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('Branding and deployment');?></h3>
            <p class="section--paragraph"><?php echo $l->t('In order to provide a seamless enterprise user experience, Nextcloud GmbH offers branded clients to their customers. We are also offer deployment technologies including MSI for desktops and support for various MDM solutions for mobile platforms.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Unbranded clients adjust to colors and logo choice of the server.');?></p>
            <a href="https://nextcloud.com/blog/branded-nextcloud-clients/" class="button button--blue button--arrow button--large"><?php echo $l->t('Branding and deployment options');?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 image--floated">
            <div data-type="youtube" data-video-id="8bS4-JELEdk"></div>
            <iframe width="100%" height="300" src="https://www.youtube-nocookie.com/embed/vKJCThXEPXk" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('Add accounts easily with a QR code');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Adding a Nextcloud client on the desktop is easy as the browser login can be used. This means setting up the desktop client often just requires clicking an approval button. On mobile, though, Nextcloud uses secure tokens, besides the username-password method.');?></p>
            <p class="section--paragraph"><?php echo $l->t('To simplify setting up the clients and save the user time, a simple scan of a QR code allows users to set up their mobile clients in a quick and convenient way.');?></p>
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

<section class="section--desktop" id="desktop">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 feature--block">
                <h2 class="text-center"><?php echo $l->t('Sync and collaborate on your desktop or laptop');?></h2>
                <p class="section--paragraph text-center"><?php echo $l->t('The Nextcloud desktop client keeps photos and documents always up to date, enabling you to work like you always did.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/linux.png" alt="in action" >
            </div>
            <div class="col-md-6 feature--block">
                <p class="section--paragraph"><?php echo $l->t('Any file you add, modify or delete in the synced folders on your desktop or laptop will show up, change or disappear on the server and all other connected devices.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Sync one or more folders locally with folders on the server and pick what folders you don\t need.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Right-click a file in your file manager and easily share it with other users, a public link or by email.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Get notified of activities and events, like an incoming call, a comment on a file or a new folder that is shared with you.');?></p>
                <a href="<?php echo home_url('install/#install-clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Get the desktop client');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--desktop-features">
    <div class="container-fluid quote">
        <div class="container">
            <h2 class="text-center"><?php echo $l->t('Desktop client features');?></h2>
            <div class="row">
                <div class="col-sm-4">
                    <ul>
                        <li><?php echo $l->t('Select any number of local folders to keep in sync with specified remote folders');?></li>
                        <li><?php echo $l->t('Exempt any number of subfolders in a synced folder from being synced');?></li>
                        <li><?php echo $l->t('Optional warning in case a very big new subfolder was added');?></li>
                        <li><?php echo $l->t('Easily pause and resume syncing');?></li>
                        <li><?php echo $l->t('Remote wipe to clean data and accounts from the client');?></li>

                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li><?php echo $l->t('Receive notifications of server events like a new share or audio/video call');?></li>
                        <li><?php echo $l->t('Use the activity feed to track what happens to your data');?></li>
                        <li><?php echo $l->t('Immediately reply to notifications to join a call or accept a share');?></li>
                        <li><?php echo $l->t('Protect your files with client side,');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption</a> (version 2.7.0+)');?></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li><?php echo $l->t('Easily configure a proxy or set bandwidth throttling');?></li>
                        <li><?php echo $l->t('Enjoy convenient file manager integration for easy sharing');?></li>
                        <li><?php echo $l->t('Branding support for ');?><a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise customers');?></a></li>
                        <li><?php echo $l->t('Set up multiple accounts with different servers');?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--desktop-screenshots">
    <div class="container">
        <h2 class="text-center"><?php echo $l->t('Desktop client in action');?></h2>
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/share-dialog.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/share-dialog.png" alt="" class="img-responsive" /></a>
                Easy to use sharing dialog
            </div>
            <div class="col-md-4">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/share-dialog-options.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/share-dialog-options.png" alt="" class="img-responsive" /></a>
                Share dialog options only show when needed
            </div>
            <div class="col-md-4">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/context-menu.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/context-menu.png" alt="" class="img-responsive" /></a>
                Open Nextcloud apps from the context menu
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/space-used.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/space-used.png" alt="" class="img-responsive" /></a>
                See how much storage you have left
            </div>
            <div class="col-md-4">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/edit-ignored-files.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/edit-ignored-files.png" alt="" class="img-responsive" /></a>
                List which files should not be synced
            </div>
            <div class="col-md-4">
            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/separate-activities.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/separate-activities.png" alt="" class="img-responsive" /></a>
            View and respond to activities and notifications
            </div>
        </div>
    </div>
</section>




<section class="section--mobile" id="mobileid">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 feature--block">
                <h2 class="text-center"><?php echo $l->t('Your files with you wherever you are');?></h2>
                <p class="section--paragraph text-center"><?php echo $l->t('With the Nextcloud clients for Android and iOS you can sync, edit and share your files in a fully secure way through an encrypted connection.');?></p>
            </div>
        </div>
        <div class="row vertical-image-list">
            <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/iPhoneX.png" alt="in action" >
            </div>
            <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/iPhone2.png" alt="in action" >
            </div>
            <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/android.png" alt="in action" >
            </div>
            <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/android2.png" alt="in action" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/edit-documents-on-the-go.jpg" alt="in action" >
            </div>
            <div class="col-md-6">
                <p class="section--paragraph__tittle"><?php echo $l->t('Integrated collaboration');?></p>
                <p class="section--paragraph"><?php echo $l->t('The mobile clients feature integrated real-time document editing. Nextcloud Text is used for note taking with Markdown files, Microsoft Office compatible document editing on-the-go is available through Collabora Online or ONLYOFFICE when these installed on the server.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The clients also allow users to comment on documents, add a note to a shared file, view and act on server notification like a request to accept a file share or approve a login, see activity for any file and much more. Productivity is guaranteed, wherever you are!');?></p>
            </div>
        </div>
    </div>
</section>






<section class="section--ios" id="iosid">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--floated">
                <div data-type="youtube" data-video-id="5yFKZze6TqM"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/5yFKZze6TqM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 feature--block">
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
        <div class="row docscanner">
            <p class="section--paragraph__tittle text-center"><?php echo $l->t('Document scanner in action');?></p>
            <br>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-1.png"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-1.png" class="" ></a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-2.jpg"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-2.jpg" class="" ></a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-3.png"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-3.png" class="" ></a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-4.png"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-4.png" class="" ></a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-5.png"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-5.png" class="" ></a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-6.png"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-6.png" class="" ></a>
            </div>
        </div>
    </div>
</section>

<section class="section--ios-features">
    <div class="container-fluid quote">
        <div class="container">
            <h2 class="text-center"><?php echo $l->t('iOS client features');?></h2>
            <div class="row">
                <div class="col-sm-4">
                    <ul>
                        <li><?php echo $l->t('Display documents, photos, videos, audio files, as a list or thumbnails, sorted as you like.');?></li>
                        <li><?php echo $l->t('Edit files on the phone built in or using other apps installed on your iPhone or iPad.');?></li>
                        <li><?php echo $l->t('Add, rename, copy, move and delete files and folders');?></li>
                        <li><?php echo $l->t('Keep your favorite files available offline');?></li>
                        <li><?php echo $l->t('Real-time collaborative document editing');?></li>
                        <li><?php echo $l->t('Quick configuration with a QR code');?></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li><?php echo $l->t('Share files with others');?></li>
                        <li><?php echo $l->t('Client-side,');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption');?></a></li>
                        <li><?php echo $l->t('Local and server-side search');?></li>
                        <li><?php echo $l->t('Support for server notifications and file activity feed');?></li>
                        <li><?php echo $l->t('3D Touch peek&pop and homescreen quick actions');?></li>
                        <li><?php echo $l->t('Scan-to-PDF with rotation and quality level control');?></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li><?php echo $l->t('Multi-account support');?></li>
                        <li><?php echo $l->t('Adjusts to Nextcloud server theming preferences');?></li>
                        <li><?php echo $l->t('Auto-upload of photos and videos with custom file naming and folder sorting, wifi-only upload and HEIC support');?></li>
                        <li><?php echo $l->t('iOS 11 Files Integration');?></li>
                        <li><?php echo $l->t('Trash and versions integration');?></li>
                        <li><?php echo $l->t('Remote wipe to clean data and accounts from the client');?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--android" id="androidid">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--floated">
                <div data-type="youtube" data-video-id="https://youtu.be/4oY7R14Ydno"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/4oY7R14Ydno" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 feature--block">
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
            <h2 class="text-center"><?php echo $l->t('Android app features');?></h2>
            <div class="row">
                <div class="col-sm-4">
                    <ul>
                        <li><?php echo $l->t('Display documents, photos, videos, audio files, as a list or thumbnails, sorted as you like.');?></li>
                        <li><?php echo $l->t('Stream media files (needs at least Nextcloud 14)');?></li>
                        <li><?php echo $l->t('Edit files on the phone built in or using other apps installed on your Android device.');?></li>
                        <li><?php echo $l->t('Local and server-side search');?></li>
                        <li><?php echo $l->t('Add, rename, copy, move and delete files and folders');?></li>
                        <li><?php echo $l->t('Keep your favorite files available offline');?></li>
                        <li><?php echo $l->t('Restore deleted files');?></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li><?php echo $l->t('Share files with others');?></li>
                        <li><?php echo $l->t('Shared files view');?></li>
                        <li><?php echo $l->t('Simple contacts backup & restore');?></li>
                        <li><?php echo $l->t('Auto-configuration of Contacts and Calendar integration through DAVDroid');?></li>
                        <li><?php echo $l->t('Client-side,');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption');?></a></li>
                        <li><?php echo $l->t('Support for server push notifications and file activity feed');?></li>
                        <li><?php echo $l->t('View and reply to comments on files');?></li>
                        <li><?php echo $l->t('Real-time collaborative document editing');?></li>
                        <li><?php echo $l->t('Remote wipe to clean data and accounts from the client');?></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li><?php echo $l->t('TalkBack screenreader support');?></li>
                        <li><?php echo $l->t('Multi-account support');?></li>
                        <li><?php echo $l->t('Fingerprint locking');?></li>
                        <li><?php echo $l->t('Adjusts to Nextcloud server theming preferences');?></li>
                        <li><?php echo $l->t('Auto-upload of any type of data including photos and videos with custom file naming and folder sorting, wifi-only upload, differential handling of photos and videos');?></li>
                        <li><?php echo $l->t('monitor any number of folders for any file type so you can upload Whatsapp images, documents and anything else');?></li>
                        <li><?php echo $l->t('Quick configuration with a QR code');?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/utf-in-android.jpg" alt="in action" ><br />
            <?php echo $l->t('Plug in a UTF key for authentication');?>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/android-rich-workspaces.png" alt="in action" ><br />
            <?php echo $l->t('See and edit notes above your folders');?>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/android-upload1.png" alt="in action" ><br />
            <?php echo $l->t('Configure upload');?>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/android-conflict1.png" alt="in action" ><br />
            <?php echo $l->t('Handle file conflicts');?>
        </div>
    </div>
</div>

<section class="section--intro">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('We look forward to hear your feedback!');?></p>
                <div class="text-center">
                    <a href="<?php echo home_url('install/#install-clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>
                </div>
			</div>
		</div>
	</div>
</section>
