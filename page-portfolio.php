<?php
/**
 * Template Name: Portfolio custom template
 *
 * This is the template that displays custom portfolio page.
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
	'post_type'      => 'portfolio',
	'posts_per_page' => -1,
);

$portfolios = new WP_Query( $args );
?>

<div class="container">
	<div id="portfolio" class="portfolio">

		<?php
			$portfolio_terms = get_terms(
				array(
					'taxonomy'   => 'filters',
					'parent'     => 0,
					'hide_empty' => false,
				)
			);




			?>
		<div class="filter-wrap">
			<button type="button" class="btn-uni filter active" data-rel="all">All</button>
			<?php foreach ( $portfolio_terms as $portfolio_term ) : ?>
				<?php
				$stripped_term = str_replace( ' ', '', $portfolio_term->name );
				?>
			<button type="button" class="btn-uni filter" data-rel="<?php echo esc_html( $stripped_term ); ?>"><?php echo esc_html( $portfolio_term->name ); ?></button>
			<?php endforeach; ?>
		</div>

		<div class="imageapear">
			<figure>
				<i class="fas fa-times"></i>
				<img src="">
			</figure>
		</div>

		<ul class="protfolio-gallery" id="gallery">
		<?php
		if ( $portfolios->have_posts() ) :
			while ( $portfolios->have_posts() ) :
				$portfolios->the_post();
				$portfolio_id = get_the_ID();
				$terms        = wp_strip_all_tags( get_the_term_list( $portfolio_id, 'filters', '', ',' ) );
				$term_array   = explode( ',', $terms );


				?>
			<li class="all <?php term_class( $term_array ); ?>">
				<figure>
					<img src="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $portfolio_id ) ) ); ?>"
						class="thumbnail-pop" />

					<figcaption>
						<h3><?php echo esc_html( get_the_title() ); ?></h3>
						<p><?php echo esc_html( get_the_content() ); ?></p>
					</figcaption>
				</figure>
			</li>
				<?php
			endwhile;
		endif;
		?>

		</ul>
	</div>
</div>

<?php
get_footer();
