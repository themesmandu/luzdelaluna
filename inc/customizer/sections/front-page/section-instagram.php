<?php
/**
 * Section instagram settings.
 *
 * @package Luzdelaluna
 */

/**
 *
 * Add Section Section one to Panel
 */
$wp_customize->add_section(
	'frontpage_section_instagram',
	array(
		'title' => __( 'Section Instagram', 'luzdelaluna' ),
		'panel' => 'frontpage_options',
	)
);

// Setting.
$wp_customize->add_setting(
	'instagram_subheading',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instagram_subheading',
		array(
			'label'   => __( 'Sub-heading', 'luzdelaluna' ),
			'section' => 'frontpage_section_instagram',
			'type'    => 'text',
		)
	)
);

// Setting.
$wp_customize->add_setting(
	'instagram_heading',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instagram_heading',
		array(
			'label'   => __( 'Heading', 'luzdelaluna' ),
			'section' => 'frontpage_section_instagram',
			'type'    => 'text',
		)
	)
);

// Setting instagram shortcode.
$wp_customize->add_setting(
	'instagram_shortcode',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instagram_shortcode',
		array(
			'label'   => __( 'Instagram Plugin Shortcode', 'beatsmandu' ),
			'section' => 'frontpage_section_instagram',
			'type'    => 'text',
		)
	)
);



