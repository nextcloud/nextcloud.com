<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/sharing.css" rel="stylesheet">
<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/jquery-ui.css" rel="stylesheet" />

<script>
	require(["require.config"], function() {
		require(["vendor/jquery.min", "vendor/jquery.ui", "bootstrap", "pages/sharing"],
			function ($, jqueryui) {
				require(["vendor/jquery.youtubepopup"],
					function (jqyoutube) {
						jQuery("a.youtube").YouTubePopup({ hideTitleBar: true });
					}
				);
			}
		);
	});
</script>
</head>

<div class="background sharing-background"> 
    <div class="container">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Share on your terms');?></h1>
                <h2><?php echo $l->t('Nextcloud features an easy to use and powerful web interface. You can access all your files wherever you are and however you like.');?></h2>
            </div>
        </div>
    </div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <p class="section--paragraph"><?php echo $l->t('Sharing is who we are. At work, we share and collaborate with colleagues to get work done. At home, we share our good and our bad moments with family and friends. <span class="avoidwrap">With Nextcloud, sharing is a core part of your experience.</span>');?></p>
            </div>
        </div>
    </div>
</section>            

<section class="section--sharing">
    <div class="container">
        <div class="row feature--block">
            <div class="col-md-6">
                <h2 class="section--paragraph__tittle"><?php echo $l->t('Work, share, collaborate, enjoy');?></h2>
                <p class="section--paragraph"><?php echo $l->t('Share images, documents or music with colleagues on your server, send password protected public links to friends, let customers upload files to you and get notifications on your phone when a user on another Nextcloud server shares files directly with you.');?></p>
                <p class="section--paragraph"><?php echo $l->t('You can trust that when you share, Nextcloud makes sure you stay in control over your data. You can easily see a list of shares, remove or change permissions and restore older versions of files.');?></p>
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
        <div class="row feature--block">
            <div class="col-md-5">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/comments.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/comments-wee.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-7">
            <p class="section--paragraph__tittle"><?php echo $l->t('Work with others');?></p>
                <p class="section--paragraph"><?php echo $l->t('You can comment on files and discuss options. Through <a href="/collaboraonline">our Collabora Online integration</a> you can work together in real time on presentations or word documents and our <a href="/webrtc">video Conferencing features</a> allow you to call and discuss in real time!');?></p>
                <p class="section--paragraph"><?php echo $l->t('You can find files using our full text search app or by giving them tags and searching for them. Admins can even use <a href="/workflow">our Workflow tools</a> to automatically tag files uploaded by specific users, groups or by filetype and execute actions like converting files based on these tags.');?></p>
            </div>
        </div>
        <div class="row feature--block">
            <div class="col-md-6">
                <p class="section--paragraph__tittle"><?php echo $l->t('Feature overview');?></p>
                <ul>
                    <li><?php echo $l->t('Tag and comment on files, and see tags and comments by others');?></li>
                    <li><?php echo $l->t('See what is happening on your Nextcloud in the Activity feed');?></li>
                    <li><?php echo $l->t('Previous versions of files you modified are retained and can be brought back. Deleted files can be found in the trash.');?></li>
                    <li><?php echo $l->t('Share photo galleries');?></li>
                    <li><?php echo $l->t('Share public links read-only or with editing capabilities');?></li>
                    <li><?php echo $l->t('Anonymous upload hides existing files, providing just an upload target');?></li>
                    <li><?php echo $l->t('Optionally put a password or expiration date on public link shares');?></li>
                    <li><?php echo $l->t('Share directly to users on other Nextcloud, ownCloud or Pydio servers (<a href="#federation">"federation"</a>)');?></li>
                    <li><?php echo $l->t('Admins can control all these abilities, add trusted Federation servers and more');?></li>
                </ul>
            </div>
            <div class="col-md-6">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing_admin_full.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing_admin.png" class="img-responsive featureimg" /></a>
            </div>
        </div>
    </div>
</section>
<section class="section--federation">
<div class="container">
	<a name="federation"></a>
		<h2 class=""><?php echo $l->t('Share across Nextclouds!');?></h2>
	<div class="row">
		<div class="col-md-4">
	<!-- 		<a href="https://www.youtube.com/watch?v=9-JEmlH2DEg" target="_blank" style="border: none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/federation/federation.gif" alt="in action" /></a> -->
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/federation.png" alt="in action" />
		</div>
		<div class="col-md-8 feature--block">
			<p><?php echo $l->t('Sharing files across Nextcloud servers is as easy as sending an email from a Gmail address to a Yahoo account! Instead of an email address, you use a <em>Federated Cloud ID</em>.');?></p>
			<p class="federation-id"><span id="IDtext"><?php echo $l->t('An example Federated Cloud ID is');?></span><strong> <span id="userName">username@sub.example.com/nextcloud</span></strong></p>
			<p><?php echo $l->t('To share a file, enter the Federated Cloud ID in the \'share\' dialog. A notification will pop up on the Nextcloud server of the recipient.');?></p>
			<p><?php echo $l->t('You can find your own Federated Cloud ID in your user settings. Give it to your friends so they can share files with you!');?></p>
		</div>
	</div>
	<h2><?php echo $l->t('More details');?></h2>
	<div class="row">
			<div class="col-md-6 ">
					<p><?php echo $l->t('Learn more in the Nextcloud');?> <a href="<?php echo $DOCUMENTATION_USER; ?>files/federated_cloud_sharing.html" target="_blank"><?php echo $l->t('user documentation</a> and');?> <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/federated_cloud_sharing_configuration.html"><?php echo $l->t('administrator documentation</a>.');?></p>
		</div>
			<div class="col-md-6">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/federation-config.png" class="img-responsive featureimg" />
			</div>
	</div>
</div>
</section>