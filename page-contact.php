<!--<?php get_template_part('templates/parts/title'); ?>-->
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<h1><?php echo $l->t('Need help?');?></h1>
		<p><?php echo $l->t('If you have technical questions or need support,');?> <a href="<?php echo home_url('support') ?>"><?php echo $l->t('check out the options on our support page.</a>');?>
		<h2><?php echo $l->t('Talk to us online!');?></h2>
		<p><?php echo $l->t('Most of our contributors are active in <a href="irc://#nextcloud-dev@freenode.net" target="_blank">the Nextcloud development IRC channel</a> on freenode.net, also accessible via <a href="https://webchat.freenode.net/?channels=nextcloud-dev" target="_blank">webchat</a>. We are also very active <a href="https://help.nextcloud.com" target="_blank">on our forums</a>.');?> <a href="<?php echo home_url('contribute') ?>"><?php echo $l->t('Get involved!!</a>');?></p>
		</div>
	<div class="col-md-6 col-md-offset-3">
		<h1><?php echo $l->t('Contact us');?></h1>
		<p><?php echo $l->t('If you have any questions or comments on the website or have a business question, complete the form below and we\'ll get back to you!<br/><strong>If you need technical help, please do not use this form.</strong> If you are a customer, <a href="https://portal.nextcloud.com">use our support portal</a> and if not');?> <a href="<?php echo home_url('support') ?>"><?php echo $l->t('see here for support options.</a>');?></p>
		<p><?php echo $l->t('Support requests using this form <strong>will be ignored!</strong>');?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
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
				<td colspan="2" style="text-align:center">
				<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
				<input type="submit" value=" Submit ">
			</div>
		</div>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<h2><?php echo $l->t('Visit us!');?></h2>
	<p><strong>Nextcloud GmbH</strong><br/>
    Hauptmannsreute 44A<br/>
    70192 Stuttgart Germany<br/>
    HRB 227086 (AG München)<br/>
    T +49 711 25 24 28 90<br/>
    </p>
    <p>
    <strong><?php echo $l->t('Visitor address:');?></strong><br/>
    Nextcloud GmbH<br/>
    Rotebuehlplatz 20A<br/>
    70173 Stuttgart Germany<br/>
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
