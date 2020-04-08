<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/ionos.css?v=3" rel="stylesheet">
<!-- 	<script src='https://www.google.com/recaptcha/api.js'></script> -->
<!-- 	I need this for the last script on the page to work, require.js seems to not make jquery available in the page js :( -->
	<script src='<?php echo get_template_directory_uri(); ?>/assets/js/old/vendor/jquery-1.10.2.min.js'></script>

	<script>
	require(["require.config"], function() {
		require(["pages/ionos", "pages/order" ])
	});
	</script>
</head>
<section class="ionos-hero-section background ionos-background">
    <div class="container background">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Get  Nextcloud now');?></h1>
                <h2><?php echo $l->t('Viakom deploys Nextcloud Hub on IONOS for you today');?><br /><a class="button button--small" href="#order"><?php echo $l->t('Order now');?></a></h2>

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

<section class="section--intro">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1 video">
			<stream src="eb1384b4fa48d8f47abdec5051bc922d" controls poster="<?php bloginfo('template_directory'); ?>/assets/img/features/hub-video.png"></stream>
            <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=eb1384b4fa48d8f47abdec5051bc922d"></script>
		</div>
    </div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Share and collaborate on documents, send and receive email, manage your calendar and have video chats without data leaks.');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('Hosted in the trusted and security-certified German data centers of IONOS and protected and managed by the capable engineers of Viakom, Nextcloud Hub provides the benefits of online collaboration without the compliance and security risks.');?></p>
                <p class="text-center"><a class="button button--blue" href="#order"><?php echo $l->t('Order now');?></a></p>
		</div>
	</div>
</div>
</section>

<section class="section--partners">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="https://www.ionos.de/enterprise-cloud/nextcloud" target="_blank" title="IONOS">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/ionos.png" title="IONOS" />
            </a>
            <p class="partnertext"><?php echo $l->t('With more than eight million customer contracts, IONOS is the leading European provider of cloud infrastructure, cloud services and hosting services. The product portfolio offers everything that companies need to be successful in the cloud: from domains, classic websites and do-it-yourself solutions, online marketing tools to full-fledged servers and an IaaS solution. The portfolio is aimed at freelancers, business people and consumers as well as corporate customers with complex IT requirements. The 1&1 IONOS brand family includes STRATO, Arsys, Fasthosts, home.pl, InterNetX, SEDO, United Domains and World4You.');?></p>
            <a class="button button--white" href="https://www.ionos.de/enterprise-cloud/nextcloud"><?php echo $l->t('Learn more');?></a>
        </div>
        <div class="col-md-6">
            <a href="https://viakom.de/unsere-produkte/managed-nextcloud/" target="_blank" title="Viakom">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/viakom.png" title="Viakom" />
            </a>
            <p class="partnertext"><?php echo $l->t('Viakom GmbH is a managed service provider and software development company specializing in ITC solutions for the B2B market. The Viakom experts and specialists from the sister company Nextrag Solutions GmbH combine know-how in the areas of competence in managed service consulting, software development and sales and support. In-house software developments in the area of ​​(Vo) IP measurement technology and managed services in the area of ​​monitoring have been in use by well-known telecommunications network operators since 2009.');?></p>
            <a class="button button--white" href="https://viakom.de/unsere-produkte/managed-nextcloud/"><?php echo $l->t('Learn more');?></a>
        </div>
    </div>
</div>
</section>

<section class="section--products">
	<div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="<?php echo home_url('files') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png" /></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="fill:white !important;" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Files.svg" >
                        </div>
                        <div class="text">
                            <?php echo $l->t('<strong>Nextcloud Files</strong><br><small>Enterprise File Sync and Share</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Files offers Universal File Access and sync platform with powerful collaboration capabilities and desktop, mobile and web interfaces.');?></p>
                    <a href="<?php echo home_url('files') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>

            <div class="col-sm-4">
                <a href="<?php echo home_url('talk') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-devices-nw.png"></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Talk.svg" >
                        </div>
                        <div class="text">
                            <?php echo $l->t('<strong>Nextcloud Talk</strong><br><small>Calls, chat and web meetings</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Talk delivers on-premises, private audio/video conferencing and text chat through browser and mobile interfaces with integrated screen sharing and SIP integration.');?></p>
                    <a href="<?php echo home_url('talk') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo home_url('groupware') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar-nw.png"></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Groupware.svg" >
                        </div>
                        <div class="text">
                            <?php echo $l->t('<strong>Nextcloud Groupware</strong><br><small>Calendar, Contacts & Mail</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Groupware integrates Calendar, Contacts, Mail and other productivity features to help teams get their work done faster, easier and on your terms.');?></p>
                    <a href="<?php echo home_url('groupware') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--hub">
<div class="container-fluid icon-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 with-image">
                <div class="image">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/nextcloud-hub-logos-white.svg" alt="in action"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text">
                    <h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Hub');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Hub is the first completely integrated on-premises content collaboration platform on the market, ready for a new generation of users who expect seamless online collaboration capabilities out of the box.');?></p>
                    <a href="<?php echo home_url('hub') ?>" class="button button--blue"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section id="why-nextcloud" class="section--why">
	<div class="container">
		<h1 class="section--heading-1 text-center"><?php echo $l->t('Why Nextcloud?');?></h1>
		<div class="highlights">
			<div class="highlights_align ">
				<div class="privacy-icon" data-animation-path="img/home/privacy/" data-anim-loop="false" data-name="privacy"></div>
				<h4><?php echo $l->t('Control');?></h4>
				<p class="section--paragraph"><?php echo $l->t('Protect, control and monitor data and communication across your company. Guarantee compliance with business and legal requirements. Keep your data on servers you own, at all times. Nothing leaks, not even metadata.');?></p>
			</div>
			<div class="highlights_align">
				<div class="flexibility-icon" data-animation-path="img/home/flexibility/" data-anim-loop="false" data-name="flexibility"></div>
				<h4><?php echo $l->t('Productivity');?></h4>
				<p class="section--paragraph"><?php echo $l->t('Enable productivity across any platform, whether in the office or on the road, to share, collaborate and communicate across organizational boundaries. Nextcloud provides transparent access to data on any storage.');?></p>
			</div>
			<div class="highlights_align">
				<div class="community-icon" data-animation-path="img/home/community/" data-anim-loop="false" data-name="community"></div>
				<h4><?php echo $l->t('Community');?></h4>
				<p class="section--paragraph"><?php echo $l->t('Enjoy constant improvements from a thriving and transparent, entirely open-source community development model, free of lockins or paywalls. Enjoy the benefits of enterprise support when you need it.');?></p>
			</div>
		</div>
	</div>
