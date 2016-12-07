 
$(document).ready(function() {
    "use strict";
    var defaultComponents = {
        init: function() {

			this.variables.buttonDropdownSelector.on("click", _.bind(this.buttonDropdown, this))
		},

		variables : {
			buttonDropdownSelector: $(".button--dropdown"),
			buttonDropdownContent: $(".dropdown-content"),
			visibleClass : "visible",
			activeClass: "active"
		},

		buttonDropdown: function (event) {
			this.variables.buttonDropdownSelector.toggleClass(this.variables.activeClass);
			this.variables.buttonDropdownContent.toggleClass(this.variables.visibleClass);
			event.preventDefault();
		}

		}
    defaultComponents.init();
});

	$(window).on('scroll.fadeOnce', function(event) {	
		var scrollTop = $(this).scrollTop();
		$('.revealOnScroll:not(.fade-in)').each(function(index, element) {
			var selectorOffset = $(element).offset();
			if (scrollTop + window.innerHeight - 100 > selectorOffset.top) {
				$(element).addClass("fade-in").velocity('transition.slideUpIn');
			}
		 });
	});	



/*	 
$(document).ready(function() {
    "use strict";
    var defaultComponents = {
        init: function() {

			this.variables.buttonDropdownSelector.on("click", _.bind(this.buttonDropdown, this))
			this.variables.windowSelector.on('scroll.fadeOnce', _.bind(this.revealElementOnScroll, this))
		},

		variables : {
			buttonDropdownSelector: $(".button--dropdown"),
			buttonDropdownContentSelector: $(".dropdown-content"),
			scrollTopSelector: $(this).scrollTop(),
			elementNotRevealedSelector: $('.revealOnScroll:not(.fade-in)'),
 			selectorOffsetSelector: $(element).offset(),
			windowSelector: $(window), 
			visibleClass : "visible",
			activeClass: "active"
		},
		
		buttonDropdown: function (event) {
			this.variables.buttonDropdownSelector.toggleClass(this.variables.activeClass);
			this.variables.buttonDropdownContentSelector.toggleClass(this.variables.visibleClass);
			event.preventDefault();
		},

		revealElementOnScroll: function(event) {
			this.variables.elementNotRevealedSelector.each(function(index, element) {
				if (this.variables.scrollTopSelector + window.innerHeight - 100 > selectorOffset.top) {
					$(element).addClass("fade-in").velocity('transition.slideUpIn');
				}
		 	});
		}
	}
	defaultComponents.init();
});*/

/*	$(window).on('scroll.fadeOnce', function(event) {	
		this.variables.elementNotRevealedSelector.each(function(index, element) {
			if (this.variables.scrollTopSelector + window.innerHeight - 100 > selectorOffset.top) {
				$(element).addClass("fade-in").velocity('transition.slideUpIn');
			}
		 });
	});	*/
	
	