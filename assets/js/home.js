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

