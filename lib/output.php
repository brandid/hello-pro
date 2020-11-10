<?php
/**
 * Hello Pro Theme Front Page Images
 *
 * This file adds the required CSS to the front end to the Hello Pro Theme
 *
 * @package Hello Pro
 * @author  brandiD
 * @license GPL-2.0+
 * @link    https://thebrandid.com
 */

add_action( 'wp_enqueue_scripts', 'hellopro_css_output' );
/**
 * Adds the custom settings for block colors and font sizes.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 3.0.1
 */
function hellopro_css_output() {

	$css = '';

	$css .= '/* ----------------- // ADD CUSTOM STYLES INLINE // ----------------- */
	';

	$css .= '	/* CUSTOM FONT SIZES */
		';
	$css .= hello_pro_inline_font_sizes();

	$css .= '
	';

	$css .= '	/* APPLY CUSTOMIZER COLORS TO BLOCKS */
		';
	$css .= hello_pro_inline_color_palette();

	$css .= '
	';

	if ( $css ) {
		wp_add_inline_style( CHILD_THEME_HANDLE, $css );
	}

}

/**
 * Generate CSS for editor font sizes from the provided theme support.
 *
 * @since 3.0.3
 *
 * @return string The CSS for editor font sizes if theme support was declared.
 */
function hello_pro_inline_font_sizes() {
	$css               = '';
	$appearance        = genesis_get_config( 'appearance' );
	$editor_font_sizes = $appearance['editor-font-sizes'];

	if ( ! $editor_font_sizes ) {
		return '';
	}

	foreach ( $editor_font_sizes as $font_size ) {
		$css .= sprintf(
			'.site-container .has-%1$s-font-size {
			font-size: %2$spx;
		}
		',
			$font_size['slug'],
			$font_size['size']
		);
	}

	return $css;
}

/**
 * Generate CSS for editor colors based on theme color palette support.
 *
 * @since 2.9.0
 *
 * @return string The editor colors CSS if `editor-color-palette` theme support was declared.
 */
function hello_pro_inline_color_palette() {
	$css = '';

	$appearance = genesis_get_config( 'appearance' );

	$editor_color_palette = $appearance['editor-color-palette'];

	foreach ( $editor_color_palette as $color_info ) {

		$css .= sprintf(
			'.site-container .has-%1$s-color,
		.site-container .wp-block-button .wp-block-button__link.has-%1$s-color,
		.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-%1$s-color {
			color: %2$s;
		}

		.site-container .has-%1$s-background-color,
		.site-container .wp-block-button .wp-block-button__link.has-%1$s-background-color,
		.site-container .wp-block-pullquote.is-style-solid-color.has-%1$s-background-color {
			background-color: %2$s;
		}

		',
			$color_info['slug'],
			$color_info['color']
		);

	}

	// Get Primary Color.
	$color_primary = get_theme_mod( 'hello_pro_link_color', $appearance['default-colors']['primary'] );

	// Get Secondary Color.
	$color_secondary = get_theme_mod( 'hello_pro_accent_color', $appearance['default-colors']['secondary'] );

	// Define Primary Color elements.
	$css .= sprintf(
		'/* PRIMARY COLOR */
		a,
		.home-features > .wrap > .widget .textwidget > h3 > span,
		.social-proof-slider-wrap .testimonial-item .testimonial-text .author .author-name,
		.entry-header .entry-meta .entry-comments-link a,
		.footer-widgets a:hover,
		.footer-widgets a:focus,
		.genesis-nav-menu a:focus,
		.genesis-nav-menu a:hover,
		.genesis-nav-menu .current-menu-item > a,
		.genesis-nav-menu .sub-menu .current-menu-item > a:focus,
		.genesis-nav-menu .sub-menu .current-menu-item > a:hover,
		.genesis-nav-menu .current-menu-parent > a,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.sub-menu-toggle:focus,
		.sub-menu-toggle:hover,
		a:hover,
		.entry-meta a,
		.entry-meta a:hover,
		.entry-meta a:focus,
		.footer-widgets .entry-title a:hover,
		.site-footer a:hover,
		.site-footer a:focus,
		.entry-content .featured-articles button.slick-arrow > span,
		.entry-content .featured-articles ul.slick-dots li button::before,
		.entry-content .featured-articles ul.slick-dots li.slick-active button:before {
			color: %1$s;
		}

		.menu-toggle,
		.archive-pagination li a,
		a.button,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.sidebar .enews-widget input[type="submit"],
		.sidebar-primary .widget input[type="submit"],
		.sidebar-primary .widget .button,
		.wpforms-form button[type=submit]  {
			background-color: %1$s;
			color: %2$s !important;
		}

		.entry-content .featured-articles .featured-article {
			background-color: %1$s !important;
		}

		.wp-block-button .wp-block-button__link.has-primary-background-color,
		.ab-block-button > .ab-button,
		.gb-block-button > .gb-button  {
			background-color: %1$s !important;
			color: %2$s !important;
		}

		.wp-block-button .wp-block-button__link:not(.has-background) {
		    background-color: %1$s !important;
		}

		.wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):not(.has-text-color),
		.wp-block-button.is-style-outline .wp-block-button__link.has-primary-background-color {
			background-color: transparent !important;
		    border-color: %1$s !important;
			color: %1$s !important;
		}

		',
		$color_primary,
		hello_pro_color_contrast( $color_primary )
	);

	// Define Secondary Color elements.
	$css .= sprintf(
		'/* SECONDARY COLOR */
		.menu-toggle:focus,
		.menu-toggle:hover,
		.archive-pagination li a:hover,
		.archive-pagination li a:focus,
		.archive-pagination li.active a,
		.button:hover,
		.button:focus,
		a.button:hover,
		a.button:focus,
		button:not(.slick-arrow):hover,
		button:not(.slick-arrow):focus,
		button:not(id^="slick-"),
		input:hover[type="button"],
		input:hover[type="reset"],
		input:hover[type="submit"],
		input:focus[type="button"],
		input:focus[type="reset"],
		input:focus[type="submit"],
		.sidebar-primary .widget .button:focus,
		.sidebar-primary .widget .button:hover,
		.sidebar .enews-widget input[type="submit"]:focus,
		.sidebar .enews-widget input[type="submit"]:hover,
		.wpforms-form button[type=submit]:focus,
		.wpforms-form button[type=submit]:hover {
			background-color: %1$s !important;
			color: %2$s !important;
		}

		.wp-block-button .wp-block-button__link:not(.has-background):hover {
		    background-color: %1$s !important;
			color: %2$s !important;
		}

		.wp-block-button.is-style-outline .wp-block-button__link.has-secondary-background-color {
			background-color: transparent !important;
		    border-color: %1$s !important;
			color: %1$s !important;
		}

		.wp-block-button.is-style-outline .wp-block-button__link:focus,
		.wp-block-button.is-style-outline .wp-block-button__link:hover,
		.wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):focus,
		.wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover {
			background-color: %1$s !important;
			border-color: %1$s !important;
			color: %2$s !important;
		}',
		$color_secondary,
		hello_pro_color_contrast( $color_secondary )
	);

	return $css;
}
