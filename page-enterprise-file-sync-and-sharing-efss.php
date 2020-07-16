<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/efss.css" rel="stylesheet">
<script>
    require(["require.config"], function() {
        require(["bootstrap", "pages/secure"])
    });
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration6.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration6.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration6.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration6.jpg">

</head>
<div class="background security-background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1>Enterprise File Sync and Share</h1>
			<h2>What is EFSS and what to look for when choosing one</h2>
		</div>
	</div>
</div>
<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="section--paragraph text-center">An Enterprise File Sync and Share is a piece of software that gives users access to documents, photos and videos on any of their devices. It also allows them to easily share these documents with others.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<blockquote><a class="hyperlink" href="http://searchmobilecomputing.techtarget.com/definition/EFSS-Enterprise-file-sync-and-share">The most common reason</a> for deploying an EFSS is to prevent employees from using consumer-based file sharing apps to store, access and manage corporate data outside the IT departments' control and visibility.</blockquote>
		</div>
	</div>
</section>

<div class="separator"></div>

<section class="section--keyfeatures">
<div class="container">
    <div class="row">
        <h2 class="text-center">Key features</h2>
    </div>
	<div class="row">
        <div class="col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2 image--floated">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/illustrations/selfhosting-square.png" alt="access on any device" >
        </div>
        <div class="col-sm-6 col-lg-6 col-md-6">
            <p class="section--paragraph">EFSS applications generally offer the following abilities:</p>
            <ul>
                <li>Sync files from corporate storage to user desktops and mobile devices so users can work wherever they are</li>
                <li>Let users share links to files and folders within and outside the organization to simplify collaboration</li>
                <li>Integrate in existing user management and enterprise applications so IT can manage access and permissions to data</li>
                <li>Protect data with anti-virus, encryption and Data Loss Prevention and provide auditing and reporting on activity around files</li>
            </ul>
            <p class="section--paragraph">Most EFSS solutions are cloud based. There are some hybrid or on-premises alternatives.</p>
        </div>
	</div>
</div>
</section>

<section class="section--screenshots">
<div class="container">
    <div class="row">
        <h2 class="text-center">What it looks like</h2>
    </div>
	<div class="row">
        <div class="col-md-6">
           <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/Files_Sharing_Share_Link_Permissions.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/Files_Sharing_Share_Link_Permissions.png" alt="file view" ></a><br />
           A typical EFSS web interface showing files and a sidebar with sharing options for the selected file
        </div>
        <div class="col-md-6">
           <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/text-and-talk.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/text-and-talk.png" alt="sidebar with talk" ></a><br />
           More advanced solutions allow real-time document editing and communication in one interface
        </div>
       <!-- <div class="col-md-6">
           <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/android-UI.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/android-UI.png" alt="access on any device" ></a><br />
            These features are all available on mobile so team members can work wherever they want
        </div>-->
	</div>
</div>
</section>


<section class="section--differentiators-orig">
<div class="container-fluid banner quote">
<div class="container">
    <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="text-center"><?php echo $l->t('Differentiators');?></h2>
                <p class="section--paragraph text-center"><?php echo $l->t('What is the best EFSS solution? The most important factors enterprises look for are these.');?></p>
            </div>
        </div>
	<div class="row">
		<div class="col-md-4">
			<div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/mobile.svg" /></div>
			<h3 class="section--paragraph__title"><?php echo $l->t('Ease of use');?></h3>
			<p class="section--paragraph"><?php echo $l->t('A simple, familiar interface is key for fast adoption. While the more complex document management solutions, groupware products or workflow tools are introducing EFSS features, they tend to be too complicated so users keep using Dropbox or Google Drive.');?></p>
		</div>
		<div class="col-md-4">
			<div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/permissions.svg" /></div>
			<h3 class="section--paragraph__title"><?php echo $l->t('Infrastructure integration');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Another key barrier to adoption is integration in existing data silos and user management. While most off-premises solutions integrate with Active Directory, data typically has to be migrated. On-premises solutions can offer access to existing data on Windows Network Drive, Sharepoint or FTP storages, as well as Outlook and other integrations.');?></p>
		</div>
		<div class="col-md-4">
			<div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/people.svg" /></div>
			<h3 class="section--paragraph__title"><?php echo $l->t('Built-in collaboration');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The market is quickly moving away from file exchange solutions and towards integrated work flows with video chat, task management and collaborative document editing built in (thus evolving into "content collaboration platforms"). Solutions which are slow to adopt to these trends present a long-term risks for their customers as migrations are costly.');?></p>
		</div>
	</div>
