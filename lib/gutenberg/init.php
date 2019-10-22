<?php
/**
 * Loads Gutenberg functions for Hello! Pro theme.
 *
 * @since 3.0.0
 *
 * @package Hello Pro Theme
 */

// Enqueue the Gutenberg Front-end styles.
add_action( 'wp_enqueue_scripts', 'hellopro_gutenberg_page_styles' );
/**
 * Enqueues the front-end styles.
 */
function hellopro_gutenberg_page_styles() {

	wp_enqueue_style(
		'hellopro-gutenberg-frontend-styles',
		get_stylesheet_directory_uri() . '/lib/gutenberg/front-end.css',
		array( CHILD_THEME_HANDLE ),
		genesis_get_theme_version()
	);

}

// Enqueue the Gutenberg Editor back-end styles.
add_action( 'enqueue_block_editor_assets', 'hellopro_gutenberg_editor_styles' );
/**
 * Enqueues the back-end styles.
 */
function hellopro_gutenberg_editor_styles() {

	// Get Appearance Settings.
	$appearance = genesis_get_config( 'appearance' );

	// Add custom Fonts.
	wp_enqueue_style( 'font-awesome', $appearance['fontawesome-css-url'], array(), genesis_get_theme_version() );
	wp_enqueue_style( 'google-font', $appearance['fonts-url'], array(), genesis_get_theme_version() );

	// Add custom Editor Styles.
	wp_enqueue_style(
		'hellopro-gutenberg-editor-styles',
		get_stylesheet_directory_uri() . ( '/lib/gutenberg/style-editor.css' ),
		array(),
		genesis_get_theme_version(),
		true
	);

	// Add the Customizer colors.
	require_once 'output-gutenberg-editor.php';

	// Add inline styles from the above file.
	wp_add_inline_style( 'hellopro-gutenberg-editor-styles', hellopro_gutenberg_editor_customizer_css_output(), 'after' );

}

add_filter( 'body_class', 'hello_pro_blocks_body_classes' );
/**
 * Adds body classes to help with block styling.
 *
 * - `has-no-blocks` if content contains no blocks.
 * - `first-block-[block-name]` to allow changes based on the first block (such as removing padding above a Cover block).
 * - `first-block-align-[alignment]` to allow styling adjustment if the first block is wide or full-width.
 *
 * @since 3.0.1
 *
 * @param array $classes The original classes.
 * @return array The modified classes.
 */
function hello_pro_blocks_body_classes( $classes ) {

	if ( ! is_singular() || ! function_exists( 'has_blocks' ) || ! function_exists( 'parse_blocks' ) ) {
		return $classes;
	}

	if ( ! has_blocks() ) {
		$classes[] = 'has-no-blocks';
		return $classes;
	}

	$post_object = get_post( get_the_ID() );

	$blocks = (array) parse_blocks( $post_object->post_content );

	if ( isset( $blocks[0]['blockName'] ) ) {
		$classes[] = 'first-block-' . str_replace( '/', '-', $blocks[0]['blockName'] );
	}

	if ( isset( $blocks[0]['attrs']['align'] ) ) {
		$classes[] = 'first-block-align-' . $blocks[0]['attrs']['align'];
	}

	return $classes;
}

// Add support for editor styles.
add_theme_support( 'editor-styles' );

// Enqueue Editor styles.
add_editor_style( '/lib/gutenberg/style-editor.css' );

// Enable Wide Images.
add_theme_support( 'align-wide' );

// Make media embeds responsive.
add_theme_support( 'responsive-embeds' );

// Get the Block Editor Settings.
$appearance = genesis_get_config( 'appearance' );

// Add support for custom Color Palette in the Block Editor.
add_theme_support( 'editor-color-palette', $appearance['editor-color-palette'] );

// Add support for custom Font Sizes in the Block Editor.
add_theme_support( 'editor-font-sizes', $appearance['editor-font-sizes'] );
