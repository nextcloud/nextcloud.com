<head>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/pricing.css?v=7" rel="stylesheet">
	<script>
	require(["require.config"], function() {
		require(["pages/pricing", "modules/submenu", "bootstrap"])
	});
	</script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/old/jquery-321.min.js"></script>
</head>

<section class="pricing-hero-section background pricing-background second-menu">
    <div class="container background">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Nextcloud Enterprise');?></h1>
                <h2><?php echo $l->t('Nextcloud Enterprise is pre-configured, optimized and hardened for the special needs of large scale, production-critical enterprise deployments. It is backed by a Nextcloud Subscription which gives you access to our expertise, partner services and more.');?></h2>
            </div>
        </div>
    </div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#plans"><?php echo $l->t('plans');?></a>
			<a href="#options"><?php echo $l->t('options');?></a>
			<a href="#discounts"><?php echo $l->t('discounts');?></a>
			<a class="button button--blue" href="<?php echo home_url('faq') ?>"><?php echo $l->t('FAQ');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('Order online');?></a>
			<a class="button button--blue" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
			<a class="button button--blue" href="<?php echo home_url('trial') ?>"><?php echo $l->t('Start a trial');?></a>
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
            <p class="section--paragraph text-center"><?php echo $l->t('Run a Proof of Concept or trial for free with Nextcloud Enterprise.');?> <a class="hyperlink" href="<?php echo home_url('trial') ?>"><?php echo $l->t('Request a trial!');?></a></p>
		</div>
    </div>
    <div class="row">
		<div class="col-md-4 table-column">
			<div class="table-header basic">
				<h1 class="header"><?php echo $l->t('Basic');?></h1>
				<h2 class="header"><?php echo $l->t('Starting at 100 users for 34€/user/year');?></h2>
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
					<li class="check" title="<?php echo $l->t('Some migrations are included, ask your sales representative for details.');?>" rel="tooltip"><a class="hyperlink" href="<?php echo home_url('migration') ?>"><?php echo $l->t('Migration support¹</a>');?></li>
					<li class="check" title="<?php echo $l->t('You can contact our capable and responsive support engineers by email and expect a quick response time.');?>" rel="tooltip"><?php echo $l->t('Email support');?></li>
					<li class="nocheck" title="<?php echo $l->t('Use your corporate design in branded and pre-configured sync clients for desktop and mobile.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-branding">Branding</a>');?></li>
					<li class="nocheck" title="<?php echo $l->t('We will review your Nextcloud instance after you set it up and assist you in its configuration and fine-tuning');?>" rel="tooltip"><?php echo $l->t('Installation review¹');?></li>
					<li class="nocheck" title="<?php echo $l->t('If you need access to experienced engineers to built custom solutions for your unique needs.');?>" rel="tooltip"><?php echo $l->t('Custom consulting');?></li>
					<li class="nocheck" title="<?php echo $l->t('Upgrades can be disruptive. Our engineers will ensure yours will go smooth!');?>" rel="tooltip"><?php echo $l->t('Upgrade stand-by support¹');?></li>
					<li class="nocheck" title="<?php echo $l->t('Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required. We will support your clustered instance.');?>" rel="tooltip"><?php echo $l->t('Clustered instances');?></li>
				</div>
				<h1 class=""><?php echo $l->t('Optional components');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="nocheck" title="<?php echo $l->t('Secure online meetings, chat and web conferencing');?>" rel="tooltip"><a class="hyperlink" href="#featureblock-talk"><?php echo $l->t('Nextcloud Talk');?></a></li>
					<li class="nocheck" title="<?php echo $l->t('Team planning and email made easy');?>" rel="tooltip"><a class="hyperlink" href="#featureblock-groupware"><?php echo $l->t('Nextcloud Groupware');?></a></li>
					<li class="optional" title="<?php echo $l->t('Share and receive files in a secure way directly from Microsoft Outlook.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-outlook">Outlook Add-in</a>');?></li>
					<li class="nocheck" title="<?php echo $l->t('Edit office documents collaboratively from within Nextcloud.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-collabora">Collabora Online Office</a>');?></li>
					<li class="nocheck" title="<?php echo $l->t('Edit office documents collaboratively from within Nextcloud.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-onlyoffice">ONLYOFFICE</a>');?></li>
					<li class="nocheck" title="<?php echo $l->t('You can contact our support engineers by phone in these times.');?>" rel="tooltip"><?php echo $l->t('Phone support');?></li>
					<li class="nocheck" title="<?php echo $l->t('We can guarantee turn-around times on mitigations and fixes for bugs.');?>" rel="tooltip"><?php echo $l->t('SLA on fixes');?></li>
					<li class="nocheck" title="<?php echo $l->t('support for additional apps not covered in the normal subscription.');?>" rel="tooltip"><?php echo $l->t('Subscription extensions');?></li>
					<li class="nocheck" title="<?php echo $l->t('Scale out Nextcloud to millions of users');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="https://nextcloud.com/globalscale/">Global Scale</a>');?></li>
				</div>
				<h1 class=""><?php echo $l->t('Pricing');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="ball" title="<?php echo $l->t('Pricing starts at 100 users. Contact us for a quote relevant for your specific market vertical.');?>" rel="tooltip"><?php echo $l->t('100 users: €34/user/year');?></li>
					<li class="ball" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('200 users: €27/user/year');?></li>
					<li class="ball" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('Additional pricing tiers are available up to millions of users');?></li>
					<li class="ball" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('Framework agreements available');?></li>
				</div>
				<a class="button button--blue button--arrow button--large" href="<?php echo home_url('enterprise/buy') ?>" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
		<div class="col-md-4 table-column">
			<div class="table-header standard">
				<h1 class=""><?php echo $l->t('Standard');?></h1>
				<h2 class=""><?php echo $l->t('Starting at 100 users for 61€/user/year');?></h2>
			</div>
			<div class="table-content">
				<h1 class=""><?php echo $l->t('Features');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check" title="<?php echo $l->t('Providing a secure, reliable, enterprise-ready product to sync and share data across platforms, internall and with third parties.');?>" rel="tooltip"><?php echo $l->t('Nextcloud Enterprise');?></li>
					<li class="check" title="<?php echo $l->t('Branded iOS, Android and desktop apps are free.');?>" rel="tooltip"><?php echo $l->t('Mobile and desktop clients');?></li>
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
					<li class="check" title="<?php echo $l->t('Some migrations are included, ask your sales representative for details');?>" rel="tooltip"><a class="hyperlink" href="<?php echo home_url('migration') ?>"><?php echo $l->t('Migration support¹</a>');?></li>
					<li class="check" title="<?php echo $l->t('You can contact our capable and responsive support engineers by email and expect a quick response time.');?>" rel="tooltip"><?php echo $l->t('Email support: business hours');?></li>
					<li class="check" title="<?php echo $l->t('Use your corporate design in branded and pre-configured sync clients for desktop and mobile.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-branding">Branding</a>');?></li>
					<li class="check" title="<?php echo $l->t('We will review your Nextcloud instance after you set it up and assist you in its configuration and fine-tuning');?>" rel="tooltip"><?php echo $l->t('Installation review¹');?></li>
					<li class="nocheck" title="<?php echo $l->t('If you need access to experienced engineers to built custom solutions for your unique needs.');?>" rel="tooltip"><?php echo $l->t('Custom consulting¹');?></li>
					<li class="nocheck" title="<?php echo $l->t('Upgrades can be disruptive. Our engineers will ensure yours will go smooth!');?>" rel="tooltip"><?php echo $l->t('Upgrade stand-by support¹');?></li>
					<li class="nocheck" title="<?php echo $l->t('Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required. We will support your clustered instance.');?>" rel="tooltip"><?php echo $l->t('Clustered instances');?></li>
				</div>
				<h1 class=""><?php echo $l->t('Optional components');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="optional" title="<?php echo $l->t('Secure online meetings, chat and web conferencing');?>" rel="tooltip"><a class="hyperlink" href="#featureblock-talk"><?php echo $l->t('Nextcloud Talk');?></a></li>
					<li class="optional" title="<?php echo $l->t('Team planning and email made easy');?>" rel="tooltip"><a class="hyperlink" href="#featureblock-groupware"><?php echo $l->t('Nextcloud Groupware');?></a></li>
					<li class="optional" title="<?php echo $l->t('Share and receive files in a secure way directly from Microsoft Outlook.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-outlook">Outlook Add-in</a>');?></li>
					<li class="optional" title="<?php echo $l->t('Edit office documents collaboratively from within Nextcloud.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-collabora">Collabora Online Office</a>');?></li>
					<li class="optional" title="<?php echo $l->t('Edit office documents collaboratively from within Nextcloud.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-onlyoffice">ONLYOFFICE</a>');?></li>
					<li class="optional" title="<?php echo $l->t('You can contact our support engineers by phone in these times.');?>" rel="tooltip"><?php echo $l->t('Phone support: business hours');?></li>
					<li class="nocheck" title="<?php echo $l->t('We can guarantee turn-around times on mitigations and fixes for bugs.');?>" rel="tooltip"><?php echo $l->t('SLA on fixes');?></li>
					<li class="nocheck" title="<?php echo $l->t('support for additional apps not covered in the normal subscription.');?>" rel="tooltip"><?php echo $l->t('Subscription extensions');?></li>
					<li class="nocheck" title="<?php echo $l->t('Scale out Nextcloud to millions of users');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="https://nextcloud.com/globalscale/">Global Scale</a>');?></li>
				</div>
				<h1 class=""><?php echo $l->t('Pricing');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="ball" title="<?php echo $l->t('Pricing starts at 100 users. Contact us for a quote relevant for your specific market vertical.');?>" rel="tooltip"><?php echo $l->t('100 users: €61/user/year');?></li>
					<li class="ball" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('200 users: €45.50/user/year');?></li>
					<li class="ball" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('Additional pricing tiers are available up to millions of users');?></li>
					<li class="ball" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('Framework agreements available');?></li>
				</div>
				<a class="button button--blue button--arrow button--large" href="<?php echo home_url('enterprise/buy') ?>" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
		<div class="col-md-4 table-column highlight">
			<div class="table-header premium">
				<h1 class=""><?php echo $l->t('Premium');?></h1>
				<h2 class=""><?php echo $l->t('Starting at 100 users for 89€ per user year');?></h2>
			</div>
			<div class="table-content">
				<h1 class=""><?php echo $l->t('Features');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check" title="<?php echo $l->t('Providing a secure, reliable, enterprise-ready product to sync and share data across platforms, internall and with third parties.');?>" rel="tooltip"><?php echo $l->t('Nextcloud Enterprise');?></li>
					<li class="check" title="<?php echo $l->t('Branded iOS, Android and desktop apps are free. MDM support included as well');?>" rel="tooltip"><?php echo $l->t('Mobile and desktop clients');?></li>
					<li class="check" title="<?php echo $l->t('Powerful enterprise features like SAML authentication, Windows Network Drive support, password policies, audit-ready logging, workflow handling and more.');?>" rel="tooltip"><?php echo $l->t('Enterprise capabilities');?></li>
					<li class="check" title="<?php echo $l->t('The AGPL license provides legal certainty for all customers and users.');?>" rel="tooltip"><?php echo $l->t('Fully Open Source');?></li>
				</div>
				<h1 class="header"><?php echo $l->t('Benefits');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check" title="<?php echo $l->t('If you need the certainty that you can remain on your stable, proven Nextcloud release for a long time.');?>" rel="tooltip"><?php echo $l->t('Maintenance life cycle: 5+ years');?></li>
					<li class="check" title="<?php echo $l->t('Ahead of time access to security and stability patches.');?>" rel="tooltip"><?php echo $l->t('Early security and stability patches');?></li>
					<li class="check" title="<?php echo $l->t('Questions and issues are generally dealt with in this time, depending on the severity of the issue.');?>" rel="tooltip"><?php echo $l->t('Reaction time: 1h, 4h, 12h or 24h');?></li>
					<li class="check" title="<?php echo $l->t('Our Nextcloud Knowledge Portal helps you find answers to your questions or contact our professional support engineers.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="https://portal.nextcloud.com">Portal support</a>');?></li>
					<li class="check" title="<?php echo $l->t('Some migrations are included, ask your sales representative for details');?>" rel="tooltip"><a class="hyperlink" href="<?php echo home_url('migration') ?>"><?php echo $l->t('Migration support¹</a>');?></li>
					<li class="check" title="<?php echo $l->t('You can contact our capable and responsive support engineers by email and expect a quick response time.');?>" rel="tooltip"><?php echo $l->t('Email support: up to 24/7');?></li>
					<li class="check" title="<?php echo $l->t('Use your corporate design in branded and pre-configured sync clients for desktop and mobile. MDM supported.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-branding">Branding</a> (MDM supported)');?></li>
					<li class="check" title="<?php echo $l->t('We will review your Nextcloud instance after you set it up and assist you in its configuration and fine-tuning');?>" rel="tooltip"><?php echo $l->t('Installation review¹');?></li>
					<li class="check" title="<?php echo $l->t('If you need access to experienced engineers to built custom solutions for your unique needs.');?>" rel="tooltip"><?php echo $l->t('Custom consulting¹');?></li>
					<li class="check" title="<?php echo $l->t('Upgrades can be disruptive. Our engineers will ensure yours will go smooth!');?>" rel="tooltip"><?php echo $l->t('Upgrade stand-by support¹');?></li>
					<li class="check" title="<?php echo $l->t('Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required. We will support your clustered instance.');?>" rel="tooltip"><?php echo $l->t('Clustered instances');?></li>
				</div>
				<h1 class=""><?php echo $l->t('Optional components');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="optional" title="<?php echo $l->t('Secure online meetings, chat and web conferencing');?>" rel="tooltip"><a class="hyperlink" href="#featureblock-talk"><?php echo $l->t('Nextcloud Talk');?></a></li>
					<li class="optional" title="<?php echo $l->t('Team planning and email made easy');?>" rel="tooltip"><a class="hyperlink" href="#featureblock-groupware"><?php echo $l->t('Nextcloud Groupware');?></a></li>
					<li class="optional" title="<?php echo $l->t('Share and receive files in a secure way directly from Microsoft Outlook.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-outlook">Outlook Add-in</a>');?></li>
					<li class="optional" title="<?php echo $l->t('Edit office documents collaboratively from within Nextcloud.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-collabora">Collabora Online Office</a>');?></li>
					<li class="optional" title="<?php echo $l->t('Edit office documents collaboratively from within Nextcloud.');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="#featureblock-onlyoffice">ONLYOFFICE</a>');?></li>
					<li class="optional title="<?php echo $l->t('You can contact our support engineers by phone in these times.');?>" rel="tooltip"><?php echo $l->t('Phone support: up to 24/7');?></li>
					<li class="optional" title="<?php echo $l->t('We can guarantee turn-around times on mitigations and fixes for bugs.');?>" rel="tooltip"><?php echo $l->t('SLA on fixes');?></li>
					<li class="optional" title="<?php echo $l->t('support for additional apps not covered in the normal subscription.');?>" rel="tooltip"><?php echo $l->t('Subscription extensions');?></li>
					<li class="optional" title="<?php echo $l->t('Scale out Nextcloud to millions of users');?>" rel="tooltip"><?php echo $l->t('<a class="hyperlink" href="https://nextcloud.com/globalscale/">Global Scale</a>');?></li>
				</div>
				<h1 class=""><?php echo $l->t('Pricing');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="ball" title="<?php echo $l->t('Pricing starts at 100 users. Contact us for a quote relevant for your specific market vertical.');?>" rel="tooltip"><?php echo $l->t('100 users: €89/user/year');?></li>
					<li class="ball" title="<?php echo $l->t('Contact us for a quote relevant for your specific market vertical.');?>" rel="tooltip"><?php echo $l->t('200 users: €69.50/user/year');?></li>
					<li class="ball" title="<?php echo $l->t('Contact us for a quote relevant for your specific market vertical.');?>" rel="tooltip"><?php echo $l->t('Additional pricing tiers are available up to millions of users');?></li>
					<li class="ball" title="<?php echo $l->t('Contact us for a quote relevant for your specific market.');?>" rel="tooltip"><?php echo $l->t('Framework agreements available');?></li>
				</div>
				<a name="extracosts" id="extracosts"></a> <!--has to be here due to header-->
				<a class="button button--blue button--arrow button--large" href="<?php echo home_url('enterprise/buy') ?>" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
	</div>
