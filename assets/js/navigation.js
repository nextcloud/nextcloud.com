/**
* Listen to scroll to change header opacity class
*/
$(window).load(function() {
   
    function checkScroll() {
    var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      if (bodyScrollTop !== 0) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    }

    if ($('.navbar').length > 0) {
        $(window).on('scroll load resize', function () {
            checkScroll();
        });
    }
});


/**
* Mobile fullscreen trigger
*/
$(document).ready(function() {
	$('#toggle').click(function() {
	$(this).toggleClass('active');
	$('#overlay').toggleClass('open');
	$('.navbar').toggleClass('mobile-menu-open');
	});
});

/**
* Animations and behaviour of hamburguer menu
*/
$(window).load(function() {

    var elements = [
        'black',
        'white',
    ];
    elements.forEach(function(key) {
        new Waypoint({
            element: document.getElementById('menu-black'),
            offset: '0%',
            handler: function() {
                anim.play();
            }
        });
        var animContainer = document.querySelectorAll('#menu-black [data-name='+key+']')[0];
        var params = {
            container: animContainer,
            renderer: 'svg',
            loop: false,
            autoplay: false,
            autoloadSegments: false,
            path: templateUrl + '/assets/img/menu/black/'+key+'/data.json'// path to your data.json file you rendered from AE

        };
        var anim;
        anim = bodymovin.loadAnimation(params);
    });
});

