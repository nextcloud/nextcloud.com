define(['jquery',],
	function ($) {
		$(document).ready(function() {
			$('.overlay').hide();
			$('.overlay-trigger').on('click', function(event) {
				event.preventDefault();
				$.get(event.target.href, function(r) { 
					if (r) {
						$('.overlay-content').append(r);
						$('.hide-in-overlay').hide();
						$('.overlay').fadeIn('800');
					}
				});
			});
			// Close the overlay when clicking on the close button
			$('.overlay-close').on('click', function() {
				$('.overlay').fadeOut('800');
			});
			/** Click outside */
			// Stop event propagation when clicking inside the content
			$('.overlay-content').click(function(event) {
				event.stopPropagation();
			});
			// Close the overlay when clicking outside
			$('.overlay').on('click', function() {
				$('.overlay').fadeOut('800');
				// Remove the content
				$('overlay-content').empty();
			});
		});
	});
