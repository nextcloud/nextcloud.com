<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/form.css?v=2" rel="stylesheet">

</head>
<section class="background generic-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Contact us');?></h1>
            </div>
        </div>
    </div>
</section>

<section class="section--contact-form">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p><?php echo $l->t('If you have any general questions or comments, complete the form below and we\'ll get back to you!');?></p>
            <p><?php echo $l->t('We usually reply within two weeks. For a faster reply, use one of the specific forms below.');?></p>
            <ul>
                <li><strong><?php echo $l->t('Technical questions or support');?>.</strong> <a class="hyperlink" href="<?php echo home_url('support') ?>"><?php echo $l->t('Check out the options on our support page.');?></a> <br /><?php echo $l->t('Support requests through the contact form will not get any response.');?>
                <li><strong><?php echo $l->t('Test out Nextcloud Enterprise or get a quote');?>.</strong> <a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('Request a quote here');?></a> <?php echo $l->t('or') ?> <a class="hyperlink" href="<?php echo home_url('trial') ?>"><?php echo $l->t('request a trial of Nextcloud Enterprise here.');?></a></li>
                <li><strong><?php echo $l->t('Become a Nextcloud partner');?>.</strong> <a class="hyperlink" href="<?php echo home_url('partnerprogram') ?>"><?php echo $l->t('See the form here.');?></a></li>
                <li><strong><?php echo $l->t('Issues with your Nextcloud account');?>.</strong> <?php echo $l->t('Please contact the provider where you signed up. Nextcloud does no hosting and does not know where you host your data, so we can not help you.');?></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <h2><?php echo $l->t('Contact form');?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <form name="contact" method="post" action="contactsubmit/">
                <div class="row">
                    <div class="col-lg-4">
                        <p><label for="yourname"><?php echo $l->t('Your name');?></label></p>
                    </div>
                    <div class="col-lg-7">
                        <input  type="text" name="yourname" maxlength="60" size="60" placeholder="<?php echo $l->t('Your name');?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <p><label for="email">Email</label></p>
                    </div>
                    <div class="col-lg-7">
                        <input  type="text" name="email" maxlength="80" size="60" placeholder="<?php echo $l->t('Your email');?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <br /> <span> </span>
                    </div>
                    <div class="col-lg-7">
                   <?php echo $l->t('If your question is business-related:');?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <p><label for="organization"><?php echo $l->t('Organization');?></label></p>
                    </div>
                    <div class="col-lg-7">
                        <input  type="text" name="organization" maxlength="100" size="60" placeholder="<?php echo $l->t('Name of your organization');?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <p><label for="phone"><?php echo $l->t('Phone number');?></label></p>
                    </div>
                    <div class="col-lg-7">
                        <input  type="text" name="phone" maxlength="40" size="60" placeholder="<?php echo $l->t('Please include country code (00 or +XX)');?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="foundnextcloud"><?php echo $l->t('How did you learn about Nextcloud?');?></label>
                    </div>
                    <div class="col-lg-7">
                        <select id="foundnextcloud" name="foundnextcloud">
                            <option value="empty"><?php echo $l->t('Rather not say');?></option>
                            <option value="search"><?php echo $l->t('Search engine');?></option>
                            <option value="news"><?php echo $l->t('In the news');?></option>
                            <option value="recommendation"><?php echo $l->t('It was recommended to me');?></option>
                            <option value="usemyself"><?php echo $l->t('I use it privately');?></option>
                            <option value="advert"><?php echo $l->t('I saw it in an advertisement');?></option>
                            <option value="other"><?php echo $l->t('other');?></option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <p><label for="comments"><?php echo $l->t('Your message');?></label></p>
                    </div>
                    <div class="col-lg-7">
                        <textarea  name="comments" maxlength="2000" cols="60" rows="8" placeholder="<?php echo $l->t('Let us know how we can help you!');?>"></textarea>
                        <strong><?php echo $l->t('Reminder: support questions through this form will get ignored.');?></strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <br /> <span> </span>
                    </div>
                    <div class="col-lg-7">
                        <p><input type="checkbox" id="gdprcheck" name="gdprcheck" value="gdprchecked"><label for="gdprcheck"> <?php echo $l->t('I agree with the Nextcloud privacy policy and understand my data will be processed so Nextcloud can reach out to me.');?> <br /><a class="hyperlink" href="<?php echo home_url('privacy') ?>" class="hyperlink"><?php echo $l->t('See our privacy policy here.');?></a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <br /> <span> </span>
                    </div>
                    <div class="col-lg-7">
                    <input class="button button--blue" type="submit" value=" Submit ">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="section--address">
<div class="container">
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
