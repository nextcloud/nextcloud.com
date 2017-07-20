define(['jquery', 'lodash', 'enquire', 'jqueryUi', 'youtubeplugin', 'bootstrap'],
	function ($, _, enquire, jqueryui, jqyoutube) {
		$(document).ready(function() {
			'use strict';
			var education = {
				init: function() {
					jQuery('a.youtube').YouTubePopup({ hideTitleBar: true });

					enquire.register('screen and (max-width: 480px)', {
					//match: _.bind(this.resultsBindMobile, this)
					});

					enquire.register('screen and (min-width: 481px)', {
					//match: _.bind(this.enterpriseBindDesktop, this)
					});
				}
			};
			education.init();
		});
	});
