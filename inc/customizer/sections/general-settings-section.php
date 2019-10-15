<?php
/**
 * General settings section.
 *
 * @package Luzdelaluna
 */


/**
 *
 * Add Section
 */
$wp_customize->add_section(
	'general_options',
	array(
		'title'      => __( 'General Settings', 'luzdelaluna' ),
		'capability' => 'edit_theme_options',
		'priority'   => 160,
	)
);


$wp_customize->add_setting(
	'sidebar_position',
	array(
		'default'           => 'right',
		'type'              => 'theme_mod',
		'sanitize_callback' => 'luzdelaluna_sanitize_sidebar_position',
		'capability'        => 'edit_theme_options',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'sidebar_position',
		array(
			'label'    => __( 'Sidebar Displays', 'luzdelaluna' ),
			'section'  => 'general_options',
			'settings' => 'sidebar_position',
			'type'     => 'select',
			'choices'  => array(
				'right' => __( 'Right sidebar', 'luzdelaluna' ),
				'left'  => __( 'Left sidebar', 'luzdelaluna' ),
				'none'  => __( 'No sidebar', 'luzdelaluna' ),
			),
			'priority' => '15',
		)
	)
);

// Setting toggle cart.
$wp_customize->add_setting(
	'mainmenu_cart_toggle',
	array(
		'default'           => 1,
		'sanitize_callback' => 'luzdelaluna_switch_sanitize',
	)
);

$wp_customize->add_control(
	new Luzdelaluna_Toggle_Switch_Custom_Control(
		$wp_customize,
		'mainmenu_cart_toggle',
		array(
			'label'       => esc_html__( 'Show Shoping Cart on Menu ' ),
			'description' => __( 'Note: This option only works when published', 'luzdelaluna' ),
			'section'     => 'general_options',
		)
	)
);