</div>
</div>
</section>


<!--<section class="section--differentiators">
<div class="container featureblock">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center"><?php echo $l->t('Differentiators');?></h2>
            <p class="section--paragraph text-center"><?php echo $l->t('What is the best EFSS solution? The most important factors enterprises look for are these.');?></p>
        </div>
    </div>
    <div class="row featuretabs">
        <div role="tabpanel">
            <div class="col-sm-5 col-md-4 col-lg-3">
                <ul class="nav nav-pills brand-pills nav-stacked" style="opacity: 1;" role="tablist">
                    <li role="presentation" class="brand-nav active"><a href="#differentiators-tab1" aria-controls="differentiators-tab1" role="tab" data-toggle="tab"><?php echo $l->t('ease of use');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#differentiators-tab2" aria-controls="differentiators-tab2" role="tab" data-toggle="tab"><?php echo $l->t('infrastructure integration');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#differentiators-tab3" aria-controls="differentiators-tab3" role="tab" data-toggle="tab"><?php echo $l->t('built-in collaboration');?></a></li>
                </ul>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="differentiators-tab1">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/mobile.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('A simple, familiar interface is key for fast adoption. While the more complex document management solutions, groupware products or workflow tools are introducing EFSS features, they tend to be too complicated so users keep using Dropbox or Google Drive.');?></p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="differentiators-tab2">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/storage.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Another key barrier to adoption is integration in existing data silos and user management. While most off-premises solutions integrate with Active Directory, data typically has to be migrated. On-premises solutions can offer access to existing data on Windows Network Drive, Sharepoint or FTP storages, as well as Outlook and other integrations.');?></p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="differentiators-tab3">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/people.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('The market is quickly moving away from file exchange solutions and towards integrated work flows with video chat, task management and collaborative document editing built in ("content collaboration platforms"). Solutions which are slow to adopt to these trends present a long-term risks for their customers as migrations are costly.');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>-->

<section class="section--solution">
<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Security</h2>
            <p class="section--paragraph"><?php echo $l->t('EFSS software is entrusted with highly valued and sensitive data. The loss of company secrets due to theft, the risk of leakage of private customer data or the productivity hit of a ransomware attack is huge and thus EFSS vendors offer a range of cutting-edge security capabilities.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Look for these when picking a secure solution:');?></p>

            <ul>
                <li><p class="section--paragraph"><?php echo $l->t('Multiple layers of encryption for in-transit, on-disk and client-side protection');?></li>
                <li><p class="section--paragraph"><?php echo $l->t('Active security measures like advanced two-factor authentication and ransomware protection<');?>/li>
                <li><p class="section--paragraph"><?php echo $l->t('Technological hardenings like brute force detection and browser-security like CSP and SCC');?></li>
                <li><p class="section--paragraph"><?php echo $l->t('A well-ran security bug bounty program (<a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-conference-news-nextcloud-gmbh-doubling-hackerone-security-bug-bounties/">example</a>) proportionate to the value of data you store');?></li>
                <li><p class="section--paragraph"><?php echo $l->t('Unique features showing a vendor takes security serious, like <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-16-becomes-smarter-with-machine-learning-for-security-and-productivity/">machine learning based protection</a> or <a class="hyperlink" href="https://nextcloud.com/blog/unique-sharing-security-video-verification/">novel file sharing protections</a>');?></li>
            </ul>
		</div>
    </div>
