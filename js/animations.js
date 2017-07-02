/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	jQuery(document).ready( function($) {
		console.log('front page');

		function getAllImagesDonePromise() {
		    // A jQuery-style promise we'll resolve
		    var d = $.Deferred();

		    // Get all images to start with (even complete ones)
		    var imgs = $("img");

		    // Add a one-time event handler for the load and error events on them
		    imgs.one("load.allimages error.allimages", function() {
		        // This one completed, remove it
		        imgs = imgs.not(this);
		        if (imgs.length == 0) {
		            // It was the last, resolve
		            d.resolve();
		        }
		    });

		    // Find the completed ones
		    var complete = imgs.filter(function() { return this.complete; });

		    // Remove our handler from completed ones, remove them from our list
		    complete.off(".allimages");
		    imgs = imgs.not(complete);
		    complete = undefined; // Don't need it anymore

		    // If none left, resolve; otherwise wait for events
		    if (imgs.length == 0) {
		        d.resolve();
		    }

		    // Return the promise for our deferred
		    return d.promise();
		}

		getAllImagesDonePromise().then(function() {
		  console.log('imgs are done loading')
			TweenMax.staggerFromTo('.Teaser-wrap', 0.35, {y:10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.15);

		});

	});

} )();
