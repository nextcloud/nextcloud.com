<?php $l = new L10N('header-navbar');
require get_template_directory() . '/strings.php';
?>
<!-- <meta http-equiv="refresh" content="60"> -->

<!--<script>
require(["require.config"], function() {
	require(["jquery"], ($) => {
		/**
		 * Event date in UTC, modify the string!!
		 */
		const eventDateUTC =  new Date('06 July 2021 10:59:59');

		const updateCounter = function() {
			// Get time left
			timeLeft = getTimeLeft(eventDateUTC)

			// Update the template
			$('.hours').text(timeLeft.hours)
			$('.minutes').text(timeLeft.minutes)
			$('.seconds').text(timeLeft.seconds)
			$('.days').text(timeLeft.days)
			document.getElementById("clockday").innerHTML = timeLeft.days
			document.getElementById("clockhour").innerHTML = timeLeft.hours
			document.getElementById("clockmin").innerHTML = timeLeft.minutes
			document.getElementById("clocksec").innerHTML = timeLeft.seconds
		}

		/**
		 * Gets the time left from the event date to
		 */
		const getTimeLeft = function(eventDateUTC) {

			const now = new Date

			// Time left in milliseconds (UTC)
			const timeLeftUTC = eventDateUTC - now

			// Offset to local timezone in milliseconds
			let offset = now.getTimezoneOffset() * 60000

			// Time left in milliseconds
			const timeLeft = timeLeftUTC - offset

			if (Math.floor(timeLeft / 1000) < 1) {
				clearInterval(updateCounter, 1000)
				document.getElementById("clock").innerHTML = "Announcement"
				return
			}

			// Get days left
			const daysLeft = format(Math.floor(timeLeft / 86400000))

			// Get hours left
			let millisecondsLeft = timeLeft % 86400000
			const hoursLeft = format(Math.floor(millisecondsLeft / 3600000))

			// Get minutes left
			millisecondsLeft = millisecondsLeft % 3600000
			const minutesLeft = format(Math.floor(millisecondsLeft / 60000))

			// get seconds left
			millisecondsLeft = millisecondsLeft % 60000
			const secondsLeft = format(Math.floor(millisecondsLeft / 1000))

			return {
				days: daysLeft,
				hours: hoursLeft,
				minutes: minutesLeft,
				seconds: secondsLeft,
			}
		}

		/**
		 * Add zeros if needed and stringifies everything
		 */
		const format = (number) => {
			if (number < 10) {
				return `0${number}`
			} else return number.toString()
		}

		// Start the counter
		$(document).ready(function(){
			setInterval(updateCounter, 1000)
		})

		// Clear the interval
		$(window).on('unload', () => {
			clearInterval(updateCounter, 1000)
		})
	})
});

</script>-->

