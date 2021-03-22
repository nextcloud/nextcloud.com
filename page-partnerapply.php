<head>
<!-- 	I need this for the last script on the page to work, require.js seems to not make jquery available in the page js :( -->
	<script src='<?php echo get_template_directory_uri(); ?>/assets/js/old/vendor/jquery-1.10.2.min.js'></script>

	<script>
	require(["require.config"], function() {
		require(["pages/order" ])
	});
	</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/partnerprogramapply.css?v=2" rel="stylesheet">
</head>

<section class="hero-section">
	<div class="background partnerprogram-background">
		<div class="container">
			<div class="col-md-6 topheader">
				<h1>Partner program</h1>
				<h2>Become part of the success story</h2>
			</div>
		</div>
	</div>
</section>

<?php

$int1 = random_int(0, 15);
$int2 = random_int(0, 50);
$salt = bin2hex(random_bytes(5));
$hash = hash('sha256', $salt . ($int1 + $int2));
$checksum = $salt . ':' . $hash;

$image = imagecreate(100, 20);
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 3, 2, $int1 . ' + ' . $int2, $text_color);

ob_start();
imagepng($image);
$imagestring = ob_get_contents();
ob_end_clean();
imagedestroy($image);
?>

<section class="section--contact-form">
<div class="container">
    <div class="row">
        <div class="col-md-12">
		<p>Thanks for your interest in becoming a Nextcloud partner. Please fill out the following form - our partnership team will contact you shortly.</p>
        </div>
	</div>
	<form name="sales" method="post" action="../partnerapplysubmit/">
        <div class="row">
            <div class="col-md-12">
				<p><label for="yourname">Your name<br>
				<input  type="text" name="yourname" maxlength="60" size="60"></label></p>
				<p><label for="email">Corporate email<br>
				<input  type="text" name="email" maxlength="80" size="60"></label></p>
				<p><label for="organization">Company<br>
				<input  type="text" name="organization" maxlength="100" size="60" placeholder="Name of your organization"></label></p>
                <p><label for="employees">How many employees does your company have?<br>
				<input  type="text" name="employees" maxlength="100" size="60" placeholder="How many employees do you have"></label></p>
				<p><label for="role">Your role<br>
				<input  type="text" name="role" maxlength="100" size="60" placeholder="Your job title"></label></p>
				<p><label for="phone">Phone number<br>
				<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code (00 or +XX)"></label></p>
				<p><label for="businessmodel">Which option best describes your business model?<br>
                <select name="businessmodel">
                    <option value="reseller">Reseller - you want to set up and manage Nextcloud Enterprise instances for your customers.</option>
                    <option value="hosting-provider">Hosting Provider - you want to host Nextcloud Enterprise instances for your customers.</option>
                    <option value="hardware-manufacturing">Hardware Manufacturer - you want to sell hardware with Nextcloud Enterprise pre-installed.</option>
                    <option value="software-development">Software developer -  you want to integrate Nextcloud with your product.</option>
                    <option value="distribution">Distribution - you want to resell Nextcloud Enterprise to your partners.</option>
                </select></label></p>
                <p>If multiple models fit, pick the closest - we can discuss the details later.</p>
                <p><label for="customers">Who is your target customer?<br>
                <select name="customers">
                    <option value="b2b">Organizations and enterprises.</option>
                    <option value="b2c">Private/home users.</option>
                    <option value="both">Both.</option>
                </select></label></p>
                <p><label for="geography">Where do you primarily offer your services?<br>
                <select name="geography">
                    <option value="africa">Africa</option>
                    <option value="Asia">Asia</option>
                    <option value="Pacific">Australia and Pacific</option>
                    <option value="South-Americas">Central and South Americas</option>
                    <option value="East-Europe">Eastern Europe and Russia</option>
                    <option value="Middle-East">Middle east</option>
                    <option value="Central-Europe">Rest of Europe</option>
                    <option value="USA-Canada">USA and Canada</option>
                </select></label></p>
                <p><label for="experience">How much experience do you have already with Nextcloud deployments?<br>
                <select name="experience">
                    <option value="None">None</option>
                    <option value="Basic">We did one or two business or a few dozen private customer setups</option>
                    <option value="Significant">We have dozens of businesses or hundreds of private users already</option>
                </select></label></p>
				<p><label for="comments">As partner, what value would you bring to Nextcloud and its customers?<br />
				<textarea name="comments" maxlength="2000" cols="80" rows="8" placeholder="What makes your offering special?"></textarea></label></p>
				<p><input type="checkbox" id="gdprcheck" name="gdprcheck" value="gdprchecked"><label for="gdprcheck"> I agree with the Nextcloud privacy policy and understand my data will be processed so Nextcloud can reach out to me.<br /></p>
				<td colspan="2" style="text-align:center">
				<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
				<p><label for="captcha">Please calculate the following sum <span></span><br>
				<img src="data:image/png;base64,<?php echo base64_encode($imagestring); ?>"><br>
				<input  type="text" name="captcha" maxlength="20" size="20" placeholder="13"></label></p>
				<input  type="hidden" name="checksum" value="<?php echo $checksum;?>">
				<input type="submit" value=" Submit inquiry " class="button button--blue">
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <p>We respect your privacy! If you fill in this form, we will reach out to send you an offer and might also contact you with relevant information like a local event or workshop we are organizing. We never sell your data - any mails you get will be from us. <a href="<?php echo home_url('privacy') ?>" class="hyperlink">See our privacy policy here.</a></p>
        </div>
    </div>
</div>
</section>
