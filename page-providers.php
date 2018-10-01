<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/providers.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>Nextcloud Server Changelog</h1>
        </div>
    </div>
</div>

<section class="content">
<div class="container">

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js"></script>
<div class="row">
    <div class="col-md-6 col-md-offset-3 text-center">
        <h1><?php echo $l->t('Nextcloud providers');?></h1>
        <p><?php echo $l->t('Nextcloud is a private cloud solution you can host wherever you want. On your own hardware,');?> <a class="hyperlink" href="<?php echo home_url('devices') ?>"><?php echo $l->t('a device you bought</a> or at a provider!');?><p>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <p><?php echo $l->t('We have over 50 different providers who offer anything from a Virtual Machine with Nextcloud you have to manage yourself to a fully handled Nextcloud account where you just have to log in, maintained by your provider. Some providers offer (limited) free tiers, some focus on home users and others on business; some aim for low prices while others offer extensive backups, downtime prevention and great support. Pick what you need!');?></p>
        <p><?php echo $l->t('Please note that we have no formal relationship with any of these providers and take no responsibility for their services or quality. If you want to be sure to get quality service with the backing of Nextcloud engineers,');?> <a class="hyperlink" href="<?php echo home_url('contact') ?>"><?php echo $l->t('get in contact with us</a>');?> <a class="hyperlink" href="<?php echo home_url('partners') ?>"><?php echo $l->t('or one of our partners.</a>');?></p>
        <p><?php echo $l->t('You can leave comments on your experiences with the providers or ask questions <a class="hyperlink" href="https://help.nextcloud.com/c/hosting">in our hosting category on the forums.</a> Feedback is VERY much welcomed as it helps others to choose their ideal provider!');?></p>
    </div>
</div>
<div class="row">
    <div class="text-center">
    <h1><?php echo $l->t('Choose your provider');?></h1>
    </div>
</div>
 <div class="row">
	<div class="col-md-4 col-md-offset-2">
		Country: <select id="countryPicker" class="form-control">
			<option value="all">World</option>
		</select>
		<p><input type="checkbox" id="FreePlans"> <?php echo $l->t('Show only free plans');?></p>
	</div>
	<div class="col-md-4 col-md-offset-1">
        <p><?php echo $l->t('Consumers or Enterprise focus:');?><br/>
		<input type="radio" id="hostingconsumer" name="hosting" value="consumer"> <?php echo $l->t('Consumers');?><br/>
		<input type="radio" id="hostingorganization" name="hosting" value="organization"> <?php echo $l->t('Enterprises');?><br/>
		<input type="radio" id="hostingboth" name="hosting" value="both" checked> <?php echo $l->t('Both');?></p>
	</div>
</div>

<div id="providers" class="row">
</div>
<p><strong><?php echo $l->t('If you offer Nextcloud Server account hosting, you can be <a class="hyperlink" href="/providers/apply">listed on this page</a>. If you want to report an abuse by one of the providers listed above, you can send us an email to abuse@nextcloud.com.');?></strong></p>

<script type="text/javascript">
// 	$( "#hostingboth" ).prop( "checked", true );
	$( document ).ready(function() {
		var items = [];
		var countries = [];
		var selectedCountryCode = 'all';
		var filterFreePlans = false;

		var filterHosting = 'both';
		/**
		 * Based on the Apache licensed https://github.com/coolaj86/knuth-shuffle
		 */
		 function shuffle(array) {
		 	var currentIndex = array.length, temporaryValue, randomIndex;

		 	// While there remain elements to shuffle...
		 	while (0 !== currentIndex) {
		 		// Pick a remaining element...
		 		randomIndex = Math.floor(Math.random() * currentIndex);
		 		currentIndex -= 1;

		 		// And swap it with the current element.
		 		temporaryValue = array[currentIndex];
		 		array[currentIndex] = array[randomIndex];
		 		array[randomIndex] = temporaryValue;
		 	}
		 	return array;
		 }
		function filterItems(country, plan, hosting) {
			var filteredItems = [];
			$.each(items, function (key, provider) {
				// Filter for the country
				if(typeof country !== 'undefined' && country !== 'all') {
					var hasCountryFlag = false;
					$.each(provider.flags, function (key, value) {
						if(value === country) {
							hasCountryFlag = true;
						}
					});
					if(!hasCountryFlag) {
						return true;
					}
				}
				// Filter for free plans
				if (plan) {
					if(provider.freeplans !== true) {
						return true;
					}
				}
				// Filter for who this is perfect for
				if(hosting !== 'both') {
					if(provider.supports !== 'both') {
						if(provider.supports !== hosting) {
							return true;
						}
					}
				}
				// Iterate and template all the remaining ones. Yay.
				filteredItems.push('<div class="col-xs-12 col-sm-6 col-md-4">');
						filteredItems.push('<div class="provider prov-thumbnail"> ');
							filteredItems.push('<div class="bannerhead">')
								filteredItems.push('<a href="');
								filteredItems.push(provider.url);
								filteredItems.push('" target="_blank" title="');
								filteredItems.push(provider.title);
								filteredItems.push('"><img class="provider-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/providers/');
								filteredItems.push(provider.imagename);
								filteredItems.push('"></a><br \>');
								filteredItems.push(provider.title);
								filteredItems.push('<br \>');
								$.each(provider.flags, function (key, value) {
									filteredItems.push('<span style="margin: 1px" class="flag-icon flag-icon-' + value + '"></span>');
									// Add country to country array if it does not exists.
									if ($.inArray(value, countries) == -1) {
										countries.push(value);
									}
								});
							filteredItems.push('<br \></div>');
							filteredItems.push('<div class="bannerfoot">');
								filteredItems.push('<p>');
									filteredItems.push(provider.specializes);
								filteredItems.push('</p>');
							filteredItems.push("</div>");
						filteredItems.push("</div>");
					filteredItems.push("</div>");
 				filteredItems.push("</div>");
// 			filteredItems.push("</div>");
			});
			$('#providers').empty();
			$("<div/>", {
				html: filteredItems.join("")
			}).appendTo('#providers');
		}

		var request = new XMLHttpRequest();
		request.open('GET', '<?php echo get_template_directory_uri() ?>/assets/providers.json', true);

		request.onload = function() {
		  if (request.status >= 200 && request.status < 400) {
		    items = JSON.parse(request.responseText);

		    shuffle(items);
		    filterItems(selectedCountryCode, filterFreePlans, filterHosting);

		    $.each(countries, function (key, countryCode) {
		        $('#countryPicker').append($('<option/>', {
		          value: countryCode,
		          html: countryCode
		        }));
		      });
		  } else {
		    // We reached our target server, but it returned an error

		  }
		};

		request.onerror = function() {
		  // There was a connection error of some sort
		};
		request.send();

		$('#countryPicker').change(function () {
			selectedCountryCode = $(this).find("option:selected").attr('value');
			filterItems(selectedCountryCode, filterFreePlans, filterHosting);
		});
		$('#FreePlans').change(function () {
			filterFreePlans = $('#FreePlans').is(':checked');
			filterItems(selectedCountryCode, filterFreePlans, filterHosting);
		});
// 		$('#certified').change(function () {
// 			filterOnlyCertified = $('#certified').is(':checked');
// 			filterItems(selectedCountryCode, filterFreePlans, filterOnlyCertified, filterHosting);
// 		});
		$("input[name='hosting']").change(function () {
			filterHosting = $(this).val();
			filterItems(selectedCountryCode, filterFreePlans, filterHosting);
		});
	})
</script>
</div>
</section>
