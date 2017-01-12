 
$(document).ready(function() {
    "use strict";
    var defaultComponents = {
        init: function() {

			this.variables.buttonDropdownSelector.on("click", _.bind(this.buttonDropdown, this))
            this.smoothScroll();
		},

		variables : {
			buttonDropdownSelector: $(".button--dropdown"),
			buttonDropdownContent: $(".dropdown-content"),
			visibleClass : "visible",
			activeClass: "active"
		},

		buttonDropdown: function (event) {
			this.variables.buttonDropdownSelector.toggleClass(this.variables.activeClass);
			this.variables.buttonDropdownContent.toggleClass(this.variables.visibleClass);
// 			event.preventDefault();
		},

		smoothScroll: function() {
			$('a[href*="#"]:not([href="#"]):not([data-toggle="collapse"]').click(function() {
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

        IndicatorSlideshow: function() {
            var visibleElement = $(".textTrigger").parent();
            
             $(visibleElement).on("inview", function(event, isInView) {
                 if (isInView) {
                    var currentSlide = $(event.currentTarget).data("slide");
                    var $indicator = $(".btn_carousel:nth-child(" + (parseInt(currentSlide) + 1)+")")
                    var $active = $('.btn_carousel.active');
                    var imageFeatures = $(".image-top"); 

                    $active.removeClass('active');
                    $indicator.addClass('active');
                 }
             });
        },

       slideshow : function () {
        this.IndicatorSlideshow();
        
        var controller = new ScrollMagic.Controller();

        this.variables.$textTrigger.each(function() {
        
            var self = $(this);
            var imageFeatures = $(".image-top"); 

            var animateImage = new ScrollMagic.Scene ({
                triggerElement: this,
                offset: "100%",
                reverse: true,
                triggerHook: 1
            })

            .on("enter", function() {
                
                var visibleElement = $(".textTrigger").parent();
                 
                 $(visibleElement).on("inview", function(event, isInView) {
                    if (isInView) {
                        console.log("here")
                        
                    var currentSlide = $(event.currentTarget).data("slide");

                    if (currentSlide > 1) {
                        //console.log("here")
                    }
                        
                                         }
                });
                    
                imageFeatures.css("bottom", (parseFloat(imageFeatures.css('bottom')) + 318) + 'px'); //this updates the image position
            })
            
            .on("leave", function() {
                imageFeatures.css("bottom", (parseFloat(imageFeatures.css('bottom')) - 318) + 'px'); //this updates the image position
            })
            .addIndicators({
                    colorTrigger:"red" //remove after finish, this are just need to to see the triggers
                })

            .addTo(controller);
        });

        //set device image to fix a position
        var imagePin = new ScrollMagic.Scene ({
            triggerElement: "#imageTrigger", 
            duration: "300%",
            triggerHook: 0
        })
        .setPin("#imageTrigger")
        .setClassToggle(".indicators", "active") // add indicators to scene
        .addIndicators({ //remove after finish, this are just need to to see the triggers
            colorTrigger:"black"
        })
        .addTo(controller);
       } 
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