( function() {

	jQuery(document).ready( function($) {
		$('.js-filter-icon').mouseenter( function() {
			var timeline = new TimelineMax({paused:true});
	        timeline.to($('.fillup'), 0.2, {scale:5, ease:Power1.easeOut}, 0);
	        // timeline.to(this._indicatorGlow, 0.2, {scale:0 , ease:Power1.easeOut}, 0);
	        // timeline.to(this._indicatorCircle, 0.2, {backgroundColor:'#ffffff', ease:Power1.easeOut}, 0);

	        timeline.play();
		});

		$('.js-filter-icon').on('click', function() {
			$(this).toggleClass('is-active');
			$('.js-filter-overlay').toggleClass('is-active');
		});
	});

	var NavFilter = document.getElementById( 'js-navItemFilter' );
	var NavFilterSubItem = document.querySelectorAll( '.NavSubFilter-item' );
	var NavFilterIcon = document.querySelector( '.NavItemFilter-icon' );
	var _filterItemActive = false;

	// Handle Subnavigation
	NavFilter.onmouseenter = function(event) {

		var target = event.currentTarget;
		var subNav = document.querySelector('.js-nav-filter');

		target.classList.add('is-active');
		subNav.classList.add('is-active');

		/* Hide */
		subNav.onmouseleave = function(event) {

			event.preventDefault();

			var target = event.currentTarget;
			var subNav = document.querySelector('.NavSub.is-active');

			subNav.classList.remove('is-active');
			target.classList.remove('is-active');

		};

	};


	// If a Tag is defined, set a visual active state to the filter icon and remove it from 'All Recipes'
	if (window.location.href.indexOf('tag/') > -1) {
		NavFilterIcon.classList.add('is-active');
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
			NavFilter.classList.add('is-active');

			this._filterItemActive = true;

			// Check if there has already been a tag defined
			if (url.indexOf('tag/') > -1) {

				NavFilter.classList.add('is-active');
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
