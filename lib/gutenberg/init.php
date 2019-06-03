<?php
/**
* Loads Gutenberg functions for Hello! Pro theme.
*
* @since 3.0.0
*
* @package Hello Pro Theme
*/

//* Gutenberg Front-end styles
add_action( 'wp_enqueue_scripts', 'hellopro_gutenberg_page_styles' );
function hellopro_gutenberg_page_styles() {

	//* Gutenberg block styles
	wp_enqueue_style(
		'hellopro-gutenberg-frontend-styles',
		get_stylesheet_directory_uri() . "/lib/gutenberg/front-end.css",
		array( CHILD_THEME_HANDLE ),
		CHILD_THEME_VERSION
	);

}

//* Gutenberg Editor styles
add_action( 'enqueue_block_editor_assets', 'hellopro_gutenberg_editor_styles' );
function hellopro_gutenberg_editor_styles() {

	// Fonts
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Lato:400,700,900|Quicksand:700', array(), CHILD_THEME_VERSION );

	// Custom Editor Styles
	wp_enqueue_style(
		'hellopro-gutenberg-editor-styles',
		get_stylesheet_directory_uri() . ('/lib/gutenberg/style-editor.css'),
		array(),
		CHILD_THEME_VERSION,
		true
	);

	// Add custom colors to Gutenberg
	require_once('output-gutenberg-editor.php');
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

	$blocks      = (array) parse_blocks( $post_object->post_content );

	if ( isset( $blocks[0]['blockName'] ) ) {
		$classes[] = 'first-block-' . str_replace( '/', '-', $blocks[0]['blockName'] );
	}

	if ( isset( $blocks[0]['attrs']['align'] ) ) {
		$classes[] = 'first-block-align-' . $blocks[0]['attrs']['align'];
	}

	return $classes;
}

//* Add support for editor styles
add_theme_support( 'editor-styles' );

//* Enqueue Editor styles
add_editor_style( '/lib/gutenberg/style-editor.css' );

//* Enable Wide Images
add_theme_support( 'align-wide' );

//* Make media embeds responsive
add_theme_support( 'responsive-embeds' );

// Editor Color Palette
$hello_pro_block_editor_settings = genesis_get_config( 'block-editor-settings' );
add_theme_support( 'editor-color-palette', $hello_pro_block_editor_settings['editor-color-palette'] );
