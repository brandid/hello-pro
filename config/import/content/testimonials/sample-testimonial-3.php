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

$author_name      = __( 'Quote Author', 'hellopro' );
$author_title     = __( 'Business or Professional Title', 'hellopro' );
$testimonial_text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis bibendum ipsum, nec scelerisque metus. Suspendisse ultrices in risus et aliquam. Maecenas ut risus mauris. Sed luctus diam vitae faucibus venenatis.';

return array(
	'socialproofslider_testimonial_author_name'  => '<p>' . $author_name . '</p>',
	'socialproofslider_testimonial_author_title' => '<p>' . $author_title . '</p>',
	'socialproofslider_testimonial_text'         => '<p>' . $testimonial_text . '</p>',
);
