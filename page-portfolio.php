<?php
/**
 * Template Name: Portfolio custom template
 *
 * This is the template that displays custom portfolio page.
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
    <div id="portfolio" class="portfolio">

        <div class="filter-wrap">
            <button type="button" class="btn-uni filter active" data-rel="all">All</button>
            <button type="button" class="btn-uni filter" data-rel="1">Typography</button>
            <button type="button" class="btn-uni filter" data-rel="2">Branding</button>
            <button type="button" class="btn-uni filter" data-rel="3">Illustration</button>
        </div>

        <ul class="protfolio-gallery" id="gallery">

            <li class="all 1">
                <figure>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/1.jpg" />
                    </a>
                    <figcaption>
                        <h3>Figure Name</h3>
                    </figcaption>
                </figure>
            </li>

            <li class="all 1">
                <figure>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/2.jpg" />
                    </a>
                    <figcaption>
                        <h3>Figure Name</h3>
                    </figcaption>
                </figure>
            </li>

            <li class="all 1">
                <figure>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" />
                    </a>
                    <figcaption>
                        <h3>Figure Name</h3>
                    </figcaption>
                </figure>
            </li>

            <li class="all 1 2">
                <figure>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/4.jpg" />
                    </a>
                    <figcaption>
                        <h3>Figure Name</h3>
                    </figcaption>
                </figure>
            </li>

            <li class="all 1 2">
                <figure>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/5.jpg" />
                    </a>
                    <figcaption>
                        <h3>Figure Name</h3>
                    </figcaption>
                </figure>
            </li>

            <li class="all 1 2">
                <figure>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/6.jpg" />
                    </a>
                    <figcaption>
                        <h3>Figure Name</h3>
                    </figcaption>
                </figure>
            </li>

            <li class="all 1 3">
                <figure>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/7.jpg" />
                    </a>
                    <figcaption>
                        <h3>Figure Name</h3>
                    </figcaption>
                </figure>
            </li>

            <li class="all 1 3">
                <figure>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/8.jpg" />
                    </a>
                    <figcaption>
                        <h3>Figure Name</h3>
                    </figcaption>
                </figure>
            </li>

            <li class="all 1 3">
                <figure>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/9.jpg" />
                    </a>
                    <figcaption>
                        <h3>Figure Name</h3>
                    </figcaption>
                </figure>
            </li>

            <li class="all 1 3">
                <figure>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-one.jpg" />
                    </a>
                    <figcaption>
                        <h3>Figure Name</h3>
                    </figcaption>
                </figure>
            </li>
        </ul>
    </div>
</div>

<?php
get_footer();