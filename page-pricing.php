<head>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/pricing.css?v=3" rel="stylesheet">
	<script>
	require(["require.config"], function() {
		require(["pages/pricing", "modules/submenu", "bootstrap"])
	});
	</script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/old/jquery-321.min.js"></script>
</head>

<section class="pricing-hero-section second-menu">
	<div class="background pricing-background">
		<div class="container">
			<div class="row">
				<div class="col-md-6 topheader">
					<h1><?php echo $l->t('Nextcloud Enterprise');?></h1>
					<h2><?php echo $l->t('Nextcloud Enterprise is pre-configured, optimized and hardened for the special needs of large scale, production-critical enterprise deployments. It is backed by a Nextcloud Subscription which gives you access to our expertise, partner services and more.');?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#plans"><?php echo $l->t('plans');?></a>
			<a href="#options"><?php echo $l->t('options');?></a>
			<a href="#discounts"><?php echo $l->t('discounts');?></a>
			<a href="<?php echo home_url('faq') ?>"><?php echo $l->t('FAQ');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('Order online');?></a>
			<a class="button button--blue" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
		</div>
	</div>
</section>

<a name="plans" id="plans"></a>
<div class="container plans">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="header"><?php echo $l->t('Plans and Pricing<br>
            for Nextcloud Enterprise');?></h1>
            <h3 class="text-center"><?php echo $l->t('Successfully host your private cloud');?><br /> <a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('with Nextcloud Enterprise.');?></a></h3>
		</div>
    </div>
    <div class="row">
		<div class="col-md-4 table-column">
			<div class="table-header basic">
				<h1 class="header"><?php echo $l->t('Basic');?></h1>
				<h2 class="header"><?php echo $l->t('Starting at 50 users for 1900€/year');?></h2>
			</div>
			<div class="table-content">
				<h1 class="header"><?php echo $l->t('Features');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check" title="<?php echo $l->t('Providing a secure, reliable, enterprise-ready product to sync and share data across platforms, internall and with third parties.');?>" rel="tooltip"><?php echo $l->t('Nextcloud Enterprise');?></li>
					<li class="check" title="<?php echo $l->t('Nextcloud-branded iOS, Android and desktop apps are free.');?>" rel="tooltip"><?php echo $l->t('Mobile and desktop clients');?></li>
					<li class="check" title="<?php echo $l->t('Powerful enterprise features like SAML authentication, Windows Network Drive support, password policies, audit-ready logging, workflow handling and more.');?>" rel="tooltip"><?php echo $l->t('Enterprise capabilities');?></li>
					<li class="check" title="<?php echo $l->t('The AGPL license provides legal certainty for all customers and users.');?>" rel="tooltip"><?php echo $l->t('Fully Open Source');?></li>
				</div>
				<h1 class="header"><?php echo $l->t('Benefits');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check" title="<?php echo $l->t('If you need the certainty that you can remain on your stable, proven Nextcloud release for a long time.');?>" rel="tooltip"><?php echo $l->t('Maintenance life cycle: 1 year');?></li>
					<li class="check" title="<?php echo $l->t('Ahead of time access to security and stability patches.');?>" rel="tooltip"><?php echo $l->t('Early security and stability patches');?></li>
					<li class="check" title="<?php echo $l->t('Questions and issues are generally dealt with in this time, depending on the severity of the issue.');?>" rel="tooltip"><?php echo $l->t('Reaction time: 3 business days');?></li>
					<li class="check" title="<?php echo $l->t('Our Nextcloud Knowledge Portal helps you find answers to your questions or contact our professional support engineers.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="https://portal.nextcloud.com">Portal support</a>');?></li>
					<li class="check" title="<?php echo $l->t('Some migrations are included, others will require an extra fee.');?>" rel="tooltip"><a class="hyperlink" href="<?php echo home_url('migration') ?>"><?php echo $l->t('Migration support</a>');?></li>
					<li class="check" title="<?php echo $l->t('You can contact our capable and responsive support engineers by email and expect a quick response time.');?>" rel="tooltip"><?php echo $l->t('Email support');?></li>
					<li class="nocheck" title="<?php echo $l->t('You can contact our support engineers by phone in these times.');?>" rel="tooltip"><?php echo $l->t('Phone support');?></li>
					<li class="nocheck" title="<?php echo $l->t('If you need access to experienced engineers to built custom solutions for your unique needs.');?>" rel="tooltip"><?php echo $l->t('Custom consulting');?></li>
					<li class="nocheck" title="<?php echo $l->t('Our engineers provide installation support and advice (remote
installation call optional)');?>" rel="tooltip"><?php echo $l->t('Installation advice');?></li>
					<li class="nocheck" title="<?php echo $l->t('Upgrades are disruptive. Our engineers will ensure yours will go smooth!');?>" rel="tooltip"><?php echo $l->t('Upgrade stand-by support');?></li>
					<li class="nocheck" title="<?php echo $l->t('Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required.');?>" rel="tooltip"><?php echo $l->t('Clustering support');?></li>
					<li class="nocheck" title="<?php echo $l->t('We can guarantee turn-around times on mitigations and fixes for bugs.');?>" rel="tooltip"><?php echo $l->t('Optional SLA on fixes');?></li>
				</div>
				<h1 class="">Pricing</h1>
				<div class="line"></div>
				<div class="list">
					<li class="price" title="<?php echo $l->t('Pricing starts at 50 users. Contact us for a quote relevant for your specific market vertical.');?>" rel="tooltip"><?php echo $l->t('50 users: €1900');?></li>
					<li class="price" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('100 users: €3400');?></li>
					<li class="price" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('Additional pricing tiers are available up to 10 million users');?></li>
					<li class="price" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('Framework agreements available');?></li>
				</div>
				<a class="button button--blue button--arrow button--large" href="<?php echo home_url('enterprise/buy') ?>" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
		<div class="col-md-4 table-column">
			<div class="table-header standard">
				<h1 class=""><?php echo $l->t('Standard');?></h1>
				<h2 class=""><?php echo $l->t('Starting at 50 users for 3400€/year');?></h2>
			</div>
			<div class="table-content">
				<h1 class=""><?php echo $l->t('Features');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check" title="<?php echo $l->t('Providing a secure, reliable, enterprise-ready product to sync and share data across platforms, internall and with third parties.');?>" rel="tooltip"><?php echo $l->t('Nextcloud Enterprise');?></li>
					<li class="check" title="<?php echo $l->t('Nextcloud-branded iOS, Android and desktop apps are free. Branding optional.');?>" rel="tooltip"><?php echo $l->t('Mobile and desktop clients');?></li>
					<li class="check" title="<?php echo $l->t('Powerful enterprise features like SAML authentication, Windows Network Drive support, password policies, audit-ready logging, workflow handling and more.');?>" rel="tooltip"><?php echo $l->t('Enterprise capabilities');?></li>
					<li class="check" title="<?php echo $l->t('The AGPL license provides legal certainty for all customers and users.');?>" rel="tooltip"><?php echo $l->t('Fully Open Source');?></li>
				</div>
				<h1 class="header"><?php echo $l->t('Benefits');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check" title="<?php echo $l->t('If you need the certainty that you can remain on your stable, proven Nextcloud release for a long time.');?>" rel="tooltip"><?php echo $l->t('Maintenance life cycle: 3 years');?></li>
					<li class="check" title="<?php echo $l->t('Ahead of time access to security and stability patches.');?>" rel="tooltip"><?php echo $l->t('Early security and stability patches');?></li>
					<li class="check" title="<?php echo $l->t('Questions and issues are generally dealt with in this time, depending on the severity of the issue.');?>" rel="tooltip"><?php echo $l->t('Reaction time: 2 business days');?></li>
					<li class="check" title="<?php echo $l->t('Our Nextcloud Knowledge Portal helps you find answers to your questions or contact our professional support engineers.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="https://portal.nextcloud.com">Portal support</a>');?></li>
					<li class="check" title="<?php echo $l->t('Some migrations are included, others will require an extra fee. Ask sales for details! ');?>" rel="tooltip"><a class="hyperlink" href="<?php echo home_url('migration') ?>"><?php echo $l->t('Migration support</a>');?></li>
					<li class="check" title="<?php echo $l->t('You can contact our capable and responsive support engineers by email and expect a quick response time.');?>" rel="tooltip"><?php echo $l->t('Email support: business hours');?></li>
					<li class="check" title="<?php echo $l->t('You can contact our support engineers by phone in these times.');?>" rel="tooltip"><?php echo $l->t('Phone support: business hours');?></li>
					<li class="check" title="<?php echo $l->t('If you need access to experienced engineers to built custom solutions for your unique needs.');?>" rel="tooltip"><?php echo $l->t('Custom consulting');?></li>
					<li class="check" title="<?php echo $l->t('Our engineers provide installation support and advice (remote
