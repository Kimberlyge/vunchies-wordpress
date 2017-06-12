<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vunchies
 */

?>
<div class="col-s-2-4 col-m-1-3 col-l-1-3">
	<a class="Teaser-wrap js-animate js-nav-item" id="overview" data-post="<?php the_id(); ?>" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" href="<?php echo get_permalink(); ?>" rel="bookmark">
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
</div>
