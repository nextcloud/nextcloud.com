$(window).load(function() {
    'use strict';
    var section = $('.nav__sections');
    var menus = $('.nav__section');
    var bgWrapper = $('.nav__bg-wrapper');
    var bg = $('.nav__bg');

    console.log(bg.offset().left + ' posição do background')
    
    section.on('mouseover', function () {
        setTimeout(function() {
            bg.addClass('is-animatable');
        });
    });

    section.on('mouseleave', function () {
        setTimeout(function() {
            bg.removeClass('is-animatable');
        });
    });

    $(menus).each(function(index, element) {
        var menu = $(element);
        menu.on('mouseover', function () {
            bgWrapper.addClass('is-visible');
            var selectedDropdown = menu.find('.nav__links');
            window.test = menu.find('.nav__links');
            
            var formattedBord = $('.container').outerWidth() - $('.container').innerWidth();
            var formattedPadd = $('.container').innerWidth() - $('.container').width();
            var formattedMarg = $('.container').outerWidth(true) - $('.container').outerWidth();

            var cssPadding = 30;
            var height = selectedDropdown.innerHeight(),
                width = selectedDropdown.innerWidth(),
                left = menu.offset().left + cssPadding + (menu.innerWidth() - cssPadding)/2 ;
                console.log(left + " Soma do valor inical mais metade do elemento")
                console.log(formattedMarg/2 + " Margem container")
                console.log(bg.offset().left + ' posição do background')
                
            var centerLabel = left - (formattedMarg/2) - menu.innerWidth() ;
            // console.log(left)
            
            bg.css({
                '-moz-transform': 'translateX(' + centerLabel + 'px)',
                '-webkit-transform': 'translateX(' + centerLabel + 'px)',
                '-ms-transform': 'translateX(' + centerLabel + 'px)',
                '-o-transform': 'translateX(' + centerLabel + 'px)',
                'transform': 'translateX(' + centerLabel + 'px)',
                'width': width +'px',
                'height': height +'px'
            });
        })
        menu.on('mouseleave', function () {
            bgWrapper.removeClass('is-visible');
        });
    });
    // console.log(bg.offset().left + ' posição do background')
});







// Older version

/**
* Listen to scroll to change header opacity class
*/
// $(window).load(function() {
   
//     function checkScroll() {
//     var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
//       if (bodyScrollTop !== 0) {
//             $('.navbar').addClass('scrolled');
//         } else {
//             $('.navbar').removeClass('scrolled');
//         }
//     }

//     if ($('.navbar').length > 0) {
//         $(window).on('scroll load resize', function () {
//             checkScroll();
//         });
//     }
// });

// /**
// * Mobile fullscreen trigger
// */
// $(document).ready(function() {
// 	$('#toggle').click(function() {
// 	$(this).toggleClass('active');
// 	$('#overlay').toggleClass('open');
// 	$('.navbar').toggleClass('mobile-menu-open');
// 	});
// });

// /**
// * Show Header when scroll in resolution lower then width 800px
// */
// var didScroll;
// var lastScrollTop = 0;
// var delta = 100;
// var navbarHeight = $('#navbar').outerHeight();

// $(window).scroll(function(event){
//     didScroll = true;
// });

// setInterval(function() {
//     if (didScroll) {
//         hasScrolled();
//         didScroll = false;
//     }
// }, 250);

// function hasScrolled() {
//     var st = $(this).scrollTop();
    
//     // Make sure they scroll more than delta
//     if(Math.abs(lastScrollTop - st) <= delta)
//         return;
    
//     // If they scrolled down and are past the navbar, add class .nav-up.
//     // This is necessary so you never see what is "behind" the navbar.
//     if (st > lastScrollTop && st > navbarHeight){
//         // Scroll Down
//         $('#navbar').removeClass('nav-down').addClass('nav-up');
//     } else {
//         // Scroll Up
//         if(st + $(window).height() < $(document).height()) {
//             $('#navbar').removeClass('nav-up').addClass('nav-down');
//         }
//     }
    
//     lastScrollTop = st;
// }

// $(document).ready(function() {
//     var menuAnimation;
//     var menuOpened = false;

//     // Prevent scrolling if menu is opened
//     $('html').on('scroll touchmove mousewheel', function(e) {
//         if(menuOpened) {
//             e.preventDefault();
//             e.stopPropagation();
//             return false;
//         }
//     });

//     var animContainer = document.querySelectorAll('.navbar-header button')[0];
//     var params = {
//         container: animContainer,
//         renderer: 'svg',
//         loop: false,
//         autoplay: false,
//         autoloadSegments: true,
//         path: templateUrl + '/assets/img/menu/data.json'
//     };
//     menuAnimation = bodymovin.loadAnimation(params);
//     menuAnimation.stop();

//     $('.navbar-header button').click(function () {
//         if(menuOpened) {
//             menuAnimation.setDirection(-1);
//         } else {
//             menuAnimation.setDirection(0);
//         }
//         menuAnimation.play();
//         menuOpened = !menuOpened;
//     });
	
// 	// Fade In animation 
// 	$(".navbar-header").velocity('transition.fadeIn', 1000 );
// });