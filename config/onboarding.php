<?php
/**
 * Hello! Pro - Homepage Auto-setup settings
 *
 * Onboarding config to load plugins and demo content on theme activation.
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

return array(
	'dependencies'     => array(
		'plugins' => array(
			array(
				'name'       => __( 'Genesis Blocks', 'coursemaker' ),
				'slug'       => 'genesis-blocks/genesis-blocks.php',
				'public_url' => 'https://wordpress.org/plugins/genesis-blocks/',
			),
			array(
				'name'       => __( 'Social Proof Slider', 'hello-pro' ),
				'slug'       => 'social-proof-testimonials-slider/social-proof-slider.php',
				'public_url' => 'https://wordpress.org/plugins/social-proof-testimonials-slider/',
			),
			array(
				'name'       => __( 'Simple Social Icons', 'hello-pro' ),
				'slug'       => 'simple-social-icons/simple-social-icons.php',
				'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
			),
		),
	),
	'content'          => array(
		'homepage' => array(
			'post_title'     => 'Homepage',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/homepage.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/blocks.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'about'    => array(
			'post_title'     => 'About Me',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/blocks.php',
			'featured_image' => CHILD_URL . '/config/import/images/about-featuredimage-default.jpg',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'blocks'   => array(
			'post_title'     => 'Block Content Examples',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/block-examples.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/blocks.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'blog'                 => array(
			'post_title'     => 'Blog',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/blog.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => array( '_genesis_layout' => 'full-width-content' ),
		),
		'landing'  => array(
			'post_title'     => 'Landing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/landing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/blocks.php',
			'featured_image' => CHILD_URL . '/config/import/images/landingpage-featuredimage-default.jpg',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'contact'  => array(
			'post_title'     => 'Contact Me',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/contact.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/blocks.php',
			'featured_image' => CHILD_URL . '/config/import/images/contact-featuredimage-default.jpg',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		/* SAMPLE BLOG POSTS */
		'Sample Blog Post 1' => array(
			'post_title'     => 'Sample Blog Post 1',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-1.php',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-1.jpg', // Photo by Teymi Townsend on Unsplash.
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => array(
				'_hellopro_featured_article' => 1,
			),
		),
		'Sample Blog Post 2' => array(
			'post_title'     => 'Sample Blog Post 2',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-2.php',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-2.jpg', // Photo by Gerardo Marrufo on Unsplash.
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'Sample Blog Post 3' => array(
			'post_title'     => 'Sample Blog Post 3',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-3.php',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-3.jpg', // Photo by Ali Pazani on Unsplash.
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => array(
				'_hellopro_featured_article' => 1,
			),
		),
		'Sample Blog Post 4' => array(
			'post_title'     => 'Sample Blog Post 4',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-4.php',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-4.jpg', // Photo by Constantinos Panagopoulos on Unsplash.
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'Sample Blog Post 5' => array(
			'post_title'     => 'Sample Blog Post 5',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-5.php',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-5.jpg', // Photo by Autumn Goodman on Unsplash.
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		),
		'Sample Blog Post 6' => array(
			'post_title'     => 'Sample Blog Post 6',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-6.php',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-6.jpg', // Photo by Charles Postiaux on Unsplash.
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => array(
				'_hellopro_featured_article' => 1,
			),
		),
		/* SAMPLE TESTIMONIALS */
		'Sample Testimonial 1' => array(
			'post_title'     => 'Sample Testimonial 1',
			'post_content'   => '',
			'post_type'      => 'socialproofslider',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => require dirname( __FILE__ ) . '/import/content/testimonials/sample-testimonial-1.php',
		),
		'Sample Testimonial 2' => array(
			'post_title'     => 'Sample Testimonial 2',
			'post_content'   => '',
			'post_type'      => 'socialproofslider',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => require dirname( __FILE__ ) . '/import/content/testimonials/sample-testimonial-2.php',
		),
		'Sample Testimonial 3' => array(
			'post_title'     => 'Sample Testimonial 3',
			'post_content'   => '',
			'post_type'      => 'socialproofslider',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => require dirname( __FILE__ ) . '/import/content/testimonials/sample-testimonial-3.php',
		),
	),
	'navigation_menus' => array(
		// Header Navigation.
		'primary'   => array(
			'homepage' => array(
				'title' => 'Home',
			),
			'about'    => array(
				'title' => 'About Me',
			),
			'blog'    => array(
				'title' => 'Blog',
			),
			'blocks'   => array(
				'title' => 'Block Examples',
			),
			'landing'  => array(
				'title' => 'Landing Page',
			),
			'contact'  => array(
				'title' => 'Contact Me',
			),
		),
		// Footer Navigation.
		'secondary' => array(
			'homepage' => array(
				'title' => 'Home',
			),
			'about'    => array(
				'title' => 'About Me',
			),
			'landing'  => array(
				'title' => 'Landing Page',
			),
			'contact'  => array(
				'title' => 'Contact Me',
			),
		),
	),
);
