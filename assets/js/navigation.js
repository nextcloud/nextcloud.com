$(window).load(function() {
    /**
    * Listen to scroll to change header opacity class
    */
    function checkScroll() {
    var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      if (bodyScrollTop !== 0) {
            $('.nav').addClass('scrolled');
        } else {
            $('.nav').removeClass('scrolled');
        }
    }

    if ($('.nav').length > 0) {
        $(window).on('scroll load resize', function () {
            checkScroll();
        });
    }
});

//Bodymovin menu Animation
$(document).ready(function() {
    var menuAnimation;
    var menuOpened = false;
    
    // Prevent scrolling if menu is opened
    $('html').on('scroll touchmove mousewheel', function(e) {
        if(menuOpened) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        }
    });

    var animContainer = document.querySelectorAll('.container button')[0];
    var params = {
        container: animContainer,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        autoloadSegments: true,
        path: templateUrl + '/assets/img/menu/data.json'
    };
    menuAnimation = bodymovin.loadAnimation(params);
    menuAnimation.stop();

    $('.container button').click(function () {
        if(menuOpened) {
            menuAnimation.setDirection(-1);
        } else {
            menuAnimation.setDirection(0);
        }
        menuAnimation.play();
        menuOpened = !menuOpened;
    });
    
    /**
    * Mobile fullscreen trigger
    */
    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
        $('.navbar').toggleClass('mobile-menu-open');
    });
});

/**
* Mobile fullscreen trigger
*/
$(document).ready(function() {
     $('#toggle').click(function() {
     $(this).toggleClass('active');
     $('.mobile-bg').toggleClass('active');
     });

    /**
    * Show Header when scroll in resolution lower then width 800px
    */
    var didScroll;
    var lastScrollTop = 0;
    var delta = 100;
    var navbarHeight = $('#nav').outerHeight();

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
             $('#nav').removeClass('nav-down').addClass('nav-up');
         } else {
             // Scroll Up
             if(st + $(window).height() < $(document).height()) {
                 $('#nav').removeClass('nav-up').addClass('nav-down');
             }
         }
        
         lastScrollTop = st;
     }

    // Fade In animation 
    $("#nav").velocity('transition.fadeIn', 1000 );
});

//Enquire.js This draw the dropdowns and collapse itens
enquire.register("screen and (max-width: 992px)", {

  // Triggered when the media query transitions
  // from *unmatched* to *matched*
  match : function() {

    console.log('it works');
  },
  
  // Triggered when the media query transitions 
  // from a *matched* to *unmatched*                        
  unmatch : function() {

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
                console.log(left + " Inital value of the element + half of the element")
                console.log(formattedMarg/2 + " Margin container")
                console.log(bg.offset().left + ' Background position')
                
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
  },    
                                        
});