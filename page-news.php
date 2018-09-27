<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>Nextcloud News</h1>
        </div>
    </div>
</div>

<section class="content">
<div class="container">

<?php
require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php');
?>

<div class="row page-content-header">
  <div class="col-sm-7">
    <a href="/blogfeed" class="rss-button"><img style="vertical-align: top;" width=35 class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/rss.png"></img></a>
    <p>Welcome to Nextcloud News, our contributor blog roll. Nextcloud contributors should <a href="mailto:jos@nextcloud.com">ask to get added</a>!</p>
    <p>Opinions are the responsibility of those who express them. See our <a href="/privacy">privacy policy</a>.</p>
    <p>If you'd like to stay up to date with Nextcloud news you could also <a href="https://newsletter.nextcloud.com/?p=subscribe&id=1">subscribe to our newsletter</a>! A RSS feed with only release updates can be <a href="https://github.com/nextcloud/server/releases.atom">found here <i class="icon-rss icon"></i></a></p>
  </div>
</div>

<div class="row news">
	<div class="col-sm-7">
		<div class="page-content">
      <?php

        $url=explode('/',$_SERVER['REQUEST_URI']);
        if(isset($url[2])) $page= (int) $url[2]; else $page=1;
        if($page<1) $page=1;

        echo('<div id="container" class="transitions-enabled infinite-scroll clearfix">');
        CONTRIBOOK_BLOG::show(($page-1)*5,5);
        echo('</div>');

        // If not on ssl, show the page link
        $ssl = is_ssl() ? '' : 'style="display: block !important; margin-bottom: 60px;"';
        echo('
        <nav id="page-nav" '.$ssl.'>
          <a href="/news/'.($page+1).'" style="float: right">Next Page</a>
        </nav>
        ');

      ?>
      <script>
        $(function(){

        var $container = $('#container');

        $container.imagesLoaded(function(){
          $container.masonry({
          itemSelector: '.box',
          columnWidth: 100
          });
        });

        $container.infinitescroll({
          navSelector  : '#page-nav',    // selector for the paged navigation
          nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
          itemSelector : '.box',     // selector for all items you'll retrieve
          loading: {
            finishedMsg: 'No more pages to load.',
            img: '<?php echo get_template_directory_uri(); ?>/assets/img/common/loading.gif'
          }
          },
          // trigger Masonry as a callback
          function( newElements ) {
          // hide new items while they are loading
          var $newElems = $( newElements ).css({ opacity: 0 });
          // ensure that images load before adding to masonry layout
          $newElems.imagesLoaded(function(){
            // show elems now they're ready
            $newElems.animate({ opacity: 1 });
            $container.masonry( 'appended', $newElems, true );
          });
          }
        );

        });
      </script>
		  </div>
    </div>
    <div class="sidebar col-sm-4 col-sm-offset-1">
      <?php
      echo('<h2><i class="icon-twitter"></i> The latest twitter posts</h2>');
      CONTRIBOOK_MICROBLOG::show(0,10);

      echo('</td><td valign="top">');
      echo('<h2><i class="icon-comment"></i> The latest from the forum</h2>');
      CONTRIBOOK_FORUM::show(0,10);
      echo('<h2><i class="icon-cloud"></i> Nextcloud News</h2>');
      CONTRIBOOK_NEWS::show(0,10);
      ?>
    </div>
  </div>
</div>
</div>
</section>
