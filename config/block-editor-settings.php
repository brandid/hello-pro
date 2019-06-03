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
     		'name'  => __( 'Primary Color', 'hellopro' ),
     		'slug'  => 'primary',
     		'color'	=> $color_primary,
     	),
     	array(
     		'name'  => __( 'Secondary Color', 'hellopro' ),
     		'slug'  => 'secondary',
     		'color'	=> $color_secondary,
     	),
     	array(
     		'name'  => __( 'Background Canary', 'hellopro' ),
     		'slug'  => 'canary',
     		'color'	=> '#fffcf5',
     	),
     	array(
     		'name'  => __( 'White', 'hellopro' ),
     		'slug'  => 'white',
     		'color'	=> '#fff',
     	),
     	array(
     		'name'  => __( 'Dark Gray', 'hellopro' ),
     		'slug'  => 'dark-gray',
     		'color'	=> '#333',
     	),
     	array(
     		'name'  => __( 'Black', 'hellopro' ),
     		'slug'  => 'black',
     		'color'	=> '#000',
     	),
    ),
 );
