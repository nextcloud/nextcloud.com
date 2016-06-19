<div class="row">
	<div class="col-md-4">
		Country: <select id="countryPicker" class="form-control">
			<option value="all">World</option>
		</select>
	</div>
	<div class="col-md-7 col-md-offset-1">
		<input type="checkbox" id="FreePlans"> Show only free plans<br>
<!-- 		<input type="checkbox" id="certified"> Show only Certified Partners<br> -->
		<input type="radio" id="hostingboth" name="hosting" value="both" checked> Both<br>
		<input type="radio" id="hostingconsumer" name="hosting" value="consumer"> Consumers<br>
		<input type="radio" id="hostingorganization" name="hosting" value="organization"> Organization<br>
	</div>
</div>

<div id="providers" class="row">
</div>
<div class="alert alert-info">If you offer Nextcloud Server account hosting, you can be <a href="/providers/apply">listed on this page</a>. If you want to report an abuse by one of the providers listed above, you can sent us an email to abuse@nextcloud.com.</div>

<!-- <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script> -->
<script type="text/javascript">
// 	$( "#hostingboth" ).prop( "checked", true );
	$( document ).ready(function() {
		var items = [];
		var countries = [];
		var selectedCountryCode = 'all';
		var filterFreePlans = false;
		var filterHosting = 'both';
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
								filteredItems.push('" target="_blank" rel="noreferrer" title="');
								filteredItems.push(provider.title);
								filteredItems.push('"><img class="provider-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/providers/');
								filteredItems.push(provider.imagename);
								filteredItems.push('"></a><br \>');
								filteredItems.push(provider.title);
								$.each(provider.flags, function (key, value) {
									filteredItems.push('<img class="flag" src="<?php echo get_template_directory_uri() ?>/assets/img/flags/' + value + '.gif">');
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
		$.getJSON('<?php echo get_template_directory_uri() ?>/assets/providers.json', function (data) {
			items = data;
			filterItems(selectedCountryCode, filterFreePlans, filterHosting);
			$.each(countries, function (key, countryCode) {
				$('#countryPicker').append($('<option/>', {
					value: countryCode,
					html: countryCode
				}));
			});
		});
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
