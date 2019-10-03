<?php
/**
 * The template for displaying a single download
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Luzdelaluna
 */

get_header();
?>

<div class="container">
	<div class="row">

		<div id="primary" class="content-area<?php luzdelaluna_content_class(); ?>">
			<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();
					$download_id = get_the_id();
					$download    = new EDD_Download( $download_id );
					?>
					<figure>
					<?php the_post_thumbnail(); ?>
					</figure>
					<h2 clss="product-heading bold-5 uppercase">
					<?php echo esc_html( $download->post_title ); ?>
			</h2>
			<span class="price">
					<?php edd_price( $download_id ); ?>
			</span>
					<p><?php echo esc_html( $download->post_excerpt ); ?></p>
			<div class="add_cart">
						<?php
						echo edd_get_purchase_link(
							array(
								'download_id' => $download_id,
								'price'       => false,
								'text'        => 'Add to cart',
								'style'       => 'button',
							)
						);
						?>
					</div>

					<p><?php echo esc_html( $download->post_content ); ?></p>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
					endif;

		endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->


	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();
