define(["jquery", "underscore", "enquire", "velocity", "velocityUI" ], 
    function ($, _, enquire, velocity, velocityUI) {
	$(document).ready(function() {
		function getUsersPrice() {
		    var usersPrice=0;
		    //Get a reference to the form id="orderform"
		    var theForm = document.forms["orderform"];
		    //Get a reference to the select id="users"
		    var usersNumber = theForm.elements["users"];
			var chosenEdition = theForm.elements["edition"];
		    //set users price based on the value user chose and the edition
		    if(chosenEdition.value=="basic") 
		    {
				if(usersNumber.value==50)
				{
				usersPrice = 1500;
				}
				if(usersNumber.value=="75")
				{
				usersPrice = 2250;
				}
				if(usersNumber.value=="100")
				{
				usersPrice = 3000;
				}
				if(usersNumber.value=="150")
				{
				usersPrice = 4000;
				}
				if(usersNumber.value=="200")
				{
				usersPrice = 5000;
				}
				if(usersNumber.value=="250")
				{
				usersPrice = 6000;
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
		    //finally we return usersPrice
		    return usersPrice;
		}

		function getOptionsPrice() {
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

		function getTotal() {
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
			return +Math.round(finalPrice);
		}

		function checkSubscription() {
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

		function doCalculation() {
			checkSubscription();
			getTotal();
		}

		$('#orderform').submit(function(eventObj) { //listen to submit event
			var theForm = document.forms["orderform"];
			var inDollars = theForm.elements["dollars"];
			var includePrice = getTotal();
		    $(this).append('<input type="hidden" name="givenPrice" value="' + includePrice + '">');
		    return true;
		});
	});
});