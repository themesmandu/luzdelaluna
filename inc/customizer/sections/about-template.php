<?php
/**
 * About template settings.
 *
 * @package Luzdelaluna
 */


/**
 *
 * Add Section
 */
$wp_customize->add_section(
	'about_options',
	array(
		'title'      => __( 'About Page', 'luzdelaluna' ),
		'capability' => 'edit_theme_options',
	)
);

for ( $i = 1; $i <= 2; $i++ ) {

	// Setting image
	$wp_customize->add_setting(
		'about_image_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'about_image_' . $i,
			array(
				'section' => 'about_options',
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Featured Image %d', 'luzdelaluna' ), $i ),
			)
		)
	);


	// Setting.
	$wp_customize->add_setting(
		'about_subheading_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'about_subheading_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Sub-heading %d', 'luzdelaluna' ), $i ),
				'section' => 'about_options',
				'type'    => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'about_heading_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'about_heading_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Heading %d', 'luzdelaluna' ), $i ),
				'section' => 'about_options',
				'type'    => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'about_content_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'about_content_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Content %d', 'luzdelaluna' ), $i ),
				'section' => 'about_options',
				'type'    => 'textarea',
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
				'section' => 'about_options',
				'content' => '<p><hr></p>',
			)
		)
	);
}

	// Setting.
	$wp_customize->add_setting(
		'about_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'about_text',
			array(
				'label'   => __( 'Text', 'luzdelaluna'),
				'section' => 'about_options',
				'type'    => 'text',
			)
		)
	);

	//setting link
	$wp_customize->add_setting(
		'about_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'about_link',
			array(
				'label'   => __( 'Text Link', 'luzdelaluna'),
				'section' => 'about_options',
				'type'    => 'text',
			)
		)
	);

		// Setting.
		$wp_customize->add_setting(
			'about_content',
			array(
				'default'           => '',
				'sanitize_callback' => 'wp_kses_post',
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'about_content',
				array(
					'label'   => __( 'Prtfolio Content', 'luzdelaluna' ),
					'section' => 'about_options',
					'type'    => 'textarea',
				)
			)
		);

	// Setting.
	$wp_customize->add_setting(
		'about_text_2',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'about_text_2',
			array(
				'label'   => __( 'Portflio Text', 'luzdelaluna'),
				'section' => 'about_options',
				'type'    => 'text',
			)
		)
	);

	//setting link
	$wp_customize->add_setting(
		'about_link_2',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'about_link_2',
			array(
				'label'   => __( 'Portfolio Link', 'luzdelaluna'),
				'section' => 'about_options',
				'type'    => 'text',
			)
		)
	);
