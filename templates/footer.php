<div class="container footer-social-icons">
    <div>
      <a target="_blank" href="https://plus.google.com/b/104036748063781940910/104036748063781940910/about"><img width=50 src="<?php echo get_template_directory_uri(); ?>/assets/img/social/googleplus.svg" title="Follow us on Google Plus!" alt="Follow us on Google Plus!"></img></a>
      <a target="_blank" href="https://www.facebook.com/Nextcloud-1032807203462807/"><img width=50 src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook.svg" title="Like our facebook page!" alt="Like our facebook page!"></img></a>
      <a target="_blank" href="https://twitter.com/nextclouders"><img width=50 src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitter.svg" title="Subscribe to our twitter channel!" alt="Subscribe to our twitter channel!"></img></a>
      <a target="_blank" href="https://nextcloud.com/blogfeed"><img class="img-circle" width=50 src="<?php echo get_template_directory_uri(); ?>/assets/img/social/rss.svg" title="Subscribe to our news feed!" alt="Subscribe to our news feed!"></img></a>
      <a target="_blank" href="https://newsletter.nextcloud.com/?p=subscribe&id=1"><img width=50 src="<?php echo get_template_directory_uri(); ?>/assets/img/social/mail.svg" title="Subscribe to our newsletter!" alt="Subscribe to our newsletter!"></img></a>
    </div>
  </div>
  
<!-- https://www.instagram.com/nextclouders/ -->
  
<footer class="content-info" role="contentinfo">
<div class="container">   
   <div class="row">
     <div class="col-sm-2 col-sm-offset-1">
        <div class="footer-nav">
          <h4>About Nextcloud</h4>
          <ul id="menu-about" class="menu">
            <li class="menu-contact"><a href="<?php get_bloginfo('url'); ?>/about/">About us</a></li>
<!--             <li class="menu-history"><a href="<?php get_bloginfo('url'); ?>/history/">History</a></li> -->
<!--             <li class="menu-events"><a href="<?php get_bloginfo('url'); ?>/events/">Events</a></li> -->
            <li class="menu-privacy"><a href="<?php get_bloginfo('url'); ?>/jobs">Jobs</a></li>
            <li class="menu-privacy"><a href="<?php get_bloginfo('url'); ?>/community/code-of-conduct/">Code of conduct</a></li>
            <li class="menu-privacy"><a href="<?php get_bloginfo('url'); ?>/privacy/">Privacy and legal</a></li>
          </ul>
        </div>
     </div>
     <div class="col-sm-2 col-sm-offset-2">
        <div class="footer-nav">
          <h4>Resources</h4>
			<ul id="menu-support-and-documentation" class="menu">
<!--             <li class="menu-faq"><a href="<?php get_bloginfo('url'); ?>/faq/">FAQ</a></li> -->
            <li class="menu-support"><a href="<?php get_bloginfo('url'); ?>/support/">Support</a></li>
            <li class="menu-admin-manual"><a href="<?php echo $DOCUMENTATION_ADMIN; ?>">Admin manual</a></li>
            <li class="menu-user-manual"><a href="<?php echo $DOCUMENTATION_USER; ?>">User manual</a></li>
            <li class="menu-user-manual"><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>">Developer manual</a></li>
            <li class="menu-security"><a href="<?php get_bloginfo('url'); ?>/security/">Security</a></li>
<!--             <li class="menu-store"><a href="http://www.cafepress.com/nextcloudshop">Nextcloud Store</a></li> -->
<!--          </ul>  -->
        </div>
     </div>
     <div class="col-sm-2 col-sm-offset-2">
        <div class="footer-nav">
          <h4>Interact</h4>
          <ul id="menu-interact" class="menu">
            <li class="menu-irc-channel"><a target="_blank" href="https://webchat.freenode.net/?channels=nextcloud">IRC Channel</a></li>
<!--             <li class="menu-mailing-list"><a target="_blank" href="https://mailman.nextcloud.com/mailman/listinfo/">Mailing List</a></li> -->
            <li class="menu-forums"><a target="_blank" href="https://help.nextcloud.com/categories">Forums</a></li>
            <li class="menu-contact"><a href="<?php get_bloginfo('url'); ?>/contact/">Contact us</a></li>
            <li class="menu-press"><a href="/press">Press</a></li>
<!--             <li class="menu-bug-tracker"><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>bugtracker/index.html">Bug Tracker</a></li> -->
<!--             <li class="menu-promote"><a href="/promote/">Spread the word</a></li> -->
          </ul>
        </div>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-12 footer-text">
      <p><font face="sans"><a href="https://github.com/nextcloud/nextcloud.com">MIT</a> &copy; </font> <?php echo date('Y'); ?> Nextcloud, <small><a href="/impressum">Legal Notice</a> </p></small>
  </div>
</div>
</footer>

<script type="text/javascript" async defer
  src="https://apis.google.com/js/platform.js?publisherid=104036748063781940910">
</script>

<?php wp_footer(); ?>
 