installation call optional)');?>" rel="tooltip"><?php echo $l->t('Installation advice');?></li>
					<li class="nocheck" title="<?php echo $l->t('Upgrades are disruptive. Our engineers will ensure yours will go smooth!');?>" rel="tooltip"><?php echo $l->t('Upgrade stand-by support');?></li>
					<li class="nocheck" title="<?php echo $l->t('Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required.');?>" rel="tooltip"><?php echo $l->t('Clustering support');?></li>
					<li class="nocheck" title="<?php echo $l->t('We can guarantee turn-around times on mitigations and fixes for bugs.');?>" rel="tooltip"><?php echo $l->t('Optional SLA on fixes');?></li>
				</div>
				<h1 class="">Pricing</h1>
				<div class="line"></div>
				<div class="list">
					<li class="price" title="<?php echo $l->t('Pricing starts at 50 users. Contact us for a quote relevant for your specific market vertical.');?>" rel="tooltip"><?php echo $l->t('50 users: €3400');?></li>
					<li class="price" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('100 users: €6100');?></li>
					<li class="price" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('Additional pricing tiers are available up to 10 million users');?></li>
					<li class="price" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('Framework agreements available');?></li>
				</div>
				<a class="button button--blue button--arrow button--large" href="<?php echo home_url('enterprise/buy') ?>" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
		<div class="col-md-4 table-column highlight">
			<div class="table-header premium">
				<h1 class=""><?php echo $l->t('Premium');?></h1>
				<h2 class=""><?php echo $l->t('Starting at 50 users for 4900€/year');?></h2>
			</div>
			<div class="table-content">
				<h1 class=""><?php echo $l->t('Features');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check" title="<?php echo $l->t('Providing a secure, reliable, enterprise-ready product to sync and share data across platforms, internall and with third parties.');?>" rel="tooltip"><?php echo $l->t('Nextcloud Enterprise');?></li>
					<li class="check" title="<?php echo $l->t('Nextcloud-branded iOS, Android and desktop apps are free. Branding optional.');?>" rel="tooltip"><?php echo $l->t('Mobile and desktop clients');?></li>
					<li class="check" title="<?php echo $l->t('Powerful enterprise features like SAML authentication, Windows Network Drive support, password policies, audit-ready logging, workflow handling and more.');?>" rel="tooltip"><?php echo $l->t('Enterprise capabilities');?></li>
					<li class="check" title="<?php echo $l->t('The AGPL license provides legal certainty for all customers and users.');?>" rel="tooltip"><?php echo $l->t('Fully Open Source');?></li>
				</div>
				<h1 class="header"><?php echo $l->t('Benefits');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check" title="<?php echo $l->t('If you need the certainty that you can remain on your stable, proven Nextcloud release for a long time.');?>" rel="tooltip"><?php echo $l->t('Maintenance life cycle: 5+5 years');?></li>
					<li class="check" title="<?php echo $l->t('Ahead of time access to security and stability patches.');?>" rel="tooltip"><?php echo $l->t('Early security and stability patches');?></li>
					<li class="check" title="<?php echo $l->t('Questions and issues are generally dealt with in this time, depending on the severity of the issue.');?>" rel="tooltip"><?php echo $l->t('Reaction time: 1h, 4h, 12h or 24h');?></li>
					<li class="check" title="<?php echo $l->t('Our Nextcloud Knowledge Portal helps you find answers to your questions or contact our professional support engineers.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="https://portal.nextcloud.com">Portal support</a>');?></li>
					<li class="check" title="<?php echo $l->t('Some migrations are included, others will require an extra fee. Ask sales for details! ');?>" rel="tooltip"><a class="hyperlink" href="<?php echo home_url('migration') ?>"><?php echo $l->t('Migration support</a>');?></li>
					<li class="check" title="<?php echo $l->t('You can contact our capable and responsive support engineers by email and expect a quick response time.');?>" rel="tooltip"><?php echo $l->t('Email support: up to 24/7');?></li>
					<li class="check" title="<?php echo $l->t('You can contact our support engineers by phone in these times.');?>" rel="tooltip"><?php echo $l->t('Phone support: up to 24/7');?></li>
					<li class="check" title="<?php echo $l->t('If you need access to experienced engineers to built custom solutions for your unique needs.');?>" rel="tooltip"><?php echo $l->t('Custom consulting');?></li>
					<li class="check" title="<?php echo $l->t('Our engineers provide installation support and advice (remote
