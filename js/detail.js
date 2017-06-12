/**
 * File detail.js.
 */
( function() {

	jQuery(document).ready( function($) {

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

		var submitEmail = document.querySelector('.sharing_send');

		if (submitEmail) {
			submitEmail.classList.add('email-form-submit');
		}
	});

} )();
