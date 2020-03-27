<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/ibm.css?v=1" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
// require(["require.config"], function() {
// 	require(["pages/sharing", "modules/youtubePlayer"])
// });
</script>

<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/ibm-spectrum-scalepng">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/ibm-spectrum-scale.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/ibm-spectrum-scale.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/ibm-spectrum-scale.png">
</head>

<div class="background ibm-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Nextcloud and IBM');?></h1>
                <h2><?php echo $l->t('Large scale enterprise cloud deployment with Nextcloud and IBM');?></h2>
            </div>
        </div>
    </div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Scaling up large deployments is a problem of growing complexity. The partnership of Nextcloud and IBM offers a world-class solution for this problem, enabling quick and easy deployments of large scale file storage and content collaboration solutions.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--sharing">
    <div class="container">
    <h2 class="text-center"><?php echo $l->t('Spectrum Scale Integration');?></h2>
        <div class="row feature--block">
            <div class="col-md-6 image--feature">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/features/ibm-spectrum-scale.png" class="img-responsive" />
            </div>
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('IBM Spectrum Scale');?></h3>
                <p class="section--paragraph"><?php echo $l->t('IBM Spectrum Scale is a high-performance file system for managing data with the distinctive ability to perform analytics in place with comprehensive support for data access protocols including POSIX, NFS, SMB, HDFS and S3/Object. It can provide a single namespace for all this data, offering a single point of management with an intuitive graphical user interface. IBM Spectrum Scale offers high scalability, high availability, automated data management and reliability with no single point of failure in large file storage infrastructure.');?></p>
            </div>
        </div>
        <div class="row feature--block">
            <div class="col-md-6 image--feature image--floated">
                <stream src="eb1384b4fa48d8f47abdec5051bc922d" controls poster="<?php bloginfo('template_directory'); ?>/assets/img/features/hub-video.png"></stream>
                <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=eb1384b4fa48d8f47abdec5051bc922d"></script>
            </div>
            <div class="col-md-6">
               <h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Hub');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud Hub is a flexible, on premise Files Sync and Share and Collaboration platform. Hub was designed to make content easily accessible to all members in an organization, wherever the content resides and however the member needs to access it. It features an easy, consistent user interface with extensive collaboration capabilities on mobile, web and desktop and conforms to the highest security and data protection standards. Nextcloud is highly extensible with apps adding functionality and offers deep integration in infrastructure like user management and storage.');?></p>
            </div>
        </div>
        <div class="row feature--block">
            <div class="col-md-6 image--feature">
                <iframe  height="315" src="https://www.youtube-nocookie.com/embed/vwqOakNCwl0?start=2070" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud and Spectrum Scale');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Spectrum Scale Clustered Watch integration for Nextcloud ensures that the file structure view of Spectrum Scale is available nearly instantly in Nextcloud, updated in under a second even on very large external storage deployments. The integrated solution makes use of Redis, is designed to be very scalable, and will work in a setup with a large number of Nextcloud application servers and large Spectrum Scale file systems.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The solution requires at least Nextcloud 17, Spectrum Scale 5.0.3 and is available for mutual customers.');?></p>
            </div>
        </div>
         <div class="row feature--block">
            <div class="col-md-6 image--feature image--floated">
                <h3 class="section--paragraph__title text-center"><?php echo $l->t('Contact us for details');?></h3>
                 <p class="section--paragraph text-center"><a href="<?php echo home_url('enterprise/buy') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Contact us');?></a></p>
            </div>
            <div class="col-md-6">
                <p class="section--paragraph"><?php echo $l->t('IBM Spectrum Scale and Nextcloud provide a reliable, scalable and performant solution for highly secure data storage that is suitable for modern organizations and their needs for efficient team collaboration. The flexible design of both solutions enabled the development of a efficient integration technology, improving the scalability and responsiveness of the solution. All files are accessible directly via the Spectrum Scale file system or via Nextcloud without compromises in performance and user experience.');?></p>
            </div>
        </div>
    </div>
</section>
