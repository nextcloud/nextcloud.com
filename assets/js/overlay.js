/**
 * Overlay functionality
 * 
 * This functionality allows to open a linked page or image in an overlay.
 * 
 * Usage:
 * - open the php file of the page in which you want the overlay to appear 
 * - Include this line at the bottom of the page (be sure to veryfy the 
 * path to overlay.php):
 * `<?php require get_template_directory().'/overlay.php'; ?>`
 * - Add the class `overlay-trigger` to each <a> or <img> element that should
 * open the overlay. Note: the <a> elements must have a valid href attribute
 * and the image elements must have a valid src attribute;
 * - If there's anything you want to hide in the overlayed page, add the class 
 * `hide-in-overlay` to the html tags are to be hidden.
 * 
 */

define(['jquery',],
	function ($) {
		$(document).ready(function() {
			/**
			 * Fade in the overlay
			 */
			var openOverlay = function() {
				$('.overlay').fadeIn('800');
				$('#nav').hide();
				$('#menuAnchor').hide();
				$('.page-footer').hide();
			};
			/**
			 * Fade out the overlay and clear content
			 */
			var closeOverlay = function() {
				// Remove the content
				$('.overlay-content').empty();
				$('.overlay').fadeOut('800');
				$('#menuAnchor').show();
				$('.page-footer').show();
				$('#nav').show();
				$('#nav').css('opacity', 1);
			};
			
			$('.overlay').hide();
			$('.overlay-trigger').on('click', function(event) {
				event.preventDefault();
				if (event.target.href) {
					$.get(event.target.href, function(r) {
						$('.overlay-wrapper').show();
						$('.overlay-image').hide();
						$('.overlay-content').append(r);
						$('.hide-in-overlay').hide();
					});
					openOverlay();
				} else if(event.target.src) {
					$('.overlay-wrapper').hide();
					$('.overlay-image').attr('src', event.target.src);
					$('.overlay-image').show();
					openOverlay();
				} 
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
