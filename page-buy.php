<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/buy.css" rel="stylesheet">
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
<script>
	require(["require.config"], function() {
		require(["modules/submenu"])
	});
</script>
</head>
<section class="buy-hero-section second-menu">
	<div class="container-fluid background buy-background">
		<div class="container">
			<div class="row">
				<div class="col-md-6 topheader">
					<h1><?php echo $l->t('Contact us for a quote');?></h1>
					<h2><?php echo $l->t('Our sales team will help you determine the best solution for your business needs');?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a class="btn btn-primary" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('Order online');?></a>
			<a class="btn btn-primary" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
			<a class="btn btn-primary" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
		</div>
	</div>
</section>

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

<div class="container">
	<h2><?php echo $l->t('Nextcloud helps you be successful.');?></h2>
	<p><?php echo $l->t('You run your own Nextcloud server, keeping your data in-house and under control. We make sure it works.');?></p>
	<div class="contact">
		<h3><?php echo $l->t('Contact us for more information and a quote fitting your use case.');?></h3>
		<p><?php echo $l->t('Your answers to the following questions will help us better understand
your project.');?></p>
		<form name="sales" method="post" action="../salessubmit/">
				<p><label for="yourname"><?php echo $l->t('Your name');?><br>
				<input  type="text" name="yourname" maxlength="60" size="60"></label></p>
				<p><label for="email">Email<br>
				<input  type="text" name="email" maxlength="80" size="60"></label></p>
				<p><label for="organization"><?php echo $l->t('Organization<br>
				<input  type="text" name="organization" maxlength="100" size="60" placeholder="Name of your organization">');?></label></p>
				<p><label for="phone"><?php echo $l->t('Phone number<br>
				<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code">');?></label></p>
				<p><label for="users"><?php echo $l->t('Number of users over next 12 months (estimation)<br>
				<input  type="text" name="users" maxlength="80" size="60" placeholder="Our pricing starts at 50 users.">');?></label></p>
				<p><label for="SLA"><?php echo $l->t('What kind of response time do you require?<br>
				<textarea name="SLA" maxlength="120" cols="70" rows="2" placeholder="24/7, business hours, within 3 days, etc">');?></textarea></label></p>
				<div class="row">
                    <h3><?php echo $l->t('Your needs');?></h3>
                    <div class="col-md-6">
                        <p><label for="need-phone-support"><?php echo $l->t('Do you require phone support?');?><br>
                        <select name="need-phone-support">
                            <option value="unsure"><?php echo $l->t('Not sure');?></option>
                            <option value="yes"><?php echo $l->t('Yes');?></option>
                            <option value="no"><?php echo $l->t('No');?></option>
                        </select></label></p>
                        <p><label for="need-support-manager"><?php echo $l->t('Would you be interested in a dedicated Support Account Manager?');?><br>
                        <select name="need-support-manager">
                            <option value="unsure"><?php echo $l->t('Not sure');?></option>
                            <option value="yes"><?php echo $l->t('Yes');?></option>
                            <option value="no"><?php echo $l->t('No');?></option>
                        </select></label></p>
                        <p><label for="need-setup-help"><?php echo $l->t('Would you require assistance to set up the service or to design/review the architecture?');?><br>
                        <select name="need-setup-help">
                            <option value="unsure"><?php echo $l->t('Not sure');?></option>
                            <option value="yes"><?php echo $l->t('Yes');?></option>
                            <option value="no"><?php echo $l->t('No');?></option>
                        </select></label></p>
                        <p><label for="clustering"><?php echo $l->t('Are you using any sort of clustering for the application, database or storage?');?><br>
                        <select name="clustering">
                            <option value="unsure"><?php echo $l->t('Not sure');?></option>
                            <option value="yes"><?php echo $l->t('Yes');?></option>
                            <option value="no"><?php echo $l->t('No');?></option>
                        </select></label></p>
                    </div>
                    <div class="col-md-6">
                        <p><label for="collabora"><?php echo $l->t('Would you be interested in editing office documents online?');?><br>
                        <select name="collabora">
                            <option value="unsure"><?php echo $l->t('Not sure');?></option>
                            <option value="yes"><?php echo $l->t('Yes');?></option>
                            <option value="no"><?php echo $l->t('No');?></option>
                        </select></label></p>
                        <p><label for="webconferencing"><?php echo $l->t('Would you be interested in secure webconferencing and audio and video calls?');?><br>
                        <select name="webconferencing">
                            <option value="unsure"><?php echo $l->t('Not sure');?></option>
                            <option value="yes"><?php echo $l->t('Yes');?></option>
                            <option value="no"><?php echo $l->t('No');?></option>
                        </select></label></p>
                        <p><label for="outlook"><?php echo $l->t('Would you be interested in our Secure Sharing add-in for Outlook?');?><br>
                        <select name="outlook">
                            <option value="unsure"><?php echo $l->t('Not sure');?></option>
                            <option value="yes"><?php echo $l->t('Yes');?></option>
                            <option value="no"><?php echo $l->t('No');?></option>
                        </select></label></p>
                        <p><label for="branding"><?php echo $l->t('Would you be interested in branded clients?');?><br>
                        <select name="branding">
                            <option value="unsure"><?php echo $l->t('Not sure');?></option>
                            <option value="yes"><?php echo $l->t('Yes');?></option>
                            <option value="no"><?php echo $l->t('No');?></option>
                        </select></label></p>
                        <p><label for="LTS"><?php echo $l->t('Would you like to have the ability to stay on the exact same version of Nextcloud for several years?');?><br>
                        <input  type="text" name="LTS" maxlength="80" size="60" placeholder="<?php echo $l->t('If yes, how many years?');?>"></label></p>
                    </div>
                </div>
				<p><label for="comments"><?php echo $l->t('Your message');?><br />
				<textarea name="comments" maxlength="2000" cols="80" rows="8" placeholder="<?php echo $l->t('Let us know how we can help you!');?>"></textarea></label></p>
				<td colspan="2" style="text-align:center">
				<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
				<p><label for="captcha"><?php echo $l->t('Please calculate the following sum');?> <span></span><br>
				<img src="data:image/png;base64,<?php echo base64_encode($imagestring); ?>"><br>
				<input  type="text" name="captcha" maxlength="20" size="20" placeholder="13"></label></p>
				<input  type="hidden" name="checksum" value="<?php echo $checksum;?>">
				<input type="submit" value=" Submit inquiry " class="button button--blue">
		</form>
	</div>
</div>
