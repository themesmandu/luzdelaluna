<?php
/**
 * Load files
 *
 * @package Luzdelaluna
 */

/**
 * Load WordPress nav walker.
 */
require get_template_directory() . '/inc/class-luzdelaluna-wp-bootstrap-navwalker.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Sanitize functions.
 */
require get_template_directory() . '/inc/sanitize.php';

/**
 * Sanitize functions.
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * CPT register.
 */
require get_template_directory() . '/inc/cpt/cpt-and-taxonomy.php';

/**
 * Include tgm required plaugins functionality.
 */
require get_template_directory() . '/inc/tgm-plugin/tgm-required-plugins.php';

// check for plugin using plugin name.
if ( class_exists( 'Easy_Digital_Downloads' ) ) {
	/**
	* EDD custom constants.
	*/
	require get_template_directory() . '/inc/edd-customizations/edd-modifications.php';

	/**
	* EDD additional metaboxex.
	*/
	require get_template_directory() . '/inc/edd-customizations/additional-metaboxex.php';
}

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
