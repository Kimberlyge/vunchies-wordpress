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

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>
<body class="hfeed">

	<div class="SearchForm SearchForm--desktop">
		<?php get_search_form();?>
	</div>

	<div class="Filter">
		<div class="FilterButton js-filter-icon">
			<svg class="FilterButton-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 32">
				<path d="M0.372 29.805c-0.484 0.521-0.484 1.302 0 1.823 0.484 0.484 1.302 0.521 1.786 0l14.586-14.735c0.484-0.521 0.484-1.302 0-1.823l-14.586-14.698c-0.484-0.484-1.302-0.484-1.786 0-0.484 0.521-0.484 1.302 0 1.823l13.284 13.805-13.284 13.805z"></path>
			</svg>
			<svg class="FilterButton-state" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 94">
			<style type="text/css">
				.st1{fill:none;stroke:#000000;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;}
			</style>
			<path class="fillup" d="M32.5,45.5v44l16-10v-21v-13c0,0,6.5-11.2,11.5-17.8c-21,2.5-44.4-6.1-44.4-6.1L32.5,45.5z"/>
			<polygon class="st1" points="251.5,1.5 282.5,45.5 282.5,89.5 295.5,78.5 295.5,45.5 326.5,1.5 "/>
			<polygon class="st1" points="251.5,1.5 282.5,45.5 282.5,92.5 298.5,79.5 298.5,45.5 329.5,1.5 "/>
			<polygon class="st1" points="76.5,1.5 45.5,45.5 45.5,78.5 32.5,89.5 32.5,45.5 1.5,1.5 "/>
			<polygon class="st1" points="1.5,1.5 32.5,45.5 32.5,92.5 48.5,79.5 48.5,45.5 79.5,1.5 "/>
			<path class="st1" d="M32.5,45.5v44l16-10v-21v-13c0,0,6.5-11.2,11.5-17.8c-21,2.5-44.4-6.1-44.4-6.1L32.5,45.5z"/>
			</svg>
		</div>
		<div class="Filter-overlay js-filter-overlay">
			<h3 class="Filter-title">Filter all recipes</h3>
			<div class="FilterContent grid grid--inner">
				<div class="col-s-4-4">
					<h3 class="FilterContent-title">Ingredients</h3>
					<div class="col-s-1-4">
						<button data-title="avocado" class="NavSub-item NavSubFilter-item NonBtn js-nav-item"><input type="checkbox" data-tag="avocado" class="NavSub-checkbox"> Avocado</button>
						<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
						<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
						<button data-title="Kale"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Kale</button>
						<button data-title="Chickpeas" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Chickpeas</button>
						<button data-title="Tempeh"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tempeh</button>
					</div>
					<div class="col-s-1-4">
						<button data-title="Basil" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Basil</button>
						<button data-title="Cilantro / Koriander"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Cilantro / Koriander</button>
						<button data-title="Parsley" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Parsley</button>
						<button data-title="Mint"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Mint</button>
						<button data-title="Thyme" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Thyme</button>
						<button data-title="Rosemary"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Rosemary</button>
					</div>
					<div class="col-s-1-4">
						<button data-title="sriracha" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sriracha</button>
						<button data-title="tamari"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tamari</button>
						<button data-title="kecap-mains" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Kecap Mains</button>
						<button data-title="lime"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Lime</button>
						<button data-title="chipotle" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Chipotle</button>
						<button data-title="apple-cider-vinegar"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Apple Cider Vingar</button>
					</div>
					<div class="col-s-1-4">
						<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Beans</button>
						<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Rice</button>
						<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Noodles</button>
						<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Shirataki</button>
						<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Quinoa</button>
						<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Oatmeal</button>
					</div>
				</div>

				<div class="col-s-4-4">
					<h3 class="FilterContent-title">Allergies</h3>
					<button data-title="gluten" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Gluten-free</button>
					<button data-title="sugar"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sugar-free</button>
					<button data-title="soy"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Soy-free</button>
					<button data-title="nut"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Nut-free</button>
				</div>
			</div>
		</div>
	</div>

	<header class="Header">

		<?php $description = get_bloginfo( 'description', 'display' );?>

		<button class="Burger">
			<span class="Burger-copy">Menu</span>
			<span class="Burger-close">×</span>
		</button>

		<a href="<?php echo site_url() ?>" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" class="Logo">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h3><?php echo $description;?></h3>
		</a>

		<div class="Header-inner">
			<a class="Logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<h1><?php bloginfo( 'name' ); ?></h1>
				<h3><?php echo $description;?></h3>
			</a>

			<div class="Nav js-preload">
				<div class="NavItemFilter" id="js-navItemFilter">
					<div class="NavItemFilter-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 94">
							<style type="text/css">
								.st1{fill:none;stroke:#000000;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;}
							</style>
							<path class="fillup" d="M32.5,45.5v44l16-10v-21v-13c0,0,6.5-11.2,11.5-17.8c-21,2.5-44.4-6.1-44.4-6.1L32.5,45.5z"/>
							<polygon class="st1" points="251.5,1.5 282.5,45.5 282.5,89.5 295.5,78.5 295.5,45.5 326.5,1.5 "/>
							<polygon class="st1" points="251.5,1.5 282.5,45.5 282.5,92.5 298.5,79.5 298.5,45.5 329.5,1.5 "/>
							<polygon class="st1" points="76.5,1.5 45.5,45.5 45.5,78.5 32.5,89.5 32.5,45.5 1.5,1.5 "/>
							<polygon class="st1" points="1.5,1.5 32.5,45.5 32.5,92.5 48.5,79.5 48.5,45.5 79.5,1.5 "/>
							<path class="st1" d="M32.5,45.5v44l16-10v-21v-13c0,0,6.5-11.2,11.5-17.8c-21,2.5-44.4-6.1-44.4-6.1L32.5,45.5z"/>
						</svg>
					</div>
					<div class="NavSub NavSubFilter js-nav-filter">
						<div class="NavSub-content grid grid--inner">
							<div class="col-s-3-4">
								<h3 class="NavSub-title">Ingredients</h3>
								<div class="col-s-1-4">
									<button data-title="avocado" class="NavSub-item NavSubFilter-item NonBtn js-nav-item"><input type="checkbox" data-tag="avocado" class="NavSub-checkbox"> Avocado</button>
									<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
									<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
									<button data-title="Kale"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Kale</button>
									<button data-title="Chickpeas" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Chickpeas</button>
									<button data-title="Tempeh"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tempeh</button>
								</div>

								<div class="col-s-1-4">
									<button data-title="Basil" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Basil</button>
									<button data-title="Cilantro / Koriander"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Cilantro / Koriander</button>
									<button data-title="Parsley" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Parsley</button>
									<button data-title="Mint"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Mint</button>
									<button data-title="Thyme" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Thyme</button>
									<button data-title="Rosemary"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Rosemary</button>
								</div>

								<div class="col-s-1-4">
									<button data-title="sriracha" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sriracha</button>
									<button data-title="tamari"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tamari</button>
									<button data-title="kecap-mains" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Kecap Mains</button>
									<button data-title="lime"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Lime</button>
									<button data-title="chipotle" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Chipotle</button>
									<button data-title="apple-cider-vinegar"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Apple Cider Vingar</button>
								</div>

								<div class="col-s-1-4">
									<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
									<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
									<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
									<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
									<button data-title="sweet-potato" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sweet Potato</button>
									<button data-title="Tofu"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Tofu</button>
								</div>
							</div>

							<div class="col-s-1-4">
								<h3 class="NavSub-title">Allergies</h3>
								<button data-title="gluten" class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Gluten-free</button>
								<button data-title="sugar"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Sugar-free</button>
								<button data-title="soy"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Soy-free</button>
								<button data-title="nut"  class="NavSub-item NavSubFilter-item NonBtn"><input type="checkbox" class="NavSub-checkbox"> Nut-free</button>
							</div>
						</div>
					</div>
				</div>
				<div class="NavItemRecipes" id="js-navToggleRecipes">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="NavItemRecipes-title">All Recipes</a>
					<div class="NavSub NavSub--recipes js-nav-recipes">
						<div class="NavSub-content grid grid--inner">
							<div class="col-s-1-4">
								<h3 class="NavSub-title">Course</h3>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/sidedish" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="34" class="NavSub-item js-nav-item">Sidedishes</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/snacks" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="8" class="NavSub-item js-nav-item">Snacks</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/salad" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="18" class="NavSub-item js-nav-item">Salad</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/sauce-dip-spread" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="23" class="NavSub-item js-nav-item">Sauce / Dip / Spread</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/smoothie" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="15" class="NavSub-item js-nav-item">Smoothie</a>
							</div>
							<div class="col-s-1-4">
								<h3 class="NavSub-title">Sweet</h3>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/baked-goods" class="NavSub-item">Baked Goods</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/cake" class="NavSub-item">Cake</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/cookie" class="NavSub-item">Cookie</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/ice-cream" class="NavSub-item">Ice Cream</a>
							</div>
							<div class="col-s-1-4">
								<h3 class="NavSub-title">Season</h3>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/spring" class="NavSub-item">Spring</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/summer" class="NavSub-item">Summer</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/fall" class="NavSub-item">Fall</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/winter" class="NavSub-item">Winter</a>
							</div>
							<div class="col-s-1-4">
								<h3 class="NavSub-title">Cuisine</h3>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/thai" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="8" class="NavSub-item js-nav-item">Thai</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/vietnamese" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="8" class="NavSub-item js-nav-item">Vietnamese</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/middle-eastern" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="19" class="NavSub-item js-nav-item">Middle Eastern</a>
							</div>
						</div>
					</div>
				</div>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/breakfast" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="1" class="Nav-item Nav-item--breakfast js-nav-item">Breakfast</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/lunch" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="13" class="Nav-item Nav-item--lunch js-nav-item">Lunch</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/dinner" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="14" class="Nav-item Nav-item--dinner js-nav-item">Dinner</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/dessert" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-category="17" class="Nav-item Nav-item--dessert js-nav-item">Dessert</a>

				<span class="Divider">|</span>
				<div class="NavItemTravel" id="js-navToggleTravelOverview">
					<a href="<?php echo site_url() ?>/travel" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-page="90" class=" NavItemTravel-title js-nav-item">Vegan Spots</a>
					<div class="NavSub NavSub--travel js-nav-travel">
						<div class="NavSub-content">
							<div class="col-s-1-4">
								<h3 class="NavSub-title">Europe</h3>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>/travel/amsterdam" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-page="34" class="NavSub-item js-nav-item">Amsterdam</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>travel/berlin" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-page="8" class="NavSub-item js-nav-item">Berlin</a>
							</div>
						</div>
					</div>
				</div>
				<!-- <span class="Divider">/</span> -->
				<a href="<?php echo get_page_link(613); ?>" data-ajax="<?php echo site_url() ?>/wp-admin/admin-ajax.php" data-page="613" class="Nav-item NavItemAbout js-nav-item">Vunchies</a>
			</div>

			<div class="SearchForm SearchForm--mobile">
				<?php get_search_form();?>
			</div>

			<div class="NavSocial">
				<a class='NavSocial-item' href="https://pinterest.com/kimberlyges/" target="_blank">
					<svg class="icon icon-pinterest" viewBox="0 0 56.693 56.693" xmlns="http://www.w3.org/2000/svg"><path d="M30.374,4.622c-13.586,0-20.437,9.74-20.437,17.864c0,4.918,1.862,9.293,5.855,10.922c0.655,0.27,1.242,0.01,1.432-0.715  c0.132-0.5,0.445-1.766,0.584-2.295c0.191-0.717,0.117-0.967-0.412-1.594c-1.151-1.357-1.888-3.115-1.888-5.607  c0-7.226,5.407-13.695,14.079-13.695c7.679,0,11.898,4.692,11.898,10.957c0,8.246-3.649,15.205-9.065,15.205  c-2.992,0-5.23-2.473-4.514-5.508c0.859-3.623,2.524-7.531,2.524-10.148c0-2.34-1.257-4.292-3.856-4.292  c-3.058,0-5.515,3.164-5.515,7.401c0,2.699,0.912,4.525,0.912,4.525s-3.129,13.26-3.678,15.582  c-1.092,4.625-0.164,10.293-0.085,10.865c0.046,0.34,0.482,0.422,0.68,0.166c0.281-0.369,3.925-4.865,5.162-9.359  c0.351-1.271,2.011-7.859,2.011-7.859c0.994,1.896,3.898,3.562,6.986,3.562c9.191,0,15.428-8.379,15.428-19.595  C48.476,12.521,41.292,4.622,30.374,4.622z"/></svg>
				</a>
				<a class='NavSocial-item' href="https://www.instagram.com/vunchies/" target="_blank">
					<svg class="icon icon-instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
						<path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
						<path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
						<path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
					</svg>
				</a>
			</div>
		</div>
	</header>

<div id="page" class="site">

	<div id="content" class="site-content">
