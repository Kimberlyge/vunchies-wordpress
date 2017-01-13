<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package Vunchies
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 */
function vunchies_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'RecipeOverview',
		'render'    => 'vunchies_infinite_scroll_render',
		'footer'    => 'page'
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'vunchies_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function vunchies_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();

		the_title();

		echo "
            <script type=\"text/javascript\">
            var infiniteWrap = document.querySelectorAll('.infinite-wrap');

            for (var i = 0; i < infiniteWrap.length; i++) {
                console.log('infitinewrapyo');
            }
				TweenMax.staggerFromTo('.infinite-wrap .Teaser-wrap', 0.3, {y:-10}, {opacity:1, y:0, ease:Power0.easeIn}, 0.15);

            </script>
        ";

		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}
