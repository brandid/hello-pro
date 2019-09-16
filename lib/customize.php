<?php
/**
 * Loads Customizer settings for Hello Pro theme.
 *
 * @since 3.0.1
 *
 * @package Hello Pro Theme
 */

/**
 * Register settings and controls with the Customizer.
 *
 * @since 3.0.1
 */
add_action( 'customize_register', 'hellopro_register_customizer' );
function hellopro_register_customizer() {

	global $wp_customize;

	/* SITE TITLE DISPLAY
	--------------------------------------------------------------------- */
	$wp_customize->add_setting('site_title_display', array(
			'default'			=> 'display_text',
			'type'				=> 'theme_mod',
			'transport'			=> 'refresh',
			'sanitize_callback' => 'hellopro_sanitize_select',
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'site_title_display',
			array(
                'label' => esc_html__( 'Site Title Display', 'hello-pro' ),
                'section' => 'title_tagline',
                'type' => 'select',
                'choices' => array(
                    'display_text' => esc_html__('Show Title & Tagline','hello-pro'),
                    'display_logo' => esc_html__('Show Logo Image','hello-pro')
                )
            )
		)
	);

	// Add 'Hello! Pro Settings' Panel.
	$wp_customize->add_section(
		'hellopro_settings',
		array(
			'title'    => __( 'Hello! Pro Settings', 'hello-pro' ),
			'priority' => 30,
		)
	);

	// Add Blog Carousel Setting.
	$wp_customize->add_setting(
		'enable_blog_carousel',
		array(
			'default'           => true,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'hellopro_sanitize_checkbox',
		)
	);

	// Add Blog Carousel Control.
	$wp_customize->add_control(
		new Hello_Pro_Toggle_Control(
			$wp_customize,
			'enable_blog_carousel',
			array(
				'label'       => __( 'Blog "Featured Articles" Slider', 'hello-pro' ),
				'section'     => 'hellopro_settings',
				'settings'    => 'enable_blog_carousel',
				'description' => __( 'Enable or Disable the Featured Articles Carousel Slider on the Blog Archive pages.', 'hello-pro' ),
			)
		)
	);

	$wp_customize->add_section('header_settings' , array(
			'title'     => __( 'Sticky Header', 'hello-pro' ),
			'priority'  => 70,
	));

	// Add Sticky Header Setting.
	$wp_customize->add_setting('fixed_header_off', array(
			'default'    => false,
			'type'     => 'theme_mod',
			'sanitize_callback' => 'hellopro_sanitize_checkbox',
	));

	// Add Sticky Header Control.
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fixed_header_off',
			array(
				'label'     => __( 'Turn OFF the Sticky Header Navigation — (no "sticky" behavior)', 'hello-pro' ),
				'section'   => 'header_settings',
				'settings'  => 'fixed_header_off',
				'type'      => 'checkbox',
			)
		)
	);

	/* PRIMARY COLOR OPTION
	--------------------------------------------------------------------- */
	$wp_customize->add_setting(
		'hello_pro_link_color',
		array(
			'default'           => hello_pro_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'hello_pro_link_color',
			array(
				'description' => __( 'Change the main accent color used in various elements in the theme.', 'hello-pro' ),
				'label'       => __( 'Primary/Accent Color', 'hello-pro' ),
				'section'     => 'colors',
				'settings'    => 'hello_pro_link_color',
			)
		)
	);

	/* SECONDARY COLOR OPTION
	--------------------------------------------------------------------- */
	$wp_customize->add_setting(
		'hello_pro_accent_color',
		array(
			'default'           => hello_pro_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'hello_pro_accent_color',
			array(
				'description' => __( 'Change the hover color for buttons.', 'hello-pro' ),
				'label'       => __( 'Secondary Color', 'hello-pro' ),
				'section'     => 'colors',
				'settings'    => 'hello_pro_accent_color',
			)
		)
	);

}

/**
 * Checkbox sanitization callback.
 *
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * as a boolean value, either TRUE or FALSE.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
function hellopro_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

/**
 * Select sanitization callback.
 *
 * Sanitization callback for 'select' type controls.
 * This callback sanitizes `$setting` as a string value.
 *
 * @param string $input The selected item.
 * @param string $setting The select element.
 * @return string The sanitized input, or the default value if not clean.
 */
function hellopro_sanitize_select( $input, $setting ){

	//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
	$input = sanitize_key( $input );

	//get the list of possible select options
	$choices = $setting->manager->get_control( $setting->id )->choices;

	//return input if valid or return default option
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}
