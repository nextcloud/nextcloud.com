<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script>

<div class="container-fluid">
	<div class="row jumbotron">
		<div class="container-fluid">
			<div class="col-md-6">
				<h1>A safe home for your digital life</h1>
				<h2>Access & share your files, calendars, contacts, mail & more from any device, on your terms.</h2>
				<p><a class="btn btn-primary btn-lg" href="<?php echo home_url('install') ?>" role="button" id="get-nextcloud-button">Get Nextcloud <span class="glyphicon glyphicon-arrow-right"></span></a></p>
			</div>
		</div>
	</div>
</div>

<section id="why-nextcloud">
	<div class="container">
		<h2 class="text-center">Why Nextcloud?</h2>
		<div class="highlights">
			<div class="highlights__align">
				<div class="community-icon" data-animation-path="img/home/community/" data-anim-loop="false" data-name="community"></div>
				<h4>Community</h4>
				<p class="highlights__text">Enjoy constant improvements
					from a thriving and transparent,
					all open-source community
					development model, free of
					lockins or paywalls.</p>
			</div>
			<div class="highlights__align">
				<div class="privacy-icon" data-animation-path="img/home/privacy/" data-anim-loop="false" data-name="privacy"></div>
				<h4>Privacy</h4>
				<p class="highlights__text">Keep all of your life / business
					private and secure. Share
					with only who you choose,
					and no-one else.</p>
			</div>
			<div class="highlights__align">
				<div class="flexibility-icon" data-animation-path="img/home/flexibility/" data-anim-loop="false" data-name="flexibility"></div>
				<h4>Flexibility</h4>
				<p class="highlights__text">Expand Nextcloud's ability
					to do whatever you want,
					with Nextcloud apps.</p>
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
		<p><a class="btn btn-primary btn-lg" href="<?php echo home_url('features') ?>" role="button">Get to know all the features <span class="glyphicon glyphicon-arrow-right"></span></a></p>
	</div>
</div>

<!--
<section class="Section-Introducing-Nextcloud">
	<h2 class="text-center">Nextcloud Features</h2>
	<div class="indicators">
		<ul class="carousel__dots" ></ul>
		<li class="btn__carousel"></li>
		<li class="btn__carousel"></li>
		<li class="btn__carousel"></li>
	</div>
	<div class=" container col-md-6 img__carousel">
		<img src="./img/home/introducing-nc-10.png" class="img-responsive">
	</div>
	<div class="col-md-5 top__features ">
		<div class="top__features__container">
			<h4>Secure, Fine Grained Control over Data Access and Workflows</h4>
			<p>Monitoring, security and performance improvements
				complement this release, enabling larger and more efficient
				Nextcloud installations.</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more <span class="glyphicon glyphicon-arrow-right"></span></a></p>
		</div>
	</div>
	<div class="col-md-5 top__features">
		<div class="top__features__container hide">
			<h4>Faster and more reliable operation at scale</h4>
			<p> Nextcloud 10 introduces the Server Information app which provides a way for admins to monitor the health and performance of a Nextcloud system. Besides a graphical UI, an API endpoint provided makes it possible for system administrators to import this data in their monitoring app so they can keep an eye on Nextcloud operations from the same place they keep an eye on the rest of their infrastructure.</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more <span class="glyphicon glyphicon-arrow-right"></span></a></p>
		</div>
	</div>
	<div class="col-md-5 top__features">
		<div class="top__features__container hide">
			<h4>Authentication and security</h4>
			<p> Nextcloud 10 delivers security improvements in several areas. Plugin based Two Factor Authentication enables an optional extra layer of protection for logins, brute force protection makes it harder for attackers to guess passwords and session management is introduced to enable administrators and users to monitor and invalidate active sessions.</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more <span class="glyphicon glyphicon-arrow-right"></span></a></p>
		</div>
	</div>
	</div>
</section>


<!--

