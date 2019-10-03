<?php
/**
 * Template Name: Shop custom template
 *
 * This is the template that displays custom shop page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luzdelaluna
 */

get_header();

$args = array(
	'post_type'      => 'download',
	'posts_per_page' => 9,
	'paged'          => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1,
);

$downloads = new WP_Query( $args );

if ( $downloads->have_posts() ) :
	while ( $downloads->have_posts() ) :
		$downloads->the_post();
		$download_id = get_the_ID();
		the_post_thumbnail();
		the_title();
		edd_price( $download_id );
		echo edd_get_purchase_link(
			array(
				'download_id' => $download_id,
				'price'       => false,
				'text'        => 'Add to cart',
				'style'       => 'button',
			)
		);
	endwhile;
	/**
			 * Pagination parameters of the_posts_pagination() since: 4.1.0
			 *
			 * @see the_posts_pagination
			 * https://codex.wordpress.org/Function_Reference/the_posts_pagination
			 *
			 */
		$pagination_args = array(
			'mid_size'  => 4,
			'prev_text' => __( 'Prev', 'luzdelaluna' ),
			'next_text' => __( 'Next', 'luzdelaluna' ),
		);

		/**
		 * Fix pagination link base
		 *
		 * If in paginated posts w/o multiple loop
		 *
		 */

		if ( ! is_front_page() && 0 < intval( $page ) ) {
			$pagination_args['base'] = user_trailingslashit(
				untrailingslashit( get_page_link( $page_ID ) ) . '/page/%#%'
			);
		}
		/**
		 * Fix Pagination with $GLOBALS['wp_query'] = {custom_query}
		 *
		 * @see get_the_posts_pagination use $GLOBALS['wp_query']
		 * https://developer.wordpress.org/reference/functions/get_the_posts_pagination/#source-code
		 *
		 */
		$GLOBALS['wp_query'] = $downloads;
		the_posts_pagination( $pagination_args );
		else :
			get_template_part( 'template-parts/content', 'none' );
endif;
		wp_reset_postdata();


		get_footer();
