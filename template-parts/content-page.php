<?php
/**
 * Template part for displaying page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luzdelaluna
 */

?>

<article id="post-<?php the_ID(); ?>">

    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>

    <div class="card-body">

        <div class="entry-content">
            <?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'luzdelaluna' ),
				'after'  => '</div>',
			)
		);
		?>
        </div>

        <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
            <?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current page */
						__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'luzdelaluna' ),
						get_the_title()
					),
					'<footer class="entry-footer"><span class="edit-link">',
					'</span></footer>'
				);
			?>
        </footer>
        <?php endif; ?>

    </div><!-- .card-body -->
</article><!-- #post-<?php the_ID(); ?> -->