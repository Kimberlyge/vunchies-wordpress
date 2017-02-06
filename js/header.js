/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	$('.js-nav-home').on('click', function(event) {
		event.preventDefault();

		var $this = $(this);
			ajaxurl = $this.data('ajax');

		var data = {
			'action': 'navigate_home'
		};

		console.log(data);

		jQuery.post(ajaxurl, data, function(response) {
			console.log(data);

			$('#content').html(response); // insert data
		});

	});

	$('.js-nav-item').on('click', function(event) {
		event.preventDefault();

		var $this = $(this);
			ajaxurl = $this.data('ajax');
			link = $this.attr('href');

		if($this.data('page')) {
			console.log('has page id');
			this.pageId = $this.data('page');

			// window.history.pushState("", "", link);
		}

		if($this.data('post')) {
			console.log('has post id');
			this.postId = $this.data('post');

		}

		if($this.data('category')) {
			console.log('has category id');
			this.categoryId = $this.data('category');
		}


		var data = {
		    'action': 'my_action',
		    'pageId': this.pageId,
		    'postId': this.postId,
		    'categoryId': this.categoryId
		};

		// history.pushState("data", "title", link);

		console.log(data);

		jQuery.post(ajaxurl, data, function(response) {
			console.log(data);

			$('#content').html(response); // insert data

				TweenMax.staggerFromTo('.js-animate', 0.25, {y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.1);


				/**
				 * Img to Bgi
				 */

				var html = document.querySelector('html');
				var teaserMedia = document.querySelectorAll('.ImgToBg');

				for(var i=0; i < teaserMedia.length; i++) {
					var img = teaserMedia[i].getElementsByTagName('img');

					for(var x=0; x < img.length; x++) {
						this._src = img[x].src;
					}

					teaserMedia[i].style.backgroundImage = 'url(' + this._src +')';
				}


				/* Post Detail */

				if (data.postId) {

					var detailHeadBody = document.querySelector('.DetailHead-body' );
					var detailHeadMedia = document.getElementsByClassName('DetailHead-media' );
					var detailHeadCopy = document.getElementsByClassName('js-detail-head' );
					var detailHead = document.querySelector('.DetailHead' );

					if (detailHeadCopy[0]) {
						var detailHeadCopyHeight = detailHeadCopy[0].offsetHeight;
						var detailHeadMediaHeight = detailHeadMedia[0].offsetHeight;

						console.log(detailHeadCopyHeight, detailHeadMediaHeight);

						detailHeadBody.style.height = detailHeadCopyHeight + 'px';
						detailHead.style.height = detailHeadMediaHeight + 'px';
					}

					TweenMax.staggerFromTo('.Teaser-wrap', 0.25, {y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.1);

					TweenMax.staggerFromTo('.js-animate-detail', 0.3, {y:-5}, {opacity:1, y:0, ease:Power0.easeIn}, 0.06);
				}

		});


		history.pushState("data", "title", link);


	});

	$('.js-nav-form').on('change', function() {
		console.log('option changed');

		var filter = $('#filter');

		// console.log(xhr);
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				// filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				// filter.find('button').text('Apply filter'); // changing the button label back
				$('#RecipeOverview').html(data); // insert data

             	TweenMax.staggerFromTo('.Teaser-wrap.loaded', 0.25, {y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.1);

				/**
				 * Img to Bgi
				 */

				var html = document.querySelector('html');
				var teaserMedia = document.querySelectorAll('.ImgToBg');

				for(var i=0; i < teaserMedia.length; i++) {
					var img = teaserMedia[i].getElementsByTagName('img');

					for(var x=0; x < img.length; x++) {
						this._src = img[x].src;
					}

					teaserMedia[i].style.backgroundImage = 'url(' + this._src +')';
				}
			}
		});

		return false;

	});


	// Revert to a previously saved state
	window.addEventListener('popstate', function(event) {
	  console.log('popstate fired!');

	  updateContent(event.state);
	});


	// $('.Nav-item').on('click', function(event){
	// 	console.log('clicked');
	// 	event.preventDefault();

	// 	// var selecetd_taxonomy = $(this).attr('title');

	// 	// var filter = $(this);
	// 	var taxonomy = $(this).data('title');
	// 	console.log(taxonomy);

	// 	data = {
 //            action: 'filter_posts', // function to execute
 //            afp_nonce: afp_vars.afp_nonce, // wp_nonce
 //            taxonomy: taxonomy, // selected tag
 //        };

 //        $.post( afp_vars.afp_ajax_url, data, function(response) {
 //        	console.log(data, response);
 //            if( response ) {
 //                // Display posts on page
 //                $('#RecipeOverview').html( data );
 //                // Restore div visibility
 //                // $('.tagged-posts').fadeIn();

 //             	TweenMax.staggerFromTo('.Teaser-wrap.loaded', 0.25, {y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.1);

	// 			*
	// 			 * Img to Bgi


	// 			var html = document.querySelector('html');
	// 			var teaserMedia = document.querySelectorAll('.ImgToBg');

	// 			for(var i=0; i < teaserMedia.length; i++) {
	// 				var img = teaserMedia[i].getElementsByTagName('img');

	// 				for(var x=0; x < img.length; x++) {
	// 					this._src = img[x].src;
	// 				}

	// 				teaserMedia[i].style.backgroundImage = 'url(' + this._src +')';
	// 			}
 //            }
 //        });

	// 	// $.ajax({
	// 	// 	url: target.data('target'),
	// 	// 	data:filter.serialize(), // form data
	// 	// 	type: 'POST', // POST
	// 	// 	beforeSend:function(xhr){
	// 	// 		filter.find('button').text('Processing...'); // changing the button label
	// 	// 	},
	// 	// 	success:function(data){
	// 	// 		filter.find('button').text('Apply filter'); // changing the button label back
	// 	// 		$('#RecipeOverview').html(data); // insert data

	// 	// 	}
	// 	// });

	// 	// return false;

	// });

} )();
