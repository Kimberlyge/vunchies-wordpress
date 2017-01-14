( function() {

	var buttonFooterNav = document.querySelector('.js-button-footer-nav'),
		buttonScroll = document.querySelector('.js-button-footer-scrollUp'),
		docBody   = document.documentElement || document.body.parentNode || document.body,
	    hasOffset = window.pageYOffset !== undefined,
	    stop = 600,
	    scrollTop;

	    console.log(buttonFooterNav);

	window.onscroll = function (e) {

		scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;

		if (scrollTop >= stop) {
			TweenMax.to(buttonFooterNav, 0.25, { x:120, ease:Power0.easeIn});
			TweenMax.to(buttonScroll, 0.25, { x:-70, ease:Power0.easeIn});
		} else {
			TweenMax.to(buttonFooterNav, 0.25, { x:-120, ease:Power0.easeIn});
			TweenMax.to(buttonScroll, 0.25, { x:0, ease:Power0.easeIn});
		}

	};

	buttonScroll.onclick = function(event) {

		window.scrollTo( 0, hasOffset );

	};

} )();
