<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/pressrelease.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<meta itemprop="image" content="https://nextcloud.com/media/openletter_article13_social.png">
<meta name="twitter:image" content="https://nextcloud.com/media/openletter_article13_social.png">
<meta name="twitter:image:src" content="https://nextcloud.com/media/openletter_article13_social.png">
<meta property="og:image" content="https://nextcloud.com/media/openletter_article13_social.png">
</head>
<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>Press release</h1>
        </div>
    </div>
</div>

<section class="section--pressrelease">
<div class="container">
<div class="row">
<div class="pr">
<h1>130 EU businesses sign open letter against Copyright directive (Art. 11 & 13)</h1>
<h3>Warn MEPs about massive damage Copyright directive would do to EU economy.</h3>

<p><em>Stuttgart, Germany - March 19, 2019</em> - Nextcloud Founder and CEO Frank Karlitschek addresses an open letter urging members of the EU Parliament to vote against Articles 11 and 13 of the proposed Copyright Directive. The letter, which was signed by more than 130 companies and business alliances from 16 European countries, was sent to each member of the EU Parliament.</p>

<blockquote>As founder and CEO of Nextcloud I fear that Articles 11 and 13 of this directive create a serious disadvantage for European startups. The fact that more than 100 companies from different European countries signed our text within a few days shows that I am far from being the only one. I urge every politician to protect European businesses and vote against Article 11 and Article 13.</blockquote>
said Karlitschek.

<p>At the end of March, the EU parliament will have to vote on the Copyright Directive. Two articles in this directive - Articles 11 and 13 - will seriously jeopardize the success of business enterprises.</p>

<p>Find below a link to the open letter with its list of signatures.</p>

<p><strong>About Nextcloud</strong><br>
Nextcloud offers the industry-leading, fully open source, self-hosted Content Collaboration Platform, combining the easy user interface of consumer-grade cloud solutions with the security and compliance measures enterprises need. Nextcloud brings together universal access to data through mobile, desktop and web interfaces with next-generation, on-premise secure communication and collaboration features like real-time document editing, chat and video calls, putting them under direct control of IT and integrated with existing infrastructure.<br/>
Nextcloud's easy and quick deployment, open, modular architecture and emphasis on security and advanced federation capabilities enable modern enterprises to leverage their existing file storage assets within and across the borders of their organization. For more information, visit <a href="https://nextcloud.com">nextcloud.com</a> or follow <a href="https://twitter.com/Nextclouders">@Nextclouders</a> on Twitter.</p>

<p><strong>Links:</strong>
<ul>
<li>Blog with open letter <a class="hyperlink" href="https://nextcloud.com/blog/130-eu-businesses-sign-open-letter-against-copyright-directive-art-11-13/">nextcloud.com/blog</a>
<li>Open letter and initial signatories (pdf download) <a class="hyperlink" href="https://nextcloud.com/media/open_letter_copyright.pdf">PDF</a></li>
<li>More information about Nextcloud <a class="hyperlink" href="https://nextcloud.com/about">nextcloud.com/about</a></li>
</ul>

<p><strong>Press contact</strong><br />
Nextcloud GmbH<br />
Jos Poortvliet<br />
Hirschstrasse 26<br />
D-70173 Stuttgart, Germany<br />
e-mail: <a href="mailto:pr@nextcloud.com">pr@nextcloud.com</a></p>

<h1>Signing the letter <small>(after publication)</small></h1>
<p>If you want to sign the public letter with your company, please fill in the form below.<br>Note that your company name will be added to a separate list below the existing signatories on our blog.</p>

<?php

$int1 = random_int(0, 15);
$int2 = random_int(0, 50);
$salt = bin2hex(random_bytes(5));
$hash = hash('sha256', $salt . ($int1 + $int2));
$checksum = $salt . ':' . $hash;

$image = imagecreate(100, 20);
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 3, 2, $int1 . ' + ' . $int2, $text_color);

ob_start();
imagepng($image);
$imagestring = ob_get_contents();
ob_end_clean();
imagedestroy($image);
?>

<form name="sign" method="post" action="../publiclettersubmit/">
    <p><label for="companymail">Your business mail address<br>
    <input  type="text" name="companymail" maxlength="60" size="60"></label></p>
    <p><label for="company">Name of your company<br>
    <input  type="text" name="company" maxlength="80" size="60"></label></p>
    <p><label for="yourname">Your name and position <small>(optional)</small><br>
    <input  type="text" name="yourname" maxlength="80" size="60"></label></p>
    <p><label for="country">Country<br>
    <input  type="text" name="country" maxlength="80" size="60"></label></p>
    <td colspan="2" style="text-align:center">
    <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
    <p><label for="captcha">Please calculate the following sum: <span></span><br>
    <img src="data:image/png;base64,<?php echo base64_encode($imagestring); ?>"><br>
    <input  type="text" name="captcha" maxlength="20" size="20" placeholder="13"></label></p>
    <input  type="hidden" name="checksum" value="<?php echo $checksum;?>">
    <p>Please note that we only feature companies and business alliances on this list. We will not sign up private persons.<br>For that reason, we ask you to sign with your company email address.</p>
    <p>By clicking "submit" you confirm you used your business email address and you are authorized to sign this letter.<br>You will receive a confirmation email. Only after replying to that email will we add your email to the list. This is not a real-time process, we check manually.</p>
    <input type="submit" value=" Submit " class="button button--blue">
</form>

<small>Your data will not be stored. It will not be used beyond the purpose of signing this letter. See our <a href="http://nextcloud.com/privacy">privacy policy.</a></small>

</div>
</div>
</div>
</section>

