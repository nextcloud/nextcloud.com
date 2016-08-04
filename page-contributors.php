<div class="page-header">
	<h1>Meet our Community</h1>
</div>
<p class="teamdescription">An open source project is its contributors. Over 1000 people have code in Nextcloud while about a 10th of those are part of our github project, meaning they have direct access to the code, working with it following our development process. Besides coders, there are designers, Nextcloud advocates, translators, forum admins and many others who are part of our awesome community. Below you see many, but not all of our awesome members. If you want to be listed, <a href="mailto:pr@nextcloudPleaseRemoveThis.com">ping Jos</a>.</p>

<!-- End main -->
</div>
</div>

<div class="wrap container contributorgroup">
<!--<div class="row">
	<div class="col-md-2">
		<div class="contribshowhide">
			<div class="contribimg">
				<span class="contribook_microbloguserpicture">
					<a href="/"><img class="img-responsive img-circle" src="<?php bloginfo('template_directory'); ?>/assets/img/people/frank.jpg" border="0" /></a>
				</span>
			</div>
			<div class="contribtext">
				    <a href="/">test user</a>
			</div>
		</div>
	</div>
</div>-->

<?php
if(CONTRIBOOK) {

	require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php');
	$users=CONTRIBOOK_USER::getusers();
	echo('<div class="row">');
	foreach($users as $user) {
		$data = CONTRIBOOK_USER::getuser($user);
		echo('<div class="col-md-2">');
			if(empty($data['picture_50'])) { $data['picture_50'] = 'blogger_50.png'; }
			echo('<div class="contribimg"><span class="contribook_microbloguserpicture"><a href="/user/?user='.$user.'"><img class="img-responsive img-circle" src="'.CONTRIBOOK_PHOTO_URL.$data['picture_50'].'" border="0" /></a></span></div>');
			echo('<div class="contribtext"><a href="/user/?user='.$user.'">'.$data['name'].'</a></div>');
		echo('</div>');
	}
	echo('</div>');
}
?>
