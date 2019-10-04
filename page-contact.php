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
			<div class="col-md-4">
				<h3 class="page-heading uppercase bold-8">Contact Info</h3>

				<address>
					<ul class="address">
						<li>
							<span class="uppercase bold-7">Address</span>
							<h5 class="bold-5">1600 Pennsylvania Ave NW, Washington Castle, PA 16101-5161</h5>
						</li>

						<li>
							<span class="uppercase bold-7">Phone</span>
							<h5 class="bold-4">+123 456 7890</h5>
						</li>
					</ul>
				</address>

				<p class="description">Watching a movie on your smartphone can be pretty great, but who has the arm
					strength to keep your
					phone at face level for two hours? Not this kid, that’s for sure.</p>
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

			<div class="col-md-8 align-right">
				<div class="mapouter">
					<div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
							src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"
							frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="contact-form">
			<h3 class="page-heading uppercase bold-8">Send Message</h3>
			<p class="page-sub-heading">If have you any question dont hesitate to send us a message</p>
			<?php echo do_shortcode( '[contact-form-7 id="964" title="Contact form 2"]' ); ?>
		</div>
	</div>
</div>

<?php
get_footer();
