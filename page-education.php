<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/education.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
require(["require.config"], function() {
	require(["pages/education", "modules/submenu", "bootstrap", "modules/youtubePlayer"])
});
</script>
<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/moodle-nw.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/moodle-nw.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/moodle-nw.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/moodle-nw.png">
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</head>
<div class="education-background second-menu">
    <div class="container-fluid background">
        <div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud in Education');?></h1>
				<h2><?php echo $l->t('Easy, scaleable and well integrated');?></p>
			</div>
		</div>
	</div>
    <div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
            <a href="#eduedition"><?php echo $l->t('education edition');?></a>
			<a href="#easy"><?php echo $l->t('ease of use');?></a>
			<a href="#scalability"><?php echo $l->t('scalability');?></a>
			<a href="#control"><?php echo $l->t('control');?></a>
		</div>
	</div>
</div>

<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph text-center"><?php echo $l->t('Students and staff at research and educational organizations handle large amounts of data. Papers are written, reviewed and read; data is gathered, shared and analyzed; and models are built.');?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('Working seamlessly on these large amounts of data across multiple platforms, departments and institutions in a easy and efficient way is paramount. Universities need a scalable, reliable and easy to use solution under full control of the IT department. The <em>Nextcloud Education Edition</em> provides exactly that!');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--customers">
<div class="container">
    <h2 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Some of our customers');?></h2>
    <div class="row">
		<div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="https://nextcloud.com/blog/9-german-educational-and-research-institutions-move-to-nextcloud-as-part-of-tu-berlin-migration-more-coming/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/tuberlin.png" /></a>
            </div>
        </div>
		<div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="https://nextcloud.com/blog/3000-users-at-ucloud4schools-migrated-to-nextcloud-11-by-regio-it/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/regioit.png" /></a>
            </div>
        </div>
        <div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="https://nextcloud.com/blog/the-danish-research-and-education-network-moves-from-owncloud-to-nextcloud/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/deic.png" /></a>
            </div>
        </div>
        <div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="http://my.engineering.queensu.ca/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/queens.png" /></a>
            </div>
        </div>
		<div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="http://www.univ-nantes.fr/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/uni-nantes.png" /></a>
            </div>
        </div>
		<div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="http://www.nwu.ac.za/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/NWU.png" /></a>
            </div>
        </div>
        <div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="https://www.sdu.dk/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/syddansk-universitet.png" /></a>
            </div>
        </div>
        <div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="https://www.mpg.de/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/max-planck.png" /></a>
            </div>
        </div>
    </div>
</div>
</section>

