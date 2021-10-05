<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/jobs.css?v=1" rel="stylesheet">
	<script>
	require(["require.config"], function() {
		require(["bootstrap"])
	});
	</script>
</head>

<section class="hero-section second-menu">
    <div class="background jobs-background">
        <div class="container">
                <div class="col-md-6 topheader">
                    <h1><?php echo $l->t('We are hiring');?></h1>
                    <h2><?php echo $l->t('Nextcloud is looking for people who want to join our team');?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-company-description">
	<div class="container">
		<h2 class="text-center"><?php echo $l->t('Company description');?></h2>

		<p class=""><?php echo $l->t('We are a modern, distributed, open source company. It is our mission to provide our users and customers with the means for data storage, access and communication under their control; protecting their privacy and security');?>.</p>

		<p><?php echo $l->t('We pursue a fully-open strategy, keeping internal communication to a minimum while aiming to work, discuss and develop in public. We are a thriving, quickly growing company with a solid customer base. An open source background or experience contributing to Nextcloud is a big plus for job applicants! Especially for developers we pursue a strong "hire from the community" strategy.');?></p>
		<p><?php echo $l->t('Nextcloud actively strives for diversity and we would like to especially encourage applications by people from underrepresented groups in tech.');?></p>
		<p><?php echo $l->t('As a very international, distributed company with employees in 2 dozen countries and on most continents, our company language is English, most of us work from home or a local co-working space and working hours are very flexible. We try to bring everyone in the company together for a week 5-6 times a year, usually in Berlin and various teams also organize their own, separate meetings throughout the year as working together is fun and productive!');?></p>
	</div>
</section>

<section class="section-jobs-opening">
	<div class="container">
		<h2 class="text-center">Job openings</h2>
		<div class="wrapper-text">

