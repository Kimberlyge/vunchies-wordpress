/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	var buttonScroll = document.querySelector('.js-button-scrolltop'),
		docBody   = document.documentElement || document.body.parentNode || document.body,
	    hasOffset = window.pageYOffset !== undefined,
	    stop = 600,
	    scrollTop;

	console.log(buttonScroll);

	window.onscroll = function (e) {
		console.log('scrolling');
		scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;

		// if user scrolls to 60px from the top of the TravelList div
		if (scrollTop >= stop) {
			buttonScroll.classList.add('is-visible');
		} else {
			buttonScroll.classList.remove('is-visible');
		}
	}

	buttonScroll.onclick = function(event) {

		console.log('click button scroll');
		window.scrollTo(0, hasOffset);

	};

} )();
