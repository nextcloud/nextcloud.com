<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/install.css" rel="stylesheet">
    <script>
        require(["require.config"], function() {
            require(["pages/install"])
        });
    </script>
</head>

<div class="hero">
    <div class="hero__copy">
        <h1><?php echo $l->t('508,078 People Trust & Use Nextcloud');?></h1>
        <p><?php echo $l->t('Private. Secure. Flexible. Join thousands of other people that trust and use Nextcloud on your daily basis.');?></p>
    </div>
</div>

<div class="container">
    <div class="tabs">
        <div class="tab tab--active">
            <span class="tab--title"><?php echo $l->t('Nexcloud cloud');?></span>
            <span class="tab--description"><?php echo $l->t('The most easy way to get started, no complicate configuration or installation.');?></span>
        </div>

        <div class="tab">
            <span class="tab--title"><?php echo $l->t('Nexcloud on-premises');?></span>
            <span class="tab--description"><?php echo $l->t('Install and admistrate your own instance in your own server.  Recommended to the ones you have more experience');?></span>
        </div>

        <div class="tab">
            <span class="tab--title"><?php echo $l->t('Nexcloud Sync Clients');?></span>
            <span class="tab--description"><?php echo $l->t('Mobile and desktop clients to sync your data with your server.');?></span>
        </div>
    </div>
</div>

<div class="tab-section">
    <div class="container">
        <div class="tab-section__copy">
            <h1 class="tab-section__title"><?php echo $l->t('Choose from the plans above');?></h1>
            <p class="tab-section-description"><?php echo $l->t('Any payement that you do is not to the nextcloud, but to the provider.');?></p>
        </div>
    </div>
</div>

