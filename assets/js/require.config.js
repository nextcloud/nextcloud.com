requirejs.config({
	waitSeconds : 0,
	baseURL: 'wp-content/themes/next/assets/js/',
	paths: {
		jquery: ['https://code.jquery.com/jquery-3.2.1.min', '../../node_modules/jquery/dist/jquery.min'],
		modernizr: ['https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min', 'vendor/modernizr.min'],
		waypoints: ['https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min', '../../node_modules/waypoints/lib/jquery.waypoints.min'],
		enquire: ['https://cdnjs.cloudflare.com/ajax/libs/enquire.js/2.1.6/enquire.min', 'vendor/enquire'],
		bodymovin: ['https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.0/bodymovin.min', 'vendor/bodymovin'],
		headroom: ['https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.3/headroom.min', 'vendor/headroom'],
		headroomJquery: ['https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.3/j	Query.headroom.min', 'vendor/jquery.headroom.min'],
		lodash: ['https://cdn.jsdelivr.net/lodash/4.17.4/lodash.core.min', '../../node_modules/lodash/core.min'],
		TweenLite: ['https://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenLite.min', '../../node_modules/gsap/src/minified/TweenLite.min'],
		TimelineLite: ['https://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TimelineLite.min', '../../node_modules/gsap/src/minified/TimelineLite.min'],
		TimelineMax: ['https://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TimelineMax.min', '../../node_modules/gsap/src/minified/TimelineMax.min'],
		TweenMax: ['https://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min', '../../node_modules/gsap/src/minified/TweenMax.min'],
		velocity: ['https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min', 'node_modules/velocity.min'],
		velocityUI: ['https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.ui.min', 'node_modules/velocity.ui.min'],
		scrollMagic: ['https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min', 'node_modules/ScrollMagic.min'],
		hammer: ['https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min', 'vendor/hammer.min'],
		inview: ['https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min', 'vendor/jquery.inview'],
		plyr: ['https://cdn.plyr.io/2.0.13/plyr', '../../node_modules/plyr/dist/plyr'],
		bootstrap: ['https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min', '../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min'],
		highlight: ['https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min', '../../node_modules/highliht.js/lib/highlight'],
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
