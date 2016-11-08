$(window).load(function() {
    "use strict";
    var HeaderApp = {
        init: function() {

        //Enquire.js This hides the list on hover in the mobile
        enquire.register("screen and (max-width: 992px,)", {
        match: _.bind(this.showListMobile, this)
        });

        enquire.register("screen and (min-width: 993px)", {
        // Triggered when the media query transitions
        // from *unmatched* to *matched*
        match: _.bind_(this.desktopDropdown, this)
        });
    },

    variables : {
        toggleSelector: "#toggle",
        navigationSelector: "#nav",
        sectionsSelector: ".nav__sections",
        sectionsContainerSelector: ".nav__sections-wrapper",
        sectionSelector: ".nav__section",
        navBackgroundSelector: ".nav__bg",
        navBackgroundWrapper: ".nav__bg-wrapper",
        rightNavigationSelector: ".right-buttons",
        linksSelector: ".nav__links",
        logoSelector: ".logo",
        mobileClass: "mobile",
        activeClass: "active",
        scrolledClass:"scrolled",
        backgroundAnimationClass: "is-animatable",
        linksVisibleClass: "is-visible",
        mobileBackgroundSelector: ".mobile-bg",
        mobileMenuClass: "menu-open"
    },

    showListMobile: function() {
        $(this.variables.navigationSelector).addClass(this.variables.mobileClass);


          /**
          * Mobile fullscreen trigger
          */
          $(this.variables.toggleSelector).click(function(index, element) {
              $(element).toggleClass(this.variables.activeClass);
              $(this.variables.mobileBackgroundSelector).toggleClass(this.variables.activeClass);
              $(this.variables.sectionsSelector).toggleClass(this.variables.activeClass);
              $(this.variables.rightNavigationSelector).toggleClass(this.variables.activeClass);
              $(this.variables.logoSelector).toggleClass(this.variables.mobileMenuClass);
          });

          $(this.variables.sectionSelector).click(function() {
              $(this.variables.linksSelector).removeClass(this.variables.activeClass);
              $(this.variables.sectionsContainerSelector).removeClass(this.variables.mobileClass);
              $(this.variables.linksSelector, this).toggleClass(this.activeClass);
              $(this.variables.sectionsContainerSelector).toggleClass(this.variables.mobileClass);
          });
    },

    backgroundDropdown: function() {

        $(this.variables.sectionSelector).on("mouseover", function (event) {
            var bg = $(this).find(this.variables.navBackgroundSelector).first();
            setTimeout(function () {
                bg.addClass(this.variables.backgroundAnimationClass);
            });

            var bgWrapper = $(this).find(this.variables.navBackgroundWrapper).first();
            var menu = $(this).find(this.variables.linksSelector).first();

            bgWrapper.addClass(this.variables.linksVisibleClass);

            var selectedDropdown = menu,
                height = selectedDropdown.innerHeight(),
                width = selectedDropdown.innerWidth(),
                liWidth = $(this).width(), // The total length of the li content text + padding
                aWidth = $(this).find("a").first().width(), // The total length of the text
                half = liWidth - (aWidth / 2);

            bg.css({
                "width": width + "px",
                "height": height + "px"
            });
        });
    },

    // To set the arrow above the drop down menu in the middle of the link text
    arrowDropdown: function() {
        $("#nav-bg").text(".nav__bg:before, .nav__bg:after { left: "+ half +"px}");

        $(this.variables.sectionSelector).on("mouseleave", function () {
            var bg = $(this).find(this.variables.navBackgroundSelector).first();
            setTimeout(function() {
                bg.removeClass(this.variables.backgroundAnimationClass);
            });

            var bgWrapper = $(this).find(this.variables.navBackgroundWrapper).first();
            bgWrapper.removeClass(this.variables.linksVisibleClass);
            $("#nav-bg").text();
        });
    },

    desktopDropdown: function() {
        _.bind(this.backgroundDropdown, this),
        _.bind(this.arrowDropdown, this)
    },


    //Listen to scroll to change header opacity class
    checkScroll: function() {
        var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;

        if (bodyScrollTop !== 0) {
            $(this.variables.navigationSelector).addClass(this.variables.scrolledClass);
            $(this.variables.logoSelector).addClass(this.variables.scrolledClass);
        }

        else {
            $(this.variables.navigationSelector).removeClass(this.variables.scrolledClass);
            $(this.variables.logoSelector).removeClass(this.variables.scrolledClass);
        }

        if ($(this.variables.navigationSelector).length > 0) {
            $(window).on("scroll load resize", function () {
                checkScroll();
            });
        }
    },


    //Bodymovin menu Animation
    menuToggledAnimation: function() {
        var menuAnimation;
        var menuOpened = false;

        // Prevent scrolling if menu is opened
        $("html").on("scroll touchmove mousewheel", function(e) {
            if(menuOpened) {
                e.preventDefault();
                e.stopPropagation();
                return false;
            }
        });

        var animContainer = document.querySelectorAll(".container button")[0];
        var params = {
            container: animContainer,
            renderer: "svg",
            loop: false,
            autoplay: false,
            autoloadSegments: true,
            path: templateUrl + "/assets/img/menu/data.json"
        };
        menuAnimation = bodymovin.loadAnimation(params);
        menuAnimation.stop();

        $(".container button").click(function () {
            if(menuOpened) {
                menuAnimation.setDirection(-1);
            } else {
                menuAnimation.setDirection(0);
            }
            menuAnimation.play();
            menuOpened = !menuOpened;
        });
    },


    //Show Header when scroll in resolution lower then width 800px
    showHeaderOnScroll: function () {
        var didScroll;
        var lastScrollTop = 0;
        var delta = 100;
        var navbarHeight = $(this.variables.navigationSelector).outerHeight();

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
                $(this.variables.navigationSelector).removeClass("nav-down").addClass("nav-up");
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $(this.variables.navigationSelector).removeClass("nav-up").addClass("nav-down");
                }
            }

            lastScrollTop = st;
        }
    },


    // Fade In animation
    $(this.variables.navigationSelector).velocity("transition.fadeIn", 1000 );
  },

  HeaderApp.init();
});