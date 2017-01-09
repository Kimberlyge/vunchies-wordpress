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
				console.log('mouseenter');

				var target = event.target;

		    	if (target.classList.contains('js-pin-it-active')) {
		    		return;
		    	}

		    	target.classList.add('js-pin-it-active');

		    	target.insertAdjacentHTML('beforebegin', '<a href="http://www.pinterest.com/pin/create/button/?url=' + encodeURIComponent(window.location.href) + '&media=' + encodeURIComponent(event.target.currentSrc) + '&description=' + encodeURIComponent(event.target.alt) + '" target="_blank" class="pinterest-anchor js-pin-icon"><svg class="icon icon-pinterest icon-pinterest--big"><use xlink:href="#icon-pinterest"></use></svg></a>');

		    	target.onmouseleave = function(event) {
		    		console.log('leave');
				};
			});
		}
	}

} )();
