<head>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/support.css" rel="stylesheet">
</head>
<div class="background support-background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1><?php echo $l->t('Find answers to your questions');?></h1>
			<h2><?php echo $l->t('We have documentation, community help and enterprise support.');?></h2>
		</div>
	</div>
</div>

<div class="container">
	<h2>Documentation</h2>
	<p><?php echo $l->t('The Nextcloud documentation:');?></p>
	<ul>
		<li><a href="<?php echo $DOCUMENTATION_ADMIN; ?>"><?php echo $l->t('Admin manual');?></a></li>
		<li><a href="<?php echo $DOCUMENTATION_USER; ?>"><?php echo $l->t('User manual');?></a></li>
		<li><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>"><?php echo $l->t('Developer manual');?></a></li>
	</ul>
	<p><?php echo $l->t('Use and enjoy the many apps from our built in app store, or find even more on <a href="https://apps.nextcloud.com" target="_blank">the web app store</a>. Find');?> <a href="<?php echo $DOCUMENTATION_ADMIN; ?>installation/apps_management_installation.html"><?php echo $l->t('documentation on handling Apps here</a>.');?></p>
	<h2>Help from others</h2>
	<p><?php echo $l->t('You can ask for help in our community support channels:');?></p>
		<ul>
			<li><?php echo $l->t('<a href="https://help.nextcloud.com/categories" target="_blank">the Nextcloud Forums</a>');?></li>
			<li><?php echo $l->t('<a href="irc://#nextcloud@freenode.net" target="_blank">the Nextcloud IRC chat channel</a> on freenode.net, also accessible via <a href="https://webchat.freenode.net/?channels=nextcloud" target="_blank">webchat</a>');?></li>
			<li><?php echo $l->t('You can ask over our social media, including in the <a href="https://plus.google.com/u/0/communities/103772002345255844369" target="_blank">Nextcloud Google Plus community</a>, the <a href="https://www.facebook.com/Nextcloud-1032807203462807/" target="_blank">Facebook page</a> or on <a href="https://twitter.com/search?q=%23nextcloud&src=typd" target="_blank">Twitter</a>');?></li> 
			<li><?php echo $l->t('Finally, you could report a issue at our <a href="https://github.com/nextcloud/server/blob/master/CONTRIBUTING.md" target="_blank">bug trackers</a> if you think you found a bug in Nextcloud itself');?></li>
		</ul>
		<p><?php echo $l->t('Please understand that all these channels essentially consist of users like you helping each other out. Consider helping others out where you can, to contribute back for the help you get. This is the only way to keep a community like Nextcloud healthy and sustainable!');?></p>
		<h2><?php echo $l->t('Enterprise support');?></h2>
		<p><?php echo $l->t('If you run Nextcloud in a mission critical environment with large numbers of users and big amounts of data and need the certainty of support from the experts behind the Nextcloud technology, a <a href="/enterprise/" target="_blank">Enterprise Subscription from Nextcloud</a> is available with email and phone support.');?></p>

	<div class="wrap pad-bottom">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
					<h2><?php echo $l->t('Subscribe to our newsletter');?></h2>
					<p><?php echo $l->t('Stay up to date with Nextcloud news - future plans for releases, events and development are covered monthly in our news letter.');?></p>
				<a href="https://newsletter.nextcloud.com/?p=subscribe&id=1" class="btn btn-block btn-primary btn-lg join-button"><?php echo $l->t('Subscribe now!');?></a><br />
			</div>
		</div>
	</div>
</div>

