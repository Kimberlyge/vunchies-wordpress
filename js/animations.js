/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	jQuery(document).ready( function($) {

		$.ajax({
			url: "http://vunchies.com/wp-json/wp/v2/posts",
			success: function( data ) {
				// console.log('data is there, yay');

				TweenMax.staggerFromTo('.Teaser-wrap', 0.3, {y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.15);
			}
		});

		$.ajax({
			url: "http://vunchies.com/wp-json/wp/v2/pages/90",
			success: function( data ) {
				// console.log('traveloverview is there, yay');

				// var content = document.getElementById( 'TravelOverview-item' );

				// if(content) TweenMax.fromTo(content, 0.3, {x:window.innerWidth},{x:0, ease:Power0.easeInOut});

				TweenMax.staggerFromTo('.TravelOverview-item', 0.5, {opacity:0, y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.15);

			}
		});
	});

	if (document.querySelector('infinite-wrap')) {
		console.log('infinite wrap');
	}

	if (document.querySelector('infinite-loader')) {
		console.log('infinite loader');
	}

} )();
