<?php
/**
 * Hello Pro.
 *
 * This file adds the required helper functions used in the Hello Pro Theme.
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

/**
 * Get default link color for Customizer.
 * Abstracted here since at least two functions use it.
 *
 * @since 3.0.1
 *
 * @return string Hex color code for link color.
 */
function hello_pro_customizer_get_default_link_color() {
	return '#ce461c';
}

/**
 * Get default accent color for Customizer.
 * Abstracted here since at least two functions use it.
 *
 * @since 3.0.1
 *
 * @return string Hex color code for accent color.
 */
function hello_pro_customizer_get_default_accent_color() {
	return '#53796e';
}

/**
 * Calculate the color contrast.
 *
 * @since 3.0.1
 *
 * @return string Hex color code for contrast color
 */
function hello_pro_color_contrast( $color ) {

	$hexcolor = str_replace( '#', '', $color );
	$red      = hexdec( substr( $hexcolor, 0, 2 ) );
	$green    = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue     = hexdec( substr( $hexcolor, 4, 2 ) );

	$luminosity = ( ( $red * 0.2126 ) + ( $green * 0.7152 ) + ( $blue * 0.0722 ) );

	return ( $luminosity > 128 ) ? '#333333' : '#ffffff';

}

/**
 * Calculate the color brightness.
 *
 * @since 3.0.1
 *
 * @return string Hex color code for the color brightness
 */
function hello_pro_color_brightness( $color, $change ) {

	$hexcolor = str_replace( '#', '', $color );

	$red   = hexdec( substr( $hexcolor, 0, 2 ) );
	$green = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue  = hexdec( substr( $hexcolor, 4, 2 ) );

	$red   = max( 0, min( 255, $red + $change ) );
	$green = max( 0, min( 255, $green + $change ) );
	$blue  = max( 0, min( 255, $blue + $change ) );

	return '#'.dechex( $red ).dechex( $green ).dechex( $blue );

}
