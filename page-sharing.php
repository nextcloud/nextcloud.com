<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/sharing.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
require(["require.config"], function() {
	require(["pages/sharing", "modules/youtubePlayer"])
});
</script>
<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/comments.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/comments.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/comments.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/comments.png">
</head>

<div class="background sharing-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 revealOnScroll topheader">
                <h1><?php echo $l->t('Share on your terms');?></h1>
                <h2><?php echo $l->t('Nextcloud features an easy to use and powerful web interface. You can access all your files wherever you are and however you like.');?></h2>
            </div>
        </div>
    </div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row revealOnScroll">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Sharing is who we are. At work, we share and collaborate with colleagues to get work done. At home, we share our good and our bad moments with family and friends. <span class="avoidwrap">With Nextcloud, sharing is a core part of your experience.</span>');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--sharing">
    <div class="container">
        <div class="row feature--block">
            <div class="col-md-6 image--floated revealOnScroll">
                <div data-type="youtube" data-video-id="AhFnbB-a7ik"></div>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/AhFnbB-a7ik" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 revealOnScroll">
                <h2 class="section--paragraph__tittle"><?php echo $l->t('Work, share, collaborate, enjoy');?></h2>
                <p class="section--paragraph"><?php echo $l->t('Share images, documents or music with colleagues on your server, send password protected public links to friends and get notifications on your phone when a user on another Nextcloud server shares files directly with you. Use File Drop to let customers upload files to you in a easy and secure way!');?></p>
                <a href="<?php echo home_url('file-drop') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn about File Drop');?></a>
                <p class="section--paragraph"><?php echo $l->t('You can trust that when you share, Nextcloud makes sure you stay in control over your data. You can easily see a list of shares, remove or change permissions and restore older versions of files.');?></p>

            </div>
        </div>
        <div class="row feature--block">
            <div class="col-md-5 revealOnScroll">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/comments-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/comments-nw.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-7 revealOnScroll">
            <p class="section--paragraph__tittle"><?php echo $l->t('Work with others');?></p>
                <p class="section--paragraph"><?php echo $l->t('You can comment on files and discuss options. Through');?> <a class="hyperlink" href="<?php echo home_url('collaboraonline') ?>"><?php echo $l->t('our Collabora Online integration</a> you can work together in real time on presentations or word documents and with');?> <a class="hyperlink" href="<?php echo home_url('Talk') ?>">Nextcloud Talk</a> <?php echo $l->t('you can seamlessly move a conversation in the comments to a chat or video call!');?></p>
                <p class="section--paragraph"><?php echo $l->t('You can find files using our full text search app or by giving them tags and searching for them. Searching through the comments is possible as well. Admins can use');?> <a class="hyperlink" href="<?php echo home_url('workflow') ?>"><?php echo $l->t('our Workflow tools</a> to automatically tag files uploaded by specific users, groups or by filetype and execute actions like converting files based on these tags.');?></p>
            </div>
        </div>
        <div class="row feature--block">
            <div class="col-md-6 revealOnScroll image--floated">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/NRhVP9rXHVY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 revealOnScroll">
                <p class="section--paragraph__tittle"><?php echo $l->t('Collaboration features');?></p>
                <ul>
                    <li><?php echo $l->t('Tag and comment on files, and see tags and comments by others');?></li>
                    <li><?php echo $l->t('Search by file name, tags, comments or file content (with the full-text search app) ');?></li>
                    <li><?php echo $l->t('See what is happening with your data in the Activity feed, get notified by mail or RSS feed');?></li>
                    <li><?php echo $l->t('Previous versions of files you modified are retained and can be brought back. Deleted files can be found in the trash.');?></li>
                    <li><?php echo $l->t('Real-time push notifications on comments, mentions and new shares');?></li>
                    <li><?php echo $l->t('Edit documents with others using real-time document editors like Collabora Online or ONLYOFFICE.');?></li>
                    <li><?php echo $l->t('Smoothly transition between commenting on files to chat or video calls');?></li>
                </ul>
            </div>
        </div>
        <div class="row feature--block">
            <div class="col-md-6 revealOnScroll">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/sharenote-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharenote-nw.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-6 revealOnScroll">
                <p class="section--paragraph__tittle"><?php echo $l->t('Sharing features');?></p>
                <ul>
                    <li><?php echo $l->t('Share with individual users, groups or create custom groups with the');?> <a class="hyperlink" href="https://apps.nextcloud.com/apps/circles">Circles app.</a></li>
                    <li><?php echo $l->t('Share photo galleries');?></li>
                    <li><?php echo $l->t('Share public links read-only or with editing capabilities');?></li>
                    <li><?php echo $l->t('Attach notes to a share');?></li>
                    <li><?php echo $l->t('Share directly to users on other Nextcloud, ownCloud or Pydio servers (see below: <a class="hyperlink" href="#federation">federation</a>)');?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 image--floated revealOnScroll">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing_admin-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing_admin-nw.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-6 revealOnScroll">
                <p class="section--paragraph__tittle"><?php echo $l->t('Security capabilities');?></p>
                <ul>
                    <li><?php echo $l->t('Passwords for public link shares');?></li>
                    <li><?php echo $l->t('Expiration date in internal or public link shares');?></li>
                    <li><a class="hyperlink" href="<?php echo home_url('file-drop') ?>"><?php echo $l->t('File-drop hides existing files, providing just an upload target');?></a></li>
                    <li><?php echo $l->t('Protect public link shares with Video Verification');?></li>
                </ul>
                <p class="section--paragraph"><?php echo $l->t('Admins can control all these abilities, add trusted Federation servers and more');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Pffusr1bac4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 revealOnScroll">
                <p class="section--paragraph__tittle"><?php echo $l->t('Video Verification');?></p>
                <p class="section--paragraph"><?php echo $l->t('In situations where extreme security is warranted and the identity of a recipient has to be verified with absolute certainty before they are granted access, Nextcloud includes the industry-first implementation of Video Verification.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Video Verification enforces a Nextcloud Talk video call before access is given to a share, making sure the identity of the recipient is properly checked. The call can be picked up through the Nextcloud Talk Mobile apps as well as the web interface.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--appstore benefits">
<div class="container-fluid banner">
    <div class="container">
    <div class="col-md-6">
        <p class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Extend your cloud');?></p>
        <p class="section--paragraph revealOnScroll"><?php echo $l->t('You can extend the functionality of your Nextcloud with extra features from the Nextcloud app store. Among the more than 150 apps you can find features that enhance sharing, including:');?></p>
        <p class="section--paragraph">
        <ul>
        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Groupfolders allows admin-shared folders users can\'t remove');?></li>
        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Activities for shared file downloads so you can track who downloads your shared files');?></li>
        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Easy sharing via email, Google+, Diaspora, Facebook and more social channels');?></li>
        </ul>
        </p>
        <div class="text-center morebuttondiv">
			<a href="https://apps.nextcloud.com" class="button button--large button--arrow revealOnScroll"><?php echo $l->t('Appstore');?> <i class="icon-arrow-circle-o-right icon"></i></a>
        </div>
    </div>
    <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/appstore-big.png">
    <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/appstore-big.png">
    </div>
