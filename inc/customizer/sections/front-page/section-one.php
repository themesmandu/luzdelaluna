<?php
/**
 * Section one settings.
 *
 * @package Luzdelaluna
 */

/**
 *
 * Add Section Section one to Panel
 */
$wp_customize->add_section(
	'frontpage_section_one',
	array(
		'title' => __( 'Section One', 'luzdelaluna' ),
		'panel' => 'frontpage_options',
	)
);

for ( $i = 1; $i <= 2; $i++ ) {

	// Setting image
	$wp_customize->add_setting(
		'section_one_image_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'section_one_image_' . $i,
			array(
				'section' => 'frontpage_section_one',
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Featured Image %d', 'luzdelaluna' ), $i ),
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'section_one_hover_content_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'section_one_hover_content_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Image Hover Content %d', 'luzdelaluna' ), $i ),
				'section' => 'frontpage_section_one',
				'type'    => 'textarea',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'section_one_subheading_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'section_one_subheading_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Sub-heading %d', 'luzdelaluna' ), $i ),
				'section' => 'frontpage_section_one',
				'type'    => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'section_one_heading_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'section_one_heading_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Heading %d', 'luzdelaluna' ), $i ),
				'section' => 'frontpage_section_one',
				'type'    => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'section_one_content_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'section_one_content_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Content %d', 'luzdelaluna' ), $i ),
				'section' => 'frontpage_section_one',
				'type'    => 'textarea',
			)
		)
	);



	//setting link
	$wp_customize->add_setting(
		'section_one_link_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'section_one_link_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Arrow Link %d', 'luzdelaluna' ), $i ),
				'section' => 'frontpage_section_one',
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
				'section' => 'frontpage_section_one',
				'content' => '<p><hr></p>',
			)
		)
	);
}



