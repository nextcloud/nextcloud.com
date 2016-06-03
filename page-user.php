<div class="page-header">
  <h1>Contributors</h1>
</div>
<div class="span9">
	<div class="page-content">
<?php

if(CONTRIBOOK) {
  require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php');

  if(isset($_GET['user'])) $user=$_GET['user']; else $user='';
  if(CONTRIBOOK_USER::exist($user)) {
    CONTRIBOOK_PROFILE::show($user);
    $data=CONTRIBOOK_USER::getuser($user);

    // show the blog posts of the user
    if($data['rssurl']<>'') {
      echo('<br />The latest blogs<br />');
      CONTRIBOOK_BLOG::showuser($user, 0, 10);
    }

    // show the github messages of the user
    if($data['github']<>'') {
      echo('<br />The latest GitHub messages<br />');
      CONTRIBOOK_GITHUB::show($user, 0, 10);
    }

    // show the twitter posts of the user
    if($data['twitter']<>'') {
      echo('<br />The latest Twitter posts<br />');
      CONTRIBOOK_MICROBLOG::showuser($user, 0, 10);
    }

  }else{
    echo('user not found');

  }

}
?>
		</div>

	</div>
</div>


