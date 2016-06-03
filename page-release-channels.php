<!-- <?php get_template_part('templates/parts/title'); ?> -->
<div class="page-header">
	<h1>Tracking Nextcloud Releases</h1>
</div>

<div class="row">
      <div class="col-lg-6 col-md-5 col-sm-4 col-xs-12">
	      <p>With millions of Nextcloud users, there are a wide variety of needs and requirements. We offer Release Channels to give our users more flexibility in choosing an Nextcloud version to meet their needs. Below you can find and pick the best Channel for you.</p>
	      <p>You can choose a channel of your preference in the Administrator settings in your Nextcloud instance if you have installed Nextcloud from an archive. If you prefer using Linux packages, you can pick a repository for a specific version, a repository with daily snapshots or follow the repository which always has the latest stable feature release.</p>
	      <p>NOTE that you can <strong>only upgrade to a newer version</strong>. <em>Skipping major versions</em> when upgrading and <em>downgrading</em> to older versions is not supported by Nextcloud.</p>
      </div>
      <div class="col-lg-6 col-md-7 col-sm-8 col-xs-12">
      	     <iframe width="100%" height="360" src="https://www.youtube.com/embed/RtNAx-PcZd8?rel=0" frameborder="0" allowfullscreen></iframe>
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
            <td class="info">Older archives are available from our <a href="/changelog">changelog</a>.<br />
		    Production repositories are available for the following major versions:
		    <a href="https://download.nextcloud.org/download/repositories/9.0/nextcloud/">9.0</a> - coming when 9.0.1 is out
		    <a href="https://download.nextcloud.org/download/repositories/8.2/nextcloud/">8.2</a>
		    <a href="http://software.opensuse.org/download/package?project=isv:Nextcloud:community:8.1&package=nextcloud">8.1</a>
		    <a href="http://software.opensuse.org/download/package?project=isv:Nextcloud:community:8.0&package=nextcloud">8.0</a>
		    <br>Register and activate one of these repositories with your package manager to get updates within the same major version<a href="#warning">*</a>
            </td>
    </tr>
    <tr>
      <td class="warning"><h1>Stable</h1></td>
      <td class="info">This channel delivers the latest feature releases ready for home users at minimal risk.</td>
            <td class="info"><a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_MD5; ?>">MD5</a>)<br />
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_STABLE; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a></td>
    </tr>
    <tr>
      <td class="warning"><h1>Beta</h1></td>
      <td class="info">Betas and release candidates are the versions of choice for testers in preparation for an Nextcloud release. They provide a short-term-stable point to report bugs against. Grab these to make sure the upcoming release works well on your infrastructure.<br>Automatically generated <a href="/install/#testing-development">snapshot tarballs and packages</a> track daily Nextcloud development. These are suitable to check if bugs are fixed but can break any time.</td>
      <td class="info">Follow our <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/testing/index.html">testpilots mailing list</a> to get the latest test version.<br />
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a>
      </td>
    </tr>
    <tr>
      <td class="warning"><h1>Daily</h1></td>
      <td class="info">Daily builds are meant to reproduce bugs as well as to enable testers to follow the development of the next major version.</td>
      <td class="info"><a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR_MD5; ?>">MD5</a>)<br />
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_DAILY; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a></td>
    </tr>
</table>
<div class="row">
    <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
        <p>If you are looking to grab an archive of a specific version or are looking for the version-specific Linux package repositories, you can find links to them in our <a href="/changelog">changelog</a>.</p>
        <p>Note that releases don't show up in the updater app right away. We usually stagger releases out to watch the impact and hold off in case very serious problems pop up. In practice, most bugfix releases are available within a week, major releases within a week for the Stable channel and a week after the first bugfix release (for example, 9.0.1) for the Production channel. Packages for the Stable channel are available close by or at the release date, Production also waits for the first minor update after a major release.</p>
        <p><strong>Security note:</strong></br>
        To receive information about updates and security issues, we recommend a subscription to our low-traffic <a href="http://mailman.nextcloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>
        <a name="warning"></a>
        <p><strong>Warning:</strong></br>
        If you pick a <strong>specific Linux Package repository</strong> rather than following stable, you assume the responsibility for a timely upgrade to a new stable release once your current release is no longer supported. We support releases for a significant time, but not forever, and at some point you have to move to a newer version to continue to receive security and stability improvements.</br>
        If at all possible, we suggest to <strong>upgrade sooner rather than later</strong>. Doing a test on a copy of your production environment is a better way of ensuring the new version works for you than waiting and hoping all issues are found and fixed – that way, you lose out on many of the benefits of the new release, not only in terms of features and user interface enhancements but also when it comes to performance improvements and scalability.</p>
        <p>Note that from 8.2 onward, Nextcloud packages can be found on download.nextcloud.org rather than on the openSUSE Open Build Service. This means you will have to move repositories if you want to upgrade from the Stable 8.1 release.</p>
        <p>To <em>upgrade in the safest way possible</em>, always update to the latest minor release before upgrading to a new version. As an extreme example, to upgrade from 7.0 all the way to 9.0, upgrade 7.0.x to 7.0.14, then upgrade to 8.0.13, 8.1.8, 8.2.5, then 9.0.2.</p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels.png" title="Update Channel selection in Updater app" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a>
    </div>
</div>
