/**
* Listen to scroll to change header opacity class
*/
$(window).load(function() {
   
    function checkScroll() {
    var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      if (bodyScrollTop !== 0) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    }

    if ($('.navbar').length > 0) {
        $(window).on('scroll load resize', function () {
            checkScroll();
        });
    }
});


/**
* Mobile fullscreen trigger
*/
$(document).ready(function() {
	$('#toggle').click(function() {
	$(this).toggleClass('active');
	$('#overlay').toggleClass('open');
	$('.navbar').toggleClass('mobile-menu-open');
	});
});




/**
* Show Header when scroll in resolution lower then widht 800px
*/
var didScroll;
var lastScrollTop = 0;
var delta = 100;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('#navbar').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('#navbar').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}


/**
* Animations and behaviour of hamburguer menu
*/
//$(window).load(function() {
//
//    var elements = [
//        'black',
//        'white',
//    ];
//    elements.forEach(function(key) {
//        new Waypoint({
//            element: document.getElementById('menu-black'),
//            offset: '0%',
//            handler: function() {
//                anim.play();
//            }
//        });
//        var animContainer = document.querySelectorAll('#menu-black [data-name='+key+']')[0];
//        var params = {
//            container: animContainer,
//            renderer: 'svg',
//            loop: false,
//            autoplay: false,
//            autoloadSegments: false,
//            path: templateUrl + '/assets/img/menu/'+key+'/data.json'// path to your data.json file you rendered from AE
//
//        };
//        var anim;
//        anim = bodymovin.loadAnimation(params);
//    });
//});
//
