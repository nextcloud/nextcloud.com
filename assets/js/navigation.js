$(window).load(function() {
    /**
     * Listen to scroll to change header opacity class
     */
    function checkScroll() {
        if (document.body.scrollTop !== 0) {
            $('.navbar img').attr('src', templateUrl + '/assets/img/logo/logo_nextcloud_blue.svg');
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar img').attr('src', templateUrl + '/assets/img/logo/logo_nextcloud_white.svg');
            $('.navbar').removeClass('scrolled');
        }
    }

    if ($('.navbar').length > 0) {
        $(window).on('scroll load resize', function () {
            checkScroll();
        });
    }
});