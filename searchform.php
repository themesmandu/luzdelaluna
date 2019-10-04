<?php
/**
 * The template for displaying search forms
 *
 * @package Luzdelaluna
 */

?>

<!-- Search Form Widget -->
<div class="luzdelaluna-search">
    <div class="content">
        <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
            <div class="input-group">
                <input class="field form-control" id="s" name="s" type="text"
                    placeholder="<?php esc_attr_e( 'Search &hellip;', 'luzdelaluna' ); ?>"
                    value="<?php the_search_query(); ?>">
                <span class="input-group-append">
                    <input class="submit btn-ubi" id="searchsubmit" name="submit" type="submit"
                        value="<?php esc_attr_e( 'Search', 'luzdelaluna' ); ?>">
                </span>
            </div>
        </form>
    </div>
</div>


