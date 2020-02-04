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

add_action( 'after_setup_theme', 'hello_pro_theme_support', 9 );
/**
 * Adds theme supports.
 */
function hello_pro_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

}

// Use the search form from WordPress core.
remove_filter( 'get_search_form', 'genesis_search_form' );

// Sticky Nav - Add a body class if "Sticky Nav" option is not disabled.
add_filter( 'body_class', 'hellopro_stickynav_body_class' );

/**
 * Adds a CSS class to the body tag.
 *
 * @param array $classes An array of CSS classes to be assigned to the body tag.
 *
 * @return array An array of CSS classes to be assigned to the body tag.
 */
function hellopro_stickynav_body_class( $classes ) {

	$sticky_header = get_theme_mod( 'sticky_header', true );
	$classes[]     = ( $sticky_header ? 'sticky-header' : '' );

	return $classes;
}

// Add custom image sizes.
add_image_size( 'featured', 300, 100, true );
add_image_size( 'portfolio', 300, 175, true );
add_image_size( 'blogroll', 768, 512, true );
add_image_size( 'featured-article', 800, 800, true );

// Remove header right widget area.
unregister_sidebar( 'header-right' );

// Remove secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Unregister layout settings.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Remove output of primary navigation right extras.
remove_filter( 'genesis_nav_items', 'genesis_nav_right', 10, 2 );
remove_filter( 'wp_nav_menu_items', 'genesis_nav_right', 10, 2 );

add_action( 'genesis_theme_settings_metaboxes', 'hello_pro_remove_metaboxes' );
/**
 * Removes output of unused admin settings metaboxes.
 *
 * @since 3.0.1
 *
 * @param string $_genesis_admin_settings The admin screen to remove meta boxes.
 */
function hello_pro_remove_metaboxes( $_genesis_admin_settings ) {
	remove_meta_box( 'genesis-theme-settings-header', $_genesis_admin_settings, 'main' );
	remove_meta_box( 'genesis-theme-settings-nav', $_genesis_admin_settings, 'main' );
}

add_filter( 'genesis_customizer_theme_settings_config', 'hello_pro_remove_customizer_settings' );
/**
 * Removes output of header and front page breadcrumb settings in the Customizer.
 *
 * @since 3.0.1
 *
 * @param array $config Original Customizer items.
 *
 * @return array Filtered Customizer items.
 */
function hello_pro_remove_customizer_settings( $config ) {
	unset( $config['genesis']['sections']['genesis_header'] );
	unset( $config['genesis']['sections']['genesis_breadcrumbs']['controls']['breadcrumb_front_page'] );
	return $config;
}

// If the Customizer setting is set to: "Show Logo Image", then display the custom logo.
add_action( 'genesis_site_title', 'hellopro_custom_logo', 0 );
/**
 * Displays the custom logo.
 */
function hellopro_custom_logo() {
	$site_title_display_setting = get_theme_mod( 'site_title_display' );
	if ( 'display_logo' === $site_title_display_setting ) {
		the_custom_logo();
	}
}

add_filter( 'body_class', 'hellopro_customlogo_body_class' );
/**
 * Adds a custom body class if a custom logo is used.
 *
 * @since 3.0.0
 *
 * @param array $classes Original array of body classes.
 *
 * @return array Filtered array of body classes.
 */
function hellopro_customlogo_body_class( $classes ) {
	$site_title_display_setting = get_theme_mod( 'site_title_display' );
	if ( 'display_logo' === $site_title_display_setting ) {
		$has_custom_logo = has_custom_logo();
		$classes[]       = ( $has_custom_logo ? 'custom-logo' : '' );
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

// Relocate the featured image on archive pages.
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
add_action( 'genesis_entry_header', 'genesis_do_post_image', 5 );

// Reduce the Secondary Navigation menu to one level depth.
add_filter( 'wp_nav_menu_args', 'hello_pro_secondary_menu_args' );
/**
 * Modifies Nav Menu arguments to reduce secondary menus to one level depth.
 *
 * @param array $args Array of Nav Menu arguments.
 *
 * @return array Filtered array of Nav Menu arguments.
 */
function hello_pro_secondary_menu_args( $args ) {
	if ( 'secondary' !== $args['theme_location'] ) {
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

// Remove Genesis Page Templates.
add_filter( 'theme_page_templates', 'hello_pro_remove_genesis_page_templates' );
/**
 * Removes Genesis Page Templates.
 *
 * @param array $page_templates Array of Genesis page templates.
 *
 * @return array Filtered array of Genesis page templates.
 */
function hello_pro_remove_genesis_page_templates( $page_templates ) {
	// Let's keep the archive template.
	unset( $page_templates['page_blog.php'] );
	return $page_templates;
}

// Enable shortcodes in text widgets.
add_filter( 'widget_text', 'do_shortcode' );
