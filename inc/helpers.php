<?php
/**
 * Helper functions.
 *
 * @package Luzdelaluna
 */


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

if ( ! function_exists( 'luzdelaluna_header_page_title' ) ) :

	/**
	 * Display page title on header.
	 *
	 * @since 1.0.0
	 */
	function luzdelaluna_header_page_title() {
		if ( is_front_page() ) :
			return;
		elseif ( is_home() ) :
			?>
<div class="page-content">
	<div class="container">
		<span class="total-count">
			<?php luzdelaluna_total_posts(); ?>
		</span>
		<h1 class="header-heading uppercase"><?php single_post_title(); ?></h1>
	</div>
</div>
			<?php
		elseif ( is_page() ) :
			?>
<div class="page-content">
	<div class="container">
		<h1 class="header-heading uppercase"><?php single_post_title(); ?></h1>
	</div>
</div>

			<?php
		elseif ( is_archive() ) :
			?>
<div class="page-content">
	<div class="container">
		<h1 class="header-heading uppercase"><?php the_archive_title(); ?></h1>
	</div>
</div>


			<?php

elseif ( is_singular( 'download' ) ) :
	?>
<div class="page-content">
	<div class="container">
		<h1 class="header-heading uppercase">
			<?php esc_html__( 'Single Shop', 'luzdelaluna' ); ?></h1>
	</div>
</div>
	<?php

elseif ( is_single() ) :
	?>
<div class="page-content">
	<div class="container">
		<h1 class="header-heading uppercase">
			<?php esc_html__( 'Single Blog', 'luzdelaluna' ); ?></h1>
	</div>
</div>
	<?php
		elseif ( is_search() ) :
			?>
<div class="page-content">
	<div class="container">
		<h1 class="header-heading uppercase">
			<?php printf( esc_html__( 'Search Results for: %s', 'luzdelaluna' ), get_search_query() ); ?>
		</h1>
	</div>
</div>
			<?php
		elseif ( is_404() ) :
			?>
<div class="page-content">
	<div class="container">
		<h1 class="header-heading uppercase">
			<span><?php echo __( 'Oops!', 'luzdelaluna' ); ?></span><?php echo esc_html__( ' That page can&#39;t be found.', 'luzdelaluna' ); ?>
		</h1>

		<div class="error-404 not-found">
			<?php get_search_form(); ?>
		</div>
	</div>
</div>
			<?php
		endif;
	}

endif;


function expanded_alowed_tags() {
	$my_allowed = wp_kses_allowed_html( 'post' );
	// iframe
	$my_allowed['iframe'] = array(
		'src'             => array(),
		'height'          => array(),
		'width'           => array(),
		'frameborder'     => array(),
		'allowfullscreen' => array(),
	);
	// form fields - input
	$my_allowed['input'] = array(
		'class' => array(),
		'id'    => array(),
		'name'  => array(),
		'value' => array(),
		'type'  => array(),
	);
	// select
	$my_allowed['select'] = array(
		'class' => array(),
		'id'    => array(),
		'name'  => array(),
		'value' => array(),
		'type'  => array(),
	);
	// select options
	$my_allowed['option'] = array(
		'selected' => array(),
	);
	// style
	$my_allowed['style'] = array(
		'types' => array(),
	);

	return $my_allowed;
}

function term_class( $terms ) {
	if ( is_array( $terms ) ) {
		foreach ( $terms as $term ) {
			$stripped_term = str_replace( ' ', '', $term );
			echo esc_html( $stripped_term ) . ' ';
		}
	} else {
		$stripped_term = str_replace( ' ', '', $term );
		echo esc_html( $stripped_term );
	}
}


function get_custom_logo_second() {
	$html                  = '';
	$custom_logo_second_id = get_theme_mod( 'second_logo' );
	if ( $custom_logo_second_id ) {
		$custom_logo_second_attr = array(
			'class' => 'custom-logo',
		);
		$html                    = sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home">%2$s</a>',
			esc_url( home_url( '/' ) ),
			wp_get_attachment_image( $custom_logo_second_id, 'full', false, $custom_logo_second_attr )
		);
	}

	return $html;

}
