<head>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/advisory.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["pages/collabora", "modules/youtubePlayer", "modules/codeHighlights"])
	});
</script>
<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/advisory.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/advisory.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/advisory.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/advisory.png">
</head>

<div class="background advisory-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Customer Advisory Board');?></h1>
 				<h2><code><?php echo $l->t('Open Innovation in practice');?></code></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row revealOnScroll">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('The Customer Advisory Board gives our valuable customers an opportunity to discuss their challenges & ideas with senior management of Nextcloud, help set strategic directions and learn of new technologies our engineers are working on.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--benefits benefits">
<div class="container-fluid banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="section--heading-1 section--text--center revealOnScroll">Meeting opportunities</p>
                <p class="section--paragraph revealOnScroll">Several yearly face to face meetings and conference calls provide the platform for the best alignment between the needs of our customers and our development direction.</p>
                <ul>
                <li class="revealOnScroll"><i class="fa-check fa"></i> Quarterly conference calls reviewing the roadmap and new market developments</li>
                <li class="revealOnScroll"><i class="fa-check fa"></i> Discussion and dinner the day before the bi-annual Nextcloud Enterprise Day</li>
                <li class="revealOnScroll"><i class="fa-check fa"></i> Other direct contact opportunities with Nextcloud senior management through the year</li>
                </ul>
                <p class="section--paragraph revealOnScroll">Every Premium Subscription Nextcloud customer is offered a seat on the Advisory board.</p>
            </div>
        <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/meeting.jpg">
        <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/meeting-square.jpg">
        </div>
    </div>
</div>
</section>

<section class="section--memberquotes">
<div class="container">
    <p class="section--heading-1 section--text--center">Membership</p>
    <p class="section--paragraph section--text--center">Our board currently has a little over 20 members,<br> some of whom prefer to remain private.</p>
    <div class="row">
        <div class="col-md-3 col-md-xs-6">
            <div class="picture">
                <div class="pic-container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/board/peter.muenzer.jpg"/>
                </div>
            </div>
            <p class="section--paragraph__tittle text-center">Peter Münzer</p>
            <p class="section--paragraph text-center">Team Lead IT Service Management, Siemens AG</p>
            <blockquote>It's always a pleasure working with professionals that keep an ear on the ground. Taking the chance to collaborate on the best solution, leads to success for us all.</blockquote>
        </div>
        <div class="col-md-3 col-md-xs-6">
            <div class="picture">
                <div class="pic-container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/board/andreas.reschke.jpg"/>
                </div>
            </div>
            <p class="section--paragraph__tittle text-center">Andreas Reschke</p>
            <p class="section--paragraph text-center">Senior Linux Administrator, MAHLE International GmbH</p>
