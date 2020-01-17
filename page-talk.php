<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/talk.css?v=4" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-chat-nw.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-chat-nw.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-chat-nw.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-chat-nw.png">
<meta name=”Description” content="You need confidential communication? Find out how Talk is your solution!">

</head>
<div class="background talk-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Talk');?></h1>
				<h2><?php echo $l->t('Screensharing, online meetings & web conferencing without data leaks.');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
	<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 video">
			<stream src="58bf7b0f3ae662ee1d6b368099c8c94f" controls autoplay></stream>
            <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=58bf7b0f3ae662ee1d6b368099c8c94f"></script>
		</div>
    </div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><span class="avoidwrap"><?php echo $l->t('Meetings with colleagues, customers and partners');?></span> - <span class="avoidwrap"><?php echo $l->t('have a personal conversation with one click.');?></span></p>
                <p class="section--paragraph text-center"><span class="avoidwrap"><?php echo $l->t('Keep conversations private with Nextcloud Talk.');?></span></p>
                <div class="text-center">
                    <!--<a href="install/#install-clients" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>-->
                </div>
			</div>
		</div>
	</div>
</section>

<section class="">
<div class="container">
   	<div class="row">
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-chat-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-chat-nw.png" class="img-responsive featureimg" /></a>
		</div>
        <div class="col-md-6">
            <p class="section--paragraph__tittle"><?php echo $l->t('Unique protection');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud talk protects your communication better than other team collaboration platforms like Microsoft Teams or Slack, making sure your data stays on your servers.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud Talk goes further than other encrypted communication technologies by keeping even metadata from leaking.');?></p>
            <p class="section--paragraph"><?php echo $l->t('This ensures you stay in complete control of communications.');?></p>
		</div>
	</div>
	<div class="row">
            <p class="text-center"><?php echo $l->t('Regain full control over the communication in your organization right now.');?></p>
            <div class="text-center morebuttondiv">
                <a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow button--blue"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
    </div>
</div>
</section>

<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6 image--floated">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/SCM_team.jpg" alt="SCM picture"/></a>
            </div>
            <div class="col-md-6  feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Nextcloud Talk offering secure corporate messaging for SCM LIMITED');?></p>
                <p class="section--paragraph"><?php echo $l->t('When SCM was looking for a simple, secure and well designed messenger platform that could be hosted on-premises, a decision was made for Nextcloud Talk. A Professional Services project from Nextcloud GmbH provided several features SCM required and today, the legal, human resource, financial and PR experts of SCM can easily communicate and collaborate during their business trips.');?></p>
                <a href="https://nextcloud.com/blog/nextcloud-talk-offering-secure-corporate-messaging-for-scm-limited/" class="button button--blue button--arrow button--large"><?php echo $l->t('Read the blog');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--compliance">
<div class="container">
	<div class="row feature-row">
		<div class="col-md-6 col-md-offset-3">
            <h2 class="text-center"><?php echo $l->t('Compliance');?></h2>
            <p class="section--paragraph text-center"><?php echo $l->t('Self-hosting communication simplifies compliance with national and international privacy and security regulations.<br>By relying on existing, vetted infrastructure, your current compliance and security processes apply to Nextcloud Talk.');?></p>
        </div>
    </div>
	<div class="row feature-row">
		<div class="col-md-4">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/gdpr-apps-nw.png" alt="GDPR apps"/></a>
        </div>
		<div class="col-md-8  feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('GDPR, CCPA and more');?></p>
			<p class="section--paragraph"><?php echo $l->t('The GDPR (General Data Protection Regulation) makes organizations liable for any violations of user privacy and deviations from a high data security standard.<br>Legislation like the CCPA (California Consumer Privacy Act of 2018) brings similar regulation to other countries.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud has extensive GDPR compliance capabilities.');?></p>
			<p class="section--paragraph"><a class="button button--blue button--medium" href="<?php echo home_url('gdpr') ?>"><?php echo $l->t('Learn more');?></a></p>
		</div>
    </div>
	<div class="row feature-row">
		<div class="col-md-4">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/European_Commission.svg" alt="EU logo"/></a>
        </div>
		<div class="col-md-8  feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('ePrivacy Regulation');?></p>
			<p class="section--paragraph"><?php echo $l->t('The <a class="hyperlink" href="https://ec.europa.eu/digital-single-market/en/news/stronger-privacy-rules-electronic-communications">upcoming EU ePrivacy Regulation</a> is designed as a complement to the GDPR. The objective is to reinforce trust and security in the Digital Single Market by ensuring that electronic communications from Europeans are confidential regardless of the technology used. The ePrivacy Regulation protects the confidentiality of electronic communications and information on devices, independently whether it is personal or non-personal data.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud is designed to protect the confidentiality of communications and fully prepares customers for the upcoming ePrivacy Regulation.');?></p>
		</div>
    </div>