</div>
</section>

<section class="section--risk">
<div class="container">
	<div class="row">
		<div class="col-md-6 ">
            <a href="https://www.rijksoverheid.nl/binaries/rijksoverheid/documenten/rapporten/2020/06/30/data-protection-impact-assessment-office-365-for-the-web-and-mobile-office-apps/DPIA+Office+for+the+Web+and+mobile+Office+apps+30+June+2020.pdf"><img src="https://nextcloud.com/media/DPIA.png" alt="" class="img-responsive" /></a><br /> DPIA commisioned by the Dutch government shows a series of issues in Office 365
		</div>
		<div class="col-md-6 ">
			<h3 class="section--paragraph__title"><?php echo $l->t('Office 365 not GDPR compliant');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Use of Office 365 adds significantly to compliance risks. Like many other SaaS solutions, it, fails to follow the requirements and risk business data as a Data Protection Impact Assesment of Office 365 by the Dutch government showed again in mid 2020. This after serious flaws were found and promised to be fixed first in early 2019 and again later that year. Legal challenges are mounted continuously and can cause significant harm.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Links:');?></p>
			<ul>
			<li><a class="hyperlink" href="https://www.rijksoverheid.nl/binaries/rijksoverheid/documenten/rapporten/2020/06/30/data-protection-impact-assessment-office-365-for-the-web-and-mobile-office-apps/DPIA+Office+for+the+Web+and+mobile+Office+apps+30+June+2020.pdf" target="_blank">Data Protection Impact Assesment by Dutch Government mid 2020</a></li>
			<li><a class="hyperlink" href="https://www.euractiv.com/section/digital/news/schrems-charts-us-surveillance-pushback-after-ecj-ruling/" target="_blank">Another round of legal challenges against US firms threatening their ability to offer any GPDR compliant services.</a></li>
			</ul>
	</div>
</div>
</section>

<section class="">
<div class="container-fluid quote">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="section--paragraph text-center"><?php echo $l->t('Compare the most popular cloud-based EFSS, Microsoft OneDrive, with the most popular on-premises solution, Nextcloud.');?></p>
                <p class="section--paragraph text-center"><a class="button button--blue button--arrow" href="<?php echo home_url('nextcloud-vs-office365') ?>"><?php echo $l->t('Compare OneDrive and Nextcloud');?></a></p>
            </div>
        </div>
    </div>
</div>
</section>


<section class="">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="section--paragraph text-center"><span class="avoidwrap">SaaS in public clouds is a risky solution! A McAfee survey showed that</span> <span class="avoidwrap"><a class="hyperlink" href="https://www.zdnet.com/article/report-1-in-4-public-cloud-users-has-had-data-stolen/">25% of organizations using public cloud suffered data theft.</a></span></p>
            <p class="section--paragraph text-center"><a class="button button--blue button--arrow" href="https://nextcloud.com/blog/the-issue-with-public-cloud/"><?php echo $l->t('Learn about the risks of public SaaS clouds');?></a></p>
        </div>
    </div>
</div>
</section>
<section class="section--benefits">
<div class="container">
    <h2 class="text-center">on-premises Nextcloud</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/firewall.svg" /></div>
            <p class="section--paragraph__tittle text-center">Why self-hosting?</p>
            <p class="section--paragraph text-center">Simply keeping your data behind your company firewall or at a local hosting provider rather than in an US cloud makes compliance and security easy.</p>
            <p class="section--paragraph text-center">With Nextcloud, you don't lose the benefits of modern cloud collaboration and team productivity!</p>
        </div>
        <div class="col-md-4">
            <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/people.svg" /></div>
            <p class="section--paragraph__tittle text-center">Why file sync and share?</p>
            <p class="section--paragraph text-center">Your FTP or Windows Network Drive simply don't suffice - employees work around, rather than with them, using Dropbox and other unsafe solutions.</p>
            <p class="section--paragraph text-center">Nextcloud puts your IT back in control over your data.</p>
        </div>
        <div class="col-md-4">
            <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/tools.svg" /></div>
            <p class="section--paragraph__tittle text-center">Why Nextcloud?</p>
            <p class="section--paragraph text-center">Nextcloud provides an unique combination of security and control over data without compromising usability.</p>
            <p class="section--paragraph text-center">Being open source means no vendor lock in and an unprecedented degree of integration in enterprise infrastructure.</p>
        </div>
    </div>
