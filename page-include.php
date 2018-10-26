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
 				<h2><code><?php echo $l->t('include \'diversity.php\';');?></code></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row revealOnScroll">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Diversity strengthens a community. The Nextcloud Include initiative helps underrepresented groups participate in the Nextcloud project, building a diverse and inclusive space where we collaborate and develop world class software.');?></p>
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



<section class="section--advantages">
<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 revealOnScroll">
				<h1 class="section--heading-1 text-center"><?php echo $l->t('Let\'s go!');?></h1>
				<h3 class="text-center"><?php echo $l->t('You want to become a part of the Nextcloud community? Here is how to get started.');?></h3>
            </div>
        </div>
		<div class="row">
            <div class="col-sm-4 revealOnScroll">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/internship.svg" /></div>
                <p class="section--paragraph__tittle"><?php echo $l->t('Look for internship positions');?></p>
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('Have a look at our open job position page if something fits!');?></li>
                    <li><?php echo $l->t('We look for people in all areas so even if there is nothing open, let us know!');?></li>
                    <li><?php echo $l->t('Note that it is a pre if you\'re already involved in Nextcloud - at events, coding, translating or otherwise!');?></li>
                </ul></p>
                <a class="button button--blue button--arrow" href="mailto:bla@nextcloud.com">Sent your resume</a>
            </div>
            <div class="col-sm-4 revealOnScroll">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/travel.svg" /></div>
                <p class="section--paragraph__tittle"><?php echo $l->t('Ask for travel support');?></p>
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('We are looking for people who are or want to get involved in Nextcloud.');?></li>
                    <li><?php echo $l->t('Use the contact email below to sent us an email or contact one of the mentors directly.');?></li>
                    <li><?php echo $l->t('We will assign somebody to help you get started!');?></li>
                </ul></p>
                <a class="button button--blue button--arrow" href="mailto:bla@nextcloud.com"></a>
            </div>
            <div class="col-sm-4 revealOnScroll">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/conversation.svg" /></div>
                <p class="section--paragraph__tittle"><?php echo $l->t('Find a mentor');?></p>
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('Use the contact email below to sent us an email or contact one of the mentors directly.');?></li>
                    <li><?php echo $l->t('We will assign somebody to help you get started!');?></li>
                </ul></p>
                <a class="button button--blue button--arrow" href="mailto:bla@nextcloud.com">Ask us now!</a>
            </div>
        </div>
   		<div class="row">
			<div class="col-md-8 col-md-offset-2 revealOnScroll">
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('contribute') ?>" class="button button--large button--arrow"><?php echo $l->t('See in what areas you can help');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

Look for open internship positions
Ask for travel support
find a mentor


