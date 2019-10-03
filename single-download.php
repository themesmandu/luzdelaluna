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


	<?php
					$download_id = get_the_id();
					$download    = new EDD_Download( $download_id );
	?>
	<div class="row">
		<figure class="col-md-5">
			<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $download_id ) ) ); ?>
		</figure>

		<div class="single-prd-content col-md-7">
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
		</div>
	</div><!-- /.row -->
	<p><?php echo esc_html( $download->post_content ); ?></p>


	<?php
						// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
					endif;
	?>



</div><!-- /.container -->

<?php
get_footer();
