<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/team.css" rel="stylesheet">
<script>
	require(["require.config"], function() {
		require(["modules/submenu", "bootstrap"])
	});
</script>
</head>
<section class="hero-section second-menu">
	<div class="background team-background">
		<div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Meet the team');?></h1>
				<h2><?php echo $l->t('The experts ready to support you.');?></h2>
			</div>
		</div>
	</div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
<!--			<a href="#expertise"><?php echo $l->t('expertise');?></a>
			<a href="#security"><?php echo $l->t('security');?></a>
			<a href="#lifecycle"><?php echo $l->t('lifecycle');?></a>
			<a href="#capabilities"><?php echo $l->t('capabilities');?></a>-->
			<a class="btn btn-primary" href="/about"><?php echo $l->t('About us');?></a>
			<a class="btn btn-primary" href="/contributors"><?php echo $l->t('Community');?></a>
			<a class="btn btn-primary" href="/jobs"><?php echo $l->t('Jobs');?></a>
		</div>
	</div>
</section>
<section class="section--team">
	<div class="container">
		<p class="section--paragraph">Open source cloud computing is our passion at Nextcloud GmbH and we've built a great team of experts around it. Our engineers, designers and support professionals work as an integral part of the wider Nextcloud community to give customers direct access to the most advanced, in-depth knowledge they need for success.</p>
	</div>
	<div class="featurerow">
	<div class="wrap container teamgroup">

	<div class="row">
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/frank.jpg" />
				<h2 class="teamname">Frank Karlitschek</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Managing Director</h3>
					<h4 class="teamexpertise">Founder</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://karlitschek.de/"><i class="fa-rss fa"></i></a> <a href="https://github.com/karlitschek"><i class="fa-github fa"></i></a> <a href="https://twitter.com/fkarlitschek"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Frank founded the ownCloud project in 2010 to put home users and enterprises back in control of their data. To improve the company-community balance and accelerate the project he founded Nextcloud in 2016 and has been tirelessly working to realize his vision ever since.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/niels.jpg" />
				<h2 class="teamname">Niels Mache</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Managing Director</h3>
					<h4 class="teamexpertise">Founder</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><!--<a href="https://spreed.me/"><i class="fa-rss fa"></i></a>--> <!--<a href="https://github.com/"><i class="fa-github fa"></i></a>--> <a href="https://twitter.com/nielsmache"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Currently managing director at <a href="http://www.struktur.de/">Struktur AG</a> and Nextcloud GmbH, Niels was a co-founder of delix GmbH, one of the first Linux service providers, and of Red Hat Deutschland GmbH. During this time he led Red Hat Deutschland's development department as Director of Development, among other positions.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/andreas.jpg" />
				<h2 class="teamname">Andreas Rode</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Head of Sales</h3>
					<h4 class="teamexpertise">Sales and Partnerships</h4>
					<h4 class="teamlocation">lives in Hannover, Germany</h4>
					<p class="teamsocial"><a href="https://www.xing.com/profile/Andreas_Rode2"><i class="fa-xing fa"></i></a><!--<a href="https://github.com/nickvergessen"><i class="fa-github fa"></i></a>--> <!--<a href="https://twitter.com/nickvergessen"><i class="fa-twitter fa"></i></a>--> &nbsp; </p>
				</div>
				<p class="teamdescription">Andreas studied Economics and has 20 years experience in Business Development, Partner- and Sales Management. Andreas worked for companies like Oracle, EMC, Yahoo and Google and also for start ups in the Cloud Computing and Online Marketing space.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/olivier.jpg" />
				<h2 class="teamname">Olivier Paroz</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Senior Solutions Consultant</h3>
					<h4 class="teamexpertise">Business solutions, multimedia and Snap</h4>
					<h4 class="teamlocation">lives in Lausanne, Switzerland</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/olivierparoz"><i class="fa-rss fa"></i></a> <a href="https://github.com/oparoz"><i class="fa-github fa"></i></a> <a href="https://twitter.com/oparoz"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Olivier studied Economics and Information and Communications Systems Management at the University of Geneva. He has 15 years experience in delivering strategic solutions with a focus on open source, security and privacy for customers in industries as diverse as telecom, media, insurance, retail, broadcasting, sports and science.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/patrick.jpg" />
				<h2 class="teamname">Patrick Walther</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Sales Manager</h3>
					<h4 class="teamexpertise">Sales and Finance</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><!--<a href="https://www.schilljs.com/"><i class="fa-rss fa"></i></a>--> <!--<a href="https://github.com/nickvergessen"><i class="fa-github fa"></i></a>--> <!--<a href="https://twitter.com/nickvergessen"><i class="fa-twitter fa"></i></a>--> &nbsp; </p>
				</div>
				<p class="teamdescription">Patrick was co-founder of struktur AG in 2000, responsible for sales and finance. He held several sales and marketing positions at IBM and Oracle, adding up to more than two decades of experience in the IT industry.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/jos.jpg" />
				<h2 class="teamname">Jos Poortvliet</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Head of Marketing</h3>
					<h4 class="teamexpertise">Marketing and communication</h4>
					<h4 class="teamlocation">lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="http://blog.jospoortvliet.com/"><i class="fa-rss fa"></i></a> <a href="https://github.com/jospoortvliet"><i class="fa-github fa"></i></a> <a href="https://twitter.com/jospoortvliet"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Jos graduated in Psychology from the University of Utrecht and did project and service level management at Royal Bank of Scottland, KPN and the Dutch Department of Education. He has over a decade open source marketing and PR experience, previously working as Community Manager for SUSE Linux and ownCloud GmbH.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="What I look like when not eaten by a shark" src="<?php bloginfo('template_directory'); ?>/assets/img/people/lukas.jpg" />
				<h2 class="teamname">Lukas Reschke</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Security Lead</h3>
					<h4 class="teamexpertise">Security</h4>
					<h4 class="teamlocation">lives in St. Gallen, Switzerland</h4>
					<p class="teamsocial"><a href="https://statuscode.ch/"><i class="fa-rss fa"></i></a> <a href="https://github.com/LukasReschke"><i class="fa-github fa"></i></a> <a href="https://twitter.com/LukasReschke"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Lukas has been contributing to Nextcloud code since 2012, and is responsible for many of the security hardenings in the code. He has worked as security assessment and forensic investigator, reviewing security, giving trainings and dealing with breaches at Fortune 500 companies and several of the largest Swiss financial institutes.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/vanessa.jpg" />
				<h2 class="teamname">Vanessa Steeg</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Project Manager</h3>
					<h4 class="teamexpertise">Marketing, Media design and project management</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><!--<a href="http://blog.jospoortvliet.com/"><i class="fa-rss fa"></i></a>--> <!--<a href="https://github.com/jospoortvliet"><i class="fa-github fa"></i></a>--> <!--<a href="https://twitter.com/vanesteeg"><i class="fa-twitter fa"></i></a>--> &nbsp;</p>
				</div>
				<p class="teamdescription">Vanessa has a degree in Media Design and qualifications as Executive Assistant in various languages (German, English and Spanish). Her experience ranges from project management to graphic design, marketing and communication.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/jan.jpg" />
				<h2 class="teamname">Jan-Christoph Borchardt</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Design Lead</h3>
					<h4 class="teamexpertise">simplicity & ease of use</h4>
					<h4 class="teamlocation">lives in Munich, Germany</h4>
					<p class="teamsocial"><a href="https://jancborchardt.net/"><i class="fa-rss fa"></i></a> <a href="https://github.com/jancborchardt"><i class="fa-github fa"></i></a> <a href="https://twitter.com/jancborchardt"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Jan-Christoph is responsible for design on the project since early 2011. He pushes forward better design in open source through founding and contributing to several projects, giving talks, working with universities, and fostering the Open Source Design collective.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/brian.jpg" />
				<h2 class="teamname">Brian Krause</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Support Engineer</h3>
					<h4 class="teamexpertise">Spreed.ME</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://www.xing.com/profile/Brian_Krause"><i class="fa-xing fa"></i></a> <!--<a href="https://github.com/longsleep"><i class="fa-github fa"></i></a> <a href="https://twitter.com/rullzer"><i class="fa-twitter fa"></i></a>--></p>
				</div>
				<p class="teamdescription">Brian has a degree as IT-Systemkaufmann, decades of professional experience in IT Customer Service, Support and Sales and joined Struktur AG in 2010 as Customer Care representative. As first contact person for Nextcloud, Struktur AG and Spreed he makes sure you get the best possible support.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/artur.jpg" />
				<h2 class="teamname">Artur Bergen</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Spreedbox, Spreed.ME</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://de.linkedin.com/in/artur-bergen-3b113090"><i class="fa-rss fa"></i></a> <a href="https://github.com/artberg"><i class="fa-github fa"></i></a> <!--<a href="https://twitter.com/rullzer"><i class="fa-twitter fa"></i></a>--> </p>
				</div>
				<p class="teamdescription">Artur graduated Interface Designer (B.A.) and he is currently doing his second Bachelor in Media Informatics (B.Sc.), Stuttgart. His primary tasks lie in the development of the Spreedbox and Spreed.ME hardware and software components.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/arthur.jpg" />
				<h2 class="teamname">Arthur Schiwon</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">LDAP and Comments maintainer</h4>
					<h4 class="teamlocation">lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://arthur-schiwon.de"><i class="fa-rss fa"></i></a> <a href="https://github.com/blizzz"><i class="fa-github fa"></i></a> <!--<a href="https://twitter.com/blizzz"><i class="fa-twitter fa"></i></a>--> </p>
				</div>
				<p class="teamdescription">Arthur Schiwon has been working on Nextcloud code since 2010, developing state of the art user management and directory support. He has been SEO project manager at construktiv and was active in the Kubuntu community, still being a Free and Open Source Software enthusiast and privacy activist.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/bjoern.jpg" />
				<h2 class="teamname">Björn Schießle</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Federation and Encryption</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://schiessle.org/"><i class="fa-rss fa"></i></a> <a href="https://github.com/schiessle"><i class="fa-github fa"></i></a> <a href="https://twitter.com/schiessle"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Björn has been developing federated technology for Nextcloud since 2012. Computer Scientist, graduated at University of Stuttgart and Open Source and Open Standards Evangelist for privacy respecting, distributed and federated networks, FSFE's Deputy Coordinator Germany has a deep understanding of the technical and social aspects of technology.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/christoph.jpg" />
				<h2 class="teamname">Christoph Wurst</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">JavaScript, two-factor auth and Mail app</h4>
					<h4 class="teamlocation">lives in Schrattenthal, Austria</h4>
					<p class="teamsocial"><a href="http://blog.wuc.me/"><i class="fa-rss fa"></i></a> <a href="https://github.com/ChristophWurst"><i class="fa-github fa"></i></a> <a href="https://twitter.com/ChristophWurst"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Christoph has been contributing to the project since 2014. He is currently doing his Software Engineering master at the University of Applied Sciences Upper Austria.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/dirk.jpg" />
				<h2 class="teamname">Dirk Farin</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Research Scientist and Software Engineer</h3>
					<h4 class="teamexpertise">WebRTC, Codecs, Spreed.ME</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="http://www.dirk-farin.net/"><i class="fa-rss fa"></i></a> <a href="https://github.com/farindk"><i class="fa-github fa"></i></a> <!--<a href="https://twitter.com/rullzer"><i class="fa-twitter fa"></i></a>--> </p>
				</div>
				<p class="teamdescription">Dirk graduated from the University of Stuttgart, Germany and received his PhD from the University of Technology in Eindhoven. He worked on MPEG-4 video coding, panoramic video visualiation and compression for 3-D television at universities and research institutions in Europe and the United States and currently works on an open source H.265 decoding/encoding library.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Georg Ehrke</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Calendar</h4>
					<h4 class="teamlocation">lives in Rostock, Germany</h4>
					<p class="teamsocial"><a href="https://georg.coffee/"><i class="fa-rss fa"></i></a> <a href="https://github.com/georgehrke"><i class="fa-github fa"></i></a> <a href="https://twitter.com/georgehrke"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Georg Ehrke is studying computer science at University of Rostock and maintainer of the Calendar app. He's been doing Nextcloud for many years and knows both the front and backend code well.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/ivan.jpg" />
				<h2 class="teamname">Ivan Sein</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">monitoring app and Spreed.ME integration</h4>
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
					<h4 class="teamexpertise">WebRTC, realtime streaming, telephony interfacing</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://www.joachim-bauch.de"><i class="fa-rss fa"></i></a> <a href="https://github.com/fancycode"><i class="fa-github fa"></i></a> <a href="https://twitter.com/fancycode"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Joachim graduated computer science in Stuttgart and has been committing to various open source projects for a long time, including Google's WebRTC project and was core developer for the Red5 streaming server between 2005 and 2008.</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="teamp">
			<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/mario.jpg" />
			<h2 class="teamname">Mario Danic</h2>
			<div class="teammeta">
				<h3 class="teamtitle">Software Engineer</h3>
				<h4 class="teamexpertise">Android app</h4>
				<h4 class="teamlocation">lives in Croatia</h4>
				<p class="teamsocial"> <a href="https://github.com/mario"><i class="icon-github icon"></i></a> <a href="https://twitter.com/mdjanic"><i class="icon-twitter icon"></i></a></p>
			</div>
			<p class="teamdescription">Mario is responsible for the Nextcloud Android application development. He studied Informatics and Organization and has been leading Libburnia and Gnomebaker, popular open source projects, for over a decade.</p>
		</div>
	</div>
	<div class="col-md-4">
		<div class="teamp">
			<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/morris.jpg" />
			<h2 class="teamname">Morris Jobke</h2>
			<div class="teammeta">
				<h3 class="teamtitle">Software and Support Engineer</h3>
				<h4 class="teamexpertise">Server and Support</h4>
				<h4 class="teamlocation">lives in Chemnitz, Germany</h4>
				<p class="teamsocial"><a href="http://morrisjobke.de/"><i class="icon-rss icon"></i></a> <a href="https://github.com/MorrisJobke"><i class="icon-github icon"></i></a> <a href="https://twitter.com/MorrisJbk"><i class="icon-twitter icon"></i></a> </p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Leon Klingele</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Spreed.ME, Spreedbox</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://github.com/leonklingele"><i class="fa-github fa"></i></a> </p>
				</div>
				<p class="teamdescription">Leon is currently doing his Bachelor of Science at Media University, Stuttgart. His primary tasks lie in the development of the Spreedbox and Spreed.ME software components.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/morris.jpg" />
				<h2 class="teamname">Morris Jobke</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software and Support Engineer</h3>
					<h4 class="teamexpertise">Server and Support</h4>
					<h4 class="teamlocation">lives in Chemnitz, Germany</h4>
					<p class="teamsocial"><a href="http://morrisjobke.de/"><i class="fa-rss fa"></i></a> <a href="https://github.com/MorrisJobke"><i class="fa-github fa"></i></a> <a href="https://twitter.com/MorrisJbk"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Morris has worked on the project since early 2013. He has worked with most components of the server and uses his experience to troubleshoot and create fixes for issues in large scale installations.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/robin.jpg" />
				<h2 class="teamname">Robin Appelman</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Filesystem and scalability</h4>
					<h4 class="teamlocation">lives in Eindhoven, Netherlands</h4>
					<p class="teamsocial"><a href="https://icewind.nl"><i class="fa-rss fa"></i></a> <a href="https://github.com/icewind1991"><i class="fa-github fa"></i></a> <a href="https://twitter.com/icewind1991"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Robin studied computer science and is highly experienced in scaling file storage and handling systems. He has been working on Nextcloud code for over half a decade and has, at one point or another, touched code in every corner.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/roeland.jpg" />
				<h2 class="teamname">Roeland Douma</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Desktop Client, Sharing</h4>
					<h4 class="teamlocation">lives in Zuidoostbeemster, Netherlands</h4>
					<p class="teamsocial"><a href="http://rullzer.com/"><i class="fa-rss fa"></i></a> <a href="https://github.com/rullzer"><i class="fa-github fa"></i></a> <a href="https://twitter.com/rullzer"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Roeland has been working on improving Sharing since 2015. Has a MSc degree in Computer Science from the University of Amsterdam, having done research for his PhD in cache partitioning for real time systems. With feet in both the client and server team he works on having a tighter platform integration.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/simon.jpg" />
				<h2 class="teamname">Simon Eisenmann</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Spreedbox, packaging, embedded</h4>
					<h4 class="teamlocation">lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://www.stdin.xyz/"><i class="fa-rss fa"></i></a> <a href="https://github.com/longsleep"><i class="fa-github fa"></i></a> <!--<a href="https://twitter.com/rullzer"><i class="fa-twitter fa"></i></a>--> </p>
				</div>
				<p class="teamdescription">Simon handles technical project management and coding. He spearheads the backend and frontend services development and defines the system architecture and infrastructure for the Spreedbox. He has extensive WebRTC, AngularJS, Go and Python experience.</p>
			</div>
		</div>
	</div>
</section>
