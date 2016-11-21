<nav class="nav" id="nav">
	<div class="container">
		<div class="nav__bg-wrapper">
			<div class="nav__bg"></div>
		</div>			
		<div class="brand">
			<a href="<?php echo home_url('homepage') ?>"><div class="logo"></div></a>
		</div>
 
		<button type="button" class="navbar-toggle collapsed" id="toggle">
			<div class="menu-animation" data-animation-path="img/menu/black/" data-anim-loop="false" data-name="menu-black" id="menu-black"</div>
		</button>

		<div class="mobile-bg"></div>
			<div class="nav__sections-wrapper">
			<ul class="nav__sections">
				<li class="nav__section"><a class="nav__label">About us</a>			
						  <ul class="nav__links">
							  <li class="nav__item"><a href="<?php echo home_url('about') ?>">Who we are</a></li>
							  <li class="nav__item"><a href="<?php echo home_url('contributors') ?>">Community</a></li>
							  <li class="nav__item"><a href="<?php echo home_url('team') ?>">Team</a></li>
							  <li class="nav__item"><a href="<?php echo home_url('jobs') ?>">Jobs</a></li>
							  <li class="nav__item"><a href="<?php echo home_url('code-on-conduct') ?>">Code of Conduct</a></li>
						  </ul>
				</li>

				<li class="nav__section"><a class="nav__label">News</a>
					  <ul class="nav__links">
						  <li class="nav__item"><a href="<?php echo home_url('news') ?>">Blog</a></li>
						  <li class="nav__item"><a href="https://newsletter.nextcloud.com">Newsletter</a></li>
					  </ul>
				</li>

				<li class="nav__section"><a class="nav__label">Features</a>
						  <ul class="nav__links ">
							  <li class="nav__item"><a href="<?php echo home_url('sharing') ?>">Sharing</a></li>
							  <li class="nav__item"><a href="<?php echo home_url('workflow') ?>">Workflow</a></li>
							  <li class="nav__item"><a href="<?php echo home_url('secure') ?>">Security</a></li>
							  <li class="nav__item"><a href="<?php echo home_url('collabora') ?>">Online office</a></li>
							  <li class="nav__item"><a href="<?php echo home_url('webrtc') ?>">Audio and video chat</a></li>
						  </ul>
				</li>

				<li class="nav__section"><a class="nav__label">Enterprise</a>
						    <ul class="nav__links">
							    <li class="nav__item"><a href="<?php echo home_url('enterprise') ?>">Value of a subscription</a></li>
							    <li class="nav__item"><a href="<?php echo home_url('pricing') ?>">Pricing</a></li>
							    <li class="nav__item"><a href="<?php echo home_url('buy') ?>">Get an offer</a></li>
						    </ul>
				</li>

				<li class="nav__section"><a class="nav__label">Support</a>
						  <ul class="nav__links">
							  <li class="nav__item"><a href="<?php echo home_url('support') ?>">Support options</a></li>
							  <li class="nav__item"><a href="<?php echo $DOCUMENTATION_USER; ?>">User Documentation</a></li>
							  <li class="nav__item"><a href="<?php echo $DOCUMENTATION_ADMIN; ?>">Administrator</a></li>
							  <li class="nav__item"><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>">Developer</a></li>
							  <li class="nav__item"><a href="<?php echo home_url('security') ?>">Security</a></li>
						  </ul>
				</li>
			</ul>
			<ul class="right-buttons">
				<li class="ghost-btn"><a href="https://demo.nextcloud.com/" class="nav__label">Demo</a></li>
				<li class="ghost-btn"><a href="<?php echo home_url('install') ?>" class="nav__label">Download</a></li>
			</ul>
			</div>
		</div>
	</div>
</nav>

 
