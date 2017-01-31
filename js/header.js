/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	// $('#filter').submit(function(){

	// 	var filter = $(this);

	// 	console.log(filter);
	// 	$.ajax({
	// 		url:filter.attr('action'),
	// 		data:filter.serialize(), // form data
	// 		type:filter.attr('method'), // POST
	// 		beforeSend:function(xhr){
	// 			filter.find('button').text('Processing...'); // changing the button label
	// 		},
	// 		success:function(data){
	// 			filter.find('button').text('Apply filter'); // changing the button label back
	// 			$('#RecipeOverview').html(data); // insert data

 //             	TweenMax.staggerFromTo('.Teaser-wrap.loaded', 0.25, {y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.1);

	// 			/**
	// 			 * Img to Bgi
	// 			 */

	// 			var html = document.querySelector('html');
	// 			var teaserMedia = document.querySelectorAll('.ImgToBg');

	// 			for(var i=0; i < teaserMedia.length; i++) {
	// 				var img = teaserMedia[i].getElementsByTagName('img');

	// 				for(var x=0; x < img.length; x++) {
	// 					this._src = img[x].src;
	// 				}

	// 				teaserMedia[i].style.backgroundImage = 'url(' + this._src +')';
	// 			}
	// 		}
	// 	});

	// 	return false;

	// });

	// $('.Nav-item').on('click', function(event){
	// 	console.log('clicked');
	// 	event.preventDefault();

	// 	// var selecetd_taxonomy = $(this).attr('title');

	// 	var filter = $(this);

	// 	$.ajax({
	// 		url: 'www.vunchies.com/wp-admin/admin-ajax.php',
	// 		data:filter.serialize(), // form data
	// 		type: 'POST', // POST
	// 		beforeSend:function(xhr){
	// 			filter.find('button').text('Processing...'); // changing the button label
	// 		},
	// 		success:function(data){
	// 			filter.find('button').text('Apply filter'); // changing the button label back
	// 			$('#RecipeOverview').html(data); // insert data

 //             	TweenMax.staggerFromTo('.Teaser-wrap.loaded', 0.25, {y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.1);

	// 			/**
	// 			 * Img to Bgi
	// 			 */

	// 			var html = document.querySelector('html');
	// 			var teaserMedia = document.querySelectorAll('.ImgToBg');

	// 			for(var i=0; i < teaserMedia.length; i++) {
	// 				var img = teaserMedia[i].getElementsByTagName('img');

	// 				for(var x=0; x < img.length; x++) {
	// 					this._src = img[x].src;
	// 				}

	// 				teaserMedia[i].style.backgroundImage = 'url(' + this._src +')';
	// 			}
	// 		}
	// 	});

		return false;

	});

} )();
