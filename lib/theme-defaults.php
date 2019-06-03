<?php
/**
 * Hello Pro Theme Defaults
 *
 * This file adds the theme defaults for Hello Pro
 *
 * @package Hello Pro
 * @author  brandiD
 * @license GPL-2.0+
 * @link    https://thebrandid.com
 */

add_filter( 'genesis_theme_settings_defaults', 'bid_hello_pro_theme_defaults' );
/**
 * Updates theme settings when resetting them at Genesis -> Theme Settings.
 *
 * Can be removed when Genesis Theme Settings are removed from WP admin.
 *
 * @since 3.0.1
 *
 * @param array $defaults Original theme settings defaults.
 * @return array Modified defaults.
 */
function bid_hello_pro_theme_defaults( $defaults ) {

	$args = genesis_get_config( 'child-theme-settings-genesis' );

	return wp_parse_args( $args, $defaults );

}

add_filter( 'simple_social_default_styles', 'bid_hello_pro_sample_social_default_styles' );
/**
 * Set Simple Social Icon defaults.
 *
 * @since 3.0.1
 *
 * @param array $defaults Social style defaults.
 * @return array Modified social style defaults.
 */
function bid_hello_pro_sample_social_default_styles( $defaults ) {

	$args = genesis_get_config( 'simple-social-icons-settings' );

	return wp_parse_args( $args, $defaults );

}

//* Ensure full-width content is the default layout upon theme activation
genesis_set_default_layout( 'full-width-content' );
