<?php
/**
 * Footer settings.
 *
 * @package Luzdelaluna
 */


/**
 *
 * Add Section
 */
$wp_customize->add_section(
	'footer_options',
	array(
		'title'      => __( 'Footer Settings', 'luzdelaluna' ),
		'capability' => 'edit_theme_options',
		'priority'   => 160,
	)
);


// Setting.
$wp_customize->add_setting(
	'footer_copyright',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_textarea_field',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_copyright',
		array(
			/* translators: %d: image number. */
			'label'   => __( 'Copyright', 'luzdelaluna' ),
			'section' => 'footer_options',
			'type'    => 'textarea',
		)
	)
);
