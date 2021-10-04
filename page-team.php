<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/team.css?v=1" rel="stylesheet">
<script>
	require(["require.config"], function() {
		require(["modules/submenu"])
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
</section>
<section class="section--team">
	<div class="container">
		<p class="section--paragraph"><?php echo $l->t('Open source cloud collaboration is our passion at Nextcloud GmbH and we have built a great team of experts around it. Our engineers, designers and support professionals work as an integral part of the wider Nextcloud community to give customers direct access to the most advanced, in-depth knowledge they need for their success.');?></p>
	</div>
	<div class="featurerow">
	<div class="wrap container teamgroup">
    <div class="row">
<!-- 	<h2><?php echo $l->t('Management');?></h2> -->
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/frank.jpg" />
				<h2 class="teamname">Frank Karlitschek</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Chief Executive Officer</h3>
					<h4 class="teamexpertise">Founder</h4>
					<h4 class="teamlocation">Lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://karlitschek.de/"><i class="fa-rss fa"></i></a> <a href="https://github.com/karlitschek"><i class="fa-github fa"></i></a> <a href="https://twitter.com/fkarlitschek"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Frank founded the ownCloud project in 2010 to put home users and enterprises back in control of their data. To bring file sync and share technology to the next level and better align to the needs of users and customers he founded Nextcloud in 2016 and has been tirelessly working to realize his vision ever since.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/andreas.jpg" />
				<h2 class="teamname">Andreas Rode</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Chief Commercial Officer</h3>
					<h4 class="teamexpertise">Sales and Partnerships</h4>
					<h4 class="teamlocation">Lives in Hannover, Germany</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/andreas-rode-8296434/"><i class="fa-linkedin fa"></i></a></p>
				</div>
				<p class="teamdescription">Andreas studied Economics and has 20 years experience in Business Development, Partner- and Sales Management. Andreas worked for companies like Oracle, EMC, Yahoo and Google and also for start ups in the Cloud Computing and Online Marketing space.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/jos.jpg" />
				<h2 class="teamname">Jos Poortvliet</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Director Marketing</h3>
					<h4 class="teamexpertise">Co-founder, Marketing and Communication</h4>
					<h4 class="teamlocation">Lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="http://blog.jospoortvliet.com/"><i class="fa-rss fa"></i></a> <a href="https://github.com/jospoortvliet"><i class="fa-github fa"></i></a> <a href="https://twitter.com/jospoortvliet"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Jos graduated in Psychology from the University of Utrecht and handled project and service level management at Royal Bank of Scottland, KPN and the Dutch Department of Education. He has over a decade open source marketing and PR experience, being active in the KDE community for over a decade and working as Community Manager for several companies including SUSE Linux.</p>
			</div>
		</div>
        <div class="col-md-4">
            <div class="teamp">
                <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/uwe.jpg" />
                <h2 class="teamname">Uwe Presler</h2>
                <div class="teammeta">
                    <h3 class="teamtitle">Director Sales</h3>
                    <h4 class="teamexpertise">Sales and partnerships</h4>
                    <h4 class="teamlocation">Lives in Karlsruhe, Germany</h4>
                    <p class="teamsocial"><a href="https://www.linkedin.com/in/uwe-presler/"><i class="fa-linkedin fa"></i></a> <a href="https://www.xing.com/profile/Uwe_Presler/"><i class="fa-xing fa"></i></a></p>
                </div>
                <p class="teamdescription">Uwe has been educated in IT sales an has worked for a variety of tech enterprises including Deutsche Telekom and Vodafone and more recently the SME market leading CRM, xRM CAS Software AG. He is experienced in the areas of partner and sales management as well as business development.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="teamp">
                <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/andy.jpg" />
                <h2 class="teamname">Andy Scherzinger</h2>
                <div class="teammeta">
                    <h3 class="teamtitle">Director Engineering</h3>
                    <h4 class="teamexpertise">Software engineering and delivery</h4>
                    <h4 class="teamlocation">Lives in Frankfurt, Germany</h4>
                    <p class="teamsocial"><a href="https://www.linkedin.com/in/andyscherzinger/"><i class="fa-linkedin fa"></i></a> <a href="https://www.xing.com/profile/Andy_Scherzinger/"><i class="fa-xing fa"></i></a> <a href="https://github.com/AndyScherzinger"><i class="fa-github fa"></i></a> <a href="https://twitter.com/AndyScherzinger"><i class="fa-twitter fa"></i></a></p>
                </div>
                <p class="teamdescription">Andy graduated in Applied Business in Computer Science and has more than 15 years of experience in delivering custom software solutions and IT consulting to customers. He worked for companies like msg systems and Capgemini supporting enterprises and startups in various industries like telecommunication, travel, logistics and finance with a focus on building software-systems, -platforms and -factories.</p>
            </div>
        </div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/patrick.jpg" />
				<h2 class="teamname">Patrick Walther</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Head of Finance</h3>
					<h4 class="teamexpertise">Accounting and finance</h4>
					<h4 class="teamlocation">Lives in Stuttgart, Germany</h4>
					<p class="teamsocial"> &nbsp; </p>
				</div>
				<p class="teamdescription">Patrick was co-founder of struktur AG in 2000, responsible for sales and finance. He held several sales and marketing positions at IBM and Oracle, adding up to more than two decades of experience in the IT industry.</p>
			</div>
		</div>
    </div>
    <div class="row">
        <h2><?php echo $l->t('Account management');?></h2>
    </div>
    <div class="row">
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/christian.jpg" />
				<h2 class="teamname">Christian Göhring</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Senior account manager</h3>
					<h4 class="teamexpertise">Sales and account management</h4>
					<h4 class="teamlocation">Lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/christian-g-62523156/"><i class="fa-linkedin fa"></i></a> <a href="https://www.xing.com/profile/Christian_Goehring/cv"><i class="fa-xing fa"></i></a></p>
				</div>
				<p class="teamdescription">Christian grew up in Paris and is now back in Stuttgart for many years. He worked in telecommunication and technology companies for over 20 years and still enjoys French wine, together with family, mountain biking and remote controlled cars.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/edeltraut.jpg" />
				<h2 class="teamname">Edeltraut Bobb</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Sales coordinator</h3>
					<h4 class="teamexpertise">Business administration</h4>
					<h4 class="teamlocation">Lives in Hawaii, USA</h4>
					<p class="teamsocial">&nbsp; </p>
				</div>
				<p class="teamdescription">Edeltraut studied business administration and has over 13 years experience in domestic, international sales and the open source community. She believes customer satisfaction is based on bringing great customer service, delivered by a caring and friendly person, promptly, with the support of a practical problem-solving process. Edeltraut provides excellent administrative support to our sales team and to any busy sales operation.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/fabian.jpg" />
				<h2 class="teamname">Fabian Liedtke</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Senior Account manager</h3>
					<h4 class="teamexpertise">Sales and Partnerships</h4>
					<h4 class="teamlocation">Lives in Hamburg, Germany</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/fabian-liedtke-4b4ba9135"><i class="fa-linkedin fa"></i></a> <a href="https://www.xing.com/profile/Fabian_Liedtke2"><i class="fa-xing fa"></i></a><!--<a href="https://twitter.com/nickvergessen"><i class="fa-twitter fa"></i></a>--> &nbsp; </p>
				</div>
				<p class="teamdescription">Fabian worked for various industries always close to the customer and has been in the IT industry now for several years with a focus on customer relationship management. He is passionate about innovative and new technologies and his primary goal is to help our customers to fulfill their vision.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/markus.jpg" />
				<h2 class="teamname">Markus Windecker</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Account and Partner Manager</h3>
					<h4 class="teamexpertise">Sales and account management</h4>
					<h4 class="teamlocation">Lives in Herrenberg, Germany</h4>
					<p class="teamsocial"><a href="http://www.linkedin.com/in/markus-windecker-43a723b2"><i class="fa-linkedin fa"></i></a></p>
				</div>
				<p class="teamdescription">Markus has over 19 years experience as Account and Partner manager at HP and Hewlett Packard Enterprise and Aruba.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/olivier.jpg" />
				<h2 class="teamname">Olivier Paroz</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Sales Manager France</h3>
					<h4 class="teamexpertise">Consulting and Sales</h4>
					<h4 class="teamlocation">Lives in Basel, Switzerland</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/olivierparoz"><i class="fa-linkedin fa"></i></a> <a href="https://github.com/oparoz"><i class="fa-github fa"></i></a> <a href="https://twitter.com/oparoz"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Olivier studied Economics and Information and Communications Systems Management at the University of Geneva. He did work on the Nextcloud code base and has close to 20 years experience in Consulting, Business Development and large scale deployments. He has helped customers in a broad range of industies both in the private and public sector, with a focus on open source, usability, security and privacy.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Simon Ebentheuer</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Senior account manager</h3>
					<h4 class="teamexpertise">Sales and Account Management</h4>
					<h4 class="teamlocation">Lives in Nuremberg, Germany</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/simon-ebentheuer/"><i class="fa-linkedin fa"></i></a> </p>
				</div>
				<p class="teamdescription">Simon has gained sales experience in the past for ABB, Siemens and most recently for SUSE. Here he was responsible especially for manufacturing customers. Infected with the open source idea he is now happy to provide customers with more productivity thanks to the collaboration platform of Nextcloud. Simon studied teaching and technical journalism and lives in Nuremberg.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/viktoria.jpg" />
				<h2 class="teamname">Viktoria Linder</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Senior account manager</h3>
					<h4 class="teamexpertise">Sales and Account Management</h4>
					<h4 class="teamlocation">Lives in Karlsruhe, Germany</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/viktoria-linder-679792120/"><i class="fa-linkedin fa"></i></a> <a href="https://www.xing.com/profile/Viktoria_Linder/cv"><i class="fa-xing fa"></i></a> </p>
				</div>
				<p class="teamdescription">Viktoria studied business administration and learned Spanish living in Mexico for a while. She has over 7 years of sales experience and has a strong focus on finding the perfect fit for the needs of the customer.</p>
			</div>
		</div>
    </div>
    <div class="row">
    <h2><?php echo $l->t('Sales engineering');?></h2>
    </div>
	<div class="row">
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/bjoern.jpg" />
				<h2 class="teamname">Björn Schießle</h2>
				<div class="teammeta">
					<h3 class="teamtitle">PreSales Lead</h3>
					<h4 class="teamexpertise">Co-founder, Consulting and Sales</h4>
					<h4 class="teamlocation">Lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://schiessle.org/"><i class="fa-rss fa"></i></a> <a href="https://mastodon.social/@bjoern"><i class="fa-mastodon fa"></i></a> <a href="https://twitter.com/schiessle"><i class="fa-twitter fa"></i></a>  <a href="https://www.linkedin.com/in/schiessle/"><i class="fa-linkedin fa"></i></a> </p>
				</div>
				<p class="teamdescription">Björn is a computer scientist, graduated at the University of Stuttgart. He conducted research in the area of cloud robotics before he joined a private cloud community project in 2012 and later co-founded Nextcloud. Björn has a deep knowledge about all technical and legal aspects of Free and Open Source Software. After working for several years as a software engineer he became a sales engineer, using his in-depth knowledge to provide the best possible solutions to our customers.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/maxime.jpg" />
				<h2 class="teamname">Maxime Le Hericy</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Sales Engineer</h3>
					<h4 class="teamexpertise">Sales and Customer Relationships</h4>
					<h4 class="teamlocation">Lives in Nantes area, France</h4>
					<p class="teamsocial"><a href="https://github.com/maximelehericy"><i class="fa-github fa"></i></a> <a href="https://www.linkedin.com/in/maximelehericy/"><i class="fa-linkedin fa"></i></a> </p>
				</div>
				<p class="teamdescription">Maxime holds a general engineering master degree. He started his career as a process engineer in the industry, before shifting to IT. He aims to provide his customers with secure, quality and highly-reliable systems or products, in an efficient way. A good listener and interested in complex problem solving, Maxime is dedicated to help customers succeed in their projects.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">João Cortez</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Sales Engineer</h3>
					<h4 class="teamexpertise">Sales and Customer Relationships</h4>
					<h4 class="teamlocation">Lives in Taubaté - Brazil</h4>
					<p class="teamsocial"><a href="jbcortezf.wordpress.com"><i class="fa-rss fa"></i></a> </p>
				</div>
				<p class="teamdescription">João has been working since 1997 with infrastructure. His main expertise is in Unix (IBM AIX/Solaris/HP-UX) and Linux. He's happy in physical, virtual and cloud environments and has experience with global companies and in the banking sector.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/matthias.jpg" />
				<h2 class="teamname">Matthias Wobben</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Senior Sales Engineer</h3>
					<h4 class="teamexpertise">Sales and Customer Relationships</h4>
					<h4 class="teamlocation">Lives in Hamburg, Germany</h4>
					<p class="teamsocial"><a href="https://wobben.net/"><i class="fa-rss fa"></i></a> <a href="https://www.linkedin.com/in/wobben-matthias/"><i class="fa-linkedin fa"></i></a> <a href="https://twitter.com/wobben"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Matthias worked for nine years as a 3rd level IT Engineer and IT Administrator. Acting as a broker between the customer, the Sales and Engineering department, his main focus is to give our clients the best possible advice. Matthias is passionate about innovative technology, enabling clients to collaborate securely while retaining ease-of-use.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Pietro Marini</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Senior Sales Engineer</h3>
					<h4 class="teamexpertise">Consulting and Sales</h4>
					<h4 class="teamlocation">Lives in La Coruña, Spain</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/pietro-m-32347959"><i class="fa-linkedin fa"></i></a></p>
				</div>
				<p class="teamdescription">After graduating in Physics in 2011 at University of Pavia, Italy, Pietro has been working as a developer and consultant in the Business Intelligence and Data Analytics sector for many companies across Europe and is now settled in Galicia, Spain. Customer-oriented, self-learner and with a passion in open-source software engineering, Pietro enjoys teaming up with customers to solve complex technical challenges. He also tries to help the general public in forming opinions on the impacts of technology in their life, by spreading concepts and trends around big data, machine learning and the digital economy.</p>
			</div>
		</div>
    </div>
    <div class="row">
        <h2><?php echo $l->t('Marketing');?></h2>
    </div>
    <div class="row">
    <div class="col-md-4">
            <div class="teamp">
                <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/joshua.jpg" />
                <h2 class="teamname">Joshua Ofor</h2>
                <div class="teammeta">
                    <h3 class="teamtitle">Designer</h3>
                    <h4 class="teamexpertise">Visual Identity, Design Systems, Animation, Illustration</h4>
                    <h4 class="teamlocation">Lives in Port Harcourt, Nigeria</h4>
                    <p class="teamsocial"> <a href="https://www.linkedin.com/in/ofor"><i class="fa-rss fa"></i></a> <a href="https://www.twitter.com/theman_ofor"><i class="fa-twitter fa"></i></a></p>
                </div>
                <p class="teamdescription">Joshua is a multidisciplinary designer & art director, with a push for visual storytelling, sustainability & design par problem-solving. He currently seeks to design systems, spaces & create other forms of visual arts. He holds a brief but viable experience in the creative industry, previously working as a Snr. Creative Designer at Mesh Design Studios. He’s a TEDx aficionado, a design contributor at the Open Source Community Africa and a UN Youth Delegate.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="teamp">
                <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/marija.jpg" />
                <h2 class="teamname">Marija Puselja</h2>
                <div class="teammeta">
                    <h3 class="teamtitle">Marketing and PR coordinator</h3>
                    <h4 class="teamexpertise">PR and design</h4>
                    <h4 class="teamlocation">Lives in Berlin, Germany</h4>
                    <p class="teamsocial"><a href="https://www.linkedin.com/in/marija-puselja"><i class="fa-rss fa"></i></a></p>
                </div>
                <p class="teamdescription">Marija hold’s a master's degree in Journalism and Public Relations. She mostly finds her inspiration in the strength of visual delivery of information through photography, as much as she admires the creativity of witty and intelligent writing and finally, a well-executed layout and design.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="teamp">
            <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/marinela.jpg" />
				<h2 class="teamname">Marinela Gogo</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Online Marketer</h3>
					<h4 class="teamexpertise">Customer relations and content</h4>
					<h4 class="teamlocation">Lives in Tirana, Albania</h4>
					<p class="teamsocial"><a href="https://web.facebook.com/marinela.gogo.3"><i class="fa-facebook fa"></i></a><!-- <a href=""><i class="fa-rss fa"></i></a> <a href=""><i class="fa-github fa"></i></a>--> <a href="https://twitter.com/MarinelaGogo"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Marinela studied Business Informatics in the Faculty of Economics, University of Tirana. She got involved in open source in 2015, first by contributing to open source projects and then, in 2016, she started co-organizing events or conferences in Tirana to promote software freedom, open knowledge and the importance of open source in the public sector.</p>
			</div>
        </div>
        <div class="col-md-4">
            <div class="teamp">
            <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/marko-b.jpg" />
				<h2 class="teamname">Marko Bijelic</h2>
				<div class="teammeta">
					<h3 class="teamtitle">UI/UX Designer</h3>
					<h4 class="teamexpertise">Visual Identity, Design Systems, Animation, Illustration</h4>
					<h4 class="teamlocation">Lives in Banja Luka, Bosnia and Herzegovina</h4>
					<p class="teamsocial"><a href="https://ba.linkedin.com/in/markobijelic"><i class="fa-rss fa"></i></a></p>
				</div>
				<p class="teamdescription">Marko is working as a UI/UX Designer for 14 years. He has worked directly for clients like Coca-Cola, Audi and McLaren and for numerous startups featuring CrazyEgg, Flippa, Udemy and Tim Ferris. Marko has diversified skillset. He is college dropout and auto didactic.</p>
			</div>
        </div>
        <div class="col-md-4">
            <div class="teamp">
            <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/sandra.jpg" />
				<h2 class="teamname">Sandra Stutz</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Partner Marketing Manager</h3>
					<h4 class="teamexpertise">Partner and customer relations</h4>
					<h4 class="teamlocation">Lives in Karlsruhe, Germany</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/sandra-stutz-02904a135"><i class="fa-linkedin fa"></i></a> <a href="https://www.xing.com/profile/Sandra_Stutz4"><i class="fa-xing fa"></i></a></p>
				</div>
				<p class="teamdescription">Sandra studied business administration at the dual university Ravensburg. The last 20 years she worked as marketing and business development manager for different departments at CAS Sofware AG. Knowing what the market needs and customer centricity are very important to her.</p>
			</div>
        </div>
    </div>
    <div class="row">
        <h2><?php echo $l->t('Back office');?></h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="teamp">
                <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/vanessa.jpg" />
                <h2 class="teamname">Vanessa Steeg</h2>
                <div class="teammeta">
                    <h3 class="teamtitle">Executive assistant</h3>
                    <h4 class="teamexpertise">Sales, marketing, design and project management</h4>
                    <h4 class="teamlocation">Lives in Stuttgart, Germany</h4>
                    <p class="teamsocial">&nbsp;</p>
                </div>
                <p class="teamdescription">Vanessa has a degree in Media Design and qualifications as Executive Assistant in various languages (German, English and Spanish). Her experience ranges from project management to graphic design, marketing and communication.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="teamp">
                <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/alexandra.jpg" />
                <h2 class="teamname">Alexandra Boehm</h2>
                <div class="teammeta">
                    <h3 class="teamtitle">Accountant</h3>
                    <h4 class="teamexpertise">Accounting and finance</h4>
                    <h4 class="teamlocation">Lives in Berlin, Germany</h4>
                    <p class="teamsocial"><a href="http://www.linkedin.com/in/alexandra-boehm-02bba3a1"><i class="fa-linkedin fa"></i></a></p>
                </div>
                <p class="teamdescription">Experienced Accountant and Office Manager with a long history of working in the computer software industry. </p>
            </div>
        </div>
    </div>
    <div class="row">
        <h2><?php echo $l->t('Engineering and support');?></h2>
    </div>
    <div class="row">
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/barth.jpg" />
				<h2 class="teamname">Barthélémy Briand</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Server lead</h3>
					<h4 class="teamexpertise">Server, contacts, front-end and accessibility</h4>
					<h4 class="teamlocation">Lives in France</h4>
                    <p class="teamsocial"></p>
				</div>
				<p class="teamdescription">Barthélémy is a software engineer specialized in front-end development. He cares about simplicity and ease of use and likes to create a smooth user experience for everyone. He has been part of the contacts and design team since 2016.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/christoph.jpg" />
				<h2 class="teamname">Christoph Wurst</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Groupware lead</h3>
					<h4 class="teamexpertise">Front-end, Two-factor Authentication and Mail</h4>
					<h4 class="teamlocation">Lives in Hadres, Austria</h4>
					<p class="teamsocial"><a href="http://blog.wuc.me/"><i class="fa-rss fa"></i></a> <a href="https://github.com/ChristophWurst"><i class="fa-github fa"></i></a> <a href="https://twitter.com/ChristophWurst"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Christoph has been working on the Nextcloud code base since 2014. He has a master's degree in Software Engineering from the University of Applied Sciences Upper Austria.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/daphne.jpg" />
				<h2 class="teamname">Daphne Muller</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Support lead</h3>
					<h4 class="teamexpertise">Customer satisfaction and process coordination</h4>
					<h4 class="teamlocation">Lives in Amsterdam, the Netherlands</h4>
					<p class="teamsocial"><a href="http://www.daphnemuller.nl"><i class="fa-rss fa"></i></a> <a href="https://www.linkedin.com/in/daphne-muller/"><i class="fa-linkedin fa"></i></a> </p>
				</div>
				<p class="teamdescription">Daphne graduated from the Eindhoven University of Technology and gained work experience in consultancy, teaching, and various tech start-ups. She conducts academic research in Human-Computer Interaction about privacy and data minimisation. As support lead, she evolves the support process to improve customer and developer happiness.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/jan.jpg" />
				<h2 class="teamname">Jan-Christoph Borchardt</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Design Lead</h3>
					<h4 class="teamexpertise">Co-founder, Simplicity & Ease of Use</h4>
					<h4 class="teamlocation">Lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://jancborchardt.net/"><i class="fa-rss fa"></i></a> <a href="https://github.com/jancborchardt"><i class="fa-github fa"></i></a> <a href="https://twitter.com/jancborchardt"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Jan-Christoph is responsible for design on Nextcloud with a decade of experience in the project. He pushes forward better design in open source through founding and contributing to several projects, giving talks, working with universities, and fostering the Open Source Design collective.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/joas.jpg" />
				<h2 class="teamname">Joas Schilling</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Talk Lead</h3>
					<h4 class="teamexpertise">Co-founder, Security, Server and Talk</h4>
					<h4 class="teamlocation">lives near Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://www.schilljs.com/"><i class="fa-rss fa"></i></a> <a href="https://github.com/nickvergessen"><i class="fa-github fa"></i></a> <a href="https://twitter.com/nickvergessen"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Joas has been involved in open source since 2006, being a core member of the phpBB™ developer team and has been working on Nextcloud code since late 2013. He graduated from the University of Stuttgart and is the Team Lead of Nextcloud's WebRTC chat and video solution Nextcloud Talk.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/julius.jpg" />
				<h2 class="teamname">Julius Härtl</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Office Lead</h3>
					<h4 class="teamexpertise">Office and productivity</h4>
					<h4 class="teamlocation">Lives in Würzburg, Germany</h4>
					<p class="teamsocial"><a href="https://blog.juliushaertl.de/"><i class="fa-rss fa"></i></a> <a href="https://github.com/juliushaertl"><i class="fa-github fa"></i></a> <a href="https://twitter.com/jus_42"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Julius is involved in the Nextcloud community since the beginning, working on frontend and backend development of the server and apps like Deck. He is currently doing his master's degree in computer science at the University of Würzburg.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="What I look like when not eaten by a shark" src="<?php bloginfo('template_directory'); ?>/assets/img/people/lukas.jpg" />
				<h2 class="teamname">Lukas Reschke</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Security Lead</h3>
					<h4 class="teamexpertise">Co-founder, Security</h4>
					<h4 class="teamlocation">Lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://statuscode.ch/"><i class="fa-rss fa"></i></a> <a href="https://github.com/LukasReschke"><i class="fa-github fa"></i></a> <a href="https://twitter.com/LukasReschke"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Lukas has been contributing to the Nextcloud code base since 2012 and is responsible for many of the security hardenings in the code. He has worked as security assessment and forensic investigator, reviewing security, training and dealing with breaches at Fortune 500 companies and several of the largest Swiss financial institutes. He also worked at Facebook, creating privacy and security roadmaps, working on privacy incident management, security analysis, review and more.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/tobias.jpg" />
				<h2 class="teamname">Tobias Kaminsky</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Client lead</h3>
					<h4 class="teamexpertise">Android Client</h4>
					<h4 class="teamlocation">Lives in Langen, Germany</h4>
					<p class="teamsocial"><a href="https://github.com/tobiasKaminsky"><i class="fa-github fa"></i></a></p>
				</div>
				<p class="teamdescription">Tobias studied Sports and Computer Science in Darmstadt, is an experienced Java/Scala engineer and has a background in database development at a research institute for applied training science. He has been contributing to the Android app since 2013.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Alex Zolotov</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Desktop Client</h4>
					<h4 class="teamlocation">Brovary, Ukraine</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/alexander-zolotov-78ab7b70/"><i class="fa-linkedin fa"></i></a> <a href="https://github.com/allexzander"><i class="fa-github fa"></i></a> </p>
				</div>
				<p class="teamdescription">Alex has a master's degree in computer science. He worked in the gaming industry on well-known game franchises doing C++ and ActionScript but also freelanced while traveling through South East Asia in a variety of front-end and back-end work with JS, and even more with C++ and Qt. He's into cyberpunk and 80's heavy metal.</p>
			</div>
		</div>
		<div class="col-md-4">
            <div class="teamp">
                <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
                <h2 class="teamname">Álvaro Brey Vilas</h2>
                <div class="teammeta">
                    <h3 class="teamtitle">Software Engineer</h3>
                    <h4 class="teamexpertise">Android Files app</h4>
                    <h4 class="teamlocation">Lives in Santiago de Compostela, Spain</h4>
                    <p class="teamsocial"><a href="https://github.com/AlvaroBrey"><i class="fa-github fa"></i></a> <a href="https://twitter.com/AlvaroBrey_"><i class="fa-twitter fa"></i></a> <a href="https://www.linkedin.com/in/alvarobrey/"><i class="fa-linkedin fa"></i></a></p>
                </div>
                <p class="teamdescription">Álvaro has a masters's degree in AI, and is a generalist software engineer with experience in Android, DevOps and frontend. He's passionate about automation and code cleanliness. In his spare time, he's busy automating his home, modeling and 3D printing stuff, playing videogames or reading about technology.</p>
            </div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/anna.jpg" />
				<h2 class="teamname">Anna Larch</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Groupware</h4>
					<h4 class="teamlocation">Innsbruck, Austria</h4>
					<p class="teamsocial"><a href="https://www.linkedin.com/in/anna-larch"><i class="fa-linkedin fa"></i></a> <a href="https://github.com/miaulalala"><i class="fa-github fa"></i></a> </p>
				</div>
				<p class="teamdescription">Anna gained her BSc at University of Central Lancashire and worked for a few companies, most recently Barracuda.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/arthur.jpg" />
				<h2 class="teamname">Arthur Schiwon</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Co-founder, LDAP and Comments</h4>
					<h4 class="teamlocation">Lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://arthur-schiwon.de"><i class="fa-rss fa"></i></a> <a href="https://github.com/blizzz"><i class="fa-github fa"></i></a> <!--<a href="https://twitter.com/blizzz"><i class="fa-twitter fa"></i></a>--> </p>
				</div>
				<p class="teamdescription">Arthur Schiwon has been working on the Nextcloud code base since 2010, developing state of the art user management and directory support. Before he has been SEO project manager at construktiv and was active in the Kubuntu community, still being a Free and Open Source Software enthusiast and privacy activist.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/brian.jpg" />
				<h2 class="teamname">Brian Krause</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Support Engineer</h3>
					<h4 class="teamexpertise">Spreed.ME, Customer Service</h4>
					<h4 class="teamlocation">Lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://www.xing.com/profile/Brian_Krause"><i class="fa-xing fa"></i></a></p>
				</div>
				<p class="teamdescription">Brian has a degree as IT-Systemkaufmann, decades of professional experience in IT Customer Service, Support and Sales and joined Struktur AG in 2010 as Customer Care representative. As first contact person for Nextcloud, Struktur AG and Spreed he makes sure you get the best possible support.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/camila.jpg" />
				<h2 class="teamname">Camila San Martin Ayres</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Desktop client</h4>
					<h4 class="teamlocation">Lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://camila.codes"><i class="fa-rss fa"></i></a> <a href="https://github.com/camilasan"><i class="fa-github fa"></i></a></p>
				</div>
				<p class="teamdescription">Camila is from Brazil and has worked as front-end developer, with C#, Java and even Delphi. She got into open source doing C++/Qt development in the KDE community. After moving to Germany she worked with PHP, Ruby on Rails, AngularJS, Go and Drupal 7. She's now a desktop client developer at Nextcloud but just might do other things than C++ sometimes.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/carl.jpg" />
				<h2 class="teamname">Carl Schwan</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Server</h4>
					<h4 class="teamlocation">Lives in Saarbrücken, Germany</h4>
					<p class="teamsocial"><a href="https://carlschwan.eu"><i class="fa-rss fa"></i></a> <a href="https://github.com/ognarb"><i class="fa-github fa"></i></a> <a href="https://invent.kde.org/carlschwan"><i class="fa-gitlab fa"></i></a> <a href="https://twitter.com/CarlKDE"><i class="fa-twitter fa"></i></a> <a href="https://linuxrocks.online/@carl"><i class="fa-mastodon fa"></i></a></p>
				</div>
				<p class="teamdescription">Carl is from a Franco-German family and lived in Germany and France. He's involved in the KDE community, leading its web efforts as well as being a core member of promo, Plasma, Plasma Mobile and fundraising teams and maintaining NeoChat, KDE's Matrix client.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Christopher Ng</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Front-end and back-end</h4>
					<h4 class="teamlocation">Lives in Vancouver, Canada</h4>
					<p class="teamsocial"><a href="https://github.com/Pytal"><i class="fa-github fa"></i></a></p>
				</div>
				<p class="teamdescription">Christopher is a software engineer who works across front-end and back-end technologies and enjoys dabbling in DevOps from time to time. He is a Canadian, an advocate of the open source software movement, and has a passion for lifelong learning.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/daniel.jpg" />
				<h2 class="teamname">Daniel Calviño Sánchez</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Talk, front-end</h4>
					<h4 class="teamlocation">Lives in Oviedo, Spain</h4>
					<p class="teamsocial"> <a href="https://github.com/danxuliu"><i class="fa-github fa"></i></a> </p>
				</div>
				<p class="teamdescription">Daniel has a master's degree in Computer Engineering. He has been developing all kind of free software projects for several years, including KDE applications, web applications, low-level Android components and even Linux kernel drivers, and now he is applying his experience and passion for free software in the front-end and testing areas of Nextcloud.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Daniel Kesselberg</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Groupware and Server</h4>
					<h4 class="teamlocation">lives near Darmstadt, Germany</h4>
					<p class="teamsocial"> <a href="https://github.com/kesselb"><i class="fa-github fa"></i></a> </p>
				</div>
				<p class="teamdescription">Daniel has been contributing to Nextcloud for several years and worked as a software engineer for much longer.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/felix.jpg" />
				<h2 class="teamname">Felix Weilbach</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Desktop client engineer</h4>
					<h4 class="teamlocation">lives near Stuttgart, Germany</h4>
					<p class="teamsocial"> <a href="https://github.com/FlexW"><i class="fa-github fa"></i></a> <a href="https://www.linkedin.com/in/felix-weilbach-73a0651b9/"><i class="fa-linkedin fa"></i></a> </p>
				</div>
				<p class="teamdescription">Felix apprenticed in automotive mechatronics and then decided to study Computer Science in Augsburg. He is a big free software fan and develops a small Android app named SplitBills. He's an Emacs user and loves mountain biking.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/greta.jpg" />
				<h2 class="teamname">Greta Doçi</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Front-end</h4>
					<h4 class="teamlocation">Lives in Berlin, Germany</h4>
					<p class="teamsocial"> <a href="https://www.linkedin.com/in/greta-doçi-a18a2478/"><i class="fa-linkedin fa"></i></a> <a href="https://github.com/GretaD"><i class="fa-github fa"></i></a> <a href="https://twitter.com/GretaDoci"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Greta has finished her master studies in University of Tirana for Information and Communication Technology. She is an Albanian long-time Wikipedia contributor and Nextcloud advocate. She joined our front-end developer team after completing a joint internship with Wikimedia Deutschland and Nextcloud.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/ivan.jpg" />
				<h2 class="teamname">Ivan Sein</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Talk and iOS</h4>
					<h4 class="teamlocation">Lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><!--<a href="https://www.stdin.xyz/"><i class="fa-rss fa"></i></a>--> <a href="https://github.com/Ivansss"><i class="fa-github fa"></i></a> <!--<a href="https://twitter.com/rullzer"><i class="fa-twitter fa"></i></a>--> </p>
				</div>
				<p class="teamdescription">Ivan graduated as CS engineer from the University of the Basque Country and is involved in Nextcloud Talk development since the beginning. He is also the principal author and maintainer of the Nextcloud Talk iOS app.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/joachim.jpg" />
				<h2 class="teamname">Joachim Bauch</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">WebRTC, Realtime Streaming, Telephony Interfacing</h4>
					<h4 class="teamlocation">Lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://www.joachim-bauch.de"><i class="fa-rss fa"></i></a> <a href="https://github.com/fancycode"><i class="fa-github fa"></i></a> <a href="https://twitter.com/fancycode"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Joachim graduated computer science in Stuttgart and has been committing to various open source projects for a long time, including Google's WebRTC project and was core developer for the Red5 streaming server between 2005 and 2008.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Julien Veyssier</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Office, full stack/app developer</h4>
					<h4 class="teamlocation">Lives in Montpellier, France</h4>
					<p class="teamsocial"><a href="https://framapiaf.org/@eneiluj"><i class="fa-mastodon fa"></i></a> <a href="https://github.com/eneiluj"><i class="fa-github fa"></i></a> <a href="https://gitlab.com/eneiluj"><i class="fa-gitlab fa"></i></a> </p>
				</div>
				<p class="teamdescription">Julien has a master's degree in computer science and does public research for 10 years as scientific computing engineer in biology and geographical data processing. He loves interactive maps, collaborative tools, and is passionate about the Free Software movement. He started contributing to the Nextcloud code base in 2015 and has developed 6 apps since then. He has much experience in data processing and computing optimization.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/louis.jpg" />
				<h2 class="teamname">Louis Chemineau</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Server and front-end</h4>
					<h4 class="teamlocation">Lives in Lauris, France</h4>
					<p class="teamsocial"><a href="https://blog.flap.cloud"><i class="fa-rss fa"></i></a> <a href="https://github.com/artonge"><i class="fa-github fa"></i></a> <a href="https://gitlab.com/artonge"><i class="fa-gitlab fa"></i></a> </p>
				</div>
				<p class="teamdescription">Louis is a software engineer with a passion for new technologies and how they shape our society. He focuses his work on empowering citizens with and towards new technologies. One of the ways he does that is with <a href="https://gitlab.com/flap-box/flap">flap</a> which helps people self-host services like Nextcloud. Also, he is into climbing!</p>
			</div>
		</div>
		<div class="col-md-4">
            <div class="teamp">
                <img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
                <h2 class="teamname">Luka Trovic</h2>
                <div class="teammeta">
                    <h3 class="teamtitle">Software Engineer</h3>
                    <h4 class="teamexpertise">Office, full stack</h4>
                    <h4 class="teamlocation">Lives in Raska, Serbia</h4>
                    <p class="teamsocial"> <a href="github.com/luka-nextcloud"><i class="fa-github fa"></i></a> <a href="https://www.linkedin.com/in/luka-trovic"><i class="fa-linkedin fa"></i></a> </p>
                </div>
                <p class="teamdescription">Luka is a full stack developer specialized in JavaScript and PHP. He has over 8 years of professional experience with software development.
                </p>
            </div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Marcel Hibbe</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Android Talk app</h4>
					<h4 class="teamlocation">Lives in Berlin, Germany</h4>
					<p class="teamsocial"> <a href="https://github.com/mahibi"><i class="fa-github fa"></i></a></p>
				</div>
				<p class="teamdescription">Marcel has a master's degree in Geoinformation and Visualization at University of Potsdam and has been developing mapping web applications, working on routing and navigation related topics.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/matthieu.jpg" />
				<h2 class="teamname">Matthieu Gallien</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Desktop client</h4>
					<h4 class="teamlocation">Lives in Chambéry, France</h4>
					<p class="teamsocial"> <a href="https://github.com/mgallien"><i class="fa-github fa"></i></a> <a href="https://www.linkedin.com/in/matthieugallien/"><i class="fa-linkedin fa"></i></a></p>
				</div>
				<p class="teamdescription">Matthieu is a passionate software engineer with over a decade of experience in the software industry, especially in the embedded software area. He is part of the team responsible for the desktop client and developing the open source Elisa music player in his free time in the KDE community.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/marco.jpg" />
				<h2 class="teamname">Marco Ambrosini</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Talk, frontend and design</h4>
					<h4 class="teamlocation">Lives in Barcelona, spain</h4>
					<p class="teamsocial"> <a href="https://github.com/ma12-co"><i class="fa-github fa"></i></a> </p>
				</div>
				<p class="teamdescription">Marco is a front end developer that cares deeply about design and user experience. He is part of the talk and design teams.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/marino.jpg" />
				<h2 class="teamname">Marino Faggiana</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Apple iOS developer</h4>
					<h4 class="teamlocation">Lives in Vicenza, Italy</h4>
					<p class="teamsocial"> <a href="https://github.com/marinofaggiana"><i class="fa-github fa"></i></a> <a href="https://twitter.com/marinofaggiana"><i class="fa-twitter fa"></i></a> <a href="https://www.linkedin.com/in/marino-faggiana-596569106/"><i class="fa-linkedin fa"></i></a></p>
				</div>
				<p class="teamdescription">Marino studied telecommunications in Vicenza. While studing engineering at Padua University he founded software company T.W.S. He is the principal author of Crypto Cloud, a popular iOS application which became the base for the Nextcloud iOS app. He is fond of microelectronics, telecommunications and information technology.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/marius.jpg" />
				<h2 class="teamname">Marius Blüm</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Customer Service</h3>
					<h4 class="teamexpertise">Support and Documentation</h4>
					<h4 class="teamlocation">Lives in Heilbronn, Germany</h4>
					<p class="teamsocial"><a href="https://github.com/MariusBluem"><i class="fa-github fa"></i></a> <a href="https://twitter.com/MariusBluem"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Marius was active in Nextcloud since day one, contributing in various forms to documentation, website, support and more. He is studying and works part time.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/maxence.jpg" />
				<h2 class="teamname">Maxence Lange</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Server, full text search</h4>
					<h4 class="teamlocation">Lives in Santa Maria, Cape Verde</h4>
					<p class="teamsocial"> <a href="https://github.com/daita"><i class="fa-github fa"></i></a> <a href="https://twitter.com/AnArtificialOwl"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Maxence has extensive experience in PHP and Java/android development as well as database and network management. He is the principal author and maintainer of the Nextcloud full-text search apps and Circles.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Nimisha Vijay</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Designer</h3>
					<h4 class="teamexpertise">User experience and Interface design</h4>
					<h4 class="teamlocation">Lives in Bangalore, India</h4>
					<p class="teamsocial"><a href="https://linkedin.com/in/nimisha-vijay"><i class="fa-linkedin fa"></i></a> <a href="https://github.com/nimisha-vijay"><i class="fa-github fa"></i></a> <a href="https://twitter.com/nimishaavijay"><i class="fa-twitter fa"></i></a> </p>
				</div>
				<p class="teamdescription">Nimisha is a user experience designer based in India. She has a degree in engineering and has been contributing to Nextcloud design since late 2020. She is interested in the relationship we have with technology and the role of design in shaping it, and is passionate about ethical, democratic, and open-source software.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/robin.jpg" />
				<h2 class="teamname">Robin Appelman</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Co-founder, server, filesystem and scalability</h4>
					<h4 class="teamlocation">Lives in Eindhoven, Netherlands</h4>
					<p class="teamsocial"><a href="https://icewind.nl"><i class="fa-rss fa"></i></a> <a href="https://github.com/icewind1991"><i class="fa-github fa"></i></a> <a href="https://twitter.com/icewind1991"><i class="fa-twitter fa"></i></a></p>
				</div>
				<p class="teamdescription">Robin studied computer science and is highly experienced in scaling file storage and handling systems. He has been working on Nextcloud code since its earliest incarnation in 2010 and has, at one point or another, touched code in every corner.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Richard Steinmetz</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Groupware</h4>
					<h4 class="teamlocation">Lives in Dresden, Germany</h4>
					<p class="teamsocial"><a href="https://github.com/st3iny"><i class="fa-github fa"></i></a></p>
				</div>
				<p class="teamdescription">Richard studies computer science and has been contributing since late 2020 to Nextcloud. He's passionate about open source and technology in general.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/simonl.jpg" />
				<h2 class="teamname">Simon Lindner</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Design Student</h3>
					<h4 class="teamexpertise">Server, UX and interface design</h4>
					<h4 class="teamlocation">Lives in Berlin, Germany</h4>
					<p class="teamsocial"><a href="https://github.com/szaimen"><i class="fa-github fa"></i></a></p>
				</div>
				<p class="teamdescription">Simon is currently studying design and works part time for Nextcloud. He has a degree in architecture and has been contributing to Nextcloud since 2019. He is interested in making Nextcloud and open-source software in general accessible to everyone and has experience in ticket triaging, Shell scripting, writing documentation, VMs and server administration.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/person.jpg" />
				<h2 class="teamname">Tim Krüger</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Android Talk app</h4>
					<h4 class="teamlocation">Lives in Herne, Germany</h4>
					<p class="teamsocial"><a href="https://github.com/timkrueger/"><i class="fa-github fa"></i></a></p>
				</div>
				<p class="teamdescription">Tim has worked in the field of navigation solutions for 13 years, most recently further developing and operating the backend for routing and geocoding services. He has a Dipl.-Ing. (FH) in geoinformatics from the Bochum University of Applied Sciences.<br />Cleaning up is one of his passions. No matter if code, documentation or dependencies. And since he likes to finish work early, he automates what he can.</p>
			</div>
		</div>
        <div class="col-md-4">
			<div class="teamp">
				<img class="img-responsive img-circle teamimg" alt="photo" src="<?php bloginfo('template_directory'); ?>/assets/img/people/vincent.jpg" />
				<h2 class="teamname">Vincent Petry</h2>
				<div class="teammeta">
					<h3 class="teamtitle">Software Engineer</h3>
					<h4 class="teamexpertise">Full stack, server</h4>
					<h4 class="teamlocation">Lives in Stuttgart, Germany</h4>
					<p class="teamsocial"><a href="https://github.com/pvince81"><i class="fa-github fa"></i></a> <a href="https://twitter.com/pvince81"><i class="fa-twitter fa"></i></a> <a href="https://gitlab.com/pvince81"><i class="fa-gitlab fa"></i></a> <a href="https://www.linkedin.com/in/vincentpetry/"><i class="fa-linkedin fa"></i></a></p>
				</div>
				<p class="teamdescription">Vincent is a full-stack software engineer with many years of experience in the open-source space. He's well-known for quickly finding bugs in various systems and his ability to debug deeply in unknown territories and also write extensive bug reports. He's now working in the Nextcloud server team using Vue.js, PHP and other technologies.</p>
			</div>
		</div>
	</div>
</section>
