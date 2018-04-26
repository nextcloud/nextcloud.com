<head>
<script>
    require(["require.config"], function() {
        require(["pages/register"])
    });
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/enterprise.css" rel="stylesheet">
</head>
<?php
require_once 'vendor/autoload.php';
use GeoIp2\Database\Reader;
$reader = new Reader(realpath(dirname(__FILE__)).'/assets/GeoLite2-City/GeoLite2-City.mmdb');

// Replace "city" with the appropriate method for your database, e.g.,
// "country".
$location = $location = $reader->city("77.129.59.202")->location;
?>
<section class="enterprise-hero-section second-menu">
	<div class="container-fluid background">
		<div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Welcome');?></h1>
				<h2><?php echo $l->t('We selected the closest provider for you!');?></h2>
			</div>
		</div>
	</div>
  <div id="register" class="container" data-ll="<?php echo htmlspecialchars(json_encode($location)) ?>">
  </div>
  <div id="register-details" class="container"><p></p></div>
</section>
