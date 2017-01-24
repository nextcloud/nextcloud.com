define(["jquery", "underscore", "enquire"],
function ($, _, enquire) {
    $(document).ready(function() {
        "use strict";
        var defaultComponents = {
            init: function() {

    			this.variables.buttonDropdownSelector.on("click", _.bind(this.buttonDropdown, this))
                this.smoothScroll();
                
                enquire.register('screen and (max-width: 991px)', {
    				match: _.bind(this.modulesBindMobile, this),
                    unmatch: _.bind(this.cleanModulesMobile, this)
    			});

    			enquire.register('screen and (min-width: 992px)', {
    				match: _.bind(this.modulesBindDesktop, this), 
                    unmatch: _.bind(this.cleanModulesDesktop, this) 
    			});
    		},

    		variables : {
    			buttonDropdownSelector: $(".button--dropdown"),
    			buttonDropdownContentSelector: $(".dropdown-content"),
                SlideshowTextTriggerSelector: $(".textTrigger"),
                spriteSlideshowSelector: $(".image-top-container"),
                slideshowContentSelector: ".slideshow",
                slideshowIndicatorsSelector: ".indicators",
                slideshowImageOnTopSelector: ".image-top",
                textTriggerSelector: ".textTrigger",
                indicatorSlideshow: "btn_carousel",
    			visibleClass : "visible",
    			activeClass: "active"
    		},

            modulesBindDesktop: function() {
            },

            modulesBindMobile: function() {
            },

            cleanModulesDesktop: function() {
            },

            cleanModulesMobile: function() {
            },

    		buttonDropdown: function (event) {
    			this.variables.buttonDropdownSelector.toggleClass(this.variables.activeClass);
    			this.variables.buttonDropdownContent.toggleClass(this.variables.visibleClass);
    		},

    		smoothScroll: function() {
    			$('a[href*="#"]:not([href="#"]):not([data-toggle="collapse"])').click(function() {
    				
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    				var target = $(this.hash);
    				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    				
                    if (target.length) {
    					$('html, body').animate({
    					scrollTop: target.offset().top
    					}, 1000);

    					return false;
    				}
    				}
    			});
    		},
    	}
        defaultComponents.init();
    });

    $(window).on('scroll.fadeOnce', function(event) {   
        var scrollTop = $(this).scrollTop();
        $('.revealOnScroll:not(.fade-in)').each(function(index, element) {
            var selectorOffset = $(element).offset();
            if (scrollTop + window.innerHeight - 100 > selectorOffset.top) {
                $(element).addClass("fade-in").velocity('transition.slideUpIn');
            }
         });
    }); 
});
	