( function() {

	var buttonScroll = document.querySelector('.js-button-footer-scrollUp'),
			docBody   = document.documentElement || document.body.parentNode || document.body,
	    hasOffset = window.pageYOffset !== undefined,
	    stop = 400,
	    scrollTop;

	window.onscroll = function () {
		scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;

		if (scrollTop >= stop) {
			TweenMax.to(buttonScroll, 0.25, { x:-70, ease:Power0.easeIn});
		} else {
			TweenMax.to(buttonScroll, 0.25, { x:0, ease:Power0.easeIn});
		}

	};

	buttonScroll.onclick = function(event) {
		console.log('osceoll clck')
		TweenMax.to(window, 0.9, { scrollTo:{y:0, offsetY:hasOffset}, ease:Power3.easeOut});
	};


} )();
