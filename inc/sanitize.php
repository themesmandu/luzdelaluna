<?php
/**
 * Sanitize functions.
 *
 * @package Luzdelaluna
 */


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
 * Switch sanitization
 *
 * @param  string       Switch value
 * @return integer  Sanitized value
 */
if ( ! function_exists( 'luzdelaluna_switch_sanitize' ) ) {
	function luzdelaluna_switch_sanitize( $input ) {
		if ( true === $input ) {
			return 1;
		} else {
			return 0;
		}
	}
}


/**
 * Iframe sanitization
 *
 * @param  string       input value
 * @return integer  Sanitized value
 */
if ( ! function_exists( 'luzdelaluna_iframe_sanitize' ) ) {
	function luzdelaluna_iframe_sanitize( $input ) {
		return wp_kses( $input, expanded_alowed_tags() );
	}
}


