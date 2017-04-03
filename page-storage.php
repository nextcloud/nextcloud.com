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
		<div class="col-md-6 image--floated revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Unlocking corporate data silos');?></p>
			<p class="section--paragraph"><?php echo $l->t('Avoid costly and disruptive migrations and retain your existing, compliant workflows and processes while enabling your employees to collaborate and work efficiently.');?></p> 
			 <p class="section--paragraph"><?php echo $l->t('Nextcloud ensures your IT stays in control of the data by providing powerful <a class="hyperlink" href="/workflow">File Access Control</a> and <a class="hyperlink" href="/monitoring">logging</a> capabilities.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw2.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw2-wee.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Public, Private and Hybrid unified');?></p>
			<p class="section--paragraph"><?php echo $l->t('Seemlessly access existing storage silos like FTP, Windows Network Drives, Object Storage and Samba shares through Nextcloud. Protect and optimize data usage in line with compliance and company policy by controling sharing and performance for each external storage system.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Fine tune the balance between cost, availability, performance and security by deploying multiple data storage systems in the public cloud or hosted with a trusted provider or on-premise.');?></p>
		</div>
	<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph"><?php echo $l->t('Some external storage technologies supported out of the box include:');?></p>
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-3.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-3.png" class="img-responsive featureimg" /></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 image--floated revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-nw-wee.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Secure server side encryption');?></p>
			<p class="section--paragraph"><?php echo $l->t('Server side encryption can be employed on select external or primary storage to securely encrypt the data residing on them. Nextcloud supports external key management, a master recovery password and changing passwords by users.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Learn more about Nextcloud server side encryption ');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank"><?php echo $l->t('in the documentation.');?></a>.</p>
		</div>
	</div>
</div>
</section>
