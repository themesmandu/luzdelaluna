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
		<figure class="single-prd-gallery col-md-5">
			<div class="topimage">
			<?php if ( wp_get_attachment_url( get_post_thumbnail_id( $download_id ) ) ) : ?>
				<img src="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $download_id ) ) ); ?>" />
				<?php elseif ( get_post_meta( $download_id, 'ecpt_gallery_one', true ) ) : ?>
				<img src="<?php echo esc_url( get_post_meta( $download_id, 'ecpt_gallery_one', true ) ); ?>" />
				<?php elseif ( get_post_meta( $download_id, 'ecpt_gallery_two', true ) ) : ?>
				<img src="<?php echo esc_url( get_post_meta( $download_id, 'ecpt_gallery_two', true ) ); ?>" />
				<?php elseif ( get_post_meta( $download_id, 'ecpt_gallery_three', true ) ) : ?>
				<img src="<?php echo esc_url( get_post_meta( $download_id, 'ecpt_gallery_three', true ) ); ?>" />
				<?php endif; ?>
			</div>

			<ul class="single-gallery">
			<?php if ( wp_get_attachment_url( get_post_thumbnail_id( $download_id ) ) ) : ?>
				<li><img src="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $download_id ) ) ); ?>" /></li>
				<?php endif; ?>
				<?php if ( get_post_meta( $download_id, 'ecpt_gallery_one', true ) ) : ?>
				<li><img src="<?php echo esc_url( get_post_meta( $download_id, 'ecpt_gallery_one', true ) ); ?>" /></li>
				<?php endif; ?>
				<?php if ( get_post_meta( $download_id, 'ecpt_gallery_two', true ) ) : ?>
				<li><img src="<?php echo esc_url( get_post_meta( $download_id, 'ecpt_gallery_two', true ) ); ?>" /></li>
				<?php endif; ?>
				<?php if ( get_post_meta( $download_id, 'ecpt_gallery_three', true ) ) : ?>
				<li><img src="<?php echo esc_url( get_post_meta( $download_id, 'ecpt_gallery_three', true ) ); ?>" /></li>
				<?php endif; ?>
			</ul>
		</figure>

		<div class="single-prd-content col-md-7">
			<h2 class="product-heading bold-5 uppercase">
				<?php echo esc_html( $download->post_title ); ?>
			</h2>
			<span class="prd-price bold-4">
				<?php edd_price( $download_id ); ?>
			</span>
			<div class="col-description">
				<p><?php echo esc_html( $download->post_excerpt ); ?></p>
			</div>
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
		</div>
	</div><!-- /.row -->

	<div class="prd-description">
		<h5 class="bold-5 uppercase tag-heading">Description</h5>
		<div class="paragraph"><?php the_content(); ?></div>
	</div>

	<?php


	// Check for current post category and add tax_query to the query arguments
	$cats      = wp_get_post_terms( get_the_ID(), 'download_category' );
	$cats_name = array();
	foreach ( $cats as $luzdelaluna_related_cat ) {
		$cats_name[] = $luzdelaluna_related_cat->name;
	}
	if ( ! empty( $cats_name ) ) {
			$args = array(
				'post_type'      => 'download',
				'posts_per_page' => 7, // How many items to display
				'post__not_in'   => array( get_the_ID() ), // Exclude current post
				'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
				'tax_query'      => array(
					array(
						'taxonomy' => 'download_category',
						'terms'    => $cats_name,
					),
				),
			);
	}

	// Query posts
	$luzdelaluna_query = new wp_query( $args );


	?>

	<section class="related-slider">
		<div class="relslider">
			<?php
			while ( $luzdelaluna_query->have_posts() ) :
				$luzdelaluna_query->the_post();
				$related_download_id  = get_the_ID();
				$related_download_obj = new EDD_Download( $related_download_id );
				?>
			<div class="product-wrap align-center rel-slide">
				<figure>
					<img
						src="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $related_download_id ) ) ); ?>" />
					<div class="add_cart">
					<?php
					echo edd_get_purchase_link(
						array(
							'download_id' => $related_download_id,
							'price'       => false,
							'text'        => 'Add to cart',
							'style'       => 'plain',
						)
					);
					?>
					</div>
				</figure>
				<h2 class="product-heading bold-5 uppercase">
					<a
						href="<?php echo esc_url( get_the_permalink( $related_download_id ) ); ?>"><?php echo esc_html( $related_download_obj->post_title ); ?></a>
				</h2>
				<span class="prd-price">
							<?php edd_price( $related_download_id ); ?>
				</span>
			</div>

					<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div> <!-- .slider -->
	</section> <!-- section .related-slider -->
</div><!-- .container -->

<?php
	get_footer();
