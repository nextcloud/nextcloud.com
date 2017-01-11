$(document).ready(function() {
    "use strict";
    var homepageApp = {
        init: function () {

            this.variables.$heroImage.velocity('transition.slideUpBigIn');
            this.variables.$heroText.velocity('transition.fadeIn', 2000);
            this.animationIconsWhyNextcloud();

            enquire.register("screen and (max-width: 992px)", {
                //match: _.bind(this.mobileEvent, this) 
            });

            enquire.register("screen and (min-width: 993px)", {
                match: _.bind(this.slideshow, this)
            });
        },

        variables : {
            $heroImage : $(".topbanner"),
            $heroText : $(".toptext"),
            $textTrigger : $(".textTrigger"),
            $imageOnTop : $(".image-top"),
            activeClass: "active",
        },

        animationIconsWhyNextcloud: function () {
            var elements = [
                'community',
                'privacy',
                'flexibility'
            ];

            elements.forEach(function(key) {
                new Waypoint({
                    element: document.getElementById('why-nextcloud'),
                    offset: '60%',
                    handler: function() {
                        anim.play();
                    }
                });

                var animContainer = document.querySelectorAll('#why-nextcloud div [data-name='+key+']')[0];
                var params = {
                    container: animContainer,
                    renderer: 'svg',
                    loop: false,
                    autoplay: false,
                    autoloadSegments: false,
                    path: templateUrl + '/assets/img/home/'+key+'/data.json'// path to your data.json file you rendered from AE

                };
                var anim;
                anim = bodymovin.loadAnimation(params);
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
    homepageApp.init();
});