</div>
</section>
<section class="section--conclusion">
<div class="container-fluid">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="section--paragraph__tittle text-center">Fast deployment: secure your data <strong>now</strong></p>
            <p class="section--paragraph text-center">Nextcloud is famously easy to deploy and easy to use, a key reason behind its market leadership.</p>
            <p class="section--paragraph text-center"><a href="<?php echo home_url('enterprise/buy') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Contact us');?></a></p>
        </div>
    </div>
</div>
</div>
</section>
<section>
<div class="container">
    <div class="row feature-row">
        <div class="col-md-6 image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/iPhone6s-talk-chat.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
        <h2>Future-ready: built in collaboration</h2>
        <p>Gartner typically calls solutions in this space Enterprise File Sync and Share or EFSS. In the last years, the market has been moving on to providing a next generation EFSS, called Content Collaboration Platform, integrating online document editing, communication and planning capabilities complementing the file exchange technologies.</p>
        <p>Nextcloud is a leading vendor in this new space, offering these capabilities with <a class="hyperlink" href="<?php echo home_url('groupware') ?>">Nextcloud Groupware</a> and <a class="hyperlink" href="<?php echo home_url('talk') ?>">Nextcloud Talk</a>, delivering seamless communication features integrated in Files. Users can attach a note to shares, comment on files, open a chat or even start a call directly, connecting files to these conversations to keep track of it all. Integrated email and calendaring connect projects and teams to the files they work with, and with Deck, Nextcloud provides a kanban board app which works together with all those.</p>
        <p>All these functions are available on-the-go and work across organizational boundaries, allowing users to self-manage thanks to built in support for creating guest accounts by users as well as public sharing links that require no login but can be protected by a password.</p>
        </div>
    </div>

    <div class="row">
    <h2>Your advantages</h2>
        <div class="col-md-12">
            <h3>No new data silos</h3>
            <p class="section--paragraph">Modern organizations have data in a wide variety of silos like Sharepoint, Windows Network Drives, FTP sites and (often without knowledge of management) Dropbox or Google Drive. Nextcloud acts as a <a class="hyperlink" href="<?php echo home_url('storage') ?>">single file access, sync and share layer</a> across all these storage systems, integrating with enterprise native account handling like LDAP or SAML.</p>
            <p class="section--paragraph">That does not exclude using public cloud, nor requires you to give up on data locality. Nextcloud fits perfectly in a hybrid cloud strategy, enabling access to data on Amazon S3 and other public storage technologies. Even cutting-edge Blockchain storage technologies like <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-joins-storj-labs-to-deliver-decentralized-secure-storage/">Storj.io</a> and Sia.tech are available to augment storage at extremely low cost. Moreover, using trusted, local providers like IONOS or hosting.de means you can trust data stays under a jurisdiction that protects your business secrets.</p>
		</div>
    </div>
