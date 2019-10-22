<?php
/**
 * This file adds the custom portfolio post type archive template to the Hello Pro Theme.
 *
 * @author brandiD
 * @package Personal Branding
 * @subpackage Customizations
 */

// * Force full width content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// * Remove the breadcrumb navigation
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// * Remove the post info function
remove_action( 'genesis_entry_header', 'genesis_post_info', 5 );

// * Remove the post content
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

// * Remove the post image
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

// * Add portfolio body class to the head
add_filter( 'body_class', 'hello_pro_add_portfolio_body_class' );
/**
 * Adds CSS class to body tag.
 *
 * @param array $classes Original body classes.
 *
 * @return array Modified body classes.
 */
function hello_pro_add_portfolio_body_class( $classes ) {

	$classes[] = 'hello-pro-portfolio';
	return $classes;

}

// Add the featured image after the post title.
add_action( 'genesis_entry_header', 'hello_pro_portfolio_grid' );
/**
 * Adds the featured image after the post title.
 */
function hello_pro_portfolio_grid() {

	if ( genesis_get_image( 'format=url&size=portfolio' ) === $image ) {
		printf(
			'<div class="portfolio-featured-image"><a href="%s" rel="bookmark"><img src="%s" alt="%s" /></a></div>',
			esc_url( get_permalink() ),
			esc_url( $image ),
			the_title_attribute( 'echo=0' )
		);
	}

}

// * Remove the post meta function
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

genesis();
