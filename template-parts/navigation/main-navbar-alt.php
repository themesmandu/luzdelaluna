<?php

/**
 * Template part for alternative displaying main navigation top-bar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luzdelaluna
 */

?>
<?php if ( get_theme_mod( 'mainmenu_dropdown_mode' ) !== 'bootstrap' ) { ?>

<nav class="navbar navbar-expand-lg main-navigation nav-search appear-left">
	<?php } else { ?>
	<nav class="navbar navbar-expand-lg main-navigation nav-search">
		<?php } ?>
		<div class="container">
			<?php
			if ( ! has_custom_logo() ) {
				if ( is_front_page() && is_home() ) :
					?>

			<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
					title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
					itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
				title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
				itemprop="url"><?php bloginfo( 'name' ); ?></a>

					<?php
				endif;
			} else {
				if ( is_front_page() ) :
					the_custom_logo();
					echo wp_kses_post( get_custom_logo_second() );
				else :
					echo wp_kses_post( get_custom_logo_second() );
				endif;
			}
			?>

			<button id="menu" class="navbar-toggler collapsed" type="button" data-toggle="collapse"
				data-target="#navbarmenus">
				<span></span>
				<span></span>
				<span></span>
			</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container'       => 'div',
					'container_id'    => 'navbarmenus',
					'container_class' => 'collapse navbar-collapse justify-content-center',
					'menu_id'         => false,
					'depth'           => 8,
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => 'luzdelaluna_WP_Bootstrap_Navwalker::fallback',
				)
			);
			?>

			<div class="shopping-wrap align-items-center">
				<div class="shop-cart nav-feature">
					<a class="cart-link clr-white" href="<?php echo edd_get_checkout_uri(); ?>">
						<i class="shopping-cart"></i><span
							class="header-cart edd-cart-quantity align-center"><?php echo edd_get_cart_quantity(); ?>
						</span>
					</a>
				</div>

				<?php
				get_template_part( 'template-parts/navigation/add-item', 'search-form' );
				?>
			</div>

		</div><!-- .container -->
	</nav><!-- .site-navigation -->
