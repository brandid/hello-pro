<?php
/**
 * Block Editor settings specific to Hello! Pro
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

/**
 * Editor color palette config.
 */

/* Get Primary Color */
$color_primary = get_theme_mod( 'hello_pro_link_color', '#ce461c' );

/* Get Secondary Color */
$color_secondary = get_theme_mod( 'hello_pro_accent_color', '#53796e' );

return array(
	'editor-color-palette' => array(
		array(
			'name'  => __( 'Primary Color', 'hello-pro' ),
			'slug'  => 'primary',
			'color' => $color_primary,
		),
		array(
			'name'  => __( 'Secondary Color', 'hello-pro' ),
			'slug'  => 'secondary',
			'color' => $color_secondary,
		),
		array(
			'name'  => __( 'Background Canary', 'hello-pro' ),
			'slug'  => 'canary',
			'color' => '#fffcf5',
		),
		array(
			'name'  => __( 'White', 'hello-pro' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
		array(
			'name'  => __( 'Dark Gray', 'hello-pro' ),
			'slug'  => 'dark-gray',
			'color' => '#333',
		),
		array(
			'name'  => __( 'Black', 'hello-pro' ),
			'slug'  => 'black',
			'color' => '#000',
		),
	),
	'editor-font-sizes'    => array(
		array(
			'name' => __( 'Small', 'hello-pro' ),
			'size' => 13,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Normal', 'hello-pro' ),
			'size' => 18,
			'slug' => 'normal',
		),
		array(
			'name' => __( 'Medium', 'hello-pro' ),
			'size' => 24,
			'slug' => 'medium',
		),
		array(
			'name' => __( 'Large', 'hello-pro' ),
			'size' => 36,
			'slug' => 'large',
		),
	),
);
