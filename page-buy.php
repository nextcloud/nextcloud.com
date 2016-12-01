<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="background ebackground">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Contact us for a quote');?></h1>
				<h2><?php echo $l->t('Our sales team will help you determine the best solution for your business needs');?></h2>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="contact">
		<h3><?php
 echo $l->t('Contact us for more information and a quote fitting your use case.');?></h3>
		<form name="sales" method="post" action="../salessubmit/">
				<p><?php
 echo $l->t('<label for="yourname">Your name<br>
				<input  type="text" name="yourname" maxlength="60" size="60"></label>');?></p>
				<p><?php
 echo $l->t('<label for="email">Email<br>
				<input  type="text" name="email" maxlength="80" size="60"></label>');?></p>
				<p><?php
 echo $l->t('<label for="organization">Organization<br>
				<input  type="text" name="organization" maxlength="100" size="60" placeholder=""></label>');?></p>
				<p><?php
 echo $l->t('<label for="phone">Phone number<br>
				<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code"></label>');?></p>
				<p><?php
 echo $l->t('<label for="comments">Your message<br />
				<textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="Let us know how we can help you!"></textarea></label>');?></p>
				<td colspan="2" style="text-align:center">
				<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
				<input type="submit" value=" Submit inquiry ">
		</form>
	</div>
</div>
