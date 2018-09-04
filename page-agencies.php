<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/agencies.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
require(["require.config"], function() {
	require(["modules/youtubePlayer"])
});
</script>
<!-- <script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script> -->
<!--<script type="text/javascript">
    var CaptchaCallback = function() {
        grecaptcha.render('RecaptchaField1', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField2', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
    };
</script>-->
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/media-small.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/media-small.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/media-small.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/media-small.jpg">
</head>
<div class="agencies-background">
    <div class="container-fluid background">
        <div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Media and Advertising');?></h1>
				<h2><?php echo $l->t('Secure and efficient file exchange');?></p>
			</div>
		</div>
	</div>
</div>

<section class="claim">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 claim__container">
            <p class="claim__paragraph">
                <?php echo $l->t('Nextcloud obsoletes inconvenient FTP servers, making sharing and collaboration seamless');?>
            </p>
            <!--<div class="claim__brand">
                <div class="claim__brand__logo"></div>
                <p class="claim__brand__text">
                    - Cédric Cartau, Chief Information Security Officer at <a class="hyperlink" href="https://www.digitalforallnow.com/en/what-are-the-implications-of-media-data-security-interview-with-cedric-cartau/">Nantes University Hospital</a>
                </p>
            </div>-->
        </div>
    </div>
</section>

<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<h2 class="section--heading-1 text-center"><?php echo $l->t('Sharing big files');?></h2>
            <p class="section--paragraph text-center"><?php echo $l->t('Media and advertisement companies work with large media files such as images, layouts and raw video footage. They need to be able to easily and quickly share them with colleagues, partners and clients.<br>
            Nextcloud makes uploading and downloading large files via the browser, mobile devices or synced to desktops easy as pie and fast as lightning and works very well with your preferred creative tools such as Adobe InDesign, Lightroom, Illustrator, Photoshop and Premiere.');?></p>
		</div>
	</div>
</div>
</section>


<section class="section--collaboration">
	<div class="container">
        <div class="row">
            <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Exchange and share on your terms');?></p>
            <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Seamless Collaboration');?></h3>
            <div class="easy--ilustration"></div>
            <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Collaboration features in Nextcloud notify users of comments on a file and let them seamlessly switch to real-time chat or video call communication to discuss a campaign or design.');?></p>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll">
                <div data-type="youtube" data-video-id="AhFnbB-a7ik"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/AhFnbB-a7ik" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Internal and external sharing');?></p>
                <p class="section--paragraph"><?php echo $l->t('Creative minds from around the world can connect through Nextcloud, sharing their work in one location. Nextcloud lets you share any number large and small files with colleagues, customers and partners, seamlessly and easily.');?></p>
                <a href="<?php echo home_url('sharing') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('More about sharing');?></a>
            </div>
        </div>
                <p class="section--paragraph"><blockquote><?php echo $l->t('The source of inspiration is in what you see and who you touch. Sharing with others and working together are central to creativity and results!');?></blockquote></p>
        <div class="row">
            <div class="col-md-6 revealOnScroll image--floated">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/comments-nw.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Discuss your work');?></p>
                <p class="section--paragraph"><?php echo $l->t('Users can comment on files and see what files have new comments. The interface auto-completes user names for easy mentioning of others so they get notified.');?></p>
                <p class="section--paragraph"><?php echo $l->t('With Nextcloud, sharing and collaboration are the same thing.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/talk-chat-nw.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Communication the way you need it');?></p>
                <p class="section--paragraph"><?php echo $l->t('Any user avatar can be clicked to start a real-time chat or audio/video call, moving seamlessly from asynchronous communication to real-time.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud provides a single platform for communication, reducing the number of channels and making collaboration more efficient.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll image--floated">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/file-access-control-nw.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Secure, efficient Digital Asset Management');?></p>
                <p class="section--paragraph"><?php echo $l->t('Tags, automatic categorization and full text search make finding your files a breeze. Tune your work flow to optimize accessibility and efficiency.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud File Access Control feature ensures your data stays completely under your control, blocking unauthorized access according to definitions your IT team can set.');?></p> <p class="section--paragraph"><?php echo $l->t('Guarantee your customers 100% legal compliance and secure handling of even their most sensitive data!');?></p>
                <a href="<?php echo home_url('workflow') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Workflow features');?></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll">
                <div data-type="youtube" data-video-id="jwhfeJlYBbM"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/jwhfeJlYBbM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Secure sharing by mail');?></p>
                <p class="section--paragraph revealOnScroll"><?php echo $l->t('A creative manager can easily share files to a remote freelancer or a photographer and vice-versa via the Nextcloud Secure Sharing Outlook Plugin, avoiding large email attachments, reducing traffic and increasing speed.');?></p>
                <a href="<?php echo home_url('outlook') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Email integration');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--getstarted">
    <div class="container-fluid quote">
        <h2 class="text-center revealOnScroll"><?php echo $l->t('Advertising is all about collaboration.');?></h2>
        <p class="section--paragraph section--text--center revealOnScroll"><?php echo $l->t('You need to work efficiently with colleagues, partners and clients, without having to forego privacy and security.');?></p>
        <p class="section--paragraph section--text--center revealOnScroll"><?php echo $l->t('Nextcloud enables you to focus on creativity, taking care that your data stays accessible and under your control!');?></p>
        <div class="container">
            <div class="row">
                <div class="col-md-12 featureblock revealOnScroll">
                    <div class="row text-center">
                        <a href="<?php echo home_url('install') ?>" class="button button--arrow button--large"><?php echo $l->t('Try Nextcloud Files');?></a>
                        <a href="<?php echo home_url('buy') ?>" class="button button--arrow button--large"><?php echo $l->t('Contact sales');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--limitations">
	<div class="container">
        <div class="row">
            <p class="section--intro text-center revealOnScroll"><?php echo $l->t('No limitations');?></p>
            <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Wherever you are');?></h3>
            <div class="balancer--ilustration"></div>
            <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud runs on your infrastructure, making data accessible to your team anywhere, anytime');?></p>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/securedrop-drop-nw.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Unlimited everything');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud has no limits other than the size of your file storage system. However big the file, however many you have or people you share with, Nextcloud will serve the users the data they need at lighting speed.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Whether you keep data on a NAS, FTP, NFS, Windows Network Drive, Amazon S3 or other object storage, Nextcloud provides seamless access, sharing and collaboration.');?></p>
                <a href="<?php echo home_url('storage') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('External storage');?></a>
            </div>
        </div>
       <div class="row">
            <div class="col-md-6 revealOnScroll image--floated">
                <div data-type="youtube" data-video-id="I5wcLS9xxMw"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/I5wcLS9xxMw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('At any scale');?></p>
                <p class="section--paragraph"><?php echo $l->t('Offices all over the world? Need to keep data from Singapore and Brisbane separate from data in London and New York? Need some data in both places and others only in one?');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud Global Scale offers a unique solution to global availability of data at incredible cost efficiency. Store, edit and share files across any number of offices without limitations or losing control!');?></p>
                <a href="<?php echo home_url('globalscale') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Global Scale');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--features">
<div class="container-widest">
	<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Key features in Nextcloud');?></h1>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
            <i class="fa-server fa"></i>
        </div>
        <div class="col-md-3 featureblock">
            <p class=""><?php echo $l->t('Fully self-hosted, meaning all data is under your control. Nextcloud can leverage your existing storage, security and privacy policies. There is no vendor lock-in or tracking by us of any kind!');?></p>
        </div>
        <div class="col-md-1 featureblock">
            <i class="fa-tags fa"></i>
        </div>
        <div class="col-md-3 featureblock">
            <p class=""><?php echo $l->t('Nextcloud offers an easy to use user interface which comes with powerful search functionality, trash and versioning, favorites, tags and more ways to quickly reach the files users need.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-mobile fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Desktop and mobile clients for Windows/MacOS/Linux, Android and iOS complement the web interface, integrating in the file system. Nextcloud can also be reached through WebDAV.');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
        <i class="fa-puzzle-piece fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Authentication through LDAP / Active Directory, Kerberos and Shibboleth / SAML 2.0 and more and external storage supporting NFS, Object Storage and other protocols ensure easy integration.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-shield fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('First-class security policies, extensive security hardening features and File Access Control to ensure legal and privacy regulations are enforced at all times. Nextcloud comes with integrated logging, two-factor authentication and NIST compliant password policy control functionalities.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-list fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Nextcloud offers fine-grained control from mobile, desktop or the Web over data access and sharing capabilities. Advanced quota management with configurable accounting of external storage and configurable file retention policies.');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-8 col-md-offset-2 featureblock">
        <p class="text-center"><a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('First class enterprise support with custom integration and security consulting available</a>.');?></p>
        </div>
    </div>
</div>
</section>
