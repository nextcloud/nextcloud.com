define(['jquery', 'lodash'],
    function ($, _) {
        $(document).ready(function() {
            'use strict';
            var scrollingtohash = {
                init: function() {
                    if(window.location.hash) {
                        $('html, body').animate({
//                      If we just use the hash as ID on the page, the browser will jump there, pre-empting our animation of the scroll.
//                      Instead, we add 'id' so the browser doesn't find it, but our code does.
                            scrollTop: $(window.location.hash + 'id').offset().top
                        }, 2000);
                    }
                }
            };
            scrollingtohash.init();
        });
    });
