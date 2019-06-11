define(['jquery', 'lodash'],
	function ($, _) {
		$(document).ready(function() {
			'use strict';
			var sharing = {
				init: function() {
					if(window.location.hash) {
                        if(window.location.hash.substring(1)!=='videoverification') {
                            $('html, body').animate({
                                scrollTop: $('#federationScroll').offset().top
                            }, 2000);
                        }
						if(window.location.hash.substring(1)!=='federation') {
							$('#IDtext').text('Your Federated Cloud ID is');
							$('#userName').text(window.location.hash.substring(1));
						}
                        if(window.location.hash.substring(1)=='videoverification') {
                            $('html, body').animate({
                                scrollTop: $('#videoverificationScroll').offset().top
                            }, 2000);
                        }
					}
				}
			};
			sharing.init();
		});
	});
