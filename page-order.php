<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/order.css" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.min.js"></script>
	<script>
	require(["require.config"], function() {
		require(["modules/submenu"])
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
	<?php echo $l->t('You will be able to contact our support team for a speedy answer to questions and fixes for problems you encounter; you can use our <a href="https://nextcloud.com/migration">migration support</a> or add additional capabilities with our <a href="/outlook">Outlook add-in</a> or <a href="/collabora">Online Office</a>. Learn about <a href="/enterprise">what our Enterprise Subscription offers here</a> and see answers in our <a href="pricing/#FAQ">Frequently Asked Questions</a>');?></p>
	<p><?php echo $l->t('Using this form, you can order a Basic or Standard Support Subscription for up to 250 users. If you need more users, other options or an Enterprise Support Subscription, <a href="/enterprise/buy">please contact sales for a quote.</a>');?></p>
	<div class="contact">
		<h3><?php echo $l->t('Fill in the form below to receive a contract and invoice from us and get started!');?></h3>
		<form id="orderform" name="sales" method="post" action="../ordersubmit/?staging=true">
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
					<option value="enterprise">Enterprise</option>
				</select></label>
				<div class="getenterprisequote" id="getenterprisequote" style="display:none;"><p><a href="/buy">Ask a quote from our sales team for the enterprise subscription.</a></p></div>
				</p>
				<p><label for="duration"><?php echo $l->t('Length of contract');?><br>
				<select name="duration" onChange="doCalculation()">
					<option value="1">One year</option>
					<option value="2">Two years (10% discount)</option>
					<option value="3">Three years (15% discount)</option>
				</select></label><br>
				<input type="checkbox" name="edugov" value="edugov" onChange="doCalculation()"> <?php echo $l->t(' We are education/government/charity (20% discount applies)');?></p>
				<p><h3>Optional features (only with a Standard or <a href="/pricing">Enterprise Subscription</a>)</h3>
				<input id="collabora" type="checkbox" name="collabora" value="collabora" onChange="doCalculation()"> <?php echo $l->t(' Include <a href="/collabora" target="_blank">Collabora Online</a> (€ 16/user)');?><br/>
				<!--<input type="checkbox" name="spreed" value="spreed" onChange="doCalculation()"> <?php echo $l->t(' Include <a href="/webrtc" target="_blank">Spreed audio/video chat</a> (Eur 5/user)');?><br/>-->
				<input type="checkbox" name="outlook" value="outlook" onChange="doCalculation()"> <?php echo $l->t(' Include <a href="/outlook" target="_blank">our Outlook add-in</a> (€ 5/user)');?><br/>
				<input type="checkbox" name="remoteinstall" value="remoteinstall" onChange="doCalculation()"> <?php echo $l->t(' Include a one-day remote installation/integration support video call (€ 1100)');?><br/>
				<!--<input type="checkbox" name="branding" value="branding" onChange="doCalculation()"> <?php echo $l->t(' Include branded clients (Eur 6000)');?><br/>-->
				</p>
				<h2 class="price"><?php echo $l->t('Price: ');?><span id="totalprice"></span><br></h2>
				<p><input type="checkbox" name="dollars" value="dollars" onChange="doCalculation()"> <?php echo $l->t(' in dollars');?></p>
				<p><?php echo $l->t('<label for="comments">Notes<br />
				<textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="Any other comments or notes?"></textarea></label>');?></p>
				<p><input type="checkbox" name="terms" value="terms" onChange="doCalculation()"> <?php echo $l->t('I have read and agree to the');?> <a href=""<?php echo get_template_directory_uri(); ?>/assets/files/termsfornextcloudorder.pdf"><?php echo $l->t('terms and conditions');?></a></p>
				<td colspan="2" style="text-align:center">
<!-- 				<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div> -->
				<input type="submit" name="submit" value=" Order Now " disabled="disabled">
		</form>
	</div>
</div>

<script>

function getUsersPrice()
{
    var usersPrice=0;
    //Get a reference to the form id="orderform"
    var theForm = document.forms["orderform"];
    //Get a reference to the select id="users"
    var usersNumber = theForm.elements["users"];
	var chosenEdition = theForm.elements["edition"];
    //set users price based on the value user chose and the edition
    console.log(chosenEdition.value);
    console.log(usersNumber.value);
    if(chosenEdition.value=="basic") 
    {
		if(usersNumber.value==50)
		{
		usersPrice = 1500;
		console.log(usersPrice);
		}
		if(usersNumber.value=="75")
		{
		usersPrice = 2250;
		console.log(usersPrice);
		}
		if(usersNumber.value=="100")
		{
		usersPrice = 3000;
		console.log(usersPrice);
		}
		if(usersNumber.value=="150")
		{
		usersPrice = 4000;
		console.log(usersPrice);
		}
		if(usersNumber.value=="200")
		{
		usersPrice = 5000;
		console.log(usersPrice);
		}
		if(usersNumber.value=="250")
		{
		usersPrice = 6000;
		console.log(usersPrice);
		}
	}
    if(chosenEdition.value=="standard") 
    {
		if(usersNumber.value=="50")
		{
		usersPrice = 2500;
		console.log(usersPrice);
		}
		if(usersNumber.value=="75")
		{
		usersPrice = 3750;
		console.log(usersPrice);
		}
		if(usersNumber.value=="100")
		{
		usersPrice = 5000;
		console.log(usersPrice);
		}
		if(usersNumber.value=="150")
		{
		usersPrice = 6500;
		console.log(usersPrice);
		}
		if(usersNumber.value=="200")
		{
		usersPrice = 8000;
		console.log(usersPrice);
		}
		if(usersNumber.value=="250")
		{
		usersPrice = 9500;
		console.log(usersPrice);
		}
	}
    //finally we return usersPrice
    return usersPrice;
}

function getOptionsPrice()
{
    var optionsPrice=0;
    //Get a reference to the form id="orderform"
    var theForm = document.forms["orderform"];
    //Get a reference to the select id="users"
    var includeCollabora = theForm.elements["collabora"];
	var includeOutlook = theForm.elements["outlook"];
	var includeRemoteinstall = theForm.elements["remoteinstall"];
	var selectedUsersNumber = theForm.elements["users"];
	var chosenEdition = theForm.elements["edition"];

	//check if they are checked and if so, add the monies
	if(chosenEdition.value!=="basic") 
	{
		if(includeCollabora.checked==true)
		{
		var optionsPrice = optionsPrice + (selectedUsersNumber.value * 16);
		}
		if(includeOutlook.checked==true)
		{
		var optionsPrice = optionsPrice + (selectedUsersNumber.value * 5);
		}
		if(includeRemoteinstall.checked==true)
		{
		var optionsPrice = optionsPrice + 1100;
		}
	}
	return optionsPrice;
}

function getTotal()
{
    //Here we get the total price by calling our function

//     set variables
    var theForm = document.forms["orderform"];
	var edugovDiscount = theForm.elements["edugov"];
	var contractLength = theForm.elements["duration"];
	var inDollars = theForm.elements["dollars"];
	
    //Each function returns a number so by calling them we add the values they return together
    var finalPrice = getUsersPrice() + getOptionsPrice();
	
	//If the edu/gov/charity is checked, reduce price by 20%
	if(edugovDiscount.checked==true)
	{
	var finalPrice = finalPrice * 0.80;
	}

	//If contract length is 2 or 3 years, multiply with discount
	if(contractLength.value==2)
	{
	var finalPrice = finalPrice * 1.80;
	}
	if(contractLength.value==3)
	{
	var finalPrice = finalPrice * 2.55;
	}

	//display the result
	if(inDollars.checked==false)
	{
    document.getElementById('totalprice').innerHTML = " € "+Math.round(finalPrice);
    }
    if(inDollars.checked==true)
	{
	var finalPrice = finalPrice * 1.1;
	document.getElementById('totalprice').innerHTML = " $ "+Math.round(finalPrice);
	}
}

function checkSubscription()
{
	//disable optional features when basic subscription is chosen
	var theForm = document.forms["orderform"];
	var includeCollabora = theForm.elements["collabora"];
	var includeOutlook = theForm.elements["outlook"];
	var includeRemoteinstall = theForm.elements["remoteinstall"];
	var chosenEdition = theForm.elements["edition"];
	var agreedToTerms = theForm.elements["terms"];    
	var submitButton = theForm.elements["submit"];
	document.getElementById("getenterprisequote").style.display = "none";
	includeRemoteinstall.disabled = false;
	includeCollabora.disabled = false;
	includeOutlook.disabled = false;
	submitButton.disabled = true;
	
	if(chosenEdition.value=="basic")
	{
	includeRemoteinstall.disabled = true;
	includeCollabora.disabled = true;
	includeOutlook.disabled = true;
	}
	if(chosenEdition.value=="enterprise")
	{
	document.getElementById("getenterprisequote").style.display = "block";
	chosenEdition.value="standard";
	}
	if(agreedToTerms.checked==true)
	{
	submitButton.disabled = "";
	}
}

function doCalculation() 
{
checkSubscription();
getTotal();
}
</script>

