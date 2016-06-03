<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="brand" href="<?php echo home_url(); ?>/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_nextcloud_white.svg" title="<?php bloginfo('name'); ?>" itemprop="logo"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <ul id="menu-header" class="nav navbar-nav">
        <li class="<?php if(is_page('news')){ echo 'top-nav-active '; } ?>menu-news"><a href="/news/">News</a></li>
<!--         <li class="<?php if(is_page('features')){ echo 'top-nav-active '; } ?>menu-features"><a href="/features/">Features</a></li> -->
<!--         <li class="menu-demo"><a target="_blank" href="https://demo.nextcloud.com">Demo</a></li> -->
<!--         <li class="menu-documentation"><a href="https://doc.nextcloud.com">Documentation</a></li> -->
		<li class="<?php if(is_page('about')){ echo 'top-nav-active '; } ?>menu-about"><a href="/about/">About us</a>
<!-- 		<li class="<?php if(is_page('contact')){ echo 'top-nav-active '; } ?>menu-contact"><a href="/contact/">Contact us</a> -->
        <li class="<?php if(is_page('contribute')){ echo 'top-nav-active '; } ?>menu-contribute"><a href="/contribute/">Get involved</a>
        <li class="<?php if(is_page('support')){ echo 'top-nav-active '; } ?>menu-support"><a href="/support/">Support</a></li>
        <li class="<?php if(is_page('enterprise')){ echo 'top-nav-active '; } ?>menu-enterprise"><a href="/enterprise/">Enterprise</a></li>
<!--         <li class="<?php if(is_page('install')){ echo 'top-nav-active '; } ?>menu-install"><a href="/install/">Download</a></li> -->
      </ul>
    </nav>
  </div>
  <?php if(is_page('homepage')): ?>
	<div class="container-fluid teaser-area">
		<div class="col-xs-offset-0 col-sm-offset-1 col-md-offset-2 col-lg-offset-3  col-xs-12 col-sm-10 col-md-8 col-lg-6">
			<div class="text-center intro-text">
				<h1><span class="avoidwrap">A safe home</span> <span class="avoidwrap">for all your data</span></h1>
				<p><span class="avoidwrap">Access & share your files</span>, calendars, contacts, <span class="avoidwrap">mail & more</span> <span class="avoidwrap">from any device, on your terms</span></p>
				<br>
				<a class="btn btn-primary btn-lg" role="button" href="/install">Get your Nextcloud &raquo;</a>
			</div>
		</div>
		<a href="https://plus.google.com/events/cnntcg90ehkd9j6gdglumj1g708"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/hangout2.png" class="home-event-img"  /></a>
	</div>
  <?php endif; ?>
</header>
