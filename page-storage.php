<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/storage.css" rel="stylesheet">
<!--<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
<script type="text/javascript">
    var CaptchaCallback = function() {
        grecaptcha.render('RecaptchaField1', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField2', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
    };
</script>-->
<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png">
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
			 <p class="section--paragraph"><?php echo $l->t('Your IT stays in control of the data thanks to powerful');?> <a class="hyperlink" href="<?php echo home_url('workflow') ?>"><?php echo $l->t('File Access Control</a> and');?> <a class="hyperlink" href="<?php echo home_url('monitoring') ?>"><?php echo $l->t('logging</a> capabilities.');?></p>
		</div>
	</div>
</div>

<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('Windows Network Drive');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Download our free Windows Network Drive datasheet');?><br>
                     <td colspan="2" style="text-align:center">
                    <div class="">
                        <div id="RecaptchaField1"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="8">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large" type="submit" value=" Get the datasheet "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/wnd-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--storage">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Public, Private and Hybrid unified');?></p>
			<p class="section--paragraph"><?php echo $l->t('Access existing storage silos like FTP, Windows Network Drives, SharePoint and Samba shares seamlessly through Nextcloud. Protect and optimize data usage in line with compliance and company policy by controlling sharing and performance for each external storage system.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Use Nextcloud to fine tune the balance between cost, availability, performance and security. Deploy multiple data storage systems in the public cloud or hosted with a trusted provider or on-premise.');?></p>
			<p class="section--paragraph"><?php echo $l->t('For large-scale storage solutions, performance optimization, additional tools and advice, see the ');?><a class="hyperlink" href="https://portal.nextcloud.com"><?php echo $l->t('Nextcloud customer portal.');?></a></p>
		</div>
	</div>
</div>
</section>

<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('SharePoint Integration');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Download our free datasheet on SharePoint as External Storage');?><br>
                     <td colspan="2" style="text-align:center">
                    <div class="">
                        <div id="RecaptchaField2"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="9">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large" type="submit" value=" Get the datasheet "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/sharepoint-thumbnail-banner.png"/>
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
            <p class="section--paragraph"><?php echo $l->t('Some of the storage technologies supported in Nextcloud include NFS and local storage as well as scalable, multi-bucket capable object storage like S3 and SWIFT compatible and CIFS/Windows Shares. Nextcloud can also seamlessly access files on (s)FTP, SharePoint systems and more.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Advanced capabilities and additional tools to enhance performance on large instances or using SAML and Kerberos tickets to authenticate to a SMB share are available and documented on the ');?><a class="hyperlink" href="https://portal.nextcloud.com"><?php echo $l->t('Nextcloud customer portal.');?></a></p>
		</div>
	</div>
</div>
</section>
<section>
<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock revealOnScroll">
				<p class="section--paragraph text-center"><?php echo $l->t('Contact our sales team if you want to know about support for your enterprise storage technology and integration in Nextcloud.');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Contact sales');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section class="section--storage">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-nw-wee.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Data securely encrypted');?></p>
			<p class="section--paragraph"><?php echo $l->t('Server side encryption can optionally be enabled on select external or primary storage to securely encrypt the data residing on them. Nextcloud supports external key management, a master recovery password and changing passwords by users. ');?></p>
			<p class="section--paragraph"><?php echo $l->t('Learn more about Nextcloud server side encryption ');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank"><?php echo $l->t('in the documentation</a> and learn more about');?> <a class="hyperlink" href="<?php echo home_url('secure') ?>"><?php echo $l->t('security in Nextcloud</a>');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--appstore benefits">
<div class="container-fluid banner">
    <div class="container">
    <div class="col-md-6">
        <p class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Extend your cloud');?></p>
        <p class="section--paragraph revealOnScroll"><?php echo $l->t('You can extend the functionality of your Nextcloud with extra features from the Nextcloud app store. Among the more than 150 apps you can find a variety of storage solutions including Sia storage support, an innovative decentralized, blockchain based file storage technology.');?></p>
        <div class="text-center morebuttondiv">
			<a href="https://apps.nextcloud.com" class="button button--large button--arrow revealOnScroll"><?php echo $l->t('Appstore');?> <i class="icon-arrow-circle-o-right icon"></i></a>
        </div>
    </div>
    <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/appstore-big.png">
    <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/appstore-big.png">
    </div>
</div>
</section>
