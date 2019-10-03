<?php
/**
 * EDD custom values.
 *
 * @package Luzdelaluna
 */


define( 'EDD_SLUG', 'products' );



/**
 * Changes admin menu names to products.
 *
 * @param array $labels Labels for admin menu.
 * @return array
 */
function luzdelaluna_download_labels( $labels ) {
	$labels = array(
		'name'                  => _x( 'Products', 'post type general name', 'luzdelaluna' ),
		'singular_name'         => _x( 'Product', 'post type singular name', 'luzdelaluna' ),
		'add_new'               => __( 'Add New', 'luzdelaluna' ),
		'add_new_item'          => __( 'Add New Product', 'luzdelaluna' ),
		'edit_item'             => __( 'Edit Product', 'luzdelaluna' ),
		'new_item'              => __( 'New Product', 'luzdelaluna' ),
		'all_items'             => __( 'All Products', 'luzdelaluna' ),
		'view_item'             => __( 'View Product', 'luzdelaluna' ),
		'search_items'          => __( 'Search Products', 'luzdelaluna' ),
		'not_found'             => __( 'No Product found', 'luzdelaluna' ),
		'not_found_in_trash'    => __( 'No Products found in Trash', 'luzdelaluna' ),
		'parent_item_colon'     => '',
		'menu_name'             => __( 'Products', 'luzdelaluna' ),
		'featured_image'        => __( '%1$s Image', 'easy-digital-downloads' ),
		'set_featured_image'    => __( 'Set %1$s Image', 'easy-digital-downloads' ),
		'remove_featured_image' => __( 'Remove %1$s Image', 'easy-digital-downloads' ),
		'use_featured_image'    => __( 'Use as %1$s Image', 'easy-digital-downloads' ),
	);
	return $labels;
}
add_filter( 'edd_download_labels', 'luzdelaluna_download_labels' );

/**
 * Changes default download name to beats.
 *
 * @param array $labels Labels for download name.
 * @return array
 */
function pw_edd_product_labels( $labels ) {
	$labels = array(
		'singular' => __( 'Product', 'luzdelaluna' ),
		'plural'   => __( 'Products', 'luzdelaluna' ),
	);
	return $labels;
}
add_filter( 'edd_default_downloads_name', 'pw_edd_product_labels' );
