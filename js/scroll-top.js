( function() {

	var buttonScroll = document.querySelector('.js-button-scrolltop'),
		docBody   = document.documentElement || document.body.parentNode || document.body,
	    hasOffset = window.pageYOffset !== undefined,
	    stop = 600,
	    scrollTop;

	window.onscroll = function (e) {

		scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;

		if (scrollTop >= stop) {
			TweenMax.to(buttonScroll, 0.25, { x:-70, ease:Power0.easeIn});

		} else {
			TweenMax.to(buttonScroll, 0.25, { x:0, ease:Power0.easeOut});
		}

	};

	buttonScroll.onclick = function(event) {

		window.scrollTo( 0, hasOffset );

	};

} )();
