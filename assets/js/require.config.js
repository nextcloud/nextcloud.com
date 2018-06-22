requirejs.config({
	waitSeconds : 0,
	baseURL: 'wp-content/themes/next/assets/js/',
	paths: {
		jquery: ['../../node_modules/jquery/dist/jquery.min'],
        modernizr: ['old/vendor/modernizr-2.7.0.min'],
		waypoints: ['../../node_modules/waypoints/lib/jquery.waypoints.min'],
		enquire: ['old/vendor/enquire.min'],
		bodymovin: ['old/vendor/bodymovin.min'],
		headroom: ['old/vendor/headroom.min'],
		headroomJquery: ['old/vendor/jQuery.headroom.min'],
		lodash: ['../../node_modules/lodash/core.min'],
		TweenLite: ['../../node_modules/gsap/src/minified/TweenLite.min'],
		TimelineLite: ['../../node_modules/gsap/src/minified/TimelineLite.min'],
		TimelineMax: [ '../../node_modules/gsap/src/minified/TimelineMax.min'],
		TweenMax: ['../../node_modules/gsap/src/minified/TweenMax.min'],
        velocity: ['old/vendor/velocity.min'],
        velocityUI: ['old/vendor/velocity.ui.min'],
        scrollMagic: ['old/vendor/ScrollMagic.min'],
		hammer: ['old/vendor/hammer.min'],
		inview: ['old/vendor/jquery.inview.min'],
		plyr: ['../../node_modules/plyr/dist/plyr'],
		bootstrap: ['../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min'],
		highlight: ['../../node_modules/highliht.js/lib/highlight'],
	},
	shim: {
		headroomJquery: {
			deps: ['jquery', 'headroom']
		},
		enquire: {
			deps: ['jquery']
		},
		bodymovin: {
			deps: ['jquery']
		},
		velocity: {
			deps: ['jquery']
		},
		waypoints: {
			deps: ['jquery', 'bodymovin']
		},
		velocityUI: {
			deps: ['velocity']
		},
		bootstrap: {
			deps: ['jquery']
		}
	}
});
