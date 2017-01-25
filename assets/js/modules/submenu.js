define(["jquery", "underscore", "enquire", "scrollMagic"],
function ($, _, enquire, ScrollMagic) {
	$(document).ready(function() {
	    'use strict';
	    var subMenuModule = {
	        init: function() {

				enquire.register('screen and (max-width: 480px)', {
					//match: _.bind(this.resultsBindMobile, this) 
				});

				enquire.register('screen and (min-width: 481px)', {
					match: _.bind(this.subMenuEvent, this) 
				});
			},

			variables : {
				topHeaderSelector: ".topheader",
				heroSectionBackgroundSelector: ".background",
				menuAnchorSelector: "#menuAnchor"
			},

			subMenuEvent: function() {
				this.pinFiltersBar();
			},

			pinFiltersBar: function() {
				var controller = new ScrollMagic.Controller();
				var scene = new ScrollMagic.Scene({
					triggerElement: this.variables.menuAnchorSelector,
					triggerHook:0,
					offset:-90
				})
					.setPin(this.variables.menuAnchorSelector)
					.setClassToggle(".nav", "no-shadow")
					.addTo(controller);
			}
	    }
	    subMenuModule.init();
	});
});
