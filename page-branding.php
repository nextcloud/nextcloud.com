<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/branding.css?v=1" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
require(["require.config"], function() {
	require(["pages/sharing", "modules/youtubePlayer"])
});
</script>

<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/manzcloud.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/manzcloud.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/manzcloud.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/manzcloud.png">
</head>

<div class="background branding-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Branding options');?></h1>
                <h2><?php echo $l->t('Get branded Nextcloud clients');?></h2>
            </div>
        </div>
    </div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('In order to provide a seamless enterprise user experience, Nextcloud GmbH offers branded clients to their customers. As part of this we support deployment technologies like MSI for desktops and MDM for mobile platforms.');?></p>
            </div>
        </div>
    </div>
</section>


  <section class="section--sharing">
    <div class="container">
    <h2 class="text-center"><?php echo $l->t('Logo, color and links');?></h2>
        <div class="row feature--block">
            <div class="col-md-6 image--floated">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/theming-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/theming-nw.png" class="img-responsive" /></a>
            </div>
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Easy, integrated theming');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Our built in theming app provides a fast and intuitive way to theme your Nextcloud server. You can conveniently configure logo, colors, name and important urls like the privacy policy and imprint. Out of the box, the Nextcloud mobile apps adapt to the color scheme of the Nextcloud server and also use its configured logo and background in the apps.');?></p>

                <ul>
                    <li><?php echo $l->t('Logo, colors, login graphics and name');?></li>
                    <li><?php echo $l->t('Add custom links for privacy policy, imprint and terms of service');?></li>
                    <li><?php echo $l->t('Default / example files every user gets on first login can be modified');?></li>
                    <li><?php echo $l->t('Mobile apps and web interface adjust to theme settings, except app icon on mobile)');?></li>
                </ul>
            </div>
        </div>
        <div class="row feature--block">
            <div class="col-md-6 image--feature new-img">
                 <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/manzcloud.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/manzcloud.png" class="img-responsive" /></a>
            </div>
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Advanced enterprise branding');?></h3>
                <p class="section--paragraph"><?php echo $l->t(' Nextcloud offers a client branding service as part of their Nextcloud Enterprise subscription (Standard and Premium) to Nextcloud Customers. Branded clients dramatically enhance your user corporate experience. They are pre-configured for the correct server so that the end user does not have to choose a Nextcloud server but can immediately proceed to enter their login credentials. They use the customers’ logo and name in the app drawer instead of the Nextcloud logo and name and more customization can be made. Nextcloud offers the apps as APK and xCode project for publishing through a customer developer account.');?></p>
                <ul>
                    <li><?php echo $l->t('Pre-configured server address for faster setup');?></li>
                    <li><?php echo $l->t('Removal of links to Nextcloud community, community hosting solutions and private servers');?></li>
                    <li><?php echo $l->t('Custom logo and name in app drawer');?></li>
                    <li><?php echo $l->t('Custom help page and contact email');?></li>
                    <li><?php echo $l->t('Optional custom Push Proxy');?></li>
                    <li><?php echo $l->t('Full control over release management and app store entry');?></li>
                    <li><?php echo $l->t('Support for MDM solutions for mobile, MSI deployment for desktop (Premium only)');?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section--comparison">
    <div class="container">
        <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center"><?php echo $l->t('Comparison');?></h2>
                <h3 class="section--paragraph__title"><?php echo $l->t('Deployment and control with MDM and MSI');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Many larger organizations have tools to manage their deployments of desktop and mobile apps. For mobile apps, various tools provide so-called Mobile Device Management services. Nextcloud supports this as part of our Nextcloud Enterprise Premium Subscription. With this also come branded desktop clients as MSI packages for easy roll-out in large organizations.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Here is a complete overview of the Nextcloud branded client options.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>
                                    <p><strong><small>Supported capabilities</small></strong></p>
                                </td>
                                <td>
                                    <p><strong><small>Free</small></strong></p>
                                </td>
                                <td>
                                    <p><strong><small>Standard</small></strong></p>
                                </td>
                                <td>
                                    <p><strong><small>Premium</small></strong></p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><small><strong>Colors</strong> for application and fonts</small></td>
                                <td>
                                    <p>✔️<small>*</small></p>
                                </td>
                                <td>
                                    <p>✔️</p>
                                </td>
                                <td>
                                    <p>✔️️</p>
                                </td>
                            </tr>
                            <tr>
                                <td><small><strong>Logo</strong> for login page and header</small></td>
                                <td>
                                    <p>✔️️</p>
                                </td>
                                <td>
                                    <p>✔️️</p>
                                </td>
                                <td>
                                    <p>✔️️</p>
                                </td>
                            </tr>
                            <tr>
                                <td><small>Custom App <strong>icon and name</strong></small></td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p>✔️️</p>
                                </td>
                                <td>
                                    <p>✔️️</p>
                                </td>
                            </tr>
                            <tr>
                                <td><small>Custom visual <strong>assets</strong></small></td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p>✔️️</p>
                                </td>
                                <td>
                                    <p>✔️️</p>
                                </td>
                            </tr>
                            <tr>
                                <td><small><strong>Pre-configured URL</strong> of the Nextcloud server</small></td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p>✔️️</p>
                                </td>
                            <td>
                            <p>✔️️</p>
                            </td>
                            </tr>
                            <tr>
                            <td><small><strong>Contact</strong> email address</small></td>
                            <td>
                            <p></p>
                            </td>
                            <td>
                            <p>✔️</p>
                            </td>
                            <td>
                            <p>✔️️</p>
                            </td>
                            </tr>
                            <tr>
                            <td><small>URLs for privacy policy and help page for clients (mobile/desktop)</small></td>
                            <td>
                            <p></p>
                            </td>
                            <td>
                            <p>✔️️</p>
                            </td>
                            <td>
                            <p>✔️️</p>
                            </td>
                            </tr>
                            <tr>
                            <td><small><strong>MDM</strong> functionalities</small></td>
                            <td>
                            <p></p>
                            </td>
                            <td>
                            <p></p>
                            </td>
                            <td>
                            <p>✔️️</p>
                            </td>
                            </tr>
                            <tr>
                            <td><small><strong>MSI</strong> installation package (Windows)</small></td>
                            <td>
                            <p></p>
                            </td>
                            <td>
                            <p></p>
                            </td>
                            <td>
                            <p>✔️️</p>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>Client Branding Plus<
                <small>* Mobile only</small>
                <h3>Web user interface</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="">
                                <td>
                                    <p><strong><small>Supported capabilities</small></strong></p>
                                </td>
                                <td>
                                    <p><strong><small>Included</small></strong></p>
                                </td>
                                <td>
                                    <p><strong><small>Standard</small></strong></p>
                                </td>
                                <td>
                                    <p><strong><small>Premium</small></strong></p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><small><strong>Logo</strong> in the header bar, on the login page and the favicon</small></td>
                                <td>
                                <p>✔️</p>
                                </td>
                                <td>
                                <p>✔️</p>
                                </td>
                                <td>
                                <p>✔️️</p>
                                </td>
                            </tr>
                            <tr>
                                <td><small><strong>Color</strong> of header bar, checkboxes and folder icons</small></td>
                                <td>
                                <p>✔️</p>
                                </td>
                                <td>
                                <p>✔️</p>
                                </td>
                                <td>
                                <p>✔️️</p>
                                </td>
                            </tr>
                            <tr>
                                <td><small><strong>Name</strong> and slogan</small></td>
                                <td>
                                <p>✔️</p>
                                </td>
                                <td>
                                <p>✔️</p>
                                </td>
                                <td>
                                <p>✔️️</p>
                                </td>
                                </tr>
                            <tr>
                                <td><small>Login page <strong>background image</strong></small></td>
                                <td>
                                <p>✔️</p>
                                </td>
                                <td>
                                <p>✔️️</p>
                                </td>
                                <td>
                                <p>✔️</p>
                                </td>
                                </tr>
                            <tr>
                                <td><small>Additional <strong>compliance</strong> links for web UI (Legal notice/Privacy policy link)</small></td>
                                <td>
                                <p>✔️</p>
                                </td>
                                <td>
                                <p>✔️️</p>
                                </td>
                                <td>
                                <p>✔️</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    If your organization needs branded clients, <a class="hyperlink" href="https://nextcloud.com/enterprise/buy/">contact us!</a>
            </div>
        </div>
    </div>
</section>
