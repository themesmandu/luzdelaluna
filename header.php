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
			if ( get_theme_mod( 'menubar_mode' ) === 'alt' ) {
				// alternative navigation bar:
				// left: logo, main menu - right: search form or something.
				get_template_part( 'template-parts/navigation/main-navbar', 'alt' );
			} else {
				// standard navigation bar:
				// left: logo - right: main menu.
				get_template_part( 'template-parts/navigation/main-navbar' );
			}

			//header page title.
			luzdelaluna_header_page_title();
			?>
            </div>

            <?php
			// Header Image.
			the_custom_header_markup();

			if ( is_front_page() && ! is_home() ) {
				// head banner on the front page if it enabled.
				get_template_part( 'template-parts/jumbotron' );
			}
			?>

            <?php if ( is_front_page() && ! is_home() ) : ?>
            <div class="header-content align-center">
                <div class="container">
                    <h2 class="header-heading uppercase">Sell Beats & <span> Products </span></h2>

                    <p>The Music Maker WordPress Theme is a powerful website template that allows you to sell beats,
                        music, loops, products, and more. Join over 4,000 music creators and create a professional
                        business and brand today!</p>

                    <a href="#" class="btn btn-uni br-round">+10 Demos</a>
                    <a href="#" class="btn btn-uni btn-white br-round">Features</a>
                </div>
            </div>
            <?php endif; ?>

        </header><!-- #masthead -->

        <div id="content" class="content-wrap">