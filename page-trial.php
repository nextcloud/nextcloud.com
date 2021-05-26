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
                <h1><?php echo $l->t('Request an enterprise trial');?></h1>
            </div>
        </div>
    </div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
            <a class="button button--blue" href="<?php echo home_url('faq') ?>"><?php echo $l->t('FAQ');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('Order online');?></a>
			<a class="button button--blue" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
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
                <a class="button button--white button--small" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="section--welcome">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $l->t('See how Nextcloud works for you');?></h2>
            <p><?php echo $l->t('To determine if Nextcloud is fit for your use case, we offer trials of Nextcloud Enterprise on a hosted instance as well as trial licenses for testing on your own infrastructure. Our team is ready to support you with a Proof of Concept for free¹.');?></p>
            <p><?php echo $l->t('Our Nextcloud Enterprise build is pre-configured, optimized and hardened for the special needs of large scale, production-critical enterprise deployments. Backed by our subscription and support, it provides you with the best possible Nextcloud experience.');?></p>
        </div>
	</div>
</div>
</section>-->
<section class="section--contact-form">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <p><?php echo $l->t('Please answer the questions below so we can best help you with a realistic setup.');?> <?php echo $l->t('Mandatory questions are marked with a *');?></p>
        </div>
	</div>
    <form name="trial" method="post" action="../trialsubmit/">
        <div class="row">
            <div class="col-md-12">
                <p><label for="yourname"><?php echo $l->t('Your name');?>*<br>
                <input  type="text" name="yourname" maxlength="60" size="60"></label></p>
                <p><label for="email">Business email*<br>
                <input  type="text" name="email" maxlength="80" size="60"></label></p>
                <p><label for="organization"><?php echo $l->t('Organization');?>*<br>
                <input  type="text" name="organization" maxlength="100" size="60" placeholder="<?php echo $l->t('Name of your organization');?>"></label></p>
                <p><label for="country"><?php echo $l->t('Country');?>*<br>
                <input  type="text" name="country" maxlength="100" size="60" placeholder="<?php echo $l->t('Country your company is headquartered in');?>"></label></p>
                <p><label for="orgsize"><?php echo $l->t('Size of organization');?>*<br>
                <select id="orgsize" name="orgsize">
                    <option value="under-20">under 20 employees</option>
                    <option value="20to49">20-49 employees</option>
                    <option value="50to199">50-199 employees</option>
                    <option value="200-999">200-999 employees</option>
                    <option value="999-99999">1000-9.999 employees</option>
                    <option value="over100000">over 10.000 employees</option>
                </select></p>
                <p><label for="role"><?php echo $l->t('Your role');?><br>
                <input  type="text" name="role" maxlength="100" size="60" placeholder="<?php echo $l->t('Your job title');?>"></label></p>
                <p><label for="phone"><?php echo $l->t('Phone number');?><br>
                <input  type="text" name="phone" maxlength="40" size="60" placeholder="<?php echo $l->t('Please include country code (00 or +XX)');?>"></label></p>
                <p><label for="users"><?php echo $l->t('Number of users over next 12 months (estimation)');?>*<br>
                <input  type="text" name="users" maxlength="80" size="60" placeholder="<?php echo $l->t('Our trial license will cover that number of users.');?>"></label></p>
                <p><label for="hosted-or-onprem"><?php echo $l->t('Would you like a hosted trial or a license for your own on-premises Nextcloud Enterprise setup?');?><br /> <small><?php echo $l->t("Note that you will be able to connect your organizations' LDAP and storage to the hosted trial, if you like.");?></small><br>
                <select name="hosted-or-onprem">
                    <option value="hosted"><?php echo $l->t('Hosted');?></option>
                    <option value="onpremises"><?php echo $l->t('On-premises');?></option>
                </select></label></p>
                <p><label for="partnertype"><?php echo $l->t('When you go in production, are you looking for a hosted solution, on-premises with in-house management, or on-premises but managed by a Nextcloud partner?');?><br>
                <select name="partnertype">
                    <option value="hosted"><?php echo $l->t('Hosted');?></option>
                    <option value="onpremises"><?php echo $l->t('On-premises (self-managed)');?></option>
                    <option value="onpremmanaged"><?php echo $l->t('On-premises, managed by Nextcloud partner');?></option>
                    <option value="unsure"><?php echo $l->t('Not sure yet');?></option>
                </select></label></p>

                <p><label for="need-setup-help"><?php echo $l->t('Would you require assistance to set up the service or to design/review the architecture?');?><br>
                <select name="need-setup-help">
                    <option value="unsure"><?php echo $l->t('Not sure');?></option>
                    <option value="yes"><?php echo $l->t('Yes');?></option>
                    <option value="no"><?php echo $l->t('No');?></option>
                </select></label></p>
                <p><?php echo $l->t('Our sales engineers will also be available to help you set things up and test, if there is any such need.');?><br /><?php echo $l->t(' A more extensive proof-of-concept with our help is of course also possible, just let us know!');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3><?php echo $l->t('Your needs');?></h3>
                <p><?php echo $l->t('Below you can optionally indicate additional services you would like to test. We will include test versions or licenses of these.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p><label for="clustering"><?php echo $l->t('Are you or do you think you will be using any sort of clustering for the application, database or storage?');?><br>
                <select name="clustering">
                    <option value="unsure"><?php echo $l->t('Not sure');?></option>
                    <option value="yes"><?php echo $l->t('Yes');?></option>
                    <option value="no"><?php echo $l->t('No');?></option>
                </select></label></p>
                <p><label for="collabora"><?php echo $l->t('Would you be interested in editing office documents online?');?><br>
                <select name="collabora">
                    <option value="unsure"><?php echo $l->t('Not sure');?></option>
                    <option value="yes"><?php echo $l->t('Yes');?></option>
                    <option value="no"><?php echo $l->t('No');?></option>
                </select></label></p>
            </div>
            <div class="col-md-6">
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
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p><label for="comments"><?php echo $l->t('Any more details, questions or information?');?><br />
                <textarea name="comments" maxlength="2000" cols="80" rows="8" placeholder="<?php echo $l->t('Let us know how we can help you!');?>"></textarea></label></p>
                <p>
                    <label for="partner"><?php echo $l->t('Can we allow one of our certified local partners reach out to you with an offer if we feel they can service you more appropriately?');?>*<br />
                    <strong><?php echo $l->t('Note:');?></strong> <?php echo $l->t('Organizations with less than 100 users will receive an trial setup from one of our partners and choosing No here means we can not help you.');?><br />
                    <select name="partner">
                        <option value="yes"><?php echo $l->t('Yes');?></option>
                        <option value="no"><?php echo $l->t('No');?></option>
                    </select></label><br />
                    <a href="<?php echo home_url('partners') ?>" class="hyperlink"><?php echo $l->t('See a list of our partners here.');?></a>
                </p>
                <p><input type="checkbox" id="gdprcheck" name="gdprcheck" value="gdprchecked"><label for="gdprcheck"> <?php echo $l->t('I agree with the Nextcloud privacy policy and understand my data will be processed so Nextcloud can reach out to me.');?>*<br /></p>
                <input type="submit" value=" Submit inquiry " class="button button--blue">
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <p><?php echo $l->t('We respect your privacy! If you fill in this form, we will reach out to send you an offer and might also contact you with relevant information like a local event or workshop we are organizing. We never sell your data - any mails you get will be from us, or, if you agreed to be brought in contact with them, one of our Nextcloud service partners.');?> <a href="<?php echo home_url('privacy') ?>" class="hyperlink"><?php echo $l->t('See our privacy policy here.');?></a></p>
            <p><?php echo $l->t('¹ At the discretion of Nextcloud GmbH. A typical POC is supported at no cost by our sales engineers.');?></p>
        </div>
    </div>
</div>
</section>
