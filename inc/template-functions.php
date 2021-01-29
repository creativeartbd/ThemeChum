<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ThemeChum
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function themechum_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'themechum_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function themechum_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'themechum_pingback_header' );

// Add nav-link class to the menu li element
function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-link';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

// Allow xvg file upload
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// To admin bar to all user except administrator
function themechum_is_show_admin_bar($content) {	
	// except administrator
	//return ( current_user_can( 'administrator' ) ) ? $content : false;
	// for all
	return false;
}
add_filter( 'show_admin_bar' , 'themechum_is_show_admin_bar');

