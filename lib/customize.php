<?php
/**
 * Loads Customizer settings for Hello Pro theme.
 *
 * @since 3.0.1
 *
 * @package Hello Pro Theme
 */

add_action( 'customize_register', 'hellopro_register_customizer' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 3.0.1
 */
function hellopro_register_customizer() {

	global $wp_customize;

	$appearance = genesis_get_config( 'appearance' );

	// Add 'Site Title Display' setting.
	$wp_customize->add_setting(
		'site_title_display',
		array(
			'default'           => 'display_text',
			'type'              => 'theme_mod',
			'transport'         => 'refresh',
			'sanitize_callback' => 'hellopro_sanitize_select',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'site_title_display',
			array(
				'label'   => esc_html__( 'Site Title Display', 'hello-pro' ),
				'section' => 'title_tagline',
				'type'    => 'select',
				'choices' => array(
					'display_text' => esc_html__( 'Show Title & Tagline', 'hello-pro' ),
					'display_logo' => esc_html__( 'Show Logo Image', 'hello-pro' ),
				),
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

	// Add Sticky Header Setting.
	$wp_customize->add_setting(
		'sticky_header',
		array(
			'default'           => true,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'hellopro_sanitize_checkbox',
		)
	);

	// Add Sticky Header Control.
	$wp_customize->add_control(
		new Hello_Pro_Toggle_Control(
			$wp_customize,
			'sticky_header',
			array(
				'label'       => __( 'Sticky Header', 'hello-pro' ),
				'section'     => 'hellopro_settings',
				'settings'    => 'sticky_header',
				'description' => __( 'Enable or Disable the Sticky Header. Turning this ON will keep the header in place while you scroll the page. Turning this OFF will make the header scroll with the rest of the page content. This effect is disabled for mobile devices.', 'hello-pro' ),
			)
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

	// Add Blog Categories List Setting.
	$wp_customize->add_setting(
		'enable_blog_categories',
		array(
			'default'           => true,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'hellopro_sanitize_checkbox',
		)
	);

	// Add Blog Categories List Control.
	$wp_customize->add_control(
		new Hello_Pro_Toggle_Control(
			$wp_customize,
			'enable_blog_categories',
			array(
				'label'       => __( 'Blog Categories List', 'hello-pro' ),
				'section'     => 'hellopro_settings',
				'settings'    => 'enable_blog_categories',
				'description' => __( 'Enable or Disable the list of Blog Categories on Archive pages.', 'hello-pro' ),
			)
		)
	);

	// Add Use Blog Grid Layout Setting.
	$wp_customize->add_setting(
		'enable_blog_grid_layout',
		array(
			'default'           => true,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'hellopro_sanitize_checkbox',
		)
	);

	// Add Default Lifter Styles Control.
	$wp_customize->add_control(
		new Hello_Pro_Toggle_Control(
			$wp_customize,
			'enable_blog_grid_layout',
			array(
				'label'       => __( 'Enable Blog Grid Layout', 'coursemaker' ),
				'section'     => 'hellopro_settings',
				'settings'    => 'enable_blog_grid_layout',
				'description' => __( 'Show blog posts in a grid on the archive page.', 'coursemaker' ),
			)
		)
	);

	// Add Blog Grid Columns Setting.
	$wp_customize->add_setting(
		'blog_grid_cols',
		array(
			'default'           => 'col-3',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'hellopro_sanitize_select',
		)
	);

	// Add Default Lifter Styles Control.
	$wp_customize->add_control(
		'blog_grid_cols',
		array(
			'type'        => 'select',
			'section'     => 'hellopro_settings',
			'label'       => __( 'Blog Grid Columns', 'hellopro' ),
			'description' => __( 'Choose how many columns to display in the blog grid.' ),
			'choices'     => array(
				'col-2' => __( '2 Columns', 'hellopro' ),
				'col-3' => __( '3 Columns', 'hellopro' ),
				'col-4' => __( '4 Columns', 'hellopro' ),
			),
		)
	);

	// Add 'Primary Color' setting.
	$wp_customize->add_setting(
		'hello_pro_link_color',
		array(
			'default'           => $appearance['default-colors']['primary'],
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

	// Add 'Secondary Color' setting.
	$wp_customize->add_setting(
		'hello_pro_accent_color',
		array(
			'default'           => $appearance['default-colors']['secondary'],
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
function hellopro_sanitize_select( $input, $setting ) {

	// Input - must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only.
	$input = sanitize_key( $input );

	// Get the list of possible select options.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// Return input if valid or return default option.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}

// Enqueue JS which will show/hide a control based on another control's status.
add_action( 'customize_controls_enqueue_scripts', 'hellopro_customizer_conditional_select' );
/**
 * Custom contextual controls
 */
function hellopro_customizer_conditional_select() {
	wp_enqueue_script( 'hellopro-conditionalselect', get_stylesheet_directory_uri() . '/js/customizer.js?v=' . rand(), array( 'customize-controls' ), false );
}
