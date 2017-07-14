<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/storage.css" rel="stylesheet">
<!--<script>
	require(["require.config"], function() {
		require(["pages/clients"])
	});
</script>-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<div class="background storage-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Secure access to your data anywhere');?></h1>
				<h2><?php echo $l->t('Avoid migration and access your files wherever they are stored');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--storage">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--floated revealOnScroll">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png" class="img-responsive featureimg" />
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Unlock your data');?></p>
			<p class="section--paragraph"><?php echo $l->t('Avoid costly and disruptive migrations and retain your existing, compliant workflows and processes while enabling your employees to collaborate and work efficiently. Nextcloud unlocks corporate data silos, bringing together data from your existing storage systems in one seamless user interface.');?></p>
			 <p class="section--paragraph"><?php echo $l->t('Your IT stays in control of the data thanks to powerful <a class="hyperlink" href="/workflow">File Access Control</a> and <a class="hyperlink" href="/monitoring">logging</a> capabilities.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Public, Private and Hybrid unified');?></p>
			<p class="section--paragraph"><?php echo $l->t('Access existing storage silos like FTP, Windows Network Drives, SharePoint and Samba shares seamlessly through Nextcloud. Protect and optimize data usage in line with compliance and company policy by controlling sharing and performance for each external storage system.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Use Nextcloud to fine tune the balance between cost, availability, performance and security. Deploy multiple data storage systems in the public cloud or hosted with a trusted provider or on-premise.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--whitepaper quote">
	<div class="container text-center revealOnScroll">
	<h2 class="revealOnScroll"><?php echo $l->t('Get our datasheets');?></h2>
	<div class="row">
    <div class="col-md-offset-4 col-md-4">
        <p>
            <form name="whitepaper" method="post" action="../storage-whitepapersubmit">
                <p><label for="email"><?php echo $l->t('Download our free datasheets about<br /> Windows Network Drive and Sharepoint');?><br>
                <input class="mail" type="text" name="email" maxlength="80" size="30" placeholder="Enter your email"></label></p>
                <td colspan="2" style="text-align:center">
                <div class="text-center">
                    <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                </div>
                </td>
                <p><input class="button button--large" type="submit" value=" Get the datasheet "></p>
            </form>
        </p>
	</div>
    </div>
	</div>
</section>

<section class="section--storage">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--floated revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw2.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw2-wee.png" class="img-responsive featureimg" /></a>
		</div>
	<div class="col-md-6 revealOnScroll">
		<p class="section--paragraph__tittle"><?php echo $l->t('Any storage technology you need');?></p>
		<p class="section--paragraph"><?php echo $l->t('Some of the storage technologies supported in Nextcloud include NFS and local storage as well as scalable, multi-bucket capable object storage like S3 and SWIFT compatible and CIFS/Windows Shares. Nextcloud can also seamlessly access files on (s)FTP, SharePoint, Dropbox or Google Drive systems and more.');?></p>
		</div>
	</div>
</div>
</section>
<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock text-center revealOnScroll">
				<p class="section--paragraph"><?php echo $l->t('Contact our sales team if you want to know about support for your enterprise storage technology and integration in Nextcloud.');?></p>
				<div class="text-center morebuttondiv">
					<a href="/buy" class="button button--large button--arrow"><?php echo $l->t('Contact sales');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="section--storage">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-nw-wee.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Data securely encrypted');?></p>
			<p class="section--paragraph"><?php echo $l->t('Server side encryption can optionally be enabled on select external or primary storage to securely encrypt the data residing on them. Nextcloud supports external key management, a master recovery password and changing passwords by users. ');?></p>
			<p class="section--paragraph"><?php echo $l->t('Learn more about Nextcloud server side encryption ');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank"><?php echo $l->t('in the documentation</a> and learn more about <a class="hyperlink" href="/secure">security in Nextcloud</a>');?></p>
		</div>
	</div>
</div>
</section>
