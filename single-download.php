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
            <img src="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $download_id ) ) ); ?>" />
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
		<h5 class="bold-5 uppercase">Description</h5>
        <p class="paragraph"><?php echo esc_html( $download->post_content ); ?></p>
    </div>

    <?php
$args = array(
	'post_type'      => 'download',
	'posts_per_page' => 7, // How many items to display
	'post__not_in'   => array( get_the_ID() ), // Exclude current post
	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

// Check for current post category and add tax_query to the query arguments
$cats     = wp_get_post_terms( get_the_ID(), 'category' );
$cats_ids = array();
foreach ( $cats as $luzdelaluna_related_cat ) {
	$cats_ids[] = $luzdelaluna_related_cat->term_id;
}
if ( ! empty( $cats_ids ) ) {
	$args['category__in'] = $cats_ids;
}

// Query posts
$luzdelaluna_query = new wp_query( $args );

?>

    <section class="related-slider">
        <div class="relslider">
            <?php
foreach ( $luzdelaluna_query->posts as $related_download ) :
	setup_postdata( $related_download );
	$related_download_obj = new EDD_Download( $related_download->ID );
	?>
            <div class="product-wrap align-center rel-slide">
                <figure>
                    <img
                        src="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $related_download->ID ) ) ); ?>" />
                    <div class="add_cart">
                        <?php
						echo edd_get_purchase_link(
							array(
								'download_id' => $related_download->ID,
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
                        href="<?php echo esc_url( get_the_permalink( $related_download->ID ) ); ?>"><?php echo esc_html( $related_download->post_title ); ?></a>
                </h2>
                <span class="prd-price">
                    <?php edd_price( $related_download->ID ); ?>
                </span>
            </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div> <!-- .slider -->
    </section> <!-- section .related-slider -->
</div><!-- .container -->

<?php
	get_footer();