<?php
/**
 * Hello Pro - Theme supports declarations.
 *
 * @since 3.0
 *
 * @package Hello Pro
 */

return array(
	'custom-logo'                     => array(
		'height'      => 120,
		'width'       => 700,
		'flex-height' => true,
		'flex-width'  => true,
	),
	'html5'                           => array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	),
	'genesis-accessibility'           => array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	),
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 3,
	'genesis-menus'                   => array(
		'primary'         => __( 'Header Right Menu', 'coursemaker' ),
		'primary-members' => __( 'Header Right Menu - Members', 'coursemaker' ),
		'secondary'       => __( 'Footer Menu', 'coursemaker' ),
	),
);
