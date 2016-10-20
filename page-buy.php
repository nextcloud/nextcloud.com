<!-- <?php get_template_part('templates/parts/title'); ?> -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="container-fluid background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1>Contact us for a quote</h1>
				<h2>Our sales team will help you determine the best solution for your business needs</h2>
			</div>
		</div>
	</div>
</div>

<div class="container">
<!-- 	<a name="contact"></a> -->
	<div class="contact">
		<h3>Contact us for more information and a quote fitting your use case.</h3>
		<form name="sales" method="post" action="../salessubmit/">
				<p><label for="yourname">Your name<br>
				<input  type="text" name="yourname" maxlength="60" size="60"></label></p>
				<p><label for="email">Email<br>
				<input  type="text" name="email" maxlength="80" size="60"></label></p>
				<p><label for="organization">Organization<br>
				<input  type="text" name="organization" maxlength="100" size="60" placeholder=""></label></p>
				<p><label for="phone">Phone number<br>
				<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code"></label></p>
				<p><label for="comments">Your message<br />
				<textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="Let us know how we can help you!"></textarea></label></p>
				<td colspan="2" style="text-align:center">
				<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
				<input type="submit" value=" Submit inquiry ">
		</form>
	</div>
</div>
