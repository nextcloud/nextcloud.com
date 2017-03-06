<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/workflow.css" rel="stylesheet">
<!--<script>
	require(["require.config"], function() {
		require(["pages/clients"])
	});
</script>-->
</head>
<div class="background workflow-background"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('File Access Control and Workflows');?></h1>
				<h2><?php echo $l->t('Manage, control and secure the flow of data on your Nextcloud server');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--workflow">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Access on your terms');?></p>
			<p class="section--paragraph"><?php echo $l->t('Through File Access Control and automatic file tagging, Nextcloud gives administrators control over data access by enabling them to define strict rules requests need to adhere to. If users in certain groups or geographic regions should not be given access to certain file types or if data with a specific tag should not be shared outside the company, administrators can make sure their Nextcloud instance enforces these rules.');?></p>
		</div>
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control-wee.png" /></a>
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
<div class="wrap container-widest">
	<div class="featurerow">
		<h1 class="featuretitle"><?php echo $l->t('Screenshots');?></h1>
		<div class="row">
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png" class="img-responsive featureimg" /></a>
			</div>
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png" /></a>
			</div>
		</div>
	</div>
</div>
