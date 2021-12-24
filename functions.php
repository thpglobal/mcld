<?php
/**
 * Functions and definitions
 *
 */
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo',['height'=>100] );
add_theme_support( 'post-thumbnails' );

//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');


function register_widget_areas() {
	register_sidebar( array(
    'name'          => 'Call to Action Bar',
    'id'            => 'call_to_action',
    'description'   => 'This widget area discription',
	'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'before_title'  => '<span>',
    'after_title'   => '</span>',
  ));


  register_sidebar( array(
    'name'          => 'Footer area',
    'id'            => 'footer_area',
    'description'   => 'New block ready footer',
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'before_title'  => '<span>',
    'after_title'   => '</span>',
  ));

  register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section class="sidebar">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'register_widget_areas' );


/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'gallery',
	'caption',
) );

/** 
 * Include primary navigation menu
 */
function thptheme_nav_init() {
	register_nav_menus( array(
		'menu-1' => 'Primary Menu'
	) );
}
add_action( 'init', 'thptheme_nav_init' );






/**
 * Enqueue scripts and styles.
 */
function thptheme_scripts() {
	wp_enqueue_style( 'thptheme-style', get_stylesheet_uri(),array(),rand(1,9999),'all' );
}
add_action( 'wp_enqueue_scripts', 'thptheme_scripts' );

function thptheme_create_post_custom_post() {
	register_post_type('custom_post', 
		array(
		'labels' => array(
			'name' => __('Custom Post', 'thptheme'),
		),
		'public'       => true,
		'hierarchical' => true,
		'supports'     => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
		), 
		'taxonomies'   => array(
				'post_tag',
				'category',
		) 
	));
}
