<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>Need help?</h1>
        </div>
    </div>
</div>

<section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p><?php echo $l->t('If you have technical questions or need support,');?> <a href="<?php echo home_url('support') ?>"><?php echo $l->t('check out the options on our support page.</a>');?>
            <h2><?php echo $l->t('Talk to us online!');?></h2>
            <p><?php echo $l->t('Most of our contributors are active in <a href="irc://#nextcloud-dev@freenode.net" target="_blank">the Nextcloud development IRC channel</a> on freenode.net, also accessible via <a href="https://webchat.freenode.net/?channels=nextcloud-dev" target="_blank">webchat</a>. We are also very active <a href="https://help.nextcloud.com" target="_blank">on our forums</a>.');?> <a href="<?php echo home_url('contribute') ?>"><?php echo $l->t('Get involved!!</a>');?></p>
            </div>
        <div class="col-md-8 col-md-offset-2">
            <h1><?php echo $l->t('Contact us');?></h1>
            <p><?php echo $l->t('If you have any questions or comments on the website or have a business question, complete the form below and we\'ll get back to you!<br/><strong>If you need technical help, please do not use this form.</strong> If you are a customer, <a href="https://portal.nextcloud.com">use our support portal</a> and if not');?> <a href="<?php echo home_url('support') ?>"><?php echo $l->t('see here for support options.</a>');?></p>
            <p><?php echo $l->t('Support requests using this form <strong>will be ignored!</strong>');?></p>
        </div>
    </div>

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

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form name="contact" method="post" action="contactsubmit/">
            <div class="row">
                <div class="col-md-8">
                    <p><?php echo $l->t('<label for="yourname">Your name<br>
                    <input  type="text" name="yourname" maxlength="60" size="60"></label>');?></p>
                    <p><?php echo $l->t('<label for="email">Email<br>
                    <input  type="text" name="email" maxlength="80" size="60"></label>');?></p>
                    <p><?php echo $l->t('<label for="organization">Organization<br>
                    <input  type="text" name="organization" maxlength="100" size="60" placeholder=""></label>');?></p>
                    <p><?php echo $l->t('<label for="phone">Phone number<br>
                    <input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code (00 or +XX)"></label>');?></p>
                    <p><?php echo $l->t('<label for="comments">Your message<br />
                    <textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="Let us know how we can help you!"></textarea></label>');?></p>
                    <p><label for="captcha"><?php echo $l->t('Please calculate the following sum');?> <span></span><br>
                    <img src="data:image/png;base64,<?php echo base64_encode($imagestring); ?>"><br>
                    <input  type="text" name="captcha" maxlength="20" size="20" placeholder="13"></label></p>
                    <input  type="hidden" name="checksum" value="<?php echo $checksum;?>">
                    <td colspan="2" style="text-align:center">
                    <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                    <input type="submit" value=" Submit ">
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h2><?php echo $l->t('Visit us!');?></h2>
        <p><address>Nextcloud GmbH<br/>
        Hirschstrasse 26, 3rd Floor<br/>
        70173 Stuttgart Germany<br/></address>
        HRB 227086 (AG München)<br/>
        T +49 711 25 24 28 90<br/>
        </p>
    </div>
    <!--<h2><?php echo $l->t('Active contributors on the <a href="../news">Nextcloud blog roll</a>:');?></h2>-->
    <!-- <?php
    // if(CONTRIBOOK) {
    //
    // 	require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php');
    //
    // 	$users=CONTRIBOOK_USER::getusers();
    // 	echo('<table>');
    // 	foreach($users as $user) {
    // 		$data = CONTRIBOOK_USER::getuser($user);
    // 		echo('<tr><td style="padding:5px;">');
    // 		if(empty($data['picture_50'])) { $data['picture_50'] = 'blogger_50.png'; }
    //
    // 		echo('<span class="contribook_microbloguserpicture"><a href="<?php echo home_url('user/?user='.$user.'"><img src="'.CONTRIBOOK_PHOTO_URL.$data['picture_50'].'" border="0" /></a></span>');
    //
    // 		echo('');?></td><td style="padding:5px;">');
    //
    // 		echo('<a href="<?php echo home_url('user/?user='.$user.'">'.$data['name'].'</a><br />');
    // 		echo($data['role']);
    //
    // 		echo('');?></td></tr>');
    // 	}
    //
    // 	echo('</table>');
    //
    // }
    // ?>-->
    <!--Note that, unfortunately, most of our contributors have not (yet) set up a blog and and added themselves here. You can find a much more complete list of past and present Nextcloud contributors on <a href="https://github.com/orgs/nextcloud/people">github</a>, which is where we develop Nextcloud.

    If you want to be added to the blog roll, please ping the Nextcloud community manager on IRC (nick: jospoortvliet) or via <a href="https://plus.google.com/117563705675081959469">G+</a>, <a href="https://twitter.com/jospoortvliet">twitter</a> or <a href="https://pod.geraspora.de/u/jospoortvliet">diaspora</a>.-->

</div>
</section>
