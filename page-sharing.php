<script>
$(document).ready(function() {
        if(window.location.hash) {
        $('#IDtext').text('My Federated Cloud ID is');
        $('#userName').text(window.location.hash.substring(1));
    }  
 });
</script>

<div class="featurerow">
	<h1 class="featuretitle">File access and sharing</h1>
	<div class="row">
		<div class="col-md-6 featureblock">
			<h2 class="featuretitle">Share on your terms</h2>
			<p class="">Nextcloud features an easy to use and powerful web interface. You can access all your files wherever you are and however you like.</p>
			<p class="">Share with other users on your server, send password protected public links, let others upload files to you and get notifications on your phone when a user on another Nextcloud server shares files directly with you.</p>
			<p>Nextcloud makes sharing and collaboration easy!</p>
		</div>
		<div class="col-md-6">
			<div class="yt-img-overlay">
				<a class="youtube" href="https://www.youtube.com/watch?v=Fe1I7wYW6hA" title="Creating anonymous upload links">
					<img  src="https://img.youtube.com/vi/Fe1I7wYW6hA/hqdefault.jpg" title="Creating anonymous upload links" />
					<div class="yt-play-btn">
						<i></i> 
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing_admin.png" class="img-responsive featureimg" />
		</div>
		<div class="col-md-6">
			<p class="">Features:
			<ul>
				<li>Tag and comment on files, and see tags and comments by others</li>
				<li>See what is happening on your Nextcloud in the Activity feed</li>
				<li>Previous versions of files you modified are retained and can be brought back. Deleted files can be found in the trash.</li>
				<li>Share photo galleries</li>
				<li>Share public links read-only or with editing capabilities</li>
				<li>Anonymous upload hides existing files, providing just an upload target</li>
				<li>Optionally put a password or expiration date on public link shares</li>
				<li>Share directly to users on other Nextcloud, ownCloud or Pydio servers (<a href="#federation">"federation"</a>)</li>
				<li>Admins can control all these abilities, add trusted Federation servers and more</li>
			</ul>
			<a href="/workflow" class="btn btn-primary morebutton">More about Admin control <i class="icon-arrow-circle-o-right icon"></i></a>
			</p>
		</div>
	</div>
</div>

<a name="#federation"></a>
	<h2 class="">Share across Nextclouds!</h2>
<div class="row">
	<div class="col-md-4">
<!-- 		<a href="https://www.youtube.com/watch?v=9-JEmlH2DEg" target="_blank" style="border: none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/federation/federation.gif" alt="in action" /></a> -->
		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/federation.png" alt="in action" />
	</div>
	<div class="col-md-8">
		<p>Sharing files across Nextcloud servers is as easy as sending an email from a Gmail address to a Yahoo account! Instead of an email address, you use a <em>Federated Cloud ID</em>.</p>
		<p class="federation-id"><span id="IDtext">An example Federated Cloud ID is</span><strong> <span id="userName">username@example.com/nextcloud</span></strong></p>
		<p>To share a file, enter the Federated Cloud ID in the 'share' dialog. A notification will pop up on the Nextcloud server of the recipient.</p>
		<p>You can find your own Federated Cloud ID in your user settings. Give it to your friends so they can share files with you!</p>
	</div>
</div>
<h2>More details</h2>
<div class="row">
        <div class="col-md-6">
                Learn more in the Nextcloud <a href="<?php echo $DOCUMENTATION_USER; ?>files/federated_cloud_sharing.html" target="_blank">user documentation</a> and <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/federated_cloud_sharing_configuration.html">administrator documentation</a>. <!--Find <a href="https://nextcloud.com/it-is-time-to-federate-our-clouds/" target="_blank">technical details in this series of blog posts</a>.-->
       </div>
		<div class="col-md-6">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/federation-config.png" class="img-responsive featureimg" />
		</div>
</div>




