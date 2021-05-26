<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/form.css?v=1" rel="stylesheet">
<script>
	require(["require.config"], function() {
		require(["modules/submenu"])
	});
</script>
</head>
<section class="background generic-background second-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Contact us for a quote');?></h1>
            </div>
        </div>
    </div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
            <a class="button button--blue" href="<?php echo home_url('faq') ?>"><?php echo $l->t('FAQ');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('Order online');?></a>
			<a class="button button--blue" href="<?php echo home_url('trial') ?>"><?php echo $l->t('Start a trial');?></a>
			<a class="button button--blue" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
		</div>
	</div>
</section>

<section class="section--links">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                <a class="button button--white button--small" href="<?php echo home_url('faq') ?>"><?php echo $l->t('FAQ');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('Order online');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('trial') ?>"><?php echo $l->t('Start a trial');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--contact-form">
<div class="container">
    <div class="row">
        <div class="col-md-12">
		<h3><?php echo $l->t('Contact us for more information and a quote fitting your use case.');?></h3>
		<p><?php echo $l->t('Your answers to the following questions will help us better understand your project and give a realistic quote.');?><br /> <?php echo $l->t('Mandatory questions are marked with a *');?></p>
        </div>
	</div>
	<form name="sales" method="post" action="../salessubmit/">
        <div class="row">
            <div class="col-md-12">
				<p><label for="yourname"><?php echo $l->t('Your name');?>*<br>
				<input  type="text" name="yourname" maxlength="60" size="60"></label></p>
				<p><label for="email">Corporate email*<br>
				<input  type="text" name="email" maxlength="80" size="60"></label></p>
				<p><label for="organization"><?php echo $l->t('Organization');?>*<br>
				<input  type="text" name="organization" maxlength="100" size="60" placeholder="<?php echo $l->t('Name of your organization');?>"></label></p>
				<p><label for="role"><?php echo $l->t('Your role');?>*<br>
				<input  type="text" name="role" maxlength="100" size="60" placeholder="<?php echo $l->t('Your job title');?>"></label></p>
				<p><label for="phone"><?php echo $l->t('Phone number');?>*<br>
				<input  type="text" name="phone" maxlength="40" size="60" placeholder="<?php echo $l->t('Please include country code (00 or +XX)');?>"></label></p>
				<p><label for="users"><?php echo $l->t('Number of users over next 12 months (estimation)');?>*<br>
				<input  type="text" name="users" maxlength="80" size="60" placeholder="<?php echo $l->t('Under 50 users we might recommend one of our qualified partners.');?>"></label></p>
				<p><label for="SLA"><?php echo $l->t('What kind of response time do you require?');?><br>
				<textarea name="SLA" maxlength="120" cols="70" rows="2" placeholder="<?php echo $l->t('24/7, business hours, within 3 days, etc');?>"></textarea></label></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                    <h3><?php echo $l->t('Your needs');?></h3>
             </div>
        </div>
        <div class="row">
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
                <p><label for="partner"><?php echo $l->t('Can we allow one of our certified local partners reach out to you with an offer if we feel they can service you more appropriately?');?>* <br />
                <select name="partner">
                    <option value="yes"><?php echo $l->t('Yes');?></option>
                    <option value="no"><?php echo $l->t('No');?></option>
                </select></label><br />
                <a href="<?php echo home_url('partners') ?>" class="hyperlink"><?php echo $l->t('See a list of our partners here.');?></a>
                </p>
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
        <div class="row">
            <div class="col-md-12">
				<p><label for="comments"><?php echo $l->t('Your message');?>*<br />
				<textarea name="comments" maxlength="2000" cols="80" rows="8" placeholder="<?php echo $l->t('Let us know how we can help you!');?>"></textarea></label></p>
				<p><input type="checkbox" id="gdprcheck" name="gdprcheck" value="gdprchecked"><label for="gdprcheck"> <?php echo $l->t('I agree with the Nextcloud privacy policy and understand my data will be processed so Nextcloud can reach out to me.');?>*<br /></p>
				<input type="submit" value=" Submit inquiry " class="button button--blue">
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <p><?php echo $l->t('We respect your privacy! If you fill in this form, we will reach out to send you an offer and might also contact you with relevant information like a local event or workshop we are organizing. We never sell your data - any mails you get will be from us, or, if you agreed to be brought in contact with them, one of our Nextcloud service partners.');?> <a href="<?php echo home_url('privacy') ?>" class="hyperlink"><?php echo $l->t('See our privacy policy here.');?></a></p>
        </div>
    </div>
</div>
</section>
