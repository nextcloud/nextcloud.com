//config require.js
requirejs.config({
	baseURL: "wp-content/themes/next/assets/js/",
	paths: {
		jquery:"vendor/jquery.min",
		waypoints:"vendor/jquery.waypoints.min",
		enquire:"vendor/enquire",
		bodymovin:"vendor/bodymovin",
		headroom:"vendor/headroom",
		underscore:"vendor/underscore",
		velocity:"vendor/velocity.min",
		velocityUI:"vendor/velocity.ui.min",
		scrollMagic:"vendor/ScrollMagic.min",
		hammer:"vendor/hammer.min",
		inview:"vendor/jquery.inview",
	},
	shim: {
		enquire: {
			deps: ["jquery"]
		},
		bodymovin: {
			deps: ["jquery"]
		},
		underscore: {
			deps: ["jquery"]
		},
		velocity: {
			deps: ["jquery"]
		},
		waypoints: {
			deps: ["jquery"]
		},
		velocityUI: {
			deps: ["velocity"],
		}
	}
});