define(['jquery',],
	function ($, _) {
		$(document).ready(function() {
			'use strict';
			var install = {
				init: function() {
                    $('#mobile').on('click', function () {
                        $("#tab-desktop, #li-tab-desktop").removeClass("active");
                        $("#tab-mobile, #li-tab-mobile").addClass("active");
                    });
                    $('#desktop').on('click', function () {
                        $("#tab-mobile, #li-tab-mobile").removeClass("active");
                        $("#tab-desktop, #li-tab-desktop").addClass("active");
                    });
                    $('#packages').on('click', function () {
                        $("#tab-archive", "#li-tab-archive").removeClass("active");
                        $("#tab-packages", "#li-tab-packages").addClass("active");
                    });
                    if (navigator.appVersion.indexOf("Win")!=-1) {
                        var e = document.getElementById("client-download-win");
                        e.className += ' btn-primary';
                    } else if(navigator.appVersion.indexOf("Mac")!=-1) {
                        var e = document.getElementById("client-download-mac");
                        e.className += " btn-primary";
                    } else if (navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
                        var e = document.getElementById("client-download-linux");
                        e.className += ' btn-primary';
                    }
				}
			};
			install.init();
		});
	});
