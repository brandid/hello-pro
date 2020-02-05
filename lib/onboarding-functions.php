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

add_action( 'genesis_onboarding_after_import_content', 'hello_pro_add_blog_categories', 30, 2 );
/**
 * Add sample Blog categories.
 *
 * @param string $content The page content.
 * @param string $imported_post_ids The imported Post IDs.
 */
function hello_pro_add_blog_categories( $content, $imported_post_ids ) {

	// Sample Category #1.
	wp_insert_term(
		'Sample Category #1', // The name of the category.
		'category', // The taxonomy, which in this case is "category" (don't change).
		array(
			'slug' => 'sample-category-1', // Slug to use for the term archive.
		)
	);

	// Sample Category #2.
	wp_insert_term(
		'Sample Category #2', // The name of the category.
		'category', // The taxonomy, which in this case is "category" (don't change).
		array(
			'slug' => 'sample-category-2', // Slug to use for the term archive.
		)
	);

	// Sample Category #3.
	wp_insert_term(
		'Sample Category #3', // The name of the category.
		'category', // The taxonomy, which in this case is "category" (don't change).
		array(
			'slug' => 'sample-category-3', // Slug to use for the term archive.
		)
	);

}

add_action( 'genesis_onboarding_after_import_content', 'hello_pro_assign_blog_posts_to_categories', 35, 2 );
/**
 * Assign sample Blog posts to sample categories.
 *
 * @param string $content The page content.
 * @param string $imported_post_ids The imported Post IDs.
 */
function hello_pro_assign_blog_posts_to_categories( $content, $imported_post_ids ) {

	// Define Post slugs.
	$post1_slug = 'sample-blog-post-1';
	$post2_slug = 'sample-blog-post-2';
	$post3_slug = 'sample-blog-post-3';
	$post4_slug = 'sample-blog-post-4';
	$post5_slug = 'sample-blog-post-5';
	$post6_slug = 'sample-blog-post-6';

	// Define Category slugs.
	$cat1_slug = 'sample-category-1';
	$cat2_slug = 'sample-category-2';
	$cat3_slug = 'sample-category-3';

	// Reset vars.
	$p = '';

	// Define query vars for Category 1.
	$cat1_args = array(
		'post_name__in'  => [ $post1_slug, $post2_slug ],
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 2,
	);

	// Get posts.
	$cat1_posts = get_posts( $cat1_args );

	// Get "Sample Category #1" category ID.
	$cat1_obj = get_category_by_slug( $cat1_slug );
	$cat1_id  = $cat1_obj->term_id;

	// Assign posts to "Sample Category #1".
	foreach ( $cat1_posts as $p ) {
		wp_set_post_categories( $p->ID, array( $cat1_id ) );
	}

	// Reset vars.
	$p = '';

	// Define query vars for Category 2.
	$cat2_args = array(
		'post_name__in'  => [ $post3_slug, $post4_slug ],
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 2,
	);

	// Get posts.
	$cat2_posts = get_posts( $cat2_args );

	// Get "Sample Category #2" category ID.
	$cat2_obj = get_category_by_slug( $cat2_slug );
	$cat2_id  = $cat2_obj->term_id;

	// Assign posts to "Sample Category #2".
	foreach ( $cat2_posts as $p ) {
		wp_set_post_categories( $p->ID, array( $cat2_id ) );
	}

	// Reset vars.
	$p = '';

	// Define query vars for Category 3.
	$cat3_args = array(
		'post_name__in'  => [ $post5_slug, $post6_slug ],
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 2,
	);

	// Get posts.
	$cat3_posts = get_posts( $cat3_args );

	// Get "Sample Category #3" category ID.
	$cat3_obj = get_category_by_slug( $cat3_slug );
	$cat3_id  = $cat3_obj->term_id;

	// Assign posts to "Sample Category #3".
	foreach ( $cat3_posts as $p ) {
		wp_set_post_categories( $p->ID, array( $cat3_id ) );
	}

}

add_action( 'genesis_onboarding_after_import_content', 'hello_pro_onboarding_set_genesis_defaults', 40, 2 );
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
