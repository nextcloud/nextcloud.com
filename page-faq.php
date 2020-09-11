<head>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/pricing.css?v=4" rel="stylesheet">
	<script>
	require(["require.config"], function() {
		require(["pages/pricing", "modules/submenu", "bootstrap"])
	});
	</script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/old/jquery-321.min.js"></script>
</head>

<section class="pricing-hero-section second-menu background pricing-background">
    <div class="background container">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Nextcloud Enterprise FAQ');?></h1>
                <h2><?php echo $l->t('Nextcloud Enterprise explained');?></h2>
            </div>
        </div>
    </div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a class="button button--blue" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('Order online');?></a>
			<a class="button button--blue" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
			<a class="button button--blue" href="<?php echo home_url('trial') ?>"><?php echo $l->t('Start a trial');?></a>
			<a class="button button--blue" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
		</div>
	</div>
</section>

<section class="section--faq">
<a name="faq" id="faq"></a>
<div class="container-fluid">
			<div class="text-center">
				<h1><?php echo $l->t('Frequently asked questions');?></h1>
			</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
                <h2><?php echo $l->t('Compliance');?></h2>
				<div class="downarrow"><a href="#gdpr" data-toggle="collapse"><h3><?php echo $l->t('Is Nextcloud GDPR/HIPAA/... compliant?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="gdpr" class="collapse ">
                    <p><?php echo $l->t('Self-hosting is the quickest and easiest way to legal compliance with a wide variety of regulations. By keeping data on your company servers, there is no need for contracts with other companies or complicated audit processes.');?></p>
					<p><?php echo $l->t('You still have comply with security and compliance requirements demanding you take appropriate security measures. A Nextcloud Subscription delivers security patches and consulting based on our expertise and Security Bug Bounty Program, helping Nextcloud customers to make sure this requirement is met.');?></p>
					<a class="button button--blue button--small" href="<?php echo home_url('gdpr') ?>" class="nav__label"><?php echo $l->t('GDPR Compliance Kit');?></a>
					<a class="button button--blue button--small" href="<?php echo home_url('healthcare') ?>" class="nav__label"><?php echo $l->t('HIPAA and Healthcare');?></a>
				</div>
				<div class="line"></div>
				<h2><?php echo $l->t('Subscription and support');?></h2>
				<div class="downarrow"><a href="#what_is_nce" data-toggle="collapse"><h3><?php echo $l->t('What is Nextcloud Enterprise?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="what_is_nce" class="collapse ">
                    <p><?php echo $l->t('To better deliver on the needs of our customers, they have access to a special Nextcloud Enterprise build pre-configured, optimized and hardened for the special needs of large scale, production-critical enterprise deployments. Nextcloud Enterprise provides the following key benefits:');?></p>
					<ul class="list">
						<li class="check"><?php echo $l->t('Improved reliability.');?> <?php echo $l->t('Nextcloud Enterprise receives additional quality assurance to provide the highest degree of reliability and offers a longer life cycle.');?></li>
						<li class="check"><?php echo $l->t('Improved scalability.');?> <?php echo $l->t('Nextcloud Enterprise is pre-configured and optimized for the needs of large scale production at enterprises, rather than home users.');?></li>
						<li class="check"><?php echo $l->t('Improved security.');?> <?php echo $l->t('Nextcloud Enterprise customers get priority access to security and stability fixes to guarantee smooth operation out of the box.');?></li>
						<li class="check"><?php echo $l->t('Certified integrity.');?> <?php echo $l->t('Nextcloud Enterprise is a guaranteed proven, certified code base for legal compliance like GDPR and HIPAA.');?></li>
                    </ul>
                </div>
                <div class="line"></div>
				<div class="downarrow"><a href="#nce_for_community" data-toggle="collapse"><h3><?php echo $l->t('What does Nextcloud Enterprise mean for private users?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="nce_for_community" class="collapse">
					<p><?php echo $l->t('Nextcloud is used on anything from a raspberry pi for family calendar syncing to delivering secure team productivity for hundreds of thousands of employees at the German Federal Government, running on a large cluster with Global Scale. Those large enterprise deployments have vastly different needs from the hundreds of thousands of community users that deploy Nextcloud at home.');?></p>
					<p><?php echo $l->t('To better deliver on the needs of our customers, we make a special Nextcloud Enterprise build available to them. This build is derived from the same 100% open source code base from Github but pre-configured, optimized and hardened for the special needs of large scale, production-critical enterprise deployments.');?></p>
					<p><strong><?php echo $l->t('100% open source');?></strong></p>
					<p><?php echo $l->t('With Nextcloud Enterprise, we follow the model made popular by Red Hat, SUSE, MariaDB and many others with a fully open source, enterprise focused product available for customers.');?></p>
					<p><?php echo $l->t('Nextcloud continues to be developed and improved as it is together with our large community of contributors and its releases continue to be the first to deliver new features and improvements to users.');?></p>
					<p><?php echo $l->t('As home user, nothing is different, and Nextcloud should continue to be equally suitable for private or small business use. If you are working at a larger enterprise and want to know if Nextcloud Enterprise offers you relevant benefits, you can contact our sales team.');?></p>
					<a class="button button--blue button--small" href="<?php echo home_url('contact') ?>" class="nav__label"><?php echo $l->t('Contact us');?></a>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#what_I_get" data-toggle="collapse"><h3><?php echo $l->t('What does the subscription give me?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="what_I_get" class="collapse">
					<p><?php echo $l->t('Nextcloud Enterprise is supported by a Nextcloud Subscription.');?> <?php echo $l->t('Your Nextcloud subscription enables you to successfully deploy and manage your servers. Our open approach gives you direct access to Nextcloud engineers, the latest knowledge and best practices. We provide technical expertise, guidance and collaboration with phone and chat contact. Pro-active security support helps you identify and address vulnerabilities and harden your servers to protect the safety and integrity of your data.');?></p>
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
				<div class="line"></div>
				<div class="downarrow"><a href="#languages" data-toggle="collapse"><h3><?php echo $l->t('In what languages do I get support?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="languages" class="collapse">
					<p><?php echo $l->t('We provide support in English and other languages through our partners, <a class="hyperlink"  href="#contact">contact us</a> for details.');?></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#branding" data-toggle="collapse"><h3><?php echo $l->t('What branding support do I get?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="branding" class="collapse">
					<p><?php echo $l->t('Every interface through which you interact with your users or customers should be a representation of the brand behind you - a brand that stands out from the competition. Our support engineers will make sure Nextcloud represents your brand by helping you configure the web interface and providing you with branded clients if needed.');?></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#support_team" data-toggle="collapse"><h3><?php echo $l->t('Where is your support team?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="support_team" class="collapse ">
                    <p><?php echo $l->t('We offer you DIRECT access to our engineers to ensure you always get the best answer as quickly as possible, rather than walling off support from the expertise at engineering. Like a dedicated, on-site engineer, our <strong>entire team</strong> is dedicated to your success first!');?></p>
                    <p><?php echo $l->t('This not only makes sure you get faster, better support than anywhere else, it also ensures our engineers are confronted with customer issues and wishes daily, keeping their work closely aligned with the needs of our customers.');?></p>
                    <p><?php echo $l->t('As customer, you thus do not have to hope a junior support team member manages to explain your request to an engineer: you already talked to the engineer, directly, and they are already working on a solution.');?> <a class="hyperlink" href="https://opensource.com/article/18/8/mixing-roles-engineering" target="_blank"><?php echo $l->t('Learn more on opensource.com.');?></a></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#qa_team" data-toggle="collapse"><h3><?php echo $l->t('Where is your qa/testing team?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="qa_team" class="collapse ">
                    <p><?php echo $l->t('Just like we believe engineers should work with customers directly to ensure their development stays aligned with customer needs, QA and testing are an integral part of the job of our engineers.');?></p>
                    <p><?php echo $l->t('This ensures a direct feedback loop, resulting in them writing better quality code, if only to avoid having to spend too much time testing and debugging. To get their work done as efficiently as possible, our engineers are organically motivated to automate exactly what should be automated, no more and no less.');?></p>
                    <p><?php echo $l->t('As our unique approach to management relies strongly on internal motivation instead of management overhead, and external pressure, our integrated approach to support and QA guarantees alignment between customer needs and engineering effort.');?> <a class="hyperlink" href="https://opensource.com/article/18/8/mixing-roles-engineering" target="_blank"><?php echo $l->t('Learn more on opensource.com.');?></a></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#pricing" data-toggle="collapse"><h3><?php echo $l->t('Nextcloud is open source, what is behind your prices?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="pricing" class="collapse">
					<p><?php echo $l->t('Working with others on data is core to your business. It determines the productivity of your employees, every day, every hour.<br>
					A race to the bottom with clunky, cheap solutions offering more frustration than value does not benefit your organization! We offer a product which not only has the features, but also the stability and ease of use that helps your business be successful. And we support that with quick and quality help, providing direct contact with real and qualified engineers, access to expertise on scaling your server, securing your sensitive data, improvements you really need and want and more. All to make sure your Nextcloud server works as smooth as possible so your team can get work done instead of wait for IT to fix their infrastructure or worry about data theft.<br>
					An investment in a Nextcloud subscription is an investment in efficient, productive, happy work for your employees. So we set pricing at a level that allows us to really offer you value, a great experience to your employees and help your business.');?></p>
					<p><?php echo $l->t('We give you what <strong>no other company can offer you:</strong> the full attention of the engineers developing Nextcloud. Our entire engineering team works part of their time in support, dedicated to provide the best possible expertise in the shortest possible time. Where competitors and service providers might have some dedicated support people, nobody has the expertise we provide you, and before their "customer satisfaction expert" could even start finding out what engineer might know how to resolve your problem, our engineers are providing you a solution.');?></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#howbuy" data-toggle="collapse"><h3><?php echo $l->t('How do I buy Nextcloud subscriptions?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="howbuy" class="collapse">
					<p><?php echo $l->t('A Nextcloud Subscription is bundled with Nextcloud Enterprise.');?><a class="hyperlink" href="<?php echo home_url('buy') ?>"> <?php echo $l->t('Just contact us</a> or one of our partners. Our partners will help you set up Nextcloud and they act as your first point of contact.');?></p>
				</div>
				<div class="line"></div>
                <h2><?php echo $l->t('Licensing');?></h2>
				<div class="downarrow"><a href="#why_opensource" data-toggle="collapse"><h3><?php echo $l->t('Why is Nextcloud Open Source?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="why_opensource" class="collapse ">
                    <a target="_blank" href="https://www.openchainproject.org/conformance"><img class="img-responsive" style="float:right; margin:5px; width: 100%; max-width: 300px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/openchain.png" alt="activity overview" /></a>
                    <p><?php echo $l->t('Nextcloud\'s use of widely used and understood Open Source licenses provides customers legal certainly, protection against vendor lock-in and a guarantee that we offer top notch services. They facilitate an open, collaborative development model, resulting in more reliable and secure software. Open Source protects <strong>your business</strong>, guaranteeing the value of your investment for the long term. <a href="https://nextcloud.com/blog/why-the-agpl-is-great-for-business-users/">Read more about licensing benefits here</a> and about the <a href="https://nextcloud.com/blog/how-nextcloud-protects-your-business-from-license-uncertainty/">protection offered by our AGPL license here.</a>');?></p>
                    <p><?php echo $l->t('License compliance for Nextcloud has been <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project. Nextcloud GmbH guarantees its customers license compliance and assists customers with any license-related legal inquiries.');?></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#gpl" data-toggle="collapse"><h3><?php echo $l->t('What does the Open Source License mean?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="gpl" class="collapse">
					<p><?php echo $l->t('Nextcloud and Nextcloud Enterprise are licensed under the GNU AGPLv3, one of the most widely used Open Source license. Written with input from lawyers and industry leaders from all over the world, it is a clear, balanced and well understood license, providing users a level of certainty no license from any single company can give. Today it is a widely used and broadly accepted license across various stakeholders, including developers, users, organizations and large enterprises. The AGPLv3 guarantees that all users of the software can use, study, share and improve the software without any legal risks. Further its patent clause ensures all users have a non-exclusive, non-transferable, worldwide, royalty-free license on any patents owned by code contributors now or in the future. On top of this, Nextcloud GmbH guarantees that every customer can use Nextcloud and exercise all rights given by the GNU AGPLv3 without violating any patents or copyright.');?></p>
					<p><?php echo $l->t('License compliance for Nextcloud has been <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project. Nextcloud GmbH guarantees its customers license compliance and assists customers with any license-related legal inquiries.');?></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#opencore" data-toggle="collapse"><h3><?php echo $l->t('Would a proprietary license not be better?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="opencore" class="collapse">
					<p><?php echo $l->t('No. Components of Nextcloud as well as many Nextcloud apps are under a variety of open source licenses. While they are all compatible with the AGPL, many are not compatible with proprietary licenses and thus would nearly guarantee customers would be in violation of those licenses, creating legal risk.');?></p>
					<p><?php echo $l->t('License compliance for Nextcloud has been <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project. Nextcloud GmbH guarantees its customers license compliance and assists customers with any license-related legal inquiries.');?></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#sourcerelease" data-toggle="collapse"><h3><?php echo $l->t('Do I have to release the source code of systems Nextcloud connects to?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="sourcerelease" class="collapse">
					<p><?php echo $l->t('No. Nextcloud will communicate with your back-end systems over external APIs. Those systems will not become a derivative work of Nextcloud just because they communicate with it. Therefore you can keep the source code of your back-end systems private and do not have to share it with anyone.');?></p>
					<p><?php echo $l->t('Nextcloud has its license compliance <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project.');?></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#logos" data-toggle="collapse"><h3><?php echo $l->t('Are my logos or the company name affected by the AGPL?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="logos" class="collapse">
					<p><?php echo $l->t('No. Logos, company names, etc. are protected by trademarks. The GNU AGPLv3 is a copyright license and does not affect any trademarks. If you put your logo on your Nextcloud it is considered merely as data used by Nextcloud and has no effect on licenses or trademarks.');?></p>
					<p><?php echo $l->t('License compliance for Nextcloud has been <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project. Nextcloud GmbH guarantees its customers license compliance and assists customers with any license-related legal inquiries.');?></p>
                </div>
				<div class="line">
				</div>
				<div class="downarrow"><a href="#pubsource" data-toggle="collapse"><h3><?php echo $l->t('Do I need to publish the source code if I use Nextcloud?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="pubsource" class="collapse">
					<p><?php echo $l->t('No. As long as you did not make any modifications to the Nextcloud code, existing apps or write your own apps, you do not have to do anything. Note that configuration does not count as modification! If you did make code modifications, then you have to make that code available under the GNU AGPLv3 or a compatible license to the users of the system. The easiest way to do so is to provide a download link. Nextcloud GmbH assists customers with license compliance.');?></p>
					<p><?php echo $l->t('License compliance for Nextcloud has been <a href="https://nextcloud.com/blog/nextcloud-validates-license-compliance-through-openchain/">validated through OpenChain</a>, a Linux Foundation project. Nextcloud GmbH guarantees its customers license compliance and assists customers with any license-related legal inquiries.');?></p>
				</div>
				<div class="line"></div>
				<h2><?php echo $l->t('Other questions');?></h2>
				<div class="downarrow"><a href="#migration" data-toggle="collapse"><h3><?php echo $l->t('How difficult is migration from ownCloud?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="migration" class="collapse">
					<p><?php echo $l->t('Migration from ownCloud to Nextcloud is easy. Our support engineers has already migrated dozens of customers, including some with tens of thousands of users. We will help you move to Nextcloud and optimally benefit from the added scalability, features, stability, performance and security.');?> <a class="hyperlink" href="<?php echo home_url('migration') ?>"><?php echo $l->t('See our migration page</a> for more details on migration.');?></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#partner" data-toggle="collapse"><h3><?php echo $l->t('How do I become a Nextcloud partner?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="partner" class="collapse">
					<p><?php echo $l->t('We are always looking for competent partners who share our passion for making customers happy! You can join our ecosystem,');?> <a class="hyperlink" href="<?php echo home_url('contact') ?>"><?php echo $l->t('contact us for more information</a>.');?></p>
				</div>
				<div class="line"></div>
				<div class="downarrow"><a href="#sellapp" data-toggle="collapse"><h3><?php echo $l->t('Can I sell my Nextcloud App?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="sellapp" class="collapse">
					<p><?php echo $l->t('Yes. Nextcloud is licensed under the GNU AGPLv3. This license only defines the rights you have to give the users of the software, but not how they get the software. You can decide freely if you want to sell the software in an app store or through any other channel, or if you want to make the app publicly available. The only requirement is that you license your app under the AGPLv3 or a compatible license.');?></p>
				</div>
				<div class="line"></div>
			</div>
		</div>
	</div>
</div>
</section>
