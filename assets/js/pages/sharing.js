define(["jquery", "bootstrap"  ], 
       function ($, bootstrap ) {
           $(document).ready(function() {
               if(window.location.hash) {
					$('#IDtext').text('Your Federated Cloud ID is');
					$('#userName').text(window.location.hash.substring(1));
				}
       });
});
