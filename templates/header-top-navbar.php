<?php $l = new L10N('header-navbar');
require get_template_directory() . '/strings.php';
?>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

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
			<a href="<?php echo home_url('homepage');?>">
				<div class="logo"></div></a>
		</div>
		<button type="button" class="navbar-toggle collapsed" id="toggle">
			<div class="menu-animation" data-animation-path="img/menu/black/" data-anim-loop="false" data-name="menu-black" id="menu-black"></div>
		</button>
			<div class="nav__sections-wrapper">
			<ul class="nav__sections">

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('Products');?></a>
					<ul class="nav__links ">
						<li class="nav__item">
                            <a href="<?php echo home_url('files');?>">
                            <div class="nav__logo">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/logo/Nextcloud-Files.svg");?>
                            </div>
                            <div class="nav__text"><?php echo $l->t('<strong>Nextcloud Files</strong><br><small>File Sync and Share</small>');?></div>
                        </a>
                        </li>
						<li class="nav__item">
							<a href="<?php echo home_url('talk');?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(get_template_directory()."/assets/img/logo/Nextcloud-Talk.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Nextcloud Talk</strong><br><small>Calls, chat and web meetings</small>'); ?>
                                </div>
                            </a>
                        </li>
						<li class="nav__item">
                            <a href="<?php echo home_url('groupware'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(get_template_directory()."/assets/img/logo/Nextcloud-Groupware.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Nextcloud Groupware</strong><br><small>Calendar, Contacts & Mail</small>'); ?>
                                </div>
                            </a>
                        </li>
						<li class="nav__item">
                            <a href="<?php echo home_url('athome'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(get_template_directory()."/assets/img/logo/Nextcloud-Home.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Nextcloud at home</strong><br><small>For families, students & you</small>'); ?>
                                </div>
                            </a>
                        </li>
                    </ul>
				</li>

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('Support'); ?></a>
					<ul class="nav__links">
                        <li class="nav__item"><a href="https://portal.nextcloud.com"><?php echo $l->t('Nextcloud Support'); ?></a></li>
                        <li class="nav__item"><a href="https://help.nextcloud.com"><?php echo $l->t('Community support'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('pricing'); ?>#faq"><?php echo $l->t('FAQ'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('pricing'); ?>"><?php echo $l->t('Pricing'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('support'); ?>"><?php echo $l->t('Documentation'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('whitepapers'); ?>"><?php echo $l->t('White papers'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('migration'); ?>"><?php echo $l->t('Migration'); ?></a></li>
						<li class="nav__item"><a href="https://apps.nextcloud.com"><?php echo $l->t('App Store'); ?></a></li>
					</ul>
				</li>

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('Community'); ?></a>
					<ul class="nav__links">
						<li class="nav__item"><a href="<?php echo home_url('contribute'); ?>"><?php echo $l->t('How to contribute'); ?></a></li>
						<li class="nav__item"><a href="https://github.com/nextcloud"><?php echo $l->t('Code on GitHub'); ?></a></li>
<!-- 						<li class="nav__item"><a href="<?php echo home_url('news'); ?>"><?php echo $l->t('Contributor blogs'); ?></a></li> -->
						<li class="nav__item"><a href="https://github.com/nextcloud/server/issues/new"><?php echo $l->t('Report a bug'); ?></a></li>
						<li class="nav__item"><a href="<?php echo $DOCUMENTATION_DEVELOPER;?>"><?php echo $l->t('Developer Docs'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('code-of-conduct'); ?>"><?php echo $l->t('Code of Conduct'); ?></a></li>
<!--						<li class="nav__item"><a href="<?php echo home_url('contributors'); ?>"><?php echo $l->t('Community members'); ?></a></li>-->
						<li class="nav__item"><a href="<?php echo home_url('security'); ?>"><?php echo $l->t('Security information'); ?></a></li>
					</ul>
				</li>

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('About'); ?></a>
					<ul class="nav__links">
						<li class="nav__item"><a href="<?php echo home_url('about'); ?>"><?php echo $l->t('About us'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('blog'); ?>"><?php echo $l->t('Blog'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('secure'); ?>"><?php echo $l->t('Security'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('team'); ?>"><?php echo $l->t('Team'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('partners'); ?>"><?php echo $l->t('Partners'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('events'); ?>"><?php echo $l->t('Events'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('jobs'); ?>"><?php echo $l->t('Jobs'); ?></a></li>
					</ul>
				</li>
            </ul>
            <ul class="right-buttons">
                <li class="nav__section"><a class="nav__label"><?php echo $l->t('Get Nextcloud'); ?></a>
                    <ul class="nav__links ">
                        <li class="nav__item">
                            <a href="<?php echo home_url('install'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/download.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Download</strong><br><small>For self-hosting on your server</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url('signup'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/signup.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Sign up now</strong><br><small>Get a free account at a provider</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url('devices'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/devices.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Devices</strong><br><small>Buy hardware with Nextcloud</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url('enterprise'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/enterprise.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Enterprise Solution</strong><br><small>For mission-critical use</small>'); ?>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ghost-btn">
                    <a href="https://demo.nextcloud.com/" class="nav__label">
                        <?php echo $l->t('Demo'); ?>
                    </a>
                </li>
                <li class="ghost-btn">
                    <a href="<?php echo home_url('gdpr'); ?>" class="nav__label">
                        <?php echo $l->t('GDPR'); ?>
                    </a>
                </li>
                <li class="ghost-btn no-underline">
                    <a href="<?php echo home_url('contact'); ?>" class="nav__label top-navbar-svg"><?php echo file_get_contents(get_template_directory()."/assets/img/icons/mail.svg");?></a>
                </li>
                <li class="nav__section"><a class="nav__label top-navbar-svg lang-icon"><?php echo file_get_contents(get_template_directory()."/assets/img/icons/language.svg");?></a>
                    <ul class="nav__links">
                        <li class="nav__item nav__item__language">
                            <a href="<?php echo site_url();?>/de/<?php echo $pagename;?>">
															<span class="flag-icon flag-icon-de"></span>
															Deutsch
														</a>
                        </li>
                        <li class="nav__item nav__item__language">
                            <a href="<?php echo site_url();?>/<?php echo $pagename;?>">
															<span class="flag-icon flag-icon-us"></span>
															English
														</a>
                        </li>
<!--                        <li class="nav__item nav__item__language">
                            <a href="<?php echo site_url();?>/fr_FR/<?php echo $pagename;?>">
															<span class="flag-icon flag-icon-fr"></span>
															Français
														</a>
                        </li>-->
                    </ul>
                </li>
            </ul>
			</div>
		</div>
	</div>
</nav>
