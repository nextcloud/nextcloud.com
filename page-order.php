<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/order.css" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- 	<script src='<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.min.js'></script> -->
	<script>
	require(["require.config"], function() {
		require(["modules/submenu", "pages/order"])
	});
	</script>
</head>
<section class="buy-hero-section second-menu">
	<div class="container-fluid background buy-background">
		<div class="container">
			<div class="row">
				<div class="col-md-6 topheader">
					<h1><?php echo $l->t('Order Nextcloud');?></h1>
					<h2><?php echo $l->t('Order your Nextcloud subscription online');?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a class="btn btn-primary" href="/buy"><?php echo $l->t('get a quote');?></a>
			<a class="btn btn-primary" href="/pricing"><?php echo $l->t('pricing plans');?></a>
			<a class="btn btn-primary" href="/enterprise"><?php echo $l->t('enterprise offering');?></a>
		</div>
	</div>
</section>

<div class="container">
	<h2><?php echo $l->t('Nextcloud helps you be successful');?></h2>
	<p><?php echo $l->t('You run your own Nextcloud server, keeping your data in-house and under control. A support subscription from Nextcloud makes sure it works.');?></p>
	<?php echo $l->t('You will be able to contact our support team for a speedy answer to questions and fixes for problems you encounter; you can use our <a class="hyperlink" href="https://nextcloud.com/migration">migration support</a> or add additional capabilities with our <a class="hyperlink" href="/outlook">Outlook add-in</a> or <a class="hyperlink" href="/collabora">Online Office</a>. Learn about <a class="hyperlink" href="/enterprise">what our Enterprise Subscription offers here</a> and see answers in our <a class="hyperlink" href="pricing/#FAQ">Frequently Asked Questions</a>');?></p>
	<p><?php echo $l->t('Using this form, you can order a Basic or Standard Support Subscription for up to 250 users. If you need more users, other options or an Enterprise Support Subscription, <a class="hyperlink" href="/enterprise/buy">please contact sales for a quote.</a>');?></p>
	<div class="contact">
		<h3><?php echo $l->t('Fill in the form below to receive a contract and invoice from us and get started!');?></h3>
		<form id="orderform" name="orderform" method="post" action="../ordersubmit/?staging=true">
				<p><?php echo $l->t('<label for="yourname">Contact person<br>
				<input  type="text" name="yourname" maxlength="60" size="60"></label>');?></p>
				<p><?php echo $l->t('<label for="email">Email<br>
				<input  type="text" name="email" maxlength="80" size="60"></label>');?></p>
				<p><?php echo $l->t('<label for="organization">Organization<br>
				<input  type="text" name="organization" maxlength="100" size="60" placeholder="Name of your organization"></label>');?></p>
				<p><?php echo $l->t('<label for="address">Address<br />
				<textarea  name="address" maxlength="1000" cols="80" rows="8" placeholder="Full address."></textarea></label>');?></p>
				<p><?php echo $l->t('<label for="address">Billing address<br />
				<textarea  name="billing" maxlength="1000" cols="80" rows="8" placeholder="If different from above, the billing address."></textarea></label>');?></p>
				<p><?php echo $l->t('<label for="phone">Phone number<br>
				<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code"></label>');?></p>
				<p><?php echo $l->t('<label for="vat">VAT ID (Europe only)<br>
				<input  type="text" name="vat" maxlength="60" size="60" placeholder="Your VAT ID"></label>');?></p>
				<p><label for="users"><?php echo $l->t('Number of seats');?><br>
				<select name="users" onChange="doCalculation()">
					<option value="50">50</option>
					<option value="75">75</option>
					<option value="100">100</option>
					<option value="150">150</option>
					<option value="200">200</option>
					<option value="250">250</option>
				</select></label></p>
				<p><label for="edition"><?php echo $l->t('Which support level would you like? (<a href="/pricing" target="_blank">details on pricing</a>)');?><br>
				<select id="edition" name="edition" onChange="doCalculation()">
					<option value="basic">Basic</option>
					<option value="standard">Standard</option>
					<option value="enterprise">Premium</option>
				</select></label>
				<div class="getenterprisequote" id="getenterprisequote" style="display:none;"><p><a class="hyperlink" href="/buy">Ask a quote from our sales team for the enterprise subscription.</a></p></div>
				</p>
				<p><label for="duration"><?php echo $l->t('Length of contract');?><br>
				<select name="duration" onChange="doCalculation()">
					<option value="1">One year</option>
					<option value="2">2nd year (10% discount)</option>
					<option value="3">3rd year (15% discount)</option>
				</select></label><br>
				<input type="checkbox" name="edugov" value="edugov" onChange="doCalculation()"> <?php echo $l->t(' We are education/government/charity (discount applies)');?></p>
				<p><h3><?php echo $l->t('Optional features (only with a Standard or <a class="hyperlink" href="/pricing">Enterprise Subscription</a>)');?></h3>
				<input disabled id="collabora" type="checkbox" name="collabora" value="collabora" onChange="doCalculation()"> <?php echo $l->t(' Include <a class="hyperlink" href="/collabora" target="_blank">Collabora Online</a> (€ 16/user)');?><br/>
				<!--<input disabled type="checkbox" name="spreed" value="spreed" onChange="doCalculation()"> <?php echo $l->t(' Include <a class="hyperlink" href="/webrtc" target="_blank">Spreed audio/video chat</a> (Eur 5/user)');?><br/>-->
				<input disabled type="checkbox" name="outlook" value="outlook" onChange="doCalculation()"> <?php echo $l->t(' Include <a class="hyperlink" href="/outlook" target="_blank">our Outlook add-in</a> (€ 5/user)');?><br/>
				<input disabled type="checkbox" name="remoteinstall" value="remoteinstall" onChange="doCalculation()"> <?php echo $l->t(' Include a one-day remote installation/integration support video call (€ 990)');?><br/>
				<!--<input disabled type="checkbox" name="branding" value="branding" onChange="doCalculation()"> <?php echo $l->t(' Include branded clients (Eur 6000)');?><br/>-->
				</p>
				<h2 class="price"><?php echo $l->t('Price: ');?><span id="totalprice"></span><br></h2>
				<p><input type="checkbox" name="dollars" value="dollars" onChange="doCalculation()"> <?php echo $l->t(' in dollars');?></p>
				<p><?php echo $l->t('<label for="comments">Notes<br />
				<textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="Questions, comments? Interested in Spreed, Branding etcetera..."></textarea></label>');?></p>
				<p><input type="checkbox" name="terms" value="terms" onChange="doCalculation()"> <?php echo $l->t('I have read and agree to the');?> <a class="hyperlink" href=""<?php echo get_template_directory_uri(); ?>/assets/files/termsfornextcloudorder.pdf"><?php echo $l->t('terms and conditions');?></a></p>
				<td colspan="2" style="text-align:center">
<!-- 				<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div> -->
				<input type="submit" name="submit" value=" Order Now " disabled="disabled">
		</form>
	</div>
</div>

<script>
		function getUsersPrice() {
		    var usersPrice=0;
		    //Get a reference to the form id="orderform"
		    var theForm = document.forms["orderform"];
		    //Get a reference to the select id="users"
		    var usersNumber = theForm.elements["users"];
			var chosenEdition = theForm.elements["edition"];
			var edugovDiscount = theForm.elements["edugov"];
		    //set users price based on the number of users chosen and the edition. Yes, we could calculate this but that is complicated and it is easier updated as well this way.
		    if(chosenEdition.value=="basic") 
		    {
				if(usersNumber.value==50)
				{
					usersPrice = 1900;
				}
				if(usersNumber.value=="75")
				{
					usersPrice = 2650;
				}
				if(usersNumber.value=="100")
				{
					usersPrice = 3400;
				}
				if(usersNumber.value=="150")
				{
					usersPrice = 4400;
				}
				if(usersNumber.value=="200")
				{
					usersPrice = 5400;
				}
				if(usersNumber.value=="250")
				{
					usersPrice = 6400;
				}
			}
		    if(chosenEdition.value=="standard") 
		    {
				if(usersNumber.value=="50")
				{
					usersPrice = 2500;
				}
				if(usersNumber.value=="75")
				{
					usersPrice = 3750;
				}
				if(usersNumber.value=="100")
				{
					usersPrice = 5000;
				}
				if(usersNumber.value=="150")
				{
					usersPrice = 6500;
				}
				if(usersNumber.value=="200")
				{
					usersPrice = 8000;
				}
				if(usersNumber.value=="250")
				{
					usersPrice = 9500;
				}
			}
			
			if(edugovDiscount.checked==true)
			{
				var usersPrice = usersPrice * 0.80;
			}
		    //finally we return usersPrice
		    return usersPrice;
		}

		function multiYearDiscount(priceDiscount){
		    //Get a reference to the form id="orderform", to education discount and duration
		    var theForm = document.forms["orderform"];
		    var edugovDiscount = theForm.elements["edugov"];
			var contractLength = theForm.elements["duration"];
			
			if(contractLength.value==2)
			{
				priceDiscount *= 1.80;
			}
			if(contractLength.value==3)
			{
				priceDiscount *= 2.55;
			}
			
			return priceDiscount;
		}
		
		function getOptionsPrice() {
		    var optionsPrice=0;
			var collaboraPrice = 0;
		    //Get a reference to the form id="orderform"
		    var theForm = document.forms["orderform"];
		    //Get a reference to the select id="users" and the other elements needed
		    var includeCollabora = theForm.elements["collabora"];
			var includeOutlook = theForm.elements["outlook"];
			var includeRemoteinstall = theForm.elements["remoteinstall"];
			// var includeBranding = theForm.elements["branding"];
			// var includeSpreed = theForm.elements["spreed"];
			var selectedUsersNumber = theForm.elements["users"];
			var chosenEdition = theForm.elements["edition"];
		    var edugovDiscount = theForm.elements["edugov"];
			//check if they are checked and if so, add the monies
			if(chosenEdition.value!=="basic") 
			{
				if(includeCollabora.checked==true)
				{
					collaboraPrice = selectedUsersNumber.value * 16;
					
					if(edugovDiscount.checked==true)
					{
						collaboraPrice = collaboraPrice * 0.80;
					}
					//If contract length is 2 or 3 years, multiply with discount

					optionsPrice = optionsPrice + multiYearDiscount(collaboraPrice);
				}
				if(includeOutlook.checked==true)
				{
					optionsPrice = optionsPrice + multiYearDiscount(selectedUsersNumber.value * 5);
				}
				if(includeRemoteinstall.checked==true)
				{
					optionsPrice = optionsPrice + 990;
				}
			}
			return optionsPrice;
		}

		function getTotal() {
		    //Here we calculate, return and show the total price by calling our function

			// set variables
		    var theForm = document.forms["orderform"];
			var edugovDiscount = theForm.elements["edugov"];
// 			var contractLength = theForm.elements["duration"];
			var inDollars = theForm.elements["dollars"];
// 			var edugovDiscount = theForm.elements["edugov"];
		    //Each function returns a number so by calling them we add the values they return together
		    var finalPrice = multiYearDiscount(getUsersPrice()) + getOptionsPrice();
			
			//If the edu/gov/charity is checked, reduce price by 20%
// 			if(edugovDiscount.checked==true)
// 			{
// 				var finalPrice = finalPrice * 0.80;
// 			}

			//If contract length is 2 or 3 years, multiply with discount
// 			if(contractLength.value==2)
// 			{
// 				var finalPrice = finalPrice * 1.80;
// 			}
// 			if(contractLength.value==3)
// 			{
// 				var finalPrice = finalPrice * 2.55;
// 			}

			//display the result (dollars or euro's)
			if(inDollars.checked==false)
			{
				document.getElementById('totalprice').innerHTML = " € "+Math.round(finalPrice);
		    }
		    if(inDollars.checked==true)
			{
			var finalPrice = finalPrice * 1.1;
				document.getElementById('totalprice').innerHTML = " $ "+Math.round(finalPrice);
			}
			return +Math.round(finalPrice);
		}

		function checkSubscription() {
			//disable optional features when basic subscription is chosen; enable submit button when terms are accepted
			var theForm = document.forms["orderform"];
			var includeCollabora = theForm.elements["collabora"];
			var includeOutlook = theForm.elements["outlook"];
			// var includeBranding = theForm.elements["branding"];
			// var includeSpreed = theForm.elements["spreed"];
			var includeRemoteinstall = theForm.elements["remoteinstall"];
			var chosenEdition = theForm.elements["edition"];
			var agreedToTerms = theForm.elements["terms"];    
			var submitButton = theForm.elements["submit"];
			var edugovDiscount = theForm.elements["edugov"];
			document.getElementById("getenterprisequote").style.display = "none";
			// disable them by default as they are blocked by the default basic subscription
			includeRemoteinstall.disabled = false;
			includeCollabora.disabled = false;
			includeOutlook.disabled = false;
			// includeSpreed.disabled = false;
			// includeBranding.disabled = false;
			submitButton.disabled = true;
			
			if(chosenEdition.value=="basic")
			{
				includeRemoteinstall.disabled = true;
				includeCollabora.disabled = true;
				includeOutlook.disabled = true;
				// includeSpreed.disabled = true;
				// includeBranding.disabled = true;
			}
			// you can't pick enterprise so we set it back to standard and show the info about asking sales for a quote.
			if(chosenEdition.value=="enterprise")
			{
				document.getElementById("getenterprisequote").style.display = "block";
				chosenEdition.value="standard";
				// figure out how to zero the price
			}
			// only when the terms are agreed to can you submit the form
			if(agreedToTerms.checked==true)
			{
				submitButton.disabled = "";
			}
		}
		// this function is called whenever the user changes any of the form values to re-calculate the price and disable or enable options.
		function doCalculation() {
			checkSubscription();
			getTotal();
		}
</script>
<script>
		// this function listens to the submit event and adds the price to it before sending it out
		$('#orderform').submit(function(eventObj) { //listen to submit event
			var theForm = document.forms["orderform"];
			var inDollars = theForm.elements["dollars"];
			var includePrice = getTotal();
		    $(this).append('<input type="hidden" name="givenPrice" value="' + includePrice + '">');
		    return true;
		});
</script>
