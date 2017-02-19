<?php
/**
 * Vunchies functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vunchies
 */

if ( ! function_exists( 'vunchies_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}

add_action( 'loop_start', 'jptweak_remove_share' );


/**
 * Load Travel Overview and About Page
 */

add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );

function my_action_callback() {

    $pageId = intval( $_POST['pageId'] );
    $postId = intval( $_POST['postId'] );
    $categoryId = intval( $_POST['categoryId'] );
    $tagId = intval( $_POST['tagId'] );

    if( $pageId == 90 ) :
	    $query = new WP_Query( array( 'page_id' => 90 ) );
	    if( $query->have_posts() ) :
			while( $query->have_posts() ): $query->the_post();

			    echo '<div class="Container Container--big TravelOverview">'.
						'<div class="grid">';

					if( have_rows('city') ):
						while ( have_rows('city') ) : the_row();

							echo '<div class="col-s-3-3 col-m-2-4 col-l-1-3">'.
									'<div class="TravelOverview-item js-animate">'.
										'<a class="Teaser-wrap" id="overview" href="'. esc_url( get_permalink() ), the_sub_field('city_slug') .'">'.
											'<div class="Cover Cover--overlay Cover--small ImgToBg">'.
												'<img class="ImgToBg-item" src="'. get_sub_field('city_image')['sizes']['large'] .'" alt="'. get_the_title().'">'.
												'<div class="Cover-body">'.
													'<h2>'. get_sub_field('city_title') .'</h2>'.
													'<p>'. get_sub_field('city_country') .'</p>'.
												'</div>'.
											'</div>'.
										'</a>'.
									'</div>'.
								'</div>';
					    endwhile;
					endif;
				echo '</div>'.
					 '</div>';
			endwhile;
		endif;

	elseif( $pageId == 613 ) :

	    $query = new WP_Query( array( 'page_id' => 613 ) );
	    if( $query->have_posts() ) :
			while( $query->have_posts() ): $query->the_post();
				echo '<div class="About">'.
						'<img class="About-cover" src="'. get_field('cover')['sizes']['large'] .'" alt="'. get_the_title().'">'.
						'<div class="About-content">'. get_the_content() .'</div>'.
					'</div>';
			endwhile;
		endif;

	elseif( $pageId) :

		$query = new WP_Query( array( 'page_id' => $pageId ) );
	    if( $query->have_posts() ) :
			while( $query->have_posts() ): $query->the_post();?>
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
								<?php
								endif;

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
								<?php
								endif;
							endif; // close grid images

						endwhile;
					endif;
				endwhile;
			endwhile;
		endif;

	elseif( $postId ) :
		$thispost = get_post($postId);

		global $post;
	    foreach ( $thispost as $post ) :
	        setup_postdata( $post );
	        ?>
			<div class="Detail">
				<div class="grid">
					<div class="col-s-3-3 col-m-2-4">
						<div class="DetailHead">
							<div class="DetailHead-body js-animate-alpha centered">
								<div class="DetailHead-copy js-detail-head">
									<h2 class="DetailHead-title">
										AJAX<?php the_title();?>
									</h2>
									<p><?php the_content();?></p>
									<?php sharing_display( '', true );?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-s-3-3 col-m-2-4">
						<div class="DetailHead-media js-animate">
							<?php $image = get_field('cover');?>
							<img class="js-detail-cover js-pin-it" src="<?php echo $image['sizes']['large']; ?>" alt=""/>
						</div>
					</div>
				</div>
				<div class="grid">
					<div class="col-s-3-3 col-m-1-3">
						<div class="DetailGrid-item js-animate DetailGrid-item--text">
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

			<div class="grid">
				<ol class="comment-list">
					<?php
						//Gather comments for a specific page/post
						$comments = get_comments(array(
							'post_id' => $postId,
							'status' => 'approve' //Change this to the type of comments to be displayed
						));

						//Display the list of comments
						wp_list_comments(array(
							'per_page' => 10, //Allow comment pagination
							'reverse_top_level' => false //Show the oldest comments at the top of the list
						), $comments);
					?>
				</ol>
			</div>

			<?php $categories = get_the_category();
			    foreach($categories as $category) {}?>

			<?php $ids = get_the_ID();
			    foreach($ids as $id) {}?>

			<div class="grid grid--inner Teaser Teaser--related">
				<h3>Related posts AJAX</h3>
				<?php
				$args = array(
				    'limit' => 2,
				    'pid' => $postId,
				    'range' => 'monthly',
				    'cat' => $category->term_id,
				    'thumbnail_width' => '800',
    				'thumbnail_height' => '800',
				    'post_type' => 'post',
				    'post_html' => '<div class="col-s-2-4 col-m-2-4 col-ml-2-4"><a class="Teaser-wrap" id="overview" href="{url}" rel="bookmark"><figure class="Teaser-media Teaser-media--related">{thumb_img}</figure><div class="Teaser-body"><h2 class="Teaser-title">{text_title}</h2><ul class="Teaser-categories">{categories}</ul></div></a></div>'
				);
				wpp_get_mostpopular( $args );
				?>
			</div>

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

			</div>

	    <?php
	    wp_die();
	    endforeach;
	    wp_reset_postdata();

	elseif( $categoryId ) :

		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['categoryId']
			)
		);

	    $query = new WP_Query( $args );
	    ?> <div class="grid Teaser Container" id="RecipeOverview"><?php
	    if( $query->have_posts() ) :
			while( $query->have_posts() ): $query->the_post();
	            ?><div class="col-s-2-4 col-m-1-3 col-ml-1-4">
					<a class="Teaser-wrap js-animate js-nav-item" id="overview" data-post="<?php the_id(); ?>" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" href="<?php echo get_permalink(); ?>">
						<figure class="Teaser-media ImgToBg">
							<?php $image = get_field('cover');?>

							<img class="ImgToBg-item" src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_title();?>">
						</figure>
						<div class="Teaser-body">
							<h2 class="Teaser-title"><?php the_title();?></h2>
							<ul class="Teaser-categories">
								<?php
							    $categories = get_the_category();

							    foreach($categories as $category) {
							        echo "<li>$category->cat_name</li>";
							   	}
								?>
							</ul>
							<ul class="Teaser-tags">
								<?php
								if(has_tag('gluten')) {
						    	?><li>
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
									</svg>
						    		<span>gluten free</span>
						    	</li><?php
							}

						   	if(has_tag('nut')) {
						    	?><li>
						    		<svg class="icon icon-nut-free" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
										<path d="M15.967 32c-8.775 0-15.967-7.192-15.967-15.967s7.192-16.033 15.967-16.033c8.841 0 15.967 7.192 15.967 15.967s-7.126 16.033-15.967 16.033zM15.967 0.99c-8.247 0-14.977 6.73-14.977 15.043s6.73 14.977 14.977 14.977c8.313 0 15.043-6.73 15.043-14.977s-6.73-15.043-15.043-15.043z"></path>
										<path d="M9.435 16.363c-0.132-0.33-0.462-0.594-0.726-0.924-0.33-0.396-0.792-0.726-0.924-1.188-0.594-1.913 0.528-4.091 2.441-4.816 1.979-0.726 2.903-1.122 2.969-2.771 0-0.264 0.462-0.594 0.792-0.66 0.264-0.066 0.726 0.066 0.924 0.264 0.792 1.188 1.781 1.32 3.101 0.924 2.243-0.66 4.289 0.396 5.080 2.441 0.132 0.462 0.264 1.122 0 1.452-0.396 0.594-0.198 1.122-0.066 1.649 0.462 1.715 1.056 3.431 1.254 5.212 0.462 3.629-1.847 6.532-4.487 7.786-1.056 0.462-2.507 0.33-3.761 0.066-2.969-0.594-4.619-2.705-5.542-5.476-0.198-0.528-0.33-1.056-0.462-1.518 0-0.066-0.33-1.649-0.594-2.441zM10.029 15.505c0.594 1.913 0.924 3.761 1.649 5.476 1.188 2.903 3.827 4.421 6.994 4.223 0.264 0 0.528-0.066 0.792-0.198 2.441-1.518 4.223-3.563 4.025-6.598-0.132-1.913-0.858-3.827-1.254-5.74-0.132-0.66-0.462-0.726-1.056-0.528-2.705 0.792-5.344 1.583-8.050 2.375-1.056 0.396-2.045 0.66-3.101 0.99zM14.054 7.192c-0.066 0.264 0.132 1.913-2.111 2.507-0.528 0.132-1.056 0.396-1.583 0.594-1.32 0.594-2.045 1.715-1.781 3.167 0.132 0.726 0.594 1.452 1.386 1.254 1.122-0.33 2.111-0.594 3.299-0.924 2.771-0.792 5.542-1.649 8.313-2.441 0.99-0.264 1.188-0.726 0.726-1.649-0.132-0.264-0.33-0.528-0.594-0.792-1.122-1.188-2.507-1.254-3.959-0.792-2.441 0.792-3.431-0.594-3.695-0.924z"></path>
										<path d="M21.509 15.835c0.528 1.715 0.462 3.365-0.462 4.882-0.132 0.198-0.264 0.462-0.396 0.594-0.198 0.132-0.528 0.33-0.66 0.198s-0.066-0.462 0.066-0.66c1.254-1.649 1.188-3.497 0.594-5.344-0.066-0.198-0.132-0.396-0.132-0.594s0.066-0.462 0.264-0.462 0.396 0.132 0.462 0.33c0.066 0.33 0.132 0.66 0.264 1.056z"></path>
										<path d="M19.794 10.359c0 0.132-0.264 0.198-0.33 0.198-0.858-0.198-1.649-0.396-2.507-0.594-0.066 0-0.132-0.264-0.132-0.396 0.066-0.132 0.264-0.264 0.396-0.264 0.858-0.33 2.837 0 2.573 1.056z"></path>
										<path d="M4.718 26.621l21.834-21.834 0.7 0.7-21.834 21.834-0.7-0.7z"></path>
									</svg>
									<span>nut free</span>
								</li><?php
							}

							if(has_tag('sugar')) {
						    	?><li>
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
						    	</li><?php
							}

							if(has_tag('soy')) {
						    	?><li>
						    		<svg class="icon icon-soy-free" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
										<path d="M10.359 12.404c0-0.33-0.066-0.594 0-0.924 0.264-1.715 0.792-3.233 2.639-3.827 1.781-0.594 3.233 0.198 4.289 1.583 0.66 0.924 1.518 1.979 1.584 3.035 0.264 2.573 1.122 4.882 2.441 7.060 0.924 1.518 0.462 3.035-0.792 4.157-1.188 1.122-2.837 1.32-4.355 0.594-1.584-0.792-2.705-2.045-3.365-3.629-0.792-1.847-1.518-3.761-2.111-5.608-0.264-0.792-0.33-1.583-0.462-2.375 0-0.066 0.066-0.066 0.132-0.066zM11.546 14.054c0.792 2.177 1.518 4.421 2.573 6.532 0.528 0.99 1.518 1.847 2.441 2.507 1.188 0.792 2.309 0.594 3.365-0.462 0.858-0.858 0.99-1.979 0.396-3.167-0.264-0.462-0.528-0.924-0.858-1.32-0.858-1.188-1.32-2.507-1.254-3.959 0-1.715-0.726-3.167-1.847-4.421-0.792-0.858-1.715-1.518-2.969-1.122s-1.649 1.518-1.913 2.639c-0.066 0.33-0.066 0.726-0.132 1.254 0 0.396 0 0.99 0.198 1.518z"></path>
										<path d="M15.967 32c-8.775 0-15.967-7.192-15.967-16.033s7.192-15.967 15.967-15.967c8.841 0 15.967 7.192 15.967 15.967s-7.126 16.033-15.967 16.033zM15.967 0.99c-8.247 0-14.977 6.73-14.977 14.977s6.73 15.043 14.977 15.043c8.313 0 15.043-6.73 15.043-15.043s-6.73-14.977-15.043-14.977z"></path>
										<path d="M4.699 26.586l21.927-21.927 0.7 0.7-21.927 21.927-0.7-0.7z"></path>
									</svg>
									<span>soy</span>
						    	</li><?php
							}

								if(has_tag('raw')) {
							    	?><li>
								    	<svg class="icon icon-raw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.5 48.5">
											<path d="M24.2,48.5C10.9,48.5,0,37.6,0,24.2C0,10.9,10.9,0,24.2,0s24.2,10.9,24.2,24.2C48.5,37.6,37.6,48.5,24.2,48.5z M24.2,1.5
												C11.7,1.5,1.5,11.7,1.5,24.2C1.5,36.8,11.7,47,24.2,47S47,36.8,47,24.2C47,11.7,36.8,1.5,24.2,1.5z"/>
											<path d="M24.5,38.9c-1.9,0-3.9-0.4-5.8-1.2c-4.3-1.7-6.8-5.3-7.5-10.5l0-0.3c0-0.2-0.1-0.4-0.1-0.6c0-0.3,0-0.6,0-0.9l0-0.3
												c-0.3-4,2.6-7.8,6.5-8.5c1.7-0.3,3.2-0.1,4.5,0.7c1.5,0.8,2.8,0.8,4.6,0c2.3-1.1,4.8-1,6.9,0.2c2.2,1.3,3.8,3.6,4,6.1
												c0.5,5.5-1.1,9.7-4.9,12.5C30.1,37.9,27.4,38.9,24.5,38.9z M18.9,17.7c-0.4,0-0.7,0-1.1,0.1c-3.2,0.5-5.7,3.8-5.4,7.1l0,0l0,0.4
												c0,0.3,0,0.5,0,0.8c0,0.2,0,0.3,0.1,0.5l0,0.3c0.7,4.8,2.9,7.9,6.8,9.4c4.6,1.9,8.9,1.4,12.6-1.4c3.4-2.6,4.9-6.4,4.4-11.4
												c-0.2-2.1-1.5-4.1-3.3-5.1c-1.8-1-3.8-1-5.7-0.1c-2.1,1-3.9,1-5.7-0.1C20.6,18,19.8,17.7,18.9,17.7z"/>
											<path d="M25.1,16.8c-0.1,0-0.1,0-0.1,0c-3.5-0.1-7-3-7.8-6.3C17,10.1,17,9.7,17.2,9.3c0.2-0.3,0.5-0.4,0.9-0.5
												c0.4,0,0.8-0.1,1.2-0.1L20,8.6c1.9,0,3.4,0.5,4.5,1.5c1.2,1.2,1.8,3,1.9,5.4c0,0.4-0.1,0.7-0.3,0.9C25.7,16.7,25.3,16.8,25.1,16.8z
												 M18.4,10.1C18.4,10.1,18.4,10.1,18.4,10.1c0.7,2.8,3.7,5.3,6.6,5.4c0,0,0,0,0,0c0-2-0.5-3.5-1.5-4.4c-0.8-0.8-2-1.2-3.5-1.2
												L19.5,10C19.1,10,18.7,10.1,18.4,10.1z"/>
											<path d="M14.8,25.3c-0.3,0-0.5-0.2-0.5-0.5c-0.2-2.8,2.6-4.4,2.8-4.5c0.2-0.1,0.5,0,0.7,0.2c0.1,0.2,0.1,0.5-0.2,0.7
												c0,0-2.4,1.4-2.2,3.5C15.3,25,15.1,25.2,14.8,25.3C14.8,25.3,14.8,25.3,14.8,25.3z"/>
										</svg>
										<span>raw</span>
									</li><?php
								}
							   ?>
							</ul>
						</div>
					</a>
					</div><?php
			endwhile;
		endif;

		?> </div><?php

	elseif( $tagId ) :

		$args['tax_query'] = array(
			array(
				'taxonomy' => 'tag',
				'field' => 'id',
				'tag' => $_POST['tagId']
			)
		);

	    $query = new WP_Query( $args );
	    ?> <div class="grid Teaser Container" id="RecipeOverview"><?php
	    if( $query->have_posts() ) :
			while( $query->have_posts() ): $query->the_post();
	            ?><div class="col-s-2-4 col-m-1-3 col-ml-1-4">
					<a class="Teaser-wrap js-animate js-nav-item" id="overview" data-post="<?php the_id(); ?>" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" href="<?php echo get_permalink(); ?>">
						<figure class="Teaser-media ImgToBg">
							<?php $image = get_field('cover');?>

							<img class="ImgToBg-item" src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_title();?>">
						</figure>
						<div class="Teaser-body">
							<h2 class="Teaser-title"><?php the_title();?></h2>
							<ul class="Teaser-categories">
								<?php
							    $categories = get_the_category();

							    foreach($categories as $category) {
							        echo "<li>$category->cat_name</li>";
							   	}
								?>
							</ul>
							<ul class="Teaser-tags">
								<?php
								if(has_tag('gluten')) {
							    	?><li><svg class='icon icon-gluten-free'><use xlink:href='#icon-gluten-free'></use><span>gluten-free</span></svg></i><?php
								}

							   	if(has_tag('nut')) {
							    	?><li><svg class='icon icon-nut-free'><use xlink:href='#icon-nut-free'></use><span>nut-free</span></svg></i><?php
								}

								if(has_tag('sugar')) {
							    	?><li><svg class='icon icon-sugar-free'><use xlink:href='#icon-sugar-free'></use><span>sugar-free</span></svg></i><?php
								}

								if(has_tag('soy')) {
							    	?><li><svg class='icon icon-soy-free'><use xlink:href='#icon-soy-free'></use><span>soy-free</span></svg></i><?php
								}

								if(has_tag('raw')) {
							    	?><li><svg class='icon icon-raw'><use xlink:href='#icon-raw'></use><span>raw</span></svg></i><?php
								}
							   ?>
							</ul>
						</div>
					</a>
					</div><?php
			endwhile;
		endif;

		?> </div><?php

	endif;

    wp_die();
}