</div>
<div class="container text-center">
	<p class=" epricevat"><?php echo $l->t('Prices are in Euro per year and net/excl. VAT.');?></p>
	<p class=" epricevat"><?php echo $l->t('Nextcloud subscriptions are available from 100 users and up.');?></p>
    <p class=" epricevat"><?php echo $l->t('¹ subject to limitations, discuss with your sales representative');?></p>
	<p class=" epricevat"><?php echo $l->t('Nextcloud employees never gain access to your data as we do not offer hosting.');?></p>
	<p class=" epricevat"><?php echo $l->t('Unless explicitly stated, Nextcloud 5x8 support is in UTC +01:00. Other times possible on request.');?></p>
	<p class=" epricevat"><?php echo $l->t('Our Subscription offers direct access to Nextcloud engineering expertise without a layer of support people in between.');?></p>
</div>

<section class="section--others quote">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            <h2 class="text-center "><?php echo $l->t('Nextcloud Hub');?></h2>
            <p class="section--paragraph text-center "><?php echo $l->t('');?></p>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <p class="section--paragraph text-center"><?php echo $l->t('Benefit from the synergies of a full content collaboration platform seamlessly integrated with our other self-hosted products.');?></p>
            </div>
        </div>
    <div class="row">
        <div class="col-md-6">
			<div class="image--feature new-img">
                <img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-promoted-view.png" /></a>
			</div>
			<div class="row text-center"><h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Talk');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('secure online meetings, chat and web conferencing');?></p></div>
			<div class="text-center morebuttondiv">
                <a href="<?php echo home_url('talk') ?>" class="button button--transparent button--large button--arrow"><?php echo $l->t('Nextcloud Talk');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
		</div>
		<div class="col-md-6">
            <div class="image--feature new-img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar.png" class="img-responsive featureimg" />
            </div>
			<div class="row text-center"><h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Groupware');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Team planning and email made easy');?></p></div>
			<div class="text-center morebuttondiv">
                <a href="<?php echo home_url('groupware') ?>" class="button button--transparent button--large button--arrow"><?php echo $l->t('Nextcloud Groupware');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
		</div>
    </div>
