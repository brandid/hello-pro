<?php
/**
 * Hello Pro.
 *
 * This file loads scripts and styles used in the Hello Pro Theme.
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

 /**
  * Defines responsive menu settings.
  *
  * @since 3.0.1
  */
 function hello_pro_responsive_menu_settings() {

 	$settings = array(
 		'mainMenu'         => __( 'Menu', 'hello-pro' ),
 		'menuIconClass'    => 'dashicons-before dashicons-menu',
 		'subMenu'          => __( 'Submenu', 'hello-pro' ),
 		'subMenuIconClass' => 'dashicons-before dashicons-arrow-down-alt2',
 		'menuClasses'      => array(
 			'combine' => array(
 				'.nav-primary',
 			),
 			'others'  => array(),
 		),
 	);

 	return $settings;

 }

//* Enqueue Styles and Scripts
add_action( 'wp_enqueue_scripts', 'hello_pro_load_scripts' );
function hello_pro_load_scripts() {

	// Get Sticky Header setting - to determine if we enqueue the JS
    $sticky_header = get_theme_mod( 'sticky_header', true );

	// Dashicons
	wp_enqueue_style( 'dashicons' );

	// FontAwesome
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	// Google Fonts
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Lato:400,700,900|Quicksand:700', array(), CHILD_THEME_VERSION );

	// Responsive menu
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 'hello-pro-responsive-menu', get_stylesheet_directory_uri() . "/js/responsive-menus{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_localize_script( 'hello-pro-responsive-menu', 'genesis_responsive_menu', hello_pro_responsive_menu_settings() );

	// If sticky header is not disabled
	if ( $sticky_header ) {

		// Custom scripts.
		wp_enqueue_script( 'hello-pro-debounce', get_stylesheet_directory_uri() . '/js/debounce.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

		wp_enqueue_script( 'sticky-nav-script', get_stylesheet_directory_uri() . '/js/sticky-nav.js', array( 'hello-pro-debounce' ), CHILD_THEME_VERSION, true );

	}
}
