<?php
/**
 * Template Name: About custom template
 *
 * This is the template that displays custom about page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luzdelaluna
 */

get_header();
?>

<section class="section-about p-0">
<div class="container">
		<div class="row">
			<?php for ( $i = 1; $i <= 2; $i++ ) : ?>
			<div class="col-md-6 column<?php echo ( 2 === $i ? '-right' : '' ); ?>">
				<figure>
					<img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'section_one_image_' . $i ) ) ); ?>" />
					<?php if ( get_theme_mod( 'section_one_hover_content_' . $i ) ) : ?>
					<figcaption>
						<p><?php echo esc_html( get_theme_mod( 'section_one_hover_content_' . $i ) ); ?></p>
					</figcaption>
					<?php endif; ?>	
				</figure>

				<div class="col-content <?php echo ( 2 === $i ? 'col-right' : '' ); ?>">
				<?php if ( get_theme_mod( 'section_one_subheading_' . $i ) ) : ?>
					<h6 class="clr-gold bold-5 sub-heading"><?php echo esc_html( get_theme_mod( 'section_one_subheading_' . $i ) ); ?></h6>
					<?php endif; ?>	
					<?php if ( get_theme_mod( 'section_one_heading_' . $i ) ) : ?>
					<h2 class="section-heading"><?php echo esc_html( get_theme_mod( 'section_one_heading_' . $i ) ); ?>.</h2>
					<?php endif; ?>	
					<?php if ( get_theme_mod( 'section_one_content_' . $i ) ) : ?>
					<div class="description">
						<p><?php echo esc_html( get_theme_mod( 'section_one_content_' . $i ) ); ?></p>
							<?php endif; ?>	
							<?php if ( get_theme_mod( 'section_one_link_' . $i ) ) : ?>
						<a href="#" class="more_link bg-clr-gld brd-round"><img
								src="<?php echo esc_url( get_theme_mod( 'section_one_link_' ) ); ?>"></a>
								<?php endif; ?>	
					</div>
				</div>
			</div>
			<?php endfor; ?>
		</div>
	</div>
</section> <!-- end of .section-about -->

<?php
get_footer();
