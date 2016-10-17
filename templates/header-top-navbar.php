
<nav class="nav">
	<div class="container">
		<div class="nav__bg-wrapper">
			<div class="nav__bg"></div>
		</div>

		<div class="brand">
			<div class="logo"></div>
		</div>

		<ul class="nav__sections">
			<li class="nav__section"><a href="#0" class="nav__label">About us</a>
				<ul class="nav__links nav__links--large">
					<li class="nav__item"><a href="#0">Who we are</a></li>
					<li class="nav__item"><a href="#0">Community</a></li>
					<li class="nav__item"><a href="#0">Team</a></li>
					<li class="nav__item"><a href="#0">Jobs</a></li>
					<li class="nav__item"><a href="#0">Code of Conduct</a></li>
				</ul>
			</li>

			<li class="nav__section"><a href="#0" class="nav__label">News</a>
				<ul class="nav__links nav__links--small">
					<li class="nav__item"><a href="#0">Blog</a></li>
					<li class="nav__item"><a href="#0">Newsletter</a></li>
				</ul>
			</li>

			<li class="nav__section"><a href="#0" class="nav__label">Features</a>
				<ul class="nav__links nav__links--medium">
					<li class="nav__item"><a href="#0">Sharing</a></li>
					<li class="nav__item"><a href="#0">Workflow</a></li>
					<li class="nav__item"><a href="#0">Secure</a></li>
					<li class="nav__item"><a href="#0">Collabora online</a></li>
					<li class="nav__item"><a href="#0">Webrtc</a></li>
				</ul>
			</li>

			<li class="nav__section"><a href="#0" class="nav__label">Enterprise</a>
				<ul class="nav__links nav__links--medium">
					<li class="nav__item"><a href="#0">Enterprise</a></li>
					<li class="nav__item"><a href="#0">Subscripitions</a></li>
					<li class="nav__item"><a href="#0">Pricing</a></li>
				</ul>
			</li>

			<li class="nav__section"><a href="#0" class="nav__label">Support</a>
				<ul class="nav__links nav__links--medium">
					<li class="nav__item"><a href="#0">Support options</a></li>
					<li class="nav__item"><a href="#0">User Documentation</a></li>
					<li class="nav__item"><a href="#0">Administrator</a></li>
					<li class="nav__item"><a href="#0">Developer</a></li>
					<li class="nav__item"><a href="#0">Security</a></li>
				</ul>
			</li>
		</ul>

		<div class="right-buttons">
			<ul>
				<li><a href="https://demo.nextcloud.com/">Demo</a></li>
	            <li><a href="<?php echo home_url('install') ?>">Download</a>
            </ul>
		</div>
	</div>
</nav>






<!-- <header class="global-nav">
	<div class="container">
		<div class="nav-wrapper">
		
		<div class="brand">
			
			<div class="logo"></div>
		</div>
			
			<div class="center-nav">
				<ul>
					<li class="has-dropdown" data-content="about">
						<a href="#0">About us</a>
					</li>
		 
					<li class="has-dropdown" data-content="involved">
						<a href="#0">Get involved</a>
					</li>
		 
					<li class="has-dropdown" data-content="features">
						<a href="#0">Features</a>
					</li>

					<li class="has-dropdown" data-content="enterprise">
						<a href="#0">Enterprise</a>
					</li>
				</ul>
			</div>

			<div class="right-nav">
				<ul>

					<li>
					<a href="#0">Demo</a>
					</li>

					<li>
					<a href="#0">Download</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="morph-dropdown-wrapper">
			<div class="dropdown-list">
			<ul>
					<li id="contact" class="dropdown button">
						<a href="#0" class="label">Contact</a>
						
						<div class="content">	
							<ul class="links-list">
								<li><a href="#0">Who we are</a></li>
								<li><a href="#0">Community</a></li>
								<li><a href="#0">Team</a></li>
								<li><a href="#0">Jobs</a></li>
								<li><a href="#0">Code of Conduct</a></li>
								<li><a href="#0">Link #6</a></li>
							</ul>

							<a href="#0" class="btn">Get in Touch</a>
						</div>
					</li>

					</li>
	 
					<li id="features">
			</li>

					<li id="enterprise">
					</li>
				</ul> 
	 
				<div class="bg-layer" aria-hidden="true"></div>
			</div> 
		</div> 
	</div>
</header> -->

















<!-- Older -->

<!-- <?php
	$navigationItems = [
		'news' => 'News',
		'features' => 'Features',
		'about' => 'About us',
		'contribute' => 'Get involved',
		'support' => 'Support',
		'enterprise' => 'Enterprise',
	];
?> -->
<!-- <section class="Header-Navigation">
	<nav class="navbar navbar-fixed-top" id="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" id="toggle">
				<div class="menu-animation" data-animation-path="img/menu/black/" data-anim-loop="false" data-name="menu-black" id="menu-black"</div>
				</button>
				<a class="brand" href="<?php echo home_url() ?>">
				<div class="logo"></div>
					</a>
		    <div class="overlay" id="overlay">
                <nav class="overlay-menu">
                    <ul>
                      <?php
                        foreach($navigationItems as $key => $text):
                            $active = false;
                            if($key === strtolower(get_post()->post_name)) {
                                $active = true;
                                }
                                ?>
                                <li <?php if($active): ?>class="active"<?php endif;?>><a href="<?php echo home_url($key) ?>"><?php echo $text ?></a></li>
                                <?php endforeach; ?>
                                <li><a href="https://demo.nextcloud.com/">Demo</a></li>
                                <li class="btn-primary"><a href="<?php echo home_url('install') ?>">Download</a>
                        </li>
                    </ul>
                  </nav>
			</div>
		</div>
	</nav>
</div>
</section>
 -->

 