</div>
</section>


<section class="section--metadata">
<a name="metadata"></a>
<div class="container">
   	<div class="row">
		<div class="col-md-6">
        <p class="section--paragraph__tittle"><?php echo $l->t('Why metadata and self hosting matter');?></p>
            <p class="section--paragraph"><?php echo $l->t('Metadata, often described as everything except the content of your communications, has less legal protections but can be incredibly revealing. From a list of who somebody talks to and when, much can be inferred!');?> <a class="hyperlink" href="https://ssd.eff.org/en/module/why-metadata-matters"><?php echo $l->t('The Electronic Frontier Foundation explains it well on their site.');?></a></p>
            <blockquote class="twitter-tweet"><p lang="en" dir="ltr">So turns out <a href="https://twitter.com/wire?ref_src=twsrc%5Etfw">@wire</a> changed ownership, didn&#39;t really notify anyone as per their own privacy policy, and worst of all it&#39;s to a US entity. It&#39;s been proven time after time we shouldn&#39;t place our data (or trust) into US entities. I used wire because it was different. Cc <a href="https://twitter.com/Snowden?ref_src=twsrc%5Etfw">@Snowden</a> <a href="https://t.co/i2cwAhMaTQ">https://t.co/i2cwAhMaTQ</a></p>&mdash; Peter Sunde Kolmisoppi (@brokep) <a href="https://twitter.com/brokep/status/1194392575442067456?ref_src=twsrc%5Etfw">November 12, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
        <div class="col-md-6">
            <p class="section--paragraph"><?php echo $l->t('Of course, service providers might promise not to store and track such meta data, but governments will simply force them if need be. This was shown when log-free email provider Posteo was ordered to store logs of its customers by the German Constitutional Court.');?> <a href="https://www.zdnet.com/article/log-free-email-provider-posteo-you-must-log-user-ip-addresses-court-rules/" class="hyperlink"><?php echo $l->t('Read about this on ZDNet.');?></a></p>
            <p class="section--paragraph"><?php echo $l->t('And that is not even mentioning the fact that even privacy-focused, Swiss-based companies can suddenly be sold to a foreign entity.');?></a></p>
            <p class="section--paragraph"><?php echo $l->t('Like with the content of communication, the best way to protect metadata is to ensure it never leaks for your infrastructure in the first place.');?></a></p>
        </div>
    </div>
</div>
</section>



<section class="section--features">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center"><?php echo $l->t('Key capabilities');?></h2>
        <div class="row">
            <div class="col-sm-4">
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('Fully on-premise, 100% open source');?></li>
                    <li><?php echo $l->t('Self-hosted so no leaking of metadata');?></li>
                    <li><?php echo $l->t('Encrypted, peer-to-peer audio/video calls');?></li>
                    <li><?php echo $l->t('WebRTC for cross-platform support');?></li>
                </ul></p>
            </div>
            <div class="col-sm-4">
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('Individual and group calls & chat');?></li>
                    <li><?php echo $l->t('Mobile apps for Android and iOS');?></li>
                    <li><?php echo $l->t('Easy screen sharing');?></li>
                    <li><?php echo $l->t('Integration with');?> <a class="hyperlink" href="<?php echo home_url('files') ?>">Nextcloud Files</a> <?php echo $l->t('and');?> <a class="hyperlink" href="<?php echo home_url('groupware') ?>">Groupware</a></li>
                </ul></p>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li><?php echo $l->t('Mobile calls & chat with push notifications');?></li>
                    <li><?php echo $l->t('Commands to enable integration with other tools');?></li>
                    <li><?php echo $l->t('Webinars & public web meetings*');?></li>
                    <li><?php echo $l->t('SIP gate: dial in by phone*');?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p class="section--paragraph text-center"><?php echo $l->t('* with optional Nextcloud Talk High Performance Backend');?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('starting at Eur 4000/USD 4500');?></p>
            <p class="section--paragraph text-center"><a class="button button--medium" href="#pricing"><?php echo $l->t('Learn more');?></a></p>
        </div>
    </div>