<!--             <blockquote>(placeholder)</blockquote> -->
        </div>
        <div class="col-md-3 col-md-xs-6">
            <div class="picture">
                <div class="pic-container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/board/steve.jordi.jpg"/>
                </div>
            </div>
            <p class="section--paragraph__tittle text-center">Steve Jordi</p>
            <p class="section--paragraph text-center">System engineer at the City of Geneva</p>
            <blockquote>Being part of the nextCloud Advisory Board is the best way for us to help shape the future of the product, for our own needs, but also to give back with our expertise to the community</blockquote>
        </div>
        <div class="col-md-3 col-md-xs-6">
            <div class="picture">
                <div class="pic-container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/board/thomas.hildmann.jpg"/>
                </div>
            </div>
            <p class="section--paragraph__tittle text-center">Dr.-Ing. Thomas Hildmann</p>
            <p class="section--paragraph text-center">Head of the infrastructure department, TU Berlin</p>
            <blockquote>I have had good experiences with Advisory Boards and am looking forward to a more frequent exchange of ideas and thoughts.</blockquote>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-xs-6">
            <div class="picture">
                <div class="pic-container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/board/schnapka.jpg"/>
                </div>
            </div>
            <p class="section--paragraph__tittle text-center">Gerd Schnapka</p>
            <p class="section--paragraph text-center">Head of Joint Network Center, Max Planck Society</p>
            <blockquote>The Nextcloud Advisory Board will make our exchange of ideas on a regular basis possible and I'm really looking forward to that.</blockquote>
        </div>
        <div class="col-md-3 col-md-xs-6">
            <div class="picture">
                <div class="pic-container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/board/ansa.jpg"/>
                </div>
            </div>
            <p class="section--paragraph__tittle text-center">Anders Salling Andersen</p>
            <p class="section--paragraph text-center">IT-System Administrator, Syddansk Universitet</p>
            <blockquote>Great initiative, we find this to be very usefull indeed.</blockquote>
        </div>
        <div class="col-md-3 col-md-xs-6">
            <div class="picture">
                <div class="pic-container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/board/matthieu.lecorre.jpg"/>
                </div>
            </div>
            <p class="section--paragraph__tittle text-center">Matthieu Le Corre</p>
            <p class="section--paragraph text-center">UNCloud Project manager & IT technical manager for computer sciences, Université de Nantes</p>
            <blockquote>As UNCloud, our Nextcloud instance, is a very structuring project for the Universite of Nantes,we appreciate the opportunity to share our feedback and participe to the future orientations of the NextCloud product</blockquote>
        </div>
        <div class="col-md-3 col-md-xs-6">
            <div class="picture">
                <div class="pic-container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/board/felipe.padilha.jpg"/>
                </div>
            </div>
            <p class="section--paragraph__tittle text-center">Felipe Padilha</p>
            <p class="section--paragraph text-center">IT Deputy Director, AMX Contenido</p>
            <blockquote>I'm happy to be part of the Nextcloud Customer Advisory Board and able to exchange experiences and visions from different markets aiming better cloud solutions</blockquote>
        </div>
    </div>
    <!--<div class="row">
        <div class="col-md-3 col-md-xs-6">
            <div class="picture">
                <div class="pic-container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/board/wolfgang.friedl.jpg"/>
                </div>
            </div>
            <p class="section--paragraph__tittle text-center">Wolfgang Friedl</p>
            <p class="section--paragraph text-center">Teamleiter / Team Lead Enterprise Content Management, BEIT GmbH</p>
            <blockquote>(placeholder)</blockquote>
        </div>
        <div class="col-md-3 col-md-xs-6">
            <div class="picture">
                <div class="pic-container">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/board/ian.eveans.jpg"/>
                </div>
            </div>
            <p class="section--paragraph__tittle text-center">Ian Evans</p>
            <p class="section--paragraph text-center">Systems Architect, Department of Finance, Services & Innovation (Australia)</p>
            <blockquote>(placeholder)</blockquote>
        </div>
    </div>-->
</div>
</section>

<section class="section--benefits benefits">
<div class="container-fluid banner">
    <div class="row">
        <div class="container">
            <div class="col-md-6 col-md-offset-6">
                <p class="section--heading-1 section--text--center revealOnScroll">Why participate?</p>
                <p class="section--paragraph revealOnScroll">Several yearly face to face meetings and conference calls provide the platform for improved alignment between the needs of our customers and our development direction.</p>
                <ul>
                <li class="revealOnScroll"><i class="fa-check fa"></i> Gain unique insights in upcoming technologies</li>
                <li class="revealOnScroll"><i class="fa-check fa"></i> Share needs and ideas from your business</li>
                <li class="revealOnScroll"><i class="fa-check fa"></i> Hear what challenges others in the market face</li>
                <li class="revealOnScroll"><i class="fa-check fa"></i> Help Nextcloud determine development priorities</li>
                </ul>
                <p class="section--paragraph revealOnScroll">Be part of building a vision for secure file exchange and teamwork in organizations of the future!</p>
            </div>
        <img class="big-img-invert" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/meeting2.jpg">
        <img class="small-img-invert" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/meeting2-square.jpg">
        </div>
    </div>
</section>