installation call optional)');?>" rel="tooltip"><?php echo $l->t('Installation advice');?></li>
					<li class="check" title="<?php echo $l->t('Upgrades are disruptive. Our engineers will ensure yours will go smooth!');?>" rel="tooltip"><?php echo $l->t('Upgrade stand-by support');?></li>
					<li class="check" title="<?php echo $l->t('Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required.');?>" rel="tooltip"><?php echo $l->t('Clustering support');?></li>
					<li class="check" title="<?php echo $l->t('We can guarantee turn-around times on mitigations and fixes for bugs.');?>" rel="tooltip"><?php echo $l->t('Optional SLA on fixes');?></li>
				</div>
				<h1 class="">Pricing</h1>
				<div class="line"></div>
				<div class="list">
					<li class="price" title="<?php echo $l->t('Pricing starts at 50 users. Contact us for a quote relevant for your specific market vertical.');?>" rel="tooltip"><?php echo $l->t('50 users: €4900');?></li>
					<li class="price" title="<?php echo $l->t('Contact us for a quote relevant for your specific market vertical.');?>" rel="tooltip"><?php echo $l->t('100 users: €8900');?></li>
					<li class="price" title="<?php echo $l->t('Contact us for a quote relevant for your specific market vertical.');?>" rel="tooltip"><?php echo $l->t('Additional pricing tiers are available up to 10 million users');?></li>
					<li class="price" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('Framework agreements available');?></li>
				</div>
				<a name="extracosts" id="extracosts"></a> <!--has to be here due to header-->
				<a class="button button--blue button--arrow button--large" href="<?php echo home_url('enterprise/buy') ?>" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
	</div>
