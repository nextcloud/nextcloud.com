$(document).ready(function() {
    'use strict';
    var enterprisePage = {
        init: function() {

			this.animationOnLoadPage();
			this.smoothScroll();

			enquire.register('screen and (max-width: 480px)', {
				//match: _.bind(this.resultsBindMobile, this) 
			});

			enquire.register('screen and (min-width: 481px)', {
				match: _.bind(this.enterpriseBindDesktop, this) 
			});
		},

		variables : {
			topHeaderSelector: ".topheader",
			heroSectionBackgroundSelector: ".background",
			menuAnchorSelector: "#menuAnchor"
		},

		animationOnLoadPage: function() {
			$(this.variables.topHeaderSelector).velocity('transition.slideUpBigIn');
			$(this.variables.heroSectionBackgroundSelector).velocity('transition.fadeIn', 1000);
		},

		enterpriseBindDesktop: function() {
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
				.addTo(controller);
		}
    }
    enterprisePage.init();
});