</div>
</section>
<section>
<div class="container">
    <div class="row">
        <div class="col-md-4 image--floated  image--feature">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/firewall.png" alt="Nextcloud File Firewall" >
        </div>
	    <div class="col-md-8">
            <h3>Under IT's control</h3>
            <p class="section--paragraph">No matter the storage solution used, Nextcloud can <a class="hyperlink" href="<?php echo home_url('workflow') ?>">ensure corporate policies are followed.</a> Sharing can be restricted through the file firewall, filtering on user properties like location or group, or file properties like (automatically or manually) assigned tags, file type and more. With storage transparent to users, generic data can remain where it is while IT can make sure that business critical or compliance-relevant information is stored on internal infrastructure and does not leave the company. Use our secure <a class="hyperlink" href="<?php echo home_url('secure-drop') ?>">File Drop</a> to let customers upload files to you in a easy and secure way!</p>
   		</div>
    </div>
</div>
</section>
<section>
<div class="container">
    <div class="row">
        <div class="col-md-6 image--feature">
            <img class="img-responsive acess__anywhere" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/endtoend-android2-nw.png" alt="access on any device" >
        </div>
	    <div class="col-md-6">
            <h3>With uniquely layered encryption</h3>
            <p class="section--paragraph">Nextcloud offers a supremely easy to use, well integrated file sync and share solution with an uniquely layered approach to security. Together with the support for nearly any storage technology, it features server-side encryption and offers the ability to employ <a class="workflow" href="<?php echo home_url('end-to-end') ?>">end-to-end, client side encryption</a> for a subset of user files. Rather than making it an either-or choice, your business can rely on utmost security where it is needed but keep collaborative online document editing and full-text search on the server over the rest of the stored data.</p>
		</div>
    </div>
</div>
</section>
<section>
<div class="container">
    <div class="row feature-row">
        <div class="col-md-6 image--feature image--floated new-img">
            <a><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/ransomware-recovery.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Best Ransomware protection in the industry');?></p>
            <p class="section--paragraph"><?php echo $l->t('Ransomware attacks are becoming more targetted as lots of money can be extracted from businesses and government organizations. While insurance can cover direct costs, the disruption to business is immense regardless. Nextcloud goes far beyond competing solutions, offering automated, one-click ransomware recovery tools.');?></p>
            <a href="https://nextcloud.com/blog/amidst-rising-ransomware-costs-another-us-city-pays-hundreds-of-thousands-to-recover-data/" class="button button--blue button--arrow button--large"><?php echo $l->t('Ransomware risks and protection');?></a>
        </div>
    </div>
</div>
</section>
<section>
<div class="container">
    <div class="row">
        <div class="col-md-6 image--floated">
            <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/I5wcLS9xxMw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
	    <div class="col-md-6">
            <h3>At global scale and ensuring data locality</h3>
			<p class="section--paragraph">Our unique <a href="<?php echo home_url('globalscale') ?>" class="hyperlink">Global Scale</a> technology enables multiple Nextcloud instances to work as one, enabling enterprises to maintain multiple locations. Local regulations to ensure data locality can be satisfied without user impact and scaling to millions of users can be done cost-effectively.</p>
		</div>
    </div>
</div>
</section>
<section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Designed for the real world</h2>
            <p class="section--paragraph">Users can access data on a FTP drive shared with another company; while data stored on an external object storage could be encrypted using server-side encryption so the storage provider has no way to compromise their security.</p>

            <p class="section--paragraph">Meanwhile, files from the HR department are always enforced to be end-to-end encrypted on their clients, protecting their files from even the worst case of a full server breach.</p>

            <p class="section--paragraph">In the back-end, IT can use a mix of local NFS or SharePoint storage, public S3 compatible storage and even blockchain technology to find the perfect mix between performance, reliability, security and cost.</p>

            <p class="section--paragraph">The layered approach to security makes sure users have the maximum amount of productivity in their web interface while making sure sensitive data receives the ultimate protection, client-to-client. Keeping it all in a single solution simplifies management and avoids mistakes from users or IT departments that might cause costly data leaks.</p>
        </div>
	</div>
</div>
</section>
<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock">
				<p class="text-center">Contact us to learn how we can help you secure corporate data.</p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow">Contact us <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