</section>
<a name="order"></a>
<section class="section--form">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <h1 class="text-center">Order form</h1>
            <p><?php echo $l->t('Using this form, you can ask for an offer for an instant Nextcloud Hub deployment for up to 200 users. If you need more users, other options like branding or a Premium Subscription,');?> <a class="hyperlink" href="<?php echo home_url('enterprise/buy') ?>"><?php echo $l->t('please contact us for a quote.</a>');?></p>
            <div class="contact">
                <h3><?php echo $l->t('Fill in the form below to receive an offer and contract from us and get started!');?></h3>
                <hr>
                <form id="orderform" name="orderform" method="post" action="../ionossubmit/">
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
                    <p><label for="users"><?php echo $l->t('Number of users, at a price of 9.50 euro per user per month.');?><br>
                    <?php echo $l->t('Special pricing for education, government and larger numbers on request in Notes section.');?>
                    <select name="users" onChange="setUsers()">
                        <?php
                            for ($i=1; $i<=200; $i++)
                            {
                                ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
                            }
                        ?>
                    </select></label></p>
        <!-- 			<p class="question"><label for="edition"><?php echo $l->t('Which Nextcloud Support Subscription are you interested in?');?></p> -->
        <!-- 			<p class="details"><?php echo $l->t('Our Basic subscription offers email support with a 3 day response time,<br/> Standard offers business hours phone support with a 2 day response time.');?></p> -->
        <!-- 			<select id="edition" name="edition" onChange="doCalculation()"> -->
        <!-- 				<option default value="basic">Basic</option> -->
        <!-- 				<option value="standard">Standard</option> -->
        <!-- 				<option value="premium">Premium</option> -->
        <!-- 			</select></label> -->
                    <!--<div class="getenterprisequote" id="getenterprisequote" style="display:none;">
                    <p><a class="hyperlink" href="<?php echo home_url('pricing') ?>" target="_blank"><?php echo $l->t('See details on pricing ');?><i class="fa fa-external-link" aria-hidden="true"></i></a> <?php echo $l->t('or ask');?> <a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('a quote from our sales team ');?><i class="fa fa-external-link" aria-hidden="true"></i></a> <?php echo $l->t('for the premium subscription.');?></p></div>
                    </p>-->
        <!-- 			<p><label for="duration"><?php echo $l->t('Length of contract (paid in advance)');?><br> -->
        <!-- 			<select name="duration" onChange="doCalculation()"> -->
        <!-- 				<option default value="1">One year</option> -->
        <!-- 				<option value="2"><?php echo $l->t('2 years (2nd year 10% discount)');?></option> -->
        <!-- 				<option value="3"><?php echo $l->t('3 years (3rd year 15% discount)');?></option> -->
        <!-- 			</select></label><br> -->
                    <!--<p><label for="edugov"><?php echo $l->t('Are you an education/government/charitable organization (discounts may apply)?');?><br>
                    <select name="edugov" onChange="doCalculation()">
                        <option default value="no"><?php echo $l->t('none');?></option>
                        <option value="edu"><?php echo $l->t('Education');?></option>
                        <option value="gov"><?php echo $l->t('Government');?></option>
                        <option value="charity"><?php echo $l->t('Charitable');?></option>
                    </select></label>-->
                    <p><h3><?php echo $l->t('Optional features:');?></h3></p>
                    <input disabled type="checkbox" name="outlook" value="outlook" onChange="doCalculation()"> <span class="optional"><?php echo $l->t(' Include');?> <a class="hyperlink" href="<?php echo home_url('outlook') ?>" target="_blank"><?php echo $l->t('our Outlook add-in <i class="fa fa-external-link" aria-hidden="true"></i></a> (€ 0.5/user/month)');?></span><br/>
        <!-- 			<p><h4><?php echo $l->t('Only with a Standard Subscription:');?></h4></p> -->
        <!-- 			<input disabled id="collaboraCheck" type="checkbox" name="collaboraCheck" value="collaboraCheck" onChange="doCalculation()"> <span class="optional"><?php echo $l->t(' Include');?> <a class="hyperlink" href="<?php echo home_url('collaboraonline') ?>" target="_blank">Collabora Online <i class="fa fa-external-link" aria-hidden="true"></i></a> <?php echo $l->t('(€ 17/user for the first 100, € 16/user after that)');?></span><br/> -->
        <!-- 			<input disabled id="onlyofficeCheck" type="checkbox" name="onlyofficeCheck" value="onlyofficeCheck" onChange="doCalculation()"> <span class="optional"><?php echo $l->t(' Include');?> <a class="hyperlink" href="<?php echo home_url('onlyoffice') ?>" target="_blank">ONLYOFFICE <i class="fa fa-external-link" aria-hidden="true"></i></a> <?php echo $l->t('(€ 935 for the first 250 users)');?></span><br/> -->
                    <!-- Only show below when input above is enabled -->
                    <!--<div class="collaboraUserNumberChoiceDiv" id="collaboraUserNumberChoiceDiv" style="display:none;">
                        <p><?php echo $l->t('Select how many users need access to Collabora: ');?><br>
                        <select disabled name="collabora" onChange="doCalculation()">
                            <option value="0">0</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                            <option value="150">150</option>
                            <option value="200">200</option>
                            <option value="250">250</option>
                        </select>
                        </p><p class="collaboraNote"><small><strong><?php echo $l->t('Please note:');?></strong></br>
                        <span id="minUsers"><?php echo $l->t('You need at least 25% Collabora seats');?></span><br>
                        <span id="maxUsers"><?php echo $l->t('You can not have more Collabora seats than Nextcloud seats');?></span>
                        </small></p>
                    </div>-->
                    <!--<input disabled type="checkbox" name="spreed" value="spreed" onChange="doCalculation()"> <span class="optional"><?php echo $l->t(' Include');?> <a class="hyperlink" href="<?php echo home_url('webrtc') ?>" target="_blank">Spreed audio/video chat</a> (Eur 5/user)');?></span><br/>-->
        <!-- 			<input disabled type="checkbox" name="remoteinstall" value="remoteinstall" onChange="doCalculation()"> <span class="optional"><?php echo $l->t(' Include one day remote installation/integration support (mail, telephone, video call) (€ 990)');?></span><br/> -->
                    <!--<input disabled type="checkbox" name="branding" value="branding" onChange="doCalculation()"> <span class="optional"><?php echo $l->t(' Include branded clients (Eur 6000)');?></span><br/>-->
                    </p>
                    <h2 class="price"><?php echo $l->t('Price per month: ');?><span id="totalprice"></span><br></h2>
                    <p class="hidden"><input type="checkbox" name="dollars" value="dollars" onChange="doCalculation()"> <?php echo $l->t(' in dollars');?></p>
                    <p><?php echo $l->t('<label for="comments">Notes<br />
                    <textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="Questions, comments, special needs? Do you represent a government, educational or charitable business? Let us know and we can provide you a custom offer or answers to your questions."></textarea></label>');?></p>
                    <p><input type="checkbox" name="terms" value="terms" onChange="doCalculation()"> <?php echo $l->t('I have read and agree to the');?> <a class="hyperlink" href="<?php echo get_template_directory_uri(); ?>/assets/files/termsfornextcloudorder.pdf"><?php echo $l->t('terms and conditions');?> <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                    <p>Note: all prices excl. VAT</p>
                    <p><label for="captcha"><?php echo $l->t('Please calculate the following sum');?> <span></span><br>
                    <img src="data:image/png;base64,<?php echo base64_encode($imagestring); ?>"><br>
                    <input  type="text" name="captcha" maxlength="20" size="20" placeholder="13"></label></p>
                    <input  type="hidden" name="checksum" value="<?php echo $checksum;?>">
                    <td colspan="2" style="text-align:center">
                    <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                    <input type="submit" name="submit" value=" Order Now " disabled="disabled" class="button button--blue"><br />
                    <span id="form-error"><?php echo $l->t('Some required fields are not filled.'); ?></span>
                </form>
            </div>
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
		    var usersPrice=9.5;
		    //Get a reference to the form id="orderform"
		    var theForm = document.forms["orderform"];
		    //Get a reference to the select id="users"
		    var usersNumber = theForm.elements["users"];
		    var selectedUsersNumber = theForm.elements["users"];
			var edugovDiscount = theForm.elements["edugov"];
		    //set users price based on the number of users chosen and the edition. Yes, we could calculate this but that is complicated and it is easier updated as well this way.
            console.log(selectedUsersNumber.value);
			usersPrice = usersNumber.value * 9.5;

			// apply multi-year discount and edu/gov/charity discount
			usersPrice = multiYearDiscount(edugovcharDiscount(usersPrice));

		    //finally we return usersPrice
		    return usersPrice;
		}


		// function to optionally apply educational discount. As the percentage varies, it has to be given to the formula.
