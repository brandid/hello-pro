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

$author_name      = __( 'Vivian Ngai', 'hellopro' );
$author_title     = __( 'oliviachubey.com', 'hellopro' );
$testimonial_text = 'The Hello! Pro theme is awesome because it’s already designed for personality brands, yet allowed me to personalize and customize where needed.';

return array(
	'socialproofslider_testimonial_author_name'  => '<p>' . $author_name . '</p>',
	'socialproofslider_testimonial_author_title' => '<p>' . $author_title . '</p>',
	'socialproofslider_testimonial_text'         => '<p>' . $testimonial_text . '</p>',
);
