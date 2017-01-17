/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	/**
	 * Burger
	 */

	var burger = document.querySelector( '.Burger' );
	var header = document.querySelector( '.Header-inner' );

	var burgerActive = false;

	burger.onclick = function(event) {

		if (this.burgerActive) {

			header.classList.remove('is-mobile');
			this.burgerActive = false;

			return;
		}

		header.classList.add('is-mobile');

		this.burgerActive = true;

	};


	/**
	 * Detail Nav
	 */

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
	 * Travel Detail List
	 */

	var NavTravelList = document.getElementById( 'js-travellist' );

	if (NavTravelList) {
		NavTravelList.onmouseenter = function(event) {

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

	/**
	 * Recipes
	 */

	var NavRecipes = document.getElementById( 'js-navToggleRecipes' );

	NavRecipes.onmouseenter = function(event) {

		var target = event.currentTarget;
		var subNav = document.querySelector('.js-nav-recipes');

		target.classList.add('is-active');
		subNav.classList.add('is-active');


		/* Hide */

		target.onmouseleave = function(event) {

			event.preventDefault();

			var target = event.currentTarget;
			var subNav = document.querySelector('.NavSub.is-active');

			subNav.classList.remove('is-active');
			target.classList.remove('is-active');

		};

	};


	/**
	 * Travel
	 */

	var NavTravel = document.getElementById( 'js-navToggleTravelOverview' );

	NavTravel.onmouseenter = function(event) {

		var target = event.currentTarget;
		var subNav = document.querySelector('.js-nav-travel');

		target.classList.add('is-active');
		subNav.classList.add('is-active');


		/* Hide */

		target.onmouseleave = function(event) {

			event.preventDefault();

			var target = event.currentTarget;
			var subNav = document.querySelector('.NavSub.is-active');

			subNav.classList.remove('is-active');
			target.classList.remove('is-active');

		};

	};


	/**
	 * Filter
	 */

	var NavFilter = document.getElementById( 'js-navItemFilter' );
	var NavFilterSubItem = document.querySelectorAll( '.NavSubFilter-item' );
	var _filterItemActive = false;

	NavFilter.onmouseenter = function(event) {

		console.log('filter mouseenter');
		var target = event.currentTarget;
		var subNav = document.querySelector('.js-nav-filter');

		target.classList.add('is-active');
		subNav.classList.add('is-active');

		/* Hide */

		target.onmouseleave = function(event) {

			event.preventDefault();

			var target = event.currentTarget;
			var subNav = document.querySelector('.NavSub.is-active');

			subNav.classList.remove('is-active');
			target.classList.remove('is-active');

		};

	};


	for(var i=0; i < NavFilterSubItem.length; i++) {
		NavFilterSubItem[i].addEventListener("click", function(event) {

			event.preventDefault();

			var target = event.currentTarget;
			var tagName = target.dataset.title;
			var url = window.location.href;


			if (this._filterItemActive) {
				target.classList.remove('is-active');

				this._filterItemActive = false;

				return;
			}


			target.classList.add('is-active');

			this._filterItemActive = true;

			// If we are already on our index page
			if (url === 'http://vunchies.com/') {

				console.log('home');
				window.location.href = url + 'tag/' + tagName;

				return;
			}

			// If there were already some filters set to active
			if (url.substring(url.length-1) == "/") {
				url = url.substring(0, url.length-1);
			}
			console.log(url);

			window.location.href = url + '+' + tagName;

		});
	};

} )();
