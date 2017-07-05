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
	if ( is_page(613) ) :?>
		<div class="About">
			<?php $image = get_field('cover');?>
			<div class="AboutCover">
				<img data-speed-x="2" data-speed-y="3" class="AboutCover-image js-animate" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
				<div class="AboutCover-title">
					<svg class="AboutCover-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 444.3 197.8" style="enable-background:new 0 0 444.3 197.8;" xml:space="preserve">
						<path class="AboutCover-svgPath" d="M3.7,44.8c8.5,4.4,18.7,2,27.4-0.3c9.3-2.4,18.2-6,27-9.9c7-3.1,16.3-6,21.3-12c8.3-9.8-3.3-18.1-12.8-17.8
							C46.5,5.6,48.1,33.4,48.3,47.7c0.4,18.9,4,37.7,9.5,55.8"/>
						<path class="AboutCover-svgPath" d="M71.3,84.2L71.3,84.2C78.4,75,84.6,64.7,86.2,53c0.6-4.7,0.6-9.8-1.6-14.1c-1.6-3.1-5.1-6.6-8.9-6.1
							c-3.3,0.5-4.4,3.7-4.2,6.7c0.4,6.7,2.9,13.7,4.4,20.3c3.4,14.6,6.6,29.2,7.3,44.2v0.1c-0.9-12.5,2.1-24.7,8.7-35.3
							c1.3-2,3.8-1.3,4.6,0.6c3.3,8,5.3,24.2,15.8,26c6.5,1.1,9.9-6.3,11.2-11.1c0,0,5-18,3-22.3c-1.2-2.4-4.6-1-4.7,1.3
							c0,0-1.3,17.1,11.1,26.8c2.6,2,5.9-1.4,3.5-3.5"/>
						<path class="AboutCover-svgPath" d="M155.8,54L155.8,54c-1.7-8.5-9.8-13.2-18-10.7c-1.7,0.5-2.5,2.8-1.1,4.2c6.4,6,13.4,11.9,17.9,19.5
							c2.4,4.1,4.1,9.1,2,13.6c-0.4,1-0.9,1.8-1.7,2.5c-1.9,0.3-1.8-0.2-1.4-1.9c0.5-2.1,5.9-13.2,7-14.9"/>
						<path class="AboutCover-svgPath" d="M121,38.8c0,0-3-1-2-7"/>
						<path class="AboutCover-svgPath" d="M186,72.7c1,4.2,5.3,1.2,6.6-0.6c1-1.3,1.6-2.9,2.2-4.5c1.1-3.1,1.4-6.4,2.1-9.6c0.2-0.8,5.2-25-2-23.7
							c-8.2,1.5,0.3,23.2,1.4,24.8c4.4,6.2,12.9,11.7,20.8,9.1c9.1-3,9.4-16,9.4-23.8c0-7.4,0-20.5-9.3-22.7c-1.7-0.4-3.8,1.2-3.1,3.1
							c1.7,4.2,5.7,5.1,9.4,7.2c5,2.8,9.4,6.5,13.2,10.8c4.2,4.9,8.8,11.6,7.5,18.5c-0.5,2.6-4.7,10-8,5.8c-2.9-3.7,13.9-16.4,16.3-17.8"
							/>
						<path class="AboutCover-svgPath" d="M193,20.8c0,0-3-1-2-7"/>
						<path class="AboutCover-svgPath" d="M144.6,141.9L144.6,141.9c-1.6,14.9,27.4,5.6,33.4,2.7c11.1-5.4,25.1-15.2,22.9-29.3
							c-2.2-13.9-18.3-15-28.3-8.5c-14.8,9.6-0.4,24.7,6,34.9c10.6,17,20,34.8,24.6,54.4c0.6,2.7,3.7-25.4,6.9-37.3s11.1-21.5,17-32.1"/>
						<path class="AboutCover-svgPath" d="M220,161.8c0,0,9,3,12-6s-3-10-4-4s3,27,9,32s20-12,19-24s-4-10.1-5-8c-3.2,6.7-5,18,4,30c5,1,16.3-21.7,15-30
							c-0.2-1.3-4-10-5-2s6,31,6,31s-5-26,5-30s12,2,13,12s6,17,11,12c0,0,15-13,14-32s-13,2-12,11s3,23,15,14s17-26,11-46s-8-3-5,5
							s8,31,18,31s9-22,9-22s0,12,10,16s13-15,12-20s-3,1-1,4s3,11,10,10c0,0,12-4,13-24s-11-6-11,0s-2,21,13,20s21-25,20-32s-5-14-8-13
							s0,6,10,19s13,21,13,26s-5,5-6,0s2-19,9-22"/>
						<path class="AboutCover-svgPath" d="M369,108.8c0,0-3-1-2-7"/>
					</svg>
				</div>
			</div>
			<!-- <div class="About-content"><?php the_content();?></div> -->
			<div class="About-content js-animate">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<svg class="js-animate" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 81.9 183.4" style="enable-background:new 0 0 81.9 183.4;" xml:space="preserve">
						<path d="M4.8,128.8c13.5-17.6,26.8-35.6,35.5-56.1c7.6-17.9,12.9-40.7,5-59.4c-2.6-6.1-9-16.5-17-12.3c-7.7,4-8.2,17-8.6,24.4
							c-1.6,25.4-0.9,50.9-1,76.3c0,14.5,0,28.9-0.1,43.4c0,6.9,0,13.8,0,20.7c0,4.9-1.7,12.8,1.6,16.8c0.5,0.7,1.6,0.9,2.4,0.6
							c1.6-0.5,2.1-1.1,2.7-2.6c0.3-0.8-0.1-1.9-0.6-2.4c-0.1-0.1-0.3-0.2-0.4-0.4c-2.4-2.2-5.9,1.3-3.5,3.5c0.1,0.1,0.3,0.2,0.4,0.4
							c-0.2-0.8-0.4-1.6-0.6-2.4c-0.1,0.2-0.2,0.5-0.3,0.7c0.6-0.6,1.2-1.2,1.7-1.7c-0.2,0.1-0.5,0.1-0.7,0.2c0.8,0.2,1.6,0.4,2.4,0.6
							c-0.9-1.1-0.2-4.9-0.2-6.3c0-2.6,0-5.3,0-7.9c0-5.6,0-11.2,0-16.8c0-10.9,0-21.7,0-32.6c0-21.3-0.1-42.6,0.2-63.9
							C23.9,41.3,24,30.9,25,20.6c0.4-3.5,1.1-12.5,4.7-14.4c1-0.6,5.1,0.4,6,1c1.1,0.7,1.8,2.1,2.5,3.2c1.5,2.2,2.6,4.7,3.5,7.2
							c6.1,18,0.5,39-7,55.7c-8.6,19.3-21.4,36.4-34.2,53C-1.5,128.8,2.9,131.3,4.8,128.8L4.8,128.8z"/>
						<path d="M64.9,85.8c-5.5-4.4-8.9,4.5-11.1,8.3c-4.5,7.9-9.3,15.6-14.3,23.2c-10.3,15.5-21.6,30.2-33.9,44.1c-1.7,2,0.6,5.8,3,3.9
							c5-3.9,7.7-10.3,12.9-13.7c4.4-2.9,7.9-1.6,10.7,2.6c2.2,3.3,4.1,6.9,6.2,10.4c2.3,3.8,4.8,11,9.8,11.9c5.3,1,8.6-3.6,10.7-7.8
							c1.4-2.9-2.9-5.4-4.3-2.5c-0.8,1.6-2.2,5.1-4.2,5.3c-2.4,0.3-3.1-2-4.1-3.6c-1.9-3-3.6-6.1-5.5-9.2c-2.6-4.3-5-10.4-9.8-12.8
							c-11.5-5.9-18,9.7-24.9,15.1c1,1.3,2,2.6,3,3.9c9.9-11.3,19.3-23.1,28-35.4c4.4-6.2,8.6-12.5,12.6-18.9c1.9-3.1,3.8-6.2,5.7-9.3
							c1.5-2.5,4.9-11.3,7.6-11.9c-0.8-0.2-1.6-0.4-2.4-0.6c0.2,0.2,0.5,0.4,0.7,0.6C63.9,91.3,67.4,87.8,64.9,85.8L64.9,85.8z"/>
						<path d="M76.7,165.8c0.3,0.3,0.7,0.7,1,1c0.9,0.9,2.6,1,3.5,0c0.9-1,1-2.5,0-3.5c-0.3-0.3-0.7-0.7-1-1c-0.9-0.9-2.6-1-3.5,0
							C75.8,163.3,75.7,164.8,76.7,165.8L76.7,165.8z"/>
				</svg>
			</div>

			<div class="About-contributors grid">
				<h2 class="col-s-4-4">Contributors</h2>
				<div class="col-s-4-4 col-m-2-4 col-l-2-4">
					<div class="dummy-img"></div>
					<h3 class="js-animate">emily</h3>
				</div>
				<div class="col-s-4-4 col-m-2-4 col-l-2-4">
					<div class="dummy-img"></div>
					<h3 class="js-animate">romy</h3>
				</div>
			</div>
		</div>
	<?php

	// TEMPLATE FOR CONTACT
	elseif ( is_page(620) ) :?>
		<div class="Contact">
			<p><?php the_content(); ?></p>

		</div>
	<?php


	// TEMPLATE FOR IMPRINT
	elseif ( is_page(2) ) :?>
		<p><?php the_content(); ?></p>
	<?php


	// TEMPLATE FOR TRAVEL OVERVIEW
	elseif ( is_page(90) ) :?>
	<div class="Container Container--big TravelOverview">
		<div class="grid">
			<?php
			if( have_rows('city') ):

				while ( have_rows('city') ) : the_row();?>
				<div class="col-s-3-3 col-m-2-4 col-l-1-3">
					<div class="TravelOverview-item js-animate">
						<a href="<?php echo esc_url( get_permalink() ), the_sub_field('city_slug')?>" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-page="<?php the_sub_field('page_id')?>" class="js-nav-item">
							<div class="Cover Cover--overlay Cover--small ImgToBg">
								<?php $image = get_sub_field('city_image');?>
								<img class="ImgToBg-item" src="<?php echo $image['sizes']['large']; ?>" alt=""/>

								<div class="Cover-body">
									<h2><?php the_sub_field('city_title')?></h2>
									<p><?php the_sub_field('city_country')?></p>
								</div>
							</div>
						</a>
					</div>
				</div>

				<?php

			endwhile;
		endif; ?>
	</div>
