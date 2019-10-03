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
	'posts_per_page' => 4,
	'paged'          => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1,
);

$downloads = new WP_Query( $args );

?>
<div class="container">
	<ul class="row">

		<?php
		if ( $downloads->have_posts() ) :
			while ( $downloads->have_posts() ) :
				$downloads->the_post();
				$download_id = get_the_ID();
				$download    = new EDD_Download( $download_id );

				?>
		<li class="col-md-3 column">
			<div class="product-wrap align-center">
				<figure>
					<?php the_post_thumbnail(); ?>
					<div class="add_cart">
						<?php
						echo edd_get_purchase_link(
							array(
								'download_id' => $download_id,
								'price'       => false,
								'text'        => 'Add to cart',
								'style'       => 'plain',
							)
						);
						?>
					</div>

				</figure>

				<h2 class="product-heading bold-5 uppercase">
					<a href="<?php the_permalink(); ?>"><?php echo esc_html( $download->post_title ); ?></a>
				</h2>

				<span class="price">
					<?php edd_price( $download_id ); ?>
				</span>
			</div>
		</li>
				<?php
			endwhile;
			?>
	</ul> <!-- end of ul .row -->

			<?php
			/**
					 * Pagination parameters of the_posts_pagination() since: 4.1.0
					 *
					 * @see the_posts_pagination
					 * https://codex.wordpress.org/Function_Reference/the_posts_pagination
					 *
					 */
				$pagination_args = array(
					'prev_text' => __( 'Prev', 'luzdelaluna' ),
					'next_text' => __( 'Next', 'luzdelaluna' ),
				);

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

				?>
</div> <!-- end of Container -->
<?php
		get_footer();
