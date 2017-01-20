<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Vunchies
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

			<div class="Detail">
				<div class="grid">
					<div class="DetailHead">
						<div class="col-s-3-3 col-m-2-4">
							<div class="DetailHead-body js-animate-detail centered">
								<div class="DetailHead-copy">
									<h2 class="DetailHead-title">
										<?php the_title();?>
									</h2>
									<p><?php the_content();?></p>
								</div>
							</div>
						</div>
						<div class="col-s-3-3 col-m-2-4">
							<div class="DetailHead-media js-animate-detail">
								<?php $image = get_field('cover');?>
								<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
							</div>
						</div>
					</div>
				</div>
				<div class="grid">
					<div class="col-s-3-3 col-m-1-3">
						<div class="DetailGrid-item js-animate-detail DetailGrid-item--text">
							<div class="DetailInfo">
								<h3 class="DetailText-title">Ingredients</h3>
								<ul>
									<?php the_field('ingredients');?>
								</ul>
								<div class="DetailInfoFooter">
									<div class="DetailInfoFooter-time">
										<svg class="DetailInfoFooter-icon icon icon-stop-watch-2"><use xlink:href="#icon-stop-watch-2"></use></svg>
										<?php the_field('info');?>
									</div>
									<a class="DetailInfoFooter-print" href="javascript:window.print()">Print</a>
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

				        	if( get_sub_field('first_grid') ):?>

							<?php if( get_sub_field('is_first') ):?>
								<h1>IS FIRST</h1>
								<div class="grid"><div class="col-s-3-3 col-m-2-3">
							<?php elseif ( !get_sub_field('is_first')) :?>
								<div class="grid">is-NOT-first
							<?php endif;?>
									<div class="DetailGrid <?php if( get_sub_field('is_first') ):?>is-first<?php endif;?> <?php if( get_sub_field('reverse') ):?>is-reverse<?php endif;?>">

										<div class="col-s-3-3 col-m-2-4 <?php if( get_sub_field('is_portrait') ):?>col-m-2-3--force<?php endif;?> <?php if( get_sub_field('is_landscape') ):?>col-m-1-3--force<?php endif;?>">
											<div class="DetailGrid-item DetailGrid-item--text js-animate-detail">
												<!-- {{#if grid.title}} -->
												<?php if( get_sub_field('title') ):?>
													<h3 class="DetailText-title"><?php the_sub_field('title');?>:</h3>
												<?php endif;?>
												<!-- {{/if}} -->
												<?php the_sub_field('text');?>
											</div>
										</div>
										<div class="col-s-3-3 col-m-2-4 <?php if( get_sub_field('is_portrait') ):?>col-m-1-3--force<?php endif;?> <?php if( get_sub_field('is_landscape') ):?>col-m-2-3--force<?php endif;?>">
											<div class="DetailGrid-item DetailGrid-item--media js-animate-detail">

												<?php $image = get_sub_field('image');?>

												<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>

											</div>
										</div>
									</div>
							<?php if( get_sub_field('is_first') ):?></div><?php endif;?>
							<!-- close grid wrap -->
							</div>
				        	<?php
				        	endif;


				        	if( get_sub_field('second_grid') ):?>

				        	<?php if( get_sub_field('is_first') ):?>
								<h1>IS FIRST</h1>
								<div class="grid"><div class="col-s-3-3 col-m-2-3">
							<?php elseif ( !get_sub_field('is_first')) :?>
								<div class="grid">is-NOT-first
							<?php endif;?>

								<div class="DetailGrid DetailGrid--second <?php if( get_sub_field('is_first') ):?>is-first<?php endif;?> <?php if( get_sub_field('reverse') ):?>is-reverse<?php endif;?> <?php if( get_sub_field('is_center') ):?>is-center<?php endif;?>">
									<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-2-4--force<?php endif;?>">
										<div class="DetailGrid-item DetailGrid-item--text js-animate-detail">
											<!-- {{#if grid.title}} -->
											<?php if( get_sub_field('title') ):?>
												<h3 class="DetailText-title"><?php the_sub_field('title');?>:</h3>
											<?php endif;?>
											<!-- {{/if}} -->
											<?php the_sub_field('text');?>
										</div>
									</div>
									<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-1-4--force<?php endif;?>">
										<div class="DetailGrid-item DetailGrid-item--text js-animate-detail">
											<!-- {{#if grid.title}} -->
											<?php if( get_sub_field('title_2') ):?>
												<h3 class="DetailText-title"><?php the_sub_field('title_2');?>:</h3>
											<?php endif;?>
											<!-- {{/if}} -->
											<?php the_sub_field('text_2');?>
										</div>
									</div>
									<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-1-4--force<?php endif;?>">
										<div class="DetailGrid-item DetailGrid-item--media js-animate-detail">

											<?php $image = get_sub_field('image');?>

											<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
										</div>
									</div>
								</div>

							<?php if( get_sub_field('is_first') ):?></div><?php endif;?>

				        	</div>
				        	<?php
				        	endif;

				        	if( get_sub_field('third_grid') ):?>

				        	<?php if( get_sub_field('is_first') ):?>
								<h1>IS FIRST</h1>
								<div class="grid"><div class="col-s-3-3 col-m-2-3">
							<?php elseif ( !get_sub_field('is_first')) :?>
								<div class="grid">is-NOT-first
							<?php endif;?>
								<div class="DetailGrid DetailGrid--third <?php if( get_sub_field('is_first') ):?>is-first<?php endif;?> <?php if( get_sub_field('reverse') ):?>is-reverse<?php endif;?> <?php if( get_sub_field('is_center') ):?>is-center<?php endif;?><?php if( get_sub_field('is_bigger') ):?>is-bigger<?php endif;?>">

									<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-2-4--force<?php endif;?>">
										<div class="DetailGrid-item DetailGrid-item--text js-animate-detail">
											<!-- {{#if grid.title}} -->
											<?php if( get_sub_field('title') ):?>
												<h3 class="DetailText-title"><?php the_sub_field('title');?>:</h3>
											<?php endif;?>
											<!-- {{/if}} -->
											<?php the_sub_field('text');?>
										</div>
									</div>
									<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-1-4--force<?php endif;?>">
										<div class="DetailGrid-item DetailGrid-item--media js-animate-detail">

											<?php $image = get_sub_field('image');?>

											<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
										</div>
									</div>
									<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-1-4--force<?php endif;?>">
										<div class="DetailGrid-item DetailGrid-item--media js-animate-detail">

											<?php $image = get_sub_field('image_2');?>

											<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>

								<!-- 			<img class="lazyload js-pin-it" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="{{grid.image.title}}" data-sizes="auto" data-srcset="
												{{grid.image.sizes.medium}} 320w,
												{{grid.image.sizes.large}} 640w"/>
								 -->
										</div>
									</div>
								</div>
							<?php if( get_sub_field('is_first') ):?></div><?php endif;?>

				        	</div>
				        	<?php
				        	endif;

				        endif;

				    endwhile;

				else :

				    // no layouts found

				endif;

				?>
			</div>
			<?php

			// get_template_part( 'template-parts/content', get_post_format() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;?>

			<div class="js-button-footer-nav Button-footerNav">
				<?php next_post_link('%link','<button class="Button Button-footerNav-next js-button-footerNav-next">
										<svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
									</button>'); ?>
				<?php previous_post_link('%link','<button class="Button Button-footerNav-prev js-button-footerNav-prev">
										<svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
									</button>');

				$next_post = get_next_post();
				if (!empty( $next_post )): ?>
				  <a class="Button-footerNav-title Button-footerNav-title--next js-button-footerNav-title-next" href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>
				<?php endif;

				$previous_post = get_previous_post();
				if (!empty( $previous_post )): ?>
				  <a class="Button-footerNav-title Button-footerNav-title--prev js-button-footerNav-title-prev" href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php echo $previous_post->post_title; ?></a>
				<?php endif; ?>

			</div><?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