<a name="eduedition"></a>
<div class="separator"></div>
<section class="section--eduedition">
<div class="container">
    <h2 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Education Edition');?></h2>
    <div class="row">
		<div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('The Nextcloud Education Edition is a bundle of about a dozen Nextcloud apps available for easy installation within the Nextcloud interface. The apps have been developed for the educational market in collaboration with research institutions and software vendors active in the educational sector. See below for a selection of the included apps.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 app-feature">
            <img class="img-responsive revealOnScroll" src="<?php bloginfo('template_directory'); ?>/assets/img/features/moodle-nw.png" />
            <h2 class="section--heading-2 text-center revealOnScroll">Moodle</h2>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('The Moodle integration offers users the ability to access files from Nextcloud, adding, removing or sharing them from within Moodle. More features are in development through a collaboration between Moodle Pty Ltd and Nextcloud GmbH.');?></p>
        </div>
        <div class="col-sm-4 app-feature">
            <img class="img-responsive revealOnScroll" src="<?php bloginfo('template_directory'); ?>/assets/img/features/zenodo-nw.png" />
            <h2 class="section--heading-2 text-center revealOnScroll">Zenodo</h2>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('The Zenodo Publishing app enables researchers to publish papers on the popular Zenodo.org platform, developed and supported by European Science Accellerators CERN.');?></p>
        </div>
        <div class="col-sm-4 app-feature">
            <img class="img-responsive revealOnScroll" src="<?php bloginfo('template_directory'); ?>/assets/img/features/orcid-nw.png" />
            <h2 class="section--heading-2 text-center revealOnScroll">SAML</h2>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Educational organizations often use SAML, Shibboleth and Kerberos. These and more authentication mechanisms are available in the Education Edition.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 app-feature">
            <img class="img-responsive revealOnScroll" src="<?php bloginfo('template_directory'); ?>/assets/img/features/circles-nw.png" />
            <h2 class="section--heading-2 text-center revealOnScroll">Circles</h2>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Developed for DeiC, the collective of Danish universities, Circles facilitates the collaboration in always-changing groups that students and teachers participate in.');?></p>
        </div>
        <div class="col-sm-4 app-feature">
            <img class="img-responsive revealOnScroll" src="<?php bloginfo('template_directory'); ?>/assets/img/features/dashboard-nw.png" />
            <h2 class="section--heading-2 text-center revealOnScroll">Dashboard</h2>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('The Dashboard app came from a collaboration with regio iT and is used at hundreds of schools in Europe. It provides a quick overview of file changes, calendar events and more.');?></p>
        </div>
        <div class="col-sm-4 app-feature">
            <img class="img-responsive revealOnScroll" src="<?php bloginfo('template_directory'); ?>/assets/img/features/picocms-nw.png" />
            <h2 class="section--heading-2 text-center revealOnScroll">PicoCMS</h2>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud <a href="https://nextcloud.com/blog/nextcloud-introduces-easy-website-builder-for-education-edition-with-picocms/" class="hyperlink">PicoCMS</a> offers a very small, simple way of managing and presenting content. Developed in collaboration with the Danish DeiC, it lets users built websites collaboratively and define access rights, themes and URL.');?></p>
        </div>
    </div>
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
            <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('<a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-moodle-and-4-other-partners-announce-education-edition">Learn more about the Education Edition in the announcement.</a> <br />Special GEÁNT pricing is available for research and educational organizations.');?></p>
            <p class="section--paragraph text-center revealOnScroll"><a href="<?php echo home_url('enterprise/buy') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Contact Sales');?></a></p>
        </div>
    </div>
</div>
</section>

<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
			<div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('How the TU Berlin delivers file sync and share to 22.000 users');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Download our free case study: <br /> TU Berlin and 9 other institutions migrate from ownCloud to Nextcloud');?><br>
                    <td colspan="2" style="text-align:center">
                    <div class="">
                        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="5">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large" type="submit" value=" Get the case study "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/tub-thumbnail-banner.png"/>
	</div>
</section>

<a name="easy"></a>
<section class="section--easy">
	<div class="container">
        <div class="row">
            <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Ease of use');?></p>
            <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Simple yet powerful');?></h3>
            <div class="easy--ilustration"></div>
            <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Usability is crucial for productivity and thus a key focus for Nextcloud. Many of our customers in the educational market chose Nextcloud explicitly for its ease of use.');?></p>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 revealOnScroll feature--block">
                <p class="section--paragraph revealOnScroll"><?php echo $l->t('Privately, students are used to consumer clouds from Google, Apple, Microsoft, Dropbox and others which make sharing, editing and communicating a breeze. A first requirement for any secure solution to replace them is that it does not force complexity on the user. Forbidding usage of Dropbox or other public clouds will not make them disappear unless a credible alternative is provided!');?></p>
                <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud is as easy to use as public non-enterprise clouds, providing users a comfortable, familiar workspace.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/circles-nw.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Group management');?></p>
                <p class="section--paragraph"><?php echo $l->t('Students and teachers have a variety of classes and work in always-changing teams and groups. Nextcloud supports their workflow with the <a href="https://apps.nextcloud.com/apps/circles">Circles app,</a> enabling users to create, share, join and leave groups of their own in which they can collaborate and share.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll image--floated">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/mobileDesktop.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Multi-platform');?></p>
                <p class="section--paragraph"><?php echo $l->t('Universities can not dictate what devices are used by the students and need to support a wide range of tablets, phones, laptop and desktop operating systems. Nextcloud has excellent Android and iOS clients as well as Windows, Mac and Linux desktop apps that make data accessible on any device.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/comments-nw.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Productivity');?></p>
                <p class="section--paragraph"><?php echo $l->t('Students can tag and comment on files for easy collaboration, roll back files to earlier versions or find deleted files in the trash. Real time collaborative editing and secure audio/video calls and chat complement the array of features aimed at enhancing productivity.');?></p>
            </div>
        </div>
    </div>
</section>

<div class="separator"></div>
<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6 revealOnScroll">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/regioit.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('regio IT offers ucloud4schools');?></p>
                <p class="section--paragraph"><?php echo $l->t('In February 2017 regio IT migrated 3000 users to Nextcloud, delivering secure online file exchange and collaboration.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Today, regio iT is managing about 50.000 users, of which over 1000 using Collabora Online for online office, at hundreds of schools in Germany.');?></p>
                <a href="https://nextcloud.com/blog/3000-users-at-ucloud4schools-migrated-to-nextcloud-11-by-regio-it/" class="button button--blue button--arrow button--large"><?php echo $l->t('blog about initial migration');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
			<div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('Case Study: North-West University');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('The North-West University from South Africa improves user storage mobility,<br /> collaboration and productivity with Nextcloud and Collabora Online.');?><br>
                    <td colspan="2" style="text-align:center">
                    <div class="">
                        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="48">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large" type="submit" value=" Get the case study "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/nwu-thumbnail-banner.png"/>
	</div>
</section>

<a name="scalability"></a>
<section class="section--scalability">
<div class="container">
    <div class="row">
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Scalability');?></p>
        <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Handles millions of users');?></h3>
        <div class="efficiency--ilustration"></div>
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Universities deal with large amounts of data. In 2014, students at the TU Berlin had 10GB of storage assigned, growing to 30GB quota for students and 100GB for staff in 2017. The TU Berlin\'s 22.000 users are storing 70TB of data and changing over 80.000 files out of a total of over 100 million every day.');?></p>
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud handles such numbers with ease as evident at universities around the globe.');?></p>
    </div>
    <div class="row revealOnScroll ">
        <div class="col-md-10 col-md-offset-1 feature--block">
            <h3 class="section--heading-2 text-center"><?php echo $l->t('Scale Globally');?></h3>
        </div>
    </div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="">
                <div data-type="youtube" data-video-id="I5wcLS9xxMw"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/I5wcLS9xxMw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
		</div>
    </div>
    <div class="row">
		<div class="col-md-8 col-md-offset-2 revealOnScroll">
			<p class="section--paragraph text-center"><?php echo $l->t('<span class="avoidwrap">Nextcloud Global Scale delivers a true globally scalable solution</span> <span class="avoidwrap">for deployments with hundreds of millions of users<span>, <span class="avoidwrap">giving unprecedented control over the locality of data</span> <span class="avoidwrap">and delivering dramatic cost reduction</span>');?></p>
			<p class="section--paragraph text-center"><a href="<?php echo home_url('globalscale') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Global Scale');?></a></p>
		</div>
	</div>
