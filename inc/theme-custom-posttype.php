<?php

 add_action( 'init', 'Custom_Posts_init' );
/**
 * Register a Custom Post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function Custom_Posts_init() {
	
	/* 
	*	Services Custom Post Type
	*/
	/*$Services_labels = array(
		'name'               => _x( 'Services', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Services', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Services', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Services', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Services', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Services', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Services', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Services', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Services', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Services:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Services found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'your-plugin-textdomain' )
	);

	$Services_args = array(
		'labels'             => $Services_labels,
		'description'        => __( 'Description.', 'services' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
	);

	register_post_type( 'Services', $Services_args );*/
	
	/* 
	*	Slider Custom Post Type
	*/
	/*$Slider_labels = array(
		'name'               => _x( 'Slider', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Slider', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Slider', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Slider', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Slider', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Slider', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Slider', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Slider', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Slider', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Slider:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Slider found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Slider found in Trash.', 'your-plugin-textdomain' )
	);

	$Slider_args = array(
		'labels'             => $Slider_labels,
		'description'        => __( 'Description.', 'slider' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
	);

	register_post_type( 'slider', $Slider_args );*/
	
	/* 
	*	DataCenter Custom Post Type
	*/
/*	$DataCenter_labels = array(
		'name'               => _x( 'Data Center', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Data Center', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Data Center', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Data Center', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Data Center', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Data Center', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Data Center', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Data Center', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Data Center', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Data Center', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Data Center', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Data Center:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Data Center found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Data Center found in Trash.', 'your-plugin-textdomain' )
	);

	$DataCenter_args = array(
		'labels'             => $DataCenter_labels,
		'description'        => __( 'Description.', 'Data Center' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'data-center' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title','thumbnail', 'excerpt','editor')
	);

	register_post_type( 'datacenter', $DataCenter_args );
	*/
	
	
	/* 
	*	Marketing Material Custom Post Type
	*/
	/*$MM_labels = array(
		'name'               => _x( 'Marketing Material','Marketing Material' ),
		'singular_name'      => _x( 'Marketing Material','Marketing Material' ),
		'menu_name'          => _x( 'Marketing Material','Marketing Material' ),
		'name_admin_bar'     => _x( 'Marketing Material','Marketing Material' ),
		'add_new'            => _x( 'Add New Marketing Material','Marketing Material' ),
		'add_new_item'       => __( 'Add New Marketing Material' ),
		'new_item'           => __( 'New Data Marketing Material' ),
		'edit_item'          => __( 'Edit Marketing Material' ),
		'view_item'          => __( 'View Marketing Material' ),
		'all_items'          => __( 'All Marketing Material' ),
		'search_items'       => __( 'Search Marketing Material' ),
		'parent_item_colon'  => __( 'Parent Marketing Material:' ),
		'not_found'          => __( 'No Marketing Material found.' ),
		'not_found_in_trash' => __( 'No Marketing Material found in Trash.' )
	);

	$MM_args = array(
		'labels'             => $MM_labels,
		'description'        => __( 'Description.', 'Marketing Materials' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'marketing-materials' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'marketingmaterial', $MM_args );	*/
	
	
	/* 
	*	Products Custom Post Type
	*/
	/*$PP_labels = array(
		'name'               => _x( 'Products','Products' ),
		'singular_name'      => _x( 'Products','Products' ),
		'menu_name'          => _x( 'Products','Products' ),
		'name_admin_bar'     => _x( 'Products','Products' ),
		'add_new'            => _x( 'Add New Product','Products' ),
		'add_new_item'       => __( 'Add New Product' ),
		'new_item'           => __( 'New Data Products' ),
		'edit_item'          => __( 'Edit Product' ),
		'view_item'          => __( 'View Product' ),
		'all_items'          => __( 'All Products' ),
		'search_items'       => __( 'Search Products' ),
		'parent_item_colon'  => __( 'Parent Products:' ),
		'not_found'          => __( 'No Products found.' ),
		'not_found_in_trash' => __( 'No Products found in Trash.' )
	);

	$PP_args = array(
		'labels'             => $PP_labels,
		'description'        => __( 'Description.', 'Products' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'products' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'products', $PP_args );	*/

	/* 
	*	Testimonials Custom Post Type
	*/
	$TT_labels = array(
		'name'               => _x( 'Testimonials','Products' ),
		'singular_name'      => _x( 'Testimonials','Products' ),
		'menu_name'          => _x( 'Testimonials','Products' ),
		'name_admin_bar'     => _x( 'Testimonials','Products' ),
		'add_new'            => _x( 'Add New Testimonials','Products' ),
		'add_new_item'       => __( 'Add New Testimonials' ),
		'new_item'           => __( 'New Testimonials' ),
		'edit_item'          => __( 'Edit Testimonials' ),
		'view_item'          => __( 'View Testimonials' ),
		'all_items'          => __( 'All Testimonials' ),
		'search_items'       => __( 'Search Testimonials' ),
		'parent_item_colon'  => __( 'Parent Testimonials:' ),
		'not_found'          => __( 'No Testimonials found.' ),
		'not_found_in_trash' => __( 'No Testimonials found in Trash.' )
	);

	$TT_args = array(
		'labels'             => $TT_labels,
		'description'        => __( 'Description.', 'Testimonials' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonials' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title' , 'editor' , 'excerpt')
		
	);

	register_post_type( 'testimonials', $TT_args );	
	
}