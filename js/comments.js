/**
 * Comments
 */


( function() {

	/* Add anchor indicator after Title */

	var commentAuthorWebsite = document.querySelectorAll('.comment-author .url');

	if (commentAuthorWebsite) {

		for(var i=0; i < commentAuthorWebsite.length; i++) {
		    commentAuthorWebsite[i].insertAdjacentHTML('beforeEnd', '<svg class="icon icon-link"><use xlink:href="#icon-link"></use></svg>');
		}

	}

} )();
