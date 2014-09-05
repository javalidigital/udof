<?php
/**
 * Universidade do Futebol Theme functions and definitions
 *
 * @package Universidade do Futebol Theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'udof_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function udof_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Universidade do Futebol Theme, use a find and replace
	 * to change 'udof-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'udof-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-main' => __( 'Menu - Principal', 'udof-theme' ),
		'menu-top' => __( 'Menu - Topo', 'udof-theme' ),
		'menu-quem-somos' => __( 'Menu - Quem Somos', 'udof-theme' ),
		'menu-nossas-solucoes' => __( 'Menu - Nossas Soluções', 'udof-theme' ),
		'menu-nossos-diferenciais' => __( 'Menu - Nossos Diferenciais', 'udof-theme' ),
		'menu-relacionamento' => __( 'Menu - Relacionamento', 'udof-theme' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'udof_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // udof_theme_setup
add_action( 'after_setup_theme', 'udof_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function udof_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Destaques - Home', 'udof-theme' ),
		'id'            => 'home-featured',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="featured-box %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'udof-theme' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer - Sitemap', 'udof-theme' ),
		'id'            => 'footer-sitemap',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="footer-sitemap-box %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer - Termos', 'udof-theme' ),
		'id'            => 'footer-terms',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'udof_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function udof_theme_scripts() {
	wp_enqueue_style( 'udof-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'udof-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'udof-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'udof_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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