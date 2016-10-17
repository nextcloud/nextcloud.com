jQuery(document).ready(function($){
    function morphDropdown( element ) {
        this.element = element;
        this.mainNavigation = this.element.find('.main-nav');
        this.mainNavigationItems = this.mainNavigation.find('.has-dropdown');
        this.dropdownList = this.element.find('.dropdown-list');
        this.dropdownWrappers = this.dropdownList.find('.dropdown');
        this.dropdownItems = this.dropdownList.find('.content');
        this.dropdownBg = this.dropdownList.find('.bg-layer');
        this.mq = this.checkMq();
        this.bindEvents();
    }

    morphDropdown.prototype.checkMq = function() {
        //check screen size
        var self = this;
        return window.getComputedStyle(self.element.get(0), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "").split(', ');
    };

    morphDropdown.prototype.bindEvents = function() {
        var self = this;
        //hover over an item in the main navigation
        this.mainNavigationItems.mouseenter(function(event){
            //hover over one of the nav items -> show dropdown
            self.showDropdown($(this));
        }).mouseleave(function(){
            setTimeout(function(){
                //if not hovering over a nav item or a dropdown -> hide dropdown
                if( self.mainNavigation.find('.has-dropdown:hover').length == 0 && self.element.find('.dropdown-list:hover').length == 0 ) self.hideDropdown();
            }, 50);
        });
        
        //hover over the dropdown
        this.dropdownList.mouseleave(function(){
            setTimeout(function(){
                //if not hovering over a dropdown or a nav item -> hide dropdown
                (self.mainNavigation.find('.has-dropdown:hover').length == 0 && self.element.find('.dropdown-list:hover').length == 0 ) && self.hideDropdown();
            }, 50);
        });

        //click on an item in the main navigation -> open a dropdown on a touch device
        this.mainNavigationItems.on('touchstart', function(event){
            var selectedDropdown = self.dropdownList.find('#'+$(this).data('content'));
            if( !self.element.hasClass('is-dropdown-visible') || !selectedDropdown.hasClass('active') ) {
                event.preventDefault();
                self.showDropdown($(this));
            }
        });

    morphDropdown.prototype.showDropdown = function(item) {
        this.mq = this.checkMq();
        if( this.mq == 'desktop') {
            var self = this;
            var selectedDropdown = this.dropdownList.find('#'+item.data('content')),
                selectedDropdownHeight = selectedDropdown.innerHeight(),
                selectedDropdownWidth = selectedDropdown.children('.content').innerWidth(),
                selectedDropdownLeft = item.offset().left + item.innerWidth()/2 - selectedDropdownWidth/2;

            //update dropdown position and size
            this.updateDropdown(selectedDropdown, parseInt(selectedDropdownHeight), selectedDropdownWidth, parseInt(selectedDropdownLeft));
            //add active class to the proper dropdown item
            this.element.find('.active').removeClass('active');
            selectedDropdown.addClass('active').removeClass('move-left move-right').prevAll().addClass('move-left').end().nextAll().addClass('move-right');
            item.addClass('active');
            //show the dropdown wrapper if not visible yet
            if( !this.element.hasClass('is-dropdown-visible') ) {
                setTimeout(function(){
                    self.element.addClass('is-dropdown-visible');
                }, 10);
            }
        }
    };

    morphDropdown.prototype.updateDropdown = function(dropdownItem, height, width, left) {
        this.dropdownList.css({
            '-moz-transform': 'translateX(' + left + 'px)',
            '-webkit-transform': 'translateX(' + left + 'px)',
            '-ms-transform': 'translateX(' + left + 'px)',
            '-o-transform': 'translateX(' + left + 'px)',
            'transform': 'translateX(' + left + 'px)',
            'width': width+'px',
            'height': height+'px'
        });

        this.dropdownBg.css({
            '-moz-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
            '-webkit-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
            '-ms-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
            '-o-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
            'transform': 'scaleX(' + width + ') scaleY(' + height + ')'
        });
    };

    morphDropdown.prototype.hideDropdown = function() {
        this.mq = this.checkMq();
        if( this.mq == 'desktop') {
            this.element.removeClass('is-dropdown-visible').find('.active').removeClass('active').end().find('.move-left').removeClass('move-left').end().find('.move-right').removeClass('move-right');
        }
    };

    morphDropdown.prototype.resetDropdown = function() {
        this.mq = this.checkMq();
        if( this.mq == 'mobile') {
            this.dropdownList.removeAttr('style');
        }
    };

    var morphDropdowns = [];
    if( $('.cd-morph-dropdown').length > 0 ) {
        $('.cd-morph-dropdown').each(function(){
            //create a morphDropdown object for each .cd-morph-dropdown
            morphDropdowns.push(new morphDropdown($(this)));
        });

        var resizing = false;

        //on resize, reset dropdown style property
        updateDropdownPosition();
        $(window).on('resize', function(){
            if( !resizing ) {
                resizing =  true;
                (!window.requestAnimationFrame) ? setTimeout(updateDropdownPosition, 300) : window.requestAnimationFrame(updateDropdownPosition);
            }
        });

        function updateDropdownPosition() {
            morphDropdowns.forEach(function(element){
                element.resetDropdown();
            });

            resizing = false;
        };
    }
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