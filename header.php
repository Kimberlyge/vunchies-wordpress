<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vunchies
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Icomoon - need to get the full version or a new solution -->
<link rel="stylesheet" href="https://i.icomoon.io/public/temp/f9ae68d293/UntitledProject/style-svg.css">
<script defer src="https://i.icomoon.io/public/temp/f9ae68d293/UntitledProject/svgxuse.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body class="hfeed">
	<div class="NavSocial">
		<a class='NavSocial-item' href="https://pinterest.com/kimberlyges/" target="_blank">
			<img class="icon icon-pinterest" src="http://vunchies.com/wp-content/uploads/2017/01/pinterest-1.svg" alt="">
		</a>
		<a class='NavSocial-item' href="https://www.instagram.com/kimberlykashew/" target="_blank">
			<svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg>
		</a>
	</div>

	<div class="SearchForm SearchForm--desktop">
		<?php get_search_form();?>
	</div>

	<header class="Header">

		<?php $description = get_bloginfo( 'description', 'display' );?>


		<button class="Burger">
			<span class="Burger-copy">Menu</span>
			<span class="Burger-close">×</span>
		</button>


		<a class="Logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h3><?php echo $description;?></h3>
		</a>

		<div class="Header-inner">
			<a class="Logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<h1><?php bloginfo( 'name' ); ?></h1>
				<h3><?php echo $description;?></h3>
			</a>


			<div class="Nav NavItemFilter" id="js-navItemFilter">
				<div class="NavItemFilter-icons">
					<?php
					get_template_part( 'inc/icons/svg/instagram.svg' );
					?>

					<img class="NavItemFilter-icon js-navItemFilter-icon" src="http://vunchies.com/wp-content/uploads/2017/01/filter.svg" alt="Filter Icon">
					<img class="NavItemFilter-icon-active js-navItemFilter-icon-active" src="http://vunchies.com/wp-content/uploads/2017/01/filter-active.svg" alt="Filter Icon">
				</div>
			</div>
			<div class="Nav NavItemRecipes" id="js-navToggleRecipes">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="Nav-item NavItemRecipes-title">All Recipes</a>
			</div>

			<form class="Nav" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
				<?php
					if( $terms = get_terms( 'category', 'orderby=name' ) ) : // to make it simple I use default categories
						echo '<select size="2" class="NavForm js-nav-form" name="categoryfilter">';
						echo '<option class="Nav-item" value="1">Breakfast</option>';
						echo '<option class="Nav-item" value="13">Lunch</option>';
						echo '<option class="Nav-item" value="14">Dinner</option>';
						echo '<option class="Nav-item" value="17">Dessert</option>';

						echo '</select>';
					endif;
				?>
				<input type="hidden" name="action" value="myfilter">
			</form>

			<nav class="Nav">
				<div class="NavItemTravel" id="js-navToggleTravelOverview">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="Nav-item NavItemTravel-title">Travel</a>
				</div>
			</nav>

			<span class="Divider">|</span>

			<a href="<?php echo get_page_link(613); ?>" class="Nav-item NavItemAbout">About</a>


			<!-- Sub Navigations -->
			<div class="NavSub NavSubFilter js-nav-filter">
				<div class="NavSub-content">
					<div class="NavSub-wrap NavSub-wrap--2-3">
						<h3>Ingredients</h3>
						<div class="NavSub-wrap">
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
						</div>
						<div class="NavSub-wrap">
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
						</div>
						<div class="NavSub-wrap">
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
						</div>
						<div class="NavSub-wrap">
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
							<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
							<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
						</div>
					</div>
					<div class="NavSub-wrap NavSub-wrap--1-3">
						<h3>Allergies</h3>
						<button data-title="gluten" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Gluten-free</button>
						<button data-title="sugar"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sugar-free</button>
						<button data-title="soy"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Soy-free</button>
						<button data-title="nut"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Nut-free</button>
					</div>
				</div>
			</div>
			<div class="NavSub NavSub--travel js-nav-travel">
				<div class="NavSub-content">
					<div class="NavSub-wrap">
						<h3>Europe</h3>
						<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
							<?php
								if( $terms = get_terms( 'category', 'orderby=name' ) ) : // to make it simple I use default categories
									echo '<select size="2" class="NavForm js-nav-form" name="pagefilter">';

									echo '<option class="NavSub-item" value="34">Amsterdam</option>';
									echo '<option class="NavSub-item" value="34">Berlin</option>';

									echo '</select>';
								endif;
							?>
							<input type="hidden" name="action" value="myfilter">
						</form>

					</div>
				</div>
			</div>

			<div class="NavSub NavSub--recipes js-nav-recipes">
				<div class="NavSub-content">
					<div class="NavSub-wrap">
						<h3>Course</h3>

						<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
							<?php
								if( $terms = get_terms( 'category', 'orderby=name' ) ) : // to make it simple I use default categories
									echo '<select size="2" class="NavForm js-nav-form" name="categoryfilter">';

									echo '<option class="NavSub-item" value="34">Sidedishes</option>';

									echo '</select>';
								endif;
							?>
							<input type="hidden" name="action" value="myfilter">
						</form>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/sidedish" class="NavSub-item">Sidedishes</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/snacks" class="NavSub-item">Snacks</a>
					</div>
					<div class="NavSub-wrap">
						<h3>Sweet</h3>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/baked-goods" class="NavSub-item">Baked Goods</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/cake" class="NavSub-item">Cake</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/cookie" class="NavSub-item">Cookie</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/ice-cream" class="NavSub-item">Ice Cream</a>
					</div>
					<div class="NavSub-wrap">
						<h3>Season</h3>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/spring" class="NavSub-item">Spring</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/summer" class="NavSub-item">Summer</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/fall" class="NavSub-item">Fall</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/winter" class="NavSub-item">Winter</a>
					</div>
					<div class="NavSub-wrap">
						<h3>Cuisine</h3>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/thai" class="NavSub-item">Thai</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/vietnamese" class="NavSub-item">Vietnamese</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/middle-eastern" class="NavSub-item">Middle Eastern</a>
					</div>
				</div>
			</div>


		</div>
	</header>

<div id="page" class="site">

	<div id="content" class="site-content">
