<?php
/**
 * Hello Pro Gutenberg Editor Styles
 *
 * This file adds the required CSS to the Gutenberg Editor
 *
 * @package Hello Pro
 * @author  brandiD
 * @license GPL-2.0+
 * @link    https://thebrandid.com
 */

add_action( 'enqueue_block_editor_assets', 'hellopro_gutenberg_editor_customizer_css_output' );
/**
 * Checks the Customizer settings for colors.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 3.0.0
 */
function hellopro_gutenberg_editor_customizer_css_output() {

	$appearance = genesis_get_config( 'appearance' );

	$css = '';

	/* Get Primary Color */
	$color_primary = get_theme_mod( 'hello_pro_link_color', $appearance['default-colors']['primary'] );

	/* Get Secondary Color */
	$color_secondary = get_theme_mod( 'hello_pro_accent_color', $appearance['default-colors']['secondary'] );

	// Begin Custom CSS.

	// Define Primary Color elements.
	$css .= sprintf(
		'/* ----------------- // APPLY CUSTOMIZER COLORS TO BLOCK EDITOR // ----------------- */
		/* PRIMARY COLOR */
		.editor-styles-wrapper a,
		.editor-styles-wrapper a:hover,
		.social-proof-slider-wrap .testimonial-item .testimonial-text .author .author-name,
		.entry-header .entry-meta .entry-comments-link a,
		.footer-widgets a:hover,
		.genesis-nav-menu a:hover,
		.genesis-nav-menu .current-menu-item > a,
		.genesis-nav-menu .sub-menu .current-menu-item > a:hover,
		.genesis-nav-menu .current-menu-parent > a,
		.menu-toggle:hover,
		.sub-menu-toggle:hover,
		.entry-meta a,
		.entry-meta a:hover,
		.footer-widgets .entry-title a:hover,
		.site-footer a:hover {
			color: %1$s;
		}

		.archive-pagination li a,
		.editor-styles-wrapper a.button,
		.editor-styles-wrapper input[type="button"],
		.editor-styles-wrapper input[type="reset"],
		.editor-styles-wrapper input[type="submit"],
		.editor-styles-wrapper .wpforms-gutenberg-form-selector .wpforms-form button[type=submit] {
			background-color: %1$s;
			color: %2$s !important;
		}

		.editor-styles-wrapper .has-primary-color {
			color: %1$s !important;
		}

		.editor-styles-wrapper .wp-block-button .wp-block-button__link.has-primary-background-color,
		.editor-styles-wrapper .ab-block-button .ab-button  {
			background-color: %1$s !important;
			color: %2$s !important;
		}

		.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background) {
		    background-color: %1$s !important;
		}

		.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):not(.has-text-color),
		.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link.has-primary-background-color {
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
		.archive-pagination li a:hover,
		.archive-pagination li.active a,
		.editor-styles-wrapper .button:hover,
		.editor-styles-wrapper a.button:hover,
		.editor-styles-wrapper input:hover[type="button"],
		.editor-styles-wrapper input:hover[type="reset"],
		.editor-styles-wrapper input:hover[type="submit"],
		.editor-styles-wrapper .wpforms-gutenberg-form-selector .wpforms-form button:hover[type=submit] {
			background-color: %1$s !important;
			color: %2$s !important;
		}

		.has-secondary-color {
			color: %1$s !important;
		}

		.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background):hover {
		    background-color: %1$s !important;
			color: %2$s !important;
		}

		.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link.has-secondary-background-color {
			background-color: transparent !important;
		    border-color: %1$s !important;
			color: %1$s !important;
		}

		.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:hover,
		.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover {
			background-color: %1$s !important;
			border-color: %1$s !important;
			color: %2$s !important;
		}
		',
		$color_secondary,
		hello_pro_color_contrast( $color_secondary )
	);

	// Output everything.
	if ( $css ) {
		return wp_strip_all_tags( $css );
	}

}
