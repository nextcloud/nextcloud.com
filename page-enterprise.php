<div class="container-fluid background"> 
	<div class="container">
		<div class="col-md-6 topheader">
			<h1><?php echo $l->t('The value of a Nextcloud Support Subscription');?></h1>
			<h2><?php echo $l->t('Going beyond the traditional licensing model, Nextcloud frees you from vendor lock-in and provides value through supporting your business\' needs.');?></h2>
		</div>
	</div>
</div>

<div class="container intro">
	<div class="row">
		<div class="col-md-7">
			<h2 class=""><?php echo $l->t('Get the best support');?></h2>
			<h1 class=""><?php echo $l->t('From the source');?></h1>
			<p><?php echo $l->t('Your Nextcloud subscription enables you to successfully deploy and manage your Nextcloud instances, complimenting your IT resources and increasing the efficiency and reliability of your service.');?></p>
			<a class="btn btn-primary btn-lg btn-absolute-icon" href="/pricing" role="button"><?php echo $l->t('See pricing');?> <span class="icon-arrow"></span></a>
		</div>
		<div class="col-md-5">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/publicsector.svg">
		</div>
	</div>
</div>


<div class="youget container-fluid">
			<h1 class="revealOnScroll"><?php echo $l->t('What you get');?></h1>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<p><?php echo $l->t('Our open approach gives you direct access to technical expertise of the top Nextcloud engineers, the latest knowledge and best practices. Pro-active security support helps you identify and address vulnerabilities and harden your servers to protect the safety and integrity of your data. Our multi-year life cycle support matches your OS and makes sure your business runs without disruptions.');?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 details revealOnScroll">
				<a href="#expertise">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/publicsector.svg">
				<h2><?php echo $l->t('Expertise');?></h2>
				</a>
			</div>
			<div class="col-md-4 details revealOnScroll">
				<a href="#security">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/education.svg">
				<h2><?php echo $l->t('Security');?></h2>
				</a>
			</div>
			<div class="col-md-4 details revealOnScroll">
				<a href="#lifecycle">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/education.svg">
				<h2><?php echo $l->t('Life cycle');?></h2>
				</a>
			</div>
		</div>
		<a name="expertise"></a>
		<div class="row">
			<div class="col-md-8 revealOnScroll">
			<h2><?php echo $l->t('Matter experts');?></h2>
			<h3><?php echo $l->t('Dedicated to your success');?></h2>
			<p><?php echo $l->t('We are dedicated to your success as Nextcloud customer. An analysis of your needs, a pilot customized for your architecture and remote installation support ensures a smooth introduction of Nextcloud in your organization and we will help you scale up to meet growing demand in your organization.');?></p>
			<p><?php echo $l->t('Nextcloud GmbH <a href="https://github.com/nextcloud/server/graphs/contributors?from=2015-10-24&to=2016-10-24&type=c">employs 8 of the top-ten developers</a> in the Nextcloud Server codebase, making <a href="/team#engineering">our engineering team</a> by far the most qualified to help you get the most out of your Enterprise File Sync and Share solution.');?></p>
			</div>
			<div class="col-md-4 revealOnScroll">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/education.svg">
<!-- 			picture of our contributions? Or relative graph? Link to https://github.com/nextcloud/server/graphs/contributors?from=2015-10-24&to=2016-10-24&type=c and/or https://www.openhub.net/p/nextcloud (has 'similar projects' with ownCloud, Pydio etc) and/or to team page -->
			</div>
		</div>
		<a name="security"></a>
		<div class="row">
			<div class="col-md-4 revealOnScroll">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/education.svg">
