<?php
	$navigationItems = [
// 		'homepage' => 'Home',
		'news' => 'News',
		'features' => 'Features',
		'about' => 'About us',
		'contribute' => 'Get involved',
		'support' => 'Support',
		'enterprise' => 'Enterprise',
	];
?>
<section class="Header-Navigation">
	<nav class="navbar navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<a class="brand" href="<?php echo home_url() ?>">
					<img alt="Nextcloud logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_nextcloud_white.svg">
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
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
					<li class="btn-primary"><a href="<?php echo home_url('install') ?>">Download</a></li>
				</ul>
			</div>
		</div>
	</nav>
</section>