</div>
	<?php

	// TEMPLATE FOR TRAVEL DETAIL
	elseif ( $parent->have_posts() ) : ?>
		<div class="Cover Cover--overlay Cover--big ImgToBg js-travelcover">
			<?php $image = get_field('travel_cover');?>
			<img class="ImgToBg-item" src="<?php echo $image['sizes']['large']; ?>" alt=""/>

			<div class="Cover-body js-traveltitle">
				<h2 class="js-animate-city-title"><?php the_title(); ?></h2>
				<div class="js-animate-city-country"><?php the_content(); ?></div>
			</div>
		</div>

		<ul class="list TravelList js-travellist" id="js-travellist">
			<div class="TravelList-wrap">
				<?php while ( $parent->have_posts() ) : $parent->the_post();
					while ( have_rows('grids') ) : the_row();
						if( get_row_layout() == 'grid_restaurants' ): ?>
							<li class="TravelList-item">
								<a href="#<?php the_sub_field('slug')?>" class="TravelList-link js-TravelList-item"><?php the_title()?></a>
							</li>
						<?php endif;
					endwhile;
				endwhile;?>
				<li class="TravelList-head">Restaurants
					<svg class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 32">
					<path d="M0.372 29.805c-0.484 0.521-0.484 1.302 0 1.823 0.484 0.484 1.302 0.521 1.786 0l14.586-14.735c0.484-0.521 0.484-1.302 0-1.823l-14.586-14.698c-0.484-0.484-1.302-0.484-1.786 0-0.484 0.521-0.484 1.302 0 1.823l13.284 13.805-13.284 13.805z"></path>
					</svg>
				</li>
			</div>
		</ul>

		<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

			<?php if( have_rows('grids') ):
				while ( have_rows('grids') ) : the_row();
					if( get_row_layout() == 'grid_restaurants' ):
						if( get_sub_field('head') ):?>
							<div class="grid">
								<div class="TravelDetail <?php if( get_sub_field('is_reverse') ):?>is-reverse<?php endif;?>" id="<?php the_sub_field('slug')?>">
									<div class="col-s-3-3 col-m-2-4">
										<div class="TravelDetail-body js-animate">
											<div class="TravelCopy Box">
												<h2 class="TravelCopy-title">
													<?php the_sub_field('name')?>
												</h2>
												<div class="TravelCopy-description">
													<?php the_sub_field('description')?>
												</div>
												<div class="TravelCopy-address Box Box--white Box--border Box--small centered">
													<?php the_sub_field('contact_description')?>
													<a href="<?php the_sub_field('contact.url') ?>" class="TravelCopy-url" target="_blank">
													<?php the_sub_field('contact_url')?>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-s-3-3 col-m-2-4">
										<div class="TravelDetail-cover js-animate <?php if( the_sub_field('is_reverse') ):?>is-reverse<?php endif;?>">
											<?php $image = get_sub_field('cover');?>

											<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
										</div>
									</div>
								</div>
							</div>
						<?php endif;
					endif;

					if( get_row_layout() == 'grid_content' ):
						if( get_sub_field('has_text') ):?>
							<div class="grid">
								<div class="DetailGrid DetailGrid--travel js-animate <?php if( get_sub_field('is_reverse') ):?>is-reverse<?php endif;?>">

									<div class="col-s-3-3 col-m-2-4 <?php if( get_sub_field('is_portrait') ):?>col-m-2-3--force<?php endif;?> <?php if( get_sub_field('is_landscape') ):?>col-m-1-3--force<?php endif;?>">
										<div class="DetailGrid-item DetailGrid-item--text">
											<?php if( the_sub_field('title') ):?>
												<h3 class="DetailText-title">
													<?php the_sub_field('title');?>:
												</h3>
											<?php endif;?>
											<?php the_sub_field('text') ?>
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
						<?php endif;
					endif; // close grid content

					if( get_row_layout() == 'grid_images' ):
						if( get_sub_field('first_grid') ):?>
							<div class="grid grid--flex">
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

						if( get_sub_field('second_grid') ):?>
							<div class="grid">
								<div class="ImageGrid ImageGrid--second <?php if( get_sub_field('is_reverse') ):?>is-reverse<?php endif;?>">
									<div class="col-s-3-3 col-m-2-4 <?php if( get_sub_field('is_portrait') ):?>col-m-1-3--force<?php endif;?>">
										<div class="ImageGrid-item js-animate">
											<?php $image = get_sub_field('image');?>
											<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
										</div>
									</div>
									<div class="col-s-3-3 col-m-2-4<?php if( get_sub_field('is_portrait') ):?>col-m-2-3--force<?php endif;?>">
										<div class="ImageGrid-item ImageGrid-item--media js-animate">
											<?php $image = get_sub_field('image_2');?>
											<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
										</div>
									</div>
								</div>
							</div>
						<?php endif;

						if( get_sub_field('third_grid') ):?>
							<div class="grid">
								<div class="ImageGrid">
									<div class="ImageGrid-item js-animate">
										<?php $image = get_sub_field('image');?>
										<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
									</div>
									<div class="ImageGrid-item ImageGrid-item--media js-animate">
										<?php $image = get_sub_field('image_2');?>
										<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
									</div>
									<div class="ImageGrid-item ImageGrid-item--media js-animate">
										<?php $image = get_sub_field('image_3');?>
										<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
									</div>
								</div>
							</div>
						<?php endif;
					endif; // close grid images

				endwhile;
			endif;

		endwhile;
	endif; wp_reset_query();?>


</article><!-- #post-## -->
<?php get_footer();
