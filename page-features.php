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
			<a href="#files"><?php echo $l->t('File access & sharing');?></a>
			<a href="#control"><?php echo $l->t('Mobile & desktop clients');?></a>
			<a href="#lifecycle"><?php echo $l->t('External storage');?></a>
			<a href="#capabilities"><?php echo $l->t('Calendar & Contacts');?></a>
			<a href="#capabilities"><?php echo $l->t('Secure audio & video calls');?></a>
			<a href="#capabilities"><?php echo $l->t('Collabora Online Office');?></a>
			<a href="#capabilities"><?php echo $l->t('Nextcloud in action');?></a>
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

<section class="section--control">
	<a name="control" id="control"></a>
	<div class="container">
		<div class="col-md-5">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP-wee.png" alt="in action" /></a>
		</div>

		<div class="col-md-6 feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Security first');?></p>
			<p class="section--paragraph"><?php echo $l->t('We are deeply committed to protect the safety of the data of our customers. Because:');?></p>
			<p class="section--paragraph"><?php echo $l->t('we follow industry best practices around security (aligned to ISO27001c14).');?></p>
			<p class="section--paragraph"><?php echo $l->t('we offer some of the <a class="hyperlink" href="https://nextcloud.com/introducing-the-nextcloud-bug-bounty-program/" target="_blank">highest security bug bounties in the open source industry.</a>');?></p>
			<p class="section--paragraph"><?php echo $l->t('we are confident that Nextcloud offers the best security in the open source file sync and share industry.');?></p>
			<a href="/sharing" class="button button--blue button--arrow button--large"><?php echo $l->t('Workflow handling');?></a>
		</div>
	</div>
</section>






