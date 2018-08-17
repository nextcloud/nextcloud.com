<head>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/pricing.css?v=2" rel="stylesheet">
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
					<h1><?php echo $l->t('Enterprise Subscriptions');?></h1>
					<h2><?php echo $l->t('An enterprise subscription provides you direct benefits, additional features and the confidence of knowing that your Nextcloud Files deployment is backed by the best available technical expertise and capabilities you need for your organization');?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#plans"><?php echo $l->t('plans');?></a>
			<a href="#options"><?php echo $l->t('options');?></a>
			<a href="#discounts"><?php echo $l->t('discounts');?></a>
			<a href="#faq"><?php echo $l->t('FAQ');?></a>
			<a class="btn btn-primary" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('Order online');?></a>
			<a class="btn btn-primary" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
			<a class="btn btn-primary" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
		</div>
	</div>
</section>

<a name="plans" id="plans"></a>
<div class="container plans">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="header"><?php echo $l->t('Plans and Pricing<br>
            for Nextcloud Files');?></h1>
            <h3 class="text-center"><?php echo $l->t('Successfully host your private cloud thanks to a');?> <a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('Nextcloud Subscription.');?></a></h3>
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
					<li class="check" title="<?php echo $l->t('Sync your files with our desktop and mobile clients, share them with other users on your server, with public links or across servers.');?>" rel="tooltip"><?php echo $l->t('File sync and share');?></li>
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
					<li class="nocheck" title="<?php echo $l->t('Our engineers walk you through the installation process where needed.');?>" rel="tooltip"><?php echo $l->t('Remote installation support');?></li>
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
					<li class="check" title="<?php echo $l->t('Sync your files with our desktop and mobile clients, share them with other users on your server, with public links or across servers.');?>" rel="tooltip"><?php echo $l->t('File sync and share');?></li>
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
					<li class="check" title="<?php echo $l->t('Our engineers walk you through the installation process where needed.');?>" rel="tooltip"><?php echo $l->t('Remote installation support');?></li>
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
					<li class="check" title="<?php echo $l->t('Sync your files with our desktop and mobile clients, share them with other users on your server, with public links or across servers.');?>" rel="tooltip"><?php echo $l->t('File sync and share');?></li>
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
					<li class="check" title="<?php echo $l->t('Our engineers walk you through the installation process where needed.');?>" rel="tooltip"><?php echo $l->t('Remote installation support');?></li>
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
	<!--         <i class="fa-envelope fa"></i> -->
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Outlook Secure Sharing Add-in');?></p>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud optionally provides an');?> <a class="hyperlink" href="<?php echo home_url('outlook') ?>"><?php echo $l->t('Outlook Secure Sharing Add-in</a> enabling users to share and receive files in a secure way directly from Microsoft Outlook. The Outlook Secure Sharing Add-in can be added to a Basic, Standard or Enterprise subscription.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('starting at € 5/user/year');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
			</div>
        </div>
	</div>
	<div class="row revealOnScroll">
		<div class="col-md-offset-2 col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/theming-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Branding');?></p>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud provides branding services, delivering sync clients (mobile and desktop) which use your corporate identity and are pre-configured to help your users get up and running in no time. Branding is optionally available with the Standard or Enterprise subscription.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('starting at € 6000 yearly');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/spreed-screenshare2-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Installation and configuration support');?></p>
				<p class="section--paragraph"><?php echo $l->t('Besides our <a class="hyperlink" href="https://docs.nextcloud.com">documentation</a>, <a class="hyperlink" href="https://portal.nextcloud.com">support portal</a> and basic support we optionally offer a one day remote installation support package.');?></p>
				<p class="section--paragraph"><?php echo $l->t('Custom, multi-day or on-site installation or scalability consulting options are available as well.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('starting at € 990 one-time');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
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

<a name="faq" id="faq"></a>
<div class="faq container-fluid">
			<div class="text-center">
				<h1 class="noRevealOnScroll"><?php echo $l->t('Frequently asked questions');?></h1>
			</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
                <h2 class="noRevealOnScroll"><?php echo $l->t('Compliance');?></h2>
				<div class="downarrow noRevealOnScroll"><a href="#gdpr" data-toggle="collapse"><h3><?php echo $l->t('Is Nextcloud GDPR/HIPAA/... compliant?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="gdpr" class="collapse ">
                    <p><?php echo $l->t('Self-hosting is the quickest and easiest way to legal compliance with a wide variety of regulations. By keeping data on your company servers, there is no need for contracts with other companies or complicated audit processes.');?></p>
					<p><?php echo $l->t('You still have comply with security and compliance requirements demanding you take appropriate security measures. A Nextcloud Subscription delivers security patches and consulting based on our expertise and Security Bug Bounty Program, helping Nextcloud customers to make sure this requirement is met.');?></p>
					<a class="button button--blue button--small" href="<?php echo home_url('gdpr') ?>" class="nav__label"><?php echo $l->t('GDPR Compliance Kit');?></a>
					<a class="button button--blue button--small" href="<?php echo home_url('healthcare') ?>" class="nav__label"><?php echo $l->t('HIPAA and Healthcare');?></a>
				</div>
				<div class="line noRevealOnScroll"></div>
				<h2 class="noRevealOnScroll"><?php echo $l->t('Subscription and support');?></h2>
				<div class="downarrow noRevealOnScroll"><a href="#why_pay" data-toggle="collapse"><h3><?php echo $l->t('Why would I pay for open source software?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="why_pay" class="collapse ">
                    <p><?php echo $l->t('Nextcloud is well optimized for getting up and running quickly for home or small business users. But as an enterprise, you need more than software - you need guarantees it works as you need, secure and reliable. A Nextcloud Subscription offers you that guarantee, with our expert help, long term updates, early access to security updates and additional services.');?></p>
					<p><?php echo $l->t('By offering more in-depth knowledge and expert services than anybody else could, you gain the confidence you need to be able to rely on Nextcloud. Consider a Subscription an insurance for success!');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#what_I_get" data-toggle="collapse"><h3><?php echo $l->t('What does the subscription give me?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="what_I_get" class="collapse">
					<p><?php echo $l->t('Your Nextcloud subscription enables you to successfully deploy and manage your servers. Our open approach gives you direct access to Nextcloud engineers, the latest knowledge and best practices. We provide technical expertise, guidance and collaboration with phone and chat contact. Pro-active security support helps you identify and address vulnerabilities and harden your servers to protect the safety and integrity of your data.');?></p>
					<p><?php echo $l->t('With the Nextcloud Enterprise subscription you get:');?></p>
					<ul class="list">
						<li class="check"><?php echo $l->t('Access to our Enterprise portal with associated services and benefits');?></li>
						<li class="check"><?php echo $l->t('Full lifecycle support with up to 15 years security and stability fixes');?></li>
						<li class="check"><?php echo $l->t('Technical expertise and help covering project inception to production and user growth');?></li>
						<li class="check"><?php echo $l->t('Help to scale your Nextcloud installation to large amounts of storage and large numbers of users');?></li>
						<li class="check"><?php echo $l->t('Security and hardening consulting and early access to security patches');?></li>
						<li class="check"><?php echo $l->t('Influence on the roadmap of the open source project');?></li>
						<li class="check"><?php echo $l->t('Our entire engineering team is dedicated to supporting you');?></li>
						<li class="check"><?php echo $l->t('Help and advice if you decide to (pay somebody to) develop a custom app or changes');?></li>
						<li class="check"><?php echo $l->t('Optional support for branding Nextcloud and its clients');?></li>
						<li class="check"><?php echo $l->t('Optional support for integrated video conferencing and communication features based on WebRTC');?></li>
						<li class="check"><?php echo $l->t('Optional Online Office capabilities which can handle a wide range of industry-standard file formats');?></li>
						<li class="check"><?php echo $l->t('Optional Outlook integration');?></li>
						<li class="check"><?php echo $l->t('Access to consulting for custom capabilities');?></li>
					</ul></p>
					<p><?php echo $l->t('Nextcloud consulting goes beyond technical expertise, offering strategic advice for organizations. We analyze your challenges and help you implement a comprehensive, cost-effective and compliance-aware solution which reduces complexity and risks while delivering the highest security and privacy protection.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#languages" data-toggle="collapse"><h3><?php echo $l->t('In what languages do I get support?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="languages" class="collapse">
					<p><?php echo $l->t('We provide support in German and English and other languages through our partners, <a class="hyperlink"  href="#contact">contact us</a> for details.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#branding" data-toggle="collapse"><h3><?php echo $l->t('What branding support do I get?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="branding" class="collapse">
					<p><?php echo $l->t('Every interface through which you interact with your users or customers should be a representation of the brand behind you - a brand that stands out from the competition. Our support engineers will make sure Nextcloud represents your brand by helping you configure the web interface and providing you with branded clients if needed.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#support_team" data-toggle="collapse"><h3><?php echo $l->t('Where is your support team?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="support_team" class="collapse ">
                    <p><?php echo $l->t('We offer you DIRECT access to our engineers to ensure you always get the best answer as quickly as possible, rather than walling off support from the expertise at engineering. Like a dedicated, on-site engineer, our <strong>entire team</strong> is dedicated to your success first!');?></p>
                    <p><?php echo $l->t('This not only makes sure you get faster, better support than anywhere else, it also ensures our engineers are confronted with customer issues and wishes daily, keeping their work closely aligned with the needs of our customers.');?></p>
                    <p><?php echo $l->t('As customer, you thus do not have to hope a junior support team member manages to explain your request to an engineer: you already talked to the engineer, directly, and they are already working on a solution.');?> <a class="hyperlink" href="https://opensource.com/article/18/8/mixing-roles-engineering" target="_blank"><?php echo $l->t('Learn more on opensource.com.');?></a></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#qa_team" data-toggle="collapse"><h3><?php echo $l->t('Where is your qa/testing team?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="qa_team" class="collapse ">
                    <p><?php echo $l->t('Just like we believe engineers should work with customers directly to ensure their development stays aligned with customer needs, QA and testing are an integral part of the job of our engineers.');?></p>
                    <p><?php echo $l->t('This ensures a direct feedback loop, resulting in them writing better quality code, if only to avoid having to spend too much time testing and debugging. To get their work done as efficiently as possible, our engineers are organically motivated to automate exactly what should be automated, no more and no less.');?></p>
                    <p><?php echo $l->t('As our unique approach to management relies strongly on internal motivation instead of management overhead, and external pressure, our integrated approach to support and QA guarantees alignment between customer needs and engineering effort.');?> <a class="hyperlink" href="https://opensource.com/article/18/8/mixing-roles-engineering" target="_blank"><?php echo $l->t('Learn more on opensource.com.');?></a></p>

				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#pricing" data-toggle="collapse"><h3><?php echo $l->t('Nextcloud is open source, what is behind your prices?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="pricing" class="collapse">
					<p><?php echo $l->t('Working with others on data is core to your business. It determines the productivity of your employees, every day, every hour.<br>
					A race to the bottom with clunky, cheap solutions offering more frustration than value does not benefit your organization! We offer a product which not only has the features, but also the stability and ease of use that helps your business be successful. And we support that with quick and quality help, providing direct contact with real and qualified engineers, access to expertise on scaling your server, securing your sensitive data, improvements you really need and want and more. All to make sure your Nextcloud server works as smooth as possible so your team can get work done instead of wait for IT to fix their infrastructure or worry about data theft.<br>
					An investment in a Nextcloud subscription is an investment in efficient, productive, happy work for your employees. So we set pricing at a level that allows us to really offer you value, a great experience to your employees and help your business.');?></p>
					<p><?php echo $l->t('We give you what <strong>no other company can offer you:</strong> the full attention of the engineers developing Nextcloud. Our entire engineering team works part of their time in support, dedicated to provide the best possible expertise in the shortest possible time. Where competitors and service providers might have some dedicated support people, nobody has the expertise we provide you, and before their "customer satisfaction expert" could even start finding out what engineer might know how to resolve your problem, our engineers are providing you a solution.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#howbuy" data-toggle="collapse"><h3><?php echo $l->t('How do I buy Nextcloud subscriptions?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="howbuy" class="collapse">
					<p><a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('Just contact us</a> or one of our partners. Our partners will help you set up Nextcloud and they act as your first point of contact.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
                <h2 class="noRevealOnScroll"><?php echo $l->t('Licensing');?></h2>
				<div class="downarrow noRevealOnScroll"><a href="#why_opensource" data-toggle="collapse"><h3><?php echo $l->t('Why is Nextcloud Open Source?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="why_opensource" class="collapse ">
                    <a target="_blank" href="https://www.openchainproject.org/conformance"><img class="img-responsive" style="float:right; margin:5px; width: 100%; max-width: 300px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/openchain.png" alt="activity overview" /></a>
                    <p><?php echo $l->t('Nextcloud\'s use of widely used and understood Open Source licenses provides customers legal certainly, protection against vendor lock-in and a guarantee that we offer top notch services. They facilitate an open, collaborative development model, resulting in more reliable and secure software. Open Source protects <strong>your business</strong>, guaranteeing the value of your investment for the long term. <a href="https://nextcloud.com/blog/why-the-agpl-is-great-for-business-users/">Read more about licensing benefits here</a> and about the <a href="https://nextcloud.com/blog/how-nextcloud-protects-your-business-from-license-uncertainty/">protection offered by our AGPL license here.</a>');?></p>
                    <p><?php echo $l->t('License compliance for Nextcloud has been <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project. Nextcloud GmbH guarantees its customers license compliance and assists customers with any license-related legal inquiries.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#gpl" data-toggle="collapse"><h3><?php echo $l->t('What does the Open Source License mean?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="gpl" class="collapse">
					<p><?php echo $l->t('Nextcloud is licensed under the GNU AGPLv3, one of the most widely used Open Source license. Written with input from lawyers and industry leaders from all over the world, it is a clear, balanced and well understood license, providing users a level of certainty no license from any single company can give. Today it is a widely used and broadly accepted license across various stakeholders, including developers, users, organizations and large enterprises. The AGPLv3 guarantees that all users of the software can use, study, share and improve the software without any legal risks. Further its patent clause ensures all users have a non-exclusive, non-transferable, worldwide, royalty-free license on any patents owned by code contributors now or in the future. On top of this, Nextcloud GmbH guarantees that every customer can use Nextcloud and exercise all rights given by the GNU AGPLv3 without violating any patents or copyright.');?></p>
					<p><?php echo $l->t('License compliance for Nextcloud has been <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project. Nextcloud GmbH guarantees its customers license compliance and assists customers with any license-related legal inquiries.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#opencore" data-toggle="collapse"><h3><?php echo $l->t('Would a proprietary license not be better?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="opencore" class="collapse">
					<p><?php echo $l->t('No. Components of Nextcloud as well as many Nextcloud apps are under a variety of open source licenses. While they are all compatible with the AGPL, many are not compatible with proprietary licenses and thus would nearly guarantee customers would be in violation of those licenses, creating legal risk.');?></p>
					<p><?php echo $l->t('License compliance for Nextcloud has been <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project. Nextcloud GmbH guarantees its customers license compliance and assists customers with any license-related legal inquiries.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#sourcerelease" data-toggle="collapse"><h3><?php echo $l->t('Do I have to release the source code of systems Nextcloud connects to?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="sourcerelease" class="collapse">
					<p><?php echo $l->t('No. Nextcloud will communicate with your back-end systems over external APIs. Those systems will not become a derivative work of Nextcloud just because they communicate with it. Therefore you can keep the source code of your back-end systems private and do not have to share it with anyone.');?></p>
					<p><?php echo $l->t('Nextcloud has its license compliance <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#logos" data-toggle="collapse"><h3><?php echo $l->t('Are my logos or the company name affected by the AGPL?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="logos" class="collapse">
					<p><?php echo $l->t('No. Logos, company names, etc. are protected by trademarks. The GNU AGPLv3 is a copyright license and does not affect any trademarks. If you put your logo on your Nextcloud it is considered merely as data used by Nextcloud and has no effect on licenses or trademarks.');?></p>
					<p><?php echo $l->t('License compliance for Nextcloud has been <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project. Nextcloud GmbH guarantees its customers license compliance and assists customers with any license-related legal inquiries.');?></p>
                </div>
				<div class="line noRevealOnScroll">
				</div>
				<div class="downarrow noRevealOnScroll"><a href="#pubsource" data-toggle="collapse"><h3><?php echo $l->t('Do I need to publish the source code if I use Nextcloud?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="pubsource" class="collapse">
					<p><?php echo $l->t('No. As long as you did not make any modifications to the Nextcloud code, existing apps or write your own apps, you do not have to do anything. Note that configuration does not count as modification! If you did make code modifications, then you have to make that code available under the GNU AGPLv3 or a compatible license to the users of the system. The easiest way to do so is to provide a download link. Nextcloud GmbH assists customers with license compliance.');?></p>
					<p><?php echo $l->t('License compliance for Nextcloud has been <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project. Nextcloud GmbH guarantees its customers license compliance and assists customers with any license-related legal inquiries.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<h2 class="noRevealOnScroll"><?php echo $l->t('Other questions');?></h2>
				<div class="downarrow noRevealOnScroll"><a href="#migration" data-toggle="collapse"><h3><?php echo $l->t('How difficult is migration from ownCloud?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="migration" class="collapse">
					<p><?php echo $l->t('Migration from ownCloud to Nextcloud is easy. Our support engineers has already migrated dozens of customers, including some with tens of thousands of users. We will help you move to Nextcloud and optimally benefit from the added scalability, features, stability, performance and security.');?> <a class="hyperlink" href="<?php echo home_url('migration') ?>"><?php echo $l->t('See our migration page</a> for more details on migration.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#partner" data-toggle="collapse"><h3><?php echo $l->t('How do I become a Nextcloud partner?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="partner" class="collapse">
					<p><?php echo $l->t('We are always looking for competent partners who share our passion for making customers happy! You can join our ecosystem,');?> <a class="hyperlink" href="<?php echo home_url('contact') ?>"><?php echo $l->t('contact us for more information</a>.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
				<div class="downarrow noRevealOnScroll"><a href="#sellapp" data-toggle="collapse"><h3><?php echo $l->t('Can I sell my Nextcloud App?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="sellapp" class="collapse">
					<p><?php echo $l->t('Yes. Nextcloud is licensed under the GNU AGPLv3. This license only defines the rights you have to give the users of the software, but not how they get the software. You can decide freely if you want to sell the software in an app store or through any other channel, or if you want to make the app publicly available. The only requirement is that you license your app under the AGPLv3 or a compatible license.');?></p>
				</div>
				<div class="line noRevealOnScroll"></div>
			</div>
		</div>
	</div>
</div>
