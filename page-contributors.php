<?php get_template_part( 'templates/parts/title'); ?>
<div class="sub-nav">
	<a href="/about"><?php echo $l->t('About Nextcloud');?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/team"><?php echo $l->t('Nextcloud GmbH team');?></a>
</div>
<p><?php echo $l->t('An open source project is its contributors. Over 1000 people have code in Nextcloud while about a 10th of those are part of our GitHub organization, meaning they have direct access to the code, working with it following our development process. Besides coders, there are designers, Nextcloud advocates, translators, forum admins and many others who are part of our awesome community. Below you see many, but not all of our awesome members, in random order. If you want to be listed just <a href="https://github.com/orgs/nextcloud/people">set yourself as public in our GitHub organization.</a> If you want to take part in our community, <a href="https://nextcloud.com/contribute/">learn more about the different ways to contribute</a>');?></p>

<!-- End main -->
</div>
</div>

<div class="wrap container contributorgroup">


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
