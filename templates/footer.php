<?php

// The basic translation for the files
$l = new L10N('footer');

?>
<style>
.hide {
    display: none !important;
}
</style>
<div class="alert alert--no-js" id="no-js">
  <div class="container" style="display: inherit">
		<?php echo file_get_contents(get_template_directory_uri()."/assets/img/warning.svg"); ?>
    <p style="display: inherit"><strong><?php echo $l->t('You have javascript disabled.'); ?></strong> <?php echo $l->t('We tried to make sure the basics of our website work but some functionality will be missing.'); ?></p>
  </div>
</div>

<script>
    window.onload = (function(){
        // let's hope ONE of these removes the javascript warning.

        // first attempt, just adding the 'hide' class to make it display: none
        if(document.getElementById("no-js")) {
            var d = document.getElementById("no-js");
            d.className += " hide";
        }

        // second attempt, let's just remove the entire thing. If it doesn't work... hope the first attempt did work. Note, IE does not support the remove method
        if(document.querySelector("alert--no-js"))
            document.body.removeChild(document.querySelector("alert--no-js"));

    })();
</script>

<div class="cookiewarning" id="cookieConsent">
    <div class="container">
        <div class="text-center">
            <?php echo $l->t('This website is using cookies. By visiting you agree with our'); ?> <a href="<?php echo home_url('privacy'); ?>" target="_blank"><?php echo $l->t('privacy policy.'); ?></a> <a class="cookieConsentOK"><?php echo $l->t('That\'s Fine'); ?></a>
        </div>
    </div>
</div>

<footer class="page-footer">
    <div class="container">
        <div class="col-sm-3">
            <h1><?php echo $l->t('About Nextcloud'); ?></h1>
            <ul>
                <li><a href="<?php echo home_url('about'); ?>"><?php echo $l->t('About us'); ?></a></li>
<!--                 <li><a href="<?php echo home_url('contributors'); ?>"><?php echo $l->t('Community'); ?></a></li> --><!-- broken atm -->
                <li><a href="<?php echo home_url('events'); ?>"><?php echo $l->t('Events'); ?></a></li>
                <li><a href="<?php echo home_url('jobs'); ?>"><?php echo $l->t('Jobs'); ?></a></li>
                <li><a href="<?php echo home_url('/community/code-of-conduct/'); ?>"><?php echo $l->t('Code of Conduct'); ?></a></li>
                <li><a href="<?php echo home_url('privacy'); ?>"><?php echo $l->t('Privacy'); ?></a></li>
                <li><a href="<?php echo home_url('impressum'); ?>"><?php echo $l->t('Legal notice'); ?></a></li>
            </ul>
        </div>
        <div class="col-sm-3">
            <h1 ><?php echo $l->t('Resources'); ?></h1>
            <ul>
                <li><a href="<?php echo home_url('search'); ?>"><?php echo $l->t('Search our website'); ?></a></li>
                <li><a href="<?php echo home_url('install'); ?>"><?php echo $l->t('Download'); ?></a></li>
                <li><a href="https://apps.nextcloud.com"><?php echo $l->t('App Store'); ?></a></li>
                <li><a href="<?php echo $DOCUMENTATION_ADMIN; ?>"><?php echo $l->t('Admin manual'); ?></a></li>
                <li><a href="<?php echo $DOCUMENTATION_USER; ?>"><?php echo $l->t('User manual'); ?></a></li>
                <li><a href="<?php echo home_url('developer'); ?>"><?php echo $l->t('Developer program'); ?></a></li>
                <li><a href="<?php echo home_url('security'); ?>"><?php echo $l->t('Security'); ?></a></li>
                <li><a href="https://github.com/nextcloud"><?php echo $l->t('Code on GitHub'); ?></a></li>
                <li><a href="<?php echo home_url('compare'); ?>"><?php echo $l->t('Compare'); ?></a></li>
            </ul>
        </div>
        <div class="col-sm-3">
            <h1><?php echo $l->t('Interact'); ?></h1>
            <ul >
                <li><a href="<?php echo home_url('support'); ?>"><?php echo $l->t('Support'); ?></a></li>
                <li><a href="https://help.nextcloud.com/categories"><?php echo $l->t('Forums'); ?></a></li>
                <li><a href="https://demo.nextcloud.com"><?php echo $l->t('Demo'); ?></a></li>
                <li><a href="<?php echo home_url('contact'); ?>"><?php echo $l->t('Contact us'); ?></a></li>
                <li><a href="<?php echo home_url('press'); ?>"><?php echo $l->t('Press center'); ?></a></li>
                <li><a href="<?php echo $DOCUMENTATION_BUGTRACKER; ?>"><?php echo $l->t('Bug Tracker'); ?></a></li>
            </ul>
        </div>
        <div class="col-sm-3">
            <h1><?php echo $l->t('Follow us'); ?></h1>
            <ul >
                <li><a href="https://www.facebook.com/Nextclouders/"><?php echo $l->t('Facebook'); ?></a></li>
                <li><a href="https://instagram.com/nextclouders"><?php echo $l->t('Instagram'); ?></a></li>
                <li><a href="https://www.linkedin.com/company/10827569/"><?php echo $l->t('LinkedIn'); ?></a></li>
                <li><a href="https://youtube.com/nextcloud"><?php echo $l->t('YouTube'); ?></a></li>
                <li><a href="https://twitter.com/nextclouders"><?php echo $l->t('Twitter'); ?></a></li>
                <li><a href="https://mastodon.xyz/@nextcloud"><?php echo $l->t('Mastodon'); ?></a></li>
                <li><a href="<?php echo home_url('podcast'); ?>"><?php echo $l->t('Podcast'); ?></a></li>
                <li><a href="<?php echo home_url('blogfeed'); ?>">RSS <?php echo $l->t('Feed'); ?></a></li>
            </ul>
        </div>
    <div class="row">
		<div class="col-sm-12 text-center">
		<p >&copy; </font> <?php echo date('Y'); ?> Nextcloud GmbH</p>
		</div>
	</div>
  </div>
</footer>
