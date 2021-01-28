<?php
/**
 * ThemeChum functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ThemeChum
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'themechum_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function themechum_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ThemeChum, use a find and replace
		 * to change 'themechum' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'themechum', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'themechum' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'themechum_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'themechum_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function themechum_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'themechum_content_width', 640 );
}
add_action( 'after_setup_theme', 'themechum_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function themechum_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'themechum'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'themechum'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="">',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer 1', 'themechum'),
		'id'            => 'footer-1',
		'description'   => esc_html__('Add widgets here.', 'themechum'),
		'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-6 col-sm-6 %2$s"><div class="footer-block about-us-block">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h5 class="">',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer 2', 'themechum'),
		'id'            => 'footer-2',
		'description'   => esc_html__('Add widgets here.', 'themechum'),
		'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-6 col-sm-6 %2$s"><div class="footer-block links">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h5 class="">',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer 3', 'themechum'),
		'id'            => 'footer-3',
		'description'   => esc_html__('Add widgets here.', 'themechum'),
		'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-6 col-sm-6 %2$s"><div class="footer-block links">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h5 class="">',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer 4', 'themechum'),
		'id'            => 'footer-4',
		'description'   => esc_html__('Add widgets here.', 'themechum'),
		'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-6 col-sm-6 %2$s"><div class="footer-block links">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h5 class="">',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Forum Sidebar', 'themechum'),
		'id'            => 'forum',
		'description'   => esc_html__('Add widgets here.', 'themechum'),
		'before_widget' => '<div id="%1$s" class="col-lg-4 col-md-12 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Copyright Section', 'themechum'),
		'id'            => 'copyright',
		'description'   => esc_html__('Add widgets here.', 'themechum'),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="">',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'themechum_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function themechum_scripts() {	
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'themechum-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'themechum-base-style', get_template_directory_uri() . '/assets/css/base.css', array(), _S_VERSION );
	wp_style_add_data( 'themechum-style', 'rtl', 'replace' );
	
	
	wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'boostrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'themechum-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'themechum_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
