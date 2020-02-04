<?php
/**
 * Hello! Pro - One-Click Demo Install - Sample Testimonial content.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$author_name      = __( 'Satisfied Customer', 'hellopro' );
$author_title     = __( 'Business or Professional Title', 'hellopro' );
$testimonial_text = __( "The brandiD is an amazing agency. Their personal branding course wasn't just useful, it was fun, too -- and it gave me the confidence I need to start my own business.", 'hellopro' );

return array(
	'socialproofslider_testimonial_author_name'  => '<p>' . $author_name . '</p>',
	'socialproofslider_testimonial_author_title' => '<p>' . $author_title . '</p>',
	'socialproofslider_testimonial_text'         => '<p>' . $testimonial_text . '</p>',
);
