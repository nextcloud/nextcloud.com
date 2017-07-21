//config require.js
requirejs.config({
	baseURL: 'wp-content/themes/next/assets/js/',
	paths: {
		jquery: ['https://code.jquery.com/jquery-3.2.1.slim.min', '../../node_modules/jquery/dist/jquery.slim.min'],
		jqueryUi: ['https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min', 'vendor/jquery.ui'],
		modernizr: ['https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min', 'vendor/modernizr.min'],
		waypoints: ['https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min', 'vendor/jquery.waypoints.min'],
		enquire: ['https://cdnjs.cloudflare.com/ajax/libs/enquire.js/2.1.6/enquire.min', 'vendor/enquire'],
		bodymovin: ['https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.0/bodymovin.min', 'vendor/bodymovin'],
		headroom: ['https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.3/headroom.min', 'vendor/headroom'],
		headroomJquery: ['https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.3/jQuery.headroom.min', 'vendor/jquery.headroom.min'],
		lodash: ['https://cdn.jsdelivr.net/lodash/4.17.4/lodash.core.min', '../../node_modules/lodash/core.min'],
		TweenLite: ['../../node_modules/gsap/src/minified/TweenLite.min'],
		TimelineLite: ['../../node_modules/gsap/src/minified/TimelineLite.min'],
		TimelineMax: ['../../node_modules/gsap/src/minified/TimelineMax.min'],
		velocity: ['https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min', 'vendor/velocity.min'],
		velocityUI: ['https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.ui.min', 'vendor/velocity.ui.min'],
		scrollMagic: ['https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min', 'vendor/ScrollMagic.min'],
		hammer: ['https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min', 'vendor/hammer.min'],
		inview: ['https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min', 'vendor/jquery.inview'],
		bootstrap: ['https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min', 'vendor/bootstrap'],
		youtubeplugin: 'old/vendor/jquery.youtubepopup.min',
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
		TimelineMax: {
			deps: ['TimelineLite', 'TweenLite']
		},
		bootstrap: {
			deps: ['jquery']
		},
		youtubeplugin: {
			deps: ['jqueryUi', 'bootstrap']
		},
		jqueryUi: {
			deps: ['jquery']
		}
	}
});
