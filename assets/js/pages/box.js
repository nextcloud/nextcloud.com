define(['jquery', 'velocity', 'velocityUI' ],
	function ($, Velocity) {
		$(document).ready(function() {
			$('.introImage').velocity('transition.slideUpBigIn');
			$('.introText').velocity('transition.fadeIn', 2500);
		});
	});
