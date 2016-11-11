

// Why nextcloud icon animations
$(window).load(function() {
    // Top Container Animations
    $(".topbanner").velocity('transition.slideUpBigIn');
    $(".toptext").velocity('transition.fadeIn', 2000);


    /**
     * Animations
     */
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
    
    var controller = new ScrollMagic.Controller();

    $(".textTrigger").each(function() {   

        var animateImage = new ScrollMagic.Scene ({
            triggerElement: this,
            triggerHook: 1
        })

        // .setClassToggle(this, "active")

        .on("enter", function () {
            $(".image-top").css("bottom", (parseFloat($(".image-top").css('bottom')) + 318) + 'px');
        })
        
        .on("leave", function() {
            $(".image-top").css("bottom", (parseFloat($(".image-top").css('bottom')) - 318) + 'px');
        })
        .addIndicators({
                colorTrigger:"red"
            })

        .addTo(controller);
    });



    var imagePin = new ScrollMagic.Scene ({
        triggerElement: "#imageTrigger", 
        offset:170,
        duration: "400%"
    })
    .setPin("#imageTrigger")
    .setClassToggle(".indicators", "active")
    .addIndicators({
        colorTrigger:"black"
    })
    .addTo(controller);

});
