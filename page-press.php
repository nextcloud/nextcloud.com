<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css?v=1" rel="stylesheet">
<!--     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css"> -->
<!--     <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script> -->

<div class="background generic-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
                <h1>Press information</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
<div class="container">
    <h2>Current Release Information</h2>
    <h3>Nextcloud <?php echo $VERSIONS_SERVER_MAJOR_STABLE; ?></h3>
    <a class="button button--large button--white button--arrow" target="_blank" href="https://nextcloud.com/blog/nextcloud-hub-20-debuts-dashboard-unifies-search-and-notifications-integrates-with-other-technologies/">Announcement blog</a><br />
    <a href="<?php echo home_url('press/pr20201003-0') ?>" class="button button--large button--white button--arrow">Press release</a>
    <h2>Press releases 2020</h2>
    <ul>
        <li><a href="<?php echo home_url('press/pr20210118') ?>">January 18, 2020: Nextcloud and VIBE Cybersecurity Join Forces to Launch Crypto as a Service</a></li>
        <li><a href="<?php echo home_url('press/pr20210111') ?>">January 11, 2020: Telekom and Nextcloud offer Collaboration Platform</a></li>
        <li><a href="<?php echo home_url('press/pr20201216') ?>">December 16, 2020: Nextcloud introduces one-click migration from privacy-unfriendly public cloud platforms</a></li>
        <li><a href="<?php echo home_url('press/pr20201214-2') ?>">December 14, 2020: Hancom Works brings productivity, collaboration, and self-managed data privacy to the Cloud</a></li>
        <li><a href="<?php echo home_url('press/pr20201214-1') ?>">December 14, 2020: Hancom and Nextcloud announce Strategic Partnership</a></li>
        <li><a href="<?php echo home_url('press/pr20201210') ?>">December 10, 2020: SalesAgility and Nextcloud announce SuiteCRM integration collaboration</a></li>
        <li><a href="<?php echo home_url('press/pr20201003-0') ?>">October 3, 2020: Nextcloud Hub 20 debuts Dashboard, unifies search, becomes an integration platform</a></li>
        <li><a href="<?php echo home_url('press/pr20201003-1') ?>">October 3, 2020: Nextcloud becomes an integration platform with Microsoft, Google, Slack, Moodle, Github, Jira, Dropbox, Matrix and more</a></li>
        <li><a href="<?php echo home_url('press/pr20201003-2') ?>">October 3, 2020: Nextcloud announces Gitlab integration at Nextcloud Conference</a></li>
        <li><a href="<?php echo home_url('press/pr20201003-3') ?>">October 3, 2020: Nextcloud and Hancom partner up to provide users a secure, real-time co-authoring experience</a></li>
        <li><a href="<?php echo home_url('press/pr20201003-4') ?>">October 3, 2020: Moodle and Nextcloud announce further integration steps at Nextcloud Conference</a></li>
        <li><a href="<?php echo home_url('press/pr20201003-5') ?>">October 3, 2020: Zammad and Nextcloud announce collaboration at Nextcloud Conference</a></li>
        <li><a href="<?php echo home_url('press/pr20201003-6') ?>">October 3, 2020: Nextcloud and Struktur offer easy 30 day trial and integrated signup for hosted HPB in Talk 10</a></li>
        <li><a href="<?php echo home_url('press/pr20200831') ?>">August 31, 2020: Nextcloud and Kaspersky partner up to protect users from malicious files</a></li>
        <li><a href="<?php echo home_url('press/pr20200818') ?>">August 18, 2020: Production ready end-to-end encryption and new user interface for desktop client 3.0</a></li>
        <li><a href="<?php echo home_url('press/pr20200728') ?>">July 28, 2020: Nextcloud introduces Forms to protect privacy-sensitive survey data</a></li>
        <li><a href="<?php echo home_url('press/pr20200616') ?>">June 16, 2020: Nextcloud Mail introduces Machine Learning for Priority Inbox</a></li>
        <li><a href="<?php echo home_url('press/pr20200603') ?>">June 3, 2020: Nextcloud Hub brings productivity to home office workers</a></li>
        <li><a href="<?php echo home_url('press/pr20200519') ?>">May 19, 2020: Talk 9: big step forward for team calls, efficient work flows and open source back-end</a></li>
        <li><a href="<?php echo home_url('press/pr20200430') ?>">April 30, 2020: Massachusetts General Hospital and Nextcloud support fight against COVID</a></li>
        <li><a href="<?php echo home_url('press/pr20200408') ?>">April 8, 2020: German cloud giants launch GDPR-compliant collaboration platform for schools, government agencies and SMB</a></li>
        <li><a href="<?php echo home_url('press/pr20200312') ?>">March 12, 2020: Nextcloud doubles order intake and customer base, remains profitable and independent</a></li>
        <li><a href="<?php echo home_url('press/pr20200117-1') ?>">January 17, 2020: IONOS and Nextcloud together for more data sovereignty</a></li>
        <li><a href="<?php echo home_url('press/pr20200117-2') ?>">January 17, 2020: Nextcloud challenges SAAS vendors with launch of Hub</a></li>
        <li>See below for press releases from 2019 and before.</li>
    </ul>

    <h2>Latest News and Annoucements</h2>
    <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html' ) ); ?>
    <h2>Nextcloud Resources</h2>
    <!-- <p>Find an overview of Nextcloud history <a href="/history">on our history page</a> and an overview with <a href="/faq">frequently asked questions in our FAQ</a>.</p> -->
    <a href="<?php echo home_url('hub') ?>" class="button button--blue">Key Features of Nextcloud Hub</a>
    <a href="<?php echo home_url('install') ?>" class="button button--blue">Download Nextcloud Server <?php echo $VERSIONS_SERVER_MAJOR_STABLE; ?></a>
    <div class="row">
        <div class="col-md-3"><a href="https://nextcloud.com/media/screenshots.zip"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/screenshots.png" style="width: 100%" alt="Download a zip file with press photos and screenshots" class="img-thumbnail"></a></div>
        <div class="col-md-3"><a href="https://nextcloud.com/media/videos.zip"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/videofiles.png" style="width: 100%" alt="Download a zip file with video files" class="img-thumbnail"></a></div>
        <div class="col-md-3"><a href="https://www.youtube.com/c/Nextcloud"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/youtube.png" style="width: 100%" alt="View the Nextcloud community YouTube channel" class="img-thumbnail"></a></div>
    <!-- 		<div class="col-md-3"><a href="/nine"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/newfeatures.png" style="width: 100%" alt="See what is new in Nextcloud Server <?php echo $VERSIONS_SERVER_MAJOR_STABLE; ?>" class="img-thumbnail"></a></div> -->
    </div>
    <h2>Branding and Trademark Guidelines</h2>
    <p>Our general Trademark guidelines <a href="<?php echo home_url('trademarks') ?>">can be found here</a>.

    <!-- Find graphics like posters, stickers, flyers, release banners and other designs in our <a href="https://github.com/nextcloud/promo">promo github account</a>.</p>-->
    <h2>Inquiries</h2>
    <p>For press inquiries, please contact <a href="mailto:pr@nextcloud.com" target="_blank">our marketing and PR team</a>.<p>
    <h2>Older press releases</h2>
    <ul>
        <li><a href="<?php echo home_url('press/pr20191016') ?>">October 16, 2019: French universities and research organizations will gain access to secure, private collaboration platform</a></li>
        <li><a href="<?php echo home_url('press/pr20190930') ?>">September 30, 2019: Nextcloud 17 brings remote wipe, collaborative text editor and next generation secure watermarking</a></li>
        <li><a href="<?php echo home_url('press/pr20190827') ?>">August 27, 2019: Amid escalating trade disputes, EU governments choose independence from US cloud providers</a></li>
        <li><a href="<?php echo home_url('press/pr20190627') ?>">June 27, 2019: Nextcloud introduces collaborative rich text editor</a></li>
        <li><a href="<?php echo home_url('press/pr20190515') ?>">May 15, 2019: Nitrokey and Nextcloud collaborate on securing private clouds</a></li>
        <li><a href="<?php echo home_url('press/pr20190425') ?>">April 25, 2019: Nextcloud 16 introduces machine learning based security and usability features, ACL permissions and more advanced project management capabilities</a></li>
        <li><a href="<?php echo home_url('press/pr20190319') ?>">March 19, 2019: 130 EU businesses sign open letter against Copyright directive (Art. 11 and 13)</a></li>
        <li><a href="<?php echo home_url('press/pr20190226') ?>">February 26, 2019: Qloud MSP and Nextcloud announce partnership</a></li>
        <li><a href="<?php echo home_url('press/pr20190128-1') ?>">January 28, 2019: Nextcloud momentum continues amid industry awareness of GDPR and data leak risks, doubles customer base in 2018</a></li>
        <li><a href="<?php echo home_url('press/pr20190128-2') ?>">January 28, 2019: Nextcloud introduces Virtual Drive in Desktop Client to simplify desktop integration</a></li>
        <li><a href="<?php echo home_url('press/pr20190128-3') ?>">January 28, 2019: Nextcloud launches Customer Advisory Board</a></li>
        <li><a href="<?php echo home_url('press/pr20181210') ?>">December 10, 2018: Nextcloud 15 introduces social networking, next-gen 2-factor authentication and innovative collaborative document editing abilities</a></li>
        <li><a href="<?php echo home_url('press/pr20181120') ?>">November 20, 2018: ONLYOFFICE and Nextcloud partner to deliver seamless collaboration for modern organizations</a></li>
        <li><a href="<?php echo home_url('press/pr20181030') ?>">October 30, 2018: Nextcloud founder wins innovation award, donates prize money to open source diversity fund</a></li>
        <li><a href="<?php echo home_url('press/pr20181018') ?>">October 18, 2018: Nextcloud and Collabora bring deeper integration to document collaboration</a></li>
        <li><a href="<?php echo home_url('press/pr20180917') ?>">September 17, 2018: Rocket.Chat and Nextcloud announce partnership and integration</a></li>
        <li><a href="<?php echo home_url('press/pr20180825-1') ?>">August 25, 2018: Nextcloud 14 Introducing Video Verification and Signal/Telegram 2FA support, Improved Collaboration and GDPR compliance</a></li>
        <li><a href="<?php echo home_url('press/pr20180825-2') ?>">August 25, 2018: Japan to add millions of new nodes to federated Nextcloud network</a></li>
        <li><a href="<?php echo home_url('press/pr20180825-3') ?>">August 25, 2018: Nextcloud lowers barrier to privacy-protecting personal cloud, introducing Simple Signup</a></li>
        <li><a href="<?php echo home_url('press/pr20180523-1') ?>">May 23, 2018: Nextcloud releases GDPR Compliance kit for on-premises collaboration solution</a></li>
        <li><a href="<?php echo home_url('press/pr20180523-2') ?>">May 23, 2018: Nextcloud and Red Hat partner to provide GDPR-compliance friendly on-premises collaboration solution</a></li>
        <li><a href="<?php echo home_url('press/pr20180206') ?>">February 6, 2018: Self-Hosted Nextcloud 13 Brings End-to-end Encryption, Video/Text Chat and Enhanced Collaboration</a></li>
        <li><a href="<?php echo home_url('press/pr20180123') ?>">January 23, 2018: Nextcloud secure file sync and share now available via GEANT and NRENs to educational market</a></li>
        <li><a href="<?php echo home_url('press/pr20180111-2') ?>">January 11, 2018: Nextcloud achieves stellar growth in 2017 amid increasing awareness of compliance, control and data security among businesses</a></li>
        <li><a href="<?php echo home_url('press/pr20180111') ?>">January 11, 2018: Nextcloud Talk provides fully self-hosted, complete audio/video and text communication platform</a></li>
        <li><a href="<?php echo home_url('press/pr20180108') ?>">January 8, 2018: 100K app downloads in 2017 shows strong growth of self-hosted online office market</a></li>
        <li><a href="<?php echo home_url('press/pr20171018/') ?>">October 18, 2017: Nextcloud and Purism Partner to Build and Include End-to-End Encrypted Storage Products and Services</a></li>
        <li><a href="<?php echo home_url('press/pr20170927/') ?>">September 27, 2017: Nextcloud Launches First Native Integrated End-to-end Encryption in Enterprise File Sync and Share Solution</a></li>
        <li><a href="<?php echo home_url('press/pr20170824/') ?>">August 24, 2017: Nextcloud iOS app Free for Download on App Store</a></li>
        <li><a href="<?php echo home_url('press/pr20170807/') ?>">August 7, 2017: Nextcloud and Partners Announce Education Edition With Moodle, Zenodo and other integration features</a></li>
        <li><a href="<?php echo home_url('press/pr20170522/') ?>">May 22, 2017: Nextcloud announces Global Scale architecture as part of Nextcloud 12</a></li>
        <li><a href="<?php echo home_url('press/pr20170508/') ?>">May 8, 2017: Nextcloud and Adfinis SyGroup sign strategic partnership</a></li>
        <li><a href="<?php echo home_url('press/pr20170502/') ?>">May 2, 2017: Nextcloud 12 Beta Introduces the Next Generation of Secure Collaboration</a></li>
        <li><a href="<?php echo home_url('press/pr20170307/') ?>">March 7, 2017: DASEQ and Nextcloud announce partnership</a></li>
        <li><a href="<?php echo home_url('press/pr20161213/') ?>">December 13, 2016: Nextcloud 11 sets new standard for security and scalability</a></li>
        <li><a href="<?php echo home_url('press/pr20161027/') ?>">October 27, 2016: Nextcloud GmbH continues growth path with addition of Head of Sales</a></li>
        <li><a href="<?php echo home_url('press/pr20160929/') ?>">Semptember 29, 2016: Danish research and education network moves from ownCloud to Nextcloud</a></li>
        <li><a href="<?php echo home_url('press/pr20160916/') ?>">Semptember 16, 2016: Nextcloud Box – a private cloud and IoT solution for home users – from Nextcloud, Canonical and WDLabs</a></li>
        <li><a href="<?php echo home_url('press/pr20160901/') ?>">Semptember 1st, 2016: Nextcloud Conference to Feature Launch Event, Keynote Speakers: Jane Silber, CEO of Canonical and Karen Sandler, Executive Director at the Software Freedom Conservancy</a></li>
        <li><a href="<?php echo home_url('press/pr20160825/') ?>">August 25th, 2016: Nextcloud 10 Delivers Secure, Fine Grained Control over Data Access and Workflows</a></li>
        <li><a href="<?php echo home_url('press/pr20160812/') ?>">August 12th, 2016: Press event at IFA 2016: Using everyday technology to make a positive impact</a></li>
        <li><a href="<?php echo home_url('press/pr20160721/') ?>">July 21th, 2016: Beta of Nextcloud 10 with Brute Force Protection, Two-Factor Authentication, Improved Federation and more</a></li>
        <li><a href="<?php echo home_url('press/pr20160719/') ?>">July 19th, 2016: Nextcloud and Collabora Partner to Offer Community and Enterprise Solution for Online Office</a></li>
        <li><a href="<?php echo home_url('press/pr20160705/') ?>">July 5th, 2016: Nextcloud delivers secure enterprise functionality backed by expert support and with partner-provided iOS client</a></li>
        <li><a href="<?php echo home_url('press/pr20160614') ?>">June 14, 2016: Nextcloud 9 Released Ahead of Promised Date and Fully Committed to Open Source</a></li>
        <li><a href="<?php echo home_url('press/pr20160602') ?>">June 2nd, 2016: Core Contributors Fork Into Nextcloud</a></li>
    </ul>

</div>
</section>
