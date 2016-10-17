<?php
	$navigationItems = [
		'news' => {
			'News' => {
				'news' => 'Blogs',
				'https://newsletter.nextcloud.com' => 'Newsletter'
			}
		},
		'features' => {
			'Features' => {
				'features' => 'Feature overview',
				'sharing' => 'File access and sharing',
				'workflow' => 'File access control and workflows',
				'secure' => 'Security and authentication',
				'collaboraonline' => 'Collabora Online Office',
				'webrtc' => 'Secure audio and video calls'
			}
		},
		'enterprise' => {
			'Enterprise' => {
				'enterprise' => 'Enterprise Features',
				'subscriptions' => 'Enterprise Subscriptions',
				'pricing' => 'Pricing'
			}
		},
		'support' => {
			'Support' => {
				'support' => 'Support options',
				$DOCUMENTATION_USER => 'User documentation',
				$DOCUMENTATION_ADMIN => 'Administrator documentation',
				$DOCUMENTATION_DEVELOPER => 'Developer documentation',
				'https://help.nextcloud.com/categories' => 'Forums',
				'https://github.com/nextcloud' => 'Code on github',
				'security' => 'Security'
			}
		},
		'contribute' => {
			'Get involved' => {
			'design' => 'Design',
			'contribute' => 'Development'
			}
		},
		'about' => { 
			'About Us' => {
				'about' => 'About us',
				'team' => 'Our team',
				'community' => 'Our community',
				'code-of-conduct' => 'Code of conduct',
				'privacy' => 'Privacy and legal',
				'contact' => 'Contact us',
				'press' => 'Press'
			}
		}
	];
?>
<section class="Header-Navigation">
	<nav class="navbar navbar-fixed-top" id="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" id="toggle">
				<div class="menu-animation" data-animation-path="img/menu/black/" data-anim-loop="false" data-name="menu-black" id="menu-black"></div>
				</button>
				<a class="brand" href="<?php echo home_url() ?>">
					<div class="logo"></div>
				</a>
		    <div class="overlay" id="overlay">
                <nav class="overlay-menu">
                    <ul>
                      <?php foreach($navigationItems as $key => $text):
						$active = false;
						if($key === strtolower(get_post()->post_name)) {
							$active = true;
							}
							?>
							<li class="dropdown<?php if($active): ?> active<?php endif;?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $text[0] ?> <b class="caret"></b></a>
							<ul class="dropdown-menu" role="menu">
								<?php foreach($navigationItems as $text => $key): ?>
									<li><a href="<?php echo home_url($text) ?>"><?php echo $key ?></a></li>
								<?php endforeach; ?>
							</ul>
							</li>
							<?php endforeach; ?>
							<li><a href="https://demo.nextcloud.com/">Demo</a></li>
							<li class="btn-primary"><a href="<?php echo home_url('install') ?>">Download</a>
                        </li>
                    </ul>
                  </nav>
			</div>
		</div>
		</div>
	</nav>
</section>