// 		function eduDiscount(amount,percentage)
// 		{
// 			//Get a reference to the form id="orderform", to education discount and duration
// 			var theForm = document.forms["orderform"];
// 		    var discount = theForm.elements["edugov"];
// 		    if(discount.value=="edu")
// 			{
// 				amount = amount * percentage;
// 			}
// 			return amount;
// 		}

		// function to apply the standard discounts over the three categories.
		function edugovcharDiscount(amount)
		{
			//Get a reference to the form id="orderform", to education discount and duration
			var theForm = document.forms["orderform"];
		    var discount = theForm.elements["edugov"];
		    var discount = "no";

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
			return amount;
		}

		// function to optionally apply an equal discount percentage over any of the three categories.
		function anyDiscount(amount,percentage)
		{
			//Get a reference to the form id="orderform", to education discount and duration
			var theForm = document.forms["orderform"];
		    var discount = theForm.elements["edugov"];
		    var discount = "no";
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
            var contractLength = 1;
// 			var contractLength = theForm.elements["duration"];
			var theForm = document.forms["orderform"];
			if(contractLength.value==2)
			{
				return price *= 1.90;
			}
			else if(contractLength.value==3)
			{
				return price *= 2.75;
			}
			else return price;
		}

		function getOptionsPrice() {
		    var optionsPrice=0;
			var outlookPrice = 0;
		    //Get a reference to the form id="orderform"
		    var theForm = document.forms["orderform"];
		    //Get a reference to the select id="users" and the other elements needed
// 		    var includeCollaboraUsers = theForm.elements["collabora"];
			var includeOutlook = theForm.elements["outlook"];
			// var includeBranding = theForm.elements["branding"];
			// var includeSpreed = theForm.elements["spreed"];
			var selectedUsersNumber = theForm.elements["users"];
			var chosenEdition = "standard";
		    var edugovDiscount = theForm.elements["edugov"];
		    //check if they are checked and if so, add the monies

			// collabora, Outlook and remote install only with Standard
			if(includeOutlook.checked==true)
			{
				outlookPrice = multiYearDiscount(selectedUsersNumber.value * 5);
				// apply edu/gov/charity discount
				outlookPrice = edugovcharDiscount(outlookPrice);
				optionsPrice = optionsPrice + outlookPrice;
			}
			return optionsPrice;
		}

		function round_to_precision(x, precision) {
            var y = +x + (precision === undefined ? 0.5 : precision/2);
            return y - (y % (precision === undefined ? 1 : +precision));
        }
		function getTotal() {
		    //Here we calculate, return and show the total price by calling our function

			// set variables
		    var theForm = document.forms["orderform"];
// 			var contractLength = theForm.elements["duration"];
			var inDollars = theForm.elements["dollars"];
// 			var edugovDiscount = theForm.elements["edugov"];
		    //Each function returns a number so by calling them we add the values they return together
		    var finalPrice = round_to_precision(getUsersPrice() + getOptionsPrice(), 0.5);

			//display the result (dollars or euro's)
			if(inDollars.checked==false)
			{
				document.getElementById('totalprice').innerHTML = " € "+finalPrice.toFixed(2);
		    }
		    if(inDollars.checked==true)
			{
			var finalPrice = finalPrice * 1.1;
				document.getElementById('totalprice').innerHTML = " $ "+finalPrice.toFixed(2);
			}
			return +finalPrice.toFixed(2);
		}
		var firstCall = true;
		function checkSubscription() {
			//disable optional features when basic subscription is chosen; enable submit button when terms are accepted
			var theForm = document.forms["orderform"];
// 			var includeCollaboraUsers = theForm.elements["collabora"];
// 			var includeCollaboraCheck = theForm.elements["collaboraCheck"];
			var includeCollaboraCheck = false;
// 			var includeOnlyofficeCheck = theForm.elements["onlyofficeCheck"];
			var includeOnlyofficeCheck = false;
			var includeOutlook = theForm.elements["outlook"];
			// var includeBranding = theForm.elements["branding"];
			// var includeSpreed = theForm.elements["spreed"];
// 			var includeRemoteinstall = theForm.elements["remoteinstall"];
			var includeRemoteinstall = false;
			var chosenEdition = "standard";
			var agreedToTerms = theForm.elements["terms"];
			var submitButton = theForm.elements["submit"];
			var selectedUsersNumber = theForm.elements["users"];
// 			document.getElementById("collaboraUserNumberChoiceDiv").style.display = "none";
// 			document.getElementById("getenterprisequote").style.display = "none";
			// disable them by default as they are blocked by the default basic subscription
			includeRemoteinstall.disabled = false;
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
				includeRemoteinstall.disabled = true;
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
