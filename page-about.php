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
        <div class="row">
            <div class="col-md-6 column">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" />
                    <figcaption>
                        <p>Lorem Ipsum is simply dummy textprinting and nice industry. Lorem Ipsum</p>
                    </figcaption>
                </figure>

                <div class="col-content">
                    <h6 class="clr-gold bold-5 sub-heading">OUR MISSION</h6>
                    <h2 class="section-heading">KEEP SIMPLE STUPID.</h2>
                    <div class="description">
                        <p>Lorem Ipsum is simply dummy textprinting and nice industry. Lorem Ipsum has been industry's
                            standard dumy text.</p>
                        <a href="#" class="more_link bg-clr-gld brd-round"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png" /></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 column-right">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-two.jpg" />
                    <figcaption>
                        <p>Lorem Ipsum is simply dummy textprinting and nice industry. Lorem Ipsum</p>
                    </figcaption>
                </figure>

                <div class="col-content col-right">
                    <h6 class="clr-gold bold-5 sub-heading">WHO WE ARE</h6>
                    <h2 class="section-heading">CREATIVITY IS OUR HABIT.</h2>
                    <div class="description">
                        <p>Lorem Ipsum is simply dummy textprinting and nice industry. Lorem Ipsum has been industry's
                            standard dumy text.</p>
                        <a href="#" class="more_link bg-clr-gld brd-round"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- end of .section-about -->

<?php
get_footer();