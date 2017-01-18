<link href="<?php echo get_template_directory_uri(); ?>/assets/css/contribute.css" rel="stylesheet">

<div class="background contribute-background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1><?php echo $l->t('Get involved!');?></h1>
			<h2><?php echo $l->t('Nextcloud is an <strong>open source project</strong> and an open company. That means it is <em>yours</em> to make a difference!');?></h2>
		</div>
	</div>
</div>

<section class="section--contribute">
	<div class="col-md-8 col-md-offset-2">
		<p class="section--paragraph"><?php echo $l->t('We invite you to join our <a class="hyperlink" href="https://github.com/nextcloud" target="_blank">development efforts on GitHub</a>, the conversations on <a class="hyperlink" href="https://help.nextcloud.com" target="_blank">our forums</a> and our <a class="hyperlink" href="irc://#nextcloud-dev@freenode.net" target="_blank">IRC channel on freenode</a>, also accessible via <a class="hyperlink" href="https://webchat.freenode.net/?channels=nextcloud-dev" target="_blank">webchat</a>. Interact with us on our <a class="hyperlink" href="/news">blogs and social media channels</a>, too!');?></p>
		<p class="section--paragraph"><?php echo $l->t('Do you want to get a certain improvement in Nextcloud? Did you find a problem?
		Do you want to help translate, promote or document Nextcloud?');?></p>
		<h1 class="section--heading-1"><?php echo $l->t('Become part of the Nextcloud Community.');?></h1>
		<div class="row">
			<div class="col-md-6">
				<h3><?php echo $l->t('Improve Nextcloud');?></h3>
				<ul>
					<li><?php echo $l->t('Develop your own Nextcloud Server app');?> (<a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>app"><?php echo $l->t('app development documentation');?></a>)</li>
					<li><?php echo $l->t('Get a bug fixed');?> (<a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>bugtracker"><?php echo $l->t('bugtracker documentation</a> and');?> <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>general"><?php echo $l->t('general guidelines and setup');?></a>)</li>
					<li><?php echo $l->t('Improve the Nextcloud Server');?> (<a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>core"><?php echo $l->t('core development documentation</a>)');?></li>
					<li><?php echo $l->t('Learn to write Nextcloud code. (Try your hands on a <a href="https://github.com/nextcloud/server/issues?labels=Starter+Issue&state=open" target="_blank">Starter Issue</a>');?></li>
				</ul>
				<p><?php echo $l->t('Talk to us <a href="irc://#nextcloud-dev@freenode.net">on IRC</a>, also accessible via <a href="https://webchat.freenode.net/?channels=nextcloud-dev" target="_blank">webchat</a>, and on our
				<a href="https://help.nextcloud.com" target="_blank">forum</a>! We look forward to your code and thoughts.');?></p>
				<p><?php echo $l->t('Note that <a href="/jobs">we are hiring</a>. We look especially for people who want to turn their passion into their job! When possible, we hire people from our active community base or from the wider open source community.');?></p>
			</div>
			<div class="col-md-6">
				<h3><?php echo $l->t('<i class="fa-refresh"></i>&nbsp;&nbsp;Test Nextcloud');?></h3>
				<p><?php echo $l->t('Testing upcoming Nextcloud Server releases is the best way of making sure the new release can do what you need it
					to do. And of course, only if you report a problem to us we know about it and can fix it! If you have a bug to report,
					find the <a href="ownCloud vs Nextcloud">issue submission page</a>.');?></p>
				<h3><?php echo $l->t('<i class="fa-pencil"></i>&nbsp;&nbsp;Design Nextcloud');?></h3>
				<p><?php echo $l->t('Help out with Nextcloud user interaction design or graphic design! Get involved on <a href="design/">the design page</a>!');?></p>
				<h3><?php echo $l->t('<i class="fa-money"></i>&nbsp;&nbsp;Support Nextcloud development with bounties');?></h3>
				<p><?php echo $l->t('Support Nextcloud development by offering some money on features you would like to have! <a href="https://www.bountysource.com/teams/nextcloud" target="_blank">Check our bountysource page</a>!');?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h3><?php echo $l->t('<i class="fa-book"></i>&nbsp;&nbsp;Answer questions about Nextcloud use and development');?></h3>
				<p><?php echo $l->t('Help answer questions users and developers have about Nextcloud!');?></p>
				<ul>
					<li><?php echo $l->t('Join the <a href="https://help.nextcloud.com">Nextcloud forums</a>!');?></li>
					<li><?php echo $l->t('Answer Nextcloud development questions on <a href="https://stackoverflow.com/questions/tagged/nextcloud" target="_blank">Stack Overflow</a> and other places online.');?></li>
		<!--         <li><?php echo $l->t('Answer Nextcloud user questions on <a href="https://mailman.nextcloud.org/mailman/listinfo/user">the Nextcloud user mailing list</a>');?></li> -->
				</ul>
			</div>
		</div>
		<br>
		<p><?php echo $l->t('Please be considerate of our <a href="/community/code-of-conduct/">code of conduct</a>. We want to provide a positive and enjoyable environment for everybody.');?></p>
		<h1><?php echo $l->t('Let\'s make Nextcloud Rock!');?></h1>
		<p><?php echo $l->t('If you have any questions, <a href="/contact/">we are happy to help you</a>.');?></p>
	</div>
</section>