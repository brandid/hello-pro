<?php
/**
 * Custom functions to run during Genesis Onboarding (One-Click Theme Setup)
 *
 * @since 2.0
 *
 * @package Hello Pro
 */

add_action( 'genesis_onboarding_after_import_content', 'hello_pro_remove_default_blog_meta', 25, 2 );
/**
 * Removes the default "Hello World" post if it exists.
 *
 * @param string $content The page content.
 * @param string $imported_post_ids The imported Post IDs.
 */
function hello_pro_remove_default_blog_meta( $content, $imported_post_ids ) {

	// Get default post by title.
	$default_post = get_posts( array( 'title' => 'Hello World!' ) );

	// Remove the default post if it exists.
	if ( ! empty( $default_post ) ) {
		wp_delete_post( $default_post[0]->ID, $bypass_trash = true );
	}

	// If "Uncategorized" category exists.
	if ( category_exists( 'Uncategorized' ) ) {

		// Rename "Uncategorized" to "General".
		wp_update_term(
			1,
			'category',
			array(
				'name' => 'General',
				'slug' => 'general',
			)
		);

	}

}

add_action( 'genesis_onboarding_after_import_content', 'hello_pro_onboarding_set_genesis_defaults', 35, 2 );
/**
 * Sets the Genesis Defaults
 *
 * @param string $content The page content.
 * @param string $imported_post_ids The imported Post IDs.
 */
function hello_pro_onboarding_set_genesis_defaults( $content, $imported_post_ids ) {

	if ( ! function_exists( 'genesis_update_settings' ) ) {
		return;
	}

	$settings = array(
		'content_archive'           => 'excerpts', // Show excerpts, not full entries.
		'content_archive_thumbnail' => 1, // Show the blog post Featured Images.
		'image_size'                => 'blogroll', // Use the 'blogroll' size Featured Image on blog archives.
		'image_alignment'           => 'none', // Set default alignment for Featured Images on blog archives.
	);

	genesis_update_settings( $settings );

}
