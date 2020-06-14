<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css?v=1" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
                <h1>Privacy and Legal Policy</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2><?php echo $l->t('Introduction and summary');?></h2>
            <p><small><a href="<?php echo home_url('privacyde') ?>" class="hyperlink">Deutsche Datenschutzerklärung hier</a></small></p>
            <p><?php echo $l->t('We recognize that privacy is extremely important to all visitors to our website. We do not share any individual information with anybody without your permission.');?></p>
            <p><?php echo $l->t('<strong>To download a whitepaper</strong>, you have to enter your email address. Unless you <strong>opt in</strong> for more information, we <em>immediately delete your mail address</em> from our database after sending the whitepaper.');?></p>
            <p><?php echo $l->t('<strong>Our website</strong> ocasionally embeds content, like YouTube videos (behind a click-through wall) and others. We do not share any of your data with the parties behind them, however, they can gather some information when you watch a video or click the captcha. We are always looking for ways to decrease data sharing here and input is welcome.');?></p>
            <p><?php echo $l->t('<strong>For traking and marketing automation</strong> we use the open source <a class="hyperlink" href="http://matomo.org/">Matomo (the former Piwik)</a> tool to get information on how our website is used and use <a class="hyperlink" href="https://www.phplist.com/">phplist</a> to handle our newsletters. We use the open source marketing automation tool <a class="hyperlink" href="https://mautic.com">Mautic</a> to track business users that did download resources like white papers or participate in webinars <em>and who did opt-in explicitly</em>. From neither will we hand over individual data to anybody else and any privacy breaches we will disclose as soon as possible. We also delete, anonymize and remove data regularly.');?></p>
            <p><?php echo $l->t('<strong>Our <a class="hyperlink" href="https://scan.nextcloud.com">security scanner</a></strong> is strictly based on publicly available information, that is the list of known vulnerabilities relevant for ownCloud/Nextcloud releases as well as any applied hardenings/settings we can scan without having access to the server. We only scan on-demand and store the results for a limited time.');?></p>
            <p><?php echo $l->t('<strong>Our forums</strong> on <a class="hyperlink" href="https://scan.nextcloud.com">help.nextcloud.com</a> runs the open source <a class="hyperlink" href="https://discourse.org">discourse</a> software. This is self-hosted and we do not share, disclose or otherwise distribute any data from it. You can disable your own account there if you need to. Note that this platform is meant for home users and home user questions! As enterprise visitor, please use <a class="hyperlink" href="https://portal.nextcloud.com">our support portal</a>. If you still use the forums, expect that we reach out to you at some point.');?></p>
            <p><?php echo $l->t('As we <strong>do not host Nextcloud</strong> for anyone else, this privacy policy can not cover what a Nextcloud installation does. In general, we can say the following:');?></p>
            <p><?php echo $l->t('<strong>Our software</strong>, be it the Nextcloud server or the Android or iOS apps, are designed to not sent any user data to us. The optional Usage Survey app can sent usage statistics like installed apps to us to help us improve our service. You can review and approve the data before it is sent. We store the data aggregated and not per user, so a theft of our data can not be used to get any information about any specific installation. The Updater app, if enabled, sends Nextcloud version, PHP version, install time and the channel it wants to the Nextcloud updater server to receive update information. We store the install time and version on the instance to track statistics, all other data is discarded right away.');?></p>
            <p><?php echo $l->t('<strong>With regards to third party apps:</strong> we can not take any responsibility for third-party apps and the data they store or sent about users. We do have a policy in our app store against abusing private data and any app that is found to be in violation is removed and its author banned. However, we do not have the ability to check all code of all third party applications and thus we recommend you are careful when installing third party apps.');?></p>
            <p><?php echo $l->t('If you see any problems, please report it to <a class="hyperlink" href="mailto:abuse@nextcloud.com">abuse@nextcloud.com</a>.');?></p>
            <p><?php echo $l->t('You can find details in our complete privacy policy below.');?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2><?php echo $l->t('Nextcloud Privacy Policy');?></h2>
            <p><?php echo $l->t('Our privacy policy is written to help you find out how Nextcloud handles "Personally identifiable information ("PII). PII is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.');?></p>
            <h3><?php echo $l->t('What personal information do we collect from the people that visit our blog, website or app?');?></h3>
            <p><?php echo $l->t('Like most websites, nextcloud.com collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. nextcloud.com’s purpose in collecting non-personally identifying information is to better understand how nextcloud.com’s visitors use its website. From time to time, nextcloud.com may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.');?></p>
            <p><?php echo $l->t('nextcloud.com also collects potentially personally-identifying information like Internet Protocol (IP) addresses. nextcloud.com does not use such information to identify its visitors, however, and does not disclose such information to third parties unless legally obliged to do so.');?></p>
            <p><?php echo $l->t('We honour the do-not-track directive. nextcloud.com will not track anything if this is enabled.');?></p>
            <p><?php echo $l->t('Furthermore, our website visit statistics tool Mamoto is configured to anonymize visitor IP addresses data by not storing the last digits of all IP addresses. ');?></p>
            <p><?php echo $l->t('When registering or submitting a form on our site, as appropriate, you may be asked to enter your name, email address, phone number or other details. See below on what happens with that data.');?></p>
            <h3><?php echo $l->t('When do we collect information?');?></h3>
            <h4>On our websites:</h4>
            <p><?php echo $l->t('We collect information from you when you subscribe to a newsletter, fill out a form or enter information on our site.');?></p>
            <h4>Nextcloud Files</h4>
            <p><?php echo $l->t('Our apps only communicate with your own Nextcloud server and do not sent any data to us. The Play Store version equal to or newer than 1.5.0 for Nextcloud supports push notifications which use the Google servers. However Google does not have access to the actual notification data. Only a header with a subject is sent via Google, but in encrypted form, and the rest of the content is retrieved directly from your Nextcloud server and <strong>not</strong> sent through Google. The iOS client works in a similar way.');?></p>
            <h3><?php echo $l->t('How do we use your information?');?></h3>
            <p><?php echo $l->t('We may use the information we collect from you when you register, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:');?></p>
            <ul>
                <li><?php echo $l->t('To improve our website in order to better serve you.');?></li>
                <li><?php echo $l->t('To send periodic emails regarding your order or other products and services.');?></li>
                <li><?php echo $l->t('To follow up with them after correspondence (live chat, email or phone inquiries)');?></li>
            </ul>
            <h3><?php echo $l->t('Mautic');?></h3>
            <p><?php echo $l->t('We use the open source <a class="hyperlink" href="https://mautic.org">Mautic marketing automation tool.</a> This is used for actions like emailing a whitepaper to people who entered their email address to receive it. If you enter an email address on our site, you agree with that (otherwise we can not sent you that white paper either). We might sent follow-up emails (like a reminder if you did not download the white paper, or a notification of a new white paper), from which you can opt-out on the bottom of the emails.');?></p>
            <p><?php echo $l->t('In line with our business strategy of not monetizing home and small business users but aim for large enterprises, our goal is to ONLY track employees of companies using their work email. We try to drop all home/private users from the database as soon as we find out they are private users, of course after we have sent them the white paper they asked for. For example, we remove contacts with an @gmail or @icloud address and keep obviously business related addresses (@acme @example-ltd @placeholder-corp.com). For those we then might follow up on a End-to-end Encryption white paper download a week later with an offer to download our Server-side Encryption white paper; or sent a follow-up email suggesting to read a new blog about encryption we wrote. Our goal is to keep potential customers informed and help them in their journey to become a Nextcloud user and customer, without bothering others. ');?></p>
            <p><?php echo $l->t('Of course, you can opt-out of any emails using the unsubscribe link on the bottom of these emails. Note that you then do not get any emails from Mautic anymore: also not if you enter your mail again to get a white paper!');?></p>
            <h3><?php echo $l->t('How do we protect visitor information?');?></h3>
            <p><?php echo $l->t('We only provide articles, white papers and other information. We never ask for credit card numbers or other financial data.');?></p>
            <p><?php echo $l->t('We use regular Malware Scanning.');?></p>
            <p><?php echo $l->t('Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, all sensitive information you supply is encrypted via Secure Socket Layer (SSL) technology.');?></p>
            <p><?php echo $l->t('We implement a variety of security measures when a user places an order and enters, submits, or accesses their information to maintain the safety of your personal information.');?></p>
            <h3><?php echo $l->t('Do we use "cookies"?');?></h3>
            <p><?php echo $l->t('Yes. Cookies are small files that a site or its service provider transfers to your computer hard drive through your Web browser (if you allow) that enables the site or service provider systems to recognize your browser and capture and remember certain information. Cookies are used to help us understand your preferences based on previous or current site activity, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.');?></p>
            <p><?php echo $l->t('We use cookies to:');?></p>
            <ul>
            <li><?php echo $l->t('Understand and save user preferences for future visits.');?></li>
            <li><?php echo $l->t('Compile aggregate data about site traffic and site interactions in order to offer better site experiences and tools in the future. We do not use third-party services (like Google Analytics) that track this information on our behalf.');?></li>
            </ul>
            <p><?php echo $l->t('You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser (like Internet Explorer or firefox) settings. Each browser is a little different, so look at your browser Help menu to learn the correct way to modify your cookies settings.');?></p>
            <p><?php echo $l->t('If you disable cookies, some minor features might be disabled.');?></p>
            <h3><?php echo $l->t('Third-party disclosure');?></h3>
            <p><?php echo $l->t('We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide users with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential. We may also release information when its release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property or safety.<br />
            However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses. Think aggregated statistics (number of website visitors in a particular month) or trends ("we see an increase in the number of visitors from Asia").');?></p>
            <h3><?php echo $l->t('Third-party links');?></h3>
            <p><?php echo $l->t('We do not include or offer third-party products or services on our website.');?></p>
            <h3><?php echo $l->t('According to the California Online Privacy Protection Act (CalOPPA) we agree to the following:');?></h3>
            <p><?php echo $l->t('Users can visit our site anonymously.');?></p>
            <p><?php echo $l->t('Once this privacy policy is created, we will add a link to it on our home page or as a minimum on the first significant page after entering our website.');?></p>
            <p><?php echo $l->t('Our Privacy Policy link includes the word "Privacy" and can be easily be found on the page specified above.');?></p>
            <p><?php echo $l->t('Users will be notified of any privacy policy changes on our Privacy Policy Page.');?></p>
            <p><?php echo $l->t('Users are able to change their personal information:');?></p>
            <ul>
                <li><?php echo $l->t('By emailing us');?></li>
                <li><?php echo $l->t('By calling us');?></li>
            </ul>');?></p>
            <h3><?php echo $l->t('How does our site handle do not track signals?');?></h3>
            <p><?php echo $l->t('We honor do not track signals and do not track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place.');?></p>

            <h3><?php echo $l->t('Does our site allow third-party behavioral tracking?');?></h3>
            <p><?php echo $l->t('We do not allow or employ third-party behavioral tracking. Our website features no third party ads or tracking tools.');?></p>
            <h3><?php echo $l->t('Fair Information Practices');?></h3>
            <p><?php echo $l->t('The Fair Information Practices Principles form the backbone of privacy law in the United States and the concepts they include have played a significant role in the development of data protection laws around the globe. Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the various privacy laws that protect personal information.');?></p>
            <p><?php echo $l->t('In order to be in line with Fair Information Practices, should a data breach occur we will notify the users via email within 7 business days');?></p>
            <p><?php echo $l->t('We also agree to the Individual Redress Principle, which requires that individuals have a right to pursue legally enforceable rights against data collectors and processors who fail to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that individuals have recourse to courts or government agencies to investigate and/or prosecute non-compliance by data processors.');?></p>
            <h3><?php echo $l->t('CAN SPAM Act');?></h3>
            <p><?php echo $l->t('The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.');?></p>
            <h3><?php echo $l->t('We collect your email address in order to:');?></h3>
            <li><?php echo $l->t('Send information, respond to inquiries, and/or other requests or questions.');?></p>
            <li><?php echo $l->t('Market to our mailing list or continue to send emails to our clients after the original transaction has occurred.');?></p>
            <h3><?php echo $l->t('To be in accordance with CANSPAM we agree to the following:');?></h3>
            <ul>
                <li><?php echo $l->t('NOT use false or misleading subjects or email addresses.');?></li>
                <li><?php echo $l->t('Identify the message as an advertisement in some reasonable way.');?></li>
                <li><?php echo $l->t('Include the physical address of our business or site headquarters.');?></li>
                <li><?php echo $l->t('Monitor third-party email marketing services for compliance, if one is used.');?></li>
                <li><?php echo $l->t('Honor opt-out/unsubscribe requests quickly.');?></li>
                <li><?php echo $l->t('Allow users to unsubscribe by using the link at the bottom of each email.');?></li>
            </ul>
            <h3><?php echo $l->t('Unsubscribing');?></h3>
            <p><?php echo $l->t('If at any time you would like to unsubscribe from receiving future emails follow the instructions at the bottom of each email and we will promptly remove you from correspondence by that tool. Note that you have to unsubscribe separately from our newsletter and our marketing automation tool.');?></p>

            <h3><?php echo $l->t('Website source');?></h3>
            <p><?php echo $l->t('The source code of the website can be found in <a class="hyperlink" href="https://github.com/nextcloud/nextcloud.com">our GitHub repo</a>. It is licensed under the <a class="hyperlink" href="https://en.wikipedia.org/wiki/GNU_Affero_General_Public_License">AGPLv3 license</a>. Note that graphics and trademarks are of course not licensed freely, nor is text content. The license covers the code of the site.');?></p>

            <h2><?php echo $l->t('Contact');?></h2>
            <p><?php echo $l->t('If there are any questions regarding this privacy policy you may contact us using the information below.');?></p>

            <h2><?php echo $l->t('Privacy Policy Changes');?></h2>
            <p><?php echo $l->t('Although most changes are likely to be minor, Nextcloud may change its Privacy Policy from time to time and at our sole discretion. We encourage visitors to frequently check this page for any changes to our Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.');?></p>

            <h2><?php echo $l->t('Legal Notice');?></h2>
            <address><p><?php echo $l->t('Nextcloud GmbH<br/>
            Hirschstrasse 26<br/>
            70173 Stuttgart Germany<br/></address>
            HRB 227086 (AG München)<br/>
            T +49 711 25 24 28 90<br/>') ?>
            <a class="hyperlink" href="<?php echo home_url('contact') ?>"><?php echo $l->t('contact form') ?></a><br/>
            </p>
            <p><?php echo $l->t('Managing Director:<br/>
            Frank Karlitschek<br/>');?></p>
            <p><?php echo $l->t('<small>All product names and trademarks are the property of their respective owners, which might in no way be associated or affiliated with Nextcloud.</small>');?></p>

            <p><?php echo $l->t('Last Edited on 2020-06-14');?></p>
        </div>
    </div>
</div>
</section>
