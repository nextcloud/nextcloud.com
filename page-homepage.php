<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script>

<div class="container-fluid">
	<div class="row jumbotron">
		<div class="container-fluid">
			<div class="col-md-6">
				<h1>A safe home for all your data</h1>
				<h2>Access, share and protect your files, calendars, contacts, communication & more at home and in your enterprise.</h2>
				<p><a class="btn btn-primary btn-lg btn-absolute-icon" href="<?php echo home_url('install') ?>" role="button" id="get-nextcloud-button">Get Nextcloud <span class="icon-arrow"></span></a></p>
			</div>
		</div>
	</div>
</div>

<section id="why-nextcloud">
	<div class="container">
		<h2 class="text-center">Why Nextcloud?</h2>
		<div class="highlights">
			<div class="highlights_align">
				<div class="privacy-icon" data-animation-path="img/home/privacy/" data-anim-loop="false" data-name="privacy"></div>
				<h4>Privacy</h4>
				<p class="highlights_text">Keep all of your life / business
					private and secure. Share
					with only who you choose,
					and no-one else.</p>
			</div>
			<div class="highlights_align">
				<div class="community-icon" data-animation-path="img/home/community/" data-anim-loop="false" data-name="community"></div>
				<h4>Community</h4>
				<p class="highlights_text">Enjoy constant improvements
					from a thriving and transparent,
					all open-source community
					development model, free of
					lockins or paywalls.</p>
			</div>
			<div class="highlights_align">
				<div class="flexibility-icon" data-animation-path="img/home/flexibility/" data-anim-loop="false" data-name="flexibility"></div>
				<h4>Enterprise</h4>
				<p class="highlights_text">Protect, control and scale the data and communication in your company and organization.</p>
			</div>
		</div>
	</div>
</section>

<div class="container-fluid" id="perfect-for-home-and-business">
	<div>
		<h2>Perfect for home and office</h2>
		<p>Access everything with the tools you're already using,
			regardless of the device or platform you're on. Pictures,
			videos, documents, contacts, communications - they're all
			available right where you need them whether they're
			coming from your local storage or remote cloud services.</p>
		<p><a class="btn btn-primary btn-lg btn-absolute-icon" href="<?php echo home_url('features') ?>" role="button">Get to know all the features <span class="icon-arrow"></span></a></p>
	</div>
</div>

<section class="Section-Introducing-Nextcloud" id="pinContainer">
<div >
    <h2 class="text-center section-title">Introducing Nextcloud 10</h2>
	<div class="indicators">
		<ul class="carousel_dots"></ul>
		<li class="btn_carousel"></li>
		<li class="btn_carousel"></li>
		<li class="btn_carousel"></li>
		<li class="btn_carousel"></li>
	</div>
    <section class="panel-workflow">
        <div class="container">
            <div class="row introducing-nc-release">
                <div class="container">
                    <div class="container col-md-6">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/introducing-nc-10.png">
                    </div>
                    <div class="container col-md-6 right-text-grey" style="opacity: 1; padding-top: 0 !important;">
                        <h5>Secure, Fine Grained Control over Data Access and Workflows</h5>
                        <p>This release delivers better scalability as well as monitoring, security and workflow management tools, enabling better control over Nextcloud servers and operation at scale.</p>
                        <br/>
                        <p>
                            <a class="btn btn-primary btn-lg " href="https://nextcloud.com/blog/secure-monitor-and-control-your-data-with-nextcloud-10-get-it-now/" role="button">Learn more <span class="icon-arrow"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="panel-monitoring hidden">
        <div class="container">
            <div class="row introducing-nc-release">
                <div class="container">
                    <div class="container col-md-6">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/monitoring-nc-10.png">
                    </div>
                    <div class="container col-md-6 right-text-grey">
                        <h5>Faster and more reliable operation at scale</h5>
                        <p>Nextcloud 10 introduces the Server Information app which provides a way for admins to monitor
                            the health and performance of a Nextcloud system. Besides a graphical UI, an API endpoint
                            provided makes it possible for system administrators to import this data in their monitoring
                            app so they can keep an eye on Nextcloud operations from the same place they keep an eye
                            on the rest of their infrastructure.</p>
                        <br/>
                        <p>
                            <a class="btn btn-primary btn-lg" href="/workflow/#monitoring" role="button">Learn more <span class="glyphicon glyphicon-arrow-right"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="panel-authentication hidden">
        <div class="container">
            <div class="row introducing-nc-release">
                <div class="container">
                    <div class="container col-md-6">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/auth-nc-10.png">
                    </div>
                    <div class="container col-md-6 right-text-grey">
                        <h5>Authentication and security</h5>
                        <p>Nextcloud 10 delivers security improvements in several areas. Plugin based Two Factor
                            Authentication enables an optional extra layer of protection for logins, brute force
                            protection makes it harder for attackers to guess passwords and session management is
                            introduced to enable administrators and users to monitor and invalidate active sessions.
                        </p>
                        <br/>
                        <p>
                            <a class="btn btn-primary btn-lg" href="/workflow/" role="button">Learn more <span class="glyphicon glyphicon-arrow-right"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="panel-authentication hidden">
        <div class="container">
            <div class="row introducing-nc-release">
                <div class="container">
                    <div class="container col-md-6">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/federation-nc-10.png">
                    </div>
                    <div class="container col-md-6 right-text-grey">
                        <h5>Improved Federation</h5>
                        <p>Nextcloud 10 normalizes federated shares, handling mounted link shares as federated shares, offering the same permissions for federated shares as for normal shares and directly connecting re-shared federated shares to other servers for improved performance.</p>
                        <br/>
                        <p>
                            <a class="btn btn-primary btn-lg" href="/federation" role="button">Learn more <span class="glyphicon glyphicon-arrow-right"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</section>