<section class="section--team">
	<div class="container">
		<p class="section--paragraph__tittle">Our mentors</p>
	</div>
	<div class="featurerow">
	<div class="wrap container teamgroup">

	<div class="row">
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/fabian.jpg" />
				<h2 class="teamname">Fabian Liedtke</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Account manager</h3>
					<h4 class="teamexpertise">Customer relations</h4>
					<h4 class="teamlocation">lives in Celle, Germany</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/fabian-liedtke-4b4ba9135"><i class="fa-linkedin fa"></i></a> <a href="https://www.xing.com/profile/Fabian_Liedtke2"><i class="fa-xing fa"></i></a><!--<a href="https://twitter.com/nickvergessen"><i class="fa-twitter fa"></i></a>--> &nbsp; </p>
				</div>
				<p class="teamdescription">Fabian worked for various industries always close to the customer and has been in the IT industry now for several years with a focus on customer relationship management. He is passionate about innovative and new technologies and his primary goal is to help our customers to fulfill their vision.</p>
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
				<p class="teamdescription">Marie studied cultural journalism at the Berlin University of the Arts. She got involved in privacy and open source in 2014, when she started organizing CryptoParties in Berlin. She has worked on many campaigns, trainings and events about privacy, human rights, journalism and open source with the Center for Investigative Journalism, the Tor Project and the Courage Foundation, among others. </p>
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
				<p class="teamdescription">Roeland has been working on improving private file sharing since 2015. He has a MSc degree in Computer Science from the University of Amsterdam, having done research for his PhD in cache partitioning for real time systems. He is in charge of our HackerOne program and works on various security hardenings.</p>
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
				<p class="teamdescription">Jan-Christoph is responsible for design on ownCloud since early 2011, continuing at Nextcloud. He pushes forward better design in open source through founding and contributing to several projects, giving talks, working with universities, and fostering the Open Source Design collective.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/marius.jpg" />
				<h2 class="teamname">Marius Blüm</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Customer Service</h3>
					<h4 class="teamexpertise">Support and Documentation</h4>
					<h4 class="teamlocation">lives in Heilbronn, Germany</h4>
					<p class="teamsocial"><a href="https://github.com/MariusBluem"><i class="fa-github fa"></i></a> <a href="https://twitter.com/MariusBluem"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Marius was active in Nextcloud since day one, contributing in various forms to documentation, website, support and more. He is studying and works part time.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/arthur.jpg" />
				<h2 class="teamname">Arthur Schiwon</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Co-founder, LDAP and Comments</h4>
					<h4 class="teamlocation">lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://arthur-schiwon.de"><i class="fa-rss fa"></i></a> <a href="https://github.com/blizzz"><i class="fa-github fa"></i></a> <!--<a href="https://twitter.com/blizzz"><i class="fa-twitter fa"></i></a>--> </p>
				</div>
				<p class="teamdescription">Arthur Schiwon has been working on ownCloud since 2010, developing state of the art user management and directory support. Before he has been SEO project manager at construktiv and was active in the Kubuntu community, still being a Free and Open Source Software enthusiast and privacy activist.</p>
			</div>
		</div>
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
				<p class="teamdescription">Barthélémy is a software engineer specialized in front-end development. He cares about simplicity and ease of use and likes to create a smooth user experience for everyone. He has been part of the contacts and design team since 2016.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/bjoern.jpg" />
				<h2 class="teamname">Björn Schießle</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Co-founder, Federation and Encryption</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://schiessle.org/"><i class="fa-rss fa"></i></a> <a href="https://github.com/schiessle"><i class="fa-github fa"></i></a> <a href="https://twitter.com/schiessle"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Björn is a computer scientist, graduated at the University of Stuttgart. He conducted research in the area of cloud robotics before he joined ownCloud in 2012 where he started to develop the federated cloud technology, now continued at Nextcloud. He is active in the Free Software movement for many years and has a deep understanding of the technical, legal and social aspects of technology.</p>
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
					<p class="teamsocial"><a href="https://camila.codes"><i class="fa-rss fa"></i></a> <a href="https://github.com/camilasan"><i class="fa-github fa"></i></a> <a href="https://www.linkedin.com/in/camilaayres"><i class="fa-linkedin fa"></i></a> </p>
				</div>
				<p class="teamdescription">Camila is from Brazil and has worked as front-end developer, with C#, Java and even Delphi. She got into open source doing C++/Qt development in the KDE community. After moving to Germany she worked with PHP, Ruby on Rails, AngluarJS, Go and Drupal 7. She's now a desktop client developer at Nextcloud but just might do other things than C++ sometimes.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/christoph.jpg" />
				<h2 class="teamname">Christoph Wurst</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">JavaScript, Two-factor Auth and Mail</h4>
					<h4 class="teamlocation">lives in Schrattenthal, Austria</h4>
					<p class="teamsocial"><a href="http://blog.wuc.me/"><i class="fa-rss fa"></i></a> <a href="https://github.com/ChristophWurst"><i class="fa-github fa"></i></a> <a href="https://twitter.com/ChristophWurst"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Christoph has been contributing to ownCloud since 2014. He is currently doing his Software Engineering master at the University of Applied Sciences Upper Austria.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/daniel.jpg" />
				<h2 class="teamname">Daniel Calviño Sánchez</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Front-end and automated testing</h4>
					<h4 class="teamlocation">lives in Oviedo, Spain</h4>
					<p class="teamsocial"> <a href="https://github.com/danxuliu"><i class="fa-github fa"></i></a> </p>
				</div>
				<p class="teamdescription">Daniel has a master's degree in Computer Engineering. He has been developing all kind of free software projects for several years, including KDE applications, web applications, low-level Android components and even Linux kernel drivers, and now he is applying his experience and passion for free software in the front-end and testing areas of Nextcloud.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/georg.jpg" />
				<h2 class="teamname">Georg Ehrke</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Calendar, Front-end</h4>
					<h4 class="teamlocation">lives in Rostock, Germany</h4>
					<p class="teamsocial"><a href="https://georg.coffee/"><i class="fa-rss fa"></i></a> <a href="https://github.com/georgehrke"><i class="fa-github fa"></i></a> <a href="https://twitter.com/georgehrke"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Georg Ehrke is studying computer science at University of Rostock and maintainer of the Calendar app. He's been doing ownCloud, now Nextcloud, for many years and knows both the front and backend code well.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/harald.jpg" />
				<h2 class="teamname">Harald Pfeifer</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Desktop Client</h4>
					<h4 class="teamlocation">lives in Hollabrunn, Austria</h4>
					<p class="teamsocial"><a href="https://github.com/pfiff45"><i class="fa-github fa"></i></a> <a href="https://twitter.com/HaPfeifer"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Harald does an internship for Software Engineering bachelor at the University of Applied Sciences Upper Austria.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/ivan.jpg" />
				<h2 class="teamname">Ivan Sein</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Monitoring and WebRTC</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><!--<a href="https://www.stdin.xyz/"><i class="fa-rss fa"></i></a>--> <a href="https://github.com/Ivansss"><i class="fa-github fa"></i></a> <!--<a href="https://twitter.com/rullzer"><i class="fa-twitter fa"></i></a>--> </p>
				</div>
				<p class="teamdescription">Ivan graduated as CS engineer from the University of the Basque Country and has been developing the Spreed.ME iOS app since 2013. He has also been working on server monitoring and iOS support.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/joachim.jpg" />
				<h2 class="teamname">Joachim Bauch</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">WebRTC, Realtime Streaming, Telephony Interfacing</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://www.joachim-bauch.de"><i class="fa-rss fa"></i></a> <a href="https://github.com/fancycode"><i class="fa-github fa"></i></a> <a href="https://twitter.com/fancycode"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Joachim graduated computer science in Stuttgart and has been committing to various open source projects for a long time, including Google's WebRTC project and was core developer for the Red5 streaming server between 2005 and 2008.</p>
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
				<p class="teamdescription">Joas has been involved in open source for over a decade, being a core member of the phpBB™ developer team and has been working on ownCloud code since late 2013. He graduated from the University of Stuttgart and developed the Notifications and Activities technology in Nextcloud.</p>
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
				<p class="teamdescription"> Julius is involved in the Nextcloud community since the beginning, working on frontend and backend development of the server and apps like Deck. He is currently doing his master's degree in computer science at the University of Würzburg.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Leon Klingele</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Spreed.ME, Spreedbox, Embedded</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://github.com/leonklingele"><i class="fa-github fa"></i></a> </p>
				</div>
				<p class="teamdescription">Leon is currently doing his Bachelor of Science at Media University, Stuttgart. His primary tasks lie in the development of the Spreedbox and Spreed.ME software components.</p>
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
				<p class="teamdescription">Marino studied telecommunications in Vicenza. While studing engineering at Padua University he founded software company T.W.S. He is the principal author of Crypto Cloud, a popular iOS application which became the base for the Nextcloud iOS app. He is fond of microelectronics, telecommunications and information technology.</p>
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
				<p class="teamdescription">Mario is part of the Nextcloud Android application development team. He studied Informatics and Organization and has been leading Libburnia and Gnomebaker, popular open source projects, for over a decade.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/maxence.jpg" />
				<h2 class="teamname">Maxence Lange</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Consulting Services, App development, Full Text Search</h4>
					<h4 class="teamlocation">lives in Santa Maria, Cape Verde</h4>
					<p class="teamsocial"> <a href="https://github.com/daita"><i class="fa-github fa"></i></a> <a href="https://twitter.com/AnArtificialOwl"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Maxence has extensive experience in PHP and Java/android development as well as database and network management. He is the principal author and maintainer of the Nextant full-text search app.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/morris.jpg" />
				<h2 class="teamname">Morris Jobke</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software and Support Engineer</h3>
					<h4 class="teamexpertise">Co-founder, Server and Support</h4>
					<h4 class="teamlocation">lives in Chemnitz, Germany</h4>
					<p class="teamsocial"><a href="http://morrisjobke.de/"><i class="fa-rss fa"></i></a> <a href="https://github.com/MorrisJobke"><i class="fa-github fa"></i></a> <a href="https://twitter.com/MorrisJbk"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Morris has worked on ownCloud since early 2013. He has worked with most components of the server and uses his experience now at Nextcloud to troubleshoot and create fixes for issues in large scale installations.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/robin.jpg" />
				<h2 class="teamname">Robin Appelman</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Co-founder, Filesystem and Scalability</h4>
					<h4 class="teamlocation">lives in Eindhoven, Netherlands</h4>
					<p class="teamsocial"><a href="https://icewind.nl"><i class="fa-rss fa"></i></a> <a href="https://github.com/icewind1991"><i class="fa-github fa"></i></a> <a href="https://twitter.com/icewind1991"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Robin studied computer science and is highly experienced in scaling file storage and handling systems. He has been working on ownCloud code since 2010 and has, at one point or another, touched code in every corner.</p>
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
				<p class="teamdescription">Tobias studied Sports and Computer Science in Darmstadt, is an experienced Java/Scala engineer and has a background in database development at a research institute for applied training science. He has been contributing to the Android app since 2013.</p>
			</div>
		</div>
	</div>