</div>
<div class="container text-center">
	<p class="revealOnScroll epricevat"><?php echo $l->t('Prices are in Euro per year and net/excl. VAT.');?></p>
	<p class="revealOnScroll epricevat"><?php echo $l->t('Nextcloud subscriptions are available from 50 users and up.');?></p>
	<p class="revealOnScroll epricevat"><?php echo $l->t('Nextcloud employees never gain access to your data as we do not offer hosting.');?></p>
	<p class="revealOnScroll epricevat"><?php echo $l->t('Unless explicitly stated, Nextcloud 5x8 support is in UTC +01:00. Other times possible on request.');?></p>
	<p class="revealOnScroll epricevat"><?php echo $l->t('Our Subscription offers direct access to Nextcloud engineering expertise without a layer of support people in between.');?></p>
</div>

<section class="section--options">
	<a name="options" id="options"></a>
<div class="container-widest">
	<div class="introduction">
		<h1 class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Fitting your needs');?></h1>
		<p class="section--paragraph section--text--center revealOnScroll"><?php echo $l->t('On top of the benefits of a Nextcloud Subscription you can add several optional support and feature packages.');?></p>
	</div>
    <div class="row revealOnScroll">
        <div class="col-md-offset-2 col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/collabora-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Collabora Online Office');?></p>
				<p class="section--paragraph"><a class="hyperlink" href="<?php echo home_url('collaboraonline') ?>"><?php echo $l->t('With Collabora Online Office</a> Nextcloud features an enterprise ready integrated online office enabling users to collaboratively edit docx, pptx and other office documents with colleagues, clients or partners. Collabora Online is available with the Standard or Enterprise subscription.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('starting at € 17/user/year');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/onlyoffice-document.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('ONLYOFFICE');?></p>
				<p class="section--paragraph"><a class="hyperlink" href="<?php echo home_url('onlyoffice') ?>"><?php echo $l->t('ONLYOFFICE</a> delivers enterprise-grade real-time collaborative document editing to Nextcloud, with excellent Microsoft Office compatibility and a familiar user interface. ONLYOFFICE is available with the Standard or Enterprise subscription.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('Starting at € 15 to € 22/user/year');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
			</div>
		</div>
    </div>
    <div class="row revealOnScroll">
		<div class="col-md-offset-2 col-md-4">
			<div class="featureblock">
	<!--         <i class="fa-envelope fa"></i> -->
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Outlook Secure Sharing Add-in');?></p>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud optionally provides an');?> <a class="hyperlink" href="<?php echo home_url('outlook') ?>"><?php echo $l->t('Outlook Secure Sharing Add-in</a> enabling users to share and receive files in a secure way directly from Microsoft Outlook. The Outlook Secure Sharing Add-in can be added to a Basic, Standard or Enterprise subscription.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('starting at € 5/user/year');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
			</div>
        </div>
		<div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/theming-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Branding');?></p>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud provides branding services, delivering sync clients (mobile and desktop) which use your corporate identity and are pre-configured to help your users get up and running in no time. Branding is optionally available with the Standard or Enterprise subscription.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('starting at € 6000 yearly');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
			</div>
		</div>
	</div>
	<div class="row revealOnScroll">
		<div class="col-md-offset-2 col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/spreed-screenshare2-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Installation and configuration support');?></p>
				<p class="section--paragraph"><?php echo $l->t('Besides our <a class="hyperlink" href="https://docs.nextcloud.com">documentation</a>, <a class="hyperlink" href="https://portal.nextcloud.com">support portal</a> and basic support we optionally offer a one day remote installation support package.');?></p>
				<p class="section--paragraph"><?php echo $l->t('Custom, multi-day or on-site installation or scalability consulting options are available as well.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('starting at € 990 one-time');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
			</div>
        </div>
		<div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/globalscale/final.svg">
				<p class="section--paragraph__tittle"><?php echo $l->t('Global Scale setup');?></p>
				<p class="section--paragraph"> <?php echo $l->t('Customers in need of a globally distributed setup with strong data locality requirements or scalability in the tens-of-millions have access to our Global Scale architecture.');?></p>
				<p class="section--paragraph"><?php echo $l->t('We help set up and integrate the Global Scale components in your infrastructure.');?> <a class="hyperlink" href="<?php echo home_url('globalscale') ?>"><?php echo $l->t('Learn more about Global Scale.');?></a></p>
				<p class="section--paragraph price-big"><?php echo $l->t('Custom pricing ');?></a></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(additional to a premium subscription)');?></p>
			</div>
        </div>
	</div>
</div>
</section>

<section class="section--others">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="text-center revealOnScroll"><?php echo $l->t('Synergy');?></h2>
            <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('');?></p>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 revealOnScroll">
                <p class="section--paragraph text-center"><?php echo $l->t('Also check out our other self-hosted products offering seamless integration in Nextcloud Files.');?></p>
            </div>
        </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-1 revealOnScroll">
			<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png" /></a>
			<div class="row text-center"><p class="section--paragraph__tittle"><?php echo $l->t('Nextcloud Talk');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('secure online meetings, chat and web conferencing');?></p></div>
			<div class="text-center morebuttondiv">
                <a href="<?php echo home_url('talk') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Learn more');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
		</div>
		<div class="col-md-5 revealOnScroll">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar-nw.png" class="img-responsive" />
			<div class="row text-center"><p class="section--paragraph__tittle"><?php echo $l->t('Nextcloud Groupware');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Team planning and email made easy');?></p></div>
			<div class="text-center morebuttondiv">
                <a href="<?php echo home_url('groupware') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Learn more');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
		</div>
    </div>
</div>
</section>

<a name="discounts" id="discounts"></a>
<div class="container discounts">
	<div class="row">
		<h1 class="header revealOnScroll"><?php echo $l->t('Discounts');?></h1>
		<div class="col-md-5 box revealOnScroll">
            <?php echo file_get_contents(get_template_directory_uri().'/assets/img/enterprise/publicsector.svg'); ?>
            <p class="section--paragraph__tittle text-center"><?php echo $l->t('Public Sector');?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('We provide interesting discount options to organizations in the public sector.');?></p>
            <p class="section--paragraph text-center"><a class="hyperlink"  href="<?php echo home_url('enterprise/buy') ?>"><?php echo $l->t('Contact us');?></a></p>
        </div>
        <div class="col-md-5 col-md-offset-2 box revealOnScroll">
            <?php echo file_get_contents(get_template_directory_uri().'/assets/img/enterprise/education.svg'); ?>
            <p class="section--paragraph__tittle text-center"><?php echo $l->t('Education');?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('Organizations in the educational sector receive a significant discount on all subscriptions');?></p>
            <p class="section--paragraph text-center"><a class="hyperlink" href="<?php echo home_url('enterprise/buy') ?>"><?php echo $l->t('Contact us');?></a></p>
		</div>
	</div>
</div>

