<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/globalscale.css" rel="stylesheet">
<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/jquery-ui.css" rel="stylesheet" />
<script>
	require(["require.config"], function() {
		require(["vendor/jquery.min", "vendor/jquery.ui", "bootstrap"],
			function ($, jqueryui) {
				require(["vendor/jquery.youtubepopup"],
					function (jqyoutube) {
						jQuery("a.youtube").YouTubePopup({ hideTitleBar: true });
					}
				);
			}
		);
	});
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
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
			<div class="yt-img-overlay">
				<a class="youtube" id="I5wcLS9xxMw" href="https://www.youtube.com/watch?v=I5wcLS9xxMw" title="Explaining Global Scale">
					<img class="img-responsive featureimg" src="https://img.youtube.com/vi/I5wcLS9xxMw/maxresdefault.jpg" title="Explaining Global Scale" style='margin: 0 0 0 0; padding: -10% 0 -10% 0;' /> <!-- style different per image! -->
					<div class="yt-play-btn">
						<i></i>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-8 col-md-offset-2 text-center revealOnScroll">
			<p class="section--paragraph"><?php echo $l->t('<span class="avoidwrap">Nextcloud Global Scale delivers a true globally scalable solution</span> <span class="avoidwrap">for deployments with hundreds of millions of users<span>, <span class="avoidwrap">giving unprecedented control over the locality of data</span> <span class="avoidwrap">and delivering dramatic cost reduction</span>');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--whitepaper">
	<div class="container text-center revealOnScroll">
	<div class="row">
    <div class="col-md-offset-4 col-md-4">
        <p>
<!-- 		<a href="<?php echo get_template_directory_uri(); ?>/assets/files/global-scale-whitepaper.pdf" class="button button--blue button--large button--arrow"><?php echo $l->t('Download our whitepaper');?> <i class="icon-arrow-circle-o-right icon"></i></a> -->
            <form name="whitepaper" method="post" action="../globalscale/whitepapersubmit">
                <p><label for="email"><?php echo $l->t('Download our whitepaper!');?><br>
                <input class="mail" type="text" name="email" maxlength="80" size="30" placeholder="Enter your email"></label></p>
                <td colspan="2" style="text-align:center">
                <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                <input class="button button--blue button--large" type="submit" value=" Get the whitepaper ">
            </form>
        </p>
	</div>
    </div>
	</div>
</section>

<section class="section--offer quote">
	<div class="container">
		<h2 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('The Next Generation');?></h2>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud Global Scale was designed to lift enterprise collaboration to a new level, overcoming limitations in building large scale file storage, sync & share solutions. It delivers significant cost savings and increased flexibility.');?></p>
	</div>
</section>

<section class="section--scalability">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Scalability');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Go orders of magnitude further');?></h3>
		<div class="scalability__ilustration"></div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('It is hard to scale typical on-premise file sync & share architectures over a hundred thousand users. The shared components like storage, database and load balancers become expensive bottlenecks.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud Global Scale is designed to scale to hundreds of millions of users.');?></p>
	</div>
</section>

<div class="separator"></div>

<section class="section--efficiency">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Efficiency');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Transform your cost structure');?></h3>
		<div class="efficiency__ilustration"></div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('At the petabyte scale, storage costs skyrocket. Database licensing costs increase exponentially at the top end and caching and hardware load balancers baloon the Total Cost of Ownership of large private cloud deployments.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud Global Scale enables deployment on commodity hardware and software, dramatically decreasing costs for large systems.');?></p>
	</div>
</section>

<div class="separator"></div>

<section class="section--distribution">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Flexibility');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Finetune your business');?></h3>
		<div class="distribution__ilustration"></div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Legal, business, security and performance considerations dictate that data can be precisely positioned. Creating multiple independent instances to achieve low latency or keep data in a specific jurisdiction increases management costs, complexity and security risks.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud Global Scale distributes data over multiple data centers while acting as a unified instance to users and administrators.');?></p>
	</div>
</section>

<section class="section--how">
<div class="container">
	<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Decentralize');?></p>
	<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('How it works');?></h3>
<!-- 	<div class="lifecycle__ilustration"></div> -->
	<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud Global Scale works by decentralizing data to independent nodes and introducing three new components to manage the interaction between servers.');?></p>
</div>

<div class="container components">
	<div class="row">
<!-- 		<h1 class="header revealOnScroll"><?php echo $l->t('Components');?></h1> -->
		<div class="col-md-6 box revealOnScroll">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/globalscale/decentralize.svg">
			<h1><?php echo $l->t('Decentralization');?></h1>
			<p><?php echo $l->t('We split users and their data over independent nodes, each of which runs on affordable, commodity hardware. Each would typically consist of a tuple of at least two machines which run Nextcloud with local storage, database and cache. They use central remote logging and authentication and can be managed easily through a technology like docker.');?></p>
		</div>
		<div class="col-md-6 box revealOnScroll">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/globalscale/GSS.svg">
			<h1><?php echo $l->t('Global Site Selector');?></h1>
			<p><?php echo $l->t('The Global Site Selector redirects users to the right node at first login, whether the access is through Web, WebDAV or REST. It authenticates users through a central user directory, looks up their node and redirects them. The user saves the redirect locally to bypass the GSS in daily operation.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 box revealOnScroll">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/globalscale/lookup.svg">
			<h1><?php echo $l->t('Lookup Server');?></h1>
			<p><?php echo $l->t('The Lookup Server stores the physical location of users and mediates sharing of data. It provides the user location, tracks Federated Sharing IDs and stores user metadata like QoS metrics.');?></p>
		</div>
		<div class="col-md-6 box revealOnScroll">
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
			<div class="col-md-8 col-md-offset-2 text-center revealOnScroll">
				<p class="section--paragraph"><?php echo $l->t('Achieve a new level in scalability, flexibility and cost efficiency. Contact sales today!');?></p>
				<div class="text-center morebuttondiv">
					<a href="/enterprise/buy/" class="button button--large button--arrow"><?php echo $l->t('Contact Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
