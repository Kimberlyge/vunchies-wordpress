/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	jQuery(document).ready( function($) {

		var detailCover = $('.Detail-cover');

		window.onscroll = function() {
			if(document.body.scrollTop <= 623 || document.documentElement.scrollTop <= 623) {
				var calculatedTop = document.body.scrollTop/7;
				console.log('scroll', document.body.scrollTop);
				TweenLite.to(detailCover, 0.15, {y:-calculatedTop/2});
			}
		}

		$.ajax({
			url: "http://vunchies.com/wp-json/wp/v2/posts",
			success: function( data ) {

				// var detailHeadBody = document.querySelector('.DetailHead-body' );
				// var detailHeadMedia = document.getElementsByClassName('DetailHead-media' );
				// var detailHeadCopy = document.getElementsByClassName('js-detail-head' );
				// var detailHead = document.querySelector('.DetailHead' );

				// if (detailHeadCopy[0]) {
				// 	var detailHeadCopyHeight = detailHeadCopy[0].offsetHeight;
				// 	var detailHeadMediaHeight = detailHeadMedia[0].offsetHeight;

				// 	detailHeadBody.style.height = detailHeadCopyHeight + 'px';
				// 	detailHead.style.height = detailHeadMediaHeight + 'px';
				// }

				// TweenMax.staggerFromTo('.Teaser-wrap', 0.25, {y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.1);
				TweenMax.staggerFromTo('.js-animate', 0.3, {y:5}, {opacity:1, y:0, ease:Power0.easeIn}, 0.2);

				TweenMax.staggerFromTo('.js-animate-reverse', 0.3, {y:-5}, {opacity:1, y:0, ease:Power0.easeIn}, 0.06);

				TweenMax.staggerTo('.js-animate-alpha', 0.25, {opacity:1, ease:Power0.easeIn});



				/* Travel Detail */
				TweenMax.fromTo('.js-animate-city-title', 0.25, {y:-15}, {opacity:1, y:0, ease:Power0.easeIn});
				TweenMax.fromTo('.js-animate-city-country p', 0.25, {y:15}, {opacity:1, y:0, ease:Power0.easeIn});
				TweenMax.fromTo('.js-travellist', 0.3, {x:-140}, {x:0, delay:0.5, ease:Power0.easeIn});

			}
		});
	});

} )();
