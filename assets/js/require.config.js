//config require.js
requirejs.config({
	baseURL: "wp-content/themes/next/assets/js/",
	paths: {
		jquery: ['https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min','vendor/jquery.min'],
		oldJquery: ['https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min', "old/vendor/jquery-1.10.2.min"],
		waypoints: ['https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min', 'vendor/jquery.waypoints.min'],
		enquire: ['https://cdnjs.cloudflare.com/ajax/libs/enquire.js/2.1.6/enquire.min', "vendor/enquire"],
		bodymovin: ['https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.7.0/bodymovin.min', "vendor/bodymovin"],
		headroom: ['https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.3/headroom', "vendor/headroom"],
		headroomJquery: ['https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.3/jQuery.headroom.min', "vendor/jquery.headroom.min"],
		underscore: ['https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min', "vendor/underscore"],
		velocity: ['https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min', "vendor/velocity.min"],
		velocityUI: ['https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.ui.min', "vendor/velocity.ui.min"],
		scrollMagic: ['https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min', "vendor/ScrollMagic.min"],
		hammer: ['https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min', "vendor/hammer.min"],
		inview: ['https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min', "vendor/jquery.inview"],
		bootstrap: ['https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js', "vendor/bootstrap"],
		youtubeplugin: "old/vendor/jquery.youtubepopup.min",
	},
	shim: {
		headroomJquery: {
			deps: ["jquery", "headroom"]
		},
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
			deps: ["jquery", "bodymovin"]
		},
		velocityUI: {
			deps: ["velocity"]
		},
		bootstrap: {
			deps: ["jquery"]
		},
		youtubeplugin: {
			deps:["oldJquery"]
		}
	}
});
