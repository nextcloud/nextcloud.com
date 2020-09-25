<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/appdev.css?v=3" rel="stylesheet">
    <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta name=”Description” content="Develop for Nextcloud! Write a new app, extend Nextcloud or integrate other software.">

<script>
	require(["require.config"], function() {
		require(["bootstrap"])
	});
</script>
</head>

<div class="background appdev-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Develop for Nextcloud');?></h1>
				<h2><?php echo $l->t('<span class="avoidwrap">Write new applications</span>, <span class="avoidwrap">extend Nextcloud</span> <span class="avoidwrap">or integrate other software</span>');?></p>
			</div>
		</div>
	</div>
</div>
<section class="section--documentation">
<div class="container">
   	<div class="row">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/machine.svg" class="icon" />
            <h3 class="section--paragraph__title"><?php echo $l->t('Build a new application');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Write new applications on top of the Nextcloud platform.');?></p>
        <div class="col-md-6">
            <ul class="section--paragraph">
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>"><?php echo $l->t('Developer setup');?></a></li>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>app_development/intro.html"><?php echo $l->t('App skeleton generator');?></a></li>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/app_development/intro.html"><?php echo $l->t('App Developer intro');?></a></li>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>digging_deeper/api.html"><?php echo $l->t('API documentation');?></a></li>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/design/index.html"><?php echo $l->t('App design guidelines');?></a></li>
                <li><a class="hyperlink" href="https://nextcloud-vue-components.netlify.com/"><?php echo $l->t('Nextcloud Vue guidelines');?></a></li>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>app_publishing_maintenance/index.html"><?php echo $l->t('Publishing apps');?></a></li>
            </ul>
        </div>
        <div class="col-md-6 image--feature ">
            <ul class="section--paragraph">
                <li><a class="hyperlink" href="https://github.com/nextcloud/dashboard/blob/master/README.md"><?php echo $l->t('Write a dashboard plugin');?></a></li>
                <li><a class="hyperlink" href="https://docs.nextcloud.com/server/latest/developer_manual/digging_deeper/flow.html"><?php echo $l->t('Interact with Workflows');?></a></li>
                <!--<li><a class="hyperlink" href="TBD"><?php echo $l->t('Manage guest app accounts');?></a></li>-->
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>basics/front-end/theming.html"><?php echo $l->t('Write a theme to change the look and feel of Nextcloud');?></a></li>
                <li><a class="hyperlink" href="https://nextcloud-talk.readthedocs.io/en/latest/commands/"><?php echo $l->t('Write a Nextcloud Talk Command');?></a>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>digging_deeper/two-factor-provider.html"><?php echo $l->t('Write a new 2factor authentication plugin');?></a>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>digging_deeper/users.html"><?php echo $l->t('Write a new user-management backend');?></a></li>
            </ul>
        </div>
	</div>
	<div class="row">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/OCS_icon_color.svg" class="icon" />
            <h3 class="section--paragraph__title"><?php echo $l->t('Open Collaboration Services');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Integrate an existing software or client into Nextcloud.');?></p>
            <p class="section--paragraph"><?php echo $l->t('The Open Collaboration Services is an open standard and we welcome third party integration and input!');?> <a href="https://open-collaboration-services.org" class="hyperlink"><?php echo $l->t('Learn more.');?></a></p>
		<div class="col-md-6">
            <ul class="section--paragraph">
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>client_apis/LoginFlow/index.html"><?php echo $l->t('Login Flow');?></a></li>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/client_apis/index.html"><?php echo $l->t('Client APIs');?></a></li>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>/configuration_user/user_provisioning_api.html"><?php echo $l->t('User provisioning via REST');?></a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="section--paragraph">
                <li><a class="hyperlink" href="https://nextcloud-talk.readthedocs.io/en/latest/"><?php echo $l->t('Nextcloud Talk REST API');?></a></li>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>client_apis/android_library/index.html#nextcloud-android-library"><?php echo $l->t('Access Nextcloud through our Android library');?></a></li>
                <li><a class="hyperlink" href="https://github.com/nextcloud/ios-communication-library"><?php echo $l->t('Access Nextcloud through our iOS library');?></a></li>
            </ul>
        </div>
    </div>
