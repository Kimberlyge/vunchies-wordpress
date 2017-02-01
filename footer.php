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
		<svg class="icon icon-arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 32">
		<path d="M0.372 29.805c-0.484 0.521-0.484 1.302 0 1.823 0.484 0.484 1.302 0.521 1.786 0l14.586-14.735c0.484-0.521 0.484-1.302 0-1.823l-14.586-14.698c-0.484-0.484-1.302-0.484-1.786 0-0.484 0.521-0.484 1.302 0 1.823l13.284 13.805-13.284 13.805z"></path>
		</svg>

	</button>

	<footer id="colophon" class="Footer" role="contentinfo">
		<span>© Vunchies - 2016</span>
		<span>
			<a class="Footer-imprint LinkScrollTop" href="<?php echo get_page_link(2); ?>">Imprint</a>
		</span>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Greensock Library -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ScrollToPlugin.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>

<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
</body>
</html>
