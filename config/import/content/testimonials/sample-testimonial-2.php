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

$author_name      = __( 'Testimonial Author', 'hellopro' );
$author_title     = __( 'Business or Professional Title', 'hellopro' );
$testimonial_text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elit est, malesuada id turpis vitae, fermentum egestas mauris. Phasellus convallis dolor a pretium varius. Aliquam lacinia elit quis egestas tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

return array(
	'socialproofslider_testimonial_author_name'  => '<p>' . $author_name . '</p>',
	'socialproofslider_testimonial_author_title' => '<p>' . $author_title . '</p>',
	'socialproofslider_testimonial_text'         => '<p>' . $testimonial_text . '</p>',
);
