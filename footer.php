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

<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
	title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
	itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		} else {
			the_custom_logo();
		}
		?>
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

<?php
if ( has_nav_menu( 'social-menu' ) ) :
	wp_nav_menu(
		array(
			'theme_location' => 'footer-menu',
			'menu_id'        => 'footer-menu',
			'menu_class'     => 'social-nav',
		)
	);
		endif;
?>
		</div>
	</div><!-- .container -->
	<div class="site-info">
            </div><!-- .site-info -->
	<button class="up-btn" id="up-btn" title="<?php echo esc_html( __( 'Go to top', 'ghumgham' ) ); ?>"
		style="display: block;"><i class="fas fa-chevron-up"></i></button>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
