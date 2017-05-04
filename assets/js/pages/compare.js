// define(["jquery", "bootstrap"  ], 
// 	function ($, bootstrap ) {
		$( function()
		{
			var targets = $( '[rel~=tooltip]' ),
				target  = false,
				tooltip = false,
				title   = false;
		
			targets.bind( 'mouseenter', function()
			{
				target  = $( this );
				tip     = target.attr( 'title' );
				tooltip = $( '<div id="tooltip"></div>' );
		
				if( !tip || tip == '' )
					return false;
		
				target.removeAttr( 'title' );
				tooltip.css( 'opacity', 0 )
					.html( tip )
					.appendTo( 'body' );
		
				var init_tooltip = function()
				{
					if( $( window ).width() < tooltip.outerWidth() * 1.5 )
						tooltip.css( 'max-width', $( window ).width() / 2 );
					else
						tooltip.css( 'max-width', 340 );
		
					var pos_left = target.offset().left + ( target.outerWidth() / 2 ) - ( tooltip.outerWidth() / 2 ),
						pos_top  = target.offset().top - tooltip.outerHeight() - 20;
		
					if( pos_left < 0 )
					{
						pos_left = target.offset().left + target.outerWidth() / 2 - 20;
						tooltip.addClass( 'left' );
					}
					else
						tooltip.removeClass( 'left' );
		
					if( pos_left + tooltip.outerWidth() > $( window ).width() )
					{
						pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
						tooltip.addClass( 'right' );
					}
					else
						tooltip.removeClass( 'right' );
		
					if( pos_top < 0 )
					{
						var pos_top  = target.offset().top + target.outerHeight();
						tooltip.addClass( 'top' );
					}
					else
						tooltip.removeClass( 'top' );
		
					tooltip.css( { left: pos_left, top: pos_top } )
						.animate( { top: '+=10', opacity: 1 }, 50 );
				};
		
				init_tooltip();
				$( window ).resize( init_tooltip );
		
				var remove_tooltip = function()
				{
					tooltip.animate( { top: '-=10', opacity: 0 }, 50, function()
					{
						$( this ).remove();
					});
		
					target.attr( 'title', tip );
				};
		
				target.bind( 'mouseleave', remove_tooltip );
				tooltip.bind( 'click', remove_tooltip );
			});
		});

		jQuery(document).ready(function($){
			function productsTable( element ) {
				this.element = element;
				this.table = this.element.children('.cd-products-table');
				this.tableHeight = this.table.height();
				this.productsWrapper = this.table.children('.cd-products-wrapper');
				this.tableColumns = this.productsWrapper.children('.cd-products-columns');
				this.products = this.tableColumns.children('.product');
				this.productsNumber = this.products.length;
				this.productWidth = this.products.eq(0).width();
				this.productsTopInfo = this.table.find('.top-info');
				this.featuresTopInfo = this.table.children('.features').children('.top-info');
				this.topInfoHeight = this.featuresTopInfo.innerHeight() + 30;
				this.leftScrolling = false;
				this.filterBtn = this.element.find('.filter');
				this.resetBtn = this.element.find('.reset');
				this.filtering = false,
				this.selectedproductsNumber = 0;
				this.filterActive = false;
				this.navigation = this.table.children('.cd-table-navigation');
				// bind table events
				this.bindEvents();
			}

			productsTable.prototype.bindEvents = function() {
				var self = this;
				//detect scroll left inside producst table
				self.productsWrapper.on('scroll', function(){
					if(!self.leftScrolling) {
						self.leftScrolling = true;
						(!window.requestAnimationFrame) ? setTimeout(function(){self.updateLeftScrolling();}, 250) : window.requestAnimationFrame(function(){self.updateLeftScrolling();});
					}
				});
				//select single product to filter
				self.products.on('click', '.top-info', function(){
					var product = $(this).parents('.product');
					if( !self.filtering && product.hasClass('selected') ) {
						product.removeClass('selected');
						self.selectedproductsNumber = self.selectedproductsNumber - 1;
						self.upadteFilterBtn();
					} else if( !self.filtering && !product.hasClass('selected') ) {
						product.addClass('selected');
						self.selectedproductsNumber = self.selectedproductsNumber + 1;
						self.upadteFilterBtn();
					}
				});
				//filter products
				self.filterBtn.on('click', function(event){
					event.preventDefault();
					if(self.filterActive) {
						self.filtering =  true;
						self.showSelection();
						self.filterActive = false;
						self.filterBtn.removeClass('active');
					}
				});
				//reset product selection
				self.resetBtn.on('click', function(event){
					event.preventDefault();
					if( self.filtering ) {
						self.filtering =  false;
						self.resetSelection();
					} else {
						self.products.removeClass('selected');
					}
					self.selectedproductsNumber = 0;
					self.upadteFilterBtn();
				});
				//scroll inside products table
				this.navigation.on('click', 'a', function(event){
					event.preventDefault();
					self.updateSlider( $(event.target).hasClass('next') );
				});
			}

			productsTable.prototype.upadteFilterBtn = function() {
				//show/hide filter btn
				if( this.selectedproductsNumber >= 2 ) {
					this.filterActive = true;
					this.filterBtn.addClass('active');
				} else {
					this.filterActive = false;
					this.filterBtn.removeClass('active');
				}
			}

			productsTable.prototype.updateLeftScrolling = function() {
				var totalTableWidth = parseInt(this.tableColumns.eq(0).outerWidth(true)),
					tableViewport = parseInt(this.element.width()),
					scrollLeft = this.productsWrapper.scrollLeft();

				( scrollLeft > 0 ) ? this.table.addClass('scrolling') : this.table.removeClass('scrolling');

				if( this.table.hasClass('top-fixed') && checkMQ() == 'desktop') {
					setTranformX(this.productsTopInfo, '-'+scrollLeft);
					setTranformX(this.featuresTopInfo, '0');
				}

				this.leftScrolling =  false;

				this.updateNavigationVisibility(scrollLeft);
			}

			productsTable.prototype.updateNavigationVisibility = function(scrollLeft) {
				( scrollLeft > 0 ) ? this.navigation.find('.prev').removeClass('inactive') : this.navigation.find('.prev').addClass('inactive');
				( scrollLeft < this.tableColumns.outerWidth(true) - this.productsWrapper.width() && this.tableColumns.outerWidth(true) > this.productsWrapper.width() ) ? this.navigation.find('.next').removeClass('inactive') : this.navigation.find('.next').addClass('inactive');
			}

			productsTable.prototype.updateTopScrolling = function(scrollTop) {
				var cdOffsetTop = this.table.offset().top,
					tableScrollLeft = this.productsWrapper.scrollLeft();
				
				if ( cdOffsetTop <= scrollTop && cdOffsetTop + this.tableHeight - this.topInfoHeight >= scrollTop ) {
					//fix products top-info && arrows navigation
					if( !this.table.hasClass('top-fixed') && $(document).height() > cdOffsetTop + $(window).height() + 200) { 
						this.table.addClass('top-fixed').removeClass('top-scrolling');
						if( checkMQ() == 'desktop' ) {
							this.productsTopInfo.css('top', '0');
							this.navigation.find('a').css('top', '0px');
						}
					}

				} else if( cdOffsetTop <= scrollTop ) {
					//product top-info && arrows navigation -  scroll with table
					this.table.removeClass('top-fixed').addClass('top-scrolling');
					if( checkMQ() == 'desktop' )  {
						this.productsTopInfo.css('top', (this.tableHeight - this.topInfoHeight) +'px');
						this.navigation.find('a').css('top', (this.tableHeight - this.topInfoHeight) +'px');
					}
				} else {
					//product top-info && arrows navigation -  reset style
					this.table.removeClass('top-fixed top-scrolling');
					this.productsTopInfo.attr('style', '');
					this.navigation.find('a').attr('style', '');
				}

				this.updateLeftScrolling();
			}

			productsTable.prototype.updateProperties = function() {
				this.tableHeight = this.table.height();
				this.productWidth = this.products.eq(0).width();
				this.topInfoHeight = this.featuresTopInfo.innerHeight() + 30;
				this.tableColumns.css('width', this.productWidth*this.productsNumber + 'px');
			}

			productsTable.prototype.showSelection = function() {
				this.element.addClass('filtering');
				this.filterProducts();
			}

			productsTable.prototype.resetSelection = function() {
				this.tableColumns.css('width', this.productWidth*this.productsNumber + 'px');
				this.element.removeClass('no-product-transition');
				this.resetProductsVisibility();
			}

			productsTable.prototype.filterProducts = function() {
				var self = this,
					containerOffsetLeft = self.tableColumns.offset().left,
					scrollLeft = self.productsWrapper.scrollLeft(),
					selectedProducts = this.products.filter('.selected'),
					numberProducts = selectedProducts.length;

				selectedProducts.each(function(index){
					var product = $(this),
						leftTranslate = containerOffsetLeft + index*self.productWidth + scrollLeft - product.offset().left;
					setTranformX(product, leftTranslate);
					
					if(index == numberProducts - 1 ) {
						product.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
							setTimeout(function(){
								self.element.addClass('no-product-transition');
							}, 50);
							setTimeout(function(){
								self.element.addClass('filtered');
								self.productsWrapper.scrollLeft(0);
								self.tableColumns.css('width', self.productWidth*numberProducts + 'px');
								selectedProducts.attr('style', '');
								product.off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
								self.updateNavigationVisibility(0);
							}, 100);
						});
					}
				});

				if( $('.no-csstransitions').length > 0 ) {
					//browser not supporting css transitions
					self.element.addClass('filtered');
					self.productsWrapper.scrollLeft(0);
					self.tableColumns.css('width', self.productWidth*numberProducts + 'px');
					selectedProducts.attr('style', '');
					self.updateNavigationVisibility(0);
				}
			}
			
			productsTable.prototype.resetProductsVisibility = function() {
				var self = this,
					containerOffsetLeft = self.tableColumns.offset().left,
					selectedProducts = this.products.filter('.selected'),
					numberProducts = selectedProducts.length,
					scrollLeft = self.productsWrapper.scrollLeft(),
					n = 0;

				self.element.addClass('no-product-transition').removeClass('filtered');

				self.products.each(function(index){
					var product = $(this);
					if (product.hasClass('selected')) {
						n = n + 1;
						var leftTranslate = (-index + n - 1)*self.productWidth;
						setTranformX(product, leftTranslate);
					}
				});

				setTimeout(function(){
					self.element.removeClass('no-product-transition filtering');
					setTranformX(selectedProducts, '0');
					selectedProducts.removeClass('selected').attr('style', '');
				}, 50);
			}

			productsTable.prototype.updateSlider = function(bool) {
				var scrollLeft = this.productsWrapper.scrollLeft();
				scrollLeft = ( bool ) ? scrollLeft + this.productWidth : scrollLeft - this.productWidth;

				if( scrollLeft < 0 ) scrollLeft = 0;
				if( scrollLeft > this.tableColumns.outerWidth(true) - this.productsWrapper.width() ) scrollLeft = this.tableColumns.outerWidth(true) - this.productsWrapper.width();
				
				this.productsWrapper.animate( {scrollLeft: scrollLeft}, 200 );
			}

			var comparisonTables = [];
			$('.cd-products-comparison-table').each(function(){
				//create a productsTable object for each .cd-products-comparison-table
				comparisonTables.push(new productsTable($(this)));
				console.log("this.table offset "+this.productsTable); 
			});
			
			var windowScrolling = false;
			//detect window scroll - fix product top-info on scrolling
			$(window).on('scroll', function(){
				if(!windowScrolling) {
					windowScrolling = true;
					(!window.requestAnimationFrame) ? setTimeout(checkScrolling, 250) : window.requestAnimationFrame(checkScrolling);
				}
			});

		// JOS: added the two lines below to get all items to show up at first page load. 
			var windowResize = true;
			(!window.requestAnimationFrame) ? setTimeout(checkResize, 250) : window.requestAnimationFrame(checkResize);

			var windowResize = false;
			//detect window resize - reset .cd-products-comparison-table properties
			$(window).on('resize', function(){
				if(!windowResize) {
					windowResize = true;
					(!window.requestAnimationFrame) ? setTimeout(checkResize, 250) : window.requestAnimationFrame(checkResize);
				}
			});
			
			function checkScrolling(){
				var scrollTop = $(window).scrollTop();
				comparisonTables.forEach(function(element){
					element.updateTopScrolling(scrollTop);
				});

				windowScrolling = false;
			}

			function checkResize(){
				comparisonTables.forEach(function(element){
					element.updateProperties();
				});

				windowResize = false;
			}

			function checkMQ() {
				//check if mobile or desktop device
				return window.getComputedStyle(comparisonTables[0].element.get(0), '::after').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
			}

			function setTranformX(element, value) {
				element.css({
					'-moz-transform': 'translateX(' + value + 'px)',
					'-webkit-transform': 'translateX(' + value + 'px)',
					'-ms-transform': 'translateX(' + value + 'px)',
					'-o-transform': 'translateX(' + value + 'px)',
					'transform': 'translateX(' + value + 'px)'
				});
			}
		});
// 	});
// });
 
