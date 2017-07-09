/**
 * Travel Detail functionatlities
 */

( function() {

	jQuery(document).ready( function($) {
		console.log('on travel detail page');

	 	/**
	 	 * Animations
	 	 */

		var tl = new TimelineMax();

		tl.fromTo('.js-animate-city-title', 0.25, {y:-15}, {opacity:1, y:0, ease:Power0.easeOut});
		tl.fromTo('.js-animate-city-country p', 0.25, {y:15}, {opacity:1, y:0, ease:Power0.easeOut});
		tl.fromTo('.js-travellist', 0.3, {x:-150}, {x:0, delay:0.5, ease:Power3.easeOut}, 0);

		var detailCover = $('.js-traveltitle'),
				scrollElems  = $('.js-animate'),
				docBody   = document.documentElement || document.body.parentNode || document.body,
		    hasOffset = window.pageYOffset !== undefined,
		    stop = 400,
		    scrollTop,
				scrollTopPartly,
				lastScrollTop = 0;

		window.onscroll = function (e) {
			currentScrollTop = $(window).scrollTop();
			scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;
			scrollTopPartly = document.body.scrollTop/7;

			if (scrollTop <= stop) {
				TweenLite.to(detailCover, 0.15, {y:-scrollTopPartly/2});
			}

			if (currentScrollTop < lastScrollTop) {
				return;
			}

			scrollElems.each( function(i) {
        var itemOffset = Math.abs($(this).offset().top);
        var height = window.pageYOffset + window.pageYOffset/3;

        if (itemOffset > 0 && itemOffset < height) {
					$(this).removeClass('js-animate');
        }
	    });

			lastScrollTop = currentScrollTop;

		};

		/**
		 * Restaurant List
		 */

		var restaurantList = document.getElementById( 'js-travellist' );
		var restaurantListLink = $('.js-TravelList-item' );

		if (restaurantList) {
			restaurantList.onmouseenter = function(event) {
				var target = event.currentTarget;
				target.classList.add('is-active');

				/* Hide */

				target.onmouseleave = function(event) {
					event.preventDefault();

					var target = event.currentTarget;
					target.classList.remove('is-active');
				};
			};
		}

		restaurantListLink.on('click', function(event) {
			event.preventDefault();
			var href = $(this).attr('href');
        	src = $(href)

			TweenLite.to(window, 1, { scrollTo:{y:src.offset().top}, ease:Power3.easeOut});

		})
	});
} )();
