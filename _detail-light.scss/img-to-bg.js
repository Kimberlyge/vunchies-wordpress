( function() {

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

} )();