</section>


<section class="section--main">
	<div class="container">
		<div class="featurerow">
			<div class="row">
<!-- 				</div> -->
				<div class="col-md-6 revealOnScroll image--floated">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/html5.png" alt="in action" />
				</div>
				<div class="col-md-6 featureblock revealOnScroll">
					<h2 class="section--paragraph__tittle"><?php echo $l->t('How you can get involved');?></h2>
					<p class="section--paragraph"><?php echo $l->t('ONLYOFFICE is built on the HTML5 Canvas, providing:');?></p>
					<ul>
					<li><?php echo $l->t('A modern and familiar user interface');?></li>
					<li><?php echo $l->t('The same document rendering in every browser');?></li>
					<li><?php echo $l->t('Low resource consumption on server and client');?></li>
					<li><?php echo $l->t('Desktop level editing capabilities');?></li>
					</ul>
					<p class="section--paragraph"><?php echo $l->t('Full support for MS office formats like DOCX and PPTX is provided, as well as import and export of the Open Document Format.');?></p>
				</div>
			</div>
		</div>

		<div class="featurerow">
			<div class="row">
				<div class="col-md-6 revealOnScroll">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/include-integration.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 revealOnScroll featureblock">
					<h2 class="section--paragraph__tittle"><?php echo $l->t('Integrated and on-premises');?></h2>
					<p class="section--paragraph"><?php echo $l->t('Instead of handing over data to a third party, ONLYOFFICE runs in your own data center, guaranteeing 100% confidentiality of the documents.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Integration in Nextcloud makes it easy to work on documents alone, with other Nextcloud users or with others whom participate through a publicly shared link.');?></p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section--features">
    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/include-3.png" alt="in action" /></a>
	<div class="container">
		<div class="featurerow">
			<div class="row">
