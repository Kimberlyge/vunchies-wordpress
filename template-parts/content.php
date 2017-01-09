<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vunchies
 */

?>

<a class="Teaser-wrap" href="<?php echo get_permalink(); ?>" rel="bookmark">
	<figure class="Teaser-media">
		<?php $image = get_field('cover');?>

		<img class="" src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_title();?>">
		<!-- <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" alt="{{item.title}}" data-srcset="{{item.acf.cover.sizes.medium}} 320w, {{item.acf.cover.sizes.medium_large}} 1000w"> -->
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
		    $tags = get_the_tags();

		    foreach($tags as $tag) {
		        echo "<li><svg class='icon icon-$tag->name'><use xlink:href='#icon-$tag->name'></use><span>$tag->name</span></svg></i>";
		   }
		   ?>
		</ul>
	</div>
</a>
