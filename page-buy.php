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
	<div class="pricingdetails">
		<h2>Pricing details</h2>
		<table class="table table-striped">
			<tr class="table-center">
				<td class="">
				</td>
				<td class="ebasic" style="min-width:250px"><span title="Perfect for non-mission-critical file sync and share at small or medium organizations."><i class="icon-briefcase enterprise-icon"></i>
					<!--<img class="responsive" style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/small.png" alt="for small businesses" />--><br />
					Basic<br />
					From <a href="#contact"> 1500/year</a></span>
				</td>
				<td class="epro" style="min-width:250px"><span title="When you need advanced communication and collaboration capabilities with expert support behind it."><i class="icon-building enterprise-icon"></i>
					<!--<img class="responsive" style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/medium.png" alt="for small businesses" />--><br />
					Standard<br />
					From <a href="#contact"> 2500/year</a></span>
				</td>
				<td class="eenterprise" style="min-width:250px"><span title="When reliable file sync and share, online collaboration and communication are critical to your business."><i class="icon-industry enterprise-icon"></i>
				<!--<img class="responsive" style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/large.png" alt="for small businesses" />--><br />
					Premium<br />
					From <a href="#contact"> 3250/year</a></span>
				</td>
			</tr>
			<tr>
				<td class="">Users 51-100</td>
				<td class="ebasic price"><a href="#contact">30€/user</a></td>
				<td class="epro price"><a href="#contact">50€/user</a></td>
				<td class="eenterprise price"><a href="#contact">65€/user</a></td>
			</tr>
			<tr>
				<td class="">Users 101-250</td>
				<td class="ebasic price"><a href="#contact">20€/user</a></td>
				<td class="epro price"><a href="#contact">30€/user</a></td>
				<td class="eenterprise price"><a href="#contact">50€/user</a></td>
			</tr>
			<tr>
				<td class="">Users 251-1000</td>
				<td class="ebasic price"><a href="#contact">15€/user</a></td>
				<td class="epro price"><a href="#contact">20€/user</a></td>
				<td class="eenterprise price"><a href="#contact">30€/user</a></td>
			</tr>
			<tr>
				<td class="">Users 1001-2500</td>
				<td class="ebasic price"><i class="icon-times"></i></td>
				<td class="epro price"><a href="#contact">15€/user</a></td>
				<td class="eenterprise price"><a href="#contact">20€/user</a></td>
			</tr>
			<tr>
				<td class="">Users 2501-10.000</td>
				<td class="ebasic price"><i class="icon-times"></i></td>
				<td class="epro price"><i class="icon-times"></i></td>
				<td class="eenterprise price"><a href="#contact">15€/user</a></td>
			</tr>
			<tr>
				<td class="">Users 10.001-25.000</td>
				<td class="ebasic price"><i class="icon-times"></i></td>
				<td class="epro price"><i class="icon-times"></i></td>
				<td class="eenterprise price"><a href="#contact">10€/user</a></td>
			</tr>
			<tr>
				<td class="">Users >25.000</td>
				<td class="ebasic price"><i class="icon-times"></i></td>
				<td class="epro  price"><i class="icon-times"></i></td>
				<td class="eenterprise text-center"><a href="#contact">Contact us!</a></td>
			</tr>
		</table>
	</div>

	<p class="epricevat">Prices are in Euro per year and net/excl. VAT. <span class="caret"></span><a href="#pricing" data-toggle="collapse"> pricing example</a>
		<div id="pricing" class="collapse">
			<div class="row">
				<div class="col-md-6 col-md-offset-6">
					<p>We have a tiered price list.</p>
					<p>Example for 500 users Standard Subscription:
					<table class="table table-striped">
						<tr>
							<td>
							The first 50 users:
							</td>
							<td>
								+ 2.500€
							</td>
						</tr>
						<tr>
							<td>
							User 51-100 (50*50€):
							</td>
							<td>
								+ 2.500€
							</td>
						</tr>
						<tr>
							<td>
							User 101-250 (150*30€):
							</td>
							<td>
								+ 4.500€
							</td>
						</tr>
						<tr>
							<td>
							User 251-500 (250*20€):
							</td>
							<td>
								+ 5.500€
							</td>
						</tr>
						<tr class="success">
							<td>
							total for 500 users
							</td>
							<td>
								= 14.500€
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</p>

	<a name="contact"></a>
	<div class="contact">
		<h3>Contact us for more information and a quote fitting your use case.</h3>
		<form name="sales" method="post" action="salessubmit/">
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