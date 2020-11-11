<?php
/*
* This is to display functions.
*/
function harshit_theme_setup(){

    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support( 'post-thumbnails' );

    add_image_size('home-featured',520, 500, array('center','center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
    'primary' => __('Primary Menu','myfirsttheme')

    )); 

    $args = array(
        'default-image' => get_template_directory_uri().'/assest/img/1.jpg',
        'default-text-color' => '000',
        'width'        =>   1920,
        'height'       =>   400,
        'flex-width'   =>   true,
        'flex-height'  =>   true
    );

    add_theme_support('custom-header', $args);

};
add_action('after_setup_theme','harshit_theme_setup');


function harshit_theme_scripts(){

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assest/bootstrap/css/bootstrap.min.css');

    // wp_enqueue_script('my-slider', get_template_directory_uri().'/assest/js/my-js.js');

    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assest/bootstrap/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts','harshit_theme_scripts');

function harshit_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'description'   => 'Main sidebar on right side', 
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'theme_name' ),
        'id'            => 'footer-1',
        'description'   => 'Footer Widget 1', 
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'theme_name' ),
        'id'            => 'footer-2',
        'description'   => 'Footer Widget 1', 
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'theme_name' ),
        'id'            => 'footer-3',
        'description'   => 'Footer Widget 1', 
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}
add_action('widgets_init', 'harshit_widgets_init');