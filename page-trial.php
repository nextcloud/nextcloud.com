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
        <div class="col-lg-7">
            <p><?php echo $l->t('Please answer the questions below so we can best help you with a realistic setup.');?> <?php echo $l->t('Mandatory questions are marked with a *');?></p>
        </div>
	</div>
    <form name="trial" method="post" action="../trialsubmit/">
        <div class="row">
            <div class="col-lg-4">
                <label for="yourname"><?php echo $l->t('Your name');?>*</label>
            </div>
            <div class="col-lg-7">
                <input  type="text" name="yourname" maxlength="60" size="60" placeholder="<?php echo $l->t('Your name');?>">
            </div>
        </div>
        <div class="row">
             <div class="col-lg-4">
                <label for="email">Business email*</label>
            </div>
            <div class="col-lg-7">
                <input   type="text" name="email" maxlength="80" size="60" placeholder="<?php echo $l->t('Business email');?>">
            </div>
        </div>
        <div class="row">
             <div class="col-lg-4">
                <label for="orgsize"><?php echo $l->t('Size of organization');?>*</label>
            </div>
            <div class="col-lg-7">
                <select id="orgsize" name="orgsize">
                    <option value="under-20">under 20 employees</option>
                    <option value="20to49">20-49 employees</option>
                    <option value="50to199">50-199 employees</option>
                    <option value="200-999">200-999 employees</option>
                    <option value="999-99999">1000-9.999 employees</option>
                    <option value="over100000">over 10.000 employees</option>
                </select>
            </div>
        </div>
        <div class="row">
             <div class="col-lg-4">
                <label for="phone"><?php echo $l->t('Phone number');?>
            </div>
            <div class="col-lg-7">
                <input   type="text" name="phone" maxlength="40" size="60" placeholder="<?php echo $l->t('Please include country code (00 or +XX)');?>">
            </div>
        </div>
        <div class="row">
             <div class="col-lg-4">
                <label for="foundnextcloud"><?php echo $l->t('How did you learn about Nextcloud?');?></label>
            </div>
            <div class="col-lg-7">
                <select id="foundnextcloud" name="foundnextcloud">
                    <option value="search">Search engine</option>
                    <option value="news">In the news</option>
                    <option value="recommendation">It was recommended to me</option>
                    <option value="usemyself">I use it privately</option>
                    <option value="advert">I saw it in an advertisement</option>
                    <option value="other">other</option>
                </select>
            </div>
        </div>
        <div class="row">
             <div class="col-lg-4">
                <label for="hosted-or-onprem"><?php echo $l->t('Would you like a hosted trial or a license for an on-premises Nextcloud Enterprise setup?');?><br /></label>
            </div>
            <div class="col-lg-7">
                <select name="hosted-or-onprem">
                    <option value="hosted"><?php echo $l->t('Hosted');?></option>
                    <option value="onpremises"><?php echo $l->t('On-premises');?></option>
                </select><br />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <p><label for="comments"><?php echo $l->t('Any more details, questions or information?');?></label>
            </div>
            <div class="col-lg-7">
                <textarea name="comments" maxlength="2000" cols="60" rows="8" placeholder="<?php echo $l->t('Let us know how we can help you!');?>"></textarea>
            </div>
        </div>
        <div class="row">
             <div class="col-lg-12">
                    <label for="partner"><?php echo $l->t('Can we share your contact data with a certified local partners to reach out to you with an offer?');?>
                    <a href="<?php echo home_url('partners') ?>" class="hyperlink"><?php echo $l->t('See a list of our partners here.');?></a></small></label><br />
                    <select name="partner">
                        <option value="yes"><?php echo $l->t('Yes');?></option>
                        <option value="no"><?php echo $l->t('No');?></option>
                    </select><br />
                <input type="checkbox" id="gdprcheck" name="gdprcheck" value="gdprchecked"><label for="gdprcheck"> <?php echo $l->t('I agree with the Nextcloud privacy policy and understand my data will be processed so Nextcloud can reach out to me.');?>*</label><br /></p>
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
