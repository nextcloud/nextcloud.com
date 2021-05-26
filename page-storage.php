<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/storage.css?v=1" rel="stylesheet">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/externalstorage.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/externalstorage.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/externalstorage.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/externalstorage.png">
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
		<div class="col-md-6 image--floated">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png" class="img-responsive featureimg" />
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Unlock your data');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Avoid costly and disruptive migrations and retain your existing, compliant workflows and processes while enabling your employees to collaborate and work efficiently. Nextcloud unlocks corporate data silos, bringing together data from your existing storage systems in one seamless user interface.');?></p>
			 <p class="section--paragraph"><?php echo $l->t('Your IT stays in control of the data thanks to powerful');?> <a class="hyperlink" href="<?php echo home_url('workflow') ?>"><?php echo $l->t('File Access Control</a> and');?> <a class="hyperlink" href="<?php echo home_url('monitoring') ?>"><?php echo $l->t('logging</a> capabilities.');?></p>
		</div>
	</div>
</div>

<section class="section--whitepaper quote">
	<div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2><?php echo $l->t('Windows Network Drive');?></h2>
                <form name="whitepaper" method="post" action="<?php echo home_url('whitepaper-submit') ?>">
                    <p><label for="email"><?php echo $l->t('Download our free Windows Network Drive datasheet');?><br>
                    <input type="hidden" name="segmentId" value="8">
                    <input type="hidden" name="firstname" value="">
                    <input type="hidden" name="requesttime" value="<?php echo time(); ?>">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Subscribe me to the monthly Nextcloud newsletter');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--large" type="submit" value=" Get the datasheet "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/wnd-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--storage">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png" /></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Public, Private and Hybrid unified');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Access existing storage silos like FTP, Windows Network Drives, SharePoint and Samba shares seamlessly through Nextcloud. Protect and optimize data usage in line with compliance and company policy by controlling sharing and performance for each external storage system.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Use Nextcloud to fine tune the balance between cost, availability, performance and security. Deploy multiple data storage systems in the public cloud or hosted with a trusted provider or on-premise.');?></p>
			<p class="section--paragraph"><?php echo $l->t('For large-scale storage solutions, performance optimization, additional tools and advice, see the ');?><a class="hyperlink" href="https://portal.nextcloud.com"><?php echo $l->t('Nextcloud customer portal.');?></a></p>
		</div>
	</div>
</div>
</section>

<div class="separator"></div>
<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6 image--floated">
                <a><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/ibm-spectrum-scale.png" alt="IBM Spectrum Scale logo"/></a>
            </div>
            <div class="col-md-6  feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Consistent file system view with Nextcloud and IBM Spectrum Scale');?></h3>
                <p class="section--paragraph"><?php echo $l->t('A collaboration between Nextcloud and IBM has made the leading large scale file storage and leading content collaboration platform a perfect match for storing, sharing and working with large volumes of data. A integration tool developed with IBM for the German particle accellerator DESY and the University of Augsburg receives Spectrum Scale Watch events every time a file is changed in the Spectrum Scale file system.');?></p>
                <a href="https://nextcloud.com/blog/consistent-file-system-view-with-nextcloud-and-ibm-spectrum-scale/" class="button button--blue button--arrow button--large"><?php echo $l->t('Announcement blog');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--whitepaper quote">
	<div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2><?php echo $l->t('SharePoint Integration');?></h2>
                <form name="whitepaper" method="post" action="<?php echo home_url('whitepaper-submit') ?>">
                    <p><label for="email"><?php echo $l->t('Download our free datasheet on SharePoint as External Storage');?><br>
                    <input type="hidden" name="segmentId" value="9">
                    <input type="hidden" name="firstname" value="">
                    <input type="hidden" name="requesttime" value="<?php echo time(); ?>">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Subscribe me to the monthly Nextcloud newsletter');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--large" type="submit" value=" Get the datasheet "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/sharepoint-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--storage">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--floated">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw2.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw2-wee.png" class="img-responsive featureimg" /></a>
		</div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('Any storage technology you need');?></h3>
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
			<div class="col-md-8 col-md-offset-2 featureblock">
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
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-nw-wee.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Data securely encrypted');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Server side encryption can optionally be enabled on select external or primary storage to securely encrypt the data residing on them. Nextcloud supports external key management, a master recovery password and changing passwords by users. ');?></p>
			<p class="section--paragraph"><?php echo $l->t('Learn more about Nextcloud server side encryption ');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank"><?php echo $l->t('in the documentation</a> and learn more about');?> <a class="hyperlink" href="<?php echo home_url('secure') ?>"><?php echo $l->t('security in Nextcloud</a>');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--appstore benefits">
<div class="container-fluid banner quote">
    <div class="container">
    <div class="col-md-6">
        <h1 class="section--heading-1 section--text--center"><?php echo $l->t('Extend your cloud');?></h1>
        <p class="section--paragraph"><?php echo $l->t('You can extend the functionality of your Nextcloud with extra features from the Nextcloud app store. Among the more than 200 apps you can find a variety of storage solutions including Sia storage support, an innovative decentralized, blockchain based file storage technology.');?></p>
        <div class="text-center morebuttondiv">
			<a href="https://apps.nextcloud.com" class="button button--large button--arrow"><?php echo $l->t('Appstore');?> <i class="icon-arrow-circle-o-right icon"></i></a>
        </div>
    </div>
    <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/appstore-big.png">
    <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/appstore-big.png">
    </div>
</div>
</section>
