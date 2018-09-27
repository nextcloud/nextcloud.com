<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>Security Policy</h1>
        </div>
    </div>
</div>

<section class="content">
<div class="container">
    <h3><strong>Heads up!</strong> We appreciate every report, however, please notice that our team is very busy and therefore won't respond to reports which we rate as "low" severity or invalid (e.g. DoS in Apache our "X-Powered-By" headers). So do us and yourself a favour: Don't report such things, we will ignore it.</h3>
    <p>If you've discovered a security issue with Nextcloud, please <a class="hyperlink" href="#policy">read our responsible disclosure policy.</a>
    <p>You can then <a class="hyperlink" href="https://hackerone.com/nextcloud">use our HackerOne program</a> to report issues with our supported products. Alternatively, you can contact <strong>security (at) nextcloud (dot) com</strong>. Your report should include:</p>
    <ul>
        <li>Product version</li>
        <li>A vulnerability description</li>
        <li>Reproduction steps</li>
    </ul>
    <p>A member of the security team will confirm the vulnerability, determine its impact, and develop a fix. The fix will be applied to the master branch, tested, and packaged in the next security release. The vulnerability will be publicly announced after the release. Finally, your name will be added to the <a href="/security/hall-of-fame">hall of fame</a> as a thank you from the entire Nextcloud community.</p>
    <a name="policy"></a>
    <h3>Responsible Disclosure Policy</h3>
    The Nextcloud community asks that you comply with the following guidelines when researching and reporting security vulnerabilities:
    <ul>
        <li>Only test for vulnerabilities on your own install of Nextcloud Server</li>
        <li>Confirm the vulnerability applies to a supported product version</li>
        <li>Share vulnerabilities in detail only with the security team</li>
        <li>Allow reasonable time for a response from the security team</li>
        <li>Do not publish information related to the vulnerability until Nextcloud has made an announcement to the community</li>
    </ul>
    <h3>Supported Product Versions</h3>
    <p>See our <a href="<?php echo home_url('security') ?>">Security page</a></p>
    <h3>3rd party apps</h3>
    3rd party app security vulnerabilities should also be reported to the security team. The security team is not responsible for the security of these apps, but will attempt to contact the 3rd party app maintainer and then take proper actions.
    </div>
</section>
