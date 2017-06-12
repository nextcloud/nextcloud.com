<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/globalscale.css" rel="stylesheet">
<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/jquery-ui.css" rel="stylesheet" />
<script>
	require(["require.config"], function() {
		require(["vendor/jquery.min", "vendor/jquery.ui", "bootstrap"],
			function ($, jqueryui) {
				require(["vendor/jquery.youtubepopup"],
					function (jqyoutube) {
						jQuery("a.youtube").YouTubePopup({ hideTitleBar: true });
					}
				);
			}
		);
	});
</script>
</head>
<div class="background globalscale-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Tracking Nextcloud Releases');?></h1>
				<h2><?php echo $l->t('Choose your balance between stability and features');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--video">
<div class="container">


<!-- <?php get_template_part('templates/parts/title'); ?> -->
<div class="page-header">
	<h1></h1>
</div>

<div class="row">
      <div class="col-lg-6 col-md-5 col-sm-4 col-xs-12">
	      <p>With millions of Nextcloud users, there are a wide variety of needs and requirements. We offer Release Channels to give our users more flexibility in choosing an Nextcloud version to meet their needs. Below you can find and pick the best Channel for you.</p>
	      <p>You can choose a channel of your preference in the Administrator settings in your Nextcloud instance if you have installed Nextcloud from an archive.</p>
	      <p>NOTE that you can <strong>only upgrade to a newer version</strong>. <em>Skipping major versions</em> when upgrading and <em>downgrading</em> to older versions is not supported by Nextcloud.</p>
      </div>
      <div class="col-lg-6 col-md-7 col-sm-8 col-xs-12">
<!--       	     <iframe width="100%" height="360" src="https://www.youtube.com/embed/RtNAx-PcZd8?rel=0" frameborder="0" allowfullscreen></iframe> -->
      </div>
</div>

<table class="table table-striped">
    <tr>
      <td class="warning" style="min-width:250px; max-widt:250px"><i class="icon-sitemap"></i>&nbsp;&nbsp;Release channel</td>
      <td class="info" style="min-width:300px"><i class="icon-briefcase"></i>&nbsp;&nbsp;Use case</td>
      <td class="info" style="min-width:300px"><i class="icon-archive"></i>&nbsp;&nbsp;Get it here</td>
    </tr>
    <tr>
      <td class="warning"><h1>Production</h1></td>
      <td class="info">This channel delivers the latest fully tested release of Nextcloud.</br>
		       That does not imply that these releases are bug free. The issues are known and can be worked around. The downside of this channel is that the releases are behind in terms of features and performance.</td>
            <td class="info">Older archives are available from our <a href="/changelog">changelog page.</a>
            </td>
    </tr>
    <tr>
      <td class="warning"><h1>Stable</h1></td>
      <td class="info">This channel delivers the latest feature releases ready for home users at minimal risk.</td>
            <td class="info"><a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_MD5; ?>">MD5</a>)
    </tr>
    <tr>
      <td class="warning"><h1>Beta</h1></td>
      <td class="info">Betas and release candidates are the versions of choice for testers in preparation for an Nextcloud release. They provide a short-term-stable point to report bugs against. Grab these to make sure the upcoming release works well on your infrastructure.</td>
      <td class="info">Automatically generated <a href="/install/#testing-development">snapshot tarballs and betas</a> track daily Nextcloud development. These are suitable to check if bugs are fixed but can break any time.
      </td>
    </tr>
    <tr>
      <td class="warning"><h1>Daily</h1></td>
      <td class="info">Daily builds are meant to reproduce bugs as well as to enable testers to follow the development of the next major version.</td>
      <td class="info"><a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR_MD5; ?>">MD5</a>)<br />
    </tr>
</table>
<div class="row">
    <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
        <p>If you are looking to grab an archive of a specific version you can find links to them in our <a href="/changelog">changelog</a>.</p>
        <p>Note that releases don't show up in the updater app right away. We usually stagger releases out to watch the impact and hold off in case very serious problems pop up. In practice, most bugfix releases are available within a week, major releases to a proportion of the users on release day in the Stable channel; we'll increase that percentage usually to 100% after the first bugfix release. We start the incremental rollout to the Production channel after the first bugfix release (for example, 12.0.1). Packages for the Release channels might be available in distributions, this is up to the packagers.</p>
        <!--<p><strong>Security note:</strong></br>
        To receive information about updates and security issues, we recommend a subscription to our low-traffic <a href="http://mailman.nextcloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>-->
        <a name="warning"></a>
        <p>To <em>upgrade in the safest way possible</em>, always update to the latest minor release before upgrading to a new version. As an extreme example, to upgrade from 9 all the way to 12, upgrade 9.0.x to 9.0.6, then upgrade to 10.0.4, 11.0.3, then 12.0.1.</p>
    </div>
<!--    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels.png" title="Update Channel selection in Updater app" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a>
    </div>-->
</div>
</section>
</div>
