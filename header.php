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

<link rel="stylesheet" href="https://i.icomoon.io/public/temp/b777c972e3/UntitledProject/style-svg.css">
<script defer src="https://i.icomoon.io/public/temp/b777c972e3/UntitledProject/svgxuse.js"></script>

<?php wp_head(); ?>
</head>

<body class="hfeed">
	<div class="NavSocial">
		<a class='NavSocial-item' href="https://pinterest.com/kimberlyges/" target="_blank">
			<span data-grunticon-embed class="icon icon-pinterest"></span>
		</a>
		<a class='NavSocial-item' href="https://www.instagram.com/kimberlykashew/" target="_blank">
			<span data-grunticon-embed class="icon icon-instagram"></span>
		</a>
	</div>
	<header class="Header">

		<?php $description = get_bloginfo( 'description', 'display' );?>


		<button data-target='burger' class="Burger">Menu</button>


		<a class="Logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h3><?php echo $description;?></h3>
		</a>



		<div class="Header-inner">
			<a class="Logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<h1><?php bloginfo( 'name' ); ?></h1>
				<h3><?php echo $description;?></h3>
			</a>
			<nav class="Nav Nav--main">
				<div class="NavItemRecipes" id="js-navToggleRecipes">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="Nav-item NavItemRecipes-title">All Recipes</a>
					<div class="NavSub js-nav-recipes">
						<div class="NavSub-content">
							<div class="NavSub-wrap">
								<h3>Course</h3>
								<a href="#" class="NavSub-item">Baked Goods</a>
							</div>
							<div class="NavSub-wrap">
								<h3>Sweet</h3>
								<a href="#" class="NavSub-item">Baked Goods</a>
							</div>
							<div class="NavSub-wrap">
								<h3>Season</h3>
								<a href="#" class="NavSub-item">Baked Goods</a>
							</div>
							<div class="NavSub-wrap">
								<h3>Cuisine</h3>
								<a href="#" class="NavSub-item">Baked Goods</a>
							</div>
						</div>
					</div>
				</div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/breakfast" class="Nav-item">Breakfast</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/lunch" class="Nav-item">Lunch</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/dinner" class="Nav-item">Dinner</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/dessert" class="Nav-item">Dessert</a>


				<div class="NavItemTravel" id="js-navToggleTravelOverview">
					<a href="<?php echo get_page_link(90); ?>" class="Nav-item NavItemRecipes-title">Travel</a>
					<div class="NavSub js-nav-travel">
						<div class="NavSub-content">
							<div class="NavSub-wrap">
								<h3>Europe</h3>
								<a href="<?php echo get_page_link(172); ?>" class="NavSub-item">Amsterdam</a>
								<a href="<?php echo get_page_link(101); ?>" class="NavSub-item">Berlin</a>
							</div>
							<div class="NavSub-wrap">
								<h3>Asia</h3>
								<a href="<?php echo get_page_link(104); ?>" class="NavSub-item">Ko Tao</a>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vunchies' ); ?></a> -->

	<div id="content" class="site-content">
