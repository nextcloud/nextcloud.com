define(["jquery", "underscore", "enquire", "velocity", "velocityUI"],
function ($, _, enquire, Velocity, velocityUI) {
  $(document).ready(function() {
    "use strict";
    var main = {
      init: function() {
        const WEBROOT = window.location.origin + "/wp-content/themes/next/";

        this.variables.buttonDropdownSelector.on("click", _.bind(this.buttonDropdown, this));
        $(window).on('scroll.fadeOnce', _.bind(this.revealOnScroll, this, event));
        this.animationOnLoadPage();
        $(this.variables.navigationLinkSelector).click(_.bind(this.changePageHandler, this))

        enquire.register('screen and (max-width: 991px)', {
          // match: _.bind(this.modulesBindMobile, this)
        });

        enquire.register('screen and (min-width: 992px)', {
          // match: _.bind(this.modulesBindDesktop, this)
        });
      },

      variables : {
        topHeaderSelector: ".topheader",
        heroSectionBackgroundSelector: ".background",
        buttonDropdownSelector: $(".button--dropdown"),
        buttonDropdownContentSelector: $(".dropdown-content"),
        SlideshowTextTriggerSelector: $(".textTrigger"),
        spriteSlideshowSelector: $(".image-top-container"),
        slideshowContentSelector: ".slideshow",
        slideshowIndicatorsSelector: ".indicators",
        slideshowImageOnTopSelector: ".image-top",
        textTriggerSelector: ".textTrigger",
        indicatorSlideshow: "btn_carousel",
        navigationLinkSelector: ".nav__item a",
        visibleClass : "visible",
        activeClass: "active"
      },

      changePageHandler: function (event) {
        var pageUrl = $(event.currentTarget).attr("href"),
            currentUrl = window.location.pathname.slice(0, -1);

            console.log(pageUrl);
            console.log(currentUrl);
        if (pageUrl === currentUrl) {
          event.preventDefault();
          return ;
        } else {
          this.getPageAjax(event);
        }
      },

      getPageAjax: function(event) {
        event.preventDefault();

        const ENV = window.location.protocol ;
        const ASSETSLOCATION = ENV + "/wp-content/themes/next/assets/";
        var targetPage = $(event.currentTarget).attr("href").substring(1);
        var parsedHtml;

        $(".transitioner").addClass("transitioner--animation");
        this.transitionPages();
        this.changeUrl(event);

        $.when(
          $.get(targetPage, function(html) {
            parsedHtml = html;
          }),

          $.get(ASSETSLOCATION + "css/" + targetPage +".css")
          // $.getScript(ASSETSLOCATION + "js/pages/" + targetPage + ".js")
        )

        .then(function() {
          var parsedTitle = $(parsedHtml).filter('title').text();

          $(".app").html(parsedHtml);
          $(document).find("title").text(parsedTitle);
          $(".transitioner").removeClass("transitioner--animation");
        });

        return ;
      },

      changeUrl: function(event) {
        var pageUrl = $(event.currentTarget).attr("href");

        if(pageUrl!=window.location){
    			window.history.pushState({path:pageUrl},'',pageUrl + "/");
    		}
    		return ;
      },

      transitionPages: function() {

      },

      buttonDropdown: function(event) {
        this.variables.buttonDropdownSelector.toggleClass(this.variables.activeClass);
        this.variables.buttonDropdownContentSelector.toggleClass(this.variables.visibleClass);
      },

      animationOnLoadPage: function() {
        $(this.variables.topHeaderSelector).velocity('transition.slideUpBigIn');
        $(this.variables.heroSectionBackgroundSelector).velocity('transition.fadeIn', 1000);
      },

      revealOnScroll: function(event) {
        var scrollTop = $(window).scrollTop();
        $('.revealOnScroll:not(.fade-in)').each(function(index, element) {
          var selectorOffset = $(element).offset();
          if (scrollTop + window.innerHeight - 100 > selectorOffset.top) {
            $(element).addClass("fade-in").velocity('transition.slideUpIn');
          }
        })
      },
    }
    main.init();
  });
});