</div>
</section>

<section class="section--getinvolved">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center"><?php echo $l->t('Get involved');?></h2>
            <p class="section--paragraph"><em><?php echo $l->t('Open Source empowers you.');?></em> <?php echo $l->t('Where a software-as-a-service might allow you to tweak and build connectors, with Nextcloud you can go all the way and enhance the server itself or apps from other authors with new API\'s and core functionality.');?></p>
            <div class="text-center">
                <a class="button button--blue button--large button--arrow" href="<?php echo home_url('contribute') ?>"><?php echo $l->t('Contribute to Nextcloud');?></a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--feature">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6 ">
                <a href="https://apps.nextcloud.com/apps/ocr"><img class="img-responsive" src="https://raw.githubusercontent.com/janis91/ocr/master/screenshots/sc4.png" alt="in action"/></a>
            </div>
            <div class="col-md-6  feature--block">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/check.svg" class="icon" />
                <h3 class="section--paragraph__title"><?php echo $l->t('Featured community app:');?> <br /> Nextcloud OCR</h3>
                <p class="section--paragraph"><?php echo $l->t('The app uses tesseract-js in the browser in order to extract text from images (png, jpeg, tiff) and PDFs and saves the output file to the source folder in nextcloud. That for example enables you to search in it.');?></p>
                <a href="https://nextcloud.com/blog/unsung-heroes-of-the-nextcloud-community-janis-koehr/" class="button button--blue button--arrow button--large"><?php echo $l->t('Read the interview');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--contact quote">
<div class="container">
    <div class="row">
        <h2 class="text-center"><?php echo $l->t('Need help?');?></h2>
        <p class="section--paragraph text-center"><?php echo $l->t('Stuck with your app?');?></p>
        <p class="section--paragraph text-center"><?php echo $l->t('We love to help!');?></p>
        <div class="text-center morebuttondiv">
            <a href="https://help.nextcloud.com/c/dev" class="button button-button--large button--arrow"><?php echo $l->t('Get help on the forums');?> <i class="icon-arrow-circle-o-right icon"></i></a>
        </div>
    </div>
</div>
</section>

<section class="section--feature">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6 ">
                <a href="https://apps.nextcloud.com/apps/dicomviewer"><img class="img-responsive" src="https://nextcloud.com/media/DICOM-viewer.jpg" alt="in action"/></a>
            </div>
            <div class="col-md-6  feature--block">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/check.svg" class="icon" />
                <h3 class="section--paragraph__title"><?php echo $l->t('Featured community app:');?> <br /> Digital Imaging for Medicine</h3>
                <p class="section--paragraph"><?php echo $l->t('The DICOM Viewer allows the user to display and manipulate DICOM images with a streamlined sidebar and viewer, all without leaving Nextcloud. The sidebar parses DICOM files and displays all DICOM attributes, such as Patient ID, Patient Name, and Study Date/Time, in a convenient details panel. A critical search feature on the sidebar enables the user to quickly search for specific DICOM attributes.');?></p>
                <a href="https://nextcloud.com/blog/digital-imaging-for-medicine-in-nextcloud/" class="button button--blue button--arrow button--large"><?php echo $l->t('Read about the DICOM viewer');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--include">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6 image--floated">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/headers/verticals-small.jpg" alt="in action"/>
            </div>
            <div class="col-md-6  feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Include');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Diversity strengthens a community. The Nextcloud Include initiative helps underrepresented groups to join the Nextcloud project, building an inclusive and diverse space where we collaborate and develop world class software.');?></p>
                <a href="<?php echo home_url('include') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Lear more and request mentoring');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--contact quote">
