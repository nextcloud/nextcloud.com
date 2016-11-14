

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

    //features slideshow
    
    var controller = new ScrollMagic.Controller();

    $(".textTrigger").each(function() {

        var imageFeatures = $(".image-top");  

        var animateImage = new ScrollMagic.Scene ({
            triggerElement: this,
            offset: "100%",
            triggerHook: 1
        })

        .on("enter", function () {
            imageFeatures.css("bottom", (parseFloat(imageFeatures.css('bottom')) + 318) + 'px');
        })
        
        .on("leave", function() {
            imageFeatures.css("bottom", (parseFloat(imageFeatures.css('bottom')) - 318) + 'px');
        })
        .addIndicators({
                colorTrigger:"red"
            })

        .addTo(controller);
    });

    var imagePin = new ScrollMagic.Scene ({
        triggerElement: "#imageTrigger", 
        duration: "300%",
        triggerHook: 0
    })
    .setPin("#imageTrigger")
    .setClassToggle(".indicators", "active")
    .addIndicators({
        colorTrigger:"black"
    })
    .addTo(controller);

    //change behaviour of scroll
    controller.scrollTo (function (newpos) {
        Tween.Max.to(window, 0.5, {scrollTo: {y: newpos}});
    });

    $(document).on("click", "a[href=#]", function(e) {
        var id = $(this).attr("href");

    if($(id).length > 0) {
        e.preventDefault();

        // trigger scroll
        controller.scrollTo(id);

        // If supported by the browser we can also update the URL
        if (window.history && window.history.pushState) {
        history.pushState("", document.title, id);
        }
    }
    });
}); 
