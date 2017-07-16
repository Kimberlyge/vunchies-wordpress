<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Vunchies
 */

get_header('detail'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>
			<div class="Detail <?php if( get_field('theme_light') ):?>Detail--light<?php endif;?>">
				<div class="DetailCover">
					<div class="DetailCover-wrap js-animate-alpha">
						<div class="Detail-share">
							<?php the_content();?>
						</div>
						<div class="DetailCover-title">
							<h2>
								<?php the_title();?>
							</h2>
						</div>
					</div>
					<div class="Detail-cover">
						<?php $image = get_field('cover');?>
						<img src="<?php echo $image['url']; ?>" alt=""/>
					</div>
				</div>

				<?php

				// check if the flexible content field has rows of data
				if( have_rows('grids') ):

				     // loop through the rows of data
				    while ( have_rows('grids') ) : the_row();


				        if( get_row_layout() == 'grid_content' ):

				        	if( get_sub_field('first_grid') ):?>
										<div class="grid grid--inner grid--white">
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

														<?php if( get_sub_field('video_wide') ):?>
															<video src="<?php the_sub_field('video_wide');?>" autoplay loop poster="">
															</video>
														<?php else :?>

															<?php $image = get_sub_field('image');?>

															<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									<?php
									endif;
				        	if( get_sub_field('second_grid') ):?>
									<div class="grid grid--inner grid--white">
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
				        	<div class="grid grid--inner grid--white">
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
												</div>
											</div>
										</div>
				        	</div>
									<?php
				        	endif;
				        endif;
								if( get_row_layout() == 'grid_images' ):
									if( get_sub_field('first_grid') ):?>
										<div class="grid grid--flex grid--inner grid--white">
											<div class="ImageGrid ImageGrid--first">
												<div class="col-s-3-3 col-m-3-3">
													<div class="ImageGrid-item js-animate">
														<?php $image = get_sub_field('image');?>
														<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
													</div>
												</div>
											</div>
										</div>
									<?php endif;
								endif;
				    endwhile;

				else :
				    // no layouts found
				endif;

				?>
			</div>
			<div class="grid grid--inner">
				<div class="Ingredients js-animate">
					<div class="Ingredients-wrap">
						<div class="FlexRow">
							<h3 class="Ingredients-title">Ingredients</h3>
							<!-- <ul class="Ingredients-info">
								<li>
									<svg class='icon icon-gluten-free' viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
									<path d="M17.616 28.239c-0.33 0-0.66 0-0.99-0.066-0.396-0.066-0.66-0.594-0.66-0.858-0.132-2.771 1.65-5.146 4.421-5.938 0.33-0.132 0.726-0.198 1.056-0.264l0.198-0.066c0.396-0.066 0.66-0.132 0.924 0.066s0.264 0.528 0.264 0.858v0.462c-0.066 1.584-0.462 2.837-1.188 3.827-0.858 1.32-2.309 1.979-4.025 1.979zM16.825 27.381c0.792 0.132 2.903 0.264 4.157-1.584 0.66-0.924 0.99-1.979 1.056-3.431v-0.396c0-0.066 0-0.132 0-0.198-0.066 0-0.132 0-0.198 0.066l-0.198 0.066c-0.33 0.066-0.66 0.132-0.99 0.198-2.441 0.726-3.893 2.771-3.827 5.146-0.066 0.066 0 0.132 0 0.132zM16.759 27.381c0 0 0 0 0 0s0 0 0 0z"></path>
									<path d="M14.515 26.458c-2.771 0-4.685-1.649-5.146-4.619-0.066-0.264-0.066-0.528-0.132-0.792l-0.066-0.396c0-0.462 0-0.792 0.198-0.99 0.264-0.198 0.528-0.198 1.122-0.132 2.771 0.264 4.75 1.847 5.476 4.289 0.132 0.396 0.198 0.792 0.198 1.188l0.066 0.33c0.066 0.264 0 0.462-0.132 0.66s-0.33 0.264-0.66 0.33c-0.264 0.066-0.594 0.132-0.924 0.132zM9.963 20.586l0.066 0.33c0 0.264 0.066 0.528 0.132 0.792 0.528 2.903 2.375 4.289 5.278 3.893 0.066 0 0.132 0 0.132 0s0 0 0-0.066l-0.066-0.396c-0.066-0.396-0.132-0.726-0.198-1.122-0.594-2.111-2.375-3.497-4.816-3.761-0.198 0-0.33-0.066-0.462-0.066-0.066 0.132-0.066 0.264-0.066 0.396z"></path>
									<path d="M15.241 20.454v0c-2.441 0-4.091-1.386-4.619-3.827-0.066-0.462-0.132-0.858-0.198-1.32v-0.33c0-0.132-0.066-0.528 0.198-0.792 0.198-0.198 0.462-0.264 0.792-0.198 3.167 0.396 5.080 2.309 5.278 5.344 0 0.132 0 0.528-0.198 0.792-0.132 0.198-0.396 0.264-0.726 0.264-0.132 0-0.264 0-0.396 0l-0.132 0.066zM11.216 14.845c0 0 0 0.066 0 0.132v0.33c0.066 0.396 0.066 0.858 0.132 1.254 0.396 2.045 1.781 3.167 3.761 3.167h0.066c0.132 0 0.33-0.066 0.528-0.066 0.066 0 0.132 0 0.132 0s0-0.066 0-0.198c-0.132-2.639-1.781-4.289-4.553-4.619 0 0-0.066 0-0.066 0z"></path>
									<path d="M17.419 22.169c-0.132 0-0.264 0-0.396 0-0.792-0.066-0.858-0.726-0.858-0.99v-0.066c-0.066-2.309 1.254-4.223 3.365-5.080 0.396-0.132 0.858-0.264 1.452-0.396 0.264-0.066 0.594-0.132 0.858 0.066s0.264 0.528 0.264 0.858c0 0.198-0.198 2.309-0.594 3.167v0c-0.594 1.584-2.045 2.441-4.091 2.441zM17.023 21.377c0 0 0.066 0 0 0 1.386 0.066 3.101-0.198 3.827-1.979 0.33-0.726 0.528-2.639 0.528-2.837 0-0.066 0-0.132 0-0.198-0.066 0-0.066 0-0.198 0-0.528 0.132-0.924 0.264-1.32 0.396-1.847 0.726-2.903 2.375-2.903 4.355v0.066c0.066 0 0.066 0.132 0.066 0.198 0 0 0 0 0 0z"></path>
									<path d="M17.089 16.429c-0.066 0-0.132 0-0.198 0-0.726 0-0.792-0.66-0.792-0.924-0.132-2.507 1.254-4.487 3.695-5.278h0.132c0.594-0.198 1.056-0.33 1.386-0.066s0.33 0.726 0.396 1.386v0.132c0 0.198-0.066 0.33-0.066 0.528-0.066 0.396-0.132 0.792-0.198 1.188-0.594 1.913-2.111 3.035-4.355 3.035zM20.849 10.755c-0.132 0-0.528 0.132-0.726 0.198h-0.066c-2.111 0.66-3.299 2.375-3.167 4.421v0.066c0 0.066 0 0.132 0 0.198 1.979 0 3.233-0.792 3.761-2.573 0.066-0.33 0.132-0.726 0.198-1.122 0-0.198 0.066-0.33 0.066-0.528 0-0.132-0.066-0.528-0.066-0.66z"></path>
									<path d="M15.571 14.779c-2.441 0-4.223-1.649-4.421-4.091l-0.066-0.594c0-0.858 0-1.386 0.396-1.649s0.924-0.066 1.584 0.198c2.375 0.858 3.761 3.035 3.497 5.41-0.132 0.66-0.594 0.726-0.99 0.726 0 0 0 0 0 0zM11.876 10.029l0.066 0.594c0.132 2.045 1.583 3.365 3.629 3.365 0.066 0 0.198 0 0.198 0s0-0.066 0-0.132c0.264-1.979-0.924-3.827-2.969-4.553-0.264-0.066-0.726-0.264-0.858-0.264-0.066 0.198-0.066 0.726-0.066 0.99z"></path>
									<path d="M16.891 11.348c0 0 0 0 0 0-0.132 0-0.462-0.066-0.66-0.198-2.243-2.375-2.177-4.882 0.132-7.192 0.264-0.264 0.858-0.264 1.122 0 1.056 1.122 1.584 2.243 1.649 3.563v0 0c-0.066 1.32-0.66 2.507-1.847 3.629-0.066 0.132-0.198 0.198-0.396 0.198zM16.825 10.623c0 0 0 0 0 0s0 0 0 0zM16.825 10.557c0 0 0 0 0 0 1.056-0.924 1.518-1.913 1.584-3.035-0.066-1.056-0.528-2.045-1.386-2.969 0 0-0.066 0-0.066 0-1.979 1.913-1.979 4.025-0.132 6.004zM17.089 4.553v0 0zM16.957 4.487c0 0 0 0 0 0s0 0 0 0z"></path>
									<path d="M15.967 32c-8.775 0-15.967-7.192-15.967-16.033s7.192-15.967 15.967-15.967c8.841 0 15.967 7.192 15.967 15.967s-7.126 16.033-15.967 16.033zM15.967 0.99c-8.247 0-14.977 6.73-14.977 14.977s6.73 15.043 14.977 15.043c8.313 0 15.043-6.73 15.043-15.043s-6.73-14.977-15.043-14.977z"></path>
									<path d="M17.88 14.12c0 0 0 0 0 0-0.198-0.066-0.264-0.198-0.198-0.264 0-0.066 0.396-1.254 1.913-2.111 0.132-0.066 0.264 0 0.33 0.066 0.066 0.132 0 0.264-0.066 0.33-1.386 0.792-1.715 1.847-1.715 1.847-0.066 0.066-0.132 0.132-0.264 0.132z"></path>
									<path d="M4.639 26.579l21.834-21.834 0.7 0.7-21.834 21.834-0.7-0.7z"></path>
									</svg><span>gluten free</span>
					    	</li>
								<li>
						    	<svg class="icon icon-sugar-free" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
									<path fill="#000" d="M15.967 32c-8.775 0-15.967-7.192-15.967-16.033 0-8.775 7.192-15.967 15.967-15.967s15.967 7.192 15.967 15.967c0.066 8.841-7.126 16.033-15.967 16.033zM15.967 0.99c-8.247 0-14.977 6.73-14.977 14.977 0 8.313 6.73 15.043 14.977 15.043s15.043-6.73 15.043-15.043c0-8.247-6.73-14.977-15.043-14.977z"></path>
									<path fill="#000" d="M13.328 20.586c0 0 0 0 0 0l-6.598-0.726c-0.198 0-0.396-0.198-0.396-0.462l0.066-7.522c0 0 0 0 0-0.066s0.066-0.132 0.066-0.198c0 0 0 0 0 0s0 0 0 0 0.066-0.066 0.066-0.066c0 0 0 0 0 0s0 0 0 0 0 0 0 0l4.685-3.629c0.066-0.066 0.198-0.132 0.33-0.066l6.334 0.594c0.198 0 0.396 0.198 0.396 0.396v6.994c0 0.132-0.066 0.264-0.132 0.33l-4.487 4.289c0 0 0 0 0 0s0 0 0 0c-0.132 0.132-0.198 0.132-0.33 0.132zM7.192 19.068l5.74 0.594 0.066-6.928-5.74-0.396-0.066 6.73zM7.984 11.546l5.41 0.396c0.198 0 0.396 0.198 0.396 0.462l-0.066 6.796 3.695-3.431v-6.466l-5.74-0.594-3.695 2.837z"></path>
									<path fill="#000" d="M13.394 12.8c-0.132 0-0.264-0.066-0.33-0.198-0.132-0.198-0.132-0.462 0.066-0.594l4.289-3.299c0.198-0.132 0.462-0.132 0.594 0.066s0.132 0.462-0.066 0.594l-4.289 3.299c-0.066 0.132-0.198 0.132-0.264 0.132z"></path>
									<path fill="#fcfcfc" d="M14.779 20.256l1.056-5.938 3.233-0.66-2.837 8.050-1.649-1.056z"></path>
									<path fill="#000" d="M16.363 22.169l-2.177-1.452 0.264-0.594 1.122-6.136 4.025-0.792-3.233 8.973zM14.977 20.52l1.056 0.66 2.507-7.060-2.441 0.462-1.056 5.806-0.066 0.132z"></path>
									<path fill="#000" d="M18.672 24.214l-4.553-3.365 1.254-7.39 6.532-0.396 3.827 3.101-0.924 6.664-6.136 1.386zM15.043 20.454l3.827 2.837 5.146-1.188 0.792-5.608-3.233-2.573-5.476 0.33-1.056 6.202z"></path>
									<path fill="#000" d="M20.058 17.55l-0.33-0.132-4.289-3.233 0.528-0.66 4.157 3.101 5.080-0.726 0.066 0.858z"></path>
									<path fill="#000" d="M18.331 23.627l1.263-6.61 0.842 0.161-1.263 6.61-0.842-0.161z"></path>
									<path fill="#000" d="M4.518 26.763l21.974-21.974 0.7 0.7-21.974 21.974-0.7-0.7z"></path>
									</svg>
									<span>sugar free</span>
					    	</li>
							</ul> -->
						</div>
						<ul>
							<?php the_field('ingredients');?>
						</ul>
						<div class="IngredientsFooter">
							<div class="IngredientsFooter-time">
								<svg class="IngredientsFooter-icon icon icon-stop-watch-2"><use xlink:href="#icon-stop-watch-2"></use></svg>
								<?php the_field('info');?>
							</div>
							<a class="IngredientsFooter-print" href="javascript:window.print()">Print</a>
						</div>
					</div>
				</div>
			</div>

			<div class="grid grid--inner">
				<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;?>
			</div>

			<?php $categories = get_the_category();
			    foreach($categories as $category) {}?>

			<?php $ids = get_the_ID();
			    foreach($ids as $id) {}?>

			<div class="grid grid--inner grid--gray">
				<div class="Container">
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
				  <a class="Button-footerNav-title <?php if (!empty( $next_post )): ?>Button-footerNav-titleSingle<?php endif?> Button-footerNav-title--next js-button-footerNav-title-next" href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>
				<?php endif;

				$previous_post = get_previous_post();
				if (!empty( $previous_post )): ?>
				  <a class="Button-footerNav-title <?php if (!empty( $next_post )): ?>Button-footerNav-titleSingle<?php endif?> Button-footerNav-title--prev js-button-footerNav-title-prev" href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php echo $previous_post->post_title; ?></a>
				<?php endif; ?>

			</div><?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
