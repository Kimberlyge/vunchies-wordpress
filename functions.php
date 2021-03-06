<?php
/**
 * Vunchies functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vunchies
 */


/** remove admin bar */
add_action('get_header', 'my_filter_head');

function my_filter_head() {
 remove_action('wp_head', '_admin_bar_bump_cb');
}

if ( ! function_exists( 'vunchies_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


// function jptweak_remove_share() {
//     remove_filter( 'the_content', 'sharing_display',19 );
//     remove_filter( 'the_excerpt', 'sharing_display',19 );
//     if ( class_exists( 'Jetpack_Likes' ) ) {
//         remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
//     }
// }

// add_action( 'loop_start', 'jptweak_remove_share' );

function vunchies_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Vunchies, use a find and replace
	 * to change 'vunchies' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'vunchies', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'vunchies' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vunchies_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;

add_action( 'after_setup_theme', 'vunchies_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vunchies_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vunchies_content_width', 640 );
}
add_action( 'after_setup_theme', 'vunchies_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function vunchies_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'vunchies' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => esc_html__( 'Add widgets here.', 'vunchies' ),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'vunchies_widgets_init' );


add_action( 'wp_ajax_add_foobar', 'prefix_ajax_add_foobar' );

function prefix_ajax_add_foobar() {
    // Handle request then generate response using WP_Ajax_Response

    // Don't forget to stop execution afterward.
    wp_die();
}

//* Load Google Fonts
add_action( 'wp_enqueue_scripts', 'bg_load_google_fonts' );
function bg_load_google_fonts() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Playfair+Display:400,400i|Source+Sans+Pro:300,400,600|Montserrat:400,700', array(), CHILD_THEME_VERSION );
}

/**
 * Enqueue scripts and styles.
 */

/* add SVG functionality*/
function cc_mime_types($mimes) { $mimes['svg'] = 'image/svg+xml'; return $mimes; } add_filter('upload_mimes', 'cc_mime_types');

function vunchies_scripts() {
  global $post;

	wp_enqueue_style( 'vunchies-style', get_stylesheet_uri() );

	wp_enqueue_script( 'vunchies-preloader', get_template_directory_uri() . '/js/preloader.js', array(), '20151215', true );
	wp_enqueue_script( 'vunchies-pinit', get_template_directory_uri() . '/js/pin-it.js', array(), '20151215', true );
	wp_enqueue_script( 'vunchies-imgToBg', get_template_directory_uri() . '/js/img-to-bg.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-header', get_template_directory_uri() . '/js/header.js', array(), '20151215', true );
  wp_enqueue_script( 'vunchies-burger', get_template_directory_uri() . '/js/burger.js', array(), '20151215', true );
  wp_enqueue_script( 'vunchies-filter-tags', get_template_directory_uri() . '/js/filter-tags.js', array(), '20151215', true );
  wp_enqueue_script( 'vunchies-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-onscroll', get_template_directory_uri() . '/js/on-scroll.js', array(), '20151215', true );

	wp_enqueue_script( 'vunchies-comments', get_template_directory_uri() . '/js/comments.js', array(), '20151215', true );

  wp_enqueue_script( 'vunchies-animations', get_template_directory_uri() . '/js/animations.js', array(), '20151215', true );
  // if ( is_front_page() ) {
  //     wp_enqueue_script( 'vunchies-animations', get_template_directory_uri() . '/js/animations.js', array(), '20151215', true );
  // } else {
  //   wp_enqueue_script( 'vunchies-animations', get_template_directory_uri() . '/js/animations.js', array(), '20151215', true );
  // }

  if ($post->post_parent == 90) {
    wp_enqueue_script( 'vunchies-travel-detail', get_template_directory_uri() . '/js/travel-detail.js', array(), '20151215', true );
  }

  if ( is_page(90) ) {
    wp_enqueue_script( 'vunchies-travel-overview', get_template_directory_uri() . '/js/travel-overview.js', array(), '20151215', true );
  }

  if ( is_page(613) ) {
    wp_enqueue_script( 'vunchies-about', get_template_directory_uri() . '/js/about.js', array(), '20151215', true );
  }


	wp_enqueue_script( 'vunchies-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vunchies_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
