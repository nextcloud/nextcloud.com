<script src="<?php echo get_template_directory_uri(); ?>/assets/js/enterprise.js"></script>
<section class="enterprise-hero-section second-menu">
	<div class="container-fluid background"> 
		<div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Get support from the source');?></h1>
				<h2><?php echo $l->t('Going beyond the traditional licensing model, Nextcloud frees you from vendor lock-in and provides value through supporting your business\' needs.');?></h2>
			</div>
			<div class="col-md-6 topbanner"> <img src="../wp-content/themes/next/assets/img/enterprise/hero-image.png" alt=""></img></div>
			</div>
		</div>
	</div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#expertise">expertise</a>
			<a href="#security">security</a>
			<a href="#lifecycle">lifecycle</a>
			<a href="#capabilities">capabilities</a>
			<a class="btn btn-primary" href="/pricing">pricing plans</a>
			<a class="btn btn-primary" href="/buy">get a quote</a>
		</div>
	</div>
</section>


<section class="what-you-get-section">
	<div class="container">
		<h2 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('What we offer');?></h2>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Your Nextcloud subscription enables you to successfully deploy and manage your Nextcloud instances, complimenting your IT resources and increasing the efficiency and reliability of your service.');?></p>
	</div>
</section>

<a name="expertise"></a>
<section class="section--expertise">
	<div class="container">	
		<p class="section--intro text-center revealOnScroll">Matter experts</p>
		<h3 class="section--heading-1 text-center revealOnScroll">Dedicated to your success</h3>
		<div class="expertise__ilustration"></div>
		<p class="section--intro text-center revealOnScroll">We are dedicated to your success as Nextcloud customer. An analysis of your needs, a pilot customized for your architecture and remote installation support ensures a smooth introduction of Nextcloud in your organization and we will help you scale up to meet growing demand in your organization.
		Nextcloud GmbH employs <a href="https://nextcloud.com/blog/nextcloud-the-most-active-open-source-file-sync-and-share-project/">9 of the top-ten developers in the Nextcloud Server codebase</a>, making our engineering team by far the most qualified to help you get the most out of your Enterprise File Sync and Share solution.</p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="/team">Our team</a></p>
	</div>
</section>

<a name="security"></a>
<section class="section--security">
	<div class="container">
		<p class="section--intro text-center revealOnScroll">Top notch security</p>
		<h3 class="section--heading-1 text-center revealOnScroll">To keep your data safe</h3>
		<div class="security__ilustration"></div>
		<p class="section--intro text-center revealOnScroll">Nextcloud develops its software with a rigorous focus on security through the entire life cycle of the product. Our active and passive security measures are backed by the some of the highest security bug bounties in the open source industry.
		As customer you get direct access to our security expertise, with hardening advice and ahead-of-release security issue mitigation and fixes.</p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="/secure">Learn about security</a></p>
	</div>
</section>

<a name="lifecycle"></a>
<section class="section--lifecycle">
	<div class="container">
		<p class="section--intro text-center revealOnScroll">Multi-year lifecycle</p>
		<h3 class="section--heading-1 text-center revealOnScroll">For uninterupted service</h3>
		<div class="lifecycle__ilustration"></div>
		<p class="section--intro text-center revealOnScroll">A Nextcloud support subscription gives you access to enterprise-ready software, updates, and information and support services that span your entire OS and application infrastructure life cycle and architecture. You can count on receiving the latest product versions with the stability and security you need.
		Working with data is essential for your business and being forced on the upgrade threadmill is disruptive to your organization. With access to up to 15 years security and stability updates to Nextcloud, we match the lifecycle of your operating system so you can schedule upgrades when it works for you and secure the investments you did in your existing platform.</p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="/pricing">See pricing</a></p>
	</div>
</section>