<div class="container">
    <div class="row">
        <h2 class="text-center"><?php echo $l->t('Have ideas on how to improve our developer information?');?></h2>
        <p class="section--paragraph text-center"><?php echo $l->t('Sign up to our forum and join the discussion.');?></p>
        <p class="section--paragraph text-center"><?php echo $l->t('We love to hear your thoughts!');?></p>
        <div class="text-center morebuttondiv">
            <a href="https://help.nextcloud.com/c/dev" class="button button-button--large button--arrow"><?php echo $l->t('Share your ideas');?> <i class="icon-arrow-circle-o-right icon"></i></a>
        </div>
    </div>
</div>
</section>

<section class="section--why">
<div class="container">
	<div class="row introduction">
        <div class="col-lg-6 col-lg-offset-3">
            <h1 class="section--heading-1 section--text--center"><?php echo $l->t('Why Nextcloud apps?');?></h1>
		</div>
	</div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="featureblock">
                        <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/people.svg" /></div>
                        <h3 class="section--paragraph__title"><?php echo $l->t('Big audience');?></h3>
                        <p class="section--paragraph"><?php echo $l->t('There are between 200.000 and 300.000 Nextcloud servers on the web with tens of millions of users between them. A big audience exists for functionality which extends the most popular self-hosted productivity platform. The most downloaded apps on our app store are installed on over 100.000 servers and have millions of users!');?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featureblock">
                        <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/manual.svg" /></div>
                        <h3 class="section--paragraph__title"><?php echo $l->t('Free promotion');?></h3>
                        <p class="section--paragraph"><?php echo $l->t('We want you to be successful! If you create an app, extension or integration, Nextcloud will help you promote it. We are happy to work with you on a post for our blog, share the app over social media and you can present it at our conference.');?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featureblock">
                        <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/2fa.svg" /></div>
                        <h3 class="section--paragraph__title"><?php echo $l->t('Business opportunity');?></h3>
                        <p class="section--paragraph"><?php echo $l->t('If you build an app, script, extension or tool as a business endeavor, we will be happy to support your effort. We love our ecosystem and want you to benefit of it! Perhaps we can commercialize it together, with us reselling your product or feature to our customers.');?></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="button button--blue button--large button--arrow" href="<?php echo home_url('appmarketing') ?>"><?php echo $l->t('Contact us to discuss!');?></a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--feature">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6 ">
                <a href="https://apps.nextcloud.com/apps/cospend"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/cospend.png" alt="in action"/></a>
            </div>
            <div class="col-md-6  feature--block">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/check.svg" class="icon" />
                <h3 class="section--paragraph__title"><?php echo $l->t('Featured community app:');?> <br /> Cospend</h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud Cospend is a group/shared budget manager. It was inspired by the great IHateMoney.<br> You can use it when you share a house, when you go on vacation with friends, whenever you share money with others.');?></p>
                <a href="https://nextcloud.com/blog/cospend-another-bit-in-the-nextcloud-ecosystem/" class="button button--blue button--arrow button--large"><?php echo $l->t('Read about Cospend');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--events">
<div class="container-fluid quote">
    <div class="container-widest">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1 class="section--heading-1 section--text--center"><?php echo $l->t('Events');?></h1>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud attends and organizes events where you can learn more about building apps and integrations!');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo home_url('conf') ?>"><img class="img-responsive eventcard" src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/ncconfflyer2019.png"></a>
            </div>
            <div class="col-md-3">
                <a href="https://nextcloud.com/search/contributor+week"><img class="img-responsive eventcard" src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/generic_contributor_week.png"></a>
            </div>
            <div class="col-md-3">
                <a href="https://fosdem.org"><img class="img-responsive eventcard" src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/fosdem.png"></a>
            </div>
            <div class="col-md-3">
                <a href="https://nextcloud.com/blog/all-app-developers-put-your-hands-up-best-nextcloud-app-contest/"><img class="img-responsive eventcard" src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/appcontest.png"></a>
            </div>
        </div>
        <div class="text-center">
            <a class="button button--large button--arrow" href="<?php echo home_url('events') ?>">More events</a>
        </div>
    </div>
</div>
</section>
