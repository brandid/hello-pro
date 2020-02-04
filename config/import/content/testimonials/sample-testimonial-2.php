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

$author_name      = __( 'Wendy Bedell', 'hellopro' );
$author_title     = __( 'berrienchild.org', 'hellopro' );
$testimonial_text = 'Hello! Pro is gorgeous right out the box! Love the styling. Great job team.';

return array(
	'socialproofslider_testimonial_author_name'  => '<p>' . $author_name . '</p>',
	'socialproofslider_testimonial_author_title' => '<p>' . $author_title . '</p>',
	'socialproofslider_testimonial_text'         => '<p>' . $testimonial_text . '</p>',
);