<a name="capabilities"></a>
<section class="Section-Features-Nextcloud slideshow ">
    <h2 class="text-center section-title revealOnScroll"><?php echo $l->t('Nextcloud Enterprise Capabilities');?></h2>
	<div class="indicators">
		<ul class="carousel_dots"></ul>
		<li class="btn_carousel"><a href="#feature-1"></a></li>
		<li class="btn_carousel"><a href="#feature-2"></a></li>
		<li class="btn_carousel"><a href="#feature-3"></a></li>
		<li class="btn_carousel"><a href="#feature-4"></a></li>
	</div>
    <div class="container">
        <div class="col-md-6 ">
        	<div class="container-image-center" id="imageTrigger">
	            <img class="image-back" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/capabilities-back.png">
	            <div class="image-top-container">
	            	<img class="img-responsive image-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/sprite_screen.jpg">
	            </div>
            </div>
        </div>
        <div class="texts-wrapper col-md-6">
	        <div class="right-text-grey" data-slide="1">
				<h5 class="textTrigger" id="feature-1"><?php echo $l->t('Deep integration in your infrastructure');?></h5>
				<p><?php echo $l->t('Nextcloud offers LDAP/Active Directory, SAML and Kerboros authentication. It accesses data on NFS, (s)FTP, WebDAV, Windows Network Drive, Object Stores like SWIFT and many more.');?></p>
				<p><?php echo $l->t('Nextcloud systems offer logging and monitoring integration for SIEM tools like Splunk and monitoring appslike openNMS or Nagios. API\'s enable further integration, providing access to provisioning, sharing and other capabilities.');?></p>
                <p>
					<a class="button button--blue button--arrow button--large" href="<?php echo get_template_directory_uri(); ?>/assets/files/architecture-whitepaper.pdf" role="button"><?php echo $l->t('Architecture Whitepaper');?></a>
				</p>
	        </div>

	         <div class="right-text-grey" data-slide="2">
	            <h5 class="textTrigger" id="feature-2"><?php echo $l->t('Security features keep your data safe');?></h5>
	           <p><?php echo $l->t('Nextcloud supports two-factor authentication and Server Side Encryption, has brute force protection and features industry-standard security measures like CSP, SSC and password and session management.');?></p>
               <p><?php echo $l->t('Our development process aligns with industry standards such as ISO/IEC27001-2013 and related standards. Our successful Security Bug Bounty program offers security experts up to USD 5000 for finding and reporting security problems.');?></p>
               <p>
                  <a class="button button--blue button--arrow button--large" href="/secure" role="button"><?php echo $l->t('Learn more about security');?></a>
               </p>
	        </div>

	        <div class="right-text-grey" data-slide="3">
	            <h5 class="textTrigger" id="feature-3"><?php echo $l->t('IT stays in control');?></h5>
	            <p><?php echo $l->t('Our File Access Control app enables administrators to defining data access rules or triggering actions based on location, group membership, file type, tags and other properties.');?></p>
                <p><?php echo $l->t('Retention and file deletion can also be managed automatically, ensuring legal requirements can be enforced.');?></p>
                <p>
                   <a class="button button--blue button--arrow button--large" href="/workflow/" role="button"><?php echo $l->t('Learn more about Workflow');?></a>
                </p>
	        </div>

	        <div class="right-text-grey" data-slide="4">
	            <h5 class="textTrigger" id="feature-4"><?php echo $l->t('Easy access for users');?></h5>
	            <p><?php echo $l->t('Users can access and share their data on Nextcloud through sync clients for Windows, Linux and Mac as well as Android and IOS, providing a smooth experience no matter where data is located.');?></p>
                <p><?php echo $l->t('Nextcloud capabilities like Full Text Search, Audio/Video chat, Office Document Editing, sharing and more are at their fingertips.');?></p>
                <p>
                   <a class="button button--blue button--arrow button--large" href="/features" role="button"><?php echo $l->t('Learn more about features');?></a>
                </p>
	        </div>
        </div>
    </div>
</section>


<script>
// this is needed for the features/capabilities carousel!
	// Only make the scrolling effect for devices bigger than the 768px in width and 900px in height
	if ($(window).width() > 768 && $(window).height() >= 900) {
		var controller = new ScrollMagic.Controller();
		new ScrollMagic.Scene({triggerElement: '#pinContainer', triggerHook: 'onLeave', duration: 750, offset: -100})
			.addTo(controller)
			.setPin('#pinContainer')
			.on('enter leave', function (e) {
				$('.indicators').addClass('hidden');
			})
			.on('start end', function (e) {
				$('.indicators').removeClass('hidden');
			})
			.on('progress', function (e) {
				var progressNumber = e.progress.toFixed(4);
				var currentProgress = Math.round(10 * ((progressNumber / 10) * 3));
				$('#pinContainer section:lt(' + currentProgress + ')').addClass('hidden');
				$('#pinContainer section:gt(' + currentProgress + ')').addClass('hidden');
				$('#pinContainer section:nth(' + currentProgress + ')').removeClass('hidden');
				$('.indicators .btn_carousel').html('');
				$('.indicators .btn_carousel').removeClass('active');
				$('.indicators .btn_carousel:nth(' + currentProgress + ')').addClass('active');

				if (currentProgress > 0) {
					$('#pinContainer section:nth(' + currentProgress + ') .right-text-grey')
						.animate({
							'opacity': 1,
							'margin-top': '-25px'
						}, 750);
				}
			});
	} else {
		$('.indicators').addClass('hidden');
		$('section:nth(0)').removeClass('hidden')
		$('#pinContainer section .right-text-grey:nth(0)').css('opacity', '1.0');
		$('#pinContainer').css('width', 'inherit');
		$('#pinContainer').css('height', 'inherit');
	}
</script>
