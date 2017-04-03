<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/storage.css" rel="stylesheet">
<!--<script>
	require(["require.config"], function() {
		require(["pages/clients"])
	});
</script>-->
</head>
<div class="background storage-background"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Access your data wherever it is');?></h1>
				<h2><?php echo $l->t('Avoid migration and access your files through Nextcloud');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--storage">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Access your data anywhere');?></p>
			<p class="section--paragraph"><?php echo $l->t('The unique External Storage feature of Nextcloud provides your employees access to company data wherever it is, unlocking corporate storage silos through a single, easy to use interface.');?></p> 
			 <p class="section--paragraph"><?php echo $l->t('Avoid costly migrations and retain your existing, compliant processes while enabling your employees to collaborate and work efficiently. Nextcloud ensures your IT stays in control of the data by providing <a class="hyperlink" href="/workflow">file access control</a> and <a class="hyperlink" href="/monitoring">logging capabilities.</a>');?></p>
		</div>
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png" /></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention-wee.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Define automated Workflows and retention');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Workflow engine expands these capabilities, enabling administrators to start any kind of actions based on these triggers, for example converting document file types to PDF upon upload by members of a specified group or emailing files put in a specified folder with a given tag to a given mail address.');?></p>
			<p class="section--paragraph"><?php echo $l->t('File retention and deletion can also be controlled based on tags set manually or automatically, ensuring legal or practical requirements for the longevity of data lifespans can be enforced.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('File access control at home');?></p>
			<p class="section--paragraph"><?php echo $l->t('Home users will find that the File Access Control app and other workflow tools can be used to prevent accidental sharing of sensitive data, adding an additional layer of protection to Nextcloud.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The example on the right ensures that files with the "protected" tag are not accessible outside the home network nor synced by the clients. <a href="https://nextcloud.com/?p=869" target="_blank">Learn more in our blog</a>.');?></p>
		</div>
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/FileAccessControl-at-home.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/FileAccessControl-at-home.png" class="img-responsive featureimg" /></a>
		</div>
	</div>
</div>
</section>
