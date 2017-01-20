 
$(document).ready(function() {
    "use strict";
    var defaultComponents = {
        init: function() {

			this.variables.buttonDropdownSelector.on("click", _.bind(this.buttonDropdown, this))
            this.smoothScroll();
            
            enquire.register('screen and (max-width: 991px)', {
				match: _.bind(this.modulesBindMobile, this) 
			});

			enquire.register('screen and (min-width: 992px)', {
				match: _.bind(this.modulesBindDesktop, this) 
			});
		},

		variables : {
			buttonDropdownSelector: $(".button--dropdown"),
			buttonDropdownContent: $(".dropdown-content"),
            $SlideshowTextTrigger: $(".textTrigger"),
            spriteSlideshowSelector: $(".image-top-container"),
            slideshowContentSelector: ".slideshow",
            slideshowIndicatorsSelector: ".indicators",
			visibleClass : "visible",
			activeClass: "active"
		},

        modulesBindDesktop: function() {
            this.slideshow();
        },

        modulesBindMobile: function() {
            this.slideshowMobile();
        },


		buttonDropdown: function (event) {
			this.variables.buttonDropdownSelector.toggleClass(this.variables.activeClass);
			this.variables.buttonDropdownContent.toggleClass(this.variables.visibleClass);
// 			event.preventDefault();
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

        indicatorSlideshow: function() {
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

        slideshowImagePosition: function(currentSlide) {
            var visibleElement = $(".textTrigger").parent();

             $(visibleElement).on("inview", function(event, isInView) {
                 if (isInView) { 
                     var currentSlide = $(event.currentTarget).data("slide");
                     var imageFeatures = $(".image-top"); 

                      if (currentSlide === 1) {
                         imageFeatures.css({
                             "top": "0" + "px"
                            });
                     }

                     if (currentSlide === 2) {
                         imageFeatures.css({
                             "top": "-318" + "px"
                            });
                     }

                     if (currentSlide === 3) {
                         imageFeatures.css({
                             "top": "-636" + "px"
                            });
                     }

                     if (currentSlide === 4) {
                         imageFeatures.css({
                             "top": "-954" + "px"
                            });
                     }
                }
             });
        },

       slideshow : function () {
        this.indicatorSlideshow();
        this.slideshowImagePosition();
        
        var controller = new ScrollMagic.Controller();
        this.variables.$SlideshowTextTrigger.each(function() {
        
            var self = $(this);
            var imageFeatures = $(".image-top"); 

            var animateImage = new ScrollMagic.Scene ({
                triggerElement: this,
                offset: "100%",
                reverse: true,
                triggerHook: 1
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
        .addTo(controller);
       },

       slideshowMobile: function() {
            $(this.variables.slideshowIndicatorsSelector).addClass(this.variables.activeClass);
            //this.destroyMagicScrollOnMobile();
            this.slideshowImagePositionMobile();
            this.slideshowChangeImage();
            this.indicatorSlideshow();
            this.updateSlideshowImageSizes();
            this.toggleTextSlideshowMobile();
            $(window).resize(_.bind(this.updateSlideshowImageSizes, this));
       },

       updateSlideshowImageSizes: function() {
            var imageDeviceWidth = $(".image-back").width() * "0.9376733"; // Using proportions to do the math
            var imageDeviceHeight = $(".image-back").height() * "0.722727273"; // Using proportions to do the math
            var imageOnTopMargins = $(".image-back").width() * "0.0314"; // Using proportions to do the math

            $(".image-top-container").css({
                "width": imageDeviceWidth + "px",
                "height": imageDeviceHeight + "px",
                "top": imageOnTopMargins + "px",
                "left": imageOnTopMargins + "px"
            });
       },

       slideshowChangeImage: function() {
            var pathImageDesktop = $('.image-top').attr('src');
            var pathImageDesktopValueString = pathImageDesktop.length;
            var lastValueString = pathImageDesktopValueString - "4";

            var pathImageDesktopWithoutformat = pathImageDesktop.substring(0, lastValueString);

            console.log(pathImageDesktopWithoutformat);

            $('.image-top').attr('src', pathImageDesktopWithoutformat + "_mobile" + ".jpg");
            
       },

       toggleTextSlideshowMobile: function() {
            var firstText = $(".right-text-grey").first();
            firstText.addClass(this.variables.activeClass);

                var element = document.getElementById("slideshow");
    
                Hammer(element).on("swiperight", _.bind(this.showNextTextSlideshow, this));

                Hammer(element).on("tap",_.bind(this.showNextTextSlideshow, this)); 
        
            //$(".slideshow").hammer(options).bind("swiperight", _.bind(this.showNextTextSlideshow, this))
            //Hammer(slideshow).on("swiperight", event, _.bind(this.showNextTextSlideshow, this));

       },

       showNextTextSlideshow: function(event) {
            var currentText = $(".right-text-grey.active");
            var nextText = $(".right-text-grey.active").next();

            nextText.addClass(this.variables.activeClass);
            currentText.removeClass(this.variables.activeClass);

       },


        slideshowImagePositionMobile: function() {
            var visibleElement = $(".textTrigger").parent();

             $(visibleElement).on("inview", function(event, isInView) {
                 if (isInView) { 
                     var currentSlide = $(event.currentTarget).data("slide");
                     var imageFeatures = $(".image-top"); 

                      if (currentSlide === 1) {
                         imageFeatures.css({
                             "left": "0" + "px"
                            });
                     }

                     if (currentSlide === 2) {
                         imageFeatures.css({
                             "left": "-477" + "px"
                            });
                     }

                     if (currentSlide === 3) {
                         imageFeatures.css({
                             "left": "-953" + "px"
                            });
                     }

                     if (currentSlide === 4) {
                         imageFeatures.css({
                             "left": "-1430" + "px"
                            });
                     }
                }
             });
        },

        destroyMagicScrollOnMobile: function(event) {
            controller.removeScene(scene);
            // Destroy with scene reset
            controller = controller.destroy(true);
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
