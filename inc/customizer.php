<?php
/**
 * Luzdelaluna Theme Customizer
 *
 * @param WP_Customize_Manager $wp_customize the Customizer object.
 *
 * @package Luzdelaluna
 */

/**
 * Register different customizer features.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function luzdelaluna_customize_register( $wp_customize ) {

	/**
	 *
	 * Add postMessage support for site title and description for the Theme Customizer.
	 */
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.navbar-brand',
				'render_callback' => 'luzdelaluna_customize_partial_blogname',
			)
		);
	}


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
		'menubar_mode',
		array(
			'default'           => 'standard',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'luzdelaluna_sanitize_menubar_mode',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'menubar_mode',
			array(
				'label'    => __( 'Main Menu Bar Mode', 'luzdelaluna' ),
				'section'  => 'general_options',
				'settings' => 'menubar_mode',
				'type'     => 'select',
				'choices'  => array(
					'standard' => __( 'Standard', 'luzdelaluna' ),
					'alt'      => __( 'Alternative', 'luzdelaluna' ),
				),
				'priority' => '10',
			)
		)
	);

	$wp_customize->add_setting(
		'mainmenu_dropdown_mode',
		array(
			'default'           => 'default',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'luzdelaluna_sanitize_mainmenu_dropdown_mode',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mainmenu_dropdown_mode',
			array(
				'label'       => __( 'Main Menu: drop-down mode', 'luzdelaluna' ),
				'description' => __( 'Default a drop-down submenu by hover, parent link is active. Bootstrap mode: a drop-down submenu by click, the parent link is not active.', 'luzdelaluna' ),
				'section'     => 'general_options',
				'settings'    => 'mainmenu_dropdown_mode',
				'type'        => 'select',
				'choices'     => array(
					'default'   => __( 'Default', 'luzdelaluna' ),
					'bootstrap' => __( 'Bootstrap', 'luzdelaluna' ),
				),
				'priority'    => '10',
			)
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

	/**
	 *
	 * Add Section
	 */
	$wp_customize->add_section(
		'blog_options',
		array(
			'title'      => __( 'Posts page Settings', 'luzdelaluna' ),
			'capability' => 'edit_theme_options',
			'priority'   => 170,
		)
	);

	// Settings.

	$wp_customize->add_setting(
		'blog_pagination_mode',
		array(
			'default'           => 'standard',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'luzdelaluna_sanitize_blog_pagination_mode',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'blog_pagination_mode',
			array(
				'label'    => __( 'Posts page navigation', 'luzdelaluna' ),
				'section'  => 'blog_options',
				'settings' => 'blog_pagination_mode',
				'type'     => 'select',
				'choices'  => array(
					'standard' => __( 'Standard', 'luzdelaluna' ),
					'numeric'  => __( 'Numeric', 'luzdelaluna' ),
				),
				'priority' => '20',
			)
		)
	);

	$wp_customize->add_setting(
		'more_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'more_link',
			array(
				'label'       => __( 'Read More button', 'luzdelaluna' ),
				'description' => __( 'Enter the button name which is a link to the full post. You can leave this blank if you want to hide the button.', 'luzdelaluna' ),
				'section'     => 'blog_options',
				'type'        => 'text',
			)
		)
	);

	/**
	 * Post List helper function.
	 *
	 * @param array $args posts.
	 */
	function luzdelaluna_post_list( $args = array() ) {
		$args       = wp_parse_args( $args, array( 'numberposts' => '-1' ) );
		$posts      = get_posts( $args );
		$output     = array();
		$output[''] = esc_html__( '&mdash; Select Post &mdash;', 'luzdelaluna' );
		foreach ( $posts as $post ) {
			$thetitle  = $post->post_title;
			$getlength = strlen( $thetitle );
			$thelength = 32;

			$thetitle = substr( $thetitle, 0, $thelength );
			if ( $getlength > $thelength ) {
				$thetitle .= '...';
			};
			$output[ $post->ID ] = sprintf( '%s', esc_html( $thetitle ) );
		}
		return $output;
	}

	$wp_customize->add_setting(
		'post_dropdown_setting',
		array(
			'default'           => '',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'post_dropdown_setting',
			array(
				'label'    => __( 'Featured Post', 'luzdelaluna' ),
				'section'  => 'blog_options',
				'settings' => 'post_dropdown_setting',
				'type'     => 'select',
				'choices'  => luzdelaluna_post_list(),
				'priority' => '10',
			)
		)
	);

	$wp_customize->add_setting(
		'blog_layout',
		array(
			'default'           => 'standard',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'luzdelaluna_sanitize_blog_layout',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'blog_layout',
			array(
				'label'    => __( 'Layout Style', 'luzdelaluna' ),
				'section'  => 'blog_options',
				'settings' => 'blog_layout',
				'type'     => 'select',
				'choices'  => array(
					'list'     => esc_html__( 'List', 'luzdelaluna' ),
					'standard' => esc_html__( 'Standard', 'luzdelaluna' ),
				),
				'priority' => '15',
			)
		)
	);

	/**
	 *
	 * Add Panel Front Page Settings
	 */
	$wp_customize->add_panel(
		'frontpage_options',
		array(
			'title'           => __( 'Front Page Settings', 'luzdelaluna' ),
			'priority'        => 190,
			'active_callback' => 'luzdelaluna_set_front_page',
		)
	);

	/**
	 *
	 * Add Section General to Panel
	 */
	$wp_customize->add_section(
		'frontpage_general',
		array(
			'title'    => __( 'General', 'luzdelaluna' ),
			'panel'    => 'frontpage_options',
			'priority' => 10,
		)
	);

	$wp_customize->add_setting(
		'hide_page_title',
		array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'luzdelaluna_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'hide_page_title',
		array(
			'type'    => 'checkbox',
			'label'   => esc_html__( 'Hide Page Title', 'luzdelaluna' ),
			'section' => 'frontpage_general',
		)
	);

	/**
	 *
	 * Add Section Head Banner to Panel
	 */
	$wp_customize->add_section(
		'frontpage_banner',
		array(
			'title'    => __( 'Head Banner', 'luzdelaluna' ),
			'panel'    => 'frontpage_options',
			'priority' => 20,
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'banner_title',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'banner_title',
			array(
				'label'    => __( 'Heading', 'luzdelaluna' ),
				'section'  => 'frontpage_banner',
				'settings' => 'banner_title',
				'type'     => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'banner_subtitle',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'banner_subtitle',
			array(
				'label'    => __( 'Sub-Heading', 'luzdelaluna' ),
				'section'  => 'frontpage_banner',
				'settings' => 'banner_subtitle',
				'type'     => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'banner_button_label',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'banner_button_label',
			array(
				'label'    => __( 'Button Label', 'luzdelaluna' ),
				'section'  => 'frontpage_banner',
				'settings' => 'banner_button_label',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'banner_button_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'banner_button_link',
			array(
				'label'    => __( 'Button Link', 'luzdelaluna' ),
				'section'  => 'frontpage_banner',
				'settings' => 'banner_button_link',
				'type'     => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'banner_bg_color',
		array(
			'default'           => '#FFF',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'banner_bg_color',
			array(
				'label'   => esc_html__( 'Background Color', 'luzdelaluna' ),
				'section' => 'frontpage_banner',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'banner_bg_image',
		array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'banner_bg_image',
			array(
				'section' => 'frontpage_banner',
				'label'   => __( 'Background Image', 'luzdelaluna' ),
				'width'   => 1900,
				'height'  => 1080,
			)
		)
	);

	// END Options.
}
add_action( 'customize_register', 'luzdelaluna_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function luzdelaluna_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Sanitize the menu bar layout options.
 *
 * @param string $input Menu bar layout.
 */
function luzdelaluna_sanitize_menubar_mode( $input ) {
	$valid = array(
		'standard' => __( 'Standard', 'luzdelaluna' ),
		'alt'      => __( 'Alternative', 'luzdelaluna' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the main menu drop-down mode option.
 *
 * @param string $input options.
 */
function luzdelaluna_sanitize_mainmenu_dropdown_mode( $input ) {
	$valid = array(
		'default'   => __( 'Default', 'luzdelaluna' ),
		'bootstrap' => __( 'Bootstrap', 'luzdelaluna' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the sidebar position options.
 *
 * @param string $input Sidebar position options.
 */
function luzdelaluna_sanitize_sidebar_position( $input ) {
	$valid = array(
		'right' => __( 'Right sidebar', 'luzdelaluna' ),
		'left'  => __( 'Left sidebar', 'luzdelaluna' ),
		'none'  => __( 'No sidebar', 'luzdelaluna' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the navigation mode options.
 *
 * @param string $input navigation mode options.
 */
function luzdelaluna_sanitize_blog_pagination_mode( $input ) {
	$valid = array(
		'standard' => __( 'Standard', 'luzdelaluna' ),
		'numeric'  => __( 'Numeric', 'luzdelaluna' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the blog layout options.
 *
 * @param string $input blog layout options.
 */
function luzdelaluna_sanitize_blog_layout( $input ) {
	$valid = array(
		'list'     => esc_html__( 'List', 'luzdelaluna' ),
		'standard' => esc_html__( 'Standard', 'luzdelaluna' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Checkbox sanitization callback example.
 *
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * as a boolean value, either TRUE or FALSE.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
function luzdelaluna_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

/**
 *
 * Helper function for Contextual Control
 * Whether the static page is set to a front displays
 * https://developer.wordpress.org/reference/classes/wp_customize_control/active_callback/
 */
function luzdelaluna_set_front_page() {
	if ( 'page' === get_option( 'show_on_front' ) ) {
		return true;
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function luzdelaluna_customize_preview_js() {
	wp_enqueue_script( 'luzdelaluna-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '25032018', true );
}
add_action( 'customize_preview_init', 'luzdelaluna_customize_preview_js' );


