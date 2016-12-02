
// Main Fadein animation function
$(document).ready(function() {

$(".button--dropdown").on("click", function(event) {
	$(".dropdown-content").addClass("visible");
	event.preventDefault();
});
	$(window).on('scroll.fadeOnce', function(event) {	
		var scrollTop = $(this).scrollTop();
		$('.revealOnScroll:not(.fade-in)').each(function(index, element) {
			var selectorOffset = $(element).offset();
			if (scrollTop + window.innerHeight - 100 > selectorOffset.top) {
				$(element).addClass("fade-in").velocity('transition.slideUpIn');
			}
		 });
	});	
});	