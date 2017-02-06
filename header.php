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
<link rel="stylesheet" href="https://i.icomoon.io/public/temp/f78ba62da8/UntitledProject/style-svg.css">
<script defer src="https://i.icomoon.io/public/temp/f78ba62da8/UntitledProject/svgxuse.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body class="hfeed">
	<div class="NavSocial">
		<a class='NavSocial-item' href="https://pinterest.com/kimberlyges/" target="_blank">
			<svg class="icon icon-pinterest" viewBox="0 0 56.693 56.693" xmlns="http://www.w3.org/2000/svg"><path d="M30.374,4.622c-13.586,0-20.437,9.74-20.437,17.864c0,4.918,1.862,9.293,5.855,10.922c0.655,0.27,1.242,0.01,1.432-0.715  c0.132-0.5,0.445-1.766,0.584-2.295c0.191-0.717,0.117-0.967-0.412-1.594c-1.151-1.357-1.888-3.115-1.888-5.607  c0-7.226,5.407-13.695,14.079-13.695c7.679,0,11.898,4.692,11.898,10.957c0,8.246-3.649,15.205-9.065,15.205  c-2.992,0-5.23-2.473-4.514-5.508c0.859-3.623,2.524-7.531,2.524-10.148c0-2.34-1.257-4.292-3.856-4.292  c-3.058,0-5.515,3.164-5.515,7.401c0,2.699,0.912,4.525,0.912,4.525s-3.129,13.26-3.678,15.582  c-1.092,4.625-0.164,10.293-0.085,10.865c0.046,0.34,0.482,0.422,0.68,0.166c0.281-0.369,3.925-4.865,5.162-9.359  c0.351-1.271,2.011-7.859,2.011-7.859c0.994,1.896,3.898,3.562,6.986,3.562c9.191,0,15.428-8.379,15.428-19.595  C48.476,12.521,41.292,4.622,30.374,4.622z"/></svg>
		</a>
		<a class='NavSocial-item' href="https://www.instagram.com/kimberlykashew/" target="_blank">
			<svg class="icon icon-instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
				<path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
				<path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
				<path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
			</svg>

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


		<a href="<?php echo site_url() ?>" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-page="90" class="Logo">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h3><?php echo $description;?></h3>
		</a>
<!--
		<a class="Logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h3><?php echo $description;?></h3>
		</a>
 -->
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

			<a href="<?php echo site_url() ?>/travel" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="1" class="Nav-item NavItemTravel-title js-nav-item">Breakfast2</a>

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
					<a href="<?php echo site_url() ?>/travel" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-page="90" class="Nav-item NavItemTravel-title js-nav-item">Travel</a>
				</div>
			</nav>

			<span class="Divider">|</span>

			<a href="<?php echo get_page_link(613); ?>" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-page="613" class="Nav-item NavItemAbout js-nav-item">About</a>


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
