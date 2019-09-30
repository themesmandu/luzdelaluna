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

<div class="front-page-sections">
    <!-- div to wrap whole sections of front page -->
    <section class="section-facilities">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg"
                        class="thumbnail-right" />
                </div>

                <div class="col-lg-6 col-md-7 col-right">
                    <h2 class="section-heading clr-blk">
                        Creat a Professional
                        <span class="uppercase clr-blu">website</span>
                        <p class="section-sub-heading">The Music Maker theme is full of features to help make money and
                            get
                            your
                            music heard</p>
                    </h2>

                    <ul class="col-count-2">
                        <li><i class="fas fa-chevron-circle-right"></i>Add unlimited beats</li>
                        <li><i class="fas fa-chevron-circle-right"></i>Sell digital and physical products</li>
                        <li><i class="fas fa-chevron-circle-right"></i>Add unlimited pages and blog posts</li>
                        <li><i class="fas fa-chevron-circle-right"></i>Includes 90 FREE Music</li>
                        <li><i class="fas fa-chevron-circle-right"></i>New 3.0 Update</li>
                        <li><i class="fas fa-chevron-circle-right"></i>Add WordPress plugins to add features</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- end of .section-facilities -->

    <section class="section-features">
        <div class="container">
            <h2 class="section-heading clr-blk align-center">
                <span class="clr-blu"> awesome </span>
                <span class="underline">features</span>
                <p class="section-sub-heading">We have a powerful website template that has helped over 4,000 music
                    producers.
                </p>
            </h2>

            <div class="feature-row">
                <div class="row">
                    <div class="col-md-4 column">
                        <div class="d-flex align-items-center bg-clr-grey">
                            <span><i class="fas fa-music"></i></span>
                            <div class="content">
                                <h3>Beat Store</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-white">
                            <span><i class="fas fa-download"></i></span>
                            <div class="content">
                                <h3>Instant Beats Downloads</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-grey">
                            <span><i class="far fa-money-bill-alt"></i></span>
                            <div class="content">
                                <h3>Instant Payments</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-white">
                            <span><i class="far fa-newspaper"></i></span>
                            <div class="content">
                                <h3>Unlimited Content</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 column col-center">
                        <div class="d-flex align-items-center bg-clr-white">
                            <span><i class="fas fa-mobile-alt"></i></span>
                            <div class="content">
                                <h3>Mobile Ready</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-grey">
                            <span><i class="fas fa-percentage"></i></span>
                            <div class="content">
                                <h3>Discounts & Coupons</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-white">
                            <span><i class="fas fa-code"></i></span>
                            <div class="content">
                                <h3>Custom CSS</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-grey">
                            <span><i class="far fa-play-circle"></i></span>
                            <div class="content">
                                <h3>Track Beat Plays</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 column">
                        <div class="d-flex align-items-center bg-clr-white">
                            <span><i class="far fa-file-alt"></i></span>
                            <div class="content">
                                <h3>Music Contracts</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-white">
                            <span><i class="fab fa-wordpress-simple"></i></span>
                            <div class="content">
                                <h3>Add Plugins</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-grey">
                            <span><i class="far fa-envelope"></i></span>
                            <div class="content">
                                <h3>Capture Emails</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-white">
                            <span><i class="fas fa-search"></i></span>
                            <div class="content">
                                <h3>SEO Friendly</h3>
                                <p>The built-in beat store allows you to add unlimited beats and set your own prices.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of feature-row -->
        </div> <!-- end of container -->
    </section> <!-- end of .section-features -->

    <section class="section-demo-import">
        <div class="container">
            <h2 class="section-heading">
                <span class="underline clr-blu">demo</span>
                <span class="clr-light">imports</span>
                <p class="section-sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore</p>
            </h2>

            <div class="row mt-5">
                <div class="col-lg-4 column scroll-animation">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-two.png" />
                </div>

                <div class="col-lg-4 col-md-6 column col-right">
                    <div class="row">

                        <div class="col-lg-6 column">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg" />
                        </div>

                        <div class="col-lg-6 column">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg" />
                        </div>

                        <div class="col-lg-6 column">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg" />
                        </div>

                        <div class="col-lg-6 column">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg" />
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 column">
                    <div class="row">
                        <div class="col-lg-6 column">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg" />
                        </div>

                        <div class="col-lg-6 column">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg" />
                        </div>

                        <div class="col-lg-6 column">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg" />
                        </div>

                        <div class="col-lg-6 column">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end of .section-demo-import -->

    <section class="section-personal-store sec-bg-clr">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg"
                        class="sec-image-thumbnail thumbnail-right" />

                    <div class="imageapear">
                        <figure>
                            <i class="fas fa-times"></i>
                            <img src="">
                        </figure>
                    </div>
                </div>

                <div class="col-md-7 col-right">
                    <h2 class="section-heading clr-blu">personal <span class="d-block">beat store</span>
                    </h2>

                    <ul class="col-count-2 list-check">
                        <li><i class="checked"></i>Instant Beat Delivery</li>
                        <li><i class="checked"></i>Offer Free Beat Downloads</li>
                        <li><i class="checked"></i>Instant Beat Delivery</li>
                        <li><i class="checked"></i>Offer Free Beat Downloads</li>
                        <li><i class="checked"></i>Instant Beat Delivery</li>
                        <li><i class="checked"></i>Offer Free Beat Downloads</li>
                        <li><i class="checked"></i>Instant Beat Delivery</li>
                        <li><i class="checked"></i>Offer Free Beat Downloads</li>
                        <li><i class="checked"></i>Instant Beat Delivery</li>
                        <li><i class="checked"></i>Offer Free Beat Downloads</li>
                        <li><i class="checked"></i>Instant Beat Delivery</li>
                        <li><i class="checked"></i>Offer Free Beat Downloads</li>
                        <li><i class="checked"></i>Instant Beat Delivery</li>
                        <li><i class="checked"></i>Offer Free Beat Downloads</li>
                    </ul>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of .section-personal-store -->

    <section class="section-product-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg"
                        class="sec-image-thumbnail" />
                </div>

                <div class="col-md-7">
                    <h2 class="section-heading clr-blu">
                        <span>sell products</span>
                        <p class="section-sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore</p>
                    </h2>

                    <ul class="col-count-2 list-check">
                        <li><i class="checked"></i>Sell Drum Kits, Sample Packs, or Software Presets</li>
                        <li><i class="checked"></i>Sell Clothing</li>
                        <li><i class="checked"></i>Sell Digital or Physical Music Albums</li>
                        <li><i class="checked"></i>Link to External Products</li>
                        <li><i class="checked"></i>Display Related Products</li>
                        <li><i class="checked"></i>Sort Products by Category</li>
                    </ul>
                    <a href="#" class="btn btn-uni br-round">view store</a>
                </div>
            </div>
        </div>
    </section> <!-- end of .section-product-info -->

    <section class="section-editor-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg"
                        class="sec-image-thumbnail thumbnail-right" />
                </div>

                <div class="col-md-7 col-right">
                    <h2 class="section-heading clr-blu">
                        live website <span class="d-block">editor</span>
                        <p class="section-sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore</p>
                    </h2>

                    <ul class="col-count-2 list-check">
                        <li><i class="checked"></i>Homepage Settings</li>
                        <li><i class="checked"></i>Beat Store Settings</li>
                        <li><i class="checked"></i>Website Colors</li>
                        <li><i class="checked"></i>800+ Google Fonts</li>
                        <li><i class="checked"></i>Background Image</li>
                        <li><i class="checked"></i>Product Store</li>
                        <li><i class="checked"></i>Page Animations</li>
                    </ul>
                    <a href="#" class="btn btn-uni br-round">view store</a>
                </div>
            </div>
        </div>
    </section> <!-- end of .section-editor-info -->

    <section class="section-homepage-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg"
                        class="sec-image-thumbnail" />
                </div>

                <div class="col-md-7">
                    <h2 class="section-heading clr-blu">
                        <span>Flexible Homepage</span>
                        <p class="section-sub-heading">The homepage template offers 18 different sections.</p>
                    </h2>

                    <ul class="col-count-2 list-check">
                        <li><i class="checked"></i>Image & Video Banner</li>
                        <li><i class="checked"></i>Pricing Table</li>
                        <li><i class="checked"></i>Contact Form</li>
                        <li><i class="checked"></i>LPhotos / Video</li>
                        <li><i class="checked"></i>Products</li>
                        <li><i class="checked"></i>Testimonials</li>
                        <li><i class="checked"></i>Production Credits and more</li>
                    </ul>
                    <a href="#" class="btn btn-uni br-round">view store</a>
                </div>
            </div>
        </div>
    </section> <!-- end of .section-homepage-info -->

    <section class="section-content-info sec-bg-clr">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg"
                        class="sec-image-thumbnail thumbnail-right" />
                </div>

                <div class="col-md-7 col-right">
                    <h2 class="section-heading clr-blu">
                        Add Unlimited<span class="d-block">Content</span>
                        <p class="section-sub-heading">You can add unlimited static pages and blog posts.</p>
                    </h2>

                    <ul class="col-count-2 list-check">
                        <li><i class="checked"></i><a href="#">Services</a></li>
                        <li><i class="checked"></i><a href="#">About Us</a></li>
                        <li><i class="checked"></i><a href="#">Contact US</a></li>
                        <li><i class="checked"></i><a href="#">Discography</a></li>
                        <li><i class="checked"></i><a href="#">Testimonials</a></li>
                        <li><i class="checked"></i><a href="#">License Options</a></li>
                        <li><i class="checked"></i><a href="#">Photos / Videos</a></li>
                        <li><i class="checked"></i><a href="#">Music Blog</a></li>
                    </ul>
                    <a href="#" class="btn btn-uni br-round">view store</a>
                </div>
            </div>
        </div>
    </section> <!-- end of .section-content-info -->

    <section class="section-review">
        <div class="container">
            <div class="content-wrap">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg"
                        class="thumbnail-right" />
                </figure>

                <div class="slide-content align-center bg-clr-blu">
                    <h2>Reviews</h2>
                    <div class="reviewslide">
                        <div class="rev-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg" />
                            <p>
                                Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                                <span>Pedro Toribio</span>
                            </p>
                        </div>

                        <div class="rev-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut
                                <span>Toribio Pedro</span>
                            </p>
                        </div>

                        <div class="rev-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beats.jpg" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, Ut enim ad minim veniam, quis
                                nostrud
                                exercitation ullamco laboris nisi ut sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                                <span>Lorem ipsum</span>
                            </p>
                        </div>

                        <div class="rev-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faqs.jpg" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut magna aliqua.
                                <span>Quis Nostrud</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end of .section-review -->

    <section class="section-compare align-center">
        <div class="container">
            <h2 class="section-heading clr-blu">
                Feature <span class="clr-light">Comparison</span>
            </h2>

            <table class="table-compare mt-5">
                <thead>
                    <tr>
                        <th>Features</th>
                        <th>Beatsmandu</th>
                        <th>Beats Star</th>
                        <th>Airbit</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>AInstant Beat Downloads</td>
                        <td><span class="cross">&#10007;</span></td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="cross">&#10007;</span></td>
                    </tr>

                    <tr>
                        <td>Coupons & Discounts</td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="cross">&#10007;</span></td>
                    </tr>

                    <tr>
                        <td>Sell Products</td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="cross">&#10007;</span></td>
                    </tr>

                    <tr>
                        <td>Unlimited Pages</td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="cross">&#10007;</span></td>
                    </tr>

                    <tr>
                        <td>News Blog</td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="cross">&#10007;</span></td>
                    </tr>

                    <tr>
                        <td>Add Features ( WP Plugins )</td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="cross">&#10007;</span></td>
                    </tr>

                    <tr>
                        <td>Create Landing Pages</td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="cross">&#10007;</span></td>
                    </tr>

                    <tr>
                        <td>Photo & Video Gallery</td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="cross">&#10007;</span></td>
                    </tr>

                    <tr>
                        <td>SEO Features</td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="cross">&#10007;</span></td>
                    </tr>

                    <tr>
                        <td>Customize Code</td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="tick">&#10003;</span></td>
                        <td><span class="cross">&#10007;</span></td>
                    </tr>

                    <tr>
                        <td>Marketing Graphics</td>
                        <td><span>90 Free Graphics</span></td>
                        <td><span>90 Free Graphics</span></td>
                        <td><span>90 Free Graphics</span></td>
                    </tr>

                    <tr>
                        <td>Price</td>
                        <td><span class="price"> $55 </span></td>
                        <td><span class="price"> $239 / Year </span></td>
                        <td><span class="price"> $239 / Year </span></td>
                    </tr>

                    <tr>
                        <td><strong>Website Hosting <span class="required">*</span></strong></td>
                        <td><span class="strong">Not Included</span></td>
                        <td><span class="strong">Hosted ( Limited Pages )</span></td>
                        <td><span class="strong">Hosted ( 1 Page Profile )</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section> <!-- end of .section-compare -->

    <section id="buytheme" class="section-purchase">

        <div class="container">
            <div class="row">
                <div class="col-md-6 column">
                    <h2 class="section-heading clr-blu">
                        Get it now & start your own <span class="clr-light">Business</span>
                    </h2>

                    <p class="section-sub-heading">Our template will help you sell beats, products, and make money.
                        Don't spend thousands of dollars hiring a coder to create a site.</p>

                    <h3 class="clr-light">Sell 1 Beat & It Pays For Itself</h3>

                    <p class="section-sub-heading">Over 40,000 costumers satisfied</p>
                </div> <!-- end of .column -->

                <div class="col-md-6 column">
                    <div class="column-purchase align-center">
                        <span class="price bold-8 clr-white">$55</span>
                        <ul class="list-check">
                            <li>
                                <i class="checked"></i>
                                90 Free Marketing Graphics
                            </li>

                            <li>
                                <i class="checked"></i>
                                Add unlimited beats
                            </li>

                            <li>
                                <i class="checked"></i>
                                Instant Payments
                            </li>

                            <li>
                                <i class="checked"></i>
                                Access to training videos
                            </li>

                            <li>
                                <i class="checked"></i>
                                Single Site License
                            </li>

                            <li>
                                <i class="checked"></i>
                                All Theme Features
                            </li>

                            <li>
                                <i class="checked"></i>
                                12 Months of Updates
                            </li>
                        </ul>
                        <a href="<?php echo home_url(); ?>/checkout?edd_action=add_to_cart&download_id=924"
                            class="btn-purchase btn-uni bold-7">Purchase This</a>

                        <p>Both paypal And Credit card accepted</p>
                    </div>
                </div> <!-- end of .column -->
            </div> <!-- end of .row -->
        </div> <!-- end of .container -->
    </section> <!-- end of .section-purchase -->
</div> <!-- end of .front-page-sections -->

<?php
get_footer();