</div>
<div class="container-fluid quote">
	<div class="container-widest">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 revealOnScroll">
				<p class="section--paragraph text-center"><?php echo $l->t('Your users are not confined to your Nextcloud server.<br/> Federation allows them to collaborate with users on other Nextcloud, Pydio or ownCloud servers!');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('sharing/#federation') ?>" class="button button--large button--arrow"><?php echo $l->t('Federation');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row revealOnScroll ">
        <div class="col-md-10 col-md-offset-1 feature--block">
            <h3 class="section--heading-2 text-center"><?php echo $l->t('Deep integration');?></h3>
        </div>
    </div>
    <div class="row revealOnScroll ">
        <div class="col-md-6">
            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/kerberos.svg");?>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud integrates in the university infrastructure with support for SAML and Shibboleth, LDAP, Kerberos, Oauth and other often used authentication mechanisms and runs on all enterprise Linux systems offering support options to match their life cycle.');?></p>
        </div>
        <div class="col-md-6">
            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/storage.svg");?>
            <p class="section--paragraph"><?php echo $l->t('Data storage can be one or multiple NFS, Object Storage, Samba or a variety of other powerful storage mechanisms. This way Nextcloud provides seamless access to data on existing storage mechanisms, respecting access control limitations and transparently handling changes on the underlying storage layer.');?></p>
        </div>
    </div>
    <div class="row whitepaper text-center revealOnScroll">
        <div class="col-md-offset-4 col-md-4 wp-center">
            <p>
            <div class="row "><img class="responsive text-center" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/architecture-thumbnail-banner.png"/></div>
            <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                <p><label for="email"><?php echo $l->t('Download our Architecture whitepaper');?><br>
                <input class="mail text-center" type="text" name="email" maxlength="80" size="30" placeholder="Enter your email"></label></p>
                <td colspan="2">
                <input type="hidden" name="segmentId" value="1">
                <div class="g-recaptcha text-center" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                <input class="button button--blue button--large" type="submit" value=" Get the whitepaper ">
            </form>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 image--floated revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/appstore.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Extensible');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud can be extended to offer integration in tools commonly used by universities like Moodle, Zenodo and others. It is possible to add mail, calendar and contact handling, audio-video calls, realtime collaborative and much more. The Nextcloud App store features dozens of apps covering a wide variety of use cases.');?></p>
            <a href="https://apps.nextcloud.com" class="button button--blue button--arrow button--large"><?php echo $l->t('Nextcloud Apps');?></a>
        </div>
    </div>
</div>
</section>

