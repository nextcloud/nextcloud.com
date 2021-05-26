<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css?v=1" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
                <h1>Have a question?</h1>
            </div>
        </div>
    </div>
</div>

<section class="section--welcome">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p><?php echo $l->t('If you have technical questions or need support,');?> <a class="hyperlink" href="<?php echo home_url('support') ?>"><?php echo $l->t('check out the options on our support page.</a>');?>
            <p><?php echo $l->t('As a home user, best use our forums for questions.');?> <a class="hyperlink" href="https://help.nextcloud.com" target="_blank"><?php echo $l->t('Find our forums here.');?></a></p>
            <p><?php echo $l->t('If you have questions about what Nextcloud can do for you,');?> <a class="hyperlink" href="<?php echo home_url('search') ?>" target="_blank"><?php echo $l->t('search our website.');?></a></p>
            </div>
        <div class="col-md-8 col-md-offset-2">
            <h1><?php echo $l->t('Contact us');?></h1>
            <p><?php echo $l->t('If you have any questions or comments on the website or have a business question, complete the form below and we\'ll get back to you!<br/><strong>If you need technical help, please do not use this form.</strong> If you are a customer, <a href="https://portal.nextcloud.com">use our support portal</a> and if not');?> <a class="hyperlink" href="<?php echo home_url('support') ?>"><?php echo $l->t('see here for support options.');?></a></p>
            <p><?php echo $l->t('Support requests using this form <strong>will be ignored!</strong>');?></p>
            <p><?php echo $l->t('If you want to test out Nextcloud Enterprise or get a quote for use in your organization, use the quote form for a quicker response.');?>  <a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('Find the quote form here,');?></a> <a class="hyperlink" href="<?php echo home_url('trial') ?>"><?php echo $l->t('or ask directly for a trial of Nextcloud Enterprise here.');?></a> <?php echo $l->t('If you want to become a partner,');?> <a class="hyperlink" href="<?php echo home_url('partnerprogram') ?>"><?php echo $l->t('see here.');?></a></p>
            <p><?php echo $l->t('If you have a question related to an user account signed through <strong>Simple Signup</strong>, please contact the provider where you signed up. Nextcloud has NO information from you, not even what provider you are with, so there is nothing we can do to help you.');?></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form name="contact" method="post" action="contactsubmit/">
            <div class="row">
                <div class="col-md-8">
                <?php echo $l->t('* mandatory question');?>
                    <p><label for="yourname"><?php echo $l->t('Your name');?>*<br>
                    <input  type="text" name="yourname" maxlength="60" size="60"></label></p>
                    <p><label for="email">Email*<br>
                    <input  type="text" name="email" maxlength="80" size="60"></label></p>
                    <p><label for="organization"><?php echo $l->t('Organization');?>*<br>
                    <input  type="text" name="organization" maxlength="100" size="60" placeholder="<?php echo $l->t('Name of your organization');?>"></label></p>
                    <p><label for="role"><?php echo $l->t('Your role');?>*<br>
                    <input  type="text" name="role" maxlength="100" size="60" placeholder="<?php echo $l->t('Your job title');?>"></label></p>
                    <p><label for="phone"><?php echo $l->t('Phone number');?>*<br>
                    <input  type="text" name="phone" maxlength="40" size="60" placeholder="<?php echo $l->t('Please include country code (00 or +XX)');?>"></label></p>
                    <p><label for="comments"><?php echo $l->t('Your message');?>*<br />
                    <textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="<?php echo $l->t('Let us know how we can help you!');?>"></textarea></label></p>
                    <p><input type="checkbox" id="gdprcheck" name="gdprcheck" value="gdprchecked"><label for="gdprcheck"> <?php echo $l->t('I agree with the Nextcloud privacy policy and understand my data will be processed so Nextcloud can reach out to me.');?>*<br /></p>
                    <input type="submit" value=" Submit ">
                </div>
            </div>
            </form>
            <p><?php echo $l->t('We respect your privacy! If you fill in this form, we will reach out to send you a reply. We never sell your data - any mails you get will be from us.');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>" class="hyperlink"><?php echo $l->t('See our privacy policy here.');?></a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h2><?php echo $l->t('Visit us!');?></h2>
        <h3>Office Stuttgart</h3>
        <p><address>Nextcloud GmbH<br/>
        Hirschstrasse 26, 4th Floor<br/>
        70173 Stuttgart Germany</address></p>
        <h3>Office Berlin</h3>
        <p><address>Nextcloud GmbH<br/>
        Gerichtstraße 23<br/>
        13347 Berlin</address></p>
        <h3>Company registration</h3>
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
    // 		echo('<span class="contribook_microbloguserpicture"><a class="hyperlink" href="<?php echo home_url('user/?user='.$user.'"><img src="'.CONTRIBOOK_PHOTO_URL.$data['picture_50'].'" border="0" /></a></span>');
    //
    // 		echo('');?></td><td style="padding:5px;">');
    //
    // 		echo('<a class="hyperlink" href="<?php echo home_url('user/?user='.$user.'">'.$data['name'].'</a><br />');
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
