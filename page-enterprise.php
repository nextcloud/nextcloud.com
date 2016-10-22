<script src="<?php echo get_template_directory_uri(); ?>/assets/js/enterprise.js"></script>


<div class="container-fluid background"> 
	<div class="container">
		<div class="col-md-6 topheader">
			<h1><?php echo $l->t('Enterprise Support Subscriptions');?></h1>
			<h2><?php echo $l->t('An enterprise subscription provides you the confidence of knowing that your Nextcloud deployment is backed by the best available technical expertise and with the features you need for your organization');?></h2>
		</div>
	</div>
</div>

<div class="container pricing">
	<div class="row">
		<h1 class="header revealOnScroll"><?php echo $l->t('Plans and Pricing');?></h1>
		<div class="col-md-4 table-column revealOnScroll">
			<div class="table-header basic revealOnScroll">
				<h1 class="header revealOnScroll"><?php echo $l->t('Basic');?></h1>
				<h2 class="header revealOnScroll"><?php echo $l->t('From 1500€/year');?></h2>
			</div>
			<div class="table-content">
				<h1 class="header revealOnScroll"><?php echo $l->t('Supported Capabilities');?></h1>
				<div class="line revealOnScroll"></div>
				<div class="list revealOnScroll">
					<li class="check"><?php echo $l->t('<span title="Sync your files with our desktop and mobile clients, share them with other users on your server, with public links or across servers.">File sync and share</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Android, iOS and desktop apps, branding possible.">Mobile and desktop clients</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Powerful enterprise features like SAML authentication, Windows Network Drive support, password policies, audit-ready logging, workflow handling and more.">Enterprise capabilities</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="the AGPL license provides legal certainty for all customers and users.">Fully Open Source</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="Support for the Calendar and Contacts apps.">Calendar and Contacts</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="Support for our secure and private peer to peer audio and video conferencing.">Secure WebRTC Conferencing</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="Allows web conferencing calls to connect with phone lines.">SIP gateway</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="Real time collaborative editing of often used office fileformats like DOCX, PPTX and more.">Collabora Online Office</span>');?></li>
				</div>
				<h1 class="header revealOnScroll"><?php echo $l->t('Support');?></h1>
				<div class="line revealOnScroll"></div>
				<div class="list revealOnScroll">
					<li class="check"><?php echo $l->t('<span title="Questions and issues are generally dealt with in this time, depending on the severity of the issue">Production SLA: 3 business days</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Our Nextcloud Knowledge Portal helps you find answers to your questions or contact our professional support team">Portal support</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="We help you migrate from ownCloud to Nextcloud">ownCloud migration support</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="You can contact our capable and responsive support team by email and expect a quick response time.">Email support</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="You can contact our support engineers by phone in these times.">Phone support</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="If you need access to experienced engineers to built custom solutions for your unique needs.">Custom consulting</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required.">Clustering support</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="If you need the certainty that you can remain on your stable, proven Nextcloud release for a long time.">Maintenance life cycle: 1 year</span>');?></li>
				</div>
				<h1 class="revealOnScroll">Pricing</h1>
				<div class="line revealOnScroll"></div>
				<div class="list revealOnScroll">
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market.">50 users: €1500');?></li>
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market.">500 users: €6260');?></li>
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market.">Additional pricing tiers of 10.000, 100.000 and 1.000.000 users available');?></li>
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market.">Framework agreements available');?></li>
				</div>
				<a class="btn btn-primary btn-lg btn-absolute-icon revealOnScroll" href="/enterprise/buy" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
		<div class="col-md-4 table-column revealOnScroll">
			<div class="table-header standard revealOnScroll">
				<h1 class="revealOnScroll"><?php echo $l->t('Standard');?></h1>
				<h2 class="revealOnScroll"><?php echo $l->t('From 2500€/year');?></h2>
			</div>
			<div class="table-content">
				<h1 class="revealOnScroll revealOnScroll"><?php echo $l->t('Capabilities');?></h1>
				<div class="line revealOnScroll"></div>
				<div class="list revealOnScroll">
					<li class="check"><?php echo $l->t('<span title="Sync your files with our desktop and mobile clients, share them with other users on your server, with public links or across servers.">File sync and share</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Android, iOS and desktop apps, branding possible.">Mobile and desktop clients</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Powerful enterprise features like SAML authentication, Windows Network Drive support, password policies, audit-ready logging, workflow handling and more.">Enterprise capabilities</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="the AGPL license provides legal certainty for all customers and users.">Fully Open Source</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Support for the Calendar and Contacts apps.">Calendar and Contacts</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="Support for our secure and private peer to peer audio and video conferencing.">Secure WebRTC Conferencing</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="Allows web conferencing calls to connect with phone lines.">SIP gateway</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="Real time collaborative editing of often used office fileformats like DOCX, PPTX and more.">Collabora Online Office</span>');?></li>
				</div>
				<h1 class="revealOnScroll"><?php echo $l->t('Support');?></h1>
				<div class="line revealOnScroll"></div>
				<div class="list revealOnScroll">
					<li class="check"><?php echo $l->t('<span title="Questions and issues are generally dealt with in this time, depending on the severity of the issue">Production SLA: 2 business days</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Our Nextcloud Knowledge Portal helps you find answers to your questions or contact our professional support team">Portal support</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="We help you migrate from ownCloud to Nextcloud">ownCloud migration support</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="You can contact our capable and responsive support team by email and expect a quick response time.">Email support: business hours</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="You can contact our support engineers by phone in these times.">Phone support: business hours</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="If you need access to experienced engineers to built custom solutions for your unique needs.">Custom consulting</span>');?></li>
					<li class="nocheck"><?php echo $l->t('<span title="Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required.">Clustering support</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="If you need the certainty that you can remain on your stable, proven Nextcloud release for a long time.">Maintenance life cycle: 3 years</span>');?></li>
				</div>
				<h1 class="revealOnScroll">Pricing</h1>
				<div class="line revealOnScroll"></div>
				<div class="list revealOnScroll">
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market.">50 users: €2500');?></li>
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market.">500 users: €14500');?></li>
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market.">Additional pricing tiers of 10.000, 100.000 and 1.000.000 users available');?></li>
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market.">Framework agreements available');?></li>
				</div>
				<a class="btn btn-primary btn-lg btn-absolute-icon revealOnScroll" href="/enterprise/buy" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
		<div class="col-md-4 table-column highlight revealOnScroll">
			<div class="table-header premium revealOnScroll">
				<h1 class="revealOnScroll"><?php echo $l->t('Premium');?></h1>
				<h2 class="revealOnScroll"><?php echo $l->t('From 3250€/year');?></h2>
			</div>
			<div class="table-content">
				<h1 class="revealOnScroll"><?php echo $l->t('Supported Capabilities');?></h1>
				<div class="line revealOnScroll"></div>
				<div class="list revealOnScroll">
					<li class="check"><?php echo $l->t('<span title="Sync your files with our desktop and mobile clients, share them with other users on your server, with public links or across servers.">File sync and share</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Android, iOS and desktop apps, branding possible.">Mobile and desktop clients</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Powerful enterprise features like SAML authentication, Windows Network Drive support, password policies, audit-ready logging, workflow handling and more.">Enterprise capabilities</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="the AGPL license provides legal certainty for all customers and users.">Fully Open Source</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Support for the Calendar and Contacts apps.">Calendar and Contacts</span>');?></li>
					<li class="optional"><?php echo $l->t('<span title="Optional: Support for our secure and private peer to peer audio and video conferencing.">Secure WebRTC Conferencing</span>');?></li>
					<li class="optional"><?php echo $l->t('<span title="Optional: Allows web conferencing calls to connect with phone lines.">SIP gateway</span>');?></li>
					<li class="optional"><?php echo $l->t('<span title="Optional: Real time collaborative editing of often used office fileformats like DOCX, PPTX and more.">Collabora Online Office</span>');?></li>
				</div>
				<h1 class="revealOnScroll"><?php echo $l->t('Support');?></h1>
				<div class="line revealOnScroll"></div>
				<div class="list revealOnScroll">
					<li class="check"><?php echo $l->t('<span title="Questions and issues are generally dealt with in this time, depending on the severity of the issue">Production SLA: 24h or as agreed</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Our Nextcloud Knowledge Portal helps you find answers to your questions or contact our professional support team">Portal support</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="We help you migrate from ownCloud to Nextcloud">ownCloud migration support</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="You can contact our capable and responsive support team by email and expect a quick response time.">Email support: up to 24/7</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="You can contact our support engineers by phone in these times.">Phone support: up to 24/7</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="If you need access to experienced engineers to built custom solutions for your unique needs.">Custom consulting</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="Once you need to scale Nextcloud to large numbers of users, a full clustering solution is required.">Clustering</span>');?></li>
					<li class="check"><?php echo $l->t('<span title="If you need the certainty that you can remain on your stable, proven Nextcloud release for a long time.">Maintenance life cycle: 5+5 years</span>');?></li>
				</div>
				<h1 class="revealOnScroll">Pricing</h1>
				<div class="line revealOnScroll"></div>
				<div class="list revealOnScroll">
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market vertical.">50 users: €3250');?></li>
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market vertical.">500 users: €21500');?></li>
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market vertical.">Additional pricing tiers of 10.000, 100.000 and 1.000.000 users available');?></li>
					<li class="price"><?php echo $l->t('<span title="Contact us for a quote relevant for your specific market.">Framework agreements available');?></li>
				</div>
				<a class="btn btn-primary btn-lg btn-absolute-icon revealOnScroll" href="/enterprise/buy" role="button" id="get-nextcloud-button"><?php echo $l->t('Request offer');?> <span class="icon-arrow"></span></a>
			</div>
		</div>
	</div>
