<?php

/**
 *
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Luzdelaluna
 */

get_header();
?>

<section class="section-about">
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
					<h2 class="section-heading"><?php echo esc_html( get_theme_mod( 'section_one_heading_' . $i ) ); ?></h2>
					<?php endif; ?>	
					<?php if ( get_theme_mod( 'section_one_content_' . $i ) ) : ?>
					<div class="description">
						<?php echo wp_kses_post( wpautop( get_theme_mod( 'section_one_content_' . $i ) ) ); ?>
							<?php endif; ?>	
							<?php if ( get_theme_mod( 'section_one_link_' . $i ) ) : ?>
						<a href="<?php echo esc_url( get_theme_mod( 'section_one_link_' . $i ) ); ?>" class="more_link bg-clr-gld brd-round"><?php echo wp_kses_post( get_theme_mod( 'section_one_text_' . $i ) ); ?></a>
								<?php endif; ?>	
					</div>
				</div>
			</div>
			<?php endfor; ?>
		</div>
	</div>
</section> <!-- end of .section-about -->

<section class="section-testimonial align-center">
	<div class="container">
	<?php if ( get_theme_mod( 'testimonial_subheading' ) ) : ?>
		<h6 class="clr-gold bold-5 sub-heading"><?php echo esc_html( get_theme_mod( 'testimonial_subheading' ) ); ?></h6>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'testimonial_heading' ) ) : ?>
		<h1 class="section-heading"><?php echo esc_html( get_theme_mod( 'testimonial_heading' ) ); ?></h1>
		<?php endif; ?>

		<?php
				$active_testimonials = array();
		for ( $i = 1; $i <= 6; $i++ ) {
			if ( get_theme_mod( 'testimonial_image_' . $i ) ) {
				$active_testimonials[] = $i;
			}
		}
		if ( 0 !== count( $active_testimonials ) ) :
			?>
		<div class="content-wrap">
			<div class="slide-content align-center bg-clr-blu">
				<div class="reviewslide">
				<?php foreach ( $active_testimonials as $key => $testimonial_id ) : ?>
					<div class="rev-slide">
						<img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'testimonial_image_' . $testimonial_id ) ) ); ?>" />
						<?php if ( get_theme_mod( 'testimonial_content_' . $testimonial_id ) ) : ?>
						<p><?php echo esc_html( get_theme_mod( 'testimonial_content_' . $testimonial_id ) ); ?></p>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'testimonial_client_name_' . $testimonial_id ) ) : ?>
						<h4 class="client-name"><?php echo esc_html( get_theme_mod( 'testimonial_client_name_' . $testimonial_id ) ); ?><span><?php echo esc_html( get_theme_mod( 'testimonial_client_occupation_' . $testimonial_id ) ); ?></span></h4>
						<?php endif; ?>
					</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div> <!-- end of .content-wrap -->
		<?php endif; ?>
	</div> <!-- end of .container -->
</section> <!-- end of .section-testimonial -->

<section class="section-instagram align-center">
	<div class="container">
	<?php if ( get_theme_mod( 'instagram_subheading' ) ) : ?>
		<h6 class="clr-gold bold-5 sub-heading"><?php echo esc_html( get_theme_mod( 'instagram_subheading' ) ); ?></h6>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'instagram_heading' ) ) : ?>
		<h1 class="section-heading"><?php echo esc_html( get_theme_mod( 'instagram_heading' ) ); ?></h1>
		<?php endif; ?>
	</div> <!-- end of .container -->

	<?php if ( get_theme_mod( 'instagram_shortcode' ) ) : ?>
	<div class="insta-content">
		<?php echo do_shortcode( get_theme_mod( 'instagram_shortcode' ) ); ?>
	</div>
	<?php endif; ?>

</section> <!-- end of .section-instagram -->

<?php
get_footer();
