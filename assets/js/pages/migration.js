define(["jquery", "bootstrap"  ], 
    function ($, bootstrap ) {
    $(document).ready(function() {
        tabChange = function(){
            var tabs = $('.nav-pills > li');
            var active = tabs.filter('.active');
            var next = active.next('li').length? active.next('li').find('a') : tabs.filter(':first-child').find('a');
            // Use the Bootsrap tab show method
            next.tab('show');
        }    // Tab Cycle function
        function settabchnge () {
            //alert("in set tab");
        tabCycle = setInterval(tabChange, 3000);
        }

        settabchnge();

        function cleartabchange () {
            clearInterval(tabCycle);
        }

        $(function(){

            var counterofclock = 1;
            var counterofmoreclicks = 1; 
            var clicked = false;
            var sec = 0;
            function startClock() {
                if (clicked === false) {
                    clock = setInterval(stopWatch, 1000);
                    clicked = true;
                }else if (clicked === true) {
                }
            }       
            function stopWatch() {
                    sec++;
            }
            function stopClock() {
                    window.clearInterval(clock);
                    sec = 0;
                    clicked = false;
            }
            $('.nav-pills a').click(function(e) {
                if(counterofclock === 1){
                    startClock();
                    counterofclock = 2;
                }else {
                    stopClock();
                    startClock();
                }
                e.preventDefault();
                // Stop the cycle
                if (counterofmoreclicks == 2 && sec < 11){
                    clearTimeout(starttabchnage);
                }
                counterofmoreclicks = 2;
                clearInterval(tabCycle);
                // Show the clicked tabs associated tab-pane
                $(this).tab('show')
                // Start the cycle again in a predefined amount of time
                starttabchnage = setTimeout(function(){ settabchnge();}, 15000);
            });
        })
    });
});