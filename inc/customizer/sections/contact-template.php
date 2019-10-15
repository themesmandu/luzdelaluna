<?php
/**
 * Contact template settings.
 *
 * @package Luzdelaluna
 */


/**
 *
 * Add Section
 */
$wp_customize->add_section(
	'contact_options',
	array(
		'title'      => __( 'Contact Page', 'luzdelaluna' ),
		'capability' => 'edit_theme_options',
	)
);

// Setting.
$wp_customize->add_setting(
	'contact_heading',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'contact_heading',
		array(
			'label'   => __( 'Heading', 'luzdelaluna' ),
			'section' => 'contact_options',
			'type'    => 'text',
		)
	)
);

// Setting.
$wp_customize->add_setting(
	'contact_address',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'contact_address',
		array(
			'label'   => __( 'Address', 'luzdelaluna' ),
			'section' => 'contact_options',
			'type'    => 'text',
		)
	)
);

// Setting.
$wp_customize->add_setting(
	'contact_phone',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'contact_phone',
		array(
			'label'   => __( 'Phone', 'luzdelaluna' ),
			'section' => 'contact_options',
			'type'    => 'text',
		)
	)
);

// Setting.
$wp_customize->add_setting(
	'contact_description',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_textarea_field',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'contact_description',
		array(
			'label'   => __( 'Description', 'luzdelaluna' ),
			'section' => 'contact_options',
			'type'    => 'textarea',
		)
	)
);

// Setting.
$wp_customize->add_setting(
	'contact_map',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'contact_map',
		array(
			'label'   => __( 'Map Iframe HTML', 'luzdelaluna' ),
			'section' => 'contact_options',
			'type'    => 'textarea',
		)
	)
);

// Setting.
$wp_customize->add_setting(
	'contact_heading_form',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'contact_heading_form',
		array(
			'label'   => __( 'Heading Form', 'luzdelaluna' ),
			'section' => 'contact_options',
			'type'    => 'text',
		)
	)
);

// Setting.
$wp_customize->add_setting(
	'contact_subheading_form',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'contact_subheading_form',
		array(
			'label'   => __( 'Sub-Heading Form', 'luzdelaluna' ),
			'section' => 'contact_options',
			'type'    => 'text',
		)
	)
);

// Setting instagram shortcode.
$wp_customize->add_setting(
	'contact_shortcode',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'contact_shortcode',
		array(
			'label'   => __( 'Contact Form 7 Plugin Shortcode', 'beatsmandu' ),
			'section' => 'contact_options',
			'type'    => 'text',
		)
	)
);
