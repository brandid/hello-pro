<?php
/**
 * Loads custom Blog functions for the Hello! Pro theme.
 *
 * @package Hello Pro
 */

/**
 * Outputs a <ul> list of blog post categories.
 *
 * @return string
 */
function course_maker_output_category_list() {

	// Create an array of arguments.
	$category_args = array(
		'title_li' => '',
		'echo'     => '0',
		'parent'   => 0, // Only show top-level categories.
	);

	// Assign var with all categories.
	$categories = wp_list_categories( $category_args );

	// Get Blog URL.
	$blog_url = get_post_type_archive_link( 'post' );

	// Add 'ALL' item to list of categories.
	$categories .= '<li class="cat-item-all"><a href="' . $blog_url . '">All</a></li>';

	// If 'current-cat' class does not exist in the list of categories.
	if ( strpos( $categories, 'current-cat' ) === false ) {

		// Add the class to the 'All' item.
		$categories = str_replace( 'cat-item-all', 'cat-item-all current-cat', $categories );

	}

	return '<ul class="blog-categories">' . $categories . '</ul>';

}

/**
 * Modify the output of the Blog Header.
 *
 * @return string
 */
function course_maker_blog_header_output() {

	if ( genesis_is_root_page() || ! is_home() && ! is_archive() ) {
		return;
	}

	// Get the Customizer settings.
	// $enable_blog_carousel   = get_theme_mod( 'enable_blog_carousel', true );
	$enable_blog_categories = get_theme_mod( 'enable_blog_categories', true );

	// Exit if both "disable" Customizer settings are disabled.
	// if ( ! $enable_blog_carousel && ! $enable_blog_categories ) {
    if ( ! $enable_blog_categories ) {
		return;
	}

	// Start Output Buffering.
	ob_start();

	// Open the full-width container.
	echo '<div class="entry-content blog-header-extras">';
	echo '<div class="alignfull" style="padding: 0 8%;">';
	echo '<div class="container-content" style="max-width: 1200px; margin: 0 auto;">';

	// // Show the Featured Articles slider.
	// if ( $enable_blog_carousel ) {
    //
	// 	$featured_articles_items = course_maker_show_featured_articles();
    //
	// 	echo $featured_articles_items; // phpcs:ignore
    //
	// }

	// Show the Blog Categories list.
	if ( $enable_blog_categories ) {

		$categories_list = course_maker_output_category_list();

		echo $categories_list; // phpcs:ignore

	}

	// Close the full-width container.
	echo '</div></div></div>';

	// Put all the content into a var.
	$content = ob_get_contents();

	// Stop the Output Buffering.
	ob_end_clean();

	// Display everything.
	echo $content; // phpcs:ignore

}
add_action( 'genesis_before_loop', 'course_maker_blog_header_output', 20 );
