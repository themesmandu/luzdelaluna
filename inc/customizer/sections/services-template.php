<?php
/**
 * Services template settings.
 *
 * @package Luzdelaluna
 */


/**
 *
 * Add Section
 */
$wp_customize->add_section(
	'services_options',
	array(
		'title'      => __( 'Services Page', 'luzdelaluna' ),
		'capability' => 'edit_theme_options',
	)
);

// Setting.
$wp_customize->add_setting(
	'services_desc',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'services_desc',
		array(
			'label'   => __( 'Description', 'luzdelaluna' ),
			'section' => 'services_options',
			'type'    => 'textarea',
		)
	)
);

// separator
$wp_customize->add_setting( 'separator_services', array() );
$wp_customize->add_control(
	new Luzdelaluna_Html_Control(
		$wp_customize,
		'separator_services',
		array(
			'section' => 'services_options',
			'content' => '<p><hr></p>',
		)
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// Setting.
	$wp_customize->add_setting(
		'services_heading_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'services_heading_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Services Heading %d', 'luzdelaluna' ), $i ),
				'section' => 'services_options',
				'type'    => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'services_desc_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'services_desc_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Services Description %d', 'luzdelaluna' ), $i ),
				'section' => 'services_options',
				'type'    => 'textarea',
			)
		)
	);

	// Setting image
	$wp_customize->add_setting(
		'services_image_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'services_image_' . $i,
			array(
				'section' => 'services_options',
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Services Image %d', 'luzdelaluna' ), $i ),
			)
		)
	);

	//setting link
	$wp_customize->add_setting(
		'services_link_text_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'services_link_text_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Services Link Text %d', 'luzdelaluna' ), $i ),
				'section' => 'services_options',
				'type'    => 'text',
			)
		)
	);

	//setting link
	$wp_customize->add_setting(
		'services_link_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'services_link_' . $i,
			array(
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Services Link %d', 'luzdelaluna' ), $i ),
				'section' => 'services_options',
				'type'    => 'text',
			)
		)
	);

	// separator
	$wp_customize->add_setting( 'separator_services' . $i, array() );
	$wp_customize->add_control(
		new Luzdelaluna_Html_Control(
			$wp_customize,
			'separator_services' . $i,
			array(
				'section' => 'services_options',
				'content' => '<p><hr></p>',
			)
		)
	);



}
