<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/design.css?v=1" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer"])
	});
</script>
</head>

<div class="background design-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Contribute to Nextcloud design');?></h1>
				<h2><?php echo $l->t('Help make privacy easy to use');?></p>
			</div>
		</div>
	</div>
</div>


<section class="section--video">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div data-type="youtube" data-video-id="5SAB0CY-iZ0"></div>
			<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/5SAB0CY-iZ0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
</div>
</section>

<section class="section--content">
<div class="container">

	<div class="row">
		<div class="col-md-12">

			<p><?php echo $l->t('Design at Nextcloud is about usability, simplicity and accessibility – so that everyone is in control of their data. At Nextcloud we make sure that our apps are universally accessible and easy to use by following a few basic principles:');?></p>
			<ul>
				<li><?php echo $l->t('Software should work. It is better to not have a feature instead of having one that works poorly.');?></li>
				<li><?php echo $l->t('Software should be easy to use. Show only the most important elements.');?></li>
				<li><?php echo $l->t('Software should get out of the way. Do things automatically instead of offering configuration options. When people ask for a setting, find out what the root of the problem is and fix that instead.');?></li>
				<li><?php echo $l->t('Software should be usable everywhere. Make sure to test in different devices and browsers.');?></li>
				<li><?php echo $l->t('Software should be usable by everyone. Find out more below in the accessibility section.');?></li>
			</ul>

		</div>  
	</div>

	<div class="row">
		<div class="col-md-12">

			<h3 class="section--paragraph__title"><?php echo $l->t('Develop with Nextcloud design in mind');?></h3>
			
			<p><?php echo $l->t('We are working on updating our design guidelines which will be linked here shortly! These will cover web apps as well as mobile and desktop apps.');?></p>

			<p><?php echo $l->t('Most Nextcloud web apps are written in Vue.js – to help with that you can use our <a href="https://github.com/nextcloud/nextcloud-vue" target="_blank">Vue components</a> which automatically give you lots of benefits like the Nextcloud style, accessibility, and uniformity with other apps. If you are not using Vue.js in your app, you may use the <a href="https://docs.nextcloud.com/server/latest/developer_manual/design/index.html" target="_blank">general HTML/CSS guidelines </a>– although we do recommend to use Vue.js with the components.');?></p>

			<p><?php echo $l->t('Mobile and desktop apps follow their respective operating system guidelines, like Material Design or Apple Human Interface Guidelines – more details in the design guidelines.');?></p>
		
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">

			<h3 class="section--paragraph__title"><?php echo $l->t('Contribute to design');?></h3>
			
			<p><?php echo $l->t('<strong>Picking what to work on:</strong> The design process is pretty flexible and open. Anyone can contribute to Nextcloud design through issues in the <a href="https://github.com/nextcloud/" target="_blank">Nextcloud organisation on Github</a>. Each app has its own repository where issues are tracked.');?></p>
			<ul>
				<li><?php echo $l->t('We track design and interface issues through the <a href="https://github.com/nextcloud/server/labels/design" target="_blank">design label on our issue tracker</a>. (If you have a GitHub account, you can see the <a href="https://github.com/issues?q=is%3Aopen+label%3Adesign+user%3Anextcloud" target="_blank">design issues across repositories too</a>).');?></li>
				<li><?php echo $l->t('If you are a new contributor looking to get involved, check through the <a href="https://github.com/nextcloud/server/issues?q=is%3Aopen+label%3A%22good+first+issue%22+label%3Adesign" target="_blank">good first issues label</a>! 🎉');?></li>
			</ul>
			
			<p><?php echo $l->t('<strong>Designing and specifying a solution:</strong> When you are designing a solution, keep the following things in mind:');?></p>
			<ul>
				<li><?php echo $l->t('Start out by reviewing existing solutions, and other software people use. This gives a good understanding of what people expect. Best take screenshots so you can include them in the proposal for others to see.');?></li>
				<li><?php echo $l->t('Check for consistency with existing Nextcloud apps, components and interaction design.');?></li>
				<li><?php echo $l->t('Write up which problems your solution solves and how it would behave in different scenarios.');?></li>
				<li><?php echo $l->t('Ideally do a mockup to support the specification. We generally use the open source mockup software <a href="https://penpot.app/" target="_blank">Penpot</a>, but you can use any method that feels comfortable. Even Inkscape or just a pen and paper mockup would work.');?></li>
			</ul>

			<p><?php echo $l->t('<strong>Communicating it with others on GitHub:</strong> When you are happy with the specification and supporting material, you can open an issue in the relevant repository. Make sure to include the screenshots of existing solutions, the specification text, and any mockups you have to make it understandable.');?></p>
			<p><?php echo $l->t('Good examples of issues are our current redesign of the tray menu of the desktop app:');?></p>
			<ul>
				<li><?php echo $l->t('<a href="https://github.com/nextcloud/desktop/issues/877" target="_blank">This issue</a> has examples of other apps, some simple mockups, and specifications about the design. In the discussions in the comments there are updates to the design as well.');?></li>
				<li><?php echo $l->t('<a href="https://github.com/nextcloud/desktop/pull/1565" target="_blank">This pull request</a> by a developer has the implementation of that issue, the changes they made, and more design discussions and adjustments.');?></li>
			</ul>		

		</div>
	</div>


	<div class="row">
		<div class="col-md-12">

			<h3 class="section--paragraph__title"><?php echo $l->t('Design team');?></h3>
			
			<p><?php echo $l->t('There is an <strong>@nextcloud/designers group</strong> on GitHub. If you need design feedback on issues or pull requests, just mention @nextcloud/designers to notify all designers (note this only works when you are part of the Nextcloud organization on GitHub). Let us know if you’d like to join this group and help out!');?></p>
			
			<p><?php echo $l->t('We have a <a href="https://cloud.nextcloud.com/call/gqff69i8" target="_blank">Design team public Talk channel</a> where we discuss design and help people with design feedback. Come join if you are interested in contributing to design or need questions answered! We also have a weekly design call at 14:00 CET every Tuesday where we review existing Nextcloud apps. If you would like to have your app reviewed by the design team, just ask in the channel.');?></p>

		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			
			<h3 class="section--paragraph__title"><?php echo $l->t('Accessibility');?></h3>
		
			<p><?php echo $l->t('Universal access is very important to us. We follow web standards and check to make everything usable also with keyboard and assistive software such as screen readers. We aim to be compliant with the <a href="https://www.w3.org/WAI/standards-guidelines/wcag/" target="_blank">Web Content Accessibility Guidelines 2.1</a> on AA level, with the high contrast theme even on AAA level. We also follow the German BITV 2.0 guidelines.');?></p>
			
			<p><?php echo $l->t('If you find any accessibility issues, don’t hesitate to report them on our <a href="https://github.com/nextcloud/server/issues/" target="_blank">issue tracker</a>.');?></p>

			<p><?php echo $l->t('Find more info on the accessibility of Nextcloud in the <a href="https://docs.nextcloud.com/server/latest/user_manual/en/universal_access.html" target="_blank">user manual</a>, and if you want to learn more about accessibility, check out <a href="https://www.a11yproject.com/" target="_blank">The A11Y Project</a>');?></p>
		
		</div>
	</div>

</div>

</section>


