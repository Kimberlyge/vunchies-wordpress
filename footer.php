<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vunchies
 */

?>
			</div><!-- #content -->

			<button class="Button Button-scrollTop Button--outline js-button-footer-scrollUp">
				<svg class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 32">
				<path d="M0.372 29.805c-0.484 0.521-0.484 1.302 0 1.823 0.484 0.484 1.302 0.521 1.786 0l14.586-14.735c0.484-0.521 0.484-1.302 0-1.823l-14.586-14.698c-0.484-0.484-1.302-0.484-1.786 0-0.484 0.521-0.484 1.302 0 1.823l13.284 13.805-13.284 13.805z"></path>
				</svg>
			</button>

			<!-- <div class="InstagramFeed"><?php echo do_shortcode('[instagram-feed]'); ?></div> -->

			<footer id="colophon" class="Footer" role="contentinfo">

				<div class="grid Footer-grid">
					<div class="Footer-item col-s-3-3 col-m-1-3">
						<div class="Newsletter">
							<h2 class="Newsletter-title">Sign up to get your monthly vunchies!</h2>
							<form action="https://vunchies.us14.list-manage.com/subscribe/post" method="POST">
								<input type="hidden" name="u" value="7d5191058016a98802b74c80d">
								<input type="hidden" name="id" value="efb35ae6e6">
								<!-- <input class="Newsletter-input" type="text" placeholder="Your name"> -->
								<input class="Newsletter-input" name="MERGE0" id="MERGE0" type="email" placeholder="Your email address" required="">
								<button class="Button Button--invert Newsletter-submit" type="submit">Submit</button>
							</form>
						</div>

						<div class="NavSocial">
							<h2 class="Footer-title">Follow me</h2>
							<a class='NavSocial-item NavSocial-item--invert' href="https://pinterest.com/kimberlyges/" target="_blank">
								<svg class="icon icon-pinterest" viewBox="0 0 56.693 56.693" xmlns="http://www.w3.org/2000/svg"><path d="M30.374,4.622c-13.586,0-20.437,9.74-20.437,17.864c0,4.918,1.862,9.293,5.855,10.922c0.655,0.27,1.242,0.01,1.432-0.715  c0.132-0.5,0.445-1.766,0.584-2.295c0.191-0.717,0.117-0.967-0.412-1.594c-1.151-1.357-1.888-3.115-1.888-5.607  c0-7.226,5.407-13.695,14.079-13.695c7.679,0,11.898,4.692,11.898,10.957c0,8.246-3.649,15.205-9.065,15.205  c-2.992,0-5.23-2.473-4.514-5.508c0.859-3.623,2.524-7.531,2.524-10.148c0-2.34-1.257-4.292-3.856-4.292  c-3.058,0-5.515,3.164-5.515,7.401c0,2.699,0.912,4.525,0.912,4.525s-3.129,13.26-3.678,15.582  c-1.092,4.625-0.164,10.293-0.085,10.865c0.046,0.34,0.482,0.422,0.68,0.166c0.281-0.369,3.925-4.865,5.162-9.359  c0.351-1.271,2.011-7.859,2.011-7.859c0.994,1.896,3.898,3.562,6.986,3.562c9.191,0,15.428-8.379,15.428-19.595  C48.476,12.521,41.292,4.622,30.374,4.622z"/></svg>
							</a>
							<a class='NavSocial-item NavSocial-item--invert' href="https://www.instagram.com/vunchies/" target="_blank">
								<svg class="icon icon-instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
									<path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
									<path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
									<path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
								</svg>
							</a>
							<a class='NavSocial-item NavSocial-item--invert' href="https://pinterest.com/kimberlyges/" target="_blank">
								<svg class="icon icon-pinterest" viewBox="0 0 56.693 56.693" xmlns="http://www.w3.org/2000/svg"><path d="M30.374,4.622c-13.586,0-20.437,9.74-20.437,17.864c0,4.918,1.862,9.293,5.855,10.922c0.655,0.27,1.242,0.01,1.432-0.715  c0.132-0.5,0.445-1.766,0.584-2.295c0.191-0.717,0.117-0.967-0.412-1.594c-1.151-1.357-1.888-3.115-1.888-5.607  c0-7.226,5.407-13.695,14.079-13.695c7.679,0,11.898,4.692,11.898,10.957c0,8.246-3.649,15.205-9.065,15.205  c-2.992,0-5.23-2.473-4.514-5.508c0.859-3.623,2.524-7.531,2.524-10.148c0-2.34-1.257-4.292-3.856-4.292  c-3.058,0-5.515,3.164-5.515,7.401c0,2.699,0.912,4.525,0.912,4.525s-3.129,13.26-3.678,15.582  c-1.092,4.625-0.164,10.293-0.085,10.865c0.046,0.34,0.482,0.422,0.68,0.166c0.281-0.369,3.925-4.865,5.162-9.359  c0.351-1.271,2.011-7.859,2.011-7.859c0.994,1.896,3.898,3.562,6.986,3.562c9.191,0,15.428-8.379,15.428-19.595  C48.476,12.521,41.292,4.622,30.374,4.622z"/></svg>
							</a>
							<a class='NavSocial-item NavSocial-item--invert' href="https://www.instagram.com/vunchies/" target="_blank">
								<svg class="icon icon-instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
									<path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
									<path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
									<path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
								</svg>
							</a>
						</div>
					</div>
					<div class="Footer-item col-s-3-3 col-m-1-3">
						<div class="RecentPosts">
							<h2 class="Footer-title">Recent Posts</h2>
							<ul>
							<?php
								$recent_posts = wp_get_recent_posts();
								foreach( $recent_posts as $recent ){
									echo '<li class="RecentPosts-item"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
								}
								wp_reset_query();
							?>
							</ul>
						</div>

						<!-- <div class="SearchForm">
							<?php get_search_form();?>
						</div> -->
					</div>

					<div class="Footer-item col-s-3-3 col-m-1-3">
						<div class="RecentPosts">
							<h2 class="Footer-title">Sitemap</h2>
							<ul>
								<li class="RecentPosts-item">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/breakfast">Breakfast</a>
								</li>
								<li class="RecentPosts-item">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/Lunch">Lunch</a>
								</li>
								<li class="RecentPosts-item">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/Dinner">Dinner</a>
								</li>
								<li class="RecentPosts-item">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/Dessert">Dessert</a>
								</li>
								<li class="RecentPosts-item">
									-
								</li>
								<li class="RecentPosts-item">
									<a href="<?php echo site_url() ?>/travel">Travel</a>
								</li>
								<li class="RecentPosts-item">
									<a href="<?php echo get_page_link(613); ?>">About</a>
								</li>
								<li class="RecentPosts-item">
									<a href="<?php echo get_page_link(761); ?>">Pantry and Tools</a>
								</li>
								<li class="RecentPosts-item">
									<a href="<?php echo get_page_link(620); ?>">Contact</a>
								</li>
								<li class="RecentPosts-item">
									<a href="<?php echo get_page_link(715); ?>">Archive</a>
								</li>
							</ul>
						</div>

					<!-- <div class="Footer-item col-s-3-3 col-m-1-3">
						<div class="PinterestFeed">
							<h2 class="Footer-title">Pinterest</h2>
							<a data-pin-do="embedUser" href="https://www.pinterest.com/kimberlykashew/"></a>
						</div>
					</div> -->
				</div>

			</footer><!-- #colophon -->
			<div class="FooterLegal">
				<span>© Vunchies - 2016</span>
				<span>
					<a class="FooterLegal-imprint LinkScrollTop" href="<?php echo get_page_link(2); ?>">Imprint</a>
				</span>
				<span>
					<a class="FooterLegal-imprint LinkScrollTop" href="<?php echo get_page_link(715); ?>">Archive</a>
				</span>
			</div>
		</div><!-- #page -->

		<?php wp_footer(); ?>

		<!-- Greensock Library -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ScrollToPlugin.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script> -->

		<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
	</body>
</html>
