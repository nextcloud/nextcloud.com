/*!
 * jQuery YouTube Popup Player Plugin v2.4
 * http://lab.abhinayrathore.com/jquery_youtube/
 * https://github.com/abhinayrathore/jQuery-YouTube-Popup-Player-Plugin
 * This has been modified to allow a id to have a starting time with the format: Fe1I7wYW6hA?time=11
 * I also half-way made it possible to parse the URL for a time but those are in the format of ?t=1m12s
 * and I can't re-calculate that in seconds ;-)
 */
(function ($, window) {
	var YouTubeDialog = null,
        defaultCss = {},
        methods = {
            //initialize plugin
            init: function (options) {
                options = $.extend({}, $.fn.YouTubePopup.defaults, options);

                // initialize YouTube Player Dialog
                if (YouTubeDialog === null) {
                    YouTubeDialog = $('<div>').css({
                        display: 'none',
                        padding: 0
                    });
                    $('body').append(YouTubeDialog);
                    YouTubeDialog.dialog({
                        autoOpen: false,
                        resizable: false,
                        draggable: options.draggable,
                        modal: options.modal,
                        dialogClass: options.cssClass,
                        create: function () {
                            defaultCss.backgroundImage = $(".ui-dialog").css('background-image');
                            defaultCss.border = $(".ui-dialog").css('border');
                            defaultCss.backgroundColor = $(".ui-dialog").css('background-color');
                        },
                        close: function () {
                            YouTubeDialog.html('');
                            $(".ui-dialog-titlebar").show();
                            $(".ui-dialog").css({
                                'background-image': defaultCss.backgroundImage,
                                'border': defaultCss.border,
                                'background-color': defaultCss.backgroundColor
                            });
                        }
                    });
                }

                return this.each(function () {
                    var obj = $(this),
                        data = obj.data('YouTube'),
                        youtubeId,
                        videoTime,
                        videoTitle,
                        YouTubeURL,
                        $titleBar;
                    if (!data) { //check if event is already assigned
                        obj.data('YouTube', {
                            target: obj
                        });
                        $(obj).bind('click.YouTubePopup', function (event) {
                            videoTime = options.videoTime
							youtubeId = options.youtubeId;
							if(obj.attr("id")) {
								youtubeId = obj.attr("id");
								videoTime = '';
							}
                            if ($.trim(youtubeId) === '' || youtubeId === false) {
                                youtubeId = obj.attr(options.idAttribute);
                            }
							if ($.trim(youtubeId) === '' && obj.is("a")) {
                                youtubeId = getYouTubeIdFromUrl(obj.attr("href"));
                            }
                            videoTitle = $.trim(options.title);
                            if (videoTitle === '') {
                                if (options.useYouTubeTitle) {
                                    setYouTubeTitle(youtubeId);
                                } else {
                                    videoTitle = obj.attr('title');
                                }
                            }

                            //Format YouTube URL
                            YouTubeURL = window.location.protocol + "//www.youtube.com/embed/" + youtubeId + videoTime + "&rel=0&showsearch=0&autohide=" + options.autohide;
                            YouTubeURL += "&autoplay=" + options.autoplay + "&controls=" + options.controls + "&fs=" + options.fs + "&loop=" + options.loop;
                            YouTubeURL += "&showinfo=" + options.showinfo + "&color=" + options.color + "&theme=" + options.theme;

                            //Setup YouTube Dialog
                            YouTubeDialog.html(getYouTubePlayer(YouTubeURL, options.width, options.height));
                            YouTubeDialog.dialog({ //reset width and height
                                width: 'auto',
                                height: 'auto'
                            });
                            YouTubeDialog.dialog({
                                minWidth: options.width,
                                minHeight: options.height,
                                title: videoTitle
                            });
                            YouTubeDialog.dialog('open');
                            $(".ui-widget-overlay").fadeTo('fast', options.overlayOpacity); //set Overlay opacity
                            $titleBar = $(".ui-dialog-titlebar");
                            if (options.hideTitleBar && options.modal) { //hide Title Bar (only if Modal is enabled)
                                $titleBar.hide(); //hide Title Bar
                                $(".ui-widget-overlay").click(function () { //automatically assign Click event to overlay
                                    YouTubeDialog.dialog("close");
                                });
                            }
                            if (options.clickOutsideClose && options.modal) { //assign clickOutsideClose event only if Modal option is enabled
                                $(".ui-widget-overlay").click(function () {
                                    YouTubeDialog.dialog("close");
                                });
                            }
                            $titleBar.removeClass("ui-corner-all").addClass("ui-corner-top"); //only round the top corners on titlebar
                            if (!options.showBorder) {
                                $(".ui-dialog").css({
                                    'background-image': 'none',
                                    'border': 'none',
                                    'background-color': 'transparent'
                                });
                            }
                            event.preventDefault();
                        });
                    }
                });
            },
            destroy: function () {
                return this.each(function () {
                    $(this).unbind(".YouTubePopup");
                    $(this).removeData('YouTube');
                });
            }
        };

	function getYouTubePlayer(URL, width, height) {
		var YouTubePlayer = '<iframe title="YouTube video player" style="margin:0; padding:0;" width="' + width + '" ';
		YouTubePlayer += 'height="' + height + '" src="' + URL + '" frameborder="0" allowfullscreen></iframe>';
		return YouTubePlayer;
	}

	function setYouTubeTitle(id) {
        $.ajax({
            url: window.location.protocol + '//query.yahooapis.com/v1/public/yql',
            data: {
                q: "select * from json where url ='http://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=" + id + "&format=json'",
                format: "json"
            },
            dataType: "jsonp",
            success: function (data) {
                if (data && data.query && data.query.results && data.query.results.json) {
                    YouTubeDialog.dialog({
					   title: data.query.results.json.title
				    });
                }
            }
        });
	}

	function getYouTubeIdFromUrl(youtubeUrl) {
		var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=)([^#\&\?]*)(\?t=[^#\&\?]*)*.*/,
            match = youtubeUrl.match(regExp);
		if (match && match[2].length === 11) {
			return match[2];
		} else {
			return false;
		}
	}

	$.fn.YouTubePopup = function (method) {
		if (methods[method]) {
			return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
		} else if (typeof method === 'object' || !method) {
			return methods.init.apply(this, arguments);
		} else {
			$.error('Method ' + method + ' does not exist on jQuery.YouTubePopup');
		}
	};

	//default configuration
	$.fn.YouTubePopup.defaults = {
		'youtubeId': '',
		'title': '',
		'videoTime': '?start=0',  /* make sure videos start at 0 without errors, we esp need the ? thingy for the final URL to work*/
		'useYouTubeTitle': true,
		'idAttribute': 'rel',
		'cssClass': 'YouTubeDialog',
		'draggable': false,
		'modal': true,
		'width': '100%',
		'height': '95%',
		'hideTitleBar': false,
		'clickOutsideClose': false,
		'overlayOpacity': 0.5,
		'autohide': 2,
		'autoplay': 1,
		'color': 'red',
		'controls': 1,
		'fs': 1,
		'loop': 0,
		'showinfo': 0,
		'theme': 'light',
		'showBorder': true
	};
})(jQuery, window); 
