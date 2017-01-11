 
$(document).ready(function() {
    "use strict";
    var defaultComponents = {
        init: function() {

			this.variables.buttonDropdownSelector.on("click", _.bind(this.buttonDropdown, this))
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

		slideshow : function () {
        var controller = new ScrollMagic.Controller();

        //Create a new scene for each textTrigger, see the in the HTML we have 3 instead of 4

        this.variables.$textTrigger.each(function() {

            const $trigger = $(this);
            var imageFeatures = $(".image-top"); 

            var animateImage = new ScrollMagic.Scene ({
                triggerElement: this,
                offset: "100%",
                triggerHook: 1
            })

            .on("enter", function () {
                imageFeatures.css("bottom", (parseFloat(imageFeatures.css('bottom')) + 318) + 'px'); //this updates the image position
                
                const $sceneId = $trigger.attr('id');
                // Assumes that we find an indicator with the appropriate class *fingers crossed*
                const $indicator = $('a[href="#' + $sceneId + '"]').parent();
                const $active = $('.btn_carousel.active');
                $active.removeClass('active');
                $indicator.addClass('active');
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
            duration: "300%", //this set the duration of 3 times the viewport height
            triggerHook: 0
        })
        .setPin("#imageTrigger")
        .setClassToggle(".indicators", "active") // add indicators to scene
        .addIndicators({ //remove after finish, this are just need to to see the triggers
            colorTrigger:"black"
        })
        .addTo(controller);

        controller.scrollTo(function(target) {

        $(document).click(_.bind(this.smoothScroll, this));

        controller.scrollTo(function(newpos) {
            newpos -= 68; // leave space for header
            TweenMax.to(window, 0.5, {
                scrollTo: {
                    y: newpos
                }
            });
        });
        });
		
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