</div>
</section>

<div id="federationScroll"></div>

<section class="section--federation">
<div class="container">
		<h2 class=""><?php echo $l->t('Share across Nextclouds!');?></h2>
	<div class="row">
		<div class="col-md-4 revealOnScroll">
	<!-- 		<a href="https://www.youtube.com/watch?v=9-JEmlH2DEg" target="_blank" style="border: none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/federation/federation.gif" alt="in action" /></a> -->
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/federation.png" alt="in action" />
		</div>
		<div class="col-md-8 feature--block revealOnScroll">
			<p class="section--paragraph"><?php echo $l->t('Sharing files across Nextcloud servers is as easy as sending an email from a Gmail address to a Yahoo account! Instead of an email address, you use a <em>Federated Cloud ID</em>.');?></p>
			<p class="section--paragraph federation-id"><span id="IDtext"><?php echo $l->t('An example Federated Cloud ID is');?></span><strong> <span id="userName">username@sub.example.com/nextcloud</span></strong></p>
			<p class="section--paragraph"><?php echo $l->t('To share a file, enter the Federated Cloud ID in the \'share\' dialog. A notification will pop up on the Nextcloud server of the recipient.');?></p>
			<p class="section--paragraph"><?php echo $l->t('You can find your own Federated Cloud ID in your user settings. Give it to your friends so they can share files with you!');?></p>
		</div>
	</div>
	<div class="row revealOnScroll">
			<div class="col-md-6 ">
					<p class="section--paragraph__tittle"><?php echo $l->t('More details');?></p>
					<p class="section--paragraph"><?php echo $l->t('Learn more in the Nextcloud');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_USER; ?>files/federated_cloud_sharing.html" target="_blank"><?php echo $l->t('user documentation</a> and');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/federated_cloud_sharing_configuration.html"><?php echo $l->t('administrator documentation</a>.');?></p>
		</div>
			<div class="col-md-6">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/federation-config.png" class="img-responsive featureimg" />
			</div>
	</div>
</div>
</section>


