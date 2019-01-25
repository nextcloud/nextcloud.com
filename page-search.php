<?php
/*
Template Name: Search Page
*/
?>

<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/404.css" rel="stylesheet">
    <script>
        require(["require.config"], function() {
            require([""])
        });
    </script>
</head>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>Search</h1>
            <h2>Find what you are looking for</h2>
        </div>
    </div>
</div>

<section class="content">
<div class="container">
    <h2>Finding information</h2>

    <p>To search nextcloud.com, please use the form below.</p>

    <?php get_search_form(); ?>


    <p>Find an overview of some of the pages on Nextcloud.com below.</p>

    <h3>Nextcloud capabilities</h3>

    <ul>
        <li><a href="<?php echo home_url('files') ?>" class="hyperlink"><?php echo $l->t('Nextcloud Files overview');?></a></li>
        <li><a href="<?php echo home_url('files') ?>" class="hyperlink"><?php echo $l->t('Nextcloud Talk overview');?></a></li>
        <li><a href="<?php echo home_url('files') ?>" class="hyperlink"><?php echo $l->t('Nextcloud Groupware overview');?></a></li>
        <li><a href="<?php echo home_url('clients') ?>" class="hyperlink"><?php echo $l->t('Mobile and desktop clients');?></a></li>
        <li><a href="<?php echo home_url('sharing') ?>" class="hyperlink"><?php echo $l->t('Secure file sharing abilities');?></a></li>
        <li><a href="<?php echo home_url('file-drop') ?>" class="hyperlink"><?php echo $l->t('Customer file upload (file drop)');?></a></li>
        <li><a href="<?php echo home_url('storage') ?>" class="hyperlink"><?php echo $l->t('Storage options (FTP, NFS, Windows Network Drive, SharePoint and more)');?></a></li>
        <li><a href="<?php echo home_url('usermanagement') ?>" class="hyperlink"><?php echo $l->t('User management and authentication (LDAP, SAML, 2FA)');?></a></li>
        <li><a href="<?php echo home_url('monitoring') ?>" class="hyperlink"><?php echo $l->t('Monitoring and auditing');?></a></li>
        <li><a href="<?php echo home_url('workflow') ?>" class="hyperlink"><?php echo $l->t('Workflow handling');?></a></li>
        <li><a href="<?php echo home_url('outlook') ?>" class="hyperlink"><?php echo $l->t('Outlook and Thunderbird integration');?></a></li>
        <li><a href="<?php echo home_url('files') ?>" class="hyperlink"><?php echo $l->t('External Storage');?></a></li>
        <li><a href="<?php echo home_url('collabora Online') ?>" class="hyperlink"><?php echo $l->t('Online document editing with Collabora Online');?></a></li>
        <li><a href="<?php echo home_url('onlyoffice') ?>" class="hyperlink"><?php echo $l->t('Online document editing with ONLYOFFICE');?></a></li>
        </ul>
    </ul>

    <h3>Security and Compliance</h3>
        <ul>
            <li><a href="<?php echo home_url('secure') ?>" class="hyperlink"><?php echo $l->t('Security overview');?></a></li>
            <li><a href="<?php echo home_url('endtoend') ?>" class="hyperlink"><?php echo $l->t('End-to-end encryption');?></a></li>
            <li><a href="<?php echo home_url('security') ?>" class="hyperlink"><?php echo $l->t('Security reports');?></a></li>
            <li><a href="<?php echo home_url('gdpr') ?>" class="hyperlink"><?php echo $l->t('Compliance (GDPR, HIPAA)');?></a></li>
        </ul>

    <h3>Other</h3>
        <ul>
            <li><a href="<?php echo home_url('gdpr') ?>" class="hyperlink"><?php echo $l->t('Compliance (GDPR, HIPAA)');?></a></li>
            <li><a href="<?php echo home_url('privacy') ?>" class="hyperlink"><?php echo $l->t('Our privacy policy');?></a></li>
            <li><a href="<?php echo home_url('trademarks') ?>" class="hyperlink"><?php echo $l->t('Our brand and trademark policy');?></a></li>
        </ul>

<!--     <?php wp_list_pages(); ?> -->
</div>
</section>
