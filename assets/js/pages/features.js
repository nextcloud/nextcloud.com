define(["jquery", "underscore", "enquire", "jqueryUi", "youtubeplugin", "bootstrap"],
function ($, _, enquire, jqueryui, jqyoutube) {
	$(document).ready(function() {
	    'use strict';
	    var featuresPage = {
	        init: function() {
						jQuery("a.youtube").YouTubePopup({ hideTitleBar: true });

				enquire.register('screen and (max-width: 480px)', {
					//match: _.bind(this.resultsBindMobile, this)
				});

				enquire.register('screen and (min-width: 481px)', {
					//match: _.bind(this.enterpriseBindDesktop, this)
				});
			},

			variables : {
			},

	    }
	    featuresPage.init();
	});
});
