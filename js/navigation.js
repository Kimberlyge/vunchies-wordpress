/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	jQuery(document).ready( function($) {
		/* Make sure all Subnavigations are closed when not in focue */

		// var NavSubsActive = document.querySelector('.NavSub.is-active');
		// var NavItemTravel = document.querySelector('.NavItemTravel');

		// if (target !== NavSub || target !== NavItemTravel) {
		// 	var NasvSubActive = document.querySelector('.NavSub.is-active');
		// 	NavSubsActive.classList.remove('is-active');
		// }

		/**
		 * Recipes
		 */

		var NavRecipes = document.getElementById( 'js-navToggleRecipes' );
		var NavRecipeTitle = document.querySelector('.NavItemRecipes-title');

		// Visually activate Anchor
		if (window.location.href === "http://www.vunchies.com" || "http://vunchies.com") {
			NavRecipeTitle.classList.add('is-active');
		}

		NavRecipes.onmouseenter = function(event) {

			var target = event.currentTarget;
			var subNav = document.querySelector('.js-nav-recipes');

			target.classList.add('is-active');
			subNav.classList.add('is-active');


			/* Hide */

			// target.onmouseleave = function(event) {

			// 	event.preventDefault();

			// 	var target = event.currentTarget;
			// 	var subNav = document.querySelector('.NavSub.is-active');

			// 	subNav.classList.remove('is-active');
			// 	target.classList.remove('is-active');

			// };

			subNav.onmouseleave = function(event) {

				event.preventDefault();

				var target = event.currentTarget;
				var subNav = document.querySelector('.NavSub.is-active');

				subNav.classList.remove('is-active');
				target.classList.remove('is-active');

			};

		};


		/**
		 * Breakfast
		 */

		// Add active state to CSS
		// var NavAbout = document.querySelector('.NavItemAbout');

		// if (window.location.href.indexOf("about") > -1) {
		// 	NavAbout.classList.add('is-active');

		// }

		/**
		 * About
		 */

		// Add active state to CSS
		var NavAbout = document.querySelector('.NavItemAbout');

		if (window.location.href.indexOf("about") > -1) {
			NavAbout.classList.add('is-active');

		}


		/**
		 * Imprint
		 */

		// Add active state to CSS
		var NavImprint = document.querySelector('.Footer-imprint');

		if (window.location.href.indexOf("imprint") > -1) {
			NavImprint.classList.add('is-active');
			NavRecipeTitle.classList.remove('is-active');
		}

	});

} )();
