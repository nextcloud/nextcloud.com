define(['jquery', 'lodash', 'waypoints', 'velocity', 'bodymovin', 'velocityUI'],
	function ($, _, waypoints, Velocity, bodymovin) {
		$(document).ready(function() {
			'use strict';
			var homePage = {
				init: function() {
					this.svgAnimationsHandler();
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