</div>
</section>

<section class="section--options">
	<a name="options" id="options"></a>
<div class="container-widest">
	<div class="introduction">
		<h1 class="section--heading-1 section--text--center "><?php echo $l->t('Fitting your needs');?></h1>
		<p class="section--paragraph section--text--center "><?php echo $l->t('Benefits of a Nextcloud Subscription include several add-on, support and feature packages.');?></p>
	</div>
    <div class="row ">
		<div class="col-md-offset-2 col-md-4">
			<div class="featureblock" id="featureblock-outlook">
	<!--         <i class="fa-envelope fa"></i> -->
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/outlook-nw.png">
				<h3 class="section--paragraph__title"><?php echo $l->t('Outlook Secure Sharing Add-in');?></h3>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud optionally provides an');?> <a class="hyperlink" href="<?php echo home_url('outlook') ?>"><?php echo $l->t('Outlook Secure Sharing Add-in</a> enabling users to share and receive files in a secure way directly from Microsoft Outlook. The Outlook Secure Sharing Add-in can be added to a Basic, Standard or Premium subscription.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('starting at € 5/user/year');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
			</div>
        </div>
		<div class="col-md-4">
			<div class="featureblock" id="featureblock-branding">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/theming-nw.png">
				<h3 class="section--paragraph__title"><?php echo $l->t('Branding');?></h3>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud provides branding services, delivering sync clients (mobile and desktop) which use your corporate identity and are pre-configured to help your users get up and running in no time, with MDM and MSI packaging and deployment options for Premium customers. Branding is available with the Standard or Premium subscription.');?> <br /><a href="<?php echo home_url('branding') ?>" class="hyperlink"><?php echo $l->t('Read our branding page for details.');?></a></p>
			</div>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-offset-2 col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/spreed-screenshare2-nw.png">
				<h3 class="section--paragraph__title"><?php echo $l->t('Installation and configuration support');?></h3>
				<p class="section--paragraph"><?php echo $l->t('Besides our <a class="hyperlink" href="https://docs.nextcloud.com">documentation</a>, <a class="hyperlink" href="https://portal.nextcloud.com">support portal</a> and basic support we offer remote installation support, help with upgrading and migrations from other solutions.');?></p>
				<p class="section--paragraph"><?php echo $l->t('We care about your success. Installation review and configuration support is included with all Standard and Premium subscriptions. Premium customers also receive free upgrade and migration support¹.');?></p>
				<p class="section--paragraph"><?php echo $l->t('Custom, multi-day or on-site installation or scalability consulting options are available as well.');?></p>
				<p class="section--paragraph"><small><?php echo $l->t('¹ Restrictions apply. Ask your sales representative for details.');?></small></p>
			</div>
        </div>
		<div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/globalscale/final.svg">
				<h3 class="section--paragraph__title"><?php echo $l->t('Global Scale setup');?></h3>
				<p class="section--paragraph"> <?php echo $l->t('Customers in need of a globally distributed setup with strong data locality requirements or scalability in the tens-of-millions have access to our Global Scale architecture.');?></p>
				<p class="section--paragraph"><?php echo $l->t('We help set up and integrate the Global Scale components in your infrastructure.');?> <a class="hyperlink" href="<?php echo home_url('globalscale') ?>"><?php echo $l->t('Learn more about Global Scale.');?></a></p>
				<p class="section--paragraph price-big"><?php echo $l->t('Custom pricing ');?></a></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(additional to a premium subscription)');?></p>
			</div>
        </div>
	</div>
    <div class="row ">
        <div class="col-md-offset-2 col-md-4">
			<div class="featureblock" id="featureblock-collabora">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/collabora-nw.png">
				<h3 class="section--paragraph__title"><?php echo $l->t('Collabora Online Office');?></h3>
				<p class="section--paragraph"><a class="hyperlink" href="<?php echo home_url('collaboraonline') ?>"><?php echo $l->t('With Collabora Online Office</a> Nextcloud features an enterprise ready integrated online office enabling users to collaboratively edit docx, pptx and other office documents with colleagues, clients or partners. Collabora Online is available with the Standard or Premium subscription.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('starting at € 17/user/year');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="featureblock" id="featureblock-onlyoffice">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/onlyoffice-document.png">
				<h3 class="section--paragraph__title"><?php echo $l->t('ONLYOFFICE');?></h3>
				<p class="section--paragraph"><a class="hyperlink" href="<?php echo home_url('onlyoffice') ?>"><?php echo $l->t('ONLYOFFICE</a> delivers enterprise-grade real-time collaborative document editing to Nextcloud, with excellent Microsoft Office compatibility and a familiar user interface. ONLYOFFICE is available with the Standard or Premium subscription.');?></p>
				<p class="section--paragraph price-big"><?php echo $l->t('Starting at € 15 to € 22/user/year');?></p>
				<p class="section--paragraph price-small"><?php echo $l->t('(subject to further volume and other discounts)');?></p>
			</div>
		</div>
    </div>
</div>
</section>


<a name="discounts" id="discounts"></a>
<div class="container discounts">
	<div class="row">
		<h1 class="header "><?php echo $l->t('Discounts');?></h1>
		<div class="col-md-5 box ">
            <?php echo file_get_contents(get_template_directory_uri().'/assets/img/enterprise/publicsector.svg'); ?>
            <h3 class="section--paragraph__title text-center"><?php echo $l->t('Public Sector');?></h3>
            <p class="section--paragraph text-center"><?php echo $l->t('We provide interesting discount options to organizations in the public sector.');?></p>
            <p class="section--paragraph text-center"><a class="hyperlink"  href="<?php echo home_url('enterprise/buy') ?>"><?php echo $l->t('Contact us');?></a></p>
        </div>
        <div class="col-md-5 col-md-offset-2 box ">
            <?php echo file_get_contents(get_template_directory_uri().'/assets/img/enterprise/education.svg'); ?>
            <h3 class="section--paragraph__title text-center"><?php echo $l->t('Education');?></h3>
            <p class="section--paragraph text-center"><?php echo $l->t('Organizations in the educational sector receive a significant discount on all subscriptions');?></p>
            <p class="section--paragraph text-center"><a class="hyperlink" href="<?php echo home_url('enterprise/buy') ?>"><?php echo $l->t('Contact us');?></a></p>
		</div>
	</div>
</div>
