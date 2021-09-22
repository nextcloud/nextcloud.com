<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/channels.css?v=1" rel="stylesheet">
<script>
	require(["require.config"], function() {
		require(["pages/release-channels"])
	});
</script>
</head>
<div class="background channels-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Tracking Nextcloud Releases');?></h1>
				<h2><?php echo $l->t('Choose your balance between stability and features');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('With millions of Nextcloud users, there are a wide variety of needs and requirements for a private cloud server. Release Channels allow you to pick a versioning strategy that fits you.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--details">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p><?php echo $l->t('You can choose a channel of your preference in the Administrator settings in your Nextcloud instance if you have installed Nextcloud from an archive. Learn more about the release channels below.');?></p>
            <p><?php echo $l->t('NOTE that you can <strong>only upgrade to a newer version</strong>. <em>Skipping major versions</em> when upgrading and <em>downgrading</em> to older versions is not supported by Nextcloud. If you went via \'beta\' to 14.0.0rc4 and stable is on 13.0.5, you have to wait until 14.0.0 or later is in stable until a new update will become available.');?></p>
            <h3><?php echo $l->t('Where is my new stable release?');?></h3>
            <p><?php echo $l->t('Nextcloud makes new versions <strong>incrementally available</strong> to user installations in the Stable channel. When a major new version comes out, we wait about one week and only when no problems are found we start the roll out in steps of about 20% of our user base per week. If you maintain several servers, this means some get it sooner than others. Sometimes, an issue is found that was not caught during our pre-release testing, so we delay the roll-out until the fix is available. As a result new release is typically only available in the stable channel <strong>after the first minor release.</strong> Sometimes it can take even a bit longer. Users can always upgrade sooner by choosing the beta channel, which typically tracks stable releases immediately after publishing.');?></p>
            <p><?php echo $l->t('After upgrading to the new major release from the Beta channel, you can switch back to stable where you will be notified of minor releases as usual.');?></p>
            <p><?php echo $l->t('If you are looking for our release- and maintenance schedule, you can find that ');?><a href="https://github.com/nextcloud/server/wiki/Maintenance-and-Release-Schedule"><?php echo $l->t('in Github.');?></a></p>
            <p><?php echo $l->t('Note that, of course, we do not release unstable software. We spend a third of our development cycle on testing and only release Nextcloud if we and our paid and volunteer testers are unable to find any more issues. Unfortunately, Nextcloud is big and complicated software and with hundreds of apps users can install, Nextcloud can be used in thousands of different ways, on different platforms and with different configurations. We encourage users to join our testing efforts, trying out beta releases and release candidates so we can fix issues before release. Only testing YOUR use case can guarantee it will be perfect for you!');?></p>
        </div>
            <div class="col-md-6">
                <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/556889257?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Introducing Nextcloud Release Channels"></iframe></div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--table">
<div class="container">
<table class="table table-striped">
    <tr>
      <td class="" style="min-width:250px; max-widt:250px"><i class="fa-sitemap"></i>&nbsp;&nbsp;<?php echo $l->t('Release channel');?></td>
      <td class="" style="min-width:300px"><i class="fa-briefcase"></i>&nbsp;&nbsp;<?php echo $l->t('Use case');?></td>
      <td class="" style="min-width:300px"><i class="fa-archive"></i>&nbsp;&nbsp;<?php echo $l->t('Get it here');?></td>
    </tr>
    <tr>
      <td class=""><h3>Production</h3></td>
      <td class=""><?php echo $l->t('This channel is used to deliver the Nextcloud Enterprise build to our customers.</br>
		       Our customers have access to a special build of Nextcloud, giving them the reliable enterprise solution they need for the best possible experience.');?></td>
            <td class=""><a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('Learn more about our offering for customers.');?></a>
            </td>
    </tr>
    <tr>
      <td class=""><h3>Stable</h3></td>
      <td class=""><?php echo $l->t('This channel delivers the latest feature releases ready for most users at minimal risk.');?><br/>
      <?php echo $l->t('Note that Nextcloud does staged rollouts, making releases incrementally available to the user base over time. We are very careful about new major releases, usually only making them available after the first minor bug fix release. <strong>To update sooner to the new version, use the Beta channel.</strong> Around big releases the Beta channel delivers the new major version.');?></td>
            <td class=""><?php echo $l->t('You can get the latest stable version from our installation page.');?><br /><a href="<?php echo home_url('install') ?>" class="btn btn-lg btn-default">Install</a></td>
    </tr>
    <tr>
      <td class=""><h3>Beta</h3></td>
      <td class=""><?php echo $l->t('Betas and release candidates are the versions of choice for testers in preparation for an Nextcloud release. They provide a short-term-stable point to report bugs against. Grab these to make sure the upcoming release works well on your infrastructure.');?></td>
      <td class=""><?php echo $l->t('Automatically generated');?> <a class="hyperlink" href="<?php echo home_url('install/#testing-development') ?>"><?php echo $l->t('snapshot tarballs and betas</a> track daily Nextcloud development. These are suitable to check if bugs are fixed but can break any time.');?>
      </td>
    </tr>
    <tr>
      <td class=""><h3>Daily</h3></td>
      <td class=""><?php echo $l->t('Daily builds are meant to reproduce bugs as well as to enable testers to follow the development of the next major version.');?></td>
      <td class=""><a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a class="hyperlink" href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR_MD5; ?>">MD5</a>)<br />
    </tr>
</table>
</section>
<section>
<div class="container">
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <p><?php echo $l->t('If you are looking to grab an archive of a specific version you can find links to them in our');?> <a class="hyperlink" href="<?php echo home_url('changelog') ?>">changelog</a>.</p>
        <p><?php echo $l->t('Note that releases don\'t show up in the updater app right away. We usually stagger releases out to watch the impact and hold off in case very serious problems pop up. In practice, most bugfix releases are available within a week, major releases to a proportion of the users on release day in the Stable channel; we will increase that percentage usually to 100% after the first bugfix release.Packages for the Release channels might be available in distributions, docker images, Snap and so on, this is up to the packagers and communities developing for those platforms.');?></p>
        <!--<p><strong>Security note:</strong></br>
        To receive information about updates and security issues, we recommend a subscription to our low-traffic <a href="http://mailman.nextcloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>-->
        <a id=""></a>
        <p><?php echo $l->t('To <em>upgrade in the safest way possible</em>, always update to the latest minor release before upgrading to a new version. As an extreme example, to upgrade from 9 all the way to 12.0.5, upgrade 9.0.x to 9.0.6, then upgrade to 10.0.6, 11.0.7, then 12.0.5. We try to set up our updater to do this automatically for you whenever possible.');?></p>
    </div>
<!--    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels.png" title="Update Channel selection in Updater app" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a>
    </div>-->
</div>
</div>
</section>
</div>
