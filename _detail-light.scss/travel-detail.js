/**
 * Travel Detail functionatlities
 */

( function() {

	var buttonFooterNext = document.querySelector( '.js-button-footerNav-next' );
	var buttonFooterPrev = document.querySelector( '.js-button-footerNav-prev' );
	var buttonFooterTitlePrev = document.querySelector( '.js-button-footerNav-title-prev' );
	var buttonFooterTitleNext = document.querySelector( '.js-button-footerNav-title-next' );

	if (buttonFooterNext) {
		buttonFooterNext.onmouseenter = function(event) {

			var target = event.currentTarget;

			buttonFooterTitleNext.classList.add('is-active');


			/* Hide */

			target.onmouseleave = function(event) {

				buttonFooterTitleNext.classList.remove('is-active');

			};

		};
	}

	if (buttonFooterPrev) {
		buttonFooterPrev.onmouseenter = function(event) {

			var target = event.currentTarget;

			buttonFooterTitlePrev.classList.add('is-active');


			/* Hide */

			target.onmouseleave = function(event) {

				buttonFooterTitlePrev.classList.remove('is-active');

			};

		};
	}


	/**
	 * Restaurant List
	 */

	var restaurantList = document.getElementById( 'js-travellist' );

	if (restaurantList) {
		restaurantList.onmouseenter = function(event) {

			var target = event.currentTarget;

			target.classList.add('is-active');


			/* Hide */

			target.onmouseleave = function(event) {

				event.preventDefault();

				var target = event.currentTarget;

				target.classList.remove('is-active');

			};

		};
	}


} )();
