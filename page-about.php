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
        <div class="about-row-col">
            <?php for ( $i = 1; $i <= 2; $i++ ) : ?>
            <div class="row">
                <figure
                    class="col-md-<?php echo ( 2 === $i ? '5' : '6' ); ?> column<?php echo ( 2 === $i ? '-right' : '' ); ?>">
                    <img
                        src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'about_image_' . $i ) ) ); ?>" />
                </figure>

                <div
                    class="col-md-<?php echo ( 2 === $i ? '7' : '6' ); ?> col-content <?php echo ( 2 === $i ? 'col-right' : '' ); ?>">
                    <?php if ( get_theme_mod( 'about_subheading_' . $i ) ) : ?>
                    <?php if($i == 1) : ?>
                    <h6 class="clr-gold bold-5 sub-heading">
                        <?php echo esc_html( get_theme_mod( 'about_subheading_' . $i ) ); ?></h6>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php if ( get_theme_mod( 'about_heading_' . $i ) ) : ?>
                    <h2 class="section-heading"><?php echo esc_html( get_theme_mod( 'about_heading_' . $i ) ); ?></h2>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'about_content_' . $i ) ) : ?>
                    <div class="description">
                        <?php echo wp_kses_post( wpautop( get_theme_mod( 'about_content_' . $i ) ) ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php if($i == 1) : ?>
            <h6 class="bold-5 row-heading"><?php echo esc_html( get_theme_mod( 'about_subheading_2') ); ?>
            </h6>
            <?php endif; ?>

            <?php endfor; ?>
            <?php if ( get_theme_mod( 'about_text' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'about_link') ); ?>"
                class="more_link bg-clr-gld"><?php echo wp_kses_post( get_theme_mod( 'about_text') ); ?></a>
            <?php endif; ?>
        </div>

        <div class="abot-portfolio">
            <?php if ( get_theme_mod( 'about_content' ) ) : ?>
            <?php echo wp_kses_post( get_theme_mod( 'about_content') ); ?>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'about_text_2' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'about_link_2') ); ?>"
                class="more_link bg-clr-gld"><?php echo wp_kses_post( get_theme_mod( 'about_text_2') ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section> <!-- end of .section-about -->

<?php
get_footer();