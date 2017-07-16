define(["jquery", "underscore", "enquire", "velocity", "velocityUI", "scrollMagic"],
function ($, _, enquire, Velocity, velocityUI, ScrollMagic) {
	$(document).ready(function() {
	    'use strict';
	    var enterprisePage = {
	        init: function() {

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
	    enterprisePage.init();
	});
});
