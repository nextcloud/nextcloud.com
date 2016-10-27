<?php 

// Include translation file
require_once __DIR__ . '/l10n.php';

// Base file to handle each page request
require get_template_directory().'/config.php';
require get_template_directory().'/strings.php';
// If news then include nothing
if(is_page('oc-news') || is_page('blogfeed')) {
	include roots_template_path();
} else { 

/**
 * Pages that still use the old layout and haven't been migrated
 */
$oldPages = [
	'404',
	'5years',
	'about',
	'advisories',
	'advisory',
	'agreement',
	'android',
	'appform',
	'appform-submit',
	'apply',
	'apply2',
	'box',
	'changelog',
	'code-of-conduct',
	'collaboraonline',
	'community',
	'conf',
	'conference-program',
	'confinfo',
	'confsubscribe',
	'connect',
	'consulting',
	'contact',
	'contactform',
	'contactsubmit',
	'contribute',
	'contributors',
	'design',
	'desktop',
	'devices',
	'events',
	'faq',
	'features',
	'federation',
	'hackathon',
	'history',
	'impressum',
	'install',
	'install-backup',
	'meetups',
	'news',
	'newsletter',
	'nine',
	'pidrive',
	'policy',
	'pr20160602',
	'pr20160614',
	'pr20160705',
	'pr20160719',
	'pr20160721',
	'pr20160725',
	'pr20160812',
	'pr20160825',
	'pr20160901',
	'pr20160916',
	'pr20160929',
	'pr20161027',
	'press',
	'privacy',
	'promote',
	'providers',
	'providersubmit',
	'release-channels',
	'salessubmit',
	'securesharesubmit',
	'securesharing',
	'security',
	'sharing',
	'speaking',
	'spreedbox',
	'support',
	'team',
	'thanks',
	'thankyou',
	'theming',
	'threat-model',
	'trademarks',
	'translation',
	'user',
	'webrtc',
	'workflow'

];
function is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}

$currentPage = strtolower(get_post()->post_name);
$oldPage = true;
if(in_array($currentPage, $oldPages) || is_blog()) {
	// It's an old page, use the old template
	get_template_part('templates/head-old');
} else {
	// It's a new page, use the new template
	get_template_part('templates/head');
	$oldPage = false;
}

?>
  <body <?php body_class(); ?>>

    <!--[if lt IE 8]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
      </div>
    <![endif]-->

    <?php
		get_template_part('templates/header-top-navbar');

		// The basic translation for the files
		$l = new L10N(get_post()->post_name);
	?>
	<?php if($oldPage === true): ?>
		<div class="wrap container" role="document">
		  <div class="content row">
		<main class="main <?php echo roots_main_class(); ?>" role="main">
		  <?php include roots_template_path(); ?>
		</main><!-- /.main -->
		  </div><!-- /.content -->
		</div><!-- /.wrap -->
	<?php else: ?>
		<?php include roots_template_path(); ?>
	<?php endif; ?>

	<?php require get_template_directory().'/templates/footer.php'; ?>

    <?php if(PIWIKTRACKING) { get_template_part('templates/piwik-tracking'); } ?>

  </body>
</html>
<?php } ?>
