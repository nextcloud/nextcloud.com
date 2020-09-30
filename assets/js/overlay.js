define(['jquery',],
	function ($) {
		$(document).ready(function() {
			$('.overlay').hide();
			$('.overlay-trigger').on('click', function(e) {
				e.preventDefault();
				$.get(e.target.href, function(r) { 
					if (r) {
						$('.overlay-content').append(r);
						$('.hide-in-overlay').hide();
						$('.overlay').fadeIn('800');
					}
				});
			});
			$('.overlay-close').on('click', function() {
				$('.overlay').fadeOut('800');
			});
			$('.overlay').on('click', function() {
				$('.overlay').fadeOut('800');
				$('overlay-content').empty();
			});
		});
	});
