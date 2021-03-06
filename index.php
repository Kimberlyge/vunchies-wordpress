<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vunchies
 */

		get_header(); ?>

	<div class="Preloader is-hidden">
		<?php include 'template-parts/preloader.php';
		?>
	</div>

	<div id="primary" class="content-area js-preload">
		<main id="main" class="site-main" role="main">
		<!-- <h1>INDEX.PHP</h1> -->
			<div class="grid Teaser Container" id="RecipeOverview">
			<?php
			if ( have_posts() ) :
				/* Start the Loop */

				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				wp_link_pages();
				?>
				<div class="Pagination">
					<p><?php posts_nav_link('Newer posts','Older posts'); ?></p>
				</div>

				<?php
			endif; ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
