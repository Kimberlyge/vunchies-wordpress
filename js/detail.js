/**
 * File detail.js.
 */
( function() {
	console.log('on detail page out');
	
	jQuery(document).ready( function($) {
		console.log('on detail page in');

		$(window).on('load', function() {
			console.log('DETAIL LOADED')
			var tl = new TimelineMax();

			tl.to('.js-animate-content', 1, {opacity: 1, ease:Power1.easeIn})
			tl.staggerTo('.js-animate-alpha', 0.25, {opacity:1, ease:Power0.easeIn});
			tl.staggerFromTo('.js-animate', 0.3, {y:5}, {opacity:1, y:0, ease:Power0.easeIn}, 0.2);
			tl.staggerFromTo('.js-animate-reverse', 0.3, {y:-5}, {opacity:1, y:0, ease:Power0.easeIn}, 0.06);
			tl.to('.js-animate-header', 1, {opacity: 1, ease:Power1.easeIn})


			// var scrollElems  = $('.js-animate'),
			//     scrollTop2,
			// 		lastScrollTop = 0;
			//
			// window.onscroll = function (e) {
			// 	scrollTop2 = $(window).scrollTop();
			//
			// 	scrollElems.each( function(i) {
			// 		console.log(i)
	    //     var itemOffset = Math.abs($(this).offset().top);
	    //     var height = window.pageYOffset + window.pageYOffset/3;
			//
	    //     if (itemOffset > 0 && itemOffset < height) {
			// 			console.log('hits top', i)
			// 			$(this).removeClass('js-animate');
	    //     }
		  //   });
			//
			// 	lastScrollTop = scrollTop2;
			//
			// };

	    var headerDetail = $('.HeaderDetail');
					detailLight = $('.Detail--light');

	    if (detailLight.length === 1) {
	      headerDetail.addClass('HeaderDetail--light')
	    } else {
				headerDetail.removeClass('HeaderDetail--light')
			}

			var detailCover = $('.Detail-cover'),
					buttonScroll = $('.js-button-footer-scrollUp'),
					buttonFooterNav = $('.js-button-footer-nav'),
					docBody   = document.documentElement || document.body.parentNode || document.body,
			    hasOffset = window.pageYOffset !== undefined,
			    stop = 400,
			    stopCover = 623,
			    scrollTop,
					scrollTopPartly;

			window.onscroll = function (e) {
				scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;
				scrollTopPartly = document.body.scrollTop/7;

				if (scrollTop >= stop) {
					TweenMax.to(buttonScroll, 0.25, { x:-70, ease:Power0.easeIn});
					TweenMax.to(buttonFooterNav, 0.15, { x:120, ease:Power0.easeIn});
				} else {
					TweenMax.to(buttonFooterNav, 0.2, { x:-120, ease:Power0.easeIn});
					TweenMax.to(buttonScroll, 0.25, { x:0, ease:Power0.easeIn});
				}

				if (scrollTop <= stopCover) {
					TweenLite.to(detailCover, 0.15, {y:-scrollTopPartly/2});
				}
			};

			var buttonFooterNext = document.querySelector( '.js-button-footerNav-next' );
			var buttonFooterPrev = document.querySelector( '.js-button-footerNav-prev' );
			var buttonFooterTitlePrev = document.querySelector( '.js-button-footerNav-title-prev' );
			var buttonFooterTitleNext = document.querySelector( '.js-button-footerNav-title-next' );

			if (buttonFooterNext) {
				buttonFooterNext.onmouseenter = function(event) {
					var target = event.currentTarget;

					buttonFooterTitleNext.classList.add('is-active');


					/* Hide */

					target.onmouseleave = function(event) {

						buttonFooterTitleNext.classList.remove('is-active');

					};

				};
			}

			if (buttonFooterPrev) {
				buttonFooterPrev.onmouseenter = function(event) {

					var target = event.currentTarget;

					buttonFooterTitlePrev.classList.add('is-active');


					/* Hide */

					target.onmouseleave = function(event) {

						buttonFooterTitlePrev.classList.remove('is-active');

					};

				};
			}

			var submitEmail = document.querySelector('.sharing_send');

			if (submitEmail) {
				submitEmail.classList.add('email-form-submit');
			}
		});
	});

} )();
