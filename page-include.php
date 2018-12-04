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
			<p class="section--paragraph text-center"><?php echo $l->t('We sponsor the travel & accommodation for participation in Nextcloud events.');?></p>
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
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('We want to support participants to join these events by sponsoring part or the whole of their transportation and accomodation costs.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('If you would like to join a Nextcloud event, let us know! We typically support 80% of the travel & hotel costs but we can accommodate you if that would not be sufficient. Don\'t hesitate to reach out and ask!');?></p>
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
        <h1 class="section--heading-1 text-center">Mentors</h1>
        <p class="section--paragraph text-center">Here are some of our mentors. We are in the process of adding more and you can join, too!</p>
	</div>
	<div class="featurerow">
	<div class="wrap container teamgroup">
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/john.jpg" />
				<h2 class="teamname">Barthélémy Briand</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Server, contacts, front-end and accessibility</h4>
					<h4 class="teamlocation">lives in France</h4>
					<p class="teamsocial"><a href="https://github.com/skjnldsv"><i class="fa-github fa"></i></a> <a href="https://twitter.com/skjnldsv"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Barthélémy is a software engineer specialized in front-end development. He cares about the Contacts app; Design, UX and Accessibility and loves to mentor people in the areas of Javascript, Vue.js, HTML and CSS.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/camila.jpg" />
				<h2 class="teamname">Camila San Martin Ayres</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Desktop client</h4>
					<h4 class="teamlocation">lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://camila.codes"><i class="fa-rss fa"></i></a> <a href="https://github.com/camilasan"><i class="fa-github fa"></i></a> <a href="https://www.linkedin.com/in/camilasan"><i class="fa-linkedin fa"></i></a> </p>
				</div>
				<p class="teamdescription">Camila is from Brazil and has worked as front-end developer, with C#, Java and even Delphi. She maintains our desktop client and is happy to help anyone get involved there. The app is written in C++ using the Qt toolkit.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/christoph.jpg" />
				<h2 class="teamname">Christoph Wurst</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Front-end, Two-factor Authenthication and Mail</h4>
					<h4 class="teamlocation">lives in Hadres, Austria</h4>
					<p class="teamsocial"><a href="http://blog.wuc.me/"><i class="fa-rss fa"></i></a> <a href="https://github.com/ChristophWurst"><i class="fa-github fa"></i></a> <a href="https://twitter.com/ChristophWurst"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Christoph has a masters degree in Software Engineering, lives in Hadres (mind the r) and is happy to help people get into JavaScript, Mail coding, two-factor auth, Vue.js, PHP or Rust.</p>
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
				<p class="teamdescription">Jan-Christoph is responsible for design on ownCloud since early 2011, continuing at Nextcloud. He is happy to help anyone with getting involved in design and UX and around HTML and CSS.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Julius Härtl</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Server and apps</h4>
					<h4 class="teamlocation">lives in Würzburg, Germany</h4>
					<p class="teamsocial"><a href="https://blog.juliushaertl.de/"><i class="fa-rss fa"></i></a> <a href="https://github.com/juliushaertl"><i class="fa-github fa"></i></a> <a href="https://twitter.com/jus_42"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Julius is a long time contributor, working on frontend and backend development of the server and apps like Deck while woring on his master's degree. If you like front-end or Kanban, JavaScript, Vue.js, PHP, HTML or CSS, he can get you up to speed in no time!</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/joas.jpg" />
				<h2 class="teamname">Joas Schilling</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Co-founder, Activity, Workflow and Notifications</h4>
					<h4 class="teamlocation">lives in Heilbronn, Germany</h4>
					<p class="teamsocial"><a href="https://www.schilljs.com/"><i class="fa-rss fa"></i></a> <a href="https://github.com/nickvergessen"><i class="fa-github fa"></i></a> <a href="https://twitter.com/nickvergessen"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Joas has been involved in open source for over a decade, studied at the University of Stuttgart and he can help you with Talk app, Server core, PHP, Database technology as well as things he developed like Notifications and Activities.</p>
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
				<p class="teamdescription">Marie studied cultural journalism at the Berlin University of the Arts. She is part of the Nextcloud marketing team and is more than happy to get anyone up to speed in marketing, writing and event organization.</p>
			</div>
        </div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/marino.jpg" />
				<h2 class="teamname">Marino Faggiana</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Apple iOS developer</h4>
					<h4 class="teamlocation">lives in Vicenza, Italy</h4>
					<p class="teamsocial"> <a href="https://github.com/marinofaggiana"><i class="fa-github fa"></i></a> <a href="https://twitter.com/marinofaggiana"><i class="fa-twitter fa"></i></a> <a href="https://www.linkedin.com/in/marino-faggiana-596569106/"><i class="fa-linkedin fa"></i></a></p>
				</div>
				<p class="teamdescription">Marino studied telecommunications in Vicenza and can teach you about Apple App, Object-C, Swift, C C++ (Turbo Pascal if you really want) and assembly.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/mario.jpg" />
				<h2 class="teamname">Mario Danic</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Android Development</h4>
					<h4 class="teamlocation">lives in Croatia</h4>
					<p class="teamsocial"> <a href="https://github.com/mario"><i class="fa-github fa"></i></a> <a href="https://twitter.com/mdjanic"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Mario  studied Informatics and Organization and has been the lead dev on the open source projects Libburnia and Gnomebaker. He's happy to help anyone get into Android development, be it on the Talk or Files apps.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/roeland.jpg" />
				<h2 class="teamname">Roeland Douma</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Security Lead</h3>
					<h4 class="teamexpertise">Co-founder, Desktop Client, Sharing</h4>
					<h4 class="teamlocation">lives in Zuidoostbeemster, Netherlands</h4>
					<p class="teamsocial"><a href="http://rullzer.com/"><i class="fa-rss fa"></i></a> <a href="https://github.com/rullzer"><i class="fa-github fa"></i></a> </p>
				</div>
				<p class="teamdescription">Roeland has a MSc degree in Computer Science from the University of Amsterdam and takes care of the server, desktop client & security things in Nextcloud. If you want to work on C++, the server or, of course, security - count on him to help you!</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/tobias.jpg" />
				<h2 class="teamname">Tobias Kaminsky</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Android Client</h4>
					<h4 class="teamlocation">lives in Langen, Germany</h4>
					<p class="teamsocial"><a href="https://github.com/tobiasKaminsky"><i class="fa-github fa"></i></a></p>
				</div>
				<p class="teamdescription">Tobias studied Sports and Computer Science in Darmstadt, is an experienced Java/Scala engineer and has a background in database development. He 'does Android' in Nextcloud and is happy to mentor you in that area, too!</p>
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
