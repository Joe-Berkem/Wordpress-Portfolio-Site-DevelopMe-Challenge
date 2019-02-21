<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action('init','create_custom_post_type_case_study'); // define Case Study custom post type
function create_custom_post_type_case_study(){
	
	$labels = array(
		'name' => 'Case Studies',
		'singular_name' => 'Case Study',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Case Study',
		'edit_item' => 'Edit Case Study',
		'new_item' => 'New Case Study',
		'view_item' => 'View Case Study',
		'search_items' => 'Search Case Studies',
		'not_found' => 'No Case Studies found',
		'not_found_in_trash' => 'No Case Studies found in Trash',
		'parent_item_colon' => '',
	);

	$args = array(
		'label' => __('Case Studies'),
		'labels' => $labels, 
		'public' => true,
		'can_export' => true,
		'show_ui' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-portfolio', 
		'hierarchical' => false,
		'rewrite' => array( "slug" => "casestudies" ), 
		'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'),
		'show_in_nav_menus' => true,
		'taxonomies' => array( 'case_study_category', 'post_tag') 
	);


	register_post_type('casestudies', $args);
}
