<header class="global-nav">
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
					<li id="about" class="dropdown button">
						<a href="#0" class="label">Contact</a>
						
						<div class="content">	
							<ul class="links-list">
								<li><a href="#0">Who we are</a></li>
								<li><a href="#0">Community</a></li>
								<li><a href="#0">Team</a></li>
								<li><a href="#0">Jobs</a></li>
								<li><a href="#0">Code of Conduct</a></li>
							</ul>

							<a href="#0" class="btn">Get in Touch</a>
						</div>
					</li>




				<!-- <ul>
					<li id="about">
						<a href="#0">Who we are</a>
						<a href="#0">Community</a>
						<a href="#0">Team</a>
						<a href="#0">Jobs</a>
						<a href="#0">Code of Conduct</a>
					</li>
	 
					<li id="involved">
						<!-- dropdown content here -->
					</li>
	 
					<li id="features">
						<!-- dropdown content here -->
					</li>

					<li id="enterprise">
						<!-- dropdown content here -->
					</li>
				</ul> -->
	 
				<div class="bg-layer" aria-hidden="true"></div>
			</div> 
		</div> 
	</div>
</header>

















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

 