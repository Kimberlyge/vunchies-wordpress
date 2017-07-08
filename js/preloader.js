/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	jQuery(document).ready( function($) {
		var timerStart = Date.now();

		var preloader = $('.Preloader')
		var preloaderSvg = $('.Preloader path')
		var preloaderLogo = $('.Preloader-logo')
		var preloaderAnimation = $('.js-preload')
		var headerLogo = $('.Header .Logo')
		var tlPreloader = new TimelineMax();

		if (sessionStorage.getItem('preloader-seen') == null) {
			preloader.removeClass('is-hidden');


			if( $(window).innerWidth() > 750) {
				tlPreloader.staggerTo(preloaderSvg, 5, {css:{strokeDashoffset: 0}, ease:Power4.easeOut}, 0.1)
				tlPreloader.to(preloaderLogo, 1.5, {opacity:1}, 1);
			} else {
				$('.Preloader-mobile').removeClass('is-hidden');
				tlPreloader.to(preloaderLogo, 1.5, {opacity:1}, 0);
			}


			$(window).on('load', function() {
				var newTime = Date.now()-timerStart;

				if (newTime < 2500) {
					var restTime = 2500 - newTime;

					setTimeout( function () {
						var tl = new TimelineMax({ onComplete: showLogo });
						tl.to(preloader, 1.3, {y: '-100%', ease:Power4.easeInOut}, 0);
						tl.to(preloaderLogo, 1.2, { css: {top: 79}, ease:Power4.easeOut}, 0.4);
						tl.fromTo(headerLogo, 1, {y: 50}, {y:0, ease:Power4.easeInOut}, 0);
						tl.to(preloaderLogo, 0.2, { opacity:0, ease:Power4.easeOut}, 0.7);

						tl.staggerFromTo(preloaderAnimation, 0.8, {y:20}, {y:0, opacity: 1, ease:Power2.easeInOut}, 0.15, 0.5);
						tl.staggerFromTo('.Teaser-wrap', 0.35, {opacity:0, y:10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.15, 1);

						if( $(window).innerWidth() < 750) {

						}


					}, restTime);

					return;
				} else {
					tl.to(preloader, 1.3, {y: '-100%', ease:Power4.easeInOut}, 0);
					tl.to(preloaderLogo, 1.2, { css: {top: 79}, ease:Power4.easeOut}, 0.4);
					tl.fromTo(headerLogo, 1, {y: 50}, {y:0, ease:Power4.easeInOut}, 0);
					tl.to(preloaderLogo, 0.2, { opacity:0, ease:Power4.easeOut}, 0.7);

					tl.staggerFromTo(preloaderAnimation, 0.8, {y:20}, {y:0, opacity: 1, ease:Power2.easeInOut}, 0.15, 0.5);
					tl.staggerFromTo('.Teaser-wrap', 0.35, {opacity:0, y:10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.15, 1);
				}

				function showLogo(tl) {
					sessionStorage.setItem('preloader-seen', 'true');
					preloader.addClass('is-hidden');
				}
			});
		};
	});

} )();
