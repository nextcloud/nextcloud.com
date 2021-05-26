<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/order.css?v=5" rel="stylesheet">
<!-- 	I need this for the last script on the page to work, require.js seems to not make jquery available in the page js :( -->
	<script src='<?php echo get_template_directory_uri(); ?>/assets/js/old/vendor/jquery-1.10.2.min.js'></script>

	<script>
	require(["require.config"], function() {
		require(["modules/submenu", "pages/order" ])
	});
	</script>
</head>
<section class="buy-hero-section background buy-background second-menu">
    <div class="container background">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Order Nextcloud');?></h1>
                <h2><?php echo $l->t('Order your Nextcloud subscription online');?></h2>
            </div>
        </div>
    </div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
            <a class="button button--blue" href="<?php echo home_url('faq') ?>"><?php echo $l->t('FAQ');?></a>
			<a class="button button--blue" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
			<a class="button button--blue" href="<?php echo home_url('trial') ?>"><?php echo $l->t('start a trial');?></a>
			<a class="button button--blue" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
		</div>
	</div>
</section>

<section class="section--links">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                <a class="button button--white button--small" href="<?php echo home_url('faq') ?>"><?php echo $l->t('FAQ');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('trial') ?>"><?php echo $l->t('start a trial');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--welcome">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $l->t('Nextcloud helps you be successful');?></h2>
            <p><?php echo $l->t('You run your own Nextcloud server, keeping your data in-house and under control. Nextcloud Enterprise is the solution you need. Nextcloud Enterprise is software optimized and tested for mission critical environments and gives you priority access to security and stability fixes. Nextcloud Enterprise is backed by a Nextcloud Subscription with the services and expertise needed for quick deployment and reliable service.');?></p>
            <?php echo $l->t('You will be able to contact our support team for a speedy answer to questions and fixes for problems you encounter; you can use our');?> <a class="hyperlink" href="<?php echo home_url('migration') ?>"><?php echo $l->t('migration support</a> or add additional capabilities with our');?> <a class="hyperlink" href="<?php echo home_url('outlook') ?>">Outlook add-in</a> <?php echo $l->t('or');?> <a class="hyperlink" href="<?php echo home_url('collaboraonline') ?>">Collabora</a>  <?php echo $l->t('or');?> <a class="hyperlink" href="<?php echo home_url('onlyoffice') ?>">ONLYOFFICE</a> Online Office</a> <?php echo $l->t('or');?>. <?php echo $l->t('Learn about');?> <a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('what Nextcloud Enterprise offers here</a> and see answers in our');?> <a class="hyperlink" href="<?php echo home_url('faq') ?>"><?php echo $l->t('Frequently Asked Questions</a>');?>.</p>
            <p><?php echo $l->t('Using this form, you can order a Basic or Standard Subscription for up to 250 users. If you need more users, other options like branding or a Premium Subscription,');?> <a class="hyperlink" href="<?php echo home_url('enterprise/buy') ?>"><?php echo $l->t('please contact sales for a quote.</a>');?></p>
        </div>
	</div>
</div>
</section>
<section class="section--order-form">
<div class="container">
    <div class="row">
        <div class="col-md-12">
		<h3><?php echo $l->t('Fill in the form below to receive a contract and invoice from us and get started!');?></h3>
		<hr>
		<form id="orderform" name="orderform" method="post" action="../ordersubmit/">
			<p><label for="yourname"><?php echo $l->t('Contact person');?> *<br>
			<input  type="text" name="yourname" maxlength="60" size="60" placeholder="John Doe" onChange="doCalculation()"></label>
			<span id="yourname-error" class="error"></span>
			</p>
			<p><label for="email"><?php echo $l->t('Email');?> *<br>
			<input  type="text" name="email" maxlength="80" size="60" placeholder="john@example.org" onChange="doCalculation()"></label>
			<span id="email-error" class="error"></span>
			</p>
			<p><label for="organization"><?php echo $l->t('Organization');?> *<br>
			<input  type="text" name="organization" maxlength="100" size="60" placeholder="Example AG" onChange="doCalculation()"></label></p>
			<p><label for="website"><?php echo $l->t('Website');?><br>
			<input  type="text" name="website" maxlength="100" size="60" placeholder="https://example.org"></label></p>
			<p><label for="phone"><?php echo $l->t('Phone number');?> * <span>(<?php echo $l->t('Please include your country code');?>)</span><br>
			<input  type="text" name="phone" maxlength="40" size="60" placeholder="(+49 1234) 567 890" onChange="doCalculation()"></label></p>
			<p><label for="address"><?php echo $l->t('Address');?> *<br />
			<textarea  name="address" maxlength="1000" cols="62" rows="5" placeholder="Langer Weg 6, 61169 Friedberg, GERMANY" onChange="doCalculation()"></textarea></label></p>
			<p><label for="address"><?php echo $l->t('Billing address');?> <span>(<?php echo $l->t('Only needed if different from above address');?>)</span><br />
			<textarea  name="billing" maxlength="1000" cols="62" rows="5" placeholder="Langer Weg 8, 61169 Friedberg, GERMANY"></textarea></label></p>
			<p><label for="vat"><?php echo $l->t('VAT ID');?> <span><?php echo $l->t('(Europe only)');?></span><br>
			<input  type="text" name="vat" maxlength="60" size="60" placeholder="DE123456789"></label></p>
			<h3><?php echo $l->t('Your order');?></h3>
			<hr>
			<p><label for="users"><?php echo $l->t('Number of seats');?><br>
			<select name="users" onChange="setUsers()">
<!-- 				<option value="50">50</option> -->
<!-- 				<option value="75">75</option> -->
				<option value="100">100</option>
				<option value="150">150</option>
				<option value="200">200</option>
				<option value="250">250</option>
			</select></label></p>
			<p class="question"><label for="edition"><?php echo $l->t('Which Nextcloud Support Subscription are you interested in?');?></p>
			<p class="details"><?php echo $l->t('Our Basic subscription offers email support with a 3 day response time,<br/> Standard offers business hours phone support with a 2 day response time.');?></p>
			<select id="edition" name="edition" onChange="doCalculation()">
				<option default value="basic">Basic</option>
				<option value="standard">Standard</option>
<!-- 				<option value="premium">Premium</option> -->
			</select></label>
			<!--<div class="getenterprisequote" id="getenterprisequote" style="display:none;">--><p><a class="hyperlink" href="<?php echo home_url('pricing') ?>" target="_blank"><?php echo $l->t('See details on pricing ');?><i class="fa fa-external-link" aria-hidden="true"></i></a> <?php echo $l->t('or ask');?> <a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('a quote from our sales team ');?><i class="fa fa-external-link" aria-hidden="true"></i></a> <?php echo $l->t('for the premium subscription.');?></p><!--</div>-->
			</p>
			<p><label for="duration"><?php echo $l->t('Length of contract (paid in advance)');?><br>
			<select name="duration" onChange="doCalculation()">
				<option default value="1">One year</option>
				<option value="2"><?php echo $l->t('2 years (2nd year 10% discount)');?></option>
				<option value="3"><?php echo $l->t('3 years (3rd year 15% discount)');?></option>
			</select></label><br>
			<p><label for="edugov"><?php echo $l->t('Are you an education/government/charitable organization (discounts may apply)?');?><br>
			<select name="edugov" onChange="doCalculation()">
				<option default value="no"><?php echo $l->t('none');?></option>
				<option value="edu"><?php echo $l->t('Education');?></option>
				<option value="gov"><?php echo $l->t('Government');?></option>
				<option value="charity"><?php echo $l->t('Charitable');?></option>
			</select></label>
			<p><h3><?php echo $l->t('Optional features:');?></h3></p>
			<input disabled type="checkbox" name="outlook" value="outlook" onChange="doCalculation()"> <span class="optional"><?php echo $l->t(' Include');?> <a class="hyperlink" href="<?php echo home_url('outlook') ?>" target="_blank"><?php echo $l->t('our Outlook add-in <i class="fa fa-external-link" aria-hidden="true"></i></a> (€ 7.20/user)');?></span><br/>
			<p><h4><?php echo $l->t('Only with a Standard Subscription:');?></h4></p>
			<input disabled id="collaboraCheck" type="checkbox" name="collaboraCheck" value="collaboraCheck" onChange="doCalculation()"> <span class="optional"><?php echo $l->t(' Include');?> <a class="hyperlink" href="<?php echo home_url('collaboraonline') ?>" target="_blank">Collabora Online <i class="fa fa-external-link" aria-hidden="true"></i></a> <?php echo $l->t('(€ 17/user for the first 100, € 16/user after that)');?></span><br/>

			<input disabled id="onlyofficeCheck" type="checkbox" name="onlyofficeCheck" value="onlyofficeCheck" onChange="doCalculation()"> <span class="optional"><?php echo $l->t(' Include');?> <a class="hyperlink" href="<?php echo home_url('onlyoffice') ?>" target="_blank">ONLYOFFICE <i class="fa fa-external-link" aria-hidden="true"></i></a> <?php echo $l->t('(€ 935 for the first 250 users)');?></span>
			</p>
			<h2 class="price"><?php echo $l->t('Price: ');?><span id="totalprice"></span><br></h2>
			<p class="hidden"><input type="checkbox" name="dollars" value="dollars" onChange="doCalculation()"> <?php echo $l->t(' in dollars');?></p>
			<p><?php echo $l->t('<label for="comments">Notes<br />
			<textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="Questions, comments? Interested in Nextcloud Talk, Branding? Let us know and we can provide you an offer or answers to your questions."></textarea></label>');?></p>
			<p><input type="checkbox" name="terms" value="terms" onChange="doCalculation()"> <?php echo $l->t('I have read and agree to the');?> <a class="hyperlink" href="<?php echo get_template_directory_uri(); ?>/assets/files/termsfornextcloudorder.pdf"><?php echo $l->t('terms and conditions');?> <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
			<p>Note: all prices excl. VAT</p>
			<input type="submit" name="submit" value=" Order Now " disabled="disabled" class="button button--blue"><br />
			<span id="form-error"><?php echo $l->t('Some required fields are not filled.'); ?></span>
		</form>
	</div>
</div>
</section>
<script>
		// if we need to do something when the user number is changed...
		function setUsers() {
			var theForm = document.forms["orderform"];
// 			var includeCollaboraUsers = theForm.elements["collabora"];
// 			var usersNumber = theForm.elements["users"];
// 			var chosenEdition = theForm.elements["edition"];
			doCalculation();
		}

		function getUsersPrice() {
		    var usersPrice=1900;
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
					usersPrice = 1995;
				}
				if(usersNumber.value=="75")
				{
					usersPrice = 2782;
				}
				if(usersNumber.value=="100")
				{
					usersPrice = 3570;
				}
				if(usersNumber.value=="150")
				{
					usersPrice = 4620;
				}
				if(usersNumber.value=="200")
				{
					usersPrice = 5670;
				}
				if(usersNumber.value=="250")
				{
					usersPrice = 6720;
				}
			}
		    if(chosenEdition.value=="standard")
		    {
				if(usersNumber.value=="50")
				{
					usersPrice = 3604;
				}
				if(usersNumber.value=="75")
				{
					usersPrice = 5034;
				}
				if(usersNumber.value=="100")
				{
					usersPrice = 6466;
				}
				if(usersNumber.value=="150")
				{
					usersPrice = 8056;
				}
				if(usersNumber.value=="200")
				{
					usersPrice = 9646;
				}
				if(usersNumber.value=="250")
				{
					usersPrice = 11235;
				}
			}
			// apply multi-year discount and edu/gov/charity discount
			usersPrice = multiYearDiscount(edugovcharDiscount(usersPrice));

		    //finally we return usersPrice
		    return usersPrice;
		}


		// function to optionally apply educational discount. As the percentage varies, it has to be given to the formula.
		function eduDiscount(amount,percentage)
		{
			//Get a reference to the form id="orderform", to education discount and duration
			var theForm = document.forms["orderform"];
		    var discount = theForm.elements["edugov"];
		    if(discount.value=="edu")
			{
				amount = amount * percentage;
			}
			return amount;
		}

		// function to apply the standard discounts over the three categories.
		function edugovcharDiscount(amount)
		{
			//Get a reference to the form id="orderform", to education discount and duration
			var theForm = document.forms["orderform"];
		    var discount = theForm.elements["edugov"];
		    var chosenEdition = theForm.elements["edition"];

		    if(chosenEdition.value=="standard")
		    {
                if(discount.value!="no")
                {
                    if(discount.value=="edu")
                    {
                        return amount *= 0.9;
                    }
                    if(discount.value=="gov")
                    {
                        return amount *= 0.9;
                    }
                    if(discount.value=="charity")
                    {
                        return amount *= 0.9;
                    }
                }
            }
			return amount;
		}

		// function to optionally apply an equal discount percentage over any of the three categories.
		function anyDiscount(amount,percentage)
		{
			//Get a reference to the form id="orderform", to education discount and duration
			var theForm = document.forms["orderform"];
		    var discount = theForm.elements["edugov"];
		    if(discount.value!="no")
			{
				amount = amount * percentage;
			}
			return amount;
		}

		// function to apply multi-year discount
		function multiYearDiscount(price)
		{
			//Get a reference to the form id="orderform", to education discount and duration
			var theForm = document.forms["orderform"];
			var contractLength = theForm.elements["duration"];

			if(contractLength.value==2)
			{
				return price *= 1.92;
			}
			else if(contractLength.value==3)
			{
				return price *= 2.8;
			}
			else return price;
		}

		function getOptionsPrice() {
		    var optionsPrice=0;
			var collaboraPrice = 0;
			var outlookPrice = 0;
			var onlyofficePrice = 0;
		    //Get a reference to the form id="orderform"
		    var theForm = document.forms["orderform"];
		    //Get a reference to the select id="users" and the other elements needed
// 		    var includeCollaboraUsers = theForm.elements["collabora"];
		    var includeCollaboraCheck = theForm.elements["collaboraCheck"];
		    var includeOnlyofficeCheck = theForm.elements["onlyofficeCheck"];
			var includeOutlook = theForm.elements["outlook"];
// 			var includeRemoteinstall = theForm.elements["remoteinstall"];
			// var includeBranding = theForm.elements["branding"];
			// var includeSpreed = theForm.elements["spreed"];
			var selectedUsersNumber = theForm.elements["users"];
			var chosenEdition = theForm.elements["edition"];
		    var edugovDiscount = theForm.elements["edugov"];
            var contractLength = theForm.elements["duration"];
		    //check if they are checked and if so, add the monies

			// collabora, Outlook and remote install only with Standard
			if(includeOutlook.checked==true)
			{
				outlookPrice = multiYearDiscount(selectedUsersNumber.value * 7.2);
				// apply edu/gov/charity discount
				outlookPrice = edugovcharDiscount(outlookPrice);
				optionsPrice = optionsPrice + outlookPrice;
			}
			if(chosenEdition.value!=="basic")
			{
				if(includeCollaboraCheck.checked==true)
				{
// 					if( includeCollaboraUsers.value <= 100)
					if( selectedUsersNumber.value <= 100)
					{
					collaboraPrice = multiYearDiscount(selectedUsersNumber.value * 17);
					}
					else if (selectedUsersNumber.value > 99)
					{
					collaboraPrice = multiYearDiscount(1683 + (selectedUsersNumber.value - 99) * 16);
					}
					// apply edu discount (no gov, charity)
					collaboraPrice = eduDiscount(collaboraPrice,0.25);
					optionsPrice = optionsPrice + collaboraPrice;
				}
				if(includeOnlyofficeCheck.checked==true)
				{
					optionsPrice = optionsPrice + (contractLength.value * 935);
				}
			}
			return optionsPrice;
		}

		function getTotal() {
		    //Here we calculate, return and show the total price by calling our function

			// set variables
		    var theForm = document.forms["orderform"];
// 			var contractLength = theForm.elements["duration"];
			var inDollars = theForm.elements["dollars"];
// 			var edugovDiscount = theForm.elements["edugov"];
		    //Each function returns a number so by calling them we add the values they return together
		    var finalPrice = getUsersPrice() + getOptionsPrice();

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
		var firstCall = true;
		function checkSubscription() {
			//disable optional features when basic subscription is chosen; enable submit button when terms are accepted
			var theForm = document.forms["orderform"];
// 			var includeCollaboraUsers = theForm.elements["collabora"];
			var includeCollaboraCheck = theForm.elements["collaboraCheck"];
			var includeOnlyofficeCheck = theForm.elements["onlyofficeCheck"];
			var includeOutlook = theForm.elements["outlook"];
			// var includeBranding = theForm.elements["branding"];
			// var includeSpreed = theForm.elements["spreed"];
			var chosenEdition = theForm.elements["edition"];
			var agreedToTerms = theForm.elements["terms"];
			var submitButton = theForm.elements["submit"];
			var selectedUsersNumber = theForm.elements["users"];
// 			document.getElementById("collaboraUserNumberChoiceDiv").style.display = "none";
// 			document.getElementById("getenterprisequote").style.display = "none";
			// disable them by default as they are blocked by the default basic subscription
// 			includeCollaboraUsers.disabled = false;
			includeCollaboraCheck.disabled = false;
			includeOnlyofficeCheck.disabled = false;
			includeOutlook.disabled = false;
			// includeSpreed.disabled = false;
			// includeBranding.disabled = false;
			submitButton.disabled = true;
// 			var numberOfCollaboraUsers = includeCollaboraUsers.value;
			var numberOfSelectedUsers = selectedUsersNumber.value;
// 			document.getElementById("minUsers").style.fontWeight = "normal";
// 			document.getElementById("maxUsers").style.fontWeight = "normal";

                // you can't have less collabora users than Nextcloud users
// 			if(includeCollaboraCheck.checked==false)
// 			{
// 				includeCollaboraUsers.value = 0;
// 			}
// 			if(includeCollaboraCheck.checked==true)
// 			{
// 				document.getElementById("collaboraUserNumberChoiceDiv").style.display = "block";
//
// 				if(parseInt(numberOfCollaboraUsers) < 20) {
// 					numberOfCollaboraUsers = numberOfSelectedUsers;
// 				}
//
// 				if(((parseInt(numberOfCollaboraUsers) * 4) + 1) < parseInt(numberOfSelectedUsers))
// 				{
// 					numberOfCollaboraUsers  = numberOfSelectedUsers / 4;
// 					document.getElementById("minUsers").style.fontWeight = "bold";
// 					// handle the weird numbers
// 					if (parseInt(numberOfCollaboraUsers) < 50)
// 					{
// 						numberOfCollaboraUsers = 50;
// 					}
// 					if (numberOfCollaboraUsers == "62.5")
// 					{
// 						numberOfCollaboraUsers = 75;
// 					}
// 				}
//
// 				if(parseInt(numberOfCollaboraUsers) > parseInt(numberOfSelectedUsers))
// 				{
// 					document.getElementById("maxUsers").style.fontWeight = "bold";
// 					numberOfCollaboraUsers = numberOfSelectedUsers;
//
// 				}
//
// 				includeCollaboraUsers.value = numberOfCollaboraUsers;
// 			}


			if(chosenEdition.value=="basic")
			{
// 				includeCollaboraUsers.disabled = true;
				includeCollaboraCheck.disabled = true;
				includeOnlyofficeCheck.disabled = true;
// 				includeOutlook.disabled = true;
				// includeSpreed.disabled = true;
				// includeBranding.disabled = true;
			}

			// you can't pick premium so we set it back to standard and show the info about asking sales for a quote.
// 			if(chosenEdition.value=="premium")
// 			{
// 				document.getElementById("getenterprisequote").style.display = "block";
// 				chosenEdition.value="standard";
// 				alert("Sorry, you can't order the Premium Subscription through this form. Please ask our sales team for a quote.");
				// figure out how to zero the price
// 			}

			if (firstCall) {
				firstCall = false;
				// don't show errors on very first call
				return;
			}


			var enableSubmitButton = true;

			// required form elements
			var yourName = theForm.elements["yourname"];
			var email = theForm.elements["email"];
			var organization = theForm.elements["organization"];
			var phone = theForm.elements["phone"];
			var address = theForm.elements["address"];

			if (yourName.value == '') {
				yourName.classList.add('error');
				enableSubmitButton = false;
			} else {
				var expression = /^[A-Za-z .'-]+$/,
					yourNameError = $('#yourname-error');

				if(expression.test(yourName.value)) {
					yourName.classList.remove('error');
					yourNameError.html('');
				} else {
					var message = '<?php echo $l->t("The name you entered does not appear to be valid.");?>';
					yourNameError.html('<br />'  + message);
					yourName.classList.add('error');
					enableSubmitButton = false;
				}
			}

			if (email.value == '') {
				email.classList.add('error');
				enableSubmitButton = false;
			} else {
				var expression = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/,
					emailError = $('#email-error');

				if(expression.test(email.value)) {
					email.classList.remove('error');
					emailError.html('');
				} else {
					var message = '<?php echo $l->t("The email address you entered does not appear to be valid.");?>';
					emailError.html('<br />'  + message);
					email.classList.add('error');
					enableSubmitButton = false;
				}
			}

			if (organization.value == '') {
				organization.classList.add('error');
				enableSubmitButton = false;
			} else {
				organization.classList.remove('error');
			}

			if (phone.value == '') {
				phone.classList.add('error');
				enableSubmitButton = false;
			} else {
				phone.classList.remove('error');
			}

			if (address.value == '') {
				address.classList.add('error');
				enableSubmitButton = false;
			} else {
				address.classList.remove('error');
			}

			// only when the terms are agreed to can you submit the form
			if (agreedToTerms.checked != true) {
				enableSubmitButton = false;
			}

			if (enableSubmitButton == true) {
				submitButton.disabled = "";
				$('#form-error').addClass('hidden');
			} else {
				submitButton.disabled = "disabled";
				$('#form-error').removeClass('hidden');
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
