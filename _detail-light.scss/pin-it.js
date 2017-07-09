/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	/**
	 * Travel Detail List
	 */

	var pinImg = document.querySelectorAll('.js-pin-it');

	if (pinImg) {
		for(var i=0; i < pinImg.length; i++) {
			pinImg[i].addEventListener("mouseenter", function(event) {

				var target = event.target;

		    	if (target.classList.contains('js-pin-it-active')) {
		    		return;
		    	}

		    	target.classList.add('js-pin-it-active');

		    	target.insertAdjacentHTML('beforebegin', '<a href="http://www.pinterest.com/pin/create/button/?url=' + encodeURIComponent(window.location.href) + '&media=' + encodeURIComponent(event.target.currentSrc) + '&description=' + encodeURIComponent(event.target.alt) + '" target="_blank" class="pinterest-anchor js-pin-icon"><img class="icon icon-pinterest" src="http://vunchies.com/wp-content/uploads/2017/01/pinterest-1.svg" alt=""></a>');

		    	target.onmouseleave = function(event) {
				};
			});
		}
	}

} )();
