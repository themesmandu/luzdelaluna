<?php
/**
 * The template for displaying search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Luzdelaluna
 */

get_header();
?>

<section class="section-search">
	<div class="container">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) :
					?>

				<header class="page-header pb-4">
					<h1 class="page-title">
						<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'luzdelaluna' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->

				<ul class="search-results list-group">

					<?php
						/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called search-result.php in the template-parts folder.
						 */
						get_template_part( 'template-parts/search', 'result' );

						endwhile;
					?>

				</ul>

						<?php
						the_posts_pagination();
						else :
							get_template_part( 'template-parts/content', 'none' );
		endif;
						?>

			</main>
		</div><!-- #primary -->

	</div><!-- /.container -->
</section><!-- /.section-search -->

<?php
get_footer();
