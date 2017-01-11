<script src="<?php echo get_template_directory_uri(); ?>/assets/js/enterprise.js"></script>
<section class="pricing-hero-section enterprise-menu">
	<div class="background pricing-background"> 
		<div class="container">
			<div class="row">
				<div class="col-md-6 topheader">
					<h1><?php echo $l->t('Enterprise Support Subscriptions');?></h1>
					<h2><?php echo $l->t('An enterprise subscription provides you the confidence of knowing that your Nextcloud deployment is backed by the best available technical expertise and with the features you need for your organization');?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#plans">plans</a>
			<a href="#discounts">discounts</a>
			<a class="btn btn-primary" href="/buy">get a quote</a>
			<a class="btn btn-primary" href="/enterprise">enterprise offering</a>
		</div>
	</div>
</section>
<a name="plans"></a>
<div class="container pricing">
	<div class="row">
		<h1 class="header"><?php echo $l->t('Plans and Pricing');?></h1>
		<div class="col-md-4 table-column">
			<div class="table-header basic">
				<h1 class="header"><?php echo $l->t('Basic');?></h1>
				<h2 class="header"><?php echo $l->t('From 1900€/year');?></h2>
			</div>
			<div class="table-content">
				<h1 class="header"><?php echo $l->t('Features');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Sync your files with our desktop and mobile clients, share them with other users on your server, with public links or across servers.</div>File sync and share');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">non-branded iOS app available for purchase, Android and desktop apps are free.</div>Mobile and desktop clients');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Powerful enterprise features like SAML authentication, Windows Network Drive support, password policies, audit-ready logging, workflow handling and more.</div>Enterprise capabilities');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">the AGPL license provides legal certainty for all customers and users.</div>Fully Open Source');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">Support for the Calendar and Contacts apps.</div>Calendar and Contacts');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">Support for our secure and private peer to peer audio and video conferencing.</div><a href="/webrtc" target="_blank">Secure WebRTC Conferencing</a>');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">Allows web conferencing calls to connect with phone lines.</div>SIP gateway');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">Real time collaborative editing of often used office fileformats like DOCX, PPTX and more.</div><a href="/collaboraonline" target="_blank">Collabora Online Office</a>');?></li>
				</div>
				<h1 class="header"><?php echo $l->t('Support');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">If you need the certainty that you can remain on your stable, proven Nextcloud release for a long time.</div>Maintenance life cycle: 1 year');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Questions and issues are generally dealt with in this time, depending on the severity of the issue.</div>Production SLA: 3 business days');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Our Nextcloud Knowledge Portal helps you find answers to your questions or contact our professional support team.</div>Portal support.');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">We help you migrate from ownCloud to Nextcloud.</div><a href="/migration">ownCloud migration support</a>');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">You can contact our capable and responsive support team by email and expect a quick response time.</div>Email support');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">You can contact our support engineers by phone in these times.</div>Phone support');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">If you need access to experienced engineers to built custom solutions for your unique needs.</div>Custom consulting');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">Our engineers walk you through the installation process where needed.</div>Remote installation support');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">Fully branded clients and web UI.</div>Branding support');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required.</div>Clustering support');?></li>
				</div>
				<h1 class="">Pricing</h1>
				<div class="line"></div>
				<div class="list">
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market.</div>50 users: €1900');?></li>
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market.</div>100 users: €3400');?></li>
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market.</div>Additional pricing tiers are available up to 10 million users');?></li>
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market.</div>Framework agreements available');?></li>
				</div>
				<a class="btn btn-primary btn-lg btn-absolute-icon" href="/enterprise/buy" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
		<div class="col-md-4 table-column">
			<div class="table-header standard">
				<h1 class=""><?php echo $l->t('Standard');?></h1>
				<h2 class=""><?php echo $l->t('From 3400€/year');?></h2>
			</div>
			<div class="table-content">
				<h1 class=""><?php echo $l->t('Features');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Sync your files with our desktop and mobile clients, share them with other users on your server, with public links or across servers.</div>File sync and share');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">on-branded iOS app available for purchase, Android and desktop apps are free. Branding optional.</div>Mobile and desktop clients');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Powerful enterprise features like SAML authentication, Windows Network Drive support, password policies, audit-ready logging, workflow handling and more.</div>Enterprise capabilities');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">the AGPL license provides legal certainty for all customers and users.</div>Fully Open Source');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Support for the Calendar and Contacts apps.</div>Calendar and Contacts');?></li>
					<li class="optional overinfo"><?php echo $l->t('<div class="infotext">Support for our secure and private peer to peer audio and video conferencing.</div><a href="/webrtc" target="_blank">Secure WebRTC Conferencing</a><a href="#extracosts"> *</a>');?></li>
					<li class="optional overinfo"><?php echo $l->t('<div class="infotext">Optional: allows web conferencing calls to connect with phone lines.</div>SIP gateway<a href="#extracosts"> *</a>');?></li>
					<li class="optional overinfo"><?php echo $l->t('<div class="infotext">Optional: real time collaborative editing of often used office fileformats like DOCX, PPTX and more.</div><a href="/collaboraonline" target="_blank">Collabora Online Office</a><a href="#extracosts"> *</a>');?></li>
				</div>
				<h1 class=""><?php echo $l->t('Support');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">If you need the certainty that you can remain on your stable, proven Nextcloud release for a long time.</div>Maintenance life cycle: 3 years');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Questions and issues are generally dealt with in this time, depending on the severity of the issue.</div>Production SLA: 2 business days');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Our Nextcloud Knowledge Portal helps you find answers to your questions or contact our professional support team.</div>Portal support');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">We help you migrate from ownCloud to Nextcloud.</div><a href="/migration">ownCloud migration support</a>');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">You can contact our capable and responsive support team by email and expect a quick response time.</div>Email support: business hours');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">You can contact our support engineers by phone in these times.</div>Phone support: business hours');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">If you need access to experienced engineers to built custom solutions for your unique needs.</div>Custom consulting');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Our engineers walk you through the installation process where needed.</div>Remote installation support');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">Fully branded clients and web UI.</div>Branding support');?></li>
					<li class="nocheck overinfo"><?php echo $l->t('<div class="infotext">Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required.</div>Clustering support');?></li>
				</div>
				<h1 class="">Pricing</h1>
				<div class="line"></div>
				<div class="list">
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market.</div>50 users: €3400');?></li>
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market.</div>100 users: €6100');?></li>
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market.</div>Additional pricing tiers are available up to 10 million users');?></li>
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market.</div>Framework agreements available');?></li>
				</div>
				<a class="btn btn-primary btn-lg btn-absolute-icon" href="/enterprise/buy" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
		<div class="col-md-4 table-column highlight">
			<div class="table-header premium">
				<h1 class=""><?php echo $l->t('Premium');?></h1>
				<h2 class=""><?php echo $l->t('From 4900€/year');?></h2>
			</div>
			<div class="table-content">
				<h1 class=""><?php echo $l->t('Features');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Sync your files with our desktop and mobile clients, share them with other users on your server, with public links or across servers.</div>File sync and share');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">on-branded iOS app available for purchase, Android and desktop apps are free. Branding optional.</div>Mobile and desktop clients');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Powerful enterprise features like SAML authentication, Windows Network Drive support, password policies, audit-ready logging, workflow handling and more.</div>Enterprise capabilities');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">the AGPL license provides legal certainty for all customers and users.</div>Fully Open Source');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Support for the Calendar and Contacts apps.</div>Calendar and Contacts');?></li>
					<li class="optional overinfo"><?php echo $l->t('<div class="infotext">Optional: Support for our secure and private peer to peer audio and video conferencing.</div><a href="/webrtc" target="_blank">Secure WebRTC Conferencing</a><a href="#extracosts"> *</a>');?></li>
					<li class="optional overinfo"><?php echo $l->t('<div class="infotext">Optional: Allows web conferencing calls to connect with phone lines.</div>SIP gateway<a href="#extracosts"> *</a>');?></li>
					<li class="optional overinfo"><?php echo $l->t('<div class="infotext">Optional: Real time collaborative editing of often used office fileformats like DOCX, PPTX and more.</div><a href="/collaboraonline" target="_blank">Collabora Online Office</a><a href="#extracosts"> *</a>');?></li>
				</div>
				<h1 class=""><?php echo $l->t('Support');?></h1>
				<div class="line"></div>
				<div class="list">
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">If you need the certainty that you can remain on your stable, proven Nextcloud release for a long time.</div>Maintenance life cycle: 5+5 years');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Questions and issues are generally dealt with in this time, depending on the severity of the issue.</div>Production SLA: 24h or as agreed');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Our Nextcloud Knowledge Portal helps you find answers to your questions or contact our professional support team.</div>Portal support');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">We help you migrate from ownCloud to Nextcloud.</div><a href="/migration">ownCloud migration support</a>');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">You can contact our capable and responsive support team by email and expect a quick response time.</div>Email support: up to 24/7');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">You can contact our support engineers by phone in these times.</div>Phone support: up to 24/7');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">If you need access to experienced engineers to built custom solutions for your unique needs.</div>Custom consulting');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Our engineers walk you through the installation process where needed.</div>Remote installation support');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Fully branded clients and web UI.</div>Branding support');?></li>
					<li class="check overinfo"><?php echo $l->t('<div class="infotext">Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required.</div>Clustering support');?></li>
				</div>
				<h1 class="">Pricing</h1>
				<div class="line"></div>
				<div class="list">
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market vertical.</div>50 users: €4900');?></li>
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market vertical.</div>100 users: €8900');?></li>
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market vertical.</div>Additional pricing tiers are available up to 10 million users');?></li>
					<li class="price overinfo"><?php echo $l->t('<div class="infotext">Contact us for a quote relevant for your specific market.</div>Framework agreements available');?></li>
				</div>
				<a name="extracosts"></a> <!--has to be here due to header-->
				<a class="btn btn-primary btn-lg btn-absolute-icon" href="/enterprise/buy" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
	</div>
