<head>
<script>
    require(["require.config"], function() {
        require(["pages/register"])
    });
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/register.css" rel="stylesheet">
</head>
<?php
require_once 'vendor/autoload.php';
use GeoIp2\Database\Reader;
$reader = new Reader(realpath(dirname(__FILE__)) . '/assets/GeoLite2-City/GeoLite2-City.mmdb');

// Replace "city" with the appropriate method for your database, e.g.,
// "country".
try {
	$location = $location = $reader->city(whatismyip())->location;
} catch(Exception $e) {
	$location = false;
}
?>
<div class="background register-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Your choice');?></h1>
				<h2><?php echo $l->t('pick a trusted provider and sign up!');?></h2>
			</div>
		</div>
	</div>
</div>
<section class="section--intro">
</section>
<section class="section--providers">
  <div id="register" class="container"
  	   data-ll="<?php echo htmlspecialchars(json_encode($location)) ?>"
  	   data-ocsapi="<?php echo array_key_exists('HTTP_OCS_APIREQUEST', $_SERVER) ?>">
  </div>
  <div id="register-details" class="container"><p></p></div>
</section>
