<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/devices.css" rel="stylesheet">
<!-- <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/jquery-ui.css" rel="stylesheet" /> -->

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

<?php
  // This is ordered by:
  //  * available
  //  * announced
  //  * not available any more
?>

<section class="section--devices">
    <div class="container">
        <h4>Currently available</h4>
        <div class="row revealOnScroll feature--block">
            <div class="col-md-5">
                <a href="https://ownyourbits.com/nextcloudpi/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/box/nextcloudpi.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-7">
                <p class="section--paragraph__tittle"><?php echo $l->t('NextcloudPi');?></p>
                <p class="section--paragraph"><em><?php echo $l->t('Build your own Nextcloud device!');?></em></p>
                <p class="section--paragraph"><?php echo $l->t('NextCloudPi is a Nextcloud instance that is preinstalled and preconfigured, and includes a management interface with all the tools you need to self host your private data in a single package.');?></p>
                <p class="section--paragraph"><?php echo $l->t('You can install it on a Raspberry Pi or a variety of other development boards as well as on a standard Debian install that is running on bigger devices like a Intel NUC, old laptop, desktop or a full server.');?></p>
                <p class="section--paragraph"><?php echo $l->t('NextCloudPi is a community project that aims at making it easier for everyone to have control over their own data. It is free, thriving only on your help, feedback and support!');?></p>
                <div class="devices-tags">
                    <span>Do-It-Yourself</span>
                    <span>Community</span>
                </div>
                <a href="https://ownyourbits.com/nextcloudpi/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
            </div>
        </div>
        <div class="row revealOnScroll feature--block">
            <div class="col-md-5">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/syncloud/syncloud.jpg"><img src="<?php bloginfo('template_directory'); ?>/assets/img/syncloud/syncloud.jpg" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-7">
                <p class="section--paragraph__tittle"><?php echo $l->t('Syncloud');?></p>
                <p class="section--paragraph"><em><?php echo $l->t('Syncloud is a home server device which fully supports Nextcloud.');?></em></p>
                <p class="section--paragraph"><?php echo $l->t('It features easy installation and activation, selection of hardware among 10+ boards, easy use of external hard drives for storage, domain name for device and access to device through Internet, automatic HTTPS setup and more applications.');?></p>
                <div class="devices-tags">
                    <span>Commercial</span>
                </div>
                <a href="http://syncloud.org" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
            </div>
        </div>
        <div class="row revealOnScroll feature--block">
            <div class="col-md-5">
                <a href="https://indiecomputing.com/products/ubosbox-nextcloud-on-nuc/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/indiecomputing/ubosbox-nextcloud-on-nuc-model-a-on-500x375.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-7">
                <p class="section--paragraph__tittle"><?php echo $l->t('UBOSbox Nextcloud on NUC &ndash; Home Server');?></p>
                <p class="section--paragraph"><em><?php echo $l->t('Fully-assembled home server based on Intel NUC with optional management service');?></em></p>
                <ul class="section--paragraph" style="list-style-type: disc">
                    <li><?php echo $l->t('Preconfigured: UBOS Linux (pre-installed) and Nextcloud plus apps (auto-install on first boot)');?></li>
                    <li><?php echo $l->t('Designed for use without monitor and keyboard')?></li>
                    <li><?php echo $l->t('UBOS Live systems management service for automatic upgrades, remote systems diagnosis and troubleshooting (option)');?></li>
                </ul>
                <div class="devices-tags">
                    <span>Commercial</span>
                    <span>Managed</span>
                </div>
                <a href="https://indiecomputing.com/products/ubosbox-nextcloud-on-nuc/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more and order');?></a>
            </div>
        </div>
        <div class="row revealOnScroll feature--block">
            <div class="col-md-5">
                <a href="https://indiecomputing.com/products/ubosbox-nextcloud-on-raspberrypi/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/indiecomputing/ubosbox-nextcloud-on-raspberrypi-on-500x375.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-7">
                <p class="section--paragraph__tittle"><?php echo $l->t('UBOSbox Nextcloud on Raspberry Pi &ndash; Home Server (kit)');?></p>
                <p class="section--paragraph"><em><?php echo $l->t('Complete home server kit for the enthusiast; physical assembly (but no software installation) required');?></em></p>
                <ul class="section--paragraph" style="list-style-type: disc">
                    <li><?php echo $l->t('Preconfigured: UBOS Linux (pre-installed) and Nextcloud plus apps (auto-install on first boot)');?></li>
                    <li><?php echo $l->t('Designed for use without monitor and keyboard')?></li>
                    <li><?php echo $l->t('UBOS Live systems management service for automatic upgrades, remote systems diagnosis and troubleshooting (option)');?></li>
                </ul>
                <div class="devices-tags">
                    <span>Commercial</span>
                    <span>Managed</span>
                    <span>Do-It-Yourself</span>
                </div>
                <a href="https://indiecomputing.com/products/ubosbox-nextcloud-on-raspberrypi/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more and order');?></a>
            </div>
        </div>

        <h4>Announced, but not yet available</h4>
        <div class="row revealOnScroll feature--block">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/box/MOX.png" class="img-responsive featureimg" />
            </div>
            <div class="col-md-7">
                <p class="section--paragraph__tittle"><?php echo $l->t('Turris MOX: Cloud');?></p>
                <p class="section--paragraph"><em><?php echo $l->t('Modular router comes with private cloud module.');?></em></p>
                <p class="section--paragraph"><?php echo $l->t('The Turris MOX: Cloud bundle  is a ready-to-go kit with a 64bit dualcore CPU, 1GB RAM, wifi connectivity and four USB 3.0 ports for attaching storage. The MOX makes it easy for users to set up RAID storage and Nextcloud for hosting and can be extended with other router modules like network ports.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Turris MOX: Cloud bundle is available for pre-order with a 34% discount for 115 dollar until the end of the fundraising. Final pricing to be determined.');?></p>
                <div class="devices-tags">
                    <span>Commercial</span>
                </div>
                <a href="https://nextcloud.com/blog/turris-mox-adds-nextcloud-to-put-users-back-in-control-over-their-data/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
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
                <p class="section--paragraph"><?php echo $l->t('Pricing is in the Eur 1500/USD 1500 range.');?></p>
                <div class="devices-tags">
                    <span>Commercial</span>
                </div>
                <a href="<?php echo home_url('spreedbox') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
            </div>
        </div>

        <h4>Sold out, or not available any more</h4>
        <div class="row revealOnScroll feature--block" id="nextcloud-box">
            <div class="col-md-5">
                <a href="<?php echo home_url('box') ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/box/box-perspective.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-7">
                <p class="section--paragraph__tittle"><em><?php echo $l->t('Nextcloud Box');?></em></p>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Box comes preinstalled with Nextcloud, running on Ubuntu Core (based on the new super-secure, remotely upgradeable Linux app packages known as snaps) as the OS.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The box consists of a 1 TB USB3 hard drive from WDLabs, a Nextcloud case with room for the drive and a compute board, a microUSB charger, cables and adapters, a screw driver and screws');?></p>
                <p class="section--paragraph"><strong><?php echo $l->t('Sadly, the box is sold out and no longer produced by WD Labs!');?></strong></p>
                <a href="<?php echo home_url('box') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
            </div>
        </div>

    </div>
</div>
</section>
<div class="calltoaction">
    <h1 class="section--heading-2 section--text--center"><?php echo $l->t('Interested in building Nextcloud Devices?');?></h1>
    <p class="section--paragraph section--text--center"><?php echo $l->t('You can');?> <a class="hyperlink" href="<?php echo home_url('contact') ?>"><?php echo $l->t('get in touch</a> with us, and we will help you with individual offerings and get your devices listed on this page.');?></p>
</div>
