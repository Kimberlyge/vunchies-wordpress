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

				/* Position absolute DetailHead */

				var detailHeadBody = document.querySelector('.DetailHead-body' );
				var detailHeadMedia = document.getElementsByClassName('DetailHead-media' );
				var detailHeadCopy = document.getElementsByClassName('js-detail-head' );
				var detailHead = document.querySelector('.DetailHead' );

				if (detailHeadCopy) {
					var detailHeadCopyHeight = detailHeadCopy[0].offsetHeight;
					var detailHeadMediaHeight = detailHeadMedia[0].offsetHeight;

					// console.log(detailHead, detailHeadBody);

					detailHeadBody.style.height = detailHeadCopyHeight + 'px';
					detailHead.style.height = detailHeadMediaHeight + 'px';
				}


				TweenMax.staggerFromTo('.Teaser-wrap', 0.25, {y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.11);

				TweenMax.staggerFromTo('.js-animate-detail', 0.3, {y:-5}, {opacity:1, y:0, ease:Power0.easeIn}, 0.06);
			}
		});

		$.ajax({
			url: "http://vunchies.com/wp-json/wp/v2/pages",
			success: function( data ) {

				TweenMax.staggerFromTo('.js-animate', 0.3, {y:5}, {opacity:1, y:0, ease:Power0.easeIn}, 0.5);

				/* Travel Detail */

				TweenMax.fromTo('.js-animate-city-title', 0.25, {y:-15}, {opacity:1, y:0, ease:Power0.easeIn});
				TweenMax.fromTo('.js-animate-city-country p', 0.25, {y:15}, {opacity:1, y:0, ease:Power0.easeIn});
				TweenMax.fromTo('.js-travellist', 0.3, {x:-140}, {x:0, delay:0.5, ease:Power0.easeIn});

			}
		});
	});

} )();
