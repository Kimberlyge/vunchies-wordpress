<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vunchies
 */

?>
<h1>CONTENT-POST.PHP</h1>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php vunchies_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="Detail">
		<div class="DetailHead Grid-cell Grid-cell--full">
			<div class="DetailHead-body centered Grid-cell Grid-cell--2">
				<div class="DetailHead-copy">
					<h2 class="DetailHead-title">
						<?php the_title();?>
					</h2>
					<p><?php the_content();?></p>
				</div>
			</div>
			<div class="DetailHead-media Grid-cell Grid-cell--2">
				<?php $image = get_field('cover');?>

				<img src="<?php echo $image['sizes']['medium']; ?>" alt="">

				<!-- <img class="lazyload js-pin-it" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>" data-sizes="auto" data-srcset="
					<?php echo $image['sizes']['medium']; ?> 320w,
					<?php echo $image['sizes']['medium_large']; ?> 640w,
					<?php echo $image['sizes']['large']; ?> 1024w"/> -->
			</div>
		</div>
		<div class="DetailGrid DetailGrid--inline">
			<div class="DetailGrid-item DetailGrid-item--text">
				<div class="DetailInfo">
					<h3 class="DetailText-title">Ingredients</h3>
					<ul>
						<?php the_field('ingredients');?>
					</ul>
					<div class="DetailInfoFooter">
						<div class="DetailInfoFooter-time">
							<div class="icon icon-clock-arrow"></div>
							<?php the_field('info');?>
						</div>
						<a href="javascript:window.print()">Print</a>
					</div>
				</div>
			</div>
		</div>

		<?php

		// check if the flexible content field has rows of data
		if( have_rows('grids') ):

		     // loop through the rows of data
		    while ( have_rows('grids') ) : the_row();

		        if( get_row_layout() == 'grid_content' ):

		        	the_sub_field('title');

		        endif;

		    endwhile;

		else :

		    // no layouts found

		endif;

		?>
	</div>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'vunchies' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vunchies' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'vunchies' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
