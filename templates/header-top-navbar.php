<?php
	$navigationItems = [
		'news' => 'News',
		'features' => 'Features',
		'about' => 'About us',
		'contribute' => 'Get involved',
		'support' => 'Support',
		'enterprise' => 'Enterprise',
	];
?>
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

 <header class="cd-morph-dropdown">
	<a class="brand" href="<?php echo home_url() ?>">
		<div class="logo"></div>
	</a>
		<a href="#0" class="nav-trigger">Open Nav<span aria-hidden="true"></span></a>
		
		<nav class="main-nav">
			<ul>
				<li class="has-dropdown gallery" data-content="about">
					<a href="#0">About us</a>
				</li>

				<li class="has-dropdown links" data-content="Get Involved">
					<a href="#0">Get Involved</a>
				</li>

				<li class="has-dropdown button" data-content="Features">
					<a href="#0">Features</a>
				</li>

				<li class="has-dropdown button" data-content="Enterprise">
					<a href="#0">Enterprise</a>
				</li>
			</ul>
		</nav>
		
		<div class="morph-dropdown-wrapper">
			<div class="dropdown-list" style="transform: translateX(757px); width: 390px; height: 349px;">
				<ul>
					<li id="about" class="dropdown gallery">
						<a href="#0" class="label">About</a>
						
						<div class="content">
							<ul>
								<li><a href="#0">Who we are</a></li>
								<li><a href="#0">Community</a></li>
								<li><a href="#0">Team</a></li>
								<li><a href="#0">Jobs</a></li>
								<li><a href="#0">Code of conduct</a></li>
						</div>
					</li>

					<li id="Get Involved" class="dropdown links">
						<a href="#0" class="label">Get Involved</a>

						<div class="content">
							<ul>
								<li>
									<h2>Services</h2>

									<ul class="links-list">
										<li><a href="#0">Logo Design</a></li>
										<li><a href="#0">Branding</a></li>
										<li><a href="#0">Web Design</a></li>
										<li><a href="#0">iOS</a></li>
										<li><a href="#0">Android</a></li>
										<li><a href="#0">HTML/CSS/JS</a></li>
										<li><a href="#0">Packaging</a></li>
										<li><a href="#0">Mobile</a></li>
										<li><a href="#0">UI/UX</a></li>
										<li><a href="#0">Prototyping</a></li>
									</ul>
								</li>

								<li>
									<h2>Projects</h2>

									<ul class="links-list">
										<li><a href="#0">Logo Design</a></li>
										<li><a href="#0">Branding</a></li>
										<li><a href="#0">Web Design</a></li>
										<li><a href="#0">iOS</a></li>
										<li><a href="#0">Android</a></li>
										<li><a href="#0">HTML/CSS/JS</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</li>

					<li id="Features" class="dropdown button">
						<a href="#0" class="label">Features</a>
						
						<div class="content">	
							<ul class="links-list">
								<li><a href="#0">Link #1</a></li>
								<li><a href="#0">Link #2</a></li>
								<li><a href="#0">Link #3</a></li>
								<li><a href="#0">Link #4</a></li>
								<li><a href="#0">Link #5</a></li>
								<li><a href="#0">Link #6</a></li>
							</ul>

							<a href="#0" class="btn">Get in Touch</a>
						</div>
					</li>
				</ul>

				<div class="bg-layer" aria-hidden="true" style="transform: scaleX(390) scaleY(349);"></div>
			</div> <!-- dropdown-list -->
		</div> <!-- morph-dropdown-wrapper -->
	</header>