</div>
<div class="container text-center">
	<p class="revealOnScroll epricevat"><?php echo $l->t('Prices are in Euro per year and net/excl. VAT.');?></p>
	<p class="revealOnScroll"><?php echo $l->t('<small>All product names and trademarks are the property of their respective owners, which might in no way be associated or affiliated with Nextcloud.</small>');?></p>
</div>
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

<div class="faq container-fluid">
			<div class="text-center">
				<h1 class="revealOnScroll"><?php echo $l->t('Frequently asked questions');?></h1>
			</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="downarrow revealOnScroll"><a href="#why_pay" data-toggle="collapse"><h3><?php echo $l->t('Why would I pay for open source software?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="why_pay" class="collapse ">
					<p><?php echo $l->t('Nextcloud is great out of the box. But installing and running a server in a secure and reliable manner and for hundreds or thousands of users, important for a mission critical environment, is not always easy. You probably want access to an expert if something does not function as expected. We provide not only that but also pro-active support with installation and security issues, we reach out when we do feature planning to ensure your needs are served and we support Nextcloud long after you would otherwise be forced to upgrade for security, performance and stability reasons.');?></p>
					<p><?php echo $l->t('By offering more in-depth knowledge than anybody else, we give you the confidence you need to be able to rely on Nextcloud.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#what_I_get" data-toggle="collapse"><h3><?php echo $l->t('What does the subscription give me?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="what_I_get" class="collapse">
					<p><?php echo $l->t('Your Nextcloud subscription enables you to successfully deploy and manage your servers. Our open approach gives you direct access to Nextcloud engineers, the latest knowledge and best practices. We provide technical expertise, guidance and collaboration with phone and chat contact. Pro-active security support helps you identify and address vulnerabilities and harden your servers to protect the safety and integrity of your data.');?></p>
					<p><?php echo $l->t('With the Nextcloud Enterprise subscription you get:');?></p>
					<ul class="list">
						<li class="check"><?php echo $l->t('Full lifecycle support with multi-year security and stability fixes');?></li>
						<li class="check"><?php echo $l->t('Technical expertise and help covering project inception to production and user growth');?></li>
						<li class="check"><?php echo $l->t('Help to scale your Nextcloud installation to large amounts of storage and large numbers of users');?></li>
						<li class="check"><?php echo $l->t('Security and hardening consulting');?></li>
						<li class="check"><?php echo $l->t('Influence on the roadmap of the open source project');?></li>
						<li class="check"><?php echo $l->t('Access to the core Nextcloud engineers');?></li>
						<li class="check"><?php echo $l->t('Access to consulting for custom capabilities');?></li>
						<li class="check"><?php echo $l->t('Support for branding Nextcloud');?></li>
						<li class="check"><?php echo $l->t('Full support for integrated video conferencing and communication features based on spreed.me and WebRTC');?></li>
						<li class="check"><?php echo $l->t('Optional Online Office capabilities which can handle a wide range of industry-standard file formats');?></li>
					</ul></p>
					<p><?php echo $l->t('Nextcloud consulting goes beyond technical expertise, offering strategic advice for organizations. We analyze your challenges and help you implement a comprehensive, cost-effective and compliance-aware solution which reduces complexity and risks while delivering the highest security and privacy protection.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#languages" data-toggle="collapse"><h3><?php echo $l->t('In what languages do I get support?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="languages" class="collapse">
					<p><?php echo $l->t('We provide support in German and English and other languages through our partners, <a href="#contact">contact us</a> for details.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#migration" data-toggle="collapse"><h3><?php echo $l->t('How difficult is migration from ownCloud?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="migration" class="collapse">
					<p><?php echo $l->t('Migration from ownCloud to Nextcloud is easy. Our support team will help you move to Nextcloud and optimally benefit from the added scalability, features, stability, performance and security. See <a href="/migration">our migration page</a> for more details on migration.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#howbuy" data-toggle="collapse"><h3><?php echo $l->t('How do I buy Nextcloud subscriptions?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="howbuy" class="collapse">
					<p><?php echo $l->t('Just <a href="/buy">contact us</a> or one of our partners. Our partners will help you set up Nextcloud and they act as your first point of contact.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#partner" data-toggle="collapse"><h3><?php echo $l->t('How do I become a Nextcloud partner?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="partner" class="collapse">
					<p><?php echo $l->t('We are always looking for competent partners who share our passion for making customers happy! You can join our ecosystem, <a href="/contact">contact us for more information</a>.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#gpl" data-toggle="collapse"><h3><?php echo $l->t('What does the Open Source License mean?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="gpl" class="collapse">
					<p><?php echo $l->t('Nextcloud is licensed under the GNU AGPLv3, one of the most widely used Open Source license. Written with input from lawyers and industry leaders from all over the world, it is a clear, balanced and well understood license, providing users a level of certainty no license from any single company can give. Today it is a widely used and broadly accepted license across various stakeholders, including developers, users, organizations and large enterprises. The AGPLv3 guarantees that all users of the software can use, study, share and improve the software without any legal risks. Further its patent clause ensures all users have a non-exclusive, non-transferable, worldwide, royalty-free license on any patents owned by code contributors now or in the future. On top of this, Nextcloud GmbH guarantees that every customer can use Nextcloud and exercise all rights given by the GNU AGPLv3 without violating any patents or copyright.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#sourcerelease" data-toggle="collapse"><h3><?php echo $l->t('Do I have to release the source code of systems Nextcloud connects to?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="sourcerelease" class="collapse">
					<p><?php echo $l->t('No. Nextcloud will communicate with your back-end systems over external APIs. Those systems will not become a derivative work of Nextcloud just because they communitcate with it. Therefore you can keep the source code of your back-end systems private and do not have to share it with anyone.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#logos" data-toggle="collapse"><h3><?php echo $l->t('Are my logos or the company name affected by the AGPL?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="logos" class="collapse">
					<p><?php echo $l->t('No. Logos, company names, etc. are protected by trademarks. The GNU AGPLv3 is a copyright license and does not affect any trademarks. If you put your logo on your Nextcloud it is considered merely as data used by Nextcloud and has no effect on licenses or trademarks.');?></p></div>
				<div class="line revealOnScroll">
				</div>
				<div class="downarrow revealOnScroll"><a href="#pubsource" data-toggle="collapse"><h3><?php echo $l->t('Do I need to publish the source code if I use Nextcloud?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="pubsource" class="collapse">
					<p><?php echo $l->t('No. As long as you did not make any modifications to the Nextcloud code, existing apps or write your own apps, you do not have to do anything. Note that configuration does not count as modification! If you did make code modifications, then you have to make that code available under the GNU AGPLv3 or a compatible license to the users of the system. The easiest way to do so is to provide a download link. Nextcloud GmbH assists customers with license compliance.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#sellapp" data-toggle="collapse"><h3><?php echo $l->t('Can I sell my Nextcloud App?<span class="icon-arrow-down"></span>');?></h3></a></div>
				<div id="sellapp" class="collapse">
					<p><?php echo $l->t('Yes. Nextcloud is licensed under the GNU AGPLv3. This license only defines the rights you have to give the users of the software, but not how they get the software. You can decide freely if you want to sell the software in an app store or through any other channel, or if you want to make the app publicly available. The only requirement is that you license your app under the AGPLv3 or a compatible license.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
			</div>
		</div>
	</div>
</div>

