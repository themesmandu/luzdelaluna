<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luzdelaluna
 */

?>

</div><!-- #content -->


<footer id="footer">

	<div class="container">

		<div class="footer_content_wrap content">
			<?php if ( ! has_custom_logo() ) { ?>

			<h1 class="navbar-brand m-0"><a rel="home" class="clr-white"
					href="<?php echo esc_url( home_url( '/' ) ); ?>"
					title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
					itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			} else {
				the_custom_logo();
			}
			?>
			<div class="column-center">
				<?php
				if ( has_nav_menu( 'footer-menu' ) ) :
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu_id'        => 'footer-menu',
							'menu_class'     => 'footer-nav',
						)
					);
		endif;
				?>
			</div>

			<?php
			if ( has_nav_menu( 'social-menu' ) ) :
				wp_nav_menu(
					array(
						'theme_location' => 'social-menu',
						'menu_id'        => 'social-menu',
						'menu_class'     => 'social-nav',
					)
				);
		endif;
			?>
		</div>


		<div class="last-footer-wraper">
			<?php
			if ( has_nav_menu( 'footer-last-menu' ) ) :
				wp_nav_menu(
					array(
						'theme_location' => 'footer-last-menu',
						'menu_id'        => 'footer-last-menu',
						'menu_class'     => 'footer-last-nav',
					)
				);
		endif;
			?>

			<div class="site-info col-right">
			<?php if ( get_theme_mod( 'footer_copyright' ) ) : ?>
				<h4 class="copyright"><?php echo esc_html( get_theme_mod( 'footer_copyright' ) ); ?><span
						class="clr-white bold-3"> <?php bloginfo( 'name' ); ?></span>
				</h4>
				<?php endif; ?>
			</div> <!-- .site-info -->
		</div> <!-- .last-footer-wraper -->
	</div> <!-- .container -->

	<button class="up-btn" id="up-btn" title="<?php echo esc_html( __( 'Go to top', 'luzdelaluna' ) ); ?>"
		style="display: block;"><i class="fas fa-chevron-up"></i></button>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