<!-- 			picture of our contributions? Or relative graph? Link to https://github.com/nextcloud/server/graphs/contributors?from=2015-10-24&to=2016-10-24&type=c and/or https://www.openhub.net/p/nextcloud (has 'similar projects' with ownCloud, Pydio etc) and/or to team page -->
			</div>
			<div class="col-md-8 revealOnScroll">
			<h2><?php echo $l->t('Top notch security');?></h2>
			<h3><?php echo $l->t('To keep your data safe');?></h2>
			<p><?php echo $l->t('Nextcloud develops its software with a <a href="/secure">rigorous focus on security</a> through the entire life cycle of the product. Our active and passive security measures are backed by the some of the highest security bug bounties in the open source industry.');?></p>
			<p><?php echo $l->t('As customer you get direct access to our security expertise, with hardening advice and ahead-of-release security issue mitigation and fixes.');?></p>
			</div>
		</div>
		<a name="lifecycle"></a>
		<div class="row">
			<div class="col-md-8 revealOnScroll">
			<h2><?php echo $l->t('Multi-year lifecycle support');?></h2>
			<h3><?php echo $l->t('For uninterupted service');?></h2>
			<p><?php echo $l->t('A Nextcloud support subscription gives you access to enterprise-ready software, updates, and information and support services that span your entire OS and application infrastructure life cycle and architecture. You can count on receiving the latest product versions with the stability and security you need.');?></p>
			<p><?php echo $l->t('Working with data is essential for your business and being forced on the upgrade threadmill is disruptive to your organization. With access to up to 15 years security and stability updates to Nextcloud, we match the lifecycle of your operating system so you can schedule upgrades when it works for you and secure the investments you did in your existing platform.');?></p>
			<a class="btn btn-primary btn-lg btn-absolute-icon" href="/pricing" role="button"><?php echo $l->t('See pricing');?> <span class="icon-arrow"></span></a>
			</div>
			<div class="col-md-4 revealOnScroll">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/education.svg">
<!-- 			picture of our contributions? Or relative graph? Link to https://github.com/nextcloud/server/graphs/contributors?from=2015-10-24&to=2016-10-24&type=c and/or https://www.openhub.net/p/nextcloud (has 'similar projects' with ownCloud, Pydio etc) and/or to team page -->
			</div>
		</div>
		
	</div>
</div>