<!-- 				</div> -->
				<div class="col-md-4 revealOnScroll">
				<h2 class="section--paragraph__tittle"><?php echo $l->t('Advanced tools');?></h2>
					<ul>
					<li><?php echo $l->t('Edit inline charts;');?></li>
					<li><?php echo $l->t('Group objects;');?></li>
					<li><?php echo $l->t('Insert text boxes;');?></li>
					<li><?php echo $l->t('Spell Checking;');?></li>
					<li><?php echo $l->t('Translation & Macros;');?></li>
                </div>
                <div class="col-md-4 revealOnScroll">
                    <h2 class="section--paragraph__tittle"><?php echo $l->t('Great design');?></h2>
					<li><?php echo $l->t('Work with auto-shapes;');?></li>
					<li><?php echo $l->t('Add Text Art objects;');?></li>
					<li><?php echo $l->t('Apply colour schemes;');?></li>
					<li><?php echo $l->t('Cell text formatting;');?></li>
					<li><?php echo $l->t('YouTube Integration;');?></li>
					</ul>
				</div>
				<div class="col-md-4 featureblock revealOnScroll">
					<h2 class="section--paragraph__tittle"><?php echo $l->t('Perfect collaboration');?></h2>
					<ul>
					<li><?php echo $l->t('Public read only/read write links;');?></li>
                    <li><?php echo $l->t('Track changes, accept/reject changes;');?></li>
                    <li><?php echo $l->t('Multiple co-editing modes');?></li>
                    <li><?php echo $l->t('Commenting;');?></li>
                    <li><?php echo $l->t('Mail merge.');?></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="featurerow">
			<div class="row">
				<div class="col-md-6 revealOnScroll">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/include-integration-details.png" alt="in action" />
				</div>
				<div class="col-md-4 col-md-offset-2 revealOnScroll featureblock">
					<h2 class="section--paragraph__tittle"><?php echo $l->t('Seamless integration');?></h2>
					<ul>
                        <li><?php echo $l->t('File creation, editing, saving;');?></li>
                        <li><?php echo $l->t('Conversion to OOXML formats;');?></li>
                        <li><?php echo $l->t('File versions;');?></li>
                        <li><?php echo $l->t('Federated share support;');?></li>
                        <li><?php echo $l->t('Editing via public links;');?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container-fluid call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock revealOnScroll">
				<h1 class="section--heading-1 text-center"><?php echo $l->t('For home users');?></h1>
				<div class="text-center morebuttondiv">
					<a href="https://www.include.com/download.aspx" class="button button--large button--arrow"><?php echo $l->t('Get ONLYOFFICE for at home');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