<!--            <a href="#desktopdev" data-toggle="collapse"><h3 class="jobs">C++ Developer<span class="icon-arrow"></span></h3></a>
            <div id="desktopdev" class="collapse">
                <p>We're looking for a C++ developer to join our desktop client team!</p>
                <p>You would work with our small and agile team to bring new features and improvements to the desktop client application. You ideally have some open source experience, know your way a bit around git and Github and live in the CET timezone.</p>
                <p>Responsibilities:</p>
                <ul>
                    <li><a href="https://github.com/nextcloud/desktop">Desktop client development</a> with C++ and Qt for <a href="https://github.com/nextcloud/desktop/wiki/How-to-compile-the-desktop-client">Windows, Mac OS and Linux</a>.</li>
                    <li>Help with customer and <a href="https://github.com/nextcloud/desktop/issues">community support</a>.</li>
                    <li>Help with <a href="https://github.com/nextcloud/client-building">release building</a> for Windows, Mac OS and Linux.</li>
                </ul>
                <p>Required skills:</p>
                <ul>
                    <li>Technical experience with programming.</li>
                    <li>Teamworking capabilities.</li>
                    <li>Independence and self-reliance.</li>
                    <li>Understanding of open source workflows (pull requests and code review).</li>
                </ul>
                <p>If you have open source contributions, internship experience, or are a junior developer, you are very welcome to apply!</p>
                <p>What we offer:</p>
                <ul>
                    <li>A distributed, open team with a passion for working on and within the <a href="https://nextcloud.com/blog/upcoming-nextcloud-contributorweek-june-24-28/">open source community</a>.</li>
                    <li>Developing a product which pushes the boundaries of technology - e.g. <a href="https://nextcloud.com/blog/nextcloud-introduces-virtual-drive-in-desktop-client-to-simplify-desktop-integration/">Virtual Drive</a> and <a href="https://nextcloud.com/endtoend/">end-to-end encryption</a> - with a global community of contributors and users.</li>
                    <li>Flexibility for a healthy work-life balance - home office and flexible hours.</li>
                    <li>We have goals to achieve as a team but with time to pick what motivates you.</li>
                    <li>A competitive salary.</li>
                </ul>
                <p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this position.</p>
            </div>-->

			<a href="#accountmgr" data-toggle="collapse"><h3 class="jobs">Account Manager<span class="icon-arrow"></span></h3></a>
			<div id="accountmgr" class="collapse">
				<p>We are looking for a passionate Account Manager who will partner with and ensure the long-term success of our customers.</p>
				<p>Your account management responsibilities include developing long-term relationships with your portfolio of assigned customers, connecting with key business executives and stakeholders. You will liaise between customers and cross-functional internal teams to ensure the timely and successful delivery of our solutions according to customer needs.</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>

				<ul>
					<li>Operate as the lead point of contact for any and all matters
					specific to your customers</li>
					<li>Collaborate with our Partners in delivering the best solution to our
					customers</li>
					<li>Build and maintain strong, long-lasting customer relationships</li>
					<li>Ensure the timely and successful delivery of our solutions according
					to customer needs and objectives</li>
					<li>Communicate clearly the progress of monthly/quarterly initiatives
					internally</li>
					<li>Forecast and track key account metrics</li>
					<li>negotiating tender and contract terms and conditions to meet both
					client and company needs</li>
					<li>Identify and grow opportunities within territory and collaborate
					with sales teams to ensure growth attainment</li>
					<li>Assist with high severity requests or issue escalations as needed</li>
				</ul>

				<h3 class="section--paragraph__title">Required skills:</h3>

				<ul>
					<li>Proven account management or other relevant experience</li>
					<li>Demonstrated ability to communicate, present and influence credibly
					and effectively at all levels of the organization, including
					executive and C-level</li>
					<li>Experience in delivering client-focused solutions based on customer
					needs</li>
					<li>Proven ability to manage multiple projects at a time while paying
					strict attention to prioritize</li>
					<li>Excellent listening, negotiation and presentation skills</li>
					<li>Excellent verbal and written communications skills</li>
					<li>Problem solving skills</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>

				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
				</ul>

				<p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>

			<!--<a href="#hrmanager" data-toggle="collapse"><h3 class="jobs">HR Manager<span class="icon-arrow"></span></h3></a>
			<div id="hrmanager" class="collapse">
				<p>To help us grow and continue to improve our organization for our existing employees, we are looking for a HR Manager to join our team.</p>
				<p>Your HR responsibilities will include guiding, supporting and accelerating our hiring process, improving and professionalizing our people-related processes in our organization and supporting management with HR related topics.</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>

				<ul>
					<li>The process of hiring and recruitment (together with the team leads and management)</li>
					<li>Assessing fit of new hires and monitoring on boarding progress</li>
					<li>Monitoring and improving our people processes across the whole employee life cycle (from on boarding, feedback and performance management and absence handling to off boarding)</li>
					<li>Work with our back office to optimize and handle legal, payroll and benefits related processes</li>
					<li>Support management and team leads with your HR knowledge</li>
					<li>Protect and nurture a healthy, positive company culture</li>
				</ul>

				<h3 class="section--paragraph__title">Required skills:</h3>

				<ul>
					<li>Relevant work experience, preferably in a startup environment and around recruitment</li>
					<li>Affinity for remote work (Berlin or Stuttgart office are of course available for you but most of us are remote anyway)</li>
					<li>Insight in organizational change and development, a plus is experience in handling and guiding rapid growth</li>
					<li></li>
					<li>Knowledge of German labour law is a plus, some experience with international employment regulations even better</li>
					<li>English and German language proficiency</li>
					<li>Affinity with our goals and mission around open source, giving people back control over their data, data sovereignty, privacy and so on is a pre!</li>
					<li>Optional: You think you could have written a better job description for this position :-)</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>

				<ul>
					<li>A distributed, open and passionate team with a mission to make the world a better place</li>
					<li>A young, dynamic organization that values personal freedom and growth, diversity, inclusion, ambition and collaboration</li>
					<li>A competitive salary</li>
					<li>A real impact on our team culture and future growth. We know that our product can only be as good as the people who create it. Since you will be our very first dedicated HR professional, you have a lot of freedom to shape your role</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
				</ul>

				<p>We are looking for somebody with ambition and drive who would like to grow and learn.  That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>-->
			<!--<a href="#salesrep" data-toggle="collapse"><h3 class="jobs">Sales Representative<span class="icon-arrow"></span></h3></a>
			<div id="salesrep" class="collapse">
				<p>We are looking for a passionate Sales Representative to work with prospective customers to determine if Nextcloud is a good fit for them.</p>
				<p>Your responsibilities include building relationships with prospective customers and connecting with key business executives and stakeholders. You will research and develop market segments, work with Marketing to generate and classify leads, develop them to opportunities and work as part of our internal cross-functional internal teams to ensure the customers get timely information and fitting solutions to their problems.</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>

				<ul>
                    <li>Work with marketing on outreach, lead generation and classification of opportunities</li>
                    <li>Research, develop and maintain communication within and for specific market segments</li>
					<li>Collaborate with your team and our Partners in determining the best
					solution for our customers</li>
					<li>Build and maintain strong, long-lasting customer relationships</li>
					<li>Communicate clearly the progress of monthly/quarterly initiatives
					internally</li>
					<li>Forecast and track key account metrics</li>
					<li>negotiating tender and contract terms and conditions to meet both
					client and company needs</li>
					<li>Identify and grow opportunities within territory and collaborate
					with sales teams to ensure growth attainment</li>
					<li>Assist with high severity requests or issue escalations as needed</li>
				</ul>

				<h3 class="section--paragraph__title">Required skills:</h3>

				<ul>
					<li>Proven sales/account management or other relevant experience</li>
					<li>Demonstrated ability to communicate, present and influence credibly
					and effectively at all levels of the organization, including
					executive and C-level</li>
					<li>Experience in delivering client-focused solutions based on customer
					needs</li>
					<li>Proven ability to manage multiple projects at a time while paying
					strict attention to prioritize</li>
					<li>Excellent listening, negotiation and presentation skills</li>
					<li>Excellent verbal and written communications skills</li>
					<li>Problem solving skills</li>
					<li>Writing and speaking German and/or French language</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>

				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
				</ul>

				<p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>-->


			<a href="#junioraccountmgr" data-toggle="collapse"><h3 class="jobs">Junior Account Manager<span class="icon-arrow"></span></h3></a>
			<div id="junioraccountmgr" class="collapse">
				<p>We are looking for a passionate Junior Account Manager to work with prospective customers to determine if Nextcloud is a good fit for them.</p>
				<p>Your responsibilities include building relationships with prospective customers and connecting with key business executives and stakeholders. You will research and develop market segments, to generate and classify leads, develop them to opportunities and work as part of our internal cross-functional internal teams to ensure the customers get timely information and fitting solutions to their needs.</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>

				<ul>
                    <li>Work with marketing on outreach, lead generation and classification of opportunities</li>
                    <li>Research, develop and maintain communication within and for specific market segments</li>
					<li>Collaborate with your team and our Partners in determining the best
					solution for our customers</li>
					<li>Build and maintain strong, long-lasting customer relationships</li>
					<li>Communicate clearly the progress of monthly/quarterly initiatives
					internally</li>
					<li>Forecast and track key account metrics</li>
					<li>negotiating tender and contract terms and conditions to meet both
					client and company needs</li>
					<li>Identify and grow opportunities within territory and collaborate
					with sales teams to ensure growth attainment</li>
					<li>Assist with high severity requests or issue escalations as needed</li>
				</ul>

				<h3 class="section--paragraph__title">Required skills:</h3>

				<ul>
					<li>Proven sales/account management or other relevant experience</li>
					<li>Demonstrated ability to communicate, present and influence credibly
					and effectively at all levels of the organization, including
					executive and C-level</li>
					<li>Experience in delivering client-focused solutions based on customer
					needs</li>
					<li>Proven ability to manage multiple projects at a time while paying
					strict attention to prioritize</li>
					<li>Excellent listening, negotiation and presentation skills</li>
					<li>Excellent verbal and written communications skills</li>
					<li>Problem solving skills</li>
					<li>Fluent in writing and speaking English. More languages are welcome.</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>

				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
				</ul>

				<p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>

            <a href="#marketing" data-toggle="collapse"><h3 class="jobs">Marketing and event manager France<span class="icon-arrow"></span></h3></a>
			<div id="marketing" class="collapse">
				<p>Our marketing team is looking for a new member: you would help grow and multiply our marketing efforts in France. You'd be responsible for building up Nextcloud marketing in France, and your efforts would include implementing marketing campaigns, reaching out to and working with press, translating and putting together promotional materials and organizing or attending events. We're looking for somebody with marketing experience, able to work remote in an international team and willing to learn and try new things!</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>Creating, implementing and measuring marketing campaigns</li>
					<li>Organize events and our presence at conferences</li>
					<li>Build up content and social media presence</li>
					<li>Do PR and communication outreach</li>
					<li>Work with both community and business</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
					<li>Interest in messaging, public relations, able to build relations with local press</li>
					<li>Able to represent Nextcloud at events (self organized or attending)</li>
					<li>Writing and visual communication skills</li>
					<li>Being able to work independently, track progress and ask for help when needed</li>
					<li>Being fluent in French and living in France are required</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>We are looking for somebody who wants to make a difference, who wants to be responsible for the results of building up a local presence. It is a wide-ranging job and we strive to provide the freedom and space to find the right approach! We look for somebody with some marketing or sales/business development experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>
            <a href="#marketing-spain" data-toggle="collapse"><h3 class="jobs">Marketing and event manager Spain<span class="icon-arrow"></span></h3></a>
			<div id="marketing-spain" class="collapse">
				<p>Our marketing team is looking for a new member: you would help grow and multiply our marketing efforts in Spain. You'd be responsible for building up Nextcloud marketing in Spain, and your efforts would include implementing marketing campaigns, reaching out to and working with press, translating and putting together promotional materials and organizing or attending events. We're looking for somebody with marketing experience, able to work remote in an international team and willing to learn and try new things!</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>Creating, implementing and measuring marketing campaigns</li>
					<li>Organize events and our presence at conferences</li>
					<li>Build up content and social media presence</li>
					<li>Do PR and communication outreach</li>
					<li>Work with both community and business</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
					<li>Interest in messaging, public relations, able to build relations with local press</li>
					<li>Able to represent Nextcloud at events (self organized or attending)</li>
					<li>Writing and visual communication skills</li>
					<li>Being able to work independently, track progress and ask for help when needed</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>We are looking for somebody who wants to make a difference, who wants to be responsible for the results of building up a local presence. It is a wide-ranging job and we strive to provide the freedom and space to find the right approach! We look for somebody with some marketing or sales/business development experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>
            <a href="#marketing-italy" data-toggle="collapse"><h3 class="jobs">Marketing and event manager Italy<span class="icon-arrow"></span></h3></a>
			<div id="marketing-italy" class="collapse">
				<p>Our marketing team is looking for a new member: you would help grow and multiply our marketing efforts in Italy. You'd be responsible for building up Nextcloud marketing in Italy, and your efforts would include implementing marketing campaigns, reaching out to and working with press, translating and putting together promotional materials and organizing or attending events. We're looking for somebody with marketing experience, able to work remote in an international team and willing to learn and try new things!</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>Creating, implementing and measuring marketing campaigns</li>
					<li>Organize events and our presence at conferences</li>
					<li>Build up content and social media presence</li>
					<li>Do PR and communication outreach</li>
					<li>Work with both community and business</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
					<li>Interest in messaging, public relations, able to build relations with local press</li>
					<li>Able to represent Nextcloud at events (self organized or attending)</li>
					<li>Writing and visual communication skills</li>
					<li>Being able to work independently, track progress and ask for help when needed</li>
					<li>Speak Italian and live in Italy, ideally quite central</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>We are looking for somebody who wants to make a difference, who wants to be responsible for the results of building up a local presence. It is a wide-ranging job and we strive to provide the freedom and space to find the right approach! We look for somebody with some marketing or sales/business development experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>
            <a href="#marketing-nordics" data-toggle="collapse"><h3 class="jobs">Marketing and event manager Nordics<span class="icon-arrow"></span></h3></a>
			<div id="marketing-nordics" class="collapse">
				<p>Our marketing team is looking for a new member: you would help grow and multiply our marketing efforts in the Nordic countries, Denmark, Norway, Sweden and Finland. You'd be responsible for building up Nextcloud marketing in your region, and your efforts would include implementing marketing campaigns, reaching out to and working with press, translating and putting together promotional materials and organizing or attending events. We're looking for somebody with marketing experience, able to work remote in an international team and willing to learn and try new things!</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>Creating, implementing and measuring marketing campaigns</li>
					<li>Organize events and our presence at conferences</li>
					<li>Build up content and social media presence</li>
					<li>Do PR and communication outreach</li>
					<li>Work with both community and business</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
					<li>Interest in messaging, public relations, able to build relations with local press</li>
					<li>Able to represent Nextcloud at events (self organized or attending)</li>
					<li>Writing and visual communication skills</li>
					<li>Being able to work independently, track progress and ask for help when needed</li>
					<li>Speak at least 3 of the languages in the Nordics and live in one of the 4 mentioned countries</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>We are looking for somebody who wants to make a difference, who wants to be responsible for the results of building up a local presence. It is a wide-ranging job and we strive to provide the freedom and space to find the right approach! We look for somebody with some marketing or sales/business development experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>
            <a href="#marketing-_benelux" data-toggle="collapse"><h3 class="jobs">Marketing and event manager Benelux<span class="icon-arrow"></span></h3></a>
			<div id="marketing-_benelux" class="collapse">
				<p>Our marketing team is looking for a new member: you would help grow and multiply our marketing efforts in the Benelux. You'd be responsible for building up Nextcloud marketing in your region, and your efforts would include implementing marketing campaigns, reaching out to and working with press, translating and putting together promotional materials and organizing or attending events. We're looking for somebody with marketing experience, able to work remote in an international team and willing to learn and try new things!</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>Creating, implementing and measuring marketing campaigns</li>
					<li>Organize events and our presence at conferences</li>
					<li>Build up content and social media presence</li>
					<li>Do PR and communication outreach</li>
					<li>Work with both community and business</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
					<li>Interest in messaging, public relations, able to build relations with local press</li>
					<li>Able to represent Nextcloud at events (self organized or attending)</li>
					<li>Writing and visual communication skills</li>
					<li>Being able to work independently, track progress and ask for help when needed</li>
					<li>Speak Dutch and, ideally, also French</li>
					<li>Live in the Benelux</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>We are looking for somebody who wants to make a difference, who wants to be responsible for the results of building up a local presence. It is a wide-ranging job and we strive to provide the freedom and space to find the right approach! We look for somebody with some marketing or sales/business development experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>

			<a href="#marketing-local" data-toggle="collapse"><h3 class="jobs">Marketing and event manager - in your region!<span class="icon-arrow"></span></h3></a>
			<div id="marketing-local" class="collapse">
				<p>Our marketing team is looking for a new member: you would help grow and multiply our marketing efforts in your region. We are looking for enthusiastic people in countries and regions not mentioned above and where Nextcloud has a small presence but great potential! You'd be responsible for building up Nextcloud marketing to achieve that potential, and your efforts would include implementing marketing campaigns, reaching out to and working with press, translating and putting together promotional materials and organizing or attending events. We're looking for somebody with marketing experience, able to work remote in an international team and willing to learn and try new things!</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>Creating, implementing and measuring marketing campaigns</li>
					<li>Organize events and our presence at conferences</li>
					<li>Build up content and social media presence</li>
					<li>Do PR and communication outreach</li>
					<li>Work with both community and business</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
					<li>Interest in messaging, public relations, able to build relations with local press</li>
					<li>Able to represent Nextcloud at events (self organized or attending)</li>
					<li>Writing and visual communication skills</li>
					<li>Being able to work independently, track progress and ask for help when needed</li>

				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>We are looking for somebody who wants to make a difference, who wants to be responsible for the results of building up a local presence. It is a wide-ranging job and we strive to provide the freedom and space to find the right approach! We look for somebody with some marketing or sales/business development experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>

			<a href="#marketing-pm" data-toggle="collapse"><h3 class="jobs">Marketing project manager<span class="icon-arrow"></span></h3></a>
			<div id="marketing-pm" class="collapse">
				<p>Our marketing team is looking for a marketing project manager and team lead who helps us build and then ensures the success of our local marketing team. You would be responsible for managing the local marketing people and help them achieve their potential. Your focus should be on facilitating them in their job, interfacing with the rest of the organization, tracking their progress and helping them develop and share best practices. We are looking for somebody with team leadership experience, able to work remote in an international team and willing to learn and try new things!</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>Manage local and remote marketing experts</li>
					<li>Coordinating marketing activities like events, PR, social media, web and other</li>
					<li>Setting goals and monitoring progress</li>
					<li>Ensure alignment with global marketing team</li>
					<li>Coordinate and handle internal resources</li>
					<li>Report and escalate to management as needed</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
                    <li>Comfortable working remotely with people from all over the world in a global company</li>
                    <li>Capable of managing many parallel tasks</li>
                    <li>Good planning and tracking skills</li>
                    <li>Pro-active communication</li>
                    <li>Good marketing experience</li>
                    <li>Very good English skills. German is a plus.</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>We are looking for somebody who wants to make a difference, who wants to be responsible for the results of building up a team. It is a wide-ranging job and we strive to provide the freedom and space to find the right approach! We look for somebody with some team lead experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>

			<a href="#marketing-content" data-toggle="collapse"><h3 class="jobs">Content marketeer<span class="icon-arrow"></span></h3></a>
			<div id="marketing-content" class="collapse">
				<p>Our marketing team is looking for an enthusiastic writer who helps us with opinion blogs, case studies, newsletters, announcements and other writing tasks! You'd be responsible for managing our blog, work on newsletters, and other areas that involve content like our website, flyers, and so on. We're looking for somebody with writing experience, able to work remote in an international team and willing to learn and try new things!</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
                    <li>Manage our monthly newsletters and some ad-hoc newsletters</li>
                    <li>Coordinate, write and publish release blogs</li>
                    <li>Write opinion pieces and essay-style, argumentative articles</li>
                    <li>Write content for our website, flyers and other promo materials</li>
                    <li>Interview customers and create case studies</li>
                    <li>And in all that, coordinate with other team members to create, publish and promote the final products</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
                    <li>Experience writing a variety of texts in English</li>
                    <li>Proven ability to work remote and independently</li>
                    <li>You don't need to have experience in every single type of content we need, but it'd be nice if you have tried your hands at a few and know how to adapt a certain tone or style. We write sometimes for big enterprises, at other times to activist home users.</li>
                    <li>Enthusiasm, drive and motivation are helpful: we love initiative as there are plenty things worth writing about around Nextcloud!</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>We are looking for somebody who wants to make a difference, who wants to be responsible for getting content created and published. We look for somebody with some writing experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>

			<!--<a href="#web-designer-developer" data-toggle="collapse"><h3 class="jobs">Web designer & developer <span class="icon-arrow"></span></h3></a>
			<div id="web-designer-developer" class="collapse">
				<p>Our marketing team is looking for a new member: You would design and maintain our website. You'd be responsible for our online presence, both technical and design-wise, and work closely with the other marketers on messaging and content.
				We're looking for somebody with great design skills and some website maintenance experience, able to work remote in an international team and willing to learn and try new things!</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>Full maintenance of Nextcloud web site</li>
					<li>Turning marketing messages into beautiful visuals</li>
					<li>Coordinate with other designers at Nextcloud, collaborate on and maintain our common design language</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
					<li>Visual communication skills</li>
					<li>Screen and web design</li>
					<li>HTML/CSS skills to turn design into reality</li>
					<li>Being able to work independently, track progress and ask for help when needed</li>
					<li>(German language at C1, C2 or native level is a plus)</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>You can literally live anywhere. You're welcome in our Berlin or Stuttgart offices, of course.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>We are looking for somebody who wants to make a difference, who wants to be responsible for the results of enhancing our online presence. We strive to provide the freedom and space to find the right approach! We look for somebody with design and basic website development experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>-->

			<a href="#devrelmgr" data-toggle="collapse"><h3 class="jobs">Developer relations manager<span class="icon-arrow"></span></h3></a>
			<div id="devrelmgr" class="collapse">
				<p>We are looking for a passionate community and developer relations manager who can work alongside our engineers with our wonderful Nextcloud community and partners. You will be working on our open source libraries, communicate with our developer community and partners through all our channels and help them resolve issues they encounter writing apps or contributing. You work on tutorials, update documentations, give practical tips and help and give talks at events.</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>Support, grow and empower our community and technical partners</li>
					<li>Represent Nextcloud in our community and our community in Nextcloud</li>
					<li>Monitor and respond to community requests for help</li>
					<li>Ensure resources for community contributors and developers are well maintained</li>
					<li>Work with our partners to ensure they can build the best possible apps and improvements</li>
					<li>Measure, track and improve community metrics</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
					<li>You love working with people and have good interpersonal skills</li>
					<li>You know open source and have experience in communities, maybe even Nextcloud</li>
					<li>You have been or are a developer and thus have the technical skills to understand and support developers</li>
					<li>You have a passion for and experience in communicating through various channels</li>
					<li>You can fix an occasional bug or help somebody else do so</li>
					<li>You have good English language skills</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>There will be plenty of freedom and flexibility in defining the role and working conditions and room to advance within the company. We're a small company looking to change the world and you can change it with us. We are looking for somebody who wants to make a difference, who wants to be responsible for the results of building community. We look for somebody with some developer experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>

			<a href="#illustrator-animator" data-toggle="collapse"><h3 class="jobs">Illustrator, video editor & animator <span class="icon-arrow"></span></h3></a>
			<div id="illustrator-animator" class="collapse">
				<p>Our marketing team is looking for a new member: You would create illustrations, animations and videos for our social media presence, website, and supporting our releases. You will work closely with other marketers on messaging and content.
				We're looking for somebody with great design skills and some marketing experience, able to work remote in an international team and willing to learn and try new things!</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>Creating illustrations, animations and videos</li>
					<li>Turning marketing messages into beautiful visuals</li>
					<li>Coordinate with other designers at Nextcloud, collaborate on and maintain a design language</li>
				</ul>

				<h3 class="section--paragraph__title">Skills:</h3>
				<ul>
					<li>Modern visual communication & style</li>
					<li>Engaging illustrations to support messaging on website or posters</li>
					<li>Video and animation, both short clips for social media and longer videos for releases</li>
					<li>Marketing experience</li>
					<li>Being able to work independently, track progress and ask for help when needed</li>
					<li>(German language at C1, C2 or native level is a plus)</li>
				</ul>

				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
					<li>We have flexible office hours and most of our team works from home.</li>
					<li>You can literally live anywhere. You're welcome in our Berlin or Stuttgart offices, of course.</li>
					<li>We are flexible and open for part time work or somebody with a different background looking for a career switch! If you are unsure if you're a good fit - just apply and we'll figure it out together.</li>
				</ul>
				<p>We are looking for somebody who wants to make a difference, who wants to be responsible for the results of enhancing our online presence. We strive to provide the freedom and space to find the right approach! We look for somebody with design and basic marketing experience, but besides that, if you're willing to try new things, you are an ideal candidate! We especially encourage applications by people from underrepresented groups. Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>


			<a href="#saleseng" data-toggle="collapse"><h3 class="jobs">Sales Engineer/ Consultant<span class="icon-arrow"></span></h3></a>
			<div id="saleseng" class="collapse">
				<p>Technical sales engineers use their technical knowledge along with sales skills to provide advice and support on a range of products, for which a certain level of expertise is needed.</p>
				<p>You work close together with sales and engineering and assist colleagues with bids and tenders for new clients from a technical perspective, working on proof of concept deployments and answering questions.</p>
				<p>You like to work independently and self responsible on dedicated projects but like to also to exchange your knowledge with your colleagues.</p>
				<h3 class="section--paragraph__title">Responsibilities:</h3>
				<ul>
					<li>persuading clients that a product or service best satisfies their needs in terms of quality, price and delivery</li>
					<li>working closely together with sales on customer projects</li>
					<li>calculating client quotations</li>
					<li>providing pre-sales technical assistance and product education</li>
					<li>working on after-sales support services and providing technical backup as required</li>
					<li>arranging and carrying out product training</li>
					<li>support POC and Pilots at the customers together with support and engineering</li>
					<li>supporting sales and marketing activities by attending trade shows, conferences and other marketing events</li>
					<li>making technical presentations and demonstrating how a product meets client needs</li>
					<li>liaising with other members of the sales team and other technical experts</li>
					<li>helping in the design of custom-made products</li>
					<li>providing training and producing support material for other members of the sales team</li>
				</ul>
				<h3 class="section--paragraph__title">Required skills:</h3>
				<ul>
					<li>Solid technical background for infrastructure set-ups in medium and large organizations</li>
					<li>Sales skills</li>
					<li>Sound judgement and good business sense</li>
					<li>Organizational skills</li>
					<li>Teamworking capabilities</li>
					<li>Analytical and problem-solving skills</li>
					<li>Independence and self-reliance.</li>
					<li>Problem solving</li>
					<li>Product knowledge around open source technology</li>
					<li>General programming skills in PHP, HTML, CSS</li>
