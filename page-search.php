<?php
/*
Template Name: Search Page
*/
?>

<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/404.css?v=1" rel="stylesheet">
    <script>
        require(["require.config"], function() {
            require([""])
        });
    </script>
</head>

<div class="background generic-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
                <h1><?php echo $l->t('Search');?></h1>
                <h2><?php echo $l->t('Find what you are looking for');?></h2>
            </div>
        </div>
    </div>
</div>


<section class="content">
<div class="container">
    <h2><?php echo $l->t('Finding information');?></h2>

    <p><?php echo $l->t('To search nextcloud.com, please use the form below.');?></p>

    <?php get_search_form(); ?>


    <p><?php echo $l->t('Find an overview of some of the pages on Nextcloud.com below.');?></p>

    <h3><?php echo $l->t('Nextcloud Products');?></h3>

    <ul>
        <li><a href="<?php echo home_url('hub') ?>" class="hyperlink"><?php echo $l->t('Nextcloud Hub overview');?></a></li>
        <li><a href="<?php echo home_url('files') ?>" class="hyperlink"><?php echo $l->t('Nextcloud Files overview');?></a></li>
        <li><a href="<?php echo home_url('talk') ?>" class="hyperlink"><?php echo $l->t('Nextcloud Talk overview');?></a></li>
        <li><a href="<?php echo home_url('groupware') ?>" class="hyperlink"><?php echo $l->t('Nextcloud Groupware overview');?></a></li>
        <li><a href="<?php echo home_url('industries') ?>" class="hyperlink"><?php echo $l->t('Industry solutions');?></a></li>
        <li><a href="<?php echo home_url('enterprise') ?>" class="hyperlink"><?php echo $l->t('Nextcloud Enterprise');?></a></li>
    </ul>

        <h3><?php echo $l->t('Nextcloud capabilities');?></h3>

    <ul>
        <li><a href="<?php echo home_url('clients') ?>" class="hyperlink"><?php echo $l->t('Mobile and desktop clients');?></a></li>
        <li><a href="<?php echo home_url('sharing') ?>" class="hyperlink"><?php echo $l->t('Secure file sharing abilities');?></a></li>
        <li><a href="<?php echo home_url('file-drop') ?>" class="hyperlink"><?php echo $l->t('Customer file upload (file drop)');?></a></li>
        <li><a href="<?php echo home_url('dashboard') ?>" class="hyperlink"><?php echo $l->t('Dashboard');?></a></li>
        <li><a href="<?php echo home_url('unified-search') ?>" class="hyperlink"><?php echo $l->t('Search');?></a></li>
        <li><a href="<?php echo home_url('storage') ?>" class="hyperlink"><?php echo $l->t('Storage options (FTP, NFS, Windows Network Drive, SharePoint and more)');?></a></li>
        <li><a href="<?php echo home_url('usermanagement') ?>" class="hyperlink"><?php echo $l->t('User management and authentication (LDAP, SAML, 2FA)');?></a></li>
        <li><a href="<?php echo home_url('monitoring') ?>" class="hyperlink"><?php echo $l->t('Monitoring and auditing');?></a></li>
        <li><a href="<?php echo home_url('workflow') ?>" class="hyperlink"><?php echo $l->t('Workflow handling');?></a></li>
        <li><a href="<?php echo home_url('globalscale') ?>" class="hyperlink"><?php echo $l->t('Scalability');?></a></li>
        <li><a href="<?php echo home_url('outlook') ?>" class="hyperlink"><?php echo $l->t('Outlook and Thunderbird integration');?></a></li>
        <li><a href="<?php echo home_url('collaboraonline') ?>" class="hyperlink"><?php echo $l->t('Online document editing with Collabora Online');?></a></li>
        <li><a href="<?php echo home_url('onlyoffice') ?>" class="hyperlink"><?php echo $l->t('Online document editing with ONLYOFFICE');?></a></li>
        </ul>
    </ul>

    <h3><?php echo $l->t('Security and Compliance');?></h3>
        <ul>
            <li><a href="<?php echo home_url('secure') ?>" class="hyperlink"><?php echo $l->t('Security overview');?></a></li>
            <li><a href="<?php echo home_url('encryption') ?>" class="hyperlink"><?php echo $l->t('Encryption overview');?></a></li>
            <li><a href="<?php echo home_url('endtoend') ?>" class="hyperlink"><?php echo $l->t('End-to-end encryption');?></a></li>
            <li><a href="<?php echo home_url('virtual-data-room') ?>" class="hyperlink"><?php echo $l->t('Virtual Data Rooms');?></a></li>
            <li><a href="<?php echo home_url('security') ?>" class="hyperlink"><?php echo $l->t('Security reports');?></a></li>
            <li><a href="<?php echo home_url('gdpr') ?>" class="hyperlink"><?php echo $l->t('Compliance (GDPR, HIPAA)');?></a></li>
        </ul>

    <h3><?php echo $l->t('Other');?></h3>
        <ul>
            <li><a href="<?php echo home_url('securesharing') ?>" class="hyperlink"><?php echo $l->t('Covering the importance of secure sharing.');?></a></li>
            <li><a href="<?php echo home_url('enterprise-file-sync-and-sharing-efss') ?>" class="hyperlink"><?php echo $l->t('What is enterprise file sync and share or EFSS.');?></a></li>
             <li><a href="<?php echo home_url('content-collaboration-platform') ?>" class="hyperlink"><?php echo $l->t('What is a content collaboration platform.');?></a></li>
            <li><a href="<?php echo home_url('developer') ?>" class="hyperlink"><?php echo $l->t('Developer resources.');?></a></li>
            <li><a href="<?php echo home_url('privacy') ?>" class="hyperlink"><?php echo $l->t('Our privacy policy');?></a></li>
            <li><a href="<?php echo home_url('trademarks') ?>" class="hyperlink"><?php echo $l->t('Our brand and trademark policy');?></a></li>
        </ul>

<!--     <?php wp_list_pages(); ?> -->
</div>
</section>
