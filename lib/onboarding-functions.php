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
		'content_archive_thumbnail' => 1,   // Show the blog post Featured Images.
		'image_size'                => 'medium_large', // Use the 'medium_large' size Featured Image on blog archives.
		'image_alignment'           => 'center', // Center-align Featured Images on blog archives.
	);

	genesis_update_settings( $settings );

}


// add_action( 'genesis_onboarding_after_import_content', 'hello_pro_update_spslider_settings', 30, 2 );
// /**
//  * Updates the display settings for the SP Testimonials Slider
//  *
//  * @param string $content The page content.
//  * @param string $imported_post_ids The imported Post IDs.
//  */
// function hello_pro_update_spslider_settings( $content, $imported_post_ids ) {
//
// 	// Enable Auto-play.
// 	if ( get_option( 'social_proof_slider_autoplay' ) !== 1 ) {
// 		update_option( 'social_proof_slider_autoplay', 1 );
// 	}
//
// 	// Set Display Time.
// 	if ( get_option( 'social_proof_slider_displaytime' ) === '' || empty( get_option( 'social_proof_slider_displaytime' ) ) ) {
// 		update_option( 'social_proof_slider_displaytime', 3000 );
// 	}
//
// 	// Set Animation Style.
// 	if ( get_option( 'social_proof_slider_animationstyle' ) !== 'fade' ) {
// 		update_option( 'social_proof_slider_animationstyle', 'fade' );
// 	}
//
// 	// Set Vertical Align.
// 	if ( get_option( 'social_proof_slider_verticalalign' ) !== 'align_middle' ) {
// 		update_option( 'social_proof_slider_verticalalign', 'align_middle' );
// 	}
//
// 	// Show the Dots.
// 	if ( get_option( 'social_proof_slider_showdots' ) !== 1 ) {
// 		update_option( 'social_proof_slider_showdots', 1 );
// 	}
//
// 	// Set the dots color.
// 	if ( get_option( 'social_proof_slider_dotscolor' ) === '' || empty( get_option( 'social_proof_slider_dotscolor' ) ) ) {
// 		update_option( 'social_proof_slider_dotscolor', '#666666' );
// 	}
//
// }
