( function() {

	jQuery(document).ready( function($) {

		var NavTravelTitle = document.querySelector('.NavItemTravel-title');

		if (window.location.href.indexOf("travel") > -1) {
			NavTravelTitle.classList.add('is-active');
			// NavRecipeTitle.classList.remove('is-active');
			// NavAbout.classList.remove('is-active');
		}

		var NavTravel = document.getElementById( 'js-navToggleTravelOverview' );

		// $.ajaxSetup({cache:false});
		// NavTravelTitle.onclick = function(e) {
	 //        pageurl = $(this).attr('href');

	 //       	console.log(pageurl);

  //           if(pageurl!=window.location) {
  //               window.history.pushState({path: pageurl}, '', pageurl);
  //           }

  //           var post_id = $(this).attr("rel");
  //           console.log(post_id);
  //           $("#content").load("http://<?php echo $_SERVER[HTTP_HOST]; ?>/template-parts/content-page/",{id:post_id}); // line 12
  //           return false;
	 //    };

		NavTravel.ontouchstart = function(event) {
			return;
		};


		NavTravel.onmouseenter = function(event) {

			var target = event.currentTarget;
			var subNav = document.querySelector('.js-nav-travel');

			target.classList.add('is-active');
			subNav.classList.add('is-active');

			/* Hide */

			// target.onmouseleave = function(event) {

			// 	event.preventDefault();
			// 	var NavTravel = document.getElementById( 'js-navToggleTravelOverview' );

			// 	var target = event.currentTarget;
			// 	var subNav = document.querySelector('.NavSub.is-active');


			// 	subNav.classList.remove('is-active');
			// 	target.classList.remove('is-active');

			// };

			subNav.onmouseleave = function(event) {

				event.preventDefault();
				var NavTravel = document.getElementById( 'js-navToggleTravelOverview' );

				var target = event.currentTarget;
				var subNav = document.querySelector('.NavSub.is-active');


				subNav.classList.remove('is-active');
				target.classList.remove('is-active');

			};

		};
	});

} )();
