define(['jquery', 'lodash'],
	function ($, _) {
		$(document).ready(function() {
			'use strict';
			var installPage = {
				init: function () {
                    $(this.variables.tabSelector).click(_.bind(this.toggleTab, this));
				},

                variables: {
                    tabSelector: '.tab',
                    tabActiveSelector: '.tab--active',
                    tabActiveClass: 'tab--active'
                },

                toggleTab: function (event) {
				    $(this.variables.tabActiveSelector).removeClass(this.variables.tabActiveClass);
                    $(event.currentTarget).addClass(this.variables.tabActiveClass);
                }
			};
			installPage.init();
		});
	});
