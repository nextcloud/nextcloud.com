<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/globalscale.css?v=2" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/whitepapers/gs-thumbnail-banner.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/whitepapers/gs-thumbnail-banner.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/whitepapers/gs-thumbnail-banner.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/whitepapers/gs-thumbnail-banner.png">
require(["require.config"], function() {
	require(["modules/youtubePlayer"])
});
</script>
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</head>
<div class="background globalscale-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Global Scale');?></h1>
				<h2><?php echo $l->t('Extreme scalability at commodity cost');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--video">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 video">
			<div data-type="youtube" data-video-id="I5wcLS9xxMw"></div>
			<iframe width="100%" height="450" src="https://www.youtube-nocookie.com/embed/I5wcLS9xxMw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<p class="section--paragraph text-center"><?php echo $l->t('<span class="avoidwrap">Nextcloud Global Scale delivers a true globally scalable solution</span> <span class="avoidwrap">for deployments with hundreds of millions of users<span>, <span class="avoidwrap">giving unprecedented control over the locality of data</span> <span class="avoidwrap">and delivering dramatic cost reduction</span>');?></p>

			<blockquote class=""><?php echo $l->t('Global Scale has been in production since 2017 in a commercial setup for tens of millions of users across 4 continents. Several other customers have deployed or began experimenting with Global Scale in the last years.');?></blockquote>
            <p class="section--paragraph"><?php echo $l->t('Learn more about our <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-and-collabora-scale-real-time-collaboration-to-hundreds-of-millions-of-users/">integration with Collabora Online</a> and how <a class="hyperlink" href="https://nextcloud.com/press/pr20191016/">French universities experiment with Global Scale.</a>');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--whitepaper">
	<div class="container text-center">
	<div class="row">
    <div class="col-md-offset-4 col-md-4 wp-center">
        <p>
<!-- 		<a href="<?php echo get_template_directory_uri(); ?>/assets/files/global-scale-whitepaper.pdf" class="button button--blue button--large button--arrow"><?php echo $l->t('Download our whitepaper');?> <i class="icon-arrow-circle-o-right icon"></i></a> -->
            <div class="row "><img class="responsive text-center" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/gs-thumbnail-banner.png"/></div>
            <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                <p><label for="email"><?php echo $l->t('Download our whitepaper!');?><br>
                <input class="mail text-center" type="text" name="email" maxlength="80" placeholder="Enter your email"></label></p>
                <td colspan="2">
                <div class="row text-center">
                    <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                </div>
                </td>
                <input type="hidden" name="segmentId" value="4">
                <p><input class="button button--blue button--large" type="submit" value=" Get the whitepaper "></p>
            </form>
        </p>
	</div>
    </div>
	</div>
</section>

<section class="section--offer quote">
	<div class="container">
		<h1 class="section--heading-1 text-center"><?php echo $l->t('The Next Generation');?></h1>
		<h3 class="section--intro text-center"><?php echo $l->t('Nextcloud Global Scale was designed to lift enterprise collaboration to a new level, overcoming limitations in building large scale file storage, sync & share solutions. It delivers significant cost savings and increased flexibility.');?></h3>
		<div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="text-center"><?php echo $l->t('Improve productivity and communication while cutting operational expenses with the most scalable content collaboration platform.');?></p>
                <div class="text-center morebuttondiv">
                    <a href="<?php echo home_url('buy') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
                </div>
            </div>
        </div>
	</div>
</section>

<section class="section--scalability">
	<div class="container">
		<h3 class="section--intro text-center"><?php echo $l->t('Scalability');?></h3>
		<h1 class="section--heading-1 text-center"><?php echo $l->t('Go orders of magnitude further');?></h1>
		<div class="scalability__ilustration"></div>
		<h3 class="section--intro text-center"><?php echo $l->t('It is hard to scale typical on-premises file sync & share architectures over a hundred thousand users. The shared components like storage, database and load balancers become expensive bottlenecks.');?></h3>
		<h3 class="section--intro text-center"><?php echo $l->t('Nextcloud Global Scale is designed to scale to hundreds of millions of users.');?></h3>
	</div>
