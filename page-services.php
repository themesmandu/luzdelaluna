<?php
/**
 * Template Name: Services custom template
 *
 * This is the template that displays custom services page.
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

<div class="container">
	<div id="services" class="services">
	<?php if ( get_theme_mod( 'services_desc' ) ) : ?>
		<div class="sub-description">
			<?php echo wp_kses_post( get_theme_mod( 'services_desc' ) ); ?>
		</div>
			<?php endif; ?>

		<div class="row-wrap box-shadow bg-clr-white">
			<div class="row">
				<div class="column col-image">
					<figure>
						<img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'services_image_1' ) ) ); ?>"
							class="thumbnail-right" />
					</figure>
				</div>

				<div class="column col-text">
					<div class="col-content">
						<span class="sn_number">01</span>
						<?php if ( get_theme_mod( 'services_heading_1' ) ) : ?>
						<h3 class="uppercase bold-8"><?php echo esc_html( get_theme_mod( 'services_heading_1' ) ); ?></h3>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'services_desc_1' ) ) : ?>
						<p><?php echo esc_html( get_theme_mod( 'services_desc_1' ) ); ?></p>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'services_link_text_1' ) ) : ?>
						<a href="<?php echo esc_url( get_theme_mod( 'services_link_1' ) ); ?>" class="more_link uppercase"><?php echo esc_html( get_theme_mod( 'services_link_text_1' ) ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div><!-- .row-wrap -->
		
		<div class="row-wrap box-shadow bg-clr-white">
			<div class="row">
				<div class="column col-image col-left">
					<figure>
						<img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'services_image_2' ) ) ); ?>"
							class="thumbnail-right" />
					</figure>
				</div>

				<div class="column col-text col-right align-right">
					<div class="col-content">
						<span class="sn_number">02</span>
						<?php if ( get_theme_mod( 'services_heading_2' ) ) : ?>
						<h3 class="uppercase bold-8"><?php echo esc_html( get_theme_mod( 'services_heading_2' ) ); ?></h3>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'services_desc_2' ) ) : ?>
						<p><?php echo esc_html( get_theme_mod( 'services_desc_2' ) ); ?></p>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'services_link_text_2' ) ) : ?>
						<a href="<?php echo esc_url( get_theme_mod( 'services_link_2' ) ); ?>" class="more_link uppercase"><?php echo esc_html( get_theme_mod( 'services_link_text_2' ) ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div><!-- .row-wrap -->
		
		<div class="row-wrap box-shadow bg-clr-white">
			<div class="row">
				<div class="column col-image">
					<figure>
						<img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'services_image_3' ) ) ); ?>"
							class="thumbnail-right" />
					</figure>
				</div>

				<div class="column col-text">
					<div class="col-content">
						<span class="sn_number">03</span>
						<?php if ( get_theme_mod( 'services_heading_3' ) ) : ?>
						<h3 class="uppercase bold-8"><?php echo esc_html( get_theme_mod( 'services_heading_3' ) ); ?></h3>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'services_desc_3' ) ) : ?>
						<p><?php echo esc_html( get_theme_mod( 'services_desc_3' ) ); ?></p>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'services_link_text_3' ) ) : ?>
						<a href="<?php echo esc_url( get_theme_mod( 'services_link_3' ) ); ?>" class="more_link uppercase"><?php echo esc_html( get_theme_mod( 'services_link_text_3' ) ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div><!-- .row-wrap -->

		<div class="row-wrap box-shadow bg-clr-white">
			<div class="row">
				<div class="column col-image col-left">
					<figure>
						<img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'services_image_4' ) ) ); ?>"
							class="thumbnail-right" />
					</figure>
				</div>

				<div class="column col-text col-right align-right">
					<div class="col-content">
						<span class="sn_number">04</span>
						<?php if ( get_theme_mod( 'services_heading_4' ) ) : ?>
						<h3 class="uppercase bold-8"><?php echo esc_html( get_theme_mod( 'services_heading_4' ) ); ?></h3>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'services_desc_4' ) ) : ?>
						<p><?php echo esc_html( get_theme_mod( 'services_desc_4' ) ); ?></p>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'services_link_text_4' ) ) : ?>
						<a href="<?php echo esc_url( get_theme_mod( 'services_link_4' ) ); ?>" class="more_link uppercase"><?php echo esc_html( get_theme_mod( 'services_link_text_4' ) ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div><!-- .row-wrap -->
	</div><!-- #primary -->
</div><!-- /.container -->

<?php
get_footer();
