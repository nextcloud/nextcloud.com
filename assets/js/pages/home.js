define(['jquery', 'lodash', 'waypoints', 'TweenMax', 'bodymovin'],
	function ($, _, waypoints, TweenMax, bodymovin) {
		$(document).ready(function() {
			'use strict';
			var homePage = {
				init: function() {
					this.svgAnimationsHandler();
					this.heroAnimation();
				},

				variables: {
					heroHeading: '.jumbotron--heading-1',
					heroSubtitle: '.jumbotron--lead',
					heroImage: '.topbanner',
					heroAnnounce: '.announcement',
					heroButton: '.toptext .button',
				},

				heroAnimation: function () {
					var heroTimeline = new TimelineMax ();

					heroTimeline.to($(this.variables.heroHeading), 1, {y:0 , autoAlpha: 1});
					heroTimeline.to($(this.variables.heroSubtitle), 1, {y:0 , autoAlpha: 1}, '-= 0.6');
					heroTimeline.to($(this.variables.heroButton), 1, {y:0 , autoAlpha: 1}, '-= 0.6');
					heroTimeline.to($(this.variables.heroImage), 1, {y:0 , autoAlpha: 1}, '-= 1');
					heroTimeline.to($(this.variables.heroAnnounce), 1, {x:0 , autoAlpha: 1}, '-= 1');
				},

				svgAnimationsHandler: function() {
					var elements = [
						'community',
						'privacy',
						'flexibility'
					];

					elements.forEach(_.bind(this.animateSvg, this));
				},

				animateSvg: function(key) {
					new Waypoint({
						element: document.getElementById('why-nextcloud'),
						offset: '60%',
						handler: function() {
							anim.play();
						}
					});

					var animContainer = document.querySelectorAll('#why-nextcloud div [data-name='+key+']')[0];
					var params = {
						container: animContainer,
						renderer: 'svg',
						loop: false,
						autoplay: false,
						autoloadSegments: false,
						path: templateUrl + '/assets/img/home/'+key+'/data.json'// path to your data.json file you rendered from AE
					};
					var anim;
					anim = bodymovin.loadAnimation(params);
				}
			};
			homePage.init();
		});
	});


// Replace with a global animation
// $('.topbanner').velocity('transition.slideUpBigIn');
// $('.toptext').velocity('transition.fadeIn', 2000);