<section class="Section-Introducing-Nextcloud">
<div id="pinContainer">
    <h2 class="text-center section-title">Introducing Nextcloud 10</h2>
    <div class="introducing-slider hidden" style="float:right; width: 200px;">
        <div class="slider-oval"></div>
        <div class="slider-oval"></div>
        <div class="slider-oval"></div>
        <div class="slider-oval"></div>
    </div>
    <section class="panel-workflow">
        <div class="container">
            <div class="row introducing-nc-10">
                <div class="container">
                    <div class="container col-md-6">
                        <img src="./img/home/introducing-nc-10.png">
                    </div>
                    <div class="container col-md-6 right-text-grey" style="opacity: 1; padding-top: 0 !important;">
                        <h5>Secure, Fine Grained Control over
                            Data Access and Workflows</h5>
                        <p>Monitoring, security and performance improvements
                            complement this release, enabling larger and more efficient
                            Nextcloud installations.</p>
                        <br/>
                        <p>
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more <span class="glyphicon glyphicon-arrow-right"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="panel-monitoring hidden">
        <div class="container">
            <div class="row introducing-nc-10">
                <div class="container">
                    <div class="container col-md-6">
                        <img src="./img/home/monitoring-nc-10.png">
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
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more <span class="glyphicon glyphicon-arrow-right"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="panel-authentication hidden">
        <div class="container">
            <div class="row introducing-nc-10">
                <div class="container">
                    <div class="container col-md-6">
                        <img src="./img/home/auth-nc-10.png">
                    </div>
                    <div class="container col-md-6 right-text-grey">
                        <h5>Authentication and security</h5>
                        <p>
                            Nextcloud 10 delivers security improvements in several areas. Plugin based Two Factor
                            Authentication enables an optional extra layer of protection for logins, brute force
                            protection makes it harder for attackers to guess passwords and session management is
                            introduced to enable administrators and users to monitor and invalidate active sessions.
                        </p>
                        <br/>
                        <p>
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more <span class="glyphicon glyphicon-arrow-right"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="panel-authentication hidden">
        <div class="container">
            <div class="row introducing-nc-10">
                <div class="container">
                    <div class="container col-md-6">
                        <img src="./img/home/auth-nc-10.png">
                    </div>
                    <div class="container col-md-6 right-text-grey">
                        <h5>Foo & Bar</h5>
                        <p>
                            Nextcloud 10 delivers security improvements in several areas. Plugin based Two Factor
                            Authentication enables an optional extra layer of protection for logins, brute force
                            protection makes it harder for attackers to guess passwords and session management is
                            introduced to enable administrators and users to monitor and invalidate active sessions.
                        </p>
                        <br/>
                        <p>
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more <span class="glyphicon glyphicon-arrow-right"></span></a>
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
        new ScrollMagic.Scene({triggerElement: '#pinContainer', triggerHook: 'onLeave', duration: 750})
                .addTo(controller)
                .setPin('#pinContainer')
                .on('enter leave', function (e) {
                    $('.introducing-slider').addClass('hidden');
                })
                .on('start end', function (e) {
                    $('.introducing-slider').removeClass('hidden');
                })
                .on('progress', function (e) {
                    var progressNumber = e.progress.toFixed(4);
                    var currentProgress = Math.round(10 * ((progressNumber / 10) * 3));
                    $('#pinContainer section:lt(' + currentProgress + ')').addClass('hidden');
                    $('#pinContainer section:gt(' + currentProgress + ')').addClass('hidden');
                    $('#pinContainer section:nth(' + currentProgress + ')').removeClass('hidden');
                    $('.introducing-slider .slider-oval').html('');
                    $('.introducing-slider .slider-oval:nth(' + currentProgress + ')').html('<div class="active"></div>');

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

-->

<div class="container" id="social-media">
	<div class="row 3-column-lg-md-sm home-social">
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<i class="glyphicon glyphicon-cloud"></i>
			<h3><a href="<?php echo home_url('news') ?>">Nextcloud News</a></h3>
			<span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,4); } ?></span>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<i class="fa fa-twitter"></i>
			<h3>Latest <a href="https://twitter.com/nextclouders">Twitter posts</a></h3>
			<span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,2); } ?></span>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<i class="fa fa-comment"></i>
			<h3>Latest <a href="https://help.nextcloud.com">from the forum</a></h3>
			<span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,4); }?></span>
		</div>
	</div>
</div>

<div class="container-fluid" id="stay-up-to-date">
	<div class="row stay-up-to-date">
		<div class="container text-center" style="padding-top: 70px; padding-bottom: 70px;">
			<h5>Stay up to date with Nextcloud's latest enhancements!</h5>
			<p><a class="btn btn-primary btn-lg" href="https://newsletter.nextcloud.com/" role="button">Just click here <span class="glyphicon glyphicon-arrow-right"></span></a></p>
		</div>
	</div>
</div>
