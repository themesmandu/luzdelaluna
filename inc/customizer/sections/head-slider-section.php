<?php
/**
 * Head slider section settings.
 *
 * @package Luzdelaluna
 */

/**
 *
 * Add Section Head Slider to Panel
 */
$wp_customize->add_section(
	'frontpage_slider',
	array(
		'title' => __( 'Header Slider Settings', 'luzdelaluna' ),
	)
);

// Setting
$wp_customize->add_setting(
	'slider_toggle',
	array(
		'default'           => 0,
		'sanitize_callback' => 'luzdelaluna_switch_sanitize',
	)
);

$wp_customize->add_control(
	new Luzdelaluna_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slider_toggle',
		array(
			'label'   => esc_html__( 'Show Header Slider' ),
			'section' => 'frontpage_slider',
		)
	)
);

// Setting.
$wp_customize->add_setting(
	'slider_title',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'slider_title',
		array(
			'label'   => __( 'Slider Heading', 'luzdelaluna' ),
			'section' => 'frontpage_slider',
			'type'    => 'text',
		)
	)
);

// Setting.
$wp_customize->add_setting(
	'slider_button_label',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'slider_button_label',
		array(
			'label'   => __( 'Button Label', 'luzdelaluna' ),
			'section' => 'frontpage_slider',
			'type'    => 'text',
		)
	)
);

$wp_customize->add_setting(
	'slider_button_link',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'slider_button_link',
		array(
			'label'   => __( 'Button Link', 'luzdelaluna' ),
			'section' => 'frontpage_slider',
			'type'    => 'text',
		)
	)
);

for ( $i = 1; $i <= 6;$i++ ) {
	// Setting.
	$wp_customize->add_setting(
		'slider_image_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'slider_image_' . $i,
			array(
				'section' => 'frontpage_slider',
				/* translators: %d: image number. */
				'label'   => sprintf( __( 'Slider Image %d', 'luzdelaluna' ), $i ),
				'width'   => 1920,
				'height'  => 930,
			)
		)
	);
}

