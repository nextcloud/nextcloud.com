$(window).load(function() {
    'use strict';
    var sections = $('.nav__sections')[0];
    var links = $('.nav__section');
    var bgWrapper = $('.nav__bg-wrapper')[0];
    var bg = $('.nav__bg')[0];
    console.log(sections);
    var bgBCR = bg.getBoundingClientRect();
    sections.addEventListener('mouseover', function () {
        setTimeout(function () {
            return bg.classList.add('is-animatable');
        });
    });
    sections.addEventListener('mouseleave', function () {
        bg.classList.remove('is-animatable');
    });
    [].forEach.call(links, function (link) {
        link.addEventListener('mouseover', function () {
            bgWrapper.classList.add('is-visible');
            var links = this.querySelector('.nav__links');
            var linksBCR = links.getBoundingClientRect();
            var scaleX = linksBCR.width / bgBCR.width;
            var scaleY = linksBCR.height / bgBCR.height;
            bg.style.transform = 'translate(' + linksBCR.left + 'px) scale(' + scaleX + ', ' + scaleY + ')';
        });
        link.addEventListener('mouseleave', function () {
            bgWrapper.classList.remove('is-visible');
        });
    });
});







// Older version

// /**
// * Listen to scroll to change header opacity class
// */
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