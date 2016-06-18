<script>
$(document).ready(function() {
        if(window.location.hash) {
        $('#IDtext').text('My Federated Cloud ID is');
        $('#userName').text(window.location.hash.substring(1));
    }  
 });
</script>

<div class="row col-md-12">
	<h2 class="conf-location">Share across Nextclouds!</h2>
</div>
<!--<div class="row conf-info">
	<div class="col-lg-4 col-md-5 text-center no-underline">
		<a href="https://www.youtube.com/watch?v=9-JEmlH2DEg" target="_blank" style="border: none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/federation/federation.gif" alt="in action" /></a>
	</div>
	<div class="col-md-8 col-md-offset-2">-->
		<p>Sharing files across Nextcloud servers is as easy as sending an email from a Gmail address to a Yahoo account! Instead of an email address, you use a <em>Federated Cloud ID</em>.</p>
		<p class="federation-id"><span id="IDtext">An example Federated Cloud ID is</span><strong> <span id="userName">username@example.com/nextcloud</span></strong></p>
		<p>To share a file, enter the Federated Cloud ID in the 'share' dialog. A notification will pop up on the Nextcloud server of the recipient.</p>
		<p>You can find your own Federated Cloud ID in your user settings. Give it to your friends so they can share files with you!</p>
<!--	</div>
</div>
<div class="row conf-partners-title">
	<div class="col-md-12">-->
		<h2>More details</h2>
<!--	</div>
</div>
<div class="row">
        <div class="col-md-6 col-md-offset-3">-->
                Learn more in the Nextcloud <a href="<?php echo $DOCUMENTATION_USER; ?>files/federated_cloud_sharing.html" target="_blank">user documentation</a> and <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/federated_cloud_sharing_configuration.html">administrator documentation</a>. <!--Find <a href="https://nextcloud.com/it-is-time-to-federate-our-clouds/" target="_blank">technical details in this series of blog posts</a>.-->
<!--        </div>
</div>
<div class="row">
        <div class="col-md-6 text-center col-md-offset-3"><iframe width="100%" height="360" src="https://www.youtube.com/embed/9-JEmlH2DEg?rel=0" frameborder="0" allowfullscreen></iframe></div>
</div>-->




