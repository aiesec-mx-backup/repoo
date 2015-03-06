/*
 *  Project: WanChai Setup Plugin
 *  Description: Plugins for setting up navigation, slider, the team section, scrolling, and parallax in the WanChai template
 *  Author: Simon Li
 */

 ;(function ( $, window, undefined ) {
	var document = window.document,
	defaults = {
		preloader: '.preloader',
		navbar: '#main-nav',
		slider: '#slider',
		sliderImgHeightToWidthRatio: 2/3,
		sliderInterval: 0,
		teamSection: 'section#team',
		scrollDownArrow: '.scroll-down-arrow',
		parallax: '.parallax',
		animatedSections: null,
	};

	function MetropolisSetup( element, options ) {
		this.element = element;
		this.options = $.extend( {}, defaults, options) ;
		this._defaults = defaults;

		this.navbar = null;
		this.firstIcon = null;
		this.scrollDownArrow = null;
		this.parallax = null;
		this.loaded = false;
		this.isSmallScreen = false;
		this.isTouchDevice = false;
		this.isIE11Win81 = false;
		this.$win = $(window);
		this.$body = $('body');

		this.init();
		this.navbar.addClass('darken');
	}

	MetropolisSetup.prototype.init = function () {
		var self = this;

		this.navbar = $(this.options.navbar);
		this.firstIcon = $(this.options.slider).next().find('.icon').eq(0).addClass('fade-out');
		this.iconOffset = this.firstIcon.height()/2 + 25; // 11 is width of box-shadow
		this.scrollDownArrow = $(this.options.scrollDownArrow);
		this.parallax = $(this.options.parallax);

		this.setupSmallScreenAndTouchDevice();
		this.setupParallax();
		this.setupScrollLinks();
		this.setupSlider();
		this.setupTeam();

		this.$win.on('resize', function () {
			self.setupSlider();
			self.setupTeam();
			self.scrollHandler();
		});

		this.$win.on('scroll', function () {
			self.scrollHandler();
		});

		this.$win.on('load', function () {
			if (this.loaded === true) return;
			$(self.options.preloader).addClass('loaded');
			setTimeout(function(){
				self.scrollHandler();

				// Activate ScrollSpy even when the twitter feed plugin is removed
				self.$body.scrollspy({
					target: self.options.navbar,
					offset: self.navbar.find('.navbar-header').innerHeight() + self.iconOffset+1
				});
			}, 500);
			this.loaded = true;
		});

		// Refresh Bootstrap ScrollSpy every 5 seconds
		setInterval(function(){
			self.$body.scrollspy('refresh');
			self.$win.scroll();
		}, 5000);

		// Handle refresh problem: restore parallax background positions and navbar styles
		$(document).ready(function(){
			if (document.readyState === "complete"){
				self.$win.load();
			}
		});
	};

	MetropolisSetup.prototype.setupSmallScreenAndTouchDevice = function () {
		var self = this,
			userAgent = navigator.userAgent;

		if (this.$win.width()<768) {
			this.isSmallScreen = true;
		}

		if (Modernizr.touch){
			this.isTouchDevice = true;
		}

		if (userAgent.indexOf('Mozilla/5.0')>-1 && userAgent.indexOf('Windows NT 6.3')>-1 && userAgent.indexOf('Trident/7.0')>-1 && userAgent.indexOf('rv:11.0')>-1 && userAgent.indexOf('like Gecko')>-1){
			this.isIE11Win81 = true;
		}

		// disable onscroll animation for small screens or touch devices
		if (this.isSmallScreen || this.isTouchDevice) {
			$('.animate-zoom').removeClass('animate-zoom');
		}

		// disable slider transition for touch devices
		if (this.isTouchDevice) {
			$(this.options.slider).find('.item').addClass('no-transition');
		}

		// disable fixed positioning of slider backgrounds in IE11, Win8.1
		if (this.isIE11Win81) {
			$(this.options.slider).find('.item img').css('position', 'absolute');
		}

		// add background color to navbar menu on small screens
		this.navbar.find('.navbar-toggle').on('click', function () {
			if (self.$win.scrollTop() === 0 ){
				if (!self.navbar.hasClass('darken')){
					self.navbar.addClass('darken');
				}
				else{
					self.navbar.removeClass('darken');
				}
			}
		});
	};

	MetropolisSetup.prototype.scrollHandler = function () {
		var self = this,
			winScrollTop = this.$win.scrollTop(),
			winHeight = this.$win.height();

		// Show first section's icon on scrolling
		// Darken navbar on scrolling
		// Hide scroll-down on scrolling

		
		if (winScrollTop === 0) {
			this.firstIcon.addClass('fade-out');
			this.scrollDownArrow.removeClass('fade-out');
			//this.navbar.removeClass('darken');
		} else {
			this.firstIcon.removeClass('fade-out');
			this.scrollDownArrow.addClass('fade-out');
			//this.navbar.addClass('darken');
		}

		// Parallax on scrolling
		if (!this.isTouchDevice){
			this.parallax.each(function () {
				var $this = $(this),
					thisTop = $this.offset().top,
					offset = winScrollTop + winHeight - thisTop,
					parallaxFactor = $this.data('parallax-factor');

				if (offset < 0){
					$this.css('background-position', '50% ' + (-winHeight + 'px'));
				} else{
					$this.css('background-position', '50% ' + (-winHeight + offset * parallaxFactor + 'px'));
				}
			});
		}

		// Animate items
		if (this.isSmallScreen || this.isTouchDevice || !this.options.animatedSections) return;
		var animatedSections = $(this.options.animatedSections);
		animatedSections.each(function () {
			var $this = $(this),
				thisTop = $this.offset().top,
				thisHeight = $this.innerHeight(),
				items = $this.find('.animate-zoom'),
				scrollFactor = $this.data('scroll-factor');

			scrollFactor = scrollFactor ? scrollFactor : 0.5;
			if (!items.hasClass('running') && (winHeight + winScrollTop - thisTop) / thisHeight > scrollFactor){
				items.addClass('running');
			}
		});
	};

	MetropolisSetup.prototype.setupParallax = function () {
		// Parallax
		var self = this,
			winHeight = this.$win.height();

		if (this.parallax.length > 0){
			this.parallax.each(function () {
				var $this = $(this);

				$this.css('background-image','url("' + $this.data('background-image') + '")');
				$this.css('background-size', 'auto ' + (winHeight + $this.innerHeight()) + 'px');
				if (self.isTouchDevice){
					$this.css('background-position', '50% 50%');
				} else{
					$this.css('background-position', '50% ' + (-winHeight + 'px'));
				}
			});
		}
	};

	MetropolisSetup.prototype.setupScrollLinks = function () {
		// scroll links
		var self = this,
			scrollLinks = $('a.scroll');

		scrollLinks.on('click', function(e){
			if (!this.hash) return;

			e.preventDefault();
			var pos = $(this.hash).offset().top - self.navbar.find('.navbar-header').innerHeight() - self.iconOffset;

			$('html, body').animate({
				scrollTop: (pos < 0) ? 0 : pos
			});
		});
	};

	MetropolisSetup.prototype.setupSlider = function () {
		var $win = $(window),
			winWidth = $win.width(),
			winHeight = $win.height(),
			slider = $(this.options.slider),
			items = slider.find('.item'),
			imgs = items.find('img');

		if (items.length === 0) return;

		items.css('height',winHeight);

		// Stretch slider images to cover the whole browser viewport
		if (winWidth * this.options.sliderImgHeightToWidthRatio < winHeight){
			imgs.css({
				height: '100%',
				width: winHeight * 1 / this.options.sliderImgHeightToWidthRatio,
				top: 0,
				left: (winWidth - winHeight * 1 / this.options.sliderImgHeightToWidthRatio) / 2
			});
		} else {
			imgs.css({
				width: '100%',
				height: winWidth * this.options.sliderImgHeightToWidthRatio,
				top: (winHeight - winWidth * this.options.sliderImgHeightToWidthRatio) / 2,
				left: 0
			});
		}

		// Activate Bootstrap Carousel
		if (this.options.sliderInterval > 0){
			slider.find('.carousel').carousel({interval: this.options.sliderInterval});
		}
	};

	MetropolisSetup.prototype.setupTeam = function () {
		var team = $(this.options.teamSection);
		if (team.length === 0)  return;

		var photos = team.find('.photo'),
			descs = team.find('.member .desc').css('height',''),
			social = descs.find('.social'),
			// 42px = social's margin-bottom 28px + p's margin-bottom 14px
			maxHeight = social.height() + 42 + Math.max.apply(null, $.map(descs, function(el){
				return $(el).innerHeight();
			}));

		// Adjust the size and positions of member photos
		photos.css({
			'height': photos.width(),
			'margin-left': (photos.parent().width() - photos.width())/2
		}).each(function(){
			$(this).css('background-image', 'url("' + $(this).data('member-photo') + '")');
		});
		descs.css('height', maxHeight);
	};

	$.fn['metropolisSetup'] = function ( options ) {
		return this.each(function () {
			if (!$.data(this, 'plugin_' + 'metropolisSetup')) {
				$.data(this, 'plugin_' + 'metropolisSetup', new MetropolisSetup( this, options ));
			}
		});
	};

 }(jQuery, window));