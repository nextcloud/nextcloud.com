<head>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/include.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["pages/collabora", "modules/youtubePlayer", "modules/codeHighlights"])
	});
</script>
<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/include.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/include.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/include.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/include.png">
</head>

<div class="background include-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Include');?></h1>
 				<h2><code><?php echo $l->t('Supporting diversity, in and by way of, libre software');?></code></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row revealOnScroll">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Diversity strengthens Nextcloud and its community. Include helps everyone partake in development thereof.');?></p>
            </div>
        </div>
    </div>
</section>




<section class="section--overview">
<div class="container-widest">
	<div class="row">
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/conversation.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Mentoring');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Mentoring is provided for newcomers to our community.');?></p>
        </div>
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/travel.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Travel and accomodation');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Get sponsored to participate in Nextcloud events.');?></p>
		</div>
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/internship.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Internship');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Work your way from being a student into fair representation at Nextcloud GmbH.');?></p>
		</div>
    </div>
</div>
</section>

<div class="separator"></div>
<section class="section--mentoring">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Mentoring');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Help to get started');?></h3>
		<div class="ilustration ilustration__expertise">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/ilustration_matterexperts-new.svg"); ?>
		</div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Show your unique talent in finding something new to work on, there is already software, design, coding on the front or back-end and translation and helping out on the forums to pick from.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('We have mentally picked you regardless of your prior inclusion in the tech community. Overcome the barrier of dotted entry by connecting your dot directly to somebody who wants to help you.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('The limits of the people available to help you get started is something you can exand on!');?></p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="mailto:include@nextcloud.com?subject=Getting involved in Nextcloud - mentorship"><?php echo $l->t('Find a mentor');?></a></p>
	</div>
</section>

<div class="separator"></div>

<section class="section--travelsupport">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Travel Support');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Participate in events');?></h3>
		<div class="ilustration ilustration__expertise">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/people-cloud.svg"); ?>
		</div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Join big hackweeks, smaller ad-hoc ones all over Europe, or hget help hosting your own somewhere else. There is a yearly Nextcloud Conference and official representation at many events, like FOSDEM and SCALE.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Typically 80% of the travel & hotel costs are covered, and exceptions upwards of that can be made should you require. All that is asked of you is to ask of us to help.');?></p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="mailto:include@nextcloud.com?subject=Travel support request"><?php echo $l->t('Request travel support');?></a></p>
	</div>
</section>

<div class="separator"></div>

<section class="section--travelsupport">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Internship');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Join Nextcloud GmbH');?></h3>
		<div class="ilustration ilustration__expertise">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/security-new.svg"); ?>
		</div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud is always on the look-out for new and hard found talent, and we\'d like to give beginning and aspiring developers, marketeers and new people a chance to learn practical skills with us.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('If your talent is underrepresented, apply for open positions with your resume by going to the jobs page, or invent a position by reaching out in any other way.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('You need know we know we don\'t know we need you.');?></p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="mailto:include@nextcloud.com?subject=Internship application"><?php echo $l->t('Send your resume');?></a></p>
	</div>
</section>

<div class="separator"></div>

<section class="section--advantages">
<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 revealOnScroll">
				<h3 class="text-center"><?php echo $l->t('Anticipated questions');?></h3>
				<h1 class="section--heading-1 text-center"><?php echo $l->t('FAQ');?></h1>
            </div>
        </div>
		<div class="row">
            <div class="col-md-10 col-md-offset-1 revealOnScroll">
                <p class="section--paragraph__tittle"><?php echo $l->t('What is the Nextcloud community, and why are you not in it?');?></p>
                <p class="section--paragraph"><?php echo $l->t('We are a very nice, we think, friendly and welcoming. Like a cat picture. Saying "you are welcome to join the conference" without providing a playground for parents is not enough, pro-activity is the order of the day.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Libre software is built on meritocracy, meaning capability is ideally the only barrier, try as we might, we fail sometimes at that. Even software autists (ahum) are human, and we can\'t help taking non-technical factors, like other people, into account when judging code. The resulting self-duality fails at valuing some contributions, even if equal or of better quality than others. Don\'t think you don\'t fit in, we are trying not to. The best thing we can do is extend in-group preference to everyone wishing to help, and by extention, the people you bring in to that effect. In terms of general society, we are different from it, and wish to expand the good sides of this with you.');?></p>
                <p class="section--paragraph__tittle"><?php echo $l->t('Am I still welcome?');?></p>
                <p class="section--paragraph"><?php echo $l->t('And still, you are the undisputed champion of our minds. Nextcloud is certainly no less open now than before we announced Include, and this is your special chance at being an untraditional champ.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Mentorship, travel support and internships have always been available to anyone active in our community and will continue to be.');?></p>
                <p class="section--paragraph__tittle"><?php echo $l->t('Is Nextcloud Include only for developers, and/or people that like cat pictures?');?></p>
                <p class="section--paragraph"><?php echo $l->t('Fear not, as a largely technical community trying to help people solve societal issues, we welcome welcoming; documentation, design, translation, and even marketing and sales!');?></p>
                <p class="section--paragraph"><?php echo $l->t('This very website can be hacked on via GitHub, including this page. Find a typoooo interesting, and propose an improvement using the same workflow used to build our software. The same goes for our documentation, and translation happens on its own platform.');?></p>
            </div>
		</div>
	</div>
