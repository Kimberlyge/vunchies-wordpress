( function() {

	jQuery(document).ready( function($) {
		console.log('travel overview')
		TweenMax.staggerFromTo('.js-animate', 0.5, {y:5}, {opacity:1, y:0, ease:Power0.easeIn}, 0.3);
	});

} )();
