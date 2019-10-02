<?php

/**
 *
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Luzdelaluna
 */

get_header();
?>

<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 column">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg"
                        class="thumbnail-right" />
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-two.jpg"
                        class="thumbnail-right" />
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

<section class="section-testimonial align-center">
    <div class="container">
        <h6 class="clr-gold bold-5 sub-heading">Testimonial</h6>
        <h1 class="section-heading">CLIENT LOVE US</h1>

        <div class="content-wrap">
            <div class="slide-content align-center bg-clr-blu">
                <div class="reviewslide">
                    <div class="rev-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" />
                        <p>
                            Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <h4 class="client-name">Pedro Toribio<span>Photographer At unify</span></h4>
                    </div>

                    <div class="rev-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-two.jpg" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut
                        </p>
                        <h4 class="client-name">Toribio Pedro<span>Photographer At unify</span></h4>
                    </div>

                    <div class="rev-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, Ut enim ad minim veniam, quis
                            nostrud
                            exercitation ullamco laboris nisi ut sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <h4 class="client-name">Pedro Toribio<span>Photographer At unify</span></h4>
                    </div>
                </div>
            </div>
        </div> <!-- end of .content-wrap -->
    </div> <!-- end of .container -->
</section> <!-- end of .section-testimonial -->

<section class="section-instagram align-center">
    <div class="container">
        <h6 class="clr-gold bold-5 sub-heading">Instagram</h6>
        <h1 class="section-heading">Join on Insta</h1>
        <div class="insta-content">
            <?php echo do_shortcode( '[instagram-feed]' ); ?>
        </div>
    </div> <!-- end of .container -->
</section> <!-- end of .section-instagram -->

<?php
get_footer();