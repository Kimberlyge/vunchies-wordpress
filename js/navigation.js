/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

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

		target.onmouseleave = function(event) {

			event.preventDefault();

			var target = event.currentTarget;
			var subNav = document.querySelector('.NavSub.is-active');

			subNav.classList.remove('is-active');
			target.classList.remove('is-active');

		};

	};


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


	/**
	 * Travel
	 */

	// Add active state to CSS
	var NavTravelTitle = document.querySelector('.NavItemTravel-title');

	if (window.location.href.indexOf("travel") > -1) {
		NavTravelTitle.classList.add('is-active');
		NavRecipeTitle.classList.remove('is-active');
		NavAbout.classList.remove('is-active');
	}

	var NavTravel = document.getElementById( 'js-navToggleTravelOverview' );

	NavTravel.ontouchstart = function(event) {
		return;
	};

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

	// Handle Subnavigation
	NavFilter.onmouseenter = function(event) {

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


	// If a Tag is defined, set a visual active state to the filter icon and remove it from 'All Recipes'
	if (window.location.href.indexOf('tag/') > -1) {
		NavRecipeTitle.classList.remove('is-active');
		NavFilter.classList.add('is-active');

	}


	for(var i=0; i < NavFilterSubItem.length; i++) {

		var items = NavFilterSubItem[i];
		var tagName = items.getAttribute('data-title');

		if (window.location.href.indexOf(tagName) > -1) {
			items.classList.add('is-active');
		}

		NavFilterSubItem[i].addEventListener("click", function (event) {

			event.preventDefault();

			var target = event.currentTarget;
			var tagName = target.dataset.title;
			var url = window.location.href;

			// Check if the tagname is already active
			if (url.indexOf(tagName) > -1) {

				// Remove the active class from the CSS
				target.classList.remove('is-active');
				this._filterItemActive = false;


				// Remove tagName from the url
				if (url.indexOf('+' + tagName) > -1) {

					this.newUrl = url.replace("+" + tagName, "");
					window.location.href = this.newUrl;
					return;

				}

				if (url.indexOf('/' + tagName) > -1) {

					if (url.indexOf(tagName + "+") > -1) {
						this.newUrl = url.replace(tagName + "+" , "");
						window.location.href = this.newUrl;
						return;
					}

					this.newUrl = url.replace("/tag/" + tagName, "");
					window.location.href = this.newUrl;
					return;
				}

			}

			// Add active state to CSS
			target.classList.add('is-active');
			this._filterItemActive = true;

			// Check if there has already been a tag defined
			if (url.indexOf('tag/') > -1) {

				// Remove last dash and add the new Tag
				if (url.substring(url.length-1) == "/") {
					url = url.substring(0, url.length-1);
				}

				window.location.href = url + '+' + tagName;
				return;

			}

			window.location.href = "http://vunchies.com/tag/" + tagName;
			return;

		});
	}

} )();
