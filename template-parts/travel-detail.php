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
