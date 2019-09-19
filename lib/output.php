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

add_action( 'wp_enqueue_scripts', 'hellopro_homepage_css_output' );
/**
 * Checks the settings for the home page sections.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 3.0.1
 */
function hellopro_homepage_css_output() {

	$css = '';

	/* Get Primary Color */
	$color_primary = get_theme_mod( 'hello_pro_link_color', hello_pro_customizer_get_default_link_color() );

	/* Get Secondary Color */
	$color_secondary = get_theme_mod( 'hello_pro_accent_color', hello_pro_customizer_get_default_accent_color() );

	/* Begin Custom CSS
	------------------------------------------------------------------------- */

	/* PRIMARY COLOR
	------------------------------------------ */
	// $css .= ( hello_pro_customizer_get_default_link_color() !== $color_primary ) ? sprintf( '
	$css .= sprintf( '
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
			color: %s;
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
			background-color: %s;
			color: %s !important;
		}

		/* GUTENBERG */
		.has-primary-color {
			color: %s !important;
		}

		.has-primary-background-color,
		.entry-content .featured-articles .featured-article {
			background-color: %s !important;
		}

		.wp-block-button .wp-block-button__link.has-primary-background-color,
		.ab-block-button > .ab-button  {
			background-color: %s !important;
			color: %s !important;
		}

		.wp-block-button .wp-block-button__link:not(.has-background) {
		    background-color: %s !important;
		}

		.wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):not(.has-text-color),
		.wp-block-button.is-style-outline .wp-block-button__link.has-primary-background-color {
			background-color: transparent !important;
		    border-color: %s !important;
			color: %s !important;
		}
	',
	$color_primary,
	$color_primary,
	hello_pro_color_contrast( $color_primary ),
	$color_primary,
	$color_primary,
	$color_primary,
	hello_pro_color_contrast( $color_primary ),
	$color_primary,
	$color_primary,
	$color_primary
	);

	/* SECONDARY COLOR
	------------------------------------------ */
	// $css .= ( hello_pro_customizer_get_default_accent_color() !== $color_secondary ) ? sprintf( '
	$css .= sprintf( '
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
			background-color: %s !important;
			color: %s !important;
		}

		/* GUTENBERG */
		.has-secondary-color {
			color: %s !important;
		}

		.has-secondary-background-color {
			background-color: %s !important;
		}

		.wp-block-button .wp-block-button__link:not(.has-background):hover {
		    background-color: %s !important;
			color: %s !important;
		}

		.wp-block-button.is-style-outline .wp-block-button__link.has-secondary-background-color {
			background-color: transparent !important;
		    border-color: %s !important;
			color: %s !important;
		}

		.wp-block-button.is-style-outline .wp-block-button__link:focus,
		.wp-block-button.is-style-outline .wp-block-button__link:hover,
		.wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):focus,
		.wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover {
			background-color: %s !important;
			border-color: %s !important;
			color: %s !important;
		}
	',
	$color_secondary,
	hello_pro_color_contrast( $color_secondary ),
	$color_secondary,
	$color_secondary,
	$color_secondary,
	hello_pro_color_contrast( $color_secondary ),
	$color_secondary,
	$color_secondary,
	$color_secondary,
	$color_secondary,
	hello_pro_color_contrast( $color_secondary )
	);

	/* OUTPUT EVERYTHING
	------------------------------------------ */
	if ( $css ) {
		wp_add_inline_style( CHILD_THEME_HANDLE, $css );
	}
}
