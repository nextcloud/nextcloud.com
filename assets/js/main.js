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
        $(this.variables.navigationLinkSelector).click(_.bind(this.getPageAjax, this))

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

      getPageAjax: function(event) {
        event.preventDefault();
        this.changeUrl(event);

        const WEBROOT = window.location.origin + "/wp-content/themes/next/";
        var targetPage = $(event.currentTarget).attr("href").substring(1);
        this.transitionPages();
        reveal('top');

        $.ajax({
          beforeSend: function() {
            $("body").addClass("sended");
          },

          type: "POST",
          url: WEBROOT + "ajax-request.php",
          data: {page: targetPage},
          success: function(data){
            $('.app').html(data);
          }});

        // $(".jumbotron").load(WEBROOT + "ajax-request.php");

        return ;
      },

      changeUrl: function(event) {
        var pageUrl = $(event.currentTarget).attr("href");

        if(pageUrl!=window.location){
    			window.history.pushState({path:pageUrl},'',pageUrl);
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
