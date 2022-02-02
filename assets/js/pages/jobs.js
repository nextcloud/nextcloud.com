define(['jquery', 'lodash', 'bootstrap'],
	function ($, _) {
		$(document).ready(function() {
			'use strict';
			var jobsPage = {
				init: function() {
					var hash = window.location.hash;
					if (hash) {
						var collapsible = $(hash + '.collapse');
						if(collapsible && collapsible.length){
							collapsible.collapse('show');
							collapsible.on('shown.bs.collapse', function() {
								// scroll to header
								$('a[href="' + hash + '"]')[0].scrollIntoView();
								collapsible.off('shown.bs.collapse');
							});
						}
					}
				},
				variables: {}
			};
			jobsPage.init();
		});
	});
