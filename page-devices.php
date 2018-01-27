<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/devices.css" rel="stylesheet">
<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/jquery-ui.css" rel="stylesheet" />

<script>
require(["require.config"], function() {
	require(["pages/devices"])
});
</script>
</head>

<div class="background sharing-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 revealOnScroll topheader">
                <h1><?php echo $l->t('Keep your server at home.');?></h1>
                <h2><?php echo $l->t('Companies all around us build hardware Nextcloud runs on out of the box.');?></h2>
            </div>
        </div>
    </div>
</div>

<section class="section--devices">
    <div class="container">
        <div class="row revealOnScroll feature--block">
            <div class="col-md-5">
                <a href="<?php echo home_url('box') ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/box/box-perspective.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-7">
                <p class="section--paragraph__tittle"><?php echo $l->t('Nextcloud Box');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Box comes preinstalled with Nextcloud, running on Ubuntu Core (based on the new super-secure, remotely upgradeable Linux app packages known as snaps) as the OS.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The box consists of a 1 TB USB3 hard drive from WDLabs, a Nextcloud case with room for the drive and a compute board, a microUSB charger, cables and adapters, a screw driver and screws');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Box is compatible with the Raspberry Pi 2 (not included!). Support for other boards (e.g. Raspberry Pi 3) is coming soon.');?></p>
                <a href="<?php echo home_url('box') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
            </div>
        </div>
        <div class="row revealOnScroll feature--block">
            <div class="col-md-5">
                <a href="<?php echo home_url('spreedbox') ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/spreedbox/spreedbox.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-7">
                <p class="section--paragraph__tittle"><?php echo $l->t('Spreedbox');?></p>
                <p class="section--paragraph"><?php echo $l->t('Behind the award-winning designed device by struktur AG operates a secure video chat and file exchange solution for small enterprise usage.');?></p>
                <p class="section--paragraph"><?php echo $l->t('It offers Strong end-to-end encrypted audio and video chat, a Nextcloud based file sync and share solution and advanced security features with a silicon hardware key generator.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Spreedbox offers an optional SIP gateway, enabling web conferencing participants to dial in through a traditional telephone connection.');?></p>
                <a href="<?php echo home_url('spreedbox') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
            </div>
        </div>
        <div class="row revealOnScroll feature--block">
        <div class="col-md-5">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/syncloud/syncloud.jpg"><img src="<?php bloginfo('template_directory'); ?>/assets/img/syncloud/syncloud.jpg" class="img-responsive featureimg" /></a>
        </div>
        <div class="col-md-7">
            <p class="section--paragraph__tittle"><?php echo $l->t('Syncloud');?></p>
            <p class="section--paragraph"><?php echo $l->t('Syncloud is a home server device which fully supports Nextcloud.');?></p>
            <p class="section--paragraph"><?php echo $l->t('It features easy installation and activation, selection of hardware among 10+ boards, easy use of external hard drives for storage, domain name for device and access to device through Internet, automatic HTTPS setup and more applications.');?></p>
            <a href="http://syncloud.org" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
        </div>
    </div>
</div>
</section>
<div class="calltoaction">
    <h1 class="section--heading-2 section--text--center"><?php echo $l->t('Interested in building Nextcloud Devices?');?></h1>
    <p class="section--paragraph section--text--center"><?php echo $l->t('You can');?> <a class="hyperlink" href="<?php echo home_url('contact') ?>"><?php echo $l->t('get in touch</a> with us, and we will help you with individual offerings and get your devices listed on this page.');?></p>
</div>
