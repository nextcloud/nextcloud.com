 
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
			buttonDropdownContentSelector: $(".dropdown-content"),
            SlideshowTextTriggerSelector: $(".textTrigger"),
            spriteSlideshowSelector: $(".image-top-container"),
            slideshowContentSelector: ".slideshow",
            slideshowIndicatorsSelector: ".indicators",
            slideshowImageOnTopSelector: ".image-top",
            textTriggerSelector: ".textTrigger",
			visibleClass : "visible",
			activeClass: "active"
		},

        modulesBindDesktop: function() {
            this.slideshowDesktop();
        },

        modulesBindMobile: function() {
            this.slideshowMobile();
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

        indicatorSlideshow: function() {
            var visibleElement = $(this.variables.textTriggerSelector).parent();
            
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
            var visibleElement = $(this.variables.textTriggerSelector).parent();

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

       slideshowDesktop : function () {
        this.indicatorSlideshow();
        this.slideshowImagePosition();
        this.slideshowChangeImageDesktop();
        
        var controller = new ScrollMagic.Controller();
        this.variables.SlideshowTextTriggerSelector.each(function() {
        
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
            this.slideshowChangeImageMobile();
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

       slideshowChangeImageMobile: function() {
            $(".image-top-container").find(".image__desktop").hide();
            $(".image-top-container").find(".image__mobile").show();
       },

       slideshowChangeImageDesktop: function() {
            $(".image-top-container").find(".image__desktop").show();
            $(".image-top-container").find(".image__mobile").hide();
       },

       toggleTextSlideshowMobile: function() {
            var firstText = $(".right-text-grey").first();
            firstText.addClass(this.variables.activeClass);

            var element = document.getElementById("slideshow");

            Hammer(element).on("swipeleft", _.bind(this.showNextTextSlideshow, this));
            Hammer(element).on("swiperight",_.bind(this.showPreviousTextSlideshow, this)); 
       },

       showNextTextSlideshow: function(event) {
            var slidesCount = $(".right-text-grey").last().data("slide");
            var currentSlide = $(event.currentTarget).data("slide");
            var NoMoreSlides = $(event.currentTarget).data("slide") + 1;
            var currentText = $(".right-text-grey.active");
            var nextText = $(".right-text-grey.active").next();

            nextText.addClass(this.variables.activeClass);
            currentText.removeClass(this.variables.activeClass);

            if (slidesCount <= NoMoreSlides) {
                console.log("here");
            }

       },

       showPreviousTextSlideshow: function(event) {
            var currentText = $(".right-text-grey.active");
            var nextText = $(".right-text-grey.active").prev();

            nextText.addClass(this.variables.activeClass);
            currentText.removeClass(this.variables.activeClass);

       },


        slideshowImagePositionMobile: function() {
            var visibleElement = $(".textTrigger").parent();

             $(visibleElement).on("inview", function(event, isInView) {
                 if (isInView) { 
                    var currentSlide = $(event.currentTarget).data("slide");
                    var imageFeatures = $(".image-top"); 
                    var slidesCount = $(".right-text-grey").last().data("slide");
                    var imageTopHeight = $(".image__mobile").width() / slidesCount ;


                      if (currentSlide === 1) {
                         imageFeatures.css({
                             "left": "0" + "px"
                            });
                     }

                     if (currentSlide === 2) {
                         imageFeatures.css({
                             "left": - imageTopHeight + "px"
                            });
                     }

                     if (currentSlide === 3) {
                         imageFeatures.css({
                             "left": - imageTopHeight * 2 + "px"
                            });
                     }

                     if (currentSlide === 4) {
                         imageFeatures.css({
                             "left": - imageTopHeight *  3 + "px"
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
