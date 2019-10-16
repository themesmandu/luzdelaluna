<?php

/**
 * The site header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luzdelaluna
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="top-header" class="site-header" role="banner">
			<div class="header-wrap">
				<?php

				get_template_part( 'template-parts/navigation/main-navbar', 'alt' );

				//header page title.
				luzdelaluna_header_page_title();
				?>
			</div>

			<?php if ( is_front_page() && ! is_home() && get_theme_mod( 'slider_toggle' ) ) : ?>
				<?php
				$active_sliders = array();
				for ( $i = 1; $i <= 6; $i++ ) {
					if ( get_theme_mod( 'slider_image_' . $i ) ) {
						$active_sliders[] = $i;
					}
				}
				if ( 0 !== count( $active_sliders ) ) :
					?>
			<div id="image_slider">
				<div class="slider_images">
					<ul>
					<?php foreach ( $active_sliders as $key => $slider_id ) : ?>
						<li>
							<img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'slider_image_' . $slider_id ) ) ); ?>"
								alt="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'slider_image_' . $slider_id ) ) ); ?>"/>
								<?php if ( get_theme_mod( 'slider_title' ) || get_theme_mod( 'slider_button_label' ) || get_theme_mod( 'slider_button_link' ) ) : ?>
							<div class="slide_caption">
								<div class="slide_content">
									<?php if ( get_theme_mod( 'slider_title' ) ) : ?>
								<h1 class="bold-8 slider-heading"><?php echo wp_kses_post( get_theme_mod( 'slider_title' ) ); ?></h1>
									<?php endif; ?>	

								<h3 class="clr-white bold-4 slider-sub-heading">Grow your business with spectacular branding, social media and marketing creatives.</h3>

									<?php if ( get_theme_mod( 'slider_button_label' ) || get_theme_mod( 'slider_button_link' ) ) : ?>
								<a href="<?php echo esc_url( get_theme_mod( 'slider_button_link' ) ); ?>" class="btn-uni"><?php echo esc_html( get_theme_mod( 'slider_button_label' ) ); ?></a>
								<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>	
						</li>
					<?php endforeach; ?>
					</ul>
				</div>
				<div class="slider_indicator">
					<?php foreach ( $active_sliders as $slider_id ) : ?>
					<a href="#"></a>
					<?php endforeach; ?>
				</div>
			</div>
				<?php endif; ?>
			<?php endif; ?>

		</header><!-- #masthead -->

		<div id="content" class="content-wrap">