</div>
<div class="container text-center">
	<p class="revealOnScroll epricevat"><?php echo $l->t('* At additional cost');?></p>
	<p class="revealOnScroll epricevat"><?php echo $l->t('Prices are in Euro per year and net/excl. VAT.');?></p>
	<p class="revealOnScroll epricevat"><?php echo $l->t('Android, Windows Mobile and desktop apps are free; iOS app can be purchased in the Apple App Store.');?></p>
	<p class="revealOnScroll"><?php echo $l->t('<small>All product names and trademarks are the property of their respective owners, which might in no way be associated or affiliated with Nextcloud.</small>');?></p>
</div>
<a name="discounts"></a>
<div class="container discounts">
	<div class="row">
		<h1 class="header revealOnScroll"><?php echo $l->t('Discounts');?></h1>
		<div class="col-md-5 col-md-offset-1 box revealOnScroll">
		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/publicsector.svg">
		<h1><?php echo $l->t('Public Sector');?></h1>
		<p><?php echo $l->t('We provide interesting discount options to organizations in the public sector.');?></p>
		<p><a href="/enterprise/buy"><?php echo $l->t('Contact us');?></a></p>
		</div>
		<div class="col-md-5 col-md-offset-1 box revealOnScroll">
		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/education.svg">
		<h1><?php echo $l->t('Education');?></h1>
		<p><?php echo $l->t('Organizations in the educational sector receive a significant discount on all subscriptions');?></p>
		<p><a href="/enterprise/buy"><?php echo $l->t('Contact us');?></a></p>	</div>
	</div>
</div>

