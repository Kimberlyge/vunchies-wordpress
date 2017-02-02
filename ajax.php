<?php
/**
 * Ajax
 */

    $post = get_post($_POST['id']); // this line is used to define the {id:post_id} which you will see in another snippet further down

    if ($post) { // this is necessary and is a replacement of the typical `if (have_posts())`
        setup_postdata($post); // needed to format custom query results for template tags ?>
        <!-- everything below this line is your typical page template coding -->
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

<?php }
?>
