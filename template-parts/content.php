<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vunchies
 */

?>
<div class="col-s-2-4 col-m-1-3 col-ml-1-4">
	<a class="Teaser-wrap js-animate" id="overview" href="<?php echo get_permalink(); ?>" rel="bookmark">
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
</div>
