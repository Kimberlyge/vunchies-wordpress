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

	<button class="Button Button-scrollTop js-button-scrolltop">
		<svg class="icon icon-arrow-top"><use xlink:href="#icon-arrow-top"></use></svg>
	</button>

	<footer id="colophon" class="Footer" role="contentinfo">
		<span>© Vunchies - 2016</span>
		<span>
			<a class"LinkScrollTop" href="<?php echo get_page_link(2); ?>">Imprint</a>
		</span>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