<!--					<li>Writing and speaking German and/or French language</li>-->
				</ul>
				<h3 class="section--paragraph__title">What we offer:</h3>
				<ul>
					<li>A distributed, open team with a passion for working on and within the open source community</li>
					<li>Promoting and selling a product which pushes the boundaries of technology and with a global user and contributor community</li>
					<li>A competitive salary</li>
					<li>Flexibility for a healthy work-life balance</li>
					<li>Time for personal growth and education</li>
				</ul>
				<p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
			</div>

            <a href="#jsdev" data-toggle="collapse"><h3 class="jobs">Javascript Developer<span class="icon-arrow"></span></h3></a>
            <div id="jsdev" class="collapse">
                <p>We're looking for developers with experience in Javascript/front-end development to join our server team!</p>
                <p>You would work with the engineering team to bring new features and improvements to the server user interface like our File management app or one of the many other applications like Calendar and Contacts, Announcements and more. You ideally have open source experience, know your way around git and Github and you live in the CET timezone.</p>
                <h3 class="section--paragraph__title">Responsibilities:</h3>
                <ul>
                    <li>Front end development (JS, PHP)</li>
                    <li>Cross platform testing</li>
                    <li>Quality assurance</li>
                </ul>
                <h3 class="section--paragraph__title">Required skills:</h3>
                <ul>
                    <li>Deep technical experience with Javascript and perhaps a bit of PHP</li>
                    <li>WebRTC experience a plus</li>
                    <li>Teamworking capabilities</li>
                    <li>Independence and self-reliance.</li>
                    <li>Knowledge around open source technology</li>
                </ul>
                <h3 class="section--paragraph__title">What we offer:</h3>
                <ul>
                    <li>A distributed, open team with a passion for working on and within the open source community</li>
                    <li>Developing a product which pushes the boundaries of technology and with a global user and contributor community</li>
                    <li>A competitive salary</li>
                    <li>Flexibility for a healthy work-life balance</li>
                    <li>Time for personal growth and education</li>
                </ul>
                <p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
            </div>
            <a href="#phpdev" data-toggle="collapse"><h3 class="jobs">PHP back-end developer<span class="icon-arrow"></span></h3></a>
            <div id="phpdev" class="collapse">
                <p>We're looking for developers with experience in PHP back-end development to join our server team!</p>
                <p>You would work with the engineering team to bring new features and improvements to the server back-end like new authentication or storage mechanisms, audio/video chat and more. You ideally have open source experience, know your way around git and Github and you live in the CET timezone.</p>
                <h3 class="section--paragraph__title">Responsibilities:</h3>
                <ul>
                    <li>Back end development (PHP)</li>
                    <li>Database design</li>
                    <li>Systems design</li>
                    <li>Quality assurance</li>
                </ul>
                <h3 class="section--paragraph__title">Required skills:</h3>
                <ul>
                    <li>Technical experience with PHP and bit of HTML, CSS, Javascript</li>
                    <li>Teamworking capabilities</li>
                    <li>Independence and self-reliance.</li>
                    <li>Knowledge around open source technology</li>
                </ul>
                <h3 class="section--paragraph__title">What we offer:</h3>
                <ul>
                    <li>A distributed, open team with a passion for working on and within the open source community</li>
                    <li>Developing a product which pushes the boundaries of technology and with a global user and contributor community</li>
                    <li>A competitive salary</li>
                    <li>Flexibility for a healthy work-life balance</li>
                    <li>Time for personal growth and education</li>
                </ul>
                <p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
            </div>
            <a href="#androiddev" data-toggle="collapse"><h3 class="jobs">Android App developer<span class="icon-arrow"></span></h3></a>
            <div id="androiddev" class="collapse">
                <p>We're looking for developers with experience in Android app development to join our client team!</p>
                <p>You would work with the engineering team to bring new features and improvements to the Android app around file handling, streaming, communication integration and more. You ideally have open source experience, know your way around git and Github and you live in the CET timezone.</p>
                <p>Responsibilities:</p>
                <ul>
                    <li>Android development (JAVA, Kotlin)</li>
                    <li>Software design</li>
                    <li>UX/UI design</li>
                    <li>Quality assurance</li>
                </ul>
                <p>Required skills:</p>
                <ul>
                    <li>Technical experience with Java</li>
                    <li>Teamworking capabilities</li>
                    <li>Independence and self-reliance.</li>
                    <li>Knowledge around open source technology</li>
                </ul>
                <p>What we offer:</p>
                <ul>
                    <li>A distributed, open team with a passion for working on and within the open source community</li>
                    <li>Developing a product which pushes the boundaries of technology and with a global user and contributor community</li>
                    <li>A competitive salary</li>
                    <li>Flexibility for a healthy work-life balance</li>
                    <li>Time for personal growth and education</li>
                </ul>
                <p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
            </div>
            <a href="#iosdev" data-toggle="collapse"><h3 class="jobs">iOS App developer<span class="icon-arrow"></span></h3></a>
            <div id="iosdev" class="collapse">
                <p>We're looking for developers with experience in iOS app development to join our client team!</p>
                <p>You would work with the engineering team to bring new features and improvements to the iOS app around file handling, streaming, communication integration and more. You ideally have open source experience, know your way around git and Github and you live in the CET timezone.</p>
                <p>Responsibilities:</p>
                <ul>
                    <li>iOS development (Objective-C/Swift)</li>
                    <li>Software design</li>
                    <li>UX/UI design</li>
                    <li>Quality assurance</li>
                </ul>
                <p>Required skills:</p>
                <ul>
                    <li>Technical experience with iOS development</li>
                    <li>Teamworking capabilities</li>
                    <li>Independence and self-reliance.</li>
                    <li>Knowledge around open source technology</li>
                </ul>
                <p>What we offer:</p>
                <ul>
                    <li>A distributed, open team with a passion for working on and within the open source community</li>
                    <li>Developing a product which pushes the boundaries of technology and with a global user and contributor community</li>
                    <li>A competitive salary</li>
                    <li>Flexibility for a healthy work-life balance</li>
                    <li>Time for personal growth and education</li>
                </ul>
                <p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
            </div>
                <!--<a href="#techwrite" data-toggle="collapse"><h3 class="jobs">Technical documentation writer<span class="icon-arrow"></span></h3></a>
            <div id="techwrite" class="collapse">
                <p>We're looking for a technical writer to join our server team!</p>
                <p>You would work with the engineering team to make sure Nextcloud features are well documented, ensure installation and handling of Nextcloud is described well and that people can find their way around in the product. You ideally have open source experience, know your way around git and Github and you live in the CET timezone.</p>
                <h3 class="section--paragraph__title">Responsibilities:</h3>
                <ul>
                    <li>Taking ownership of the Nextcloud documentation</li>
                    <li>Working with the Engineering team on the technical, developer and end user facing documentation</li>
                    <li>Proactively identifying areas that need further documentation</li>
                    <li>Editing, clarifying and proofreading documents written by others</li>
                </ul>
                <h3 class="section--paragraph__title">Required skills:</h3>
                <ul>
                    <li>Confidence in writing and copy-editing English documentation</li>
                    <li>Knowledge about Linux and basic PHP knowledge</li>
                    <li>Proficient or native german knowledge</li>
                    <li>Experience with the LAMP stack</li>
                    <li>Teamworking capabilities</li>
                    <li>Independence and self-reliance.</li>
                    <li>Knowledge around open source technology</li>
                </ul>
                <h3 class="section--paragraph__title">What we offer:</h3>
                <ul>
                    <li>A distributed, open team with a passion for working on and within the open source community</li>
                    <li>Working on a product which pushes the boundaries of technology and with a global user and contributor community</li>
                    <li>A competitive salary</li>
                    <li>Flexibility for a healthy work-life balance</li>
                    <li>Time for personal growth and education</li>
                </ul>
                <p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
            </div>-->

            <a href="#qa" data-toggle="collapse"><h3 class="jobs">QA engineer<span class="icon-arrow"></span></h3></a>
            <div id="qa" class="collapse">
                <p>We're looking for an engineer who can help us test and make Nextcloud rock stable!</p>
                <p>You would work with the engineering team to make sure Nextcloud is stable and well tested, developing and maintaining test plans, executing them and working with others to improve the automated and manual testing processes. You ideally have open source experience, know your way around git and Github and you live in the CET timezone.</p>
                <h3 class="section--paragraph__title">Responsibilities:</h3>
                <ul>
                    <li>Taking ownership of the Nextcloud testing/QA process</li>
                    <li>Working with the Engineering team on testing and guiding community testing</li>
                    <li>Proactively identifying areas that need more/better testing</li>
                    <li>Testing, improving automated and manual testing infrastructure</li>
                </ul>
                <h3 class="section--paragraph__title">Required skills:</h3>
                <ul>
                    <li>Experience managing and executing QA plans</li>
                    <li>Knowledge about Linux and basic PHP knowledge</li>
                    <li>Experience with the LAMP stack</li>
                    <li>Teamworking capabilities</li>
                    <li>Independence and self-reliance.</li>
                    <li>Knowledge around open source technology</li>
                </ul>
                <h3 class="section--paragraph__title">What we offer:</h3>
                <ul>
                    <li>A distributed, open team with a passion for working on and within the open source community</li>
                    <li>Working on a product which pushes the boundaries of technology and with a global user and contributor community</li>
                    <li>A competitive salary</li>
                    <li>Flexibility for a healthy work-life balance</li>
                    <li>Time for personal growth and education</li>
                </ul>
                <p>We are looking for somebody with ambition and drive who would like to grow and learn. That means that if you don't fulfill the requirements yet but want to learn, apply! Contact us at <a href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> with your resume if you are interested in this role.</p>
            </div>
		<h3 class="jobs">And more</h3>
		<div>
			<p>We are always looking for talented new people in all areas of our business - from engineering and support to sales and marketing. We especially encourage applications by people from underrepresented groups to submit their resume! Contact us at <a class="hyperlink" href="mailto:jobs@nextcloud.com">jobs@nextcloud.com</a> and tell us how you can help!</p>
		</div>
	</div>

</section>
