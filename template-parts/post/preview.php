<?php
/**
 * Template part for displaying posts preview on the Posts page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luzdelaluna
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>

    <div class="content-wrap box-shadow">
        <div class="entry-meta">
            <?php luzdelaluna_posted_by(); ?>
            <?php luzdelaluna_posted_on(); ?>
        </div>

        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <div class="entry-summary">
            <?php luzdelaluna_entry_summary(); ?>
        </div>

        <div class="entry-footer">
            <?php luzdelaluna_entry_footer(); ?>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->