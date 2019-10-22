<?php
/**
 * Hello! Pro - Homepage Auto-setup settings
 *
 * Onboarding config to load plugins and homepage content on theme activation.
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
				'name'       => __( 'Atomic Blocks', 'hello-pro' ),
				'slug'       => 'atomic-blocks/atomicblocks.php',
				'public_url' => 'https://atomicblocks.com/',
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
		'blocks'   => array(
			'post_title'     => 'Block Content Examples',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/block-examples.php',
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