</div>
</section>

<section class="section--team">
	<div class="container">
        <h1 class="section--heading-1 text-center">Mentors</h1>
        <p class="section--paragraph text-center">Here are some of our mentors. The process of adding more needs you to join too.</p>
	</div>
	<div class="featurerow">
	<div class="wrap container teamgroup">

	<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/camila.jpg" />
				<h2 class="teamname">Camila San Martin Ayres</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Desktop client</h4>
					<h4 class="teamlocation">lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://camila.codes"><i class="fa-rss fa"></i></a> <a href="https://github.com/camilasan"><i class="fa-github fa"></i></a> <a href="https://www.linkedin.com/in/camilaayres"><i class="fa-linkedin fa"></i></a> </p>
				</div>
				<p class="teamdescription">Camila is from Brazil and has worked as front-end developer, with C#, Java and even Delphi. She got into libre software doing C++/Qt development in the KDE community. After moving to Germany she worked with PHP, Ruby on Rails, AngluarJS, Go and Drupal 7. She\'s now a desktop client developer at Nextcloud, and does other things here and elsewhere than C++ sometimes.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/jan.jpg" />
				<h2 class="teamname">Jan-Christoph Borchardt</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Design Lead</h3>
					<h4 class="teamexpertise">Co-founder, Simplicity & Ease of Use</h4>
					<h4 class="teamlocation">lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://jancborchardt.net/"><i class="fa-rss fa"></i></a> <a href="https://github.com/jancborchardt"><i class="fa-github fa"></i></a> <a href="https://twitter.com/jancborchardt"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Jan-Christoph is responsible for design on ownCloud since early 2011, continuing with Nextcloud. He pushes forward better design in libre software through founding and contributing to several projects, giving talks, working with universities, and fostering the Open Source Design collective.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
                    <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Marie Gutbub</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Online Marketer</h3>
					<h4 class="teamexpertise">Marketing and Content</h4>
					<h4 class="teamlocation">lives in Berlin, Germany</h4>
					<p class="teamsocial"><!--<a href="https://spreed.me/"><i class="fa-rss fa"></i></a>--> <a href="https://shiromarieke.github.io/"><i class="fa-rss fa"></i></a> <a href="https://github.com/shiromarieke"><i class="fa-github fa"></i></a> <a href="https://twitter.com/shiromarieke"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Marie studied cultural journalism at the Berlin University of the Arts. She got involved in privacy protection and libre software in 2014, as she started organizing CryptoParties in Berlin. She has worked on many campaigns, trainings and events about privacy, human rights, journalism and open source with the Center for Investigative Journalism, for the Tor Project and the Courage Foundation, among others. </p>
			</div>
        </div>
    </div>
    </div>
</section>

<section class="section--background">
<div class="container">
    <h1 class="section--heading-1 text-center"><?php echo $l->t('Background');?></h1>
</div>
<div class="container">
    <div class="row feature-row">
        <div class="col-md-6 revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/history/frank.jpg" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Why can we be trusted now?');?></p>
            <p class="section--paragraph"><?php echo $l->t('You drive a hard bargain, presumed reader. Effort has been put in since the very start of our project, participating in ');?> <a class="hyperlink" href="https://railsgirlssummerofcode.org/blog/2018-07-23-welcome-to-team-popcorn"><?php echo $l->t('Rails Girls Summer of Code, for example.');?></a> <?php echo $l->t(' When Nextcloud founder Frank Karlitschek');?> <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-founder-wins-innovation-award-donates-prize-money-to-open-source-diversity-fund"><?php echo $l->t('won the Reinhard von König award');?></a> <?php echo $l->t('he decided to donate its 20.000 € prize money to the Nextcloud community to start Nextcloud Include. You can donate, too, if you want. Money and cat pictures accepted.');?></p>
            <a href="mailto:include@nextcloud.com" class="button button--blue button--arrow button--large"><?php echo $l->t('Contact us to donate');?></a>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-4 revealOnScroll image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/history/rk-award.png" alt="in action"/></a>
        </div>
        <div class="col-md-8 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Reinhard von Koenig Award');?></p>
            <p class="section--paragraph"><?php echo $l->t('The bi-annual Reinhard von Koenig award is named after inventor Baron Reinhard von Koenig (1899-1992) and awarded at his former family castle Fachsenfeld in Aalen, located in East Württemberg, the region with the largest number of globally leading companies in Germany. In 1982, Baron von Keunig donated his entire estate and assets to his founding of the Fachsenfeld Foundation, with the goal of promoting technological and cultural innovations. The criteria for the award requires that the prize is awarded to people who have developed new technological approaches to socially relevant challenges, shown technical courage and made a significant contribution to sustainable progress.');?></p>
            <a href="http://reinhard-von-koenig-preis.de/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6 revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/kdeev.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('How is it managed?');?></p>
            <p class="section--paragraph"><?php echo $l->t('To handle the money, we work together with the amazing KDE community which takes care of the financial part. This also means donations are tax-free in many countries.');?></p>
            <p class="section--paragraph"><?php echo $l->t('The spending of the money is decided on by a small group of Nextcloud diversity advocates, including Jan-Christoph Borchardt, Marie Gutbub and Camila San Martin Ayres.');?></p>
            <a href="https://ev.kde.org" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more about KDE e.V.');?></a>
        </div>
    </div>
</div>
</section>
