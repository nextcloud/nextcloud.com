define(['jquery', 'underscore', 'velocity', 'velocityUI', 'globals'],
function ($, _) {
	$(document).ready(function() {
		'use strict';
		var main = {
			init: function() {
				this.variables.buttonDropdownSelector.on('click', _.bind(this.buttonDropdown, this));
				$(window).on('scroll.fadeOnce', _.bind(this.revealOnScroll, this, event));
				this.animationOnLoadPage();
				$(this.variables.navigationLinkSelector).click(_.bind(this.changePageHandler, this));
			},

			variables : {
				topHeaderSelector: '.topheader',
				heroSectionBackgroundSelector: '.background',
				slideshowContentSelector: '.slideshow',
				slideshowIndicatorsSelector: '.indicators',
				slideshowImageOnTopSelector: '.image-top',
				buttonDropdownContentSelector: $('.dropdown-content'),
				buttonDropdownSelector: $('.button--dropdown'),
				textTriggerSelector: '.textTrigger',
				indicatorSlideshow: 'btn_carousel',
				navigationLinkSelector: '.nav__item a',
				visibleClass : 'visible',
				activeClass: 'active'
			},

			changePageHandler: function (event) {
				var pageUrl = $(event.currentTarget).attr('href'),
					currentUrl = window.location.pathname.slice(0, -1);

				if (pageUrl === currentUrl) {
					event.preventDefault();
					return ;
				} else {
					this.getPageAjax(event);
				}
			},

			getPageAjax: function(event) {
				event.preventDefault();

				var targetPage = $(event.currentTarget).attr('href').substring(1),
					self = this,
					parsedHtml,
					parsedScripts,
					styles;

				this.transitionPages('loading');
				this.changeUrl(event);

				$.when(
					$.get(targetPage, function(html) {
						parsedHtml = html;
					}),

					$.get(ASSETSLOCATION + 'css/' + targetPage +'.css', function(css) {
						styles = css;
					}),

					$.get(ASSETSLOCATION + 'js/pages/' + targetPage + '.js', function(scripts) {
						parsedScripts = scripts;
					})
				)

				.then(function() {
					var parsedTitle = $(parsedHtml).filter('title').text(),
						htmlContent = $(parsedHtml).filter('.app').find('.content');

					$('.app').html(htmlContent);
					$(document).find('title').text(parsedTitle);

					// INLINING STYLES HERE
					$(document).find('head').append('<style>' + styles + '</style>');
					self.transitionPages('loaded');

					// INLINING SCRIPTS HERE
					parsedScripts;
					self.animationOnLoadPage();
				});
			},

			changeUrl: function(event) {
				var pageUrl = $(event.currentTarget).attr('href');

				if(pageUrl!=window.location){
					window.history.pushState({path:pageUrl},'',pageUrl + '/');
				}
				return ;
			},

			transitionPages: function(state) {
				if (state === 'loading') {
					$('.transitioner').addClass('transitioner--animation');

					return;
				} if (state === 'loaded') {
					$('.transitioner').removeClass('transitioner--animation');

					return;
				}
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
						$(element).addClass('fade-in').velocity('transition.slideUpIn');
					}
				});
			},
		};
		main.init();
	});
});
