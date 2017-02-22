define(["jquery", "bootstrap"  ], 
    function ($, bootstrap ) {
    $(document).ready(function() {
		$('#myCarousel').carousel({
			interval: 4000
		});
    });
});