<nav class="nav" id="nav">
<!-- To finish -->
	<div class="mobile-bg-container">
		<div class="mobile-bg"></div>
	</div>

	<div class="container">
    <a class="storage-insider" target="_blank" href="https://nextcloud.com/blog/cloudcomputing-insider-award-vote-now/">
        <span class="si-icon"><i class="fa-bullseye fa"></i></span>
        <span class="si-title">Vote for us!</span>
        <span class="si-par">Support Nextcloud</span>
    </a>
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
                            <a href="<?php echo home_url('hub');?>">
                            <div class="nav__logo">
                                <?php echo file_get_contents(__DIR__."/../assets/img/logo/nextcloud_logo_only.svg");?>
                            </div>
                            <div class="nav__text"><?php echo $l->t('<strong>Nextcloud Hub</strong><br><small>Content collaboration platform</small>');?></div>
                        </a>
                        </li>
                        <ul>
                            <li class="nav__item">
                                <a href="<?php echo home_url('files');?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(__DIR__."/../assets/img/logo/Nextcloud-Files.svg");?>
                                </div>
                                <div class="nav__text"><?php echo $l->t('<strong>Nextcloud Files</strong><br><small>File Sync and Share</small>');?></div>
                            </a>
                            </li>
                            <li class="nav__item">
                                <a href="<?php echo home_url('talk');?>">
                                    <div class="nav__logo">
                                        <?php echo file_get_contents(__DIR__."/../assets/img/logo/Nextcloud-Talk.svg");?>
                                    </div>
                                    <div class="nav__text">
                                        <?php echo $l->t('<strong>Nextcloud Talk</strong><br><small>Calls, chat and web meetings</small>'); ?>
                                    </div>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="<?php echo home_url('groupware'); ?>">
                                    <div class="nav__logo">
                                        <?php echo file_get_contents(__DIR__."/../assets/img/logo/Nextcloud-Groupware.svg");?>
                                    </div>
                                    <div class="nav__text">
                                        <?php echo $l->t('<strong>Nextcloud Groupware</strong><br><small>Calendar, Contacts & Mail</small>'); ?>
                                    </div>
                                </a>
                            </li>
                        </ul>
						<li class="nav__item">
                            <a href="<?php echo home_url('athome'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(__DIR__."/../assets/img/logo/Nextcloud-Home.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Nextcloud at home</strong><br><small>For families, students & you</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url('enterprise'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(__DIR__."/../assets/img/icons/enterprise.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Nextcloud Enterprise</strong><br><small>For mission-critical use</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url('industries'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(__DIR__."/../assets/img/icons/industries.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Industry solutions</strong><br><small>Optimized for your enterprise</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <hr>
                        <li class="nav__item"><a href="<?php echo home_url('outlook'); ?>"><?php echo $l->t('Outlook integration'); ?></a></li>
                        <li class="nav__item"><a href="<?php echo home_url('collaboraonline'); ?>"><?php echo $l->t('Collabora online office'); ?></a></li>
                        <li class="nav__item"><a href="<?php echo home_url('onlyoffice'); ?>"><?php echo $l->t('ONLYOFFICE online office'); ?></a></li>
                    </ul>
				</li>

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('Support'); ?></a>
					<ul class="nav__links">
                        <li class="nav__item"><a href="https://portal.nextcloud.com"><?php echo $l->t('Enterprise support'); ?></a></li>
                        <li class="nav__item"><a href="https://help.nextcloud.com"><?php echo $l->t('Community support'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('faq'); ?>"><?php echo $l->t('FAQ'); ?></a></li>
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
						<li class="nav__item"><a href="https://github.com/nextcloud/server/issues/new/choose"><?php echo $l->t('Report a bug'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('developer'); ?>"><?php echo $l->t('Developer program'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('code-of-conduct'); ?>"><?php echo $l->t('Code of Conduct'); ?></a></li>
 						<li class="nav__item"><a href="<?php echo home_url('include'); ?>"><?php echo $l->t('Nextcloud Include'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('security'); ?>"><?php echo $l->t('Security information'); ?></a></li>
					</ul>
				</li>

				<li class="nav__section"><a class="nav__label"><?php echo $l->t('About'); ?></a>
					<ul class="nav__links">
						<li class="nav__item"><a href="<?php echo home_url('about'); ?>"><?php echo $l->t('About us'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('blog'); ?>"><?php echo $l->t('Blog'); ?></a></li>
 						<li class="nav__item"><a href="<?php echo home_url('podcast'); ?>"><?php echo $l->t('Nextcloud Podcast'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('secure'); ?>"><?php echo $l->t('Security'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('team'); ?>"><?php echo $l->t('Team'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('partners'); ?>"><?php echo $l->t('Partners'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('events'); ?>"><?php echo $l->t('Events'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('jobs'); ?>"><?php echo $l->t('Jobs'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('compare'); ?>"><?php echo $l->t('Comparison with others'); ?></a></li>
						<li class="nav__item"><a href="<?php echo home_url('search'); ?>"><?php echo $l->t('Search our site'); ?></a></li>
					</ul>
				</li>
            </ul>
            <ul class="right-buttons">
                <li class="nav__section">
                <a class="nav__label get-nc-button button"><?php echo $l->t('Get Nextcloud'); ?></a>
                <a class="nav__label get-nc-nobutton"><?php echo $l->t('Get Nextcloud'); ?></a>
                    <ul class="nav__links ">
                        <li class="nav__item">
                            <a href="<?php echo home_url('enterprise'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(__DIR__."/../assets/img/icons/enterprise.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Enterprise solution</strong><br><small>For mission-critical use</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url('install/#install-clients'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(__DIR__."/../assets/img/icons/phone.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Desktop & mobile apps</strong><br><small>Windows, macOS, Linux, Android, iOS, …</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url('signup'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(__DIR__."/../assets/img/icons/signup.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Sign up now</strong><br><small>Get a free account at a provider</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="https://try.nextcloud.com/">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(__DIR__."/../assets/img/icons/desktop.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Try Nextcloud</strong><br><small>Try Nextcloud on our live demo</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url('install/#instructions-server'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(__DIR__."/../assets/img/icons/server.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Server packages</strong><br><small>For self-hosting on your server</small>'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo home_url('devices'); ?>">
                                <div class="nav__logo">
                                    <?php echo file_get_contents(__DIR__."/../assets/img/icons/devices.svg");?>
                                </div>
                                <div class="nav__text">
                                    <?php echo $l->t('<strong>Devices</strong><br><small>Buy hardware with Nextcloud</small>'); ?>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ghost-btn">
                    <a href="<?php echo home_url('trial'); ?>" class="nav__label">
                        <?php echo $l->t('Enterprise trial'); ?>
                    </a>
                </li>
                <li class="ghost-btn no-underline">
                    <a href="<?php echo home_url('contact'); ?>" class="nav__label top-navbar-svg"><?php echo file_get_contents(__DIR__."/../assets/img/icons/mail.svg");?></a>
                </li>
                <li class="nav__section"><a class="nav__label top-navbar-svg lang-icon"><?php echo file_get_contents(__DIR__."/../assets/img/icons/language.svg");?></a>
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
                        <li class="nav__item nav__item__language">
                            <a href="<?php echo site_url();?>/fr_FR/<?php echo $pagename;?>">
															<span class="flag-icon flag-icon-fr"></span>
															Français
														</a>
                        </li>
                    </ul>
<!--                     <li class="ghost-btn clock">
                        <a href="<?php echo home_url('countdown'); ?>" class="nav__label">

                            <span id="clockday"></span><span id="clockhour"></span><span id="clockmin"></span><span id="clocksec"></span>
                        </a>
                    </li>-->
                </li>
            </ul>
			</div>
		</div>
	</div>
</nav>

<script>
    var selector = document.getElementById('nav');
    selector.style.opacity = 0;
</script>

<style>
.no-js body nav {
  opacity: 1; }
</style>
