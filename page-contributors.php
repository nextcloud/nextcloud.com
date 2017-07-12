<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/contributors.css" rel="stylesheet">
</head>
<section class="hero-section second-menu">
	<div class="background contributors-background">
		<div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Get to know us');?></h1>
				<h2><?php echo $l->t('The international community of Nextcloud Contributors.');?></h2>
			</div>
		</div>
	</div>
</section>
<section class="section--contributors">
	<div class="container">
		<blockquote class="text-center"><?php echo $l->t('An open source project is its contributors');?></blockquote>
		<p class="section--paragraph"><?php echo $l->t('Over 1000 people have code in Nextcloud. About a 10th of those have direct access to the code in our repository, contributing regularly. Besides coders, there are designers, Nextcloud advocates, translators, forum admins and many others who are part of our community. Below you see a random selection of our awesome members.');?></p>
		<p class="section--paragraph"><?php echo $l->t('If you want to be listed just <a class="hyperlink" href="https://github.com/orgs/nextcloud/people">set yourself as public in our GitHub organization.</a> If you want to take part in our community, learn more about the different <a class="hyperlink" href="https://nextcloud.com/contribute/">ways to contribute,</a>');?></p>
        <div class="row">
            <div class="col-md-4">
                <script type='text/javascript' src='https://www.openhub.net/p/nextcloud/widgets/project_factoids_stats?format=js'></script>
            </div>
        </div>
    </div>

	</div>
		<div class="wrap container contributorgroup">


		<h1  class="section--heading-1">100x awesome</h1>
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
				echo('<div class="col-sm-4 col-md-3 col-lg-2 contributor-area"><div class="contribshowhide">');
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
	</div>
</section>

<div class="calltoaction">
		<h1 class="section--heading-2 section--text--center"><?php echo $l->t('Let\'s make Nextcloud Rock!');?></h1>
		<p class="section--paragraph section--text--center"><?php echo $l->t('You can <a class="hyperlink" href="/contribute/">get involved, too</a>.');?></p>
</div>
