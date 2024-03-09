<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TEMPLATE NAME
 */

 /*
 * ----------------------------------------------------------------------------------------
 *  Property
 * ----------------------------------------------------------------------------------------
 */
function property_custom_posts() {
	$labels = array(
		'name'                => __( 'Property' ),
		'singular_name'       => __( 'Property'),
		'menu_name'           => __( 'Property'),
		'parent_item_colon'   => __( 'Parent Property'),
		'all_items'           => __( 'All Property'),
		'view_item'           => __( 'View Property'),
		'add_new_item'        => __( 'Add New Property'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Property'),
		'update_item'         => __( 'Update Property'),
		'search_items'        => __( 'Search Property'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Property'),
		'description'         => __( 'Best Property'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon' 		=> 'dashicons-calendar',
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('tag', 'property-category'),
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite' => array(
			'slug' => 'property',
			'with_front' => true
		)
);
	register_post_type( 'property', $args );
}
add_action( 'init', 'property_custom_posts', 0 );