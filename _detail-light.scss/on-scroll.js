( function() {

	var buttonFooterNav = document.querySelector('.js-button-footer-nav'),
		buttonScroll = document.querySelector('.js-button-footer-scrollUp'),
		docBody   = document.documentElement || document.body.parentNode || document.body,
	    hasOffset = window.pageYOffset !== undefined,
	    stop = 400,
	    scrollTop;

	window.onscroll = function (e) {

		scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;

		if (scrollTop >= stop) {
			if (buttonFooterNav) TweenMax.to(buttonFooterNav, 0.15, { x:120, ease:Power0.easeIn});
			TweenMax.to(buttonScroll, 0.25, { x:-70, ease:Power0.easeIn});
		} else {
			if (buttonFooterNav) TweenMax.to(buttonFooterNav, 0.2, { x:-120, ease:Power0.easeIn});
			TweenMax.to(buttonScroll, 0.25, { x:0, ease:Power0.easeIn});
		}

	};

	buttonScroll.onclick = function(event) {

		TweenMax.to(window, 0.9, { scrollTo:{y:0, offsetY:hasOffset}, ease:Power3.easeOut});

	};


	var submitEmail = document.querySelector('.sharing_send');

	if (submitEmail) {
		submitEmail.classList.add('email-form-submit');
	}

} )();