/**
 * Filter Categories
 */

function misha_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		'order'	=> $_POST['date'] // ASC или DESC
	);

	// for taxonomies / categories
	if( isset( $_POST['categoryfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['categoryfilter']
			)
		);

	$query = new WP_Query( $args );

	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
            echo '<div class="col-s-2-4 col-m-1-3 col-ml-1-4">'.
					'<a class="Teaser-wrap loaded" id="overview" href="'. get_permalink() .'">'.
						'<figure class="Teaser-media ImgToBg">'.
							'<img class="ImgToBg-item" src="'. get_field('cover')['sizes']['large'] .'" alt="'. get_the_title().'">'.
						'</figure>'.
					'</a>'.
					'<div class="Teaser-body">'.
						'<h2 class="Teaser-title">' . get_the_title() . '</h2>'.
						'<ul class="Teaser-categories">'.

						'</ul>'.
						'<ul class="Teaser-tags">'.

						'</ul>'.
					'</div>'.
				'</div>';
		endwhile;
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;

	die();
}

add_action('wp_ajax_myfilter', 'misha_filter_function');
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');


function vunchies_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Vunchies, use a find and replace
	 * to change 'vunchies' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'vunchies', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'vunchies' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vunchies_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;

add_action( 'after_setup_theme', 'vunchies_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vunchies_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vunchies_content_width', 640 );
}
add_action( 'after_setup_theme', 'vunchies_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function vunchies_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'vunchies' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => esc_html__( 'Add widgets here.', 'vunchies' ),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'vunchies_widgets_init' );


add_action( 'wp_ajax_add_foobar', 'prefix_ajax_add_foobar' );

function prefix_ajax_add_foobar() {
    // Handle request then generate response using WP_Ajax_Response

    // Don't forget to stop execution afterward.
    wp_die();
}

//* Load Google Fonts
add_action( 'wp_enqueue_scripts', 'bg_load_google_fonts' );
function bg_load_google_fonts() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Playfair+Display:400,400i|Source+Sans+Pro:300,400,600|Montserrat:400,700', array(), CHILD_THEME_VERSION );
}

