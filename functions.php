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
										'<a class="Teaser-wrap loaded" id="overview" href="'. esc_url( get_permalink() ), the_sub_field('city_slug') .'">'.
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
