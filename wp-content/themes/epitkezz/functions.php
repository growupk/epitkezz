<?php
// Hide admin bar
show_admin_bar(false);

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Widgets',
		'id'   => 'sidebar-widgets',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
		));
}

// Activate post thumbnails
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

// Set up basic menu locations
register_nav_menus (
	array (
		'header-menu' => __( 'Header menu' ),
		'footer-menu' => __( 'Footer menu' ),
		'left-menu' => __( 'Left menu' ),
		'right-menu' => __( 'Right menu' ),
		)
	);

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	acf_add_options_sub_page('Fejléc');
	acf_add_options_sub_page('Lábléc');

	acf_add_options_page(array(
		'page_title' 	=> 'Téma beállítások',
		'menu_title'	=> 'Téma beállítások',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> '',
		'position'		=> false,
		'icon-url'		=> false
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Fejléc',
		'menu_title'	=> 'Fejléc',
		'menu_slug' 	=> 'theme-options-header',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'theme-options',
		'position'		=> false,
		'icon-url'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Lábléc',
		'menu_title'	=> 'Lábléc',
		'menu_slug' 	=> 'theme-options-footer',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'theme-options',
		'position'		=> false,
		'icon-url'		=> false
	));
	
}

function create_post_type() {
	register_post_type( 'houses',
		array(
		'labels' => array(
			'name' => __( 'Tervkatalógus' ),
			'singular_name' => __( 'Tervkatalógus' )
		),
		'public' => true,
		'has_archive' => true,
		'query_var' => true,
		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array( 'category' )
		)
	);
}
add_action( 'init', 'create_post_type' );

include 'func/scripts_and_stylesheets.php';
