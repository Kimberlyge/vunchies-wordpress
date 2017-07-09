<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vunchies
 */

?>


<!-- <h1>CONTENT-PAGE.PHP</h1> -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $args = array(
		'post_type' => 'page',
		'post_per_page' => -1,
		'post_parent' => $post->ID
	);

	$parent = new WP_Query( $args );

	// TEMPLATE FOR ABOUT
	if ( is_page(613) ) :
		include 'about.php';

	// TEMPLATE FOR CONTACT
	elseif ( is_page(620) ) :
		include 'contact.php';

	// TEMPLATE FOR IMPRINT
	elseif ( is_page(2) ) :
		include 'contact.php';

	elseif ( is_page(715) ) :
		include 'archive.php';

	elseif ( is_page(761) ) :
		include 'tools.php';

	// TEMPLATE FOR TRAVEL OVERVIEW
	elseif ( is_page(90) ) :
		include 'travel.php';

	// TEMPLATE FOR TRAVEL DETAIL
	elseif ( $parent->have_posts() ) :
		include 'travel-detail.php';

	endif; wp_reset_query();?>


</article><!-- #post-## -->
<?php get_footer();
