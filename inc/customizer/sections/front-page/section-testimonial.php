<?php
/**
 * Section testimonial settings.
 *
 * @package Luzdelaluna
 */

/**
 *
 * Add Section Section one to Panel
 */
$wp_customize->add_section(
	'frontpage_section_testimonial',
	array(
		'title' => __( 'Section Testimonial', 'luzdelaluna' ),
		'panel' => 'frontpage_options',
	)
);

// Setting.
$wp_customize->add_setting(
	'testimonial_subheading',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);
// Setting toggle section.
$wp_customize->add_setting(
	'frontpage_section_testimonial_toggle',
	array(
		'default'           => 0,
		'sanitize_callback' => 'luzdelaluna_switch_sanitize',
	)
);

$wp_customize->add_control(
	new Luzdelaluna_Toggle_Switch_Custom_Control(
		$wp_customize,
		'frontpage_section_testimonial_toggle',
		array(
			'label'   => esc_html__( 'Show Testimonial Section', 'luzdelaluna' ),
			'section' => 'frontpage_section_testimonial',
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'testimonial_subheading',
		array(
			'label'   => __( 'Sub-heading', 'luzdelaluna' ),
			'section' => 'frontpage_section_testimonial',
			'type'    => 'text',
		)
	)
);

// Setting.
$wp_customize->add_setting(
	'testimonial_heading',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'testimonial_heading',
		array(
			'label'   => __( 'Heading', 'luzdelaluna' ),
			'section' => 'frontpage_section_testimonial',
			'type'    => 'text',
		)
	)
);

	// separator
	$wp_customize->add_setting( 'separator_testimonial', array() );
	$wp_customize->add_control(
		new Luzdelaluna_Html_Control(
			$wp_customize,
			'separator_testimonial',
			array(
				'section' => 'frontpage_section_testimonial',
				'content' => '<p><hr></p>',
			)
		)
	);

	for ( $i = 1; $i <= 6; $i++ ) {

		// Setting image
		$wp_customize->add_setting(
			'testimonial_image_' . $i,
			array(
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Media_Control(
				$wp_customize,
				'testimonial_image_' . $i,
				array(
					'section' => 'frontpage_section_testimonial',
					/* translators: %d: image number. */
					'label'   => sprintf( __( 'Testimonial Image %d', 'luzdelaluna' ), $i ),
				)
			)
		);

		// Setting.
		$wp_customize->add_setting(
			'testimonial_content_' . $i,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_textarea_field',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'testimonial_content_' . $i,
				array(
					/* translators: %d: image number. */
					'label'   => sprintf( __( 'Testimony %d', 'luzdelaluna' ), $i ),
					'section' => 'frontpage_section_testimonial',
					'type'    => 'textarea',
				)
			)
		);

		// Setting.
		$wp_customize->add_setting(
			'testimonial_client_name_' . $i,
			array(
				'default'           => '',
				'sanitize_callback' => 'wp_kses_post',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'testimonial_client_name_' . $i,
				array(
					/* translators: %d: image number. */
					'label'   => sprintf( __( 'Client Name %d', 'luzdelaluna' ), $i ),
					'section' => 'frontpage_section_testimonial',
					'type'    => 'text',
				)
			)
		);

		// Setting.
		$wp_customize->add_setting(
			'testimonial_client_occupation_' . $i,
			array(
				'default'           => '',
				'sanitize_callback' => 'wp_kses_post',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'testimonial_client_occupation_' . $i,
				array(
					/* translators: %d: image number. */
					'label'   => sprintf( __( 'Client Occupation %d', 'luzdelaluna' ), $i ),
					'section' => 'frontpage_section_testimonial',
					'type'    => 'text',
				)
			)
		);

		// separator
		$wp_customize->add_setting( 'separator_' . $i, array() );
		$wp_customize->add_control(
			new Luzdelaluna_Html_Control(
				$wp_customize,
				'separator_' . $i,
				array(
					'section' => 'frontpage_section_testimonial',
					'content' => '<p><hr></p>',
				)
			)
		);
	}



