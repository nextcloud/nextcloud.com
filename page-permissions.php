<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/permissions.css?v=1" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
require(["require.config"], function() {
	require(["pages/sharing", "modules/youtubePlayer"])
});
</script>

<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing.png">
</head>

<div class="background permissions-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Stay in control');?></h1>
                <h2><?php echo $l->t('Access controls and permissions');?></h2>
            </div>
        </div>
    </div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Securely sharing and collaborating on documents requires strong acces control mechanisms. Nextcloud features a variety of sharing mechanisms and associated control solutions like ACLs and sharing permissions.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--sharing">
    <div class="container">
    <h2 class="text-center"><?php echo $l->t('The flat model');?></h2>
        <div class="row feature--block">
            <div class="col-md-6 image--floated image--feature new-img">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing_dialog.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing_dialog_full.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Easy to use and understand');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The basic sharing model in Nextcloud follows a flat model where users are in control of the sharing. Any file or folder can be individually shared and access permissions can be configured. New files show up in the home of users whom you share with. They can rename these folders if they like, or put them where they want to optimize their own productivity.');?></p>

                <ul>
                    <li><?php echo $l->t('Separate read, create, edit rights');?></li>
                    <li><?php echo $l->t('Control resharing');?></li>
                    <li><?php echo $l->t('Hide content on public upload links');?>  <a class="hyperlink" href="<?php echo home_url('file-drop') ?>">(file drop)</a></li>
                    <li><?php echo $l->t('Block downloading of content on shared links');?> <a class="hyperlink" href="https://nextcloud.com/blog/secure-view-prevent-your-shared-files-from-getting-downloaded/">(secure view)</a></li>
                </ul>
            </div>
        </div>
        <div class="row feature--block">
            <div class="col-md-6 image--feature new-img">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/others_with_access.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/others_with_access_full.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><?php echo $l->t('Finegrained access rights for collaborative editing of documents shared with public links');?></li>
                    <li><?php echo $l->t('Watermarking, limit documents to filling in forms or block printing');?></li>
                    <li><?php echo $l->t('Password protection, optional ');?> <a class="hyperlink" href="<?php echo home_url('sharing') ?>#videoverification">video verification</a></li>
                    <li><?php echo $l->t('expiration date (also for internal links)');?></li>
                    <li><?php echo $l->t('Control rights of individual users, groups or your own, custom groups');?></li>
                    <li><?php echo $l->t('Transparency in who has access at all times');?></li>
                    <li><?php echo $l->t('Lock files so others know you are working on them');?></li>
                    <li><?php echo $l->t('Fully transfer ownership of files or folders to others');?></li>
                    <li><?php echo $l->t('Share directly to other Nextcloud servers');?> <a class="hyperlink" href="<?php echo home_url('sharing') ?>#federation">(federation)</a></li>
                    <li><?php echo $l->t('Choose to automatically accept all incoming shares, or choose to accept them on a case by case basis');?></li>
                    <li><?php echo $l->t('Track activities and get notified on changes to files or downloads');?></li>
                </ul>
            </div>
        </div>
        <div class="row feature--block">
            <div class="col-md-6 image--floated image--feature new-img">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Administrator control');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Administrators control these capabilities and can set a variety of permissions by default.');?></p>
                <ul>
                    <li><?php echo $l->t('Fully enable or disable sharing');?></li>
                    <li><?php echo $l->t('Disable public link sharing');?></li>
                    <li><?php echo $l->t('Disable uploading on public links');?></li>
                    <li><?php echo $l->t('Enforce passwords and expiration dates');?></li>
                    <li><?php echo $l->t('Block resharing');?></li>
                    <li><?php echo $l->t('Block sharing with groups');?></li>
                    <li><?php echo $l->t('Block sharing outside own group');?></li>
                    <li><?php echo $l->t('Set default sharing permissions');?></li>
                    <li><?php echo $l->t('Control sharing between Nextcloud servers (federation)');?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section--file-locking">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image--floated">
                <stream src="b2bff2b8e183f558fcfcb64f41851d9d" controls  poster="<?php bloginfo('template_directory'); ?>/assets/img/features/lock_file.png"></stream>
                <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=b2bff2b8e183f558fcfcb64f41851d9d"></script>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><strong><?php echo $l->t('Feature Highlight:');?></strong> <?php echo $l->t('Locking files');?></h3>
                <p class="section--paragraph"><?php echo $l->t('File locking helps users prevent conflicts with colleagues who are trying to edit the same files. While office documents and notes can be edited in real time in the browser, some files have to be downloaded to make changes. Lock the file and collisions are avoided! Other users can easily contact you in chat or by a comment to ask what is going on.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--sharing">
    <div class="container">
    <h2 class="text-center"><?php echo $l->t('The file server model');?></h2>
        <div class="row feature--block">
            <div class="col-md-6 image--floated image--feature new-img">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/ACLs_in_groupfolders_sidebar.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/ACLs_in_groupfolders_sidebar.png" class="img-responsive featureimg" /></a>
            </div>
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Facilitating team work');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Collaborating in a team benefits from having a single, canonical folder structure available. Groupfolders provide administrator-defined shared folders with support for full ACLs. These are inherited by default, can be overridden and control can be given to group administrators to configure them. ');?></p>

                <ul>
                    <li><?php echo $l->t('Read, Write, Create, Delete and Share permissions');?></li>
                    <li><?php echo $l->t('‘inherit’ (default), ‘allow’ or ‘deny’');?></li>
                    <li><?php echo $l->t('Each property of each file can be configured for any number of users or groups');?></li>
                    <li><?php echo $l->t('Control can be delegated to group administrators');?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
