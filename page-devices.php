<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/devices.css?v=1" rel="stylesheet">
<!-- <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/jquery-ui.css" rel="stylesheet" /> -->

<script>
require(["require.config"], function() {
    require(["pages/devices"])
});
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/devices/assembly.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/devices/assembly.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/devices/assembly.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/devices/assembly.png">
</head>

<div class="background sharing-background">
    <div class="container">
        <div class="row">
            <div class="col-md-4 topheader">
                <h1><?php echo $l->t('Keep your server at home.');?></h1>
                <h2><?php echo $l->t('Companies all around us build hardware Nextcloud runs on out of the box.');?></h2>
            </div>
        </div>
    </div>
</div>

<?php
  // This is ordered by:
  //  * available
  //  * announced or pre-order
  //  * not available any more
?>

<section class="section--devices">
<div class="container-widest">
    <div class="row">
        <h4>Currently available</h4>
        <div class="col-md-4">
            <div class="block-container">
                <div class="text-center">
                    <a href="https://indiecomputing.com/products/ubosbox-nextcloud-on-odroid-hc2/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/devices/ubosbox-nextcloud-on-odroid-hc2-500x375.jpg" class="text-center featureimg" /></a>
                </div>
                <div class="col-md-12">
                    <h3 class="section--paragraph__title"><?php echo $l->t('UBOSbox Nextcloud on ODROID-HC2 &ndash; Home/Office Server');?></h3>
                    <p class="section--paragraph"><em><?php echo $l->t('Large disk options on this NAS-class device');?></em></p>
                    <ul class="section--paragraph" style="list-style-type: disc">
                        <li><?php echo $l->t('Preconfigured: UBOS Linux (pre-installed) and Nextcloud plus apps (auto-install on first boot)');?></li>
                        <li><?php echo $l->t('Can be set up and maintained without attached monitor and keyboard')?></li>
                        <li><?php echo $l->t('Choose from several large disk options up to 8TB (larger on request)')?></li>
                        <li><?php echo $l->t('Easy day-to-day management: upgrades, backups, network configuration and more are just a single command')?></li>
                        <li><?php echo $l->t('UBOS Live systems management service for automatic upgrades, remote systems diagnosis and troubleshooting (option)');?></li>
                    </ul>
                    <div class="devices-tags">
                        <span>Commercial</span>
                        <span>Managed</span>
                    </div>
                    <a href="https://indiecomputing.com/products/ubosbox-nextcloud-on-nuc/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more and order');?></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block-container">
                <div class="text-center">
                    <a href="https://shop.hanssonit.se/product-category/nextcloud/home-sme-server/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/devices/nuc10side.jpeg" class="text-center featureimg" /></a>
                </div>
                <div class="col-md-12">
                    <h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Home/SME Server');?></h3>
                    <p class="section--paragraph"><em><?php echo $l->t('Get your own self-hosted cloud server!');?></em></p>
                    <p class="section--paragraph"><?php echo $l->t('The Nextcloud Home/SME Server is a Nextcloud server pre-configured with Nextcloud and ready to boot once delivered. Just as the Nextcloud VM it includes easy to setup apps like Collabora, OnlyOffice, Talk and more.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Updates are managed with a easy-to-run update script which updates the whole server in just one single command. The server is based on a powerful Intel 64-bit CPU (10:th-gen), 500 GB M2 PCIe SSD + 2/4 TB HDD/SSD, and 16/32 GB RAM.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('The Nextcloud Home/SME server is made by the team behind the Nextcloud VM, and aims to be the easiest way to setup your own cloud - now available as a bare-bone server!');?></p>
                    <div class="devices-tags">
                        <span>Managed</span>
                        <span>Commercial</span>
                        <span>Community</span>
                    </div>
                    <a href="https://shop.hanssonit.se/product-category/nextcloud/home-sme-server/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more and order');?></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block-container">
                <div class="text-center">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/devices/syncloud.jpg"><img src="<?php bloginfo('template_directory'); ?>/assets/img/devices/syncloud.jpg" class="text-center featureimg" /></a>
                </div>
                <div class="col-md-12">
                    <h3 class="section--paragraph__title"><?php echo $l->t('Syncloud');?></h3>
                    <p class="section--paragraph"><em><?php echo $l->t('Syncloud is a home server device which fully supports Nextcloud.');?></em></p>
                    <p class="section--paragraph"><?php echo $l->t('It features easy installation and activation, selection of hardware among 10+ boards, easy use of external hard drives for storage, domain name for device and access to device through Internet, automatic HTTPS setup and more applications.');?></p>
                    <div class="devices-tags">
                        <span>Commercial</span>
                    </div>
                    <a href="http://syncloud.org" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block-container">
                <div class="text-center">
                    <a href="https://www.homedrive.io/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/devices/homedrive.png" class="text-center featureimg" /></a>
                </div>
                <div class="col-md-12">
                    <h3 class="section--paragraph__title"><?php echo $l->t('HomeDrive');?></h3>
                    <p class="section--paragraph"><em><?php echo $l->t('Easy Nextcloud hosting at home. Access your data anywhere in the world.');?></em></p>
                    <ul class="section--paragraph" style="list-style-type: disc">
                        <li><?php echo $l->t('HomeDrive provides an easy way to host Nextcloud at your home. It requires zero configuration to work, and automatically updates itself.');?></li>
                        <li><?php echo $l->t('Setting up HomeDrive is as simple as plugging it into your home router. You can start accessing your data under a custom domain name from anywhere in the world right away.')?></li>
                        <li><?php echo $l->t('Traffic from and to your HomeDrive server is end-to-end encrypted to ensure security and your privacy.')?></li>
                    </ul>
                    <div class="devices-tags">
                        <span>Commercial</span>
                        <span>Managed</span>
                    </div>
                    <a href="https://www.homedrive.io/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block-container">
                <div class="text-center">
                    <a href="https://indiecomputing.com/products/ubosbox-nextcloud-on-nuc/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/devices/ubosbox-nextcloud-on-nuc-model-a-on-500x375.png" class="text-center featureimg" /></a>
                </div>
                <div class="col-md-12">
                    <h3 class="section--paragraph__title"><?php echo $l->t('UBOSbox Nextcloud on NUC &ndash; Home/Office Server');?></h3>
                    <p class="section--paragraph"><em><?php echo $l->t('Fully-assembled based on Intel NUC with optional management service');?></em></p>
                    <ul class="section--paragraph" style="list-style-type: disc">
                        <li><?php echo $l->t('Preconfigured: UBOS Linux (pre-installed) and Nextcloud plus apps (auto-install on first boot)');?></li>
                        <li><?php echo $l->t('Can be set up and maintained without attached monitor and keyboard')?></li>
                        <li><?php echo $l->t('Choose low power option for energy-conscious 24x7 operation or speed option for many concurrent users')?></li>
                        <li><?php echo $l->t('Easy day-to-day management: upgrades, backups, network configuration and more are just a single command')?></li>
                        <li><?php echo $l->t('UBOS Live systems management service for automatic upgrades, remote systems diagnosis and troubleshooting (option)');?></li>
                    </ul>
                    <div class="devices-tags">
                        <span>Commercial</span>
                        <span>Managed</span>
                    </div>
                    <a href="https://indiecomputing.com/products/ubosbox-nextcloud-on-nuc/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more and order');?></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block-container">
                <div class="text-center">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/devices/MOX.png" class="text-center featureimg" />
                </div>
                <div class="col-md-12">
                    <h3 class="section--paragraph__title"><?php echo $l->t('Turris MOX: Cloud');?></h3>
                    <p class="section--paragraph"><em><?php echo $l->t('Modular router comes with private cloud module.');?></em></p>
                    <p class="section--paragraph"><?php echo $l->t('The Turris MOX: Cloud bundle  is a ready-to-go kit with a 64bit dualcore CPU, 1GB RAM, wifi connectivity and four USB 3.0 ports for attaching storage. The MOX makes it easy for users to set up RAID storage and Nextcloud for hosting and can be extended with other router modules like network ports.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('The Turris MOX: Cloud bundle is available for pre-order with a 34% discount for 115 dollar until the end of the fundraising. Final pricing to be determined.');?></p>
                    <div class="devices-tags">
                        <span>Commercial</span>
                    </div>
                    <a href="https://nextcloud.com/blog/turris-mox-adds-nextcloud-to-put-users-back-in-control-over-their-data/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
        <div>
    </div>
</div>
        <div class="row">
            <h4>Sold out, or not available any more</h4>
            <div class="col-md-4">
                <div class="block-container">
                    <div class="text-center">
                        <a href="https://spreedbox.me/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/devices/spreedbox.png" class="text-center featureimg" /></a>
                    </div>
                    <div class="col-md-12">
                        <h3 class="section--paragraph__title"><?php echo $l->t('Spreedbox');?></h3>
                        <p class="section--paragraph"><?php echo $l->t('Behind the award-winning designed device by struktur AG operates a secure video chat and file exchange solution for small enterprise usage.');?></p>
                        <p class="section--paragraph"><?php echo $l->t('It offers Strong end-to-end encrypted audio and video chat, a Nextcloud based file sync and share solution and advanced security features with a silicon hardware key generator.');?></p>
                        <p class="section--paragraph"><?php echo $l->t('The Spreedbox offers an optional SIP gateway, enabling web conferencing participants to dial in through a traditional telephone connection.');?></p>
                        <p class="section--paragraph"><?php echo $l->t('Pricing is in the Eur 1500/USD 1500 range.');?></p>
                        <div class="devices-tags">
                            <span>Commercial</span>
                        </div>
                        <a href="https://spreedbox.me/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block-container">
                    <div class="text-center">>
                        <a href="<?php echo home_url('box') ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/devices/box-perspective.png" class="text-center featureimg" /></a>
                    </div>
                        <div class="col-md-12">
                            <h3 class="section--paragraph__title"><em><?php echo $l->t('Nextcloud Box');?></em></h3>
                            <p class="section--paragraph"><?php echo $l->t('The Nextcloud Box comes preinstalled with Nextcloud, running on Ubuntu Core (based on the new super-secure, remotely upgradeable Linux app packages known as snaps) as the OS.');?></p>
                            <p class="section--paragraph"><?php echo $l->t('The box consists of a 1 TB USB3 hard drive from WDLabs, a Nextcloud case with room for the drive and a compute board, a microUSB charger, cables and adapters, a screw driver and screws');?></p>
                            <p class="section--paragraph"><strong><?php echo $l->t('Sadly, the box is sold out and no longer produced by WD Labs!');?></strong></p>
                            <a href="<?php echo home_url('box') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<div class="calltoaction">
    <h1 class="section--heading-2 section--text--center"><?php echo $l->t('Interested in building Nextcloud Devices?');?></h1>
    <p class="section--paragraph section--text--center"><?php echo $l->t('You can');?> <a class="hyperlink" href="<?php echo home_url('contact') ?>"><?php echo $l->t('get in touch</a> with us, and we will help you with individual offerings and get your devices listed on this page.');?></p>
</div>
