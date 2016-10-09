$(window).load(function() {
    /**
     * Animations
     */
    var elements = [
        'community',
        'privacy',
        'flexibility'
    ];
    elements.forEach(function(key) {
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
    });
});

// Standart Fade in animation to the content

$(document).ready(function() {
	$(window).on('scroll.fadeOnce', function(event) {	
		var scrollTop = $(this).scrollTop();
		$('.revealOnScroll:not(.fade-in)').each(function(index, element) {
			var selectorOffset = $(element).offset();
			if (scrollTop + window.innerHeight - 100 > selectorOffset.top) {
				$(element).addClass("fade-in").velocity('transition.slideUpIn');
			}
		 });
	});	
	$(".topbanner").velocity('transition.slideUpBigIn');
	$(".toptext").velocity('transition.fadeIn', 2000);
	$(".navbar-header").velocity('transition.fadeIn', 1000 );
});
