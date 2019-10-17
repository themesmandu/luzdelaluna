<?php
/**
 * CPT and taxonomies
 *
 * @package Luzdelaluna
 */

function portfolio_cpt_register() {

	/**
	 * Post Type: Portfolios.
	 */

	$labels = array(
		'name'                  => __( 'Portfolios', 'luzdelaluna' ),
		'singular_name'         => __( 'Portfolio', 'luzdelaluna' ),
		'menu_name'             => __( 'My Portfolios', 'luzdelaluna' ),
		'all_items'             => __( 'All Portfolios', 'luzdelaluna' ),
		'add_new'               => __( 'Add New', 'luzdelaluna' ),
		'add_new_item'          => __( 'Add New Portfolio', 'luzdelaluna' ),
		'edit_item'             => __( 'Edit Portfolio', 'luzdelaluna' ),
		'new_item'              => __( 'New Portfolio', 'luzdelaluna' ),
		'view_item'             => __( 'View Portfolio', 'luzdelaluna' ),
		'view_items'            => __( 'View Portfolios', 'luzdelaluna' ),
		'search_items'          => __( 'Search Portfolio', 'luzdelaluna' ),
		'not_found'             => __( 'No Portfolios Found', 'luzdelaluna' ),
		'not_found_in_trash'    => __( 'No Portfolios found in Trash', 'luzdelaluna' ),
		'parent_item_colon'     => __( 'Parent Portfolio', 'luzdelaluna' ),
		'featured_image'        => __( 'Featured Image for this Portfolio', 'luzdelaluna' ),
		'set_featured_image'    => __( 'Set Featured Image for this Portfolio', 'luzdelaluna' ),
		'remove_featured_image' => __( 'Remove Featured Image for this Portfolio', 'luzdelaluna' ),
		'use_featured_image'    => __( 'Use as Features Image for this Portfolio', 'luzdelaluna' ),
		'archives'              => __( 'Portfolio archives', 'luzdelaluna' ),
		'insert_into_item'      => __( 'Insert into Portfolio', 'luzdelaluna' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'luzdelaluna' ),
		'filter_items_list'     => __( 'Filter Portfolio list', 'luzdelaluna' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'luzdelaluna' ),
		'items_list'            => __( 'Portfolios list', 'luzdelaluna' ),
		'attributes'            => __( 'Portfolio Attributes', 'luzdelaluna' ),
		'name_admin_bar'        => __( 'Portfolio', 'luzdelaluna' ),
		'parent_item_colon'     => __( 'Parent Portfolio', 'luzdelaluna' ),
	);

	$args = array(
		'label'                 => __( 'Portfolios', 'luzdelaluna' ),
		'labels'                => $labels,
		'description'           => 'Used to add portfolios',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'delete_with_user'      => false,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'has_archive'           => false,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'exclude_from_search'   => false,
		'capability_type'       => 'post',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'rewrite'               => array(
			'slug'       => 'portfolio',
			'with_front' => true,
		),
		'query_var'             => true,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'portfolio_cpt_register' );


function filter_tax_register() {

	/**
	 * Taxonomy: Filters.
	 */

	$labels = array(
		'name'                       => __( 'Filters', 'luzdelaluna' ),
		'singular_name'              => __( 'Filter', 'luzdelaluna' ),
		'menu_name'                  => __( 'Filters', 'luzdelaluna' ),
		'all_items'                  => __( 'All Filter', 'luzdelaluna' ),
		'edit_item'                  => __( 'Edit Filter', 'luzdelaluna' ),
		'view_item'                  => __( 'View Filter', 'luzdelaluna' ),
		'update_item'                => __( 'Update Filter Name', 'luzdelaluna' ),
		'add_new_item'               => __( 'Add New Filter', 'luzdelaluna' ),
		'new_item_name'              => __( 'New Filter Name', 'luzdelaluna' ),
		'parent_item'                => __( 'Parent Filter', 'luzdelaluna' ),
		'parent_item_colon'          => __( 'Parent Filter:', 'luzdelaluna' ),
		'search_items'               => __( 'Search Filters', 'luzdelaluna' ),
		'popular_items'              => __( 'Popular Filters', 'luzdelaluna' ),
		'separate_items_with_commas' => __( 'Separate Filters with comma', 'luzdelaluna' ),
		'add_or_remove_items'        => __( 'Add or Remove Filters', 'luzdelaluna' ),
		'choose_from_most_used'      => __( 'Choose from the most used Filters', 'luzdelaluna' ),
		'not_found'                  => __( 'No Filters found', 'luzdelaluna' ),
		'no_terms'                   => __( 'No Filters', 'luzdelaluna' ),
		'items_list_navigation'      => __( 'Filters list navigation', 'luzdelaluna' ),
		'items_list'                 => __( 'Filters list', 'luzdelaluna' ),
	);

	$args = array(
		'label'                 => __( 'Filters', 'luzdelaluna' ),
		'labels'                => $labels,
		'public'                => true,
		'publicly_queryable'    => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'rewrite'               => array(
			'slug'       => 'filters',
			'with_front' => true,
		),
		'show_admin_column'     => false,
		'show_in_rest'          => true,
		'rest_base'             => 'filters',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
		'show_in_quick_edit'    => false,
	);
	register_taxonomy( 'filters', array( 'portfolio' ), $args );
}
add_action( 'init', 'filter_tax_register' );
