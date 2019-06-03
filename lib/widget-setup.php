<?php
/**
 * Hello Pro.
 *
 * This file creates widgets used in the Hello Pro Theme.
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

 // * Register widget areas
 genesis_register_sidebar( array(
	 'id'          => 'home-welcome',
	 'name'        => __( 'Home - Welcome', 'hello-pro' ),
	 'description' => __( 'Introduce yourself! Welcome visitors to your homepage by using a text widget in this space with up to 200 characters of establishing copy.', 'hello-pro' ),
 ) );
 genesis_register_sidebar( array(
	 'id'          => 'home-intro',
	 'name'        => __( 'Home - Intro', 'hello-pro' ),
	 'description' => __( 'Setup your message. Add a few brief teaser sentences here, to keep users scrolling further down the Homepage.', 'hello-pro' ),
 ) );
 genesis_register_sidebar( array(
	 'id'          => 'home-cta',
	 'name'        => __( 'Home - Call To Action', 'hello-pro' ),
	 'description' => __( 'Engage your audience. Add your primary call to action text and opt-in form here. Think about what you value you can offer in exchange for their valuable email address.', 'hello-pro' ),
 ) );
 genesis_register_sidebar( array(
	 'id'          => 'home-features',
	 'name'        => __( 'Home - Features', 'hello-pro' ),
	 'description' => __( 'This three-column widget area can display text, recent posts, or page excerpts. We recommend highlighting three services, products, or features of your business, practice, or organization.', 'hello-pro' ),
 ) );
 genesis_register_sidebar( array(
	 'id'          => 'home-statement',
	 'name'        => __( 'Home - Statement', 'hello-pro' ),
	 'description' => __( 'Make a bold statement! Put up to 70 characters of text here.', 'hello-pro' ),
 ) );
 genesis_register_sidebar( array(
	 'id'          => 'home-portfolio',
	 'name'        => __( 'Home - Portfolio', 'hello-pro' ),
	 'description' => __( 'Show off your work. Use featured images to pull 3, 6, or 9 portfolio items into this homepage feature area. Also works with posts or pages.', 'hello-pro' ),
 ) );
 genesis_register_sidebar( array(
	 'id'          => 'home-testimonial',
	 'name'        => __( 'Home - Testimonial', 'hello-pro' ),
	 'description' => __( 'Let others do the talking. Feature a client quote or testimonial (or other content) in this space at the bottom of your homepage.', 'hello-pro' ),
 ) );
