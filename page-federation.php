<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
    <script>
    $(document).ready(function() {
            if(window.location.hash) {
            $('#IDtext').text('My Federated Cloud ID is');
            $('#userName').text(window.location.hash.substring(1));
        }
    });
    </script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1><?php echo $l->t('Share across Nextclouds!');?></h2>
        </div>
    </div>
</div>

<section class="content">
<div class="container">
    <div class="row conf-info">
        <div class="col-lg-4 col-md-5 text-center no-underline">
            <!--<a href="https://www.youtube.com/watch?v=9-JEmlH2DEg" target="_blank" style="border: none;">--><img src="<?php echo get_template_directory_uri(); ?>/assets/img/federation/federation.gif" alt="in action" /><!--</a>-->
        </div>
        <div class="col-md-7">
            <p><?php echo $l->t('Sharing files across Nextcloud servers is as easy as sending an email from a Gmail address to a Yahoo account! Instead of an email address, you use a <em>Federated Cloud ID</em>.');?></p>
            <p class="federation-id"><span id="IDtext"><?php echo $l->t('An example Federated Cloud ID is');?></span><strong> <span id="userName">username@example.com/nextcloud</span></strong></p>
            <p><?php echo $l->t('To share a file, enter the Federated Cloud ID in the \'share\' dialog. A notification will pop up on the Nextcloud server of the recipient.');?></p>
            <p><?php echo $l->t('You can find your own Federated Cloud ID in your user settings. Give it to your friends so they can share files with you!');?></p>
            <h2><?php echo $l->t('More details');?></h2>
            <p><?php echo $l->t('Learn more in the Nextcloud');?> <a href="<?php echo $DOCUMENTATION_USER; ?>files/federated_cloud_sharing.html" target="_blank"><?php echo $l->t('user documentation</a> and');?> <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/federated_cloud_sharing_configuration.html"><?php echo $l->t('administrator documentation');?></a>.</p>
        </div>
    </div>
</div>
</section>