</div>
</section>

<section class="section--benefits">
<div class="container">
	<div class="row list">
        <div class="col-md-6">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/clients/mobile/android-talk.png" class="img-responsive" />
        </div>
        <div class="col-md-6   benefits-images">
            <p class="section--paragraph__tittle"><?php echo $l->t('Benefits');?></p>
            <div class="row benefits-images">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/monitoring.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>Get more done</strong><br>Clean interface, clean communication');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/cut.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>Decrease travel costs</strong><br>Meet as often as you need');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/people.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>Build better relationships</strong><br>Working together in real time');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/encrypted-communication.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>Stay in control</strong><br>End-to-end encrypted calls on your own server');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/manual.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>Easy to get started</strong><br>Install, invite & call in with one click');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/mobile.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>Be mobile</strong><br>Mobile clients & browser support');?></p>
                </div>
			</div>
        </div>
</div>
</section>

<section class="section--introduction">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--floated">
			<div data-type="youtube" data-video-id="Nr7cGN6ZJM0"></div>
            <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/Nr7cGN6ZJM0" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-md-6">
			<p class="section--paragraph__tittle"><?php echo $l->t('Designed for privacy');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud Talk is a fully self hosted, on-premises audio/video and chat communication service. It features web and mobile apps and is designed to offer the highest degree of security while being easy to use.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud Talk lowers the barrier for communication and lets your team connect any time, any where, on any device, with each other, customers or partners.');?></p>
			<p class="section--paragraph"><?php echo $l->t('While Nextcloud Talk itself is free, the optional Nextcloud Talk High Performance Backend enables enterprise class scalability, reliability and features.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-nw.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<p class="section--paragraph__tittle"><?php echo $l->t('Private, group and public calls');?></p>
			<p class="section--paragraph"><?php echo $l->t('Talk makes it easy to call customers and partners in one-to-one or group-scenarios.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Users can invite external chat participants with an URL into public rooms on the Nextcloud server.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The chat, which remains open even when the user leaves a call, enables participants to easily exchange messages, links and notes.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 image--floated">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-screensharing-other-nw.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-screensharing-other-nw.png" /></a>
		</div>
		<div class="col-md-6">
			<p class="section--paragraph__tittle"><?php echo $l->t('Webinars and presentations');?></p>
			<p class="section--paragraph"><?php echo $l->t('Share the content of a single window or a full desktop screen for presentations with chat-partners.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Manage participants by inviting, muting or removing them.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Schedule meetings and be notified when they start.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Edit documents while chatting or having a call in the sidebar.');?></p>
			<p class="section--paragraph"><?php echo $l->t('A lobby is provided for guests to wait until the call starts.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6  image--feature new-img">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/command-help.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/command-help.png" class="img-responsive featureimg" /></a>
		</div>
        <div class="col-md-6">
            <p class="section--paragraph__tittle"><?php echo $l->t('Commands for productivity');?></p>
            <p class="section--paragraph"><?php echo $l->t('Commands allows administrators to define actions users can call from a chat.');?></p>
            <p class="section--paragraph"><?php echo $l->t('These can send their input back into the chat or kick off actions.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Commands are simple scripts, making it easy to integrate Nextcloud in business infrastructure.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6  image--floated image--feature new-img">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-project-starfish.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-project-starfish.png" class="img-responsive featureimg" /></a>
		</div>
        <div class="col-md-6">
            <p class="section--paragraph__tittle"><?php echo $l->t('Integration with Nextcloud');?></p>
            <p class="section--paragraph"><?php echo $l->t('Documents can be shared directly into a chat from the Files app and are made available to all participants, both users and guests.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Projects integration enables linking of chat rooms with files, calendars, tasks and other resources for easy finding.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Our online office solutions provide a sidebar with Talk for chat and calls with the participants.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6  image--feature">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-devices-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-devices-nw.png" class="img-responsive featureimg" /></a>
		</div>
        <div class="col-md-6">
            <p class="section--paragraph__tittle"><?php echo $l->t('Secure and private');?></p>
            <p class="section--paragraph"><?php echo $l->t('Calls are end-to-end encrypted so no communication can be intercepted.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Chat logs are stored securely on your own server.');?></p>
            <p class="section--paragraph"><?php echo $l->t('The privacy of communication and its metadata is guaranteed by self-hosting Nextcloud Talk!');?></p>
		</div>
	</div>
    <div class="row">
        <div class="col-md-6 image--floated">
        <div data-type="youtube" data-video-id="Pffusr1bac4"></div>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Pffusr1bac4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
            <p class="section--paragraph__tittle"><?php echo $l->t('Video Verification');?></p>
            <p class="section--paragraph"><?php echo $l->t('In situations where extreme security is warranted and the identity of a recipient has to be verified with absolute certainty before they are granted access, Nextcloud includes the industry-first implementation of Video Verification.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Video Verification enforces a Nextcloud Talk video call before access is given to a share, making sure the identity of the recipient is properly checked. The call can be picked up through the Nextcloud Talk Mobile apps as well as the web interface.');?></p>
        </div>
    </div>
</div>
</section>

<section class="section--getmobile">
    <div class="container-fluid banner quote">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                <h2 class="text-center"><?php echo $l->t('Get the mobile apps now!');?></h2>
                    <div class="row">
                        <div class="col-md-6 mobileclientbuttons">
                            <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS_TALK; ?>">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png"></a>
                        </div>
                        <div class="col-md-6 mobileclientbuttons">
                            <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID_TALK; ?>">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/iPhone6s-talk-chat.png">
        <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/iPhone6s-talk-chat.png">
    </div>
</section>

<section class="section--options">
	<a name="pricing" id="pricing"></a>
<div class="container-widest">
	<div class="row introduction">
        <div class="col-lg-6 col-lg-offset-3">
            <h1 class="section--heading-1 section--text--center"><?php echo $l->t('Enterprise Ready');?></h1>
            <p class="section--paragraph section--text--center"><?php echo $l->t('The optional Nextcloud Talk High Performance Backend for large organizations by Struktur AG offers the capacity, reliability and features enterprises need to conduct their business privately, securely and efficiently.');?></p>
		</div>
	</div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="featureblock">
                        <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/people.svg" /></div>
                        <p class="section--paragraph__tittle text-center"><?php echo $l->t('Dial-in anywhere');?></p>
                        <p class="section--paragraph text-center"><?php echo $l->t('Let participants join through a phone line, wherever they are');?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featureblock">
                        <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/manual.svg" /></div>
                        <p class="section--paragraph__tittle text-center"><?php echo $l->t('No limitations');?></p>
                        <p class="section--paragraph text-center"><?php echo $l->t('Improved connectivity behind firewalls and restrictive networks and more participants in a call');?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featureblock">
                        <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/2fa.svg" /></div>
                        <p class="section--paragraph__tittle text-center"><?php echo $l->t('Get started quickly');?></p>
                        <p class="section--paragraph text-center"><?php echo $l->t('Remote installation support from a certified Nextcloud engineer');?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <p class="section--paragraph section--text--center"><?php echo $l->t('The Nextcloud Talk High Performance Backend improves connection speed and reliability, decreases server load and allows more people in a call by improving network efficiency.');?></p>
        </div>
    </div>
</div>
</section>

<section class="section--contact quote">
<div class="container">
    <div class="row">
        <h2 class="text-center"><?php echo $l->t('Pricing');?></h2>
        <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud Talk High Performance Backend');?></p>
        <p class="section--paragraph text-center"><?php echo $l->t('providing MCU, STUN, TURN and SIP gate');?></p>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <p class="section--paragraph"><?php echo $l->t('Starting at EUR 4000/USD 4500 per year');?>
            </p>
            <ul >
                <li><?php echo $l->t('EUR 80/USD 90 per user per year at 50 users');?></li>
                <li><?php echo $l->t('EUR 40/USD 45 per user per year at 500 users');?></li>
            </ul>
            <p class="section--paragraph">
            <small><?php echo $l->t('(further volume discounts at larger user numbers available)');?></small>
            </p>
        </div>
        <div class="col-sm-6">
            <div class="text-center morebuttondiv">
                <a href="<?php echo home_url('buy') ?>" class="button button-button--large button--arrow"><?php echo $l->t('Contact Sales for a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
        </div>
    </div>
</div>
</section>
<?php require get_template_directory().'/verticals.php';?>
