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

// Enqueue Styles and Scripts.
add_action( 'wp_enqueue_scripts', 'hello_pro_load_scripts_styles' );
/**
 * Defines responsive menu settings.
 *
 * @since 3.0.1
 */
function hello_pro_load_scripts_styles() {

	$appearance = genesis_get_config( 'appearance' );

	// Get the Sticky Header setting - to determine if we enqueue the JS.
	$sticky_header = get_theme_mod( 'sticky_header', true );

	// Enqueue Dashicons.
	wp_enqueue_style( 'dashicons' );

	// Enqueue FontAwesome.
	wp_enqueue_style( 'font-awesome', $appearance['fontawesome-css-url'], array(), genesis_get_theme_version() );

	// Enqueue Google Fonts.
	wp_enqueue_style( 'google-font', $appearance['fonts-url'], array(), genesis_get_theme_version() );

	// Enqueue responsive menu scripts.
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 'hello-pro-responsive-menu', get_stylesheet_directory_uri() . "/js/responsive-menus{$suffix}.js", array( 'jquery' ), genesis_get_theme_version(), true );
	wp_localize_script( 'hello-pro-responsive-menu', 'genesis_responsive_menu', hello_pro_responsive_menu_settings() );

	// If the sticky header is not disabled...
	if ( $sticky_header ) {

		// ...Enqueue custom sticky header scripts.
		wp_enqueue_script( 'hello-pro-debounce', get_stylesheet_directory_uri() . '/js/debounce.js', array( 'jquery' ), genesis_get_theme_version(), true );
		wp_enqueue_script( 'sticky-nav-script', get_stylesheet_directory_uri() . '/js/sticky-nav.js', array( 'hello-pro-debounce' ), genesis_get_theme_version(), true );

	}

	// Enqueue SlickJS.
	wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js', array( 'jquery' ), '1.8.1', true );
	wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css', array(), '1.8.1', 'all' );
}
