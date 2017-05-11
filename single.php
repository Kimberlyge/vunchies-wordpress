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
				<div class="DetailCover">
					<div class="DetailCover-wrap js-animate-alpha">
						<div class="DetailCover-title">
							<h2>
								<?php the_title();?>
							</h2>
							<?php the_content();?>
						</div>
					</div>
					<div class="Detail-cover js-animate">
						<?php $image = get_field('cover');?>
						<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
					</div>
				</div>

				<?php

				// check if the flexible content field has rows of data
				if( have_rows('grids') ):

				     // loop through the rows of data
				    while ( have_rows('grids') ) : the_row();


				        if( get_row_layout() == 'grid_content' ):

				        	if( get_sub_field('first_grid') ):?>
								<div class="grid grid--inner">
									<div class="DetailGrid <?php if( get_sub_field('is_first') ):?>is-first<?php endif;?> <?php if( get_sub_field('reverse') ):?>is-reverse<?php endif;?>">

										<div class="col-s-3-3 col-m-2-4 <?php if( get_sub_field('is_portrait') ):?>col-m-2-3--force<?php endif;?> <?php if( get_sub_field('is_landscape') ):?>col-m-1-3--force<?php endif;?>">
											<div class="DetailGrid-item DetailGrid-item--text js-animate">
												<!-- {{#if grid.title}} -->
												<?php if( get_sub_field('title') ):?>
													<h3 class="DetailText-title"><?php the_sub_field('title');?>:</h3>
												<?php endif;?>
												<!-- {{/if}} -->
												<?php the_sub_field('text');?>
											</div>
										</div>
										<div class="col-s-3-3 col-m-2-4 <?php if( get_sub_field('is_portrait') ):?>col-m-1-3--force<?php endif;?> <?php if( get_sub_field('is_landscape') ):?>col-m-2-3--force<?php endif;?>">
											<div class="DetailGrid-item DetailGrid-item--media js-animate">

												<?php $image = get_sub_field('image');?>

												<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>

											</div>
										</div>
									</div>
								</div>
							<?php
							endif;
				        	if( get_sub_field('second_grid') ):?>
								<div class="grid grid--inner">
									<div class="DetailGrid DetailGrid--second <?php if( get_sub_field('is_first') ):?>is-first<?php endif;?> <?php if( get_sub_field('reverse') ):?>is-reverse<?php endif;?> <?php if( get_sub_field('is_center') ):?>is-center<?php endif;?>">
										<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-2-4--force<?php endif;?>">
											<div class="DetailGrid-item DetailGrid-item--text js-animate">
												<!-- {{#if grid.title}} -->
												<?php if( get_sub_field('title') ):?>
													<h3 class="DetailText-title"><?php the_sub_field('title');?>:</h3>
												<?php endif;?>
												<!-- {{/if}} -->
												<?php the_sub_field('text');?>
											</div>
										</div>
										<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-1-4--force<?php endif;?>">
											<div class="DetailGrid-item DetailGrid-item--text js-animate">
												<!-- {{#if grid.title}} -->
												<?php if( get_sub_field('title_2') ):?>
													<h3 class="DetailText-title"><?php the_sub_field('title_2');?>:</h3>
												<?php endif;?>
												<!-- {{/if}} -->
												<?php the_sub_field('text_2');?>
											</div>
										</div>
										<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-1-4--force<?php endif;?>">
											<div class="DetailGrid-item DetailGrid-item--media js-animate">

												<?php $image = get_sub_field('image');?>

												<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
											</div>
										</div>
									</div>
								</div>
							<?php
							endif;
				        	if( get_sub_field('third_grid') ):?>
				        		<div class="grid grid--inner">
									<div class="DetailGrid DetailGrid--third <?php if( get_sub_field('is_first') ):?>is-first<?php endif;?> <?php if( get_sub_field('reverse') ):?>is-reverse<?php endif;?> <?php if( get_sub_field('is_center') ):?>is-center<?php endif;?><?php if( get_sub_field('is_bigger') ):?>is-bigger<?php endif;?>">

										<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-2-4--force<?php endif;?>">
											<div class="DetailGrid-item DetailGrid-item--text js-animate">
												<!-- {{#if grid.title}} -->
												<?php if( get_sub_field('title') ):?>
													<h3 class="DetailText-title"><?php the_sub_field('title');?>:</h3>
												<?php endif;?>
												<!-- {{/if}} -->
												<?php the_sub_field('text');?>
											</div>
										</div>
										<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-1-4--force<?php endif;?>">
											<div class="DetailGrid-item DetailGrid-item--media js-animate">

												<?php $image = get_sub_field('image');?>

												<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
											</div>
										</div>
										<div class="col-s-3-3 col-m-1-3 <?php if( get_sub_field('is_bigger') ):?>col-m-1-4--force<?php endif;?>">
											<div class="DetailGrid-item DetailGrid-item--media js-animate">

												<?php $image = get_sub_field('image_2');?>

												<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>

									<!-- 			<img class="lazyload js-pin-it" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="{{grid.image.title}}" data-sizes="auto" data-srcset="
													{{grid.image.sizes.medium}} 320w,
													{{grid.image.sizes.large}} 640w"/>
									 -->
											</div>
										</div>
									</div>
				        		</div>
							<?php
				        	endif;
				        	?>
						<?php
				        endif;
				    endwhile;
				else :
				    // no layouts found
				endif;

				?>
			</div>
			<div class="DetailInfo js-animate">
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

			<div class="grid">
				<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;?>
			</div>

			<?php $categories = get_the_category();
			    foreach($categories as $category) {}?>

			<?php $ids = get_the_ID();
			    foreach($ids as $id) {}?>

			<div class="grid grid--inner Teaser Teaser--related Container">
				<h3>Related posts</h3>
				<?php
				$args = array(
				    'limit' => 2,
				    'pid' => $id,
				    'range' => 'monthly',
				    'cat' => $category->term_id,
				    'thumbnail_width' => '800',
    				'thumbnail_height' => '800',
				    'post_type' => 'post',
				    'post_html' => '<div class="col-s-2-4 col-m-2-4 col-ml-2-4"><a class="Teaser-wrap" id="overview" href="{url}" rel="bookmark"><figure class="Teaser-media Teaser-media--related">{thumb_img}</figure><div class="Teaser-body"><h2 class="Teaser-title">{text_title}</h2><ul class="Teaser-categories"></ul></div></a></div>'
				);


				wpp_get_mostpopular( $args );
				?>
			</div>

			<div class="js-button-footer-nav Button-footerNav">
				<?php next_post_link('%link','<button class="Button Button-footerNav-next js-button-footerNav-next">
										<svg class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 32">
										<path d="M0.372 29.805c-0.484 0.521-0.484 1.302 0 1.823 0.484 0.484 1.302 0.521 1.786 0l14.586-14.735c0.484-0.521 0.484-1.302 0-1.823l-14.586-14.698c-0.484-0.484-1.302-0.484-1.786 0-0.484 0.521-0.484 1.302 0 1.823l13.284 13.805-13.284 13.805z"></path>
										</svg>
									</button>'); ?>
				<?php previous_post_link('%link','<button class="Button Button-footerNav-prev js-button-footerNav-prev">
										<svg class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 32">
										<path d="M0.372 29.805c-0.484 0.521-0.484 1.302 0 1.823 0.484 0.484 1.302 0.521 1.786 0l14.586-14.735c0.484-0.521 0.484-1.302 0-1.823l-14.586-14.698c-0.484-0.484-1.302-0.484-1.786 0-0.484 0.521-0.484 1.302 0 1.823l13.284 13.805-13.284 13.805z"></path>
										</svg>
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