<div class="separator"></div>
<a name="control"></a>
<section class="section--control">
<div class="container">
    <div class="row">
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Control');?></p>
        <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Secures your data');?></h3>
        <div class="distribution--ilustration"></div>
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('While data needs to be at users\' finger tips at any time, the IT department must to be able to ensure policies around protection of intellectual property, legal requirements and privacy are respected.');?></p>
    </div>
    <div class="row">
        <div class="col-md-6 revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/file-access-control-nw.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('File Access Control');?></p>
            <p class="section--paragraph"><?php echo $l->t('The File Access Control feature of Nextcloud enables IT to codify legal and policy requirements, blocking students and others from  uploading or downloading data following defined rules. Criteria include IP address ranges, group membership, file type, time and more. Data retention can be controlled as well, enabling universities to limit the lifetime of certain files.');?></p>
            <a href="<?php echo home_url('workflow') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('File Access Control');?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 revealOnScroll image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-nw.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Monitoring');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers powerful monitoring capabilities built in, enabling institutions to ensure smooth performance. Systems can be monitored using the web interface or through monitoring and systems intelligence tools like OpenNMS, Splunk, Nagios or others.');?></p>
            <a href="<?php echo home_url('monitoring') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Monitoring');?></a>
        </div>
    </div>
    <div class="row claim--container">
        <p class="claim--paragraph">
            <blockquote>Nextcloud understands the necessity to provide core principle baseline security requirements, as such Nextcloud 11 is built on these security principles to ultimately deliver a secure solution to their customers</blockquote>
        </p>
        <div class="claim--brand">
            <div class="claim--brand--logo"></div>
            <p class="claim--brand--text">
                <?php echo $l->t('NCC Group');?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 revealOnScroll feature--block">
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud offers first-in-class, third-party verified security backed by a USD 5000 Security Bug Bounty program protecting against unauthorized access. Data is protected through industry standard TLS when transported and as an extra layer of security, whole-disk encryption or built in, server-side encryption with support for external key management can be employed.');?></p>
            <a href="<?php echo home_url('secure') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn about security');?></a>
        </div>
    </div>
</div>
</section>

<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 revealOnScroll">
				<p class="section--paragraph text-center"><?php echo $l->t('Choose the best platform for efficient, secure and easy collaboration.<br/> Contact sales today!');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('enterprise/buy/') ?>" class="button button--large button--arrow"><?php echo $l->t('Contact Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="section--features">
<div class="container-widest">
	<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Key features in Nextcloud');?></h1>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
            <i class="fa-code-fork fa"></i>
        </div>
        <div class="col-md-3 featureblock">
            <p class=""><?php echo $l->t('Nextcloud is 100% open source - there are no limitations or proprietary/enterprise only features. Inspect, integrate, extend and modify Nextcloud however you want. Enable apps like Moodle, Zimbra, Zenodo and others or built your own!');?></p>
        </div>
        <div class="col-md-1 featureblock">
            <i class="fa-server fa"></i>
        </div>
        <div class="col-md-3 featureblock">
            <p class=""><?php echo $l->t('Fully self hosted, meaning all data is under your control. Nextcloud can leverage your existing storage, security and privacy policies. There is no vendor lock-in or tracking by us of any kind!');?></p>
        </div>
        <div class="col-md-1 featureblock">
            <i class="fa-tags fa"></i>
        </div>
        <div class="col-md-3 featureblock">
            <p class=""><?php echo $l->t('Nextcloud offers an easy to use user interface which comes with (optional full text indexed) search functionality, trash and versioning, favorites, tags and more ways to quickly reach the files users need.');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
            <i class="fa-file-text fa"></i>
        </div>
        <div class="col-md-3 featureblock">
            <p class=""><?php echo $l->t('Easy sharing, commenting on files, custom creation and management of groups, secure audio/video chat (optional) and real time document editing (optional) make sure users collaborate efficiently.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-mobile fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Desktop and mobile clients for Windows/MacOS/Linux, Android and iOS complement the web interface, integrating in the file system. Nextcloud can also be reached through WebDAV.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-puzzle-piece fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Authentication through LDAP / Active Directory, Kerberos and Shibboleth / SAML 2.0 and more and external storage supporting NFS, Object Storage and other protocols ensure easy integration.');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
        <i class="fa-shield fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('First class security policies, extensive security hardening features and File Access Control to ensure legal and privacy regulations are enforced at all times. Nextcloud comes with integrated logging, two-factor authentication and NIST compliant password policy control functionalities.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-list fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Nextcloud offers fine-grained control from mobile, desktop or the Web over data access and sharing capabilities. Advanced quota management with configurable accounting of external storage and configurable file retention policies.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-archive fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('First class enterprise support, branding and custom consulting provided by an employee owned, healthy and sustainable German business.');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
        </div>
        <div class="col-md-3 featureblock">
        </div>
        <div class="col-md-1 featureblock">
<!--        <i class="fa-copy fa"></i>-->
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><a class="hyperlink" href="<?php echo home_url('compare') ?>"><?php echo $l->t('<br />... see how we compare to other solutions!</a>');?></p>
        </div>
        <div class="col-md-1 featureblock">
        </div>
        <div class="col-md-3 featureblock">
        </div>
    </div>
</div>
</section>
