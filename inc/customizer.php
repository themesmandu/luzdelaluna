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

	if ( class_exists( 'WP_Customize_Control' ) ) {

		/**
		* Custom customizer controls.
		*/
		require get_template_directory() . '/inc/customizer/custom-controls/class-luzdelaluna-toggle-switch-custom-control.php';
		require get_template_directory() . '/inc/customizer/custom-controls/class-luzdelaluna-html-control.php';

	}

	/**
	* Header slider section.
	*/
	require get_template_directory() . '/inc/customizer/sections/head-slider-section.php';

	/**
	* General settings section.
	*/
	require get_template_directory() . '/inc/customizer/sections/general-settings-section.php';

	/**
	* Post page section.
	*/
	require get_template_directory() . '/inc/customizer/sections/post-page-section.php';
	
	/**
	* About page section.
	*/
	require get_template_directory() . '/inc/customizer/sections/about-template.php';

	/**
	* Contact page section.
	*/
	require get_template_directory() . '/inc/customizer/sections/contact-template.php';

	/**
	* Services page section.
	*/
	require get_template_directory() . '/inc/customizer/sections/services-template.php';

	/**
	* Footer section.
	*/
	require get_template_directory() . '/inc/customizer/sections/footer.php';

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
	* Section one.
	*/
	require get_template_directory() . '/inc/customizer/sections/front-page/section-one.php';

	/**
	* Section testimonial.
	*/
	require get_template_directory() . '/inc/customizer/sections/front-page/section-testimonial.php';

	/**
	* Section instagram.
	*/
	require get_template_directory() . '/inc/customizer/sections/front-page/section-instagram.php';

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
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function luzdelaluna_customize_preview_js() {
	wp_enqueue_script( 'luzdelaluna-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '25032018', true );
}
add_action( 'customize_preview_init', 'luzdelaluna_customize_preview_js' );


