<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/providers.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
                <h1><?php echo $l->t('Nextcloud providers');?></h1>
            </div>
        </div>
    </div>
</div>


<section class="section--intro">
<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <p class="text-center"><?php echo $l->t('Host your private cloud at a provider you can trust!');?><p>
    </div>
</div>
</section>
<section class="section--content">
<div class="container">
<div class="row">
    <div class="col-md-10 col-md-offset-1">
<!--         <h2>Home or Enterprise</h2> -->
        <p class=""><?php echo $l->t('Private or small business users are usually best served by our Simple Signup providers, either with an account on a shared instance or a small, private Nextcloud setup. Larger teams and organizations find excellend services at one of our certified partners.');?></p>

    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2>Private use</h2>
        <p class=""><?php echo $l->t('For private users Nextcloud has worked with a number of quality hosting providers in our Simple Signup program. Through Simple Signup, they offer at least 2GB of free storage for a shared-hosting user account. Signing up is quick and easy and can be done from within our apps or our website.');?></p>
        <p class=""><?php echo $l->t('If you are looking for a virtual machine or another setup where you have more control over the installation, our simple signup providers offer a range of upgrade options for your account.');?></p>
        <a class="button button--blue" href="<?php echo home_url('signup') ?>"><?php echo $l->t('Sign up now!');?></a>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2>Enterprise</h2>
        <p class=""><?php echo $l->t('For use in small or large organizations, Nextcloud works with a number of qualified partners to offer reliable services for fully managed hosting, services for self-hosting or anything inbetween.');?></p>
        <p class=""><?php echo $l->t('Working with a Nextcloud partner gives you the confidence that you get the best services possible.');?></p>
        <a class="button button--blue" href="<?php echo home_url('partners') ?>"><?php echo $l->t('Choose a partner!');?></a>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2>Community hosting</h2>
        <p class=""><?php echo $l->t('Community providers who offer anything from a Virtual Machine with Nextcloud you have to manage to a fully handled Nextcloud account where you just have to log in, maintained by the provider. Some providers offer free tiers.');?></p>
        <p class=""><?php echo $l->t('Please note that we have no formal relationship with any of these providers and take no responsibility for their services or quality. If you want to be sure to get quality service with the backing of Nextcloud engineers,');?> <a class="hyperlink" href="<?php echo home_url('contact') ?>"><?php echo $l->t('get in contact with us</a>');?> <a class="hyperlink" href="<?php echo home_url('partners') ?>"><?php echo $l->t('or one of our partners.</a>');?></p>
        <a class="button button--blue" href="https://github.com/nextcloud/providers#providers" target="_blank"><?php echo $l->t('Find them on');?> GitHub</a>
    </div>
</div>
</section>
