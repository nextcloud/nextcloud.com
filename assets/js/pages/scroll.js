define(['jquery', 'lodash'],
	function ($, _) {
		$(document).ready(function() {
			'use strict';
			var scrollingpage = {
				init: function() {
					if(window.location.hash) {
                           $('html, body').animate({
                               scrollTop: $(window.location.hash).offset().top
                           }, 2000);
                       }
				}
			};
			scrollingpage.init();
		});
	});