</section>

<div class="separator"></div>

<section class="section--efficiency">
	<div class="container">
		<h3 class="section--intro text-center"><?php echo $l->t('Efficiency');?></h3>
		<h1 class="section--heading-1 text-center"><?php echo $l->t('Transform your cost structure');?></h1>
		<div class="efficiency__ilustration"></div>
		<h3 class="section--intro text-center"><?php echo $l->t('At the petabyte scale, storage costs skyrocket. Database licensing costs increase exponentially at the top end and caching and hardware load balancers baloon the Total Cost of Ownership of large private cloud deployments.');?></h3>
		<h3 class="section--intro text-center"><?php echo $l->t('Nextcloud Global Scale enables deployment on commodity hardware and software, dramatically decreasing costs for large systems.');?></h3>
	</div>
</section>

<div class="separator"></div>

<section class="section--distribution">
	<div class="container">
		<h3 class="section--intro text-center"><?php echo $l->t('Flexibility');?></h3>
		<h1 class="section--heading-1 text-center"><?php echo $l->t('Finetune your business');?></h1>
		<div class="distribution__ilustration"></div>
		<h3 class="section--intro text-center"><?php echo $l->t('Legal, business, security and performance considerations dictate that data can be precisely positioned. Creating multiple independent instances to achieve low latency or keep data in a specific jurisdiction increases management costs, complexity and security risks.');?></h3>
		<h3 class="section--intro text-center"><?php echo $l->t('Nextcloud Global Scale distributes data over multiple data centers while acting as a unified instance to users and administrators.');?></h3>
	</div>
</section>

<section class="section--how">
<div class="container">
	<h3 class="section--intro text-center"><?php echo $l->t('Decentralize');?></h3>
	<h1 class="section--heading-1 text-center"><?php echo $l->t('How it works');?></h1>
<!-- 	<div class="lifecycle__ilustration"></div> -->
	<h3 class="section--intro text-center"><?php echo $l->t('Nextcloud Global Scale works by decentralizing data to independent nodes and introducing three new components to manage the interaction between servers.');?></h3>
</div>

<div class="container components">
	<div class="row">
<!-- 		<h1 class="header"><?php echo $l->t('Components');?></h1> -->
		<div class="col-md-6 box">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/globalscale/decentralize.svg">
			<h1><?php echo $l->t('Decentralization');?></h1>
			<p><?php echo $l->t('We split users and their data over independent nodes, each of which runs on affordable, commodity hardware. Each would typically consist of a tuple of at least two machines which run Nextcloud with local storage, database and cache. They use central remote logging and authentication and can be managed easily through a technology like docker.');?></p>
		</div>
		<div class="col-md-6 box">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/globalscale/GSS.svg">
			<h1><?php echo $l->t('Global Site Selector');?></h1>
			<p><?php echo $l->t('The Global Site Selector redirects users to the right node at first login, whether the access is through Web, WebDAV or REST. It authenticates users through a central user directory, looks up their node and redirects them. The user saves the redirect locally to bypass the GSS in daily operation.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 box">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/globalscale/lookup.svg">
			<h1><?php echo $l->t('Lookup Server');?></h1>
			<p><?php echo $l->t('The Lookup Server stores the physical location of users and mediates sharing of data. It provides the user location, tracks Federated Sharing IDs and stores user metadata like QoS metrics.');?></p>
		</div>
		<div class="col-md-6 box">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/globalscale/balancer.svg">
			<h1><?php echo $l->t('Balancer');?></h1>
			<p><?php echo $l->t('The Balancer is responsible for monitoring the various nodes and their storage, cpu, ram and network utilization. It can mark nodes as online or offline and initiate the migration of user accounts to different nodes based on data in the Lookup Server like business or legal requirements, QoS settings or user location.');?></p>
		</div>
	</div>
</div>
</section>

<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="text-center">
				<p class="section--paragraph"><?php echo $l->t('Achieve a new level in scalability, flexibility and cost efficiency. Contact sales today!');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('enterprise/buy/') ?>" class="button button--large button--arrow"><?php echo $l->t('Contact Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
