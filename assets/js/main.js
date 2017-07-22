define(['jquery', 'lodash', 'enquire', 'TweenMax'],
	function ($, _, enquire, TweenMax) {
		$(document).ready(function() {
			'use strict';
			var main = {
				init: function() {
					this.variables.buttonDropdownSelector.on('click', _.bind(this.buttonDropdown, this));
					$(window).on('scroll.fadeOnce', _.bind(this.revealOnScroll, this, event));
					this.animationOnLoadPage();
					this.removeRevealOnScroll();
					this.animationOnLoadPageTimeline.play();
				},

				variables: {
					topHeaderSelector: '.topheader',
					heroSectionBackgroundSelector: '.background',
					buttonDropdownSelector: $('.button--dropdown'),
					buttonDropdownContentSelector: $('.dropdown-content'),
					SlideshowTextTriggerSelector: $('.textTrigger'),
					spriteSlideshowSelector: $('.image-top-container'),
					slideshowContentSelector: '.slideshow',
					slideshowIndicatorsSelector: '.indicators',
					slideshowImageOnTopSelector: '.image-top',
					textTriggerSelector: '.textTrigger',
					indicatorSlideshow: 'btn_carousel',
					visibleClass : 'visible',
					activeClass: 'active'
				},

				checkScrollPosition: function() {
					var currentScrollPosition = $(document).scrollTop().valueOf();

					if (currentScrollPosition > 500) {
						$('.revealOnScroll:not(.fade-in)').each(_.bind(this.removeRevealOnScroll, this));
					} else {
						return;
					}
				},

				removeRevealOnScroll: function(index, element) {
					$(element).addClass('fade-in');
				},

				buttonDropdown: function() {
					this.variables.buttonDropdownSelector.toggleClass(this.variables.activeClass);
					this.variables.buttonDropdownContentSelector.toggleClass(this.variables.visibleClass);
				},

				animationOnLoadPage: function() {
					this.animationOnLoadPageTimeline = new TimelineMax ({paused: true});
					var stuff = $(this.variables.topHeaderSelector);


					this.animationOnLoadPageTimeline.to(stuff, 1, {y: 50, autoAlpha: 1});
					// $(this.variables.topHeaderSelector).velocity('transition.slideUpBigIn');
					// $(this.variables.heroSectionBackgroundSelector).velocity('transition.fadeIn', 1000);
				},

				smoothScroll: function() {
					$('a[href*="#"]:not([href="#"]):not([data-toggle="collapse"])').click(function() {

						if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
							var target = $(this.hash);
							target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

							if (target.length) {
								$('html, body').animate({
									scrollTop: target.offset().top
								}, 1000);

								return false;
							}
						}
					});
				},

				revealOnScroll: function() {
					var scrollTop = $(window).scrollTop();
					$('.revealOnScroll:not(.fade-in)').each(function(index, element) {
						var selectorOffset = $(element).offset();
						if (scrollTop + window.innerHeight - 100 > selectorOffset.top) {
							$(element).addClass('fade-in').velocity('transition.slideUpIn');
						}
					});
				},
			};
			main.init();
		});
	});
