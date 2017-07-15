define(["jquery", "underscore", "enquire", "jqueryUi", "youtubeplugin", "bootstrap"],
function ($, _, enquire, jqueryui, jqyoutube) {
  $(document).ready(function() {
    'use strict';
    const sharing = {
      init: function() {
        jQuery("a.youtube").YouTubePopup({ hideTitleBar: true });

        if(window.location.hash) {
          $('html, body').animate({
              scrollTop: $("#federationScroll").offset().top
          }, 2000);
          if(window.location.hash.substring(1)!=='federation') {
            $('#IDtext').text('Your Federated Cloud ID is');
            $('#userName').text(window.location.hash.substring(1));
          }
        }

        enquire.register('screen and (max-width: 480px)', {
          //match: _.bind(this.resultsBindMobile, this)
        });

        enquire.register('screen and (min-width: 481px)', {
          //match: _.bind(this.enterpriseBindDesktop, this)
        });
      }
    }
    sharing.init();
  });
});
