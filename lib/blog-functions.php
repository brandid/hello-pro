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
function hello_pro_output_category_list() {

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
 * Outputs all posts with "Featured Article" meta data.
 *
 * @return string
 */
function hello_pro_show_featured_articles() {

	$args = array(
		'meta_query'          => array( // phpcs:ignore
			array(
				'key'     => '_hellopro_featured_article',
				'value'   => '1',
				'compare' => '=',
			),
		),
		'ignore_sticky_posts' => 1,
	);

	// Create a new WP_Query.
	$featured_article_query = new WP_Query( $args );

	// Exit if no posts are marked as "Featured Articles".
	if ( ! $featured_article_query->have_posts() ) {
		return;
	}

	// Begin Output Buffering.
	ob_start();

	// Open the featured articles content container.
	echo '<div class="featured-articles">';

	if ( $featured_article_query->have_posts() ) {

		while ( $featured_article_query->have_posts() ) {

			$featured_article_query->the_post();

			$post_id = get_the_ID();

			// Create character limit for blog post titles.
			$title_char_limit = 60;

			// Create var with shortened post title.
			$post_title = substr( get_the_title(), 0, $title_char_limit ); // Limit the title to 60 characters.

			// If title is longer than limit, add ellipses.
			if ( strlen( $post_title > $title_char_limit ) ) {
				$post_title .= '...';
			}

			// Open article container.
			echo '<div class="featured-article">';

			// Open text container.
			echo '<div class="text-container">';

			// Show the 'Featured Article' header text.
			echo '<div class="featured-article-item-header">' . esc_html__( 'Featured Article', 'hello-pro' ) . '</div>';

			// Show the Post Title.
			echo '<h2 class="entry-title"><a href="' . esc_url( get_the_permalink() ) . '" class="entry-title-link">' . esc_html( $post_title ) . '</a></h2>';

			// Open the Author info container.
			echo '<div class="author-info">';

			// Get the Author info.
			$the_author    = get_the_author();
			$the_author_id = get_the_author_meta( 'ID' );

			// Get the link to the Author page.
			$the_author_link = get_author_posts_url( $the_author_id );

			// Get the categories of the current post.
			$category = get_the_category();

			// Assign a var to the first category.
			$first_category = $category[0]->cat_name;

			// Get the link to the first category.
			$first_category_link = get_category_link( $category[0] );

			// Show the Author Image.
			echo '<div class="image">';

			echo '<a href="' . esc_html( $the_author_link ) . '">' . get_avatar( $the_author_id, 64 ) . '</a>';

			echo '</div>';

			// Show the Author Text.
			echo '<div class="author-text">';

			echo '<p class="author-name"><a href="' . esc_html( $the_author_link ) . '">' . esc_html( $the_author ) . '</a></p>';

			echo '<p class="post-category"><a href="' . esc_html( $first_category_link ) . '">' . esc_html( $first_category ) . '</a></p>';

			echo '</div>';

			// Close the Author Info container.
			echo '</div>';

			// Close the text container.
			echo '</div>';

			// Show the Featured Image.
			if ( has_post_thumbnail() ) {

				echo '<div class="featured-img">';
				echo '<a href="' . esc_url( get_the_permalink() ) . '">';
				echo get_the_post_thumbnail( $post_id, 'featured-article' );
				echo '</a>';
				echo '</div>';

			}

			// Close the article container.
			echo '</div>';

		}
	}

	// Close the featured articles content container.
	echo '</div>';

	// Output the JS.
	?>
	<script type="text/javascript">
	jQuery(document).ready(function ($) {

		/*
		* Featured Articles Slider
		* uses Slick JS by Ken Wheeler
		* configuration options: https://kenwheeler.github.io/slick/
		--------------------------------------------------------------------- */
		$(".blog-header-extras .featured-articles").not(".slick-initialized").slick({
			autoplay: true,
			autoplaySpeed: 5000,
			adaptiveHeight: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: false,
			arrows: true,
			prevArrow: '<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
			nextArrow: '<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
			dots: true,
			infinite: true,
		});

	});
	</script>
	<?php

	// Save the contents to a var.
	$output = ob_get_contents();

	// End the Output Buffering.
	ob_end_clean();

	// Restore the original Post Data.
	wp_reset_postdata();

	// Return everything.
	return $output;

}

/**
 * Modify the output of the Blog Header.
 *
 * @return string
 */
function hello_pro_blog_header_output() {

	// Set variable to track if this page should show theme blog extras.
	$this_is_slider_page = false;

	// Set var to true if this is the blog Homepage, if this is the blog page, or if this is an Archive page.
	if ( ( is_front_page() && is_home() ) || is_home() || is_archive() ) {
		$this_is_slider_page = true;
	}

	// If this page should not show theme blog extras, return null.
	if ( ! $this_is_slider_page ) {
		return;
	}

	// Get the Customizer settings.
	$enable_blog_carousel   = get_theme_mod( 'enable_blog_carousel', true );
	$enable_blog_categories = get_theme_mod( 'enable_blog_categories', true );

	// Exit if both "disable" Customizer settings are disabled.
	if ( ! $enable_blog_carousel && ! $enable_blog_categories ) {
		return;
	}

	// Start Output Buffering.
	ob_start();

	// Open the full-width container.
	echo '<div class="entry-content blog-header-extras">';
	echo '<div class="alignfull" style="padding: 0 8%;">';
	echo '<div class="container-content" style="max-width: 1200px; margin: 0 auto;">';

	// Show the Featured Articles slider.
	if ( $enable_blog_carousel ) {

		$featured_articles_items = hello_pro_show_featured_articles();

		echo $featured_articles_items; // phpcs:ignore

	}

	// Show the Blog Categories list.
	if ( $enable_blog_categories ) {

		$categories_list = hello_pro_output_category_list();

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
add_action( 'genesis_before_loop', 'hello_pro_blog_header_output', 20 );

// Open a wrapper around the blog posts.
add_action( 'genesis_before_loop', 'hello_pro_blog_wrapper_open', 30 );
/**
 * Adds a wrapper div around blog posts.
 */
function hello_pro_blog_wrapper_open() {

	if ( ! is_home() && ! is_archive() ) {
		return;
	}

	$blog_grid_layout = get_theme_mod( 'enable_blog_grid_layout', true );
	$col_setting      = get_theme_mod( 'blog_grid_cols', 'col-3' );

	if ( ! empty( $blog_grid_layout ) ) {
		echo '<div class="blog-posts-wrap ' . esc_html( $col_setting ) . '">';
		echo '<div class="alignfull" style="padding: 0 8%;">';
		echo '<div class="blog-posts-wrap-content">';
	}

}

// Close the wrapper around the blog posts.
add_action( 'genesis_after_loop', 'hello_pro_blog_wrapper_close', 30 );
/**
 * Closes the wrapper div around blog posts.
 */
function hello_pro_blog_wrapper_close() {

	if ( ! is_home() && ! is_archive() ) {
		return;
	}

	$blog_grid_layout = get_theme_mod( 'enable_blog_grid_layout', true );

	if ( ! empty( $blog_grid_layout ) ) {
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}

}
