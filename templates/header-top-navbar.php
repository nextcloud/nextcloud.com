<?php
$l = new L10N('header-navbar');
require get_template_directory().'/strings.php';
?>

<nav class="nav" id="nav">
<!-- To finish -->
	<div class="mobile-bg-container">
		<div class="mobile-bg"></div>
	</div>

	<div class="container">
		<div class="nav__bg-wrapper">
			<div class="nav__bg"></div>
		</div>
		<div class="brand">
			<a href="<?php echo home_url('homepage') ?>"><div class="logo"></div></a>
		</div>

		<button type="button" class="navbar-toggle collapsed" id="toggle">
			<div class="menu-animation" data-animation-path="img/menu/black/" data-anim-loop="false" data-name="menu-black" id="menu-black"></div>
		</button>
			<div class="nav__sections-wrapper">
			<ul class="nav__sections">

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('News');?></a>
					<ul class="nav__links">
						<li class="nav__item"><a href="<?php echo home_url('news') ?>"><?php echo $l->t('Blog');?></a></li>
						<li class="nav__item"><a href="https://newsletter.nextcloud.com"><?php echo $l->t('Newsletter');?></a></li>
						<li class="nav__item"><a href="https://twitter.com/nextclouders"><?php echo $l->t('Twitter');?></a></li>
						<li class="nav__item"><a href="https://www.facebook.com/Nextcloud-1032807203462807/"><?php echo $l->t('Facebook');?></a></li>
						<li class="nav__item"><a href="https://www.linkedin.com/company/10827569/"><?php echo $l->t('LinkedIn');?></a></li>
						<li class="nav__item"><a href="https://plus.google.com/b/104036748063781940910/104036748063781940910/about"><?php echo $l->t('Google+');?></a></li>
					</ul>
				</li>

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('Features');?></a>
					<ul class="nav__links ">
						<li class="nav__item"><a href="<?php echo home_url('features') ?>"><?php echo $l->t('Overview');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('secure') ?>"><?php echo $l->t('Security');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('sharing') ?>"><?php echo $l->t('Sharing');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('clients') ?>"><?php echo $l->t('Clients');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('workflow') ?>"><?php echo $l->t('Workflow');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('storage') ?>"><?php echo $l->t('Storage');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('monitoring') ?>"><?php echo $l->t('Monitoring');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('usermanagement') ?>"><?php echo $l->t('User management');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('collabora') ?>"><?php echo $l->t('Online office');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('webrtc') ?>"><?php echo $l->t('Video chat');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('outlook') ?>"><?php echo $l->t('Outlook integration');?></a></li>
					</ul>
				</li>

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('Enterprise');?></a>
					<ul class="nav__links">
						<li class="nav__item"><a href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('Overview');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('pricing') ?>"><?php echo $l->t('Pricing');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('buy') ?>"><?php echo $l->t('Get an offer');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('order') ?>"><?php echo $l->t('Order online');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('migration') ?>"><?php echo $l->t('Migration');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('compare') ?>"><?php echo $l->t('Compare with others');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('globalscale') ?>"><?php echo $l->t('Global Scale');?></a></li>
					</ul>
				</li>

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('Resources');?></a>
					<ul class="nav__links">
						<li class="nav__item"><a href="<?php echo home_url('support') ?>"><?php echo $l->t('Support options');?></a></li>
						<li class="nav__item"><a href="https://apps.nextcloud.com"><?php echo $l->t('App Store');?></a></li>
						<li class="nav__item"><a href="<?php echo $DOCUMENTATION_USER; ?>"><?php echo $l->t('User Documentation');?></a></li>
						<li class="nav__item"><a href="<?php echo $DOCUMENTATION_ADMIN; ?>"><?php echo $l->t('Admin Documentation');?></a></li>
						<li class="nav__item"><a href="https://help.nextcloud.com"><?php echo $l->t('Help on the forums');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('security') ?>"><?php echo $l->t('Security information');?></a></li>
					</ul>
				</li>

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('Get involved');?></a>
					<ul class="nav__links">
						<li class="nav__item"><a href="<?php echo home_url('contribute') ?>"><?php echo $l->t('How to contribute');?></a></li>
						<li class="nav__item"><a href="https://github.com/nextcloud"><?php echo $l->t('Code on GitHub');?></a></li>
						<li class="nav__item"><a href="https://github.com/nextcloud/server/issues/new"><?php echo $l->t('Report a bug');?></a></li>
						<li class="nav__item"><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>"><?php echo $l->t('Developer Documentation');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('code-of-conduct') ?>"><?php echo $l->t('Code of Conduct');?></a></li>
					</ul>
				</li>

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('About');?></a>
					<ul class="nav__links">
						<li class="nav__item"><a href="<?php echo home_url('about') ?>"><?php echo $l->t('About us');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('team') ?>"><?php echo $l->t('Team');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('contributors') ?>"><?php echo $l->t('Community');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('partners') ?>"><?php echo $l->t('Partners');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('events') ?>"><?php echo $l->t('Events');?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('jobs') ?>"><?php echo $l->t('Jobs');?></a></li>
					</ul>
				</li>

			</ul>
				<ul class="right-buttons">
					<li class="ghost-btn"><a href="https://demo.nextcloud.com/" class="nav__label"><?php echo $l->t('Demo');?></a></li>
					<li class="ghost-btn"><a href="<?php echo home_url('install') ?>" class="nav__label"><?php echo $l->t('Download');?></a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
