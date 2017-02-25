<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/clients.css" rel="stylesheet">
<!--<script>
	require(["require.config"], function() {
		require(["pages/clients"])
	});
</script>-->
</head>
<div class="background clients-background"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Mobile and <span class="avoidwrap">desktop clients</span>');?></h1>
				<h2><?php echo $l->t('Have your data handy wherever you are and share it with our clients.');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--desktop">
	<a name="hosting" id="hosting"></a>
	<div class="container">
		<div class="col-md-6">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/linux.png" alt="in action" >
		</div>
		<div class="col-md-6 feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Sync and collaborate on your desktop or laptop');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud provides desktop clients for Windows, Mac and Linux. With these you can keep one or more folders full of your fotos, videos and documents synchronized with your server. Any file you add, modify or delete in the synced folders on your desktop or laptop will show up, change or disappear on the server and all other connected devices. Thanks to the client, you can work with your files even when you are not online!');?></p>
			<p class="section--paragraph"><?php echo $l->t('The file manager integration means you can see what files are synchronized and you can easily share them directly with other users on your server or using a public link.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The desktop client will also notify you when something happens on your private cloud, for example if you receive a new share or get an audio/video call. You can see a history of what happened with your files in the Activity overview.');?></p>
<!-- 			<a href="install/#install-clients" class="button button--blue button--arrow button--large"><?php echo $l->t('Get the desktop client');?></a> -->
		</div>
	</div>	
</section>

<section class="section--mobile">
	<a name="hosting" id="hosting"></a>
	<div class="container">
		<div class="col-md-6 image--floated">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/android.gif" alt="in action" >
		</div>
		<div class="col-md-6 feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Your files with you wherever you are');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud clients for Android and iOS allow you to sync and share your files, in a fully secure way through an encrypted connection. The mobile clients feature automatic upload of pictures and videos you take and can make select files and folders available offline.');?></p>
			<p class="section--paragraph"><?php echo $l->t('You can rename, delete and move files, view images and documents. The clients handle multiple accounts and show activity happening on your server, notifying you of new events such as the availability of new shares or a audio/video call.');?></p>
			<a href="install/#install-clients" class="button button--blue button--arrow button--large"><?php echo $l->t('Get the clients');?></a>
		</div>
	</div>	
</section>
