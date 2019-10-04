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

			<?php if ( is_front_page() ) : ?>
			<div id="image_slider">
				<div class="slider_images">
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri() . '/assets/images/slider-one.jpg'; ?>"
								alt="one" title="one" />
							<div class="slide_caption">
								<div class="slide_content">
								<h1 class="bold-8 slider-heading"><span class="d-block">I am the</span> CEATIVE <br> FORCE <span class="txt-above">of my</span> <span class="large">life</span></h1>
									<a href="#" class="btn-uni">Find out how </a>
								</div>
							</div>
						</li>

						<li>
							<img src="<?php echo get_template_directory_uri() . '/assets/images/slider-two.jpg'; ?>"
								alt="two" title="two" />
							<div class="slide_caption">
								<div class="slide_content">
								<h1 class="bold-8 slider-heading"><span class="d-block">I am the</span> CEATIVE <br> FORCE <span class="txt-above">of my</span> <span class="large">life</span></h1>
									<a href="#" class="btn-uni">Find out how </a>
								</div>
							</div>
						</li>

						<li>
							<img src="<?php echo get_template_directory_uri() . '/assets/images/slider-three.jpg'; ?>"
								alt="three" title="three" />
							<div class="slide_caption">
								<div class="slide_content">
								<h1 class="bold-8 slider-heading"><span class="d-block">I am the</span> CEATIVE <br> FORCE <span class="txt-above">of my</span> <span class="large">life</span></h1>
									<a href="#" class="btn-uni">Find out how </a>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="slider_indicator">
					<a href="#" title="one"></a>
					<a href="#" title="two"></a>
					<a href="#" title="three"></a>
				</div>
			</div>
			<?php endif; ?>

		</header><!-- #masthead -->

		<div id="content" class="content-wrap">
