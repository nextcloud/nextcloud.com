<!--<?php get_template_part('templates/parts/title'); ?>-->
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1>Contact us</h1>
		<p>If you have any questions or comments, complete the form below and we'll get back to you!</p>
	</div>
	<div class="col-md-6 col-md-offset-3">
		<form name="contact" method="post" action="contactsubmit/">
		<div class="row">
			<div class="col-md-8">
				<p><label for="yourname">Your name<br>
				<input  type="text" name="yourname" maxlength="60" size="60"></label></p>
				<p><label for="email">Email<br>
				<input  type="text" name="email" maxlength="80" size="60"></label></p>
				<p><label for="organization">Organization<br>
				<input  type="text" name="organization" maxlength="80" size="60" placeholder=""></label></p>
				<p><label for="phone">Phone number<br>
				<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code"></label></p>
				<p><label for="comments">Your message<br />
				<textarea  name="comments" maxlength="1000" cols="60" rows="6" placeholder="Let us know how we can help you!"></textarea></label></p>
				<td colspan="2" style="text-align:center">
				<input type="submit" value=" Submit ">
			</div>
		</div>
		</form>
	</div>
	<div class="col-md-6 col-md-offset-3">

		<!--If you want to talk to Nextcloud users, contributors and fans, join the <a href="/promote" target="_blank">community conversation</a> over social media, the forums and other places.--> 
		<h1>Talk to us online!</h1>
		Most of our contributors are active in <a href="irc://#nextcloud-dev@freenode.net" target="_blank">the Nextcloud development IRC channel</a> on freenode.net, also accessible via <a href="https://webchat.freenode.net/?channels=nextcloud-dev" target="_blank">webchat</a>. We're also very active <a href="https://help.nextcloud.com" target="_blank">on our forums</a>. We are still bootstrapping this great new project and welcome your help! 
		<!--If you are looking for answers to questions, see <a href="/faq" target="_blank">the Nextcloud FAQ</a> and our <a href="/support" target="_blank">support page</a>.-->

		<!-- For the latest news, subscribe to our <a href="https://nextcloud.org/feed/">RSS feed</a>.</p> -->

		<!-- <p>For reporting vulnerabilities, read <a href="https://nextcloud.org/security">Security</a>.</p> -->
	</div>
</div>

<!--<h2>Active contributors on the <a href="../news">Nextcloud blog roll</a>:</h2>-->

<!-- <?php
// if(CONTRIBOOK) {
// 
// 	require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php');
// 
// 	$users=CONTRIBOOK_USER::getusers();
// 	echo('<table>');
// 	foreach($users as $user) {
// 		$data = CONTRIBOOK_USER::getuser($user);
// 		echo('<tr><td style="padding:5px;">');
// 		if(empty($data['picture_50'])) { $data['picture_50'] = 'blogger_50.png'; }
// 
// 		echo('<span class="contribook_microbloguserpicture"><a href="/user/?user='.$user.'"><img src="'.CONTRIBOOK_PHOTO_URL.$data['picture_50'].'" border="0" /></a></span>');
// 
// 		echo('</td><td style="padding:5px;">');
// 
// 		echo('<a href="/user/?user='.$user.'">'.$data['name'].'</a><br />');
// 		echo($data['role']);
// 
// 		echo('</td></tr>');
// 	}
// 
// 	echo('</table>');
// 
// }
// ?>-->
<!--Note that, unfortunately, most of our contributors have not (yet) set up a blog and and added themselves here. You can find a much more complete list of past and present Nextcloud contributors on <a href="https://github.com/orgs/nextcloud/people">github</a>, which is where we develop Nextcloud.

If you want to be added to the blog roll, please ping the Nextcloud community manager on IRC (nick: jospoortvliet) or via <a href="https://plus.google.com/117563705675081959469">G+</a>, <a href="https://twitter.com/jospoortvliet">twitter</a> or <a href="https://pod.geraspora.de/u/jospoortvliet">diaspora</a>.-->
