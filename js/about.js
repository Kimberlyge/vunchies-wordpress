/**
 * File detail.js.
 */
( function() {

	jQuery(document).ready( function($) {
		console.log('on about page');

		var cover = $('.AboutCover-image');
		var coverSvg = $('.AboutCover-svg');
		var coverTitle = $('.AboutCover-svgPath');
		var animationEl = $('.js-animate');
		var scrollElems = $('.js-animate-scroll');

		/**
		 * Animations
		 */

		var tl = new TimelineMax();

		tl.to(cover, 0.7, {opacity:0.9, ease:Power0.easeIn});
		tl.staggerTo(coverTitle, 3, {css:{strokeDashoffset: 0}}, 0.6)
		tl.staggerTo(animationEl, 0.3, {opacity:0.9, ease:Power0.easeIn}), 0;

		var $parallaxContainer = $('.AboutCover');
        $parallaxItems = cover;
        fixer = -0.01;

		/**
		 * Move Cover depending on mousemove
		 */

    $(document).on('mousemove', function(event) {
      var pageX = event.pageX - ($parallaxContainer.width() * 0.5);
      var pageY = event.pageY - ($parallaxContainer.height() * 0.5);

      var speedX = $parallaxItems.data("speed-x");
      var speedY	= $parallaxItems.data("speed-y");

      TweenLite.to($parallaxItems, 0.5, {
        x: ($parallaxItems.position().left + pageX * speedX )*fixer,    //calculate the new X based on mouse position * speed
        y: ($parallaxItems.position().top + pageY * speedY)*fixer
      });
		});

		var docBody   = document.documentElement || document.body.parentNode || document.body,
		    hasOffset = window.pageYOffset !== undefined,
		    stop = 400,
		    scrollTop,
				lastScrollTop = 0,
				scrollTopPartly;

		window.onscroll = function (e) {
			/**
			* Parallax
			*/
			currentScrollTop = $(window).scrollTop();
			scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;
			scrollTopPartly = document.body.scrollTop/7;

			if (scrollTop <= stop) {
				TweenLite.to(coverSvg, 0.15, {y:-scrollTopPartly/2});
			}

			/**
			 * Show on scroll
			 */

			if (currentScrollTop < lastScrollTop) {
 				return;
 			}

 			scrollElems.each( function(i) {
         var itemOffset = Math.abs($(this).offset().top);
         var height = window.pageYOffset + window.pageYOffset/3;

         if (itemOffset > 0 && itemOffset < height) {
					 console.log('in view yay')
 					$(this).removeClass('js-animate');
         }
 	    });

 			lastScrollTop = currentScrollTop;
		};
	});
} )();
