<?php
/**
 * Hello! Pro 3
 *
 * This file adds functions to the Hello Pro 3 Theme.
 *
 * @package Hello Pro
 * @author  brandiD
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/hello/
 */

//* Start the engine
require_once get_template_directory() . '/lib/init.php';

//* Load constants - use constants in code instead of functions to improve performance. Hat Tip to Tonya at Knowthecode.io.
$child_theme = wp_get_theme( get_stylesheet_directory() );

// * Child theme (do not remove)
define( 'CHILD_THEME_HANDLE', sanitize_title_with_dashes( wp_get_theme()->get( 'Name' ) ) );
define( 'CHILD_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

// Sets up the Theme
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

// Set Localization (do not remove).
add_action( 'after_setup_theme', 'hello_pro_localization_setup' );
/**
 * Loads text Domain
 *
 * @since  3.0.1
 */
function hello_pro_localization_setup() {
	load_child_theme_textdomain( 'hello-pro', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'hello-pro' ) );
}

// Add helper functions
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Add the custom meta boxes.
require_once get_stylesheet_directory() . '/lib/metaboxes.php';

// Import Customizer custom toggle control.
require_once get_stylesheet_directory() . '/lib/class-hello-pro-toggle-control.php';

// Add Customizer settings
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS
require_once get_stylesheet_directory() . '/lib/output.php';

// Add Gutenberg functions
add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
function genesis_child_gutenberg_support() {
	require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}

// Add scripts and styles
require_once get_stylesheet_directory() . '/lib/load-scripts.php';

// Add Theme setup functions
require_once get_stylesheet_directory() . '/lib/theme-setup.php';

// Add the blog functions.
require_once get_stylesheet_directory() . '/lib/blog-functions.php';
