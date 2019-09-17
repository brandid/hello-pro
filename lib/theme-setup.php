<?php
/**
* Hello Pro.
*
* This file loads theme setup used in the Hello Pro Theme.
*
* @package Hello Pro
* @author  StudioPress
* @license GPL-2.0+
* @link    http://www.studiopress.com/
*/

// Add HTML5 markup structure
add_theme_support( 'html5', genesis_get_config( 'html5' ) );

// Add Accessibility support
add_theme_support( 'genesis-accessibility', genesis_get_config( 'accessibility' ) );

// Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

// Adds custom logo in Customizer > Site Identity.
add_theme_support( 'custom-logo', genesis_get_config( 'custom-logo' ) );

// Use the search form from WordPress core
remove_filter( 'get_search_form', 'genesis_search_form' );

// Sticky Nav - Add a body class if "Sticky Nav" option is not disabled
add_filter( 'body_class', 'hellopro_stickynav_body_class' );
function hellopro_stickynav_body_class( $classes ) {

    $sticky_header = get_theme_mod( 'sticky_header', true );
	$classes[]     = ( $sticky_header ? 'sticky-header' : '' );

    return $classes;
}

// Renames primary and secondary navigation menus.
add_theme_support( 'genesis-menus', genesis_get_config( 'menus' ) );

// Theme Image Sizes
add_image_size( 'featured', 300, 100, true );
add_image_size( 'portfolio', 300, 175, true );

// Add support for after entry widget
add_theme_support( 'genesis-after-entry-widget-area' );

// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

// Removes header right widget area
unregister_sidebar( 'header-right' );

// Removes secondary sidebar
unregister_sidebar( 'sidebar-alt' );

// Unregister layout settings
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Removes output of primary navigation right extras.
remove_filter( 'genesis_nav_items', 'genesis_nav_right', 10, 2 );
remove_filter( 'wp_nav_menu_items', 'genesis_nav_right', 10, 2 );

/**
 * Removes output of unused admin settings metaboxes.
 *
 * @since 3.0.1
 *
 * @param string $_genesis_admin_settings The admin screen to remove meta boxes from.
 */
add_action( 'genesis_theme_settings_metaboxes', 'hello_pro_remove_metaboxes' );
function hello_pro_remove_metaboxes( $_genesis_admin_settings ) {
	remove_meta_box( 'genesis-theme-settings-header', $_genesis_admin_settings, 'main' );
	remove_meta_box( 'genesis-theme-settings-nav', $_genesis_admin_settings, 'main' );
}

/**
 * Removes output of header and front page breadcrumb settings in the Customizer.
 *
 * @since 3.0.1
 *
 * @param array $config Original Customizer items.
 * @return array Filtered Customizer items.
 */
add_filter( 'genesis_customizer_theme_settings_config', 'hello_pro_remove_customizer_settings' );
function hello_pro_remove_customizer_settings( $config ) {
	unset( $config['genesis']['sections']['genesis_header'] );
	unset( $config['genesis']['sections']['genesis_breadcrumbs']['controls']['breadcrumb_front_page'] );
	return $config;
}

// If the Customizer setting is set to: "Show Logo Image", then display the custom logo.
add_action( 'genesis_site_title', 'hellopro_custom_logo', 0 );
function hellopro_custom_logo() {
	$siteTitleDisplaySetting = get_theme_mod("site_title_display");
	if ( "display_logo" === $siteTitleDisplaySetting ) {
		the_custom_logo();
	}
}

/**
 * Adds a custom body class if a custom logo is used.
 *
 * @since 3.0.0
 *
 * @param array $classes Original array of body classes.
 * @return array Filtered array of body classes.
 */
add_filter( 'body_class', 'hellopro_customlogo_body_class' );
function hellopro_customlogo_body_class( $classes ) {
	$siteTitleDisplaySetting = get_theme_mod("site_title_display");
	if ( "display_logo" === $siteTitleDisplaySetting ) {
	    $hascustomlogo = has_custom_logo();
	    $classes[] = ($hascustomlogo ? 'custom-logo' : '');
	    return $classes;
	} else {
		$classes[] = 'text-logo';
	    return $classes;
	}
}

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 7 );

// Relocate the post info
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
add_action( 'genesis_entry_header', 'genesis_post_info', 5 );

// Reduce the Secondary Navigation menu to one level depth
add_filter( 'wp_nav_menu_args', 'hello_pro_secondary_menu_args' );
function hello_pro_secondary_menu_args( $args ) {
	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}
    $args['depth'] = 1;
    return $args;
}

add_filter( 'genesis_author_box_gravatar_size', 'hello_pro_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 3.0.1
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function hello_pro_author_box_gravatar( $size ) {
	return 90;
}

add_filter( 'genesis_comment_list_args', 'hello_pro_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 3.0.1
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function hello_pro_comments_gravatar( $args ) {
	$args['avatar_size'] = 60;
	return $args;
}

// Remove Genesis Page Templates
add_filter( 'theme_page_templates', 'hello_pro_remove_genesis_page_templates' );
function hello_pro_remove_genesis_page_templates( $page_templates ) {
	// Let's keep the archive template.
	// unset( $page_templates['page_archive.php'] );
    unset( $page_templates['page_blog.php'] );
    return $page_templates;
}

// Enable shortcodes in text widgets
add_filter( 'widget_text', 'do_shortcode' );
