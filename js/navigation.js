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

	buttonFooterNext.onmouseenter = function(event) {

		var target = event.currentTarget;

		buttonFooterTitleNext.classList.add('is-active');


		/* Hide */

		target.onmouseleave = function(event) {

			buttonFooterTitleNext.classList.remove('is-active');

		};

	};

	buttonFooterPrev.onmouseenter = function(event) {

		var target = event.currentTarget;

		buttonFooterTitlePrev.classList.add('is-active');


		/* Hide */

		target.onmouseleave = function(event) {

			buttonFooterTitlePrev.classList.remove('is-active');

		};

	};

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

	// var button, menu, links, i, len;

	// button = container.getElementsByTagName( 'button' )[0];
	// if ( 'undefined' === typeof button ) {
	// 	return;
	// }

	// menu = container.getElementsByTagName( 'ul' )[0];

	// // Hide menu toggle button if menu is empty and return early.
	// if ( 'undefined' === typeof menu ) {
	// 	button.style.display = 'none';
	// 	return;
	// }

	// menu.setAttribute( 'aria-expanded', 'false' );
	// if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
	// 	menu.className += ' nav-menu';
	// }

	// button.onclick = function() {
	// 	if ( -1 !== container.className.indexOf( 'toggled' ) ) {
	// 		container.className = container.className.replace( ' toggled', '' );
	// 		button.setAttribute( 'aria-expanded', 'false' );
	// 		menu.setAttribute( 'aria-expanded', 'false' );
	// 	} else {
	// 		container.className += ' toggled';
	// 		button.setAttribute( 'aria-expanded', 'true' );
	// 		menu.setAttribute( 'aria-expanded', 'true' );
	// 	}
	// };

	// // Get all the link elements within the menu.
	// links = menu.getElementsByTagName( 'a' );

	// // Each time a menu link is focused or blurred, toggle focus.
	// for ( i = 0, len = links.length; i < len; i++ ) {
	// 	links[i].addEventListener( 'focus', toggleFocus, true );
	// 	links[i].addEventListener( 'blur', toggleFocus, true );
	// }

	// /**
	//  * Sets or removes .focus class on an element.
	//  */
	// function toggleFocus() {
	// 	var self = this;

	// 	// Move up through the ancestors of the current link until we hit .nav-menu.
	// 	while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

	// 		// On li elements toggle the class .focus.
	// 		if ( 'li' === self.tagName.toLowerCase() ) {
	// 			if ( -1 !== self.className.indexOf( 'focus' ) ) {
	// 				self.className = self.className.replace( ' focus', '' );
	// 			} else {
	// 				self.className += ' focus';
	// 			}
	// 		}

	// 		self = self.parentElement;
	// 	}
	// }

	// /**
	//  * Toggles `focus` class to allow submenu access on tablets.
	//  */
	// ( function( container ) {
	// 	var touchStartFn, i,
	// 		parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// 	if ( 'ontouchstart' in window ) {
	// 		touchStartFn = function( e ) {
	// 			var menuItem = this.parentNode, i;

	// 			if ( ! menuItem.classList.contains( 'focus' ) ) {
	// 				e.preventDefault();
	// 				for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
	// 					if ( menuItem === menuItem.parentNode.children[i] ) {
	// 						continue;
	// 					}
	// 					menuItem.parentNode.children[i].classList.remove( 'focus' );
	// 				}
	// 				menuItem.classList.add( 'focus' );
	// 			} else {
	// 				menuItem.classList.remove( 'focus' );
	// 			}
	// 		};

	// 		for ( i = 0; i < parentLink.length; ++i ) {
	// 			parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
	// 		}
	// 	}
	// }( container ) );
} )();
