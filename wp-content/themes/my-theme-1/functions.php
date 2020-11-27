<?php
/*
* This is to display functions.
*/

// here are some wordPress theme setups
function harshit_theme_setup(){

    // to create custom wordpress logo
    add_theme_support('custom-logo');

    // to create title tag
    add_theme_support('title-tag');

    // to add featured thumbnails/images 
    add_theme_support( 'post-thumbnails' );

    // for  image size 
    add_image_size('home-featured',520, 500, array('center','center'));

    // for automatic-feed-links
    add_theme_support('automatic-feed-links');

    // for register_nav_menus
    register_nav_menus( array(
    'primary' => __('Primary Menu','myfirsttheme')

    )); 

    // custom headers in theme setup
    $args = array(
        'default-image' => get_template_directory_uri().'/assest/img/1.jpg',  // default image
        'default-text-color' => '000',                                        // default color
        'width'        =>   1920,
        'height'       =>   400,
        'flex-width'   =>   true,
        'flex-height'  =>   true
    );

    add_theme_support('custom-header', $args);

};
add_action('after_setup_theme','harshit_theme_setup');


// this function is for setup css , javascript , bootstrap , jquery files
function harshit_theme_scripts(){

    wp_enqueue_style('style', get_stylesheet_uri());

    // bootstrap css
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assest/bootstrap/css/bootstrap.min.css');

    // wp_enqueue_script('my-slider', get_template_directory_uri().'/assest/js/my-js.js');

    // jquery setup
    wp_enqueue_script('jquery');

    // javascript setup
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assest/bootstrap/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts','harshit_theme_scripts');


// setup for footer widget and sidebar
function harshit_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),           // name
        'id'            => 'sidebar-1',                                    // sidebar id
        'description'   => 'Main sidebar on right side',                   // description
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'theme_name' ),           // name
        'id'            => 'footer-1',                                      // footer sidebar id
        'description'   => 'Footer Widget 1',                               // description
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'theme_name' ),           // name
        'id'            => 'footer-2',                                      // footer sidebar id
        'description'   => 'Footer Widget 1',                               // description
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'theme_name' ),            // name
        'id'            => 'footer-3',                                       // footer sidebar id
        'description'   => 'Footer Widget 1',                                // description
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}
add_action('widgets_init', 'harshit_widgets_init');


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 11;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Include Customizer
require get_template_directory().'/inc/customizer.php';
