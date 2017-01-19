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

	// TEMPLATE FOR TRAVEL OVERVIEW
	if ( is_page(90) ) :?>
		<div class="Container Container--big TravelOverview">
			<div class="grid">
				<?php
				if( have_rows('city') ):

			   		while ( have_rows('city') ) : the_row();?>
						<div class="col-s-3-3 col-m-2-4 col-l-1-3">
				   			<div class="TravelOverview-item js-animate">
								<a href="<?php echo esc_url( get_permalink() ), the_sub_field('city_slug')?>">
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

	// TEMPLATE FOR ABOUT
	elseif ( is_page(613) ) :?>
		<div class="About">
			<?php $image = get_field('cover');?>
			<img class="About-cover" src="<?php echo $image['sizes']['large']; ?>" alt=""/>

			<div class="About-content"><?php the_content();?></div>
		</div>
	<?php

	// TEMPLATE FOR CONTACT
	elseif ( is_page(620) ) :?>
		<div class="About">
			<p><?php the_content(); ?></p>

		</div>
	<?php


	// TEMPLATE FOR IMPRINT
	elseif ( is_page(2) ) :?>
		<p><?php the_content(); ?></p>
	<?php


	// TEMPLATE FOR TRAVEL DETAIL
	elseif ( $parent->have_posts() ) : ?>
		<div class="Cover Cover--overlay Cover--big ImgToBg" js="js-travelcover">
			<?php $image = get_field('travel_cover');?>
			<img class="ImgToBg-item" src="<?php echo $image['sizes']['large']; ?>" alt=""/>

			<div class="Cover-body">
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
				<li class="TravelList-head">Restaurants <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></li>
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
							<div class="grid">
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
									<div class=-item--media js-animate">
										<?php $image = get_sub_field('image_2');?>

										<img class="js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
									</div>
									<div class=-item--media js-animate">
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
