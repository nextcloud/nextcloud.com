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
<section class="Header-Navigation">
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
