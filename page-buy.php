<!-- <?php get_template_part('templates/parts/title');\?> ?> -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="container-fluid background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Contact us for a quote');\?></h1>
				<h2><?php echo $l->t('Our sales team will help you determine the best solution for your business needs');\?></h2>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="pricingdetails">
		<h2><?php echo $l->t('Pricing details');\?></h2>
		<table class="table table-striped">
			<tr class="table-center">
				<td class=""></td>
				<td class="ebasic" style="min-width:250px"><span title="Perfect for non-mission-critical file sync and share at small or medium organizations."><i class="icon-briefcase enterprise-icon"></i>
					<!--<img class="responsive" style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/small.png" alt="for small businesses" />--><br />
					<?php echo $l->t('Basic<br />
					From <a href="#contact"> 1500/year</a></span>
				');\?></td>
				<td class="epro" style="min-width:250px"><span title="When you need advanced communication and collaboration capabilities with expert support behind it."><i class="icon-building enterprise-icon"></i>
					<!--<img class="responsive" style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/medium.png" alt="for small businesses" />--><br />
					<?php echo $l->t('Standard<br />
					From <a href="#contact"> 2500/year</a></span>
				');\?></td>
				<td class="eenterprise" style="min-width:250px"><span title="When reliable file sync and share, online collaboration and communication are critical to your business."><i class="icon-industry enterprise-icon"></i>
				<!--<img class="responsive" style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/large.png" alt="for small businesses" />--><br />
					<?php echo $l->t('Premium<br />
					From <a href="#contact"> 3250/year</a></span>
				');\?></td>
			</tr>
			<tr>
				<td class=""><?php echo $l->t('Users 51-100');\?></td>
				<td class="ebasic price"><?php echo $l->t('<a href="#contact">30€/user</a>');\?></td>
				<td class="epro price"><?php echo $l->t('<a href="#contact">50€/user</a>');\?></td>
				<td class="eenterprise price"><?php echo $l->t('<a href="#contact">65€/user</a>');\?></td>
			</tr>
			<tr>
				<td class=""><?php echo $l->t('Users 101-250');\?></td>
				<td class="ebasic price"><?php echo $l->t('<a href="#contact">20€/user</a>');\?></td>
				<td class="epro price"><?php echo $l->t('<a href="#contact">30€/user</a>');\?></td>
				<td class="eenterprise price"><?php echo $l->t('<a href="#contact">50€/user</a>');\?></td>
			</tr>
			<tr>
				<td class=""><?php echo $l->t('Users 251-1000');\?></td>
				<td class="ebasic price"><?php echo $l->t('<a href="#contact">15€/user</a>');\?></td>
				<td class="epro price"><?php echo $l->t('<a href="#contact">20€/user</a>');\?></td>
				<td class="eenterprise price"><?php echo $l->t('<a href="#contact">30€/user</a>');\?></td>
			</tr>
			<tr>
				<td class=""><?php echo $l->t('Users 1001-2500');\?></td>
				<td class="ebasic price"><?php echo $l->t('<i class="icon-times"></i>');\?></td>
				<td class="epro price"><?php echo $l->t('<a href="#contact">15€/user</a>');\?></td>
				<td class="eenterprise price"><?php echo $l->t('<a href="#contact">20€/user</a>');\?></td>
			</tr>
			<tr>
				<td class=""><?php echo $l->t('Users 2501-10.000');\?></td>
				<td class="ebasic price"><?php echo $l->t('<i class="icon-times"></i>');\?></td>
				<td class="epro price"><?php echo $l->t('<i class="icon-times"></i>');\?></td>
				<td class="eenterprise price"><?php echo $l->t('<a href="#contact">15€/user</a>');\?></td>
			</tr>
			<tr>
				<td class=""><?php echo $l->t('Users 10.001-25.000');\?></td>
				<td class="ebasic price"><?php echo $l->t('<i class="icon-times"></i>');\?></td>
				<td class="epro price"><?php echo $l->t('<i class="icon-times"></i>');\?></td>
				<td class="eenterprise price"><?php echo $l->t('<a href="#contact">10€/user</a>');\?></td>
			</tr>
			<tr>
				<td class=""><?php echo $l->t('Users >25.000');\?></td>
				<td class="ebasic price"><?php echo $l->t('<i class="icon-times"></i>');\?></td>
				<td class="epro  price"><?php echo $l->t('<i class="icon-times"></i>');\?></td>
				<td class="eenterprise text-center"><?php echo $l->t('<a href="#contact">Contact us!</a>');\?></td>
			</tr>
		</table>
	</div>

	<p class="epricevat"><?php echo $l->t('Prices are in Euro per year and net/excl. VAT. <span class="caret"></span><a href="#pricing" data-toggle="collapse"> pricing example</a>
		<div id="pricing" class="collapse">
			<div class="row">
				<div class="col-md-6 col-md-offset-6">
					<p><?php echo $l->t('We have a tiered price list.');\?></p>
					<p><?php echo $l->t('Example for 500 users Standard Subscription:
					<table class="table table-striped">
						<tr>
							<td><?php echo $l->t('
							The first 50 users:
							');\?></td>
							<td><?php echo $l->t('
								+ 2.500€
							');\?></td>
						</tr>
						<tr>
							<td><?php echo $l->t('
							User 51-100 (50*50€):
							');\?></td>
							<td><?php echo $l->t('
								+ 2.500€
							');\?></td>
						</tr>
						<tr>
							<td><?php echo $l->t('
							User 101-250 (150*30€):
							');\?></td>
							<td><?php echo $l->t('
								+ 4.500€
							');\?></td>
						</tr>
						<tr>
							<td><?php echo $l->t('
							User 251-500 (250*20€):
							');\?></td>
							<td><?php echo $l->t('
								+ 5.500€
							');\?></td>
						</tr>
						<tr class="success">
							<td><?php echo $l->t('
							total for 500 users
							');\?></td>
							<td><?php echo $l->t('
								= 14.500€
							');\?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	');\?></p>

	<a name="contact"></a>
	<div class="contact">
		<h3><?php echo $l->t('Contact us for more information and a quote fitting your use case.');\?></h3>
		<form name="sales" method="post" action="../salessubmit/">
				<p><?php echo $l->t('<label for="yourname">Your name<br>
				<input  type="text" name="yourname" maxlength="60" size="60"></label>');\?></p>
				<p><?php echo $l->t('<label for="email">Email<br>
				<input  type="text" name="email" maxlength="80" size="60"></label>');\?></p>
				<p><?php echo $l->t('<label for="organization">Organization<br>
				<input  type="text" name="organization" maxlength="100" size="60" placeholder=""></label>');\?></p>
				<p><?php echo $l->t('<label for="phone">Phone number<br>
				<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code"></label>');\?></p>
				<p><?php echo $l->t('<label for="comments">Your message<br />
				<textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="Let us know how we can help you!"></textarea></label>');\?></p>
				<td colspan="2" style="text-align:center">
				<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
				<input type="submit" value=" Submit inquiry ">
		</form>
	</div>
</div>
