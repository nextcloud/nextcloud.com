<?php get_template_part( 'templates/parts/title'); ?>
<div class="sub-nav">
	<a href="/about">About Nextcloud</a><!--&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/team">Nextcloud GmbH team</a>-->
</div>
<p>An open source project is its contributors. Over 1000 people have code in Nextcloud while about a 10th of those are part of our github project, meaning they have direct access to the code, working with it following our development process. Besides coders, there are designers, Nextcloud advocates, translators, forum admins and many others who are part of our awesome community. Below you see many, but not all of our awesome members. If you want to be listed, <a href="mailto:pr@nextcloudPleaseRemoveThis.com">ping Jos</a>.</p>

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
	$users = CONTRIBOOK_USER::getusers();
	$forbiddenUsers = ['Nextcloud', 'nextcloud-bot'];
	shuffle($users);
	echo('<div class="row">');
	foreach($users as $user) {
		$data = CONTRIBOOK_USER::getuser($user);
		$image_src = CONTRIBOOK_PHOTO_URL.blogger_200.png;
		if(in_array($data['userid'], $forbiddenUsers, true)) { continue; }
		echo('<div class="col-sm-4 col-md-3 col-lg-2"><div class="contribshowhide">');
		if($data['picture_200'] !== ''){
			$image_src = CONTRIBOOK_PHOTO_URL.$data['picture_200'];
// 			echo('<span class="bloguserpicture"><img src="'.CONTRIBOOK_PHOTO_URL.$_['picture_200'].'" border="1" /></span>');
		} elseif($data['githubId']) {
			$image_src = 'https://avatars2.githubusercontent.com/u/'.$data['githubId'].'?v=3&s=200';
// 			echo('<span class="bloguserpicture"><img src="https://avatars2.githubusercontent.com/u/'.$_['githubId'].'?v=3&s=200" border="1" /></span>');
		}
		echo('<a href="/user/?user='.$user.'"><div class="contribimg"><span class="contribook_microbloguserpicture"><img class="img-responsive img-circle" src="'.$image_src.'" border="0"  /></span></div></a>');

		echo('<a href="/user/?user='.$user.'"><div class="contribtext">'.$data['name'].'</a></div>');
		echo('</div></div>');
	}
	echo('</div>');
}
?>
