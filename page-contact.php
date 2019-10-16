<?php
/**
 * Template Name: Contact custom template
 *
 * This is the template that displays custom contact page.
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
    <div id="contact" class="contact">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <?php if ( get_theme_mod( 'contact_heading' ) ) : ?>
                <h3 class="page-heading uppercase bold-8"><?php echo esc_html( get_theme_mod( 'contact_heading' ) ); ?>
                </h3>
                <?php endif; ?>

                <address>
                    <ul class="address">
                        <?php if ( get_theme_mod( 'contact_address' ) ) : ?>
                        <li>
                            <span class="uppercase bold-7"><?php echo esc_html__( 'Address', 'luzdelaluna' ); ?></span>
                            <h5 class="bold-5"><?php echo esc_html( get_theme_mod( 'contact_address' ) ); ?></h5>
                        </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'contact_phone' ) ) : ?>
                        <li>
                            <span class="uppercase bold-7"><?php echo esc_html__( 'Phone', 'luzdelaluna' ); ?></span>
                            <h5 class="bold-4"><?php echo esc_html( get_theme_mod( 'contact_phone' ) ); ?></h5>
                        </li>
                        <?php endif; ?>
                    </ul>
                </address>

                <?php if ( get_theme_mod( 'contact_description' ) ) : ?>
                <p class="description"><?php echo esc_html( get_theme_mod( 'contact_description' ) ); ?></p>
                <?php endif; ?>
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
            <?php if ( get_theme_mod( 'contact_description' ) ) : ?>
            <div class="col-lg-8 col-md-7">
                <div class="contact-form">
                    <?php if ( get_theme_mod( 'contact_heading_form' ) ) : ?>
                    <h3 class="page-heading uppercase bold-8">
                        <?php echo esc_html( get_theme_mod( 'contact_heading_form' ) ); ?></h3>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'contact_subheading_form' ) ) : ?>
                    <p class="page-sub-heading"><?php echo esc_html( get_theme_mod( 'contact_subheading_form' ) ); ?>
                    </p>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'contact_shortcode' ) ) : ?>
                    <?php echo do_shortcode( get_theme_mod( 'contact_shortcode' ) ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();