<div class="faq container-fluid">
	<h1 class="revealOnScroll"><?php echo $l->t('Frequently asked questions');?></h1>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="downarrow revealOnScroll"><a href="#why_pay" data-toggle="collapse"><h3><?php echo $l->t('Why would I pay for open source software?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="why_pay" class="collapse ">
					<p><?php echo $l->t('Nextcloud is great out of the box. But installing and running a server in a secure and reliable manner and for hundreds or thousands of users, important for a mission critical environment, is not always easy. You probably want access to an expert if something does not function as expected. We provide not only that but also pro-active support with installation and security issues, we reach out when we do feature planning to ensure your needs are served and we support Nextcloud long after you would otherwise be forced to upgrade for security, performance and stability reasons.');?></p>
					<p><?php echo $l->t('By offering more in-depth knowledge than anybody else, we give you the confidence you need to be able to rely on Nextcloud.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#what_I_get" data-toggle="collapse"><h3><?php echo $l->t('What does the subscription give me?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="what_I_get" class="collapse">
					<p><?php echo $l->t('Your Nextcloud subscription enables you to successfully deploy and manage your servers. Our open approach gives you direct access to Nextcloud engineers, the latest knowledge and best practices. We provide technical expertise, guidance and collaboration with phone and chat contact. Pro-active security support helps you identify and address vulnerabilities and harden your servers to protect the safety and integrity of your data.');?></p>
					<p><?php echo $l->t('With the Nextcloud Enterprise subscription you get:');?></p>
					<ul class="list">
						<li class="check"><?php echo $l->t('Full lifecycle support with up to 15 years security and stability fixes');?></li>
						<li class="check"><?php echo $l->t('Technical expertise and help covering project inception to production and user growth');?></li>
						<li class="check"><?php echo $l->t('Help to scale your Nextcloud installation to large amounts of storage and large numbers of users');?></li>
						<li class="check"><?php echo $l->t('Security and hardening consulting');?></li>
						<li class="check"><?php echo $l->t('Influence on the roadmap of the open source project');?></li>
						<li class="check"><?php echo $l->t('Access to the core Nextcloud engineers');?></li>
						<li class="check"><?php echo $l->t('Help and advice if you decide to (pay somebody to) develop a custom app or changes');?></li>
						<li class="check"><?php echo $l->t('Support for branding Nextcloud');?></li>
						<li class="check"><?php echo $l->t('Optional support for integrated video conferencing and communication features based on spreed.me and WebRTC');?></li>
						<li class="check"><?php echo $l->t('Optional Online Office capabilities which can handle a wide range of industry-standard file formats');?></li>
						<li class="check"><?php echo $l->t('Access to consulting for custom capabilities');?></li>
					</ul></p>
					<p><?php echo $l->t('Nextcloud consulting goes beyond technical expertise, offering strategic advice for organizations. We analyze your challenges and help you implement a comprehensive, cost-effective and compliance-aware solution which reduces complexity and risks while delivering the highest security and privacy protection.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#languages" data-toggle="collapse"><h3><?php echo $l->t('In what languages do I get support?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="languages" class="collapse">
					<p><?php echo $l->t('We provide support in German and English and other languages through our partners, <a href="#contact">contact us</a> for details.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#branding" data-toggle="collapse"><h3><?php echo $l->t('What branding support do I get?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="branding" class="collapse">
					<p><?php echo $l->t('Every interface through with you interact with your users or customers should be a representation of the brand behind you - a brand that stands out from the competition. Our support team will make sure Nextcloud represents your brand by helping you configure the web interface and providing you with branded clients if needed.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#migration" data-toggle="collapse"><h3><?php echo $l->t('How difficult is migration from ownCloud?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="migration" class="collapse">
					<p><?php echo $l->t('Migration from ownCloud to Nextcloud is easy. Our support team will help you move to Nextcloud and optimally benefit from the added scalability, features, stability, performance and security. See <a href="/migration">our migration page</a> for more details on migration.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#howbuy" data-toggle="collapse"><h3><?php echo $l->t('How do I buy Nextcloud subscriptions?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="howbuy" class="collapse">
					<p><?php echo $l->t('Just <a href="/buy">contact us</a> or one of our partners. Our partners will help you set up Nextcloud and they act as your first point of contact.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#partner" data-toggle="collapse"><h3><?php echo $l->t('How do I become a Nextcloud partner?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="partner" class="collapse">
					<p><?php echo $l->t('We are always looking for competent partners who share our passion for making customers happy! You can join our ecosystem, <a href="/contact">contact us for more information</a>.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#gpl" data-toggle="collapse"><h3><?php echo $l->t('What does the Open Source License mean?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="gpl" class="collapse">
					<p><?php echo $l->t('Nextcloud is licensed under the GNU AGPLv3, one of the most widely used Open Source license. Written with input from lawyers and industry leaders from all over the world, it is a clear, balanced and well understood license, providing users a level of certainty no license from any single company can give. Today it is a widely used and broadly accepted license across various stakeholders, including developers, users, organizations and large enterprises. The AGPLv3 guarantees that all users of the software can use, study, share and improve the software without any legal risks. Further its patent clause ensures all users have a non-exclusive, non-transferable, worldwide, royalty-free license on any patents owned by code contributors now or in the future. On top of this, Nextcloud GmbH guarantees that every customer can use Nextcloud and exercise all rights given by the GNU AGPLv3 without violating any patents or copyright.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#sourcerelease" data-toggle="collapse"><h3><?php echo $l->t('Do I have to release the source code of systems Nextcloud connects to?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="sourcerelease" class="collapse">
					<p><?php echo $l->t('No. Nextcloud will communicate with your back-end systems over external APIs. Those systems will not become a derivative work of Nextcloud just because they communitcate with it. Therefore you can keep the source code of your back-end systems private and do not have to share it with anyone.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#logos" data-toggle="collapse"><h3><?php echo $l->t('Are my logos or the company name affected by the AGPL?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="logos" class="collapse">
					<p><?php echo $l->t('No. Logos, company names, etc. are protected by trademarks. The GNU AGPLv3 is a copyright license and does not affect any trademarks. If you put your logo on your Nextcloud it is considered merely as data used by Nextcloud and has no effect on licenses or trademarks.');?></p></div>
				<div class="line revealOnScroll">
				</div>
				<div class="downarrow revealOnScroll"><a href="#pubsource" data-toggle="collapse"><h3><?php echo $l->t('Do I need to publish the source code if I use Nextcloud?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="pubsource" class="collapse">
					<p><?php echo $l->t('No. As long as you did not make any modifications to the Nextcloud code, existing apps or write your own apps, you do not have to do anything. Note that configuration does not count as modification! If you did make code modifications, then you have to make that code available under the GNU AGPLv3 or a compatible license to the users of the system. The easiest way to do so is to provide a download link. Nextcloud GmbH assists customers with license compliance.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
				<div class="downarrow revealOnScroll"><a href="#sellapp" data-toggle="collapse"><h3><?php echo $l->t('Can I sell my Nextcloud App?<span class="icon-arrow-down">');?></h3></a></div>
				<div id="sellapp" class="collapse">
					<p><?php echo $l->t('Yes. Nextcloud is licensed under the GNU AGPLv3. This license only defines the rights you have to give the users of the software, but not how they get the software. You can decide freely if you want to sell the software in an app store or through any other channel, or if you want to make the app publicly available. The only requirement is that you license your app under the AGPLv3 or a compatible license.');?></p>
				</div>
				<div class="line revealOnScroll"></div>
			</div>
		</div>
	</div>
</div>