/**
 * Enqueue scripts and styles.
 */

/* add SVG functionality*/
function cc_mime_types($mimes) { $mimes['svg'] = 'image/svg+xml'; return $mimes; } add_filter('upload_mimes', 'cc_mime_types');

function vunchies_scripts() {
	wp_enqueue_style( 'vunchies-style', get_stylesheet_uri() );


	// mine

	wp_enqueue_script( 'vunchies-pinit', get_template_directory_uri() . '/js/pin-it.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-imgToBg', get_template_directory_uri() . '/js/img-to-bg.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-header', get_template_directory_uri() . '/js/header.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-onscroll', get_template_directory_uri() . '/js/on-scroll.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-comments', get_template_directory_uri() . '/js/comments.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-burger', get_template_directory_uri() . '/js/burger.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-animations', get_template_directory_uri() . '/js/animations.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-travel-detail', get_template_directory_uri() . '/js/travel-detail.js', array(), '20151215', true );

	// wp_enqueue_script( 'svgxuse', get_template_directory_uri() . '/js/icomoon/svgxuse.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-travel', get_template_directory_uri() . '/js/travel.js', array(), '20151215', true );
	wp_enqueue_script( 'vunchies-filter-tags', get_template_directory_uri() . '/js/filter-tags.js', array(), '20151215', true );
	wp_enqueue_script( 'vunchies-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vunchies_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
