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
        <div class="col-md-6">
            <p class="section--heading-1 section--text--center revealOnScroll">Meeting opportunities</p>
            <p class="section--paragraph revealOnScroll">Several yearly face to face meetings and conference calls provide the platform for improved alignment between the needs of our customers and our development direction.</p>
            <ul>
            <li class="revealOnScroll"><i class="fa-check fa"></i> Quarterly conference calls reviewing the roadmap and new market developments</li>
            <li class="revealOnScroll"><i class="fa-check fa"></i> Discussion and dinner the day before the bi-annual Nextcloud Enterprise Day</li>
            <li class="revealOnScroll"><i class="fa-check fa"></i> Regular information about on what is planned for future releases</li>
            <li class="revealOnScroll"><i class="fa-check fa"></i> Other direct contact opportunities with Nextcloud senior management through the year</li>
            </ul>
            <p class="section--paragraph revealOnScroll">Every Premium Subscription Nextcloud customer gets a seat on the Advisory board.</p>
        </div>
    <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/meeting.jpg">
    <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/meeting-square.jpg">
    </div>
</div>
</section>

<!-- <section class="section--quote">
<div class="container">
    <div class="row feature-row">
        <div class="col-md-6 revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/history/frank.jpg" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <blockquote>staying in close contact with Nextcloud management has benefitted the TU greatly, enabling features like End-to-end Encryption and much improved SAML support to be developed in alignment with our needs</blockquote>
            <p class="section--paragraph">- Dr. Thomas Hildmann, TU Berlin</p>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6 image--floated revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/history/frank.jpg" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <blockquote>staying in close contact with Nextcloud management has benefitted the TU greatly, enabling features like End-to-end Encryption and much improved SAML support to be developed in alignment with our needs</blockquote>
            <p class="section--paragraph">- Dr. Thomas Hildmann, TU Berlin</p>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6 revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/history/frank.jpg" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <blockquote>staying in close contact with Nextcloud management has benefitted the TU greatly, enabling features like End-to-end Encryption and much improved SAML support to be developed in alignment with our needs</blockquote>
            <p class="section--paragraph">- Dr. Thomas Hildmann, TU Berlin</p>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6 image--floated revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/history/frank.jpg" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <blockquote>staying in close contact with Nextcloud management has benefitted the TU greatly, enabling features like End-to-end Encryption and much improved SAML support to be developed in alignment with our needs</blockquote>
            <p class="section--paragraph">- Dr. Thomas Hildmann, TU Berlin</p>
        </div>
    </div>
</div>
</section>  -->

<section class="section--benefits benefits">
<div class="container-fluid banner">
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
</section>
