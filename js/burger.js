/**
* Burger
*/

( function() {

	var burger = document.querySelector( '.Burger' );
	var header = document.querySelector( '.Header-inner' );

	var burgerActive = false;

	burger.onclick = function(event) {

		if (this.burgerActive) {

			header.classList.remove('is-mobile');
			burger.classList.remove('is-open');

			this.burgerActive = false;

			return;
		}

		header.classList.add('is-mobile');
		burger.classList.add('is-open');

		this.burgerActive = true;

	};

} )();
