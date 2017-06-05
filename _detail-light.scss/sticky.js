/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	var TravelList = document.getElementById('js-travellist'),
		Header = document.querySelector('.Header'),
		TravelCover = TravelList.parentElement,
		offsetTravelList = TravelList.offsetHeight,
		offsetHeader = Header.offsetHeight,
		offsetTravelCover = TravelCover.offsetHeight,

	    stop      = offsetHeader + (offsetTravelCover - offsetTravelList),
	    docBody   = document.documentElement || document.body.parentNode || document.body,
	    hasOffset = window.pageYOffset !== undefined,
	    scrollTop;

	console.log(stop);

	window.onscroll = function (e) {

	  scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;

	  // if user scrolls to 60px from the top of the TravelList div
	  if (scrollTop >= stop) {
	    TravelList.classList.add('is-sticky');
	  } else {
	    TravelList.classList.remove('is-sticky');
	  }
	}

} )();
