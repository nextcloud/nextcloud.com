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
$reader = new Reader(realpath(dirname(__FILE__)).'/assets/GeoLite2-City/GeoLite2-City.mmdb');

// Replace "city" with the appropriate method for your database, e.g.,
// "country".
$location = $location = $reader->city($_SERVER['REMOTE_ADDR'])->location;
?>
<section class="register-hero-section second-menu">
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
  <div id="register-details" class="container"><p>Ipsum vero cupiditate et nostrum ipsa dignissimos suscipit. Consequatur et quo reprehenderit voluptates eaque adipisci. Saepe omnis assumenda similique sunt omnis. Harum a quia consectetur dolor veritatis architecto in.

Unde quia veritatis ipsam accusantium fuga. Voluptatum et modi voluptas facere qui. Eos repellendus corrupti fugiat illum possimus est magnam. Reiciendis sint est voluptatem et. Temporibus corrupti molestias voluptatem.

Recusandae eum ducimus modi dolorem aut. Quis magni quos excepturi rem dolor illo optio. Nihil earum provident ipsum quam atque et molestiae ut. Et dolor ut et dignissimos natus. Est quae hic eos eius voluptatum molestiae et atque.

Facilis et distinctio eaque. Nam sint enim eos a. Voluptates repellat ullam totam autem fugit quae nostrum eos. Maiores nesciunt adipisci assumenda.

Necessitatibus corrupti explicabo perspiciatis. Eum minima quibusdam at voluptatem fugit ut cupiditate pariatur. Aut id consequatur sed qui qui tempore. Repellendus ut optio reprehenderit recusandae. Excepturi doloribus suscipit nulla facilis dolorem quisquam. Et ipsa vel aliquid omnis velit.</p></div>
</section>
