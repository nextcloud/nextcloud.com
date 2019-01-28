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
 				<h2><code><?php echo $l->t('Supporting diversity in open source');?></code></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row revealOnScroll">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Diversity strengthens a community. The Nextcloud Include initiative helps underrepresented groups to join the Nextcloud project, building an inclusive and diverse space where we collaborate and develop world class software.');?></p>
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
			<p class="section--paragraph text-center"><?php echo $l->t('We provide mentoring to people new to our community.');?></p>
        </div>
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/travel.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Travel support');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('We sponsor the travel & accommodation to help people from underrepresented groups in opensource to join Nextcloud events.');?></p>
		</div>
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/internship.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Internships');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('We hire students from underrepresented groups to intern at Nextcloud GmbH.');?></p>
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
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('There are many areas in Nextcloud you can get involved in. From technical tasks like building an app, design, coding on the front or back-end to translation and helping out on the forums.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('We want to enable everyone to get involved and we recognize that the privileged nature of the tech community is an extra barrier for underrepresented groups. We hope to help lower that barrier by connecting you directly to somebody who wants to help you.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('We have a number of people who are happy to help you get started!');?></p>
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
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('The Nextcloud community meets regularly at big hackweeks or smaller ad-hoc ones all over Europe. We also host our yearly Nextcloud Conference and attend many events like FOSDEM and SCALE.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('We want to support participants from underrepresented groups in Open Source to join these events by sponsoring part or the whole of their transportation and accomodation costs.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('If you would like to join a Nextcloud event, let us know! We typically support 80% of the travel & hotel costs but we can accommodate you if that would not be sufficient. Don\'t hesitate to reach out and ask!');?></p>   
          <p class="section--intro text-center revealOnScroll"><?php echo $l->t('If you don\'t think you are part of an underrepresented group in Open Source and need travel support, please do not reach out here. You can read more about our community travel support program <a href="https://nextcloud.com/events/#ts">here</a>.');?></p>
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
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud is always on the look-out for new talents and we\'d like to give beginning developers, marketeers and sales people a chance to learn practical skills with us!');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('We encourage people from underrepresented groups to apply for these positions and to send their resume.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('You can find open positions on our jobs page but please don\'t hesitate to send you resume if there is nothing that fits you - we just might not yet know we need you!');?></p>
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
                <p class="section--paragraph__tittle"><?php echo $l->t('Is there a problem in the Nextcloud community?');?></p>
                <p class="section--paragraph"><?php echo $l->t('We are a very nice, friendly and welcoming community. But, like just saying "you are welcome to join the conference" to parents with kids without providing a playground is not enough, we need to be pro-active.');?></p>
                <p class="section--paragraph"><?php echo $l->t('So, with Include, we want to make a real effort to improve.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Open Source and tech in general values meritocracy and that is a great sentiment, but reality is that the we are not as meritocratic as we like to believe. Even software developers (ahum) are human and can\'t help taking non-technical factors into account when judging code and people. The result of that is that we structurally fail to value some contributions, even if they are of equal or better quality than others, simply because of whom they come from. On top of that, most tech environments have cultivated a very monochromatic, often downright toxic culture towards anyone who does not fit in. Usually the people in it don\'t notice it at all. Sadly, it is hard to empathize with people very different than us and humans rarely recognize the peculiarities and downsides of the culture they live in.');?></p>
                <p class="section--paragraph__tittle"><?php echo $l->t('Am I still welcome?');?></p>
                <p class="section--paragraph"><?php echo $l->t('You are not part of any group of people that seems to be underrepresented at Nextcloud? You are of course just as welcome as before. This is a specific program that helps us support underrepresented groups. Trying to compensate for a structural disadvantage is not exact science, but Nextcloud is certainly no less open today to anyone as it was before we announced Include.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Mentorship, travel support and internships have always been available to anyone active in our community and will continue to be the way they always were.');?></p>
                <p class="section--paragraph__tittle"><?php echo $l->t('Is Nextcloud Include only for developers?');?></p>
                <p class="section--paragraph"><?php echo $l->t('No, certainly not, though we are of course a largely technical community trying to help people solve a societal and political issue. We welcome help with documentation, design, translation, and even marketing and sales!');?></p>
                <p class="section--paragraph"><?php echo $l->t('Did you know our website is entirely built in github including this page? Find a typo - you can propose an improvement using the same workflow as we use to build our software. The same goes for our documentation and translation, those, too, are collaborated on in the open.');?></p>
            </div>
		</div>
	</div>
</div>
</section>

<section class="section--team">
	<div class="container">
        <h1 class="section--heading-1 text-center">Program coordinators</h1>    
	</div>
	<div class="featurerow">
	<div class="wrap container teamgroup">
       <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/camila.jpg" />
				<h2 class="teamname">Camila</h2>
				<div class="teammeta">
					<h4 class="mentoring">Desktop app, C++</h4>
				</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/jan.jpg" />
				<h2 class="teamname">Jan-Christoph</h2>
				<div class="teammeta">
					<h4 class="mentoring">Design, UX, HTML & CSS</h4>
				</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="teamp">
                    <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/marie.jpg" />
				<h2 class="teamname">Marie</h2>
				<div class="teammeta">
					<h4 class="mentoring">Event organization, marketing, writing, community, translations</h4>
				</div>
			</div>
			</div>

    </div>
    </div>
    <div class="container">
        <h1 class="section--heading-1 text-center">Mentors</h1>    
	</div>
	<div class="featurerow">
	<div class="wrap container teamgroup">
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/john.jpg" />
				<h2 class="teamname">Barthélémy</h2>
				<div class="teammeta">
					<h4 class="mentoring">Contacts app, Design, UX, Accessibility, Javascript, Vue.js, HTML & CSS</h4>
				</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/christoph.jpg" />
				<h2 class="teamname">Christoph</h2>
				<div class="teammeta">
					<h4 class="mentoring">Mail app, two-factor auth, JavaScript, Vue.js, php, Rust</h4>
				</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/joas.jpg" />
				<h2 class="teamname">Joas</h2>
				<div class="teammeta">
					<h4 class="mentoring">Talk app, Server core, PHP, Database</h4>
				</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/julius.jpg" />
				<h2 class="teamname">Julius</h2>
				<div class="teammeta">
					<h4 class="mentoring">Deck app, Javascript, Vue.js, PHP, HTML & CSS</h4>
				</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/marino.jpg" />
				<h2 class="teamname">Marino</h2>
				<div class="teammeta">
					<h4 class="teamexpertise">Apple App, Object-C, Swift, C C++, Assembly</h4>
				</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/mario.jpg" />
				<h2 class="teamname">Mario</h2>
				<div class="teammeta">
					<h4 class="mentoring">Talk Android app, Java</h4>
				</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/roeland.jpg" />
				<h2 class="teamname">Roeland</h2>
				<div class="teammeta">
					<h4 class="mentoring">Server core, PHP, Desktop C++</h4>
				</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/tobias.jpg" />
				<h2 class="teamname">Tobias</h2>
				<div class="teammeta">
					<h4 class="mentoring">Android app, Java</h4>
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
            <p class="section--paragraph__tittle"><?php echo $l->t('Where does this come from?');?></p>
            <p class="section--paragraph"><?php echo $l->t('We have been putting in effort in diversity since we started our project, participating in ');?> <a class="hyperlink" href="https://railsgirlssummerofcode.org/blog/2018-07-23-welcome-to-team-popcorn"><?php echo $l->t('Rails Girls Summer of Code for example.');?></a> <?php echo $l->t(' When Nextcloud founder Frank Karlitschek');?> <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-founder-wins-innovation-award-donates-prize-money-to-open-source-diversity-fund"><?php echo $l->t('won the Reinhard von König award');?></a> <?php echo $l->t('he decided to donate its 20.000 euro prize money to the Nextcloud community to start a diversity program! That provided a great start for this and we hope it will be just the beginning: you can donate, too, if you want!');?></p>
            <a href="mailto:include@nextcloud.com" class="button button--blue button--arrow button--large"><?php echo $l->t('Contact us to donate');?></a>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-4 revealOnScroll image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/history/rk-award.png" alt="in action"/></a>
        </div>
        <div class="col-md-8 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Reinhard von Koenig Award');?></p>
            <p class="section--paragraph"><?php echo $l->t('The bi-annual Reinhard von Koenig award is named after inventor Baron Reinhard von Koenig (1899-1992) and awarded at his former family castle Fachsenfeld in Aalen, located in East Württemberg, the region with the largest number of globally leading companies in Germany. In 1982, Baron von Koenig donated his entire estate and assets to the Fachsenfeld Foundation he founded, with the goal of promoting technological and cultural innovations. The criteria for the award requires that the prize is awarded to people who have developed new technological approaches to socially relevant challenges, shown technical courage and made a significant contribution to sustainable progress.');?></p>
            <a href="http://reinhard-von-koenig-preis.de/" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6 revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/kdeev.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('How is it managed?');?></p>
            <p class="section--paragraph"><?php echo $l->t('To handle the money, we work together with the amazing KDE community which takes care of the financial part. This also means donations are tax-free in many countries!');?></p>
            <p class="section--paragraph"><?php echo $l->t('The spending of the money is decided on by a small group of Nextcloud diversity advocates, including Jan-Christoph Borchardt, Marie Gutbub and Camila San Martin Ayres.');?></p>
            <a href="https://ev.kde.org" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more about KDE e.V.');?></a>
        </div>
    </div>
</div>
</section>
