define(['jquery',],
	function ($) {
		$(document).ready(function() {
			/**
			 * Fade in the overlay
			 */
			var openOverlay = function() {
				$('.overlay').fadeIn('800');
				$('#menuAnchor').hide();
			};
			/**
			 * Fade out the overlay and clear content
			 */
			var closeOverlay = function() {
				$('.overlay').fadeOut('800');
				// Remove the content
				$('overlay-content').empty();
			};
			
			$('.overlay').hide();
			$('.overlay-trigger').on('click', function(event) {
				event.preventDefault();
				$.get(event.target.href, function(r) { 
					console.log(r);
					if (r) {
						$('.overlay-content').append(r);
						$('.hide-in-overlay').hide();
						openOverlay();
					}
				});
			});
			
			// Close the overlay when clicking on the close button
			$('.overlay-close').on('click',closeOverlay);
			/** Click outside */
			// Stop event propagation when clicking inside the content
			$('.overlay-content').click(function(event) {
				event.stopPropagation();
			});
			// Close the overlay when clicking outside
			$('.overlay').on('click', closeOverlay);
		});
	});
