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

	<button class="Button Button-scrollTop js-button-footer-scrollUp">
		<svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
	</button>

	<footer id="colophon" class="Footer" role="contentinfo">
		<span>© Vunchies - 2016</span>
		<span>
			<a class"LinkScrollTop" href="<?php echo get_page_link(2); ?>">Imprint</a>
		</span>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Greensock Library -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ScrollToPlugin.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>

<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
</body>
</html>
