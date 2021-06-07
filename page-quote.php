<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/form.css?v=2" rel="stylesheet">
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
            <p><?php echo $l->t('Your answers to the following questions will help us better understand your project and give a realistic quote.');?></p>
        </div>
	</div>
	<form name="sales" method="post" action="../quotesubmit/">
        <div class="row">
            <div class="col-lg-4">
				<p><label for="yourname"><?php echo $l->t('Your name');?></label>
            </div>
            <div class="col-lg-7">
                <input  type="text" name="yourname" maxlength="60" size="60">
            </div>
        </div>
        <div class="row">
             <div class="col-lg-4">
                <p><label for="email">Corporate email</label>
            </div>
            <div class="col-lg-7">
                <input  type="text" name="email" maxlength="80" size="60">
            </div>
        </div>
        <div class="row">
             <div class="col-lg-4">
                <p><label for="organization"><?php echo $l->t('Organization');?></label>
            </div>
            <div class="col-lg-7">
                <input  type="text" name="organization" maxlength="100" size="60" placeholder="<?php echo $l->t('Name of your organization');?>">
            </div>
        </div>
        <div class="row">
             <div class="col-lg-4">
                <p><label for="phone"><?php echo $l->t('Phone number');?></label>
            </div>
            <div class="col-lg-7">
                <input  type="text" name="phone" maxlength="40" size="60" placeholder="<?php echo $l->t('Please include country code (00 or +XX)');?>">
            </div>
        </div>
        <div class="row">
             <div class="col-lg-4">
                <p><label for="users"><?php echo $l->t('Estimated # of users over next 12 months');?></label>
            </div>
            <div class="col-lg-7">
                <textarea  type="text" name="users" maxlength="80" cols="40" rows="2" placeholder="<?php echo $l->t('Under 100 users we might recommend one of our qualified partners.');?>"></textarea>
            </div>
        </div>
        <div class="row">
             <div class="col-lg-4">
                <p><label for="SLA"><?php echo $l->t('What kind of response time do you require?');?></label>
            </div>
            <div class="col-lg-7">
				<textarea name="SLA" maxlength="120" cols="40" rows="2" placeholder="<?php echo $l->t('24/7, business hours, within 3 days, etc');?>"></textarea>
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
            <div class="col-md-12">
                    <h3><?php echo $l->t('Your needs');?></h3>
             </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p><label for="need-setup-help"><?php echo $l->t('Would you require assistance to set up the service or to design/review the architecture?');?></label><br />
                <select name="need-setup-help">
                    <option value="unsure"><?php echo $l->t('Not sure');?></option>
                    <option value="yes"><?php echo $l->t('Yes');?></option>
                    <option value="no"><?php echo $l->t('No');?></option>
                </select></p>
                <p><label for="collabora"><?php echo $l->t('Would you need online document collaboration?');?></label><br /><small><?php echo $l->t('Options:');?> <a class="hyperlink" href="<?php echo home_url('collabora') ?>">Collabora Online</a>, <a class="hyperlink" href="<?php echo home_url('onlyoffice') ?>">OnlyOffice</a>, <a class="hyperlink" href="https://nextcloud.com/blog/live-demo-of-hancom-works-now-available/">Hancom Office</a>, <a class="hyperlink" href="https://nextcloud.com/blog/ms-office-online-server-as-document-editor-in-nextcloud/">Microsoft Office Online Server</a>.</small><br />
                <select name="collabora">
                    <option value="unsure"><?php echo $l->t('Not sure');?></option>
                    <option value="Collabora"><?php echo $l->t('Collabora Online');?></option>
                    <option value="OnlyOffice"><?php echo $l->t('OnlyOffice');?></option>
                    <option value="Hancom"><?php echo $l->t('Hancom Office');?></option>
                    <option value="Microsoft"><?php echo $l->t('Microsoft Office Online Server');?></option>
                    <option value="no"><?php echo $l->t('No');?></option>
                </select></p>
            </div>
            <div class="col-md-6">
                <p><label for="webconferencing"><?php echo $l->t('Would you need integrated, secure audio/video chat and web conferencing?');?></a><br /><small><a class="hyperlink" href="<?php echo home_url('talk') ?>"><?php echo $l->t('Learn more about Nextcloud Talk');?></a></small></label><br />
                <select name="webconferencing">
                    <option value="unsure"><?php echo $l->t('Not sure');?></option>
                    <option value="yes"><?php echo $l->t('Yes');?></option>
                    <option value="no"><?php echo $l->t('No');?></option>
                </select></p>
                <p><label for="outlook"><?php echo $l->t('Would you need our Outlook integration?');?></a></label><small><a class="hyperlink" href="<?php echo home_url('outlook') ?>"><br /><?php echo $l->t('Learn more');?></a></small><br />
                <select name="outlook">
                    <option value="unsure"><?php echo $l->t('Not sure');?></option>
                    <option value="yes"><?php echo $l->t('Yes');?></option>
                    <option value="no"><?php echo $l->t('No');?></option>
                </select></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
				<p><label for="comments"><?php echo $l->t('Your message');?>*<br />
				<textarea name="comments" maxlength="2000" cols="80" rows="8" placeholder="<?php echo $l->t('Let us know about any other specific wishes you might have!');?>"></textarea></label></p>
				<p><input type="checkbox" id="gdprcheck" name="gdprcheck" value="gdprchecked"><label for="gdprcheck"> <?php echo $l->t('I agree with the Nextcloud privacy policy and understand my data will be processed so Nextcloud or its partners can reach out to me.');?><br /></p>
                <?php require_once realpath(dirname(__FILE__)) . '/lib/captcha.php'; ?>
                <p><label for="captcha"><?php echo $l->t('Please enter the following captcha');?></label> <span></span><br>
                <img src="data:image/png;base64,<?php echo base64_encode(GetCaptcha()); ?>" /></p>
                <p><input  type="text" name="captcha" maxlength="20" size="20" placeholder="eXaMpLe15"></p>
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
