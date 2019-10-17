<?php
/**
 * Hello! Pro appearance settings
 *
 * @package Hello Pro
 * @author  brandiD
 * @license GPL-2.0-or-later
 */

$hello_pro_default_colors = array(
	'primary'   => '#ce461c',
	'secondary' => '#53796e',
);

$hello_pro_primary_color   = get_theme_mod( 'hello_pro_link_color', $hello_pro_default_colors['primary'] );
$hello_pro_secondary_color = get_theme_mod( 'hello_pro_accent_color', $hello_pro_default_colors['secondary'] );

$appearance = array(
	'fonts-url'            => '//fonts.googleapis.com/css?family=Lato:400,700,900|Quicksand:700&display=swap',
	'fontawesome-css-url'  => '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
	'default-colors'       => $hello_pro_default_colors,
	'editor-color-palette' => array(
		array(
			'name'  => __( 'Primary Color', 'hello-pro' ),
			'slug'  => 'primary',
			'color' => $hello_pro_primary_color,
		),
		array(
			'name'  => __( 'Secondary Color', 'hello-pro' ),
			'slug'  => 'secondary',
			'color' => $hello_pro_secondary_color,
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
		array(
			'name' => __( 'Huge', 'hello-pro' ),
			'size' => 42,
			'slug' => 'huge',
		),
	),
);

return $appearance;