<script>
	// Only make the scrolling effect for devices bigger than the 768px in width
	if ($(window).width() > 768) {
		var controller = new ScrollMagic.Controller();
		new ScrollMagic.Scene({triggerElement: '#pinContainer', triggerHook: 'onLeave', duration: 750, offset: -100})
			.addTo(controller)
			.setPin('#pinContainer')
			.on('enter leave', function (e) {
				$('.indicators').addClass('hidden');
			})
			.on('start end', function (e) {
				$('.indicators').removeClass('hidden');
			})
			.on('progress', function (e) {
				var progressNumber = e.progress.toFixed(4);
				var currentProgress = Math.round(10 * ((progressNumber / 10) * 3));
				$('#pinContainer section:lt(' + currentProgress + ')').addClass('hidden');
				$('#pinContainer section:gt(' + currentProgress + ')').addClass('hidden');
				$('#pinContainer section:nth(' + currentProgress + ')').removeClass('hidden');
				$('.indicators .btn_carousel').html('');
				$('.indicators .btn_carousel').removeClass('active');
				$('.indicators .btn_carousel:nth(' + currentProgress + ')').addClass('active');

				if (currentProgress > 0) {
					$('#pinContainer section:nth(' + currentProgress + ') .right-text-grey')
						.animate({
							'opacity': 1,
							'margin-top': '-25px'
						}, 750);
				}
			});
	} else {
		$('section:nth(0)').removeClass('hidden')
		$('#pinContainer section .right-text-grey:nth(0)').css('opacity', '1.0');
		$('#pinContainer').css('width', 'inherit');
		$('#pinContainer').css('height', 'inherit');
	}
</script>

<!--
<div class="container-fluid" id="social-media">
	<div class="row 3-column-lg-md-sm home-social">
		<div class="col-md-4">
			<i class="glyphicon glyphicon-cloud"></i>
			<h3><a href="<?php echo home_url('news') ?>">Nextcloud News</a></h3>
			<span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,4); } ?></span>
		</div>
		<div class="col-md-4">
			<i class="fa fa-twitter"></i>
			<h3>Latest <a href="https://twitter.com/nextclouders">Twitter posts</a></h3>
			<span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,2); } ?></span>
		</div>
		<div class="col-md-4">
			<i class="fa fa-comment"></i> d
			<h3>Latest <a href="https://help.nextcloud.com">from the forum</a></h3>
			<span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,4); }?></span>
		</div>
	</div>
</div>
-->
<div class="container-fluid" id="stay-up-to-date">
	<div class="row stay-up-to-date">
		<div class="container text-center" style="padding-top: 70px; padding-bottom: 70px;">
			<h5>Stay up to date with Nextcloud's latest enhancements!</h5>
			<p><a class="btn btn-primary btn-lg btn-absolute-icon" href="https://newsletter.nextcloud.com/" role="button">Subscribe to our newsletter<span class="icon-arrow"></span></a></p>
		</div>
	</div>
</div>
