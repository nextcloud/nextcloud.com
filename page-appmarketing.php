<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/appdev.css?v=2" rel="stylesheet">
    <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta name=”Description” content="Develop for Nextcloud! Write a new app, extend Nextcloud or integrate other software.">

<script>
	require(["require.config"], function() {
		require(["bootstrap"])
	});
</script>
</head>

<div class="background appdev-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Develop for Nextcloud');?></h1>
				<h2><?php echo $l->t('<span class="avoidwrap">Write new applications</span>, <span class="avoidwrap">extend Nextcloud</span> <span class="avoidwrap">or integrate other software</span>');?></p>
			</div>
		</div>
	</div>
</div>
<section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>If you'd like to promote your app with a post on our blog or even look for ways to monetize an app together with us, contact us now!
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form name="contact" method="post" action="appmarketingsubmit/">
            <div class="row">
                <div class="col-md-8">
                    <p><label for="yourname">Your name<br>
                    <input  type="text" name="yourname" maxlength="60" size="60"></label></p>
                    <p><label for="email">Email<br>
                    <input  type="text" name="email" maxlength="80" size="60"></label></p>
                    <p><label for="organization">Organization <small>(say <em>private</em> if none)</small><br>
                    <input  type="text" name="organization" maxlength="100" size="60" placeholder=""></label></p>
                    <p><label for="comments">Your message<br />
                    <textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="Let us know what your plans are and how we can help or how you would like to collaborate!"></textarea></label></p>
                    <input type="submit" value=" Submit ">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</section>
