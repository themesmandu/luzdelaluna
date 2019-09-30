<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luzdelaluna
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title clr-blu uppercase bold-8"><?php esc_html_e( 'Nothing Found', 'luzdelaluna' ); ?></h1>
	</header><!-- .page-header -->

	<?php
	if ( is_home() && current_user_can( 'publish_posts' ) ) :

		printf(
			'<p>' . wp_kses(
				/* translators: 1: link to WP admin new post page. */
				__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'luzdelaluna' ),
				array(
					'a' => array(
						'href' => array(),
					),
				)
			) . '</p>',
			esc_url( admin_url( 'post-new.php' ) )
		);

		elseif ( is_search() ) :
			?>

			<p class="section-sub-heading"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'luzdelaluna' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p class="section-sub-heading"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'luzdelaluna' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>

</section>
