/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	//
	// var resetActivation = function() {
	// 	var navItems = document.querySelectorAll('.Nav-item');
	// 	var navItemTravel = document.querySelector('.NavItemTravel-title');
	// 	var navItemRecipes = document.querySelector('.NavItemRecipes-title');
	//
	// 	// navItems.classList.remove('is-active');
	// 	navItemTravel.classList.remove('is-active');
	// 	navItemRecipes.classList.remove('is-active');
	//
	// 	// for(var i=0; i < navItems; i++) {
	// 	// 	console.log('navitem');
	// 	// }
	// }
	//
	// resetActivation();
	// console.log('right after acitvation');

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
	 * Trigger active states
	 */

	var navRecipes = document.querySelector('.NavItemRecipes-title');
	var navBreakfast = document.querySelector('.Nav-item--breakfast');
	var navLunch = document.querySelector('.Nav-item--lunch');
	var navDinner = document.querySelector('.Nav-item--dinner');
	var navDessert = document.querySelector('.Nav-item--dessert');
	var navTravel = document.querySelector('.NavItemTravel-title');
	var navAbout = document.querySelector('.NavItemAbout');
	var navImprint = document.querySelector('.Footer-imprint');

	if (window.location.href.indexOf("breakfast") > -1) {
		navBreakfast.classList.add('is-active');
	} else if (window.location.href.indexOf("lunch") > -1) {
		navLunch.classList.add('is-active');
	} else if (window.location.href.indexOf("dinner") > -1) {
		navDinner.classList.add('is-active');
	} else if (window.location.href.indexOf("dessert") > -1) {
		navDessert.classList.add('is-active');
	} else if (window.location.href.indexOf("about") > -1) {
		navAbout.classList.add('is-active');
	} else if (window.location.href.indexOf("imprint") > -1) {
		navImprint.classList.add('is-active');
	} else if (window.location.href.indexOf("travel") > -1) {
		navTravel.classList.add('is-active');
	} else {
		navRecipes.classList.add('is-active');
	}


	/**
	 * Travel
	 */

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
