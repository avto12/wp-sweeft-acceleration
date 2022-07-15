<?php 


// logo

add_theme_support( 'custom-logo' );

function wpsweeft_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 100,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
    

 
}
 
add_action( 'after_setup_theme', 'wpsweeft_custom_logo_setup' );


// nav walker
require_once('wp_bootstrap_navwalker.php');
// Theme Support

function wpsweeft_theme_setup() {
    add_theme_support('post-thumbnails');
    // Nav Menus
    register_nav_menus(array(
        'main_menu' => __('Main Menu')
    ));

}

add_action('after_setup_theme', 'wpsweeft_theme_setup');



// Excerpt Length Control
function set_excerpt_length() {
    return 10;
}

add_filter('excerpt_length', 'set_excerpt_length');


// Widget locations
function wpsweeft_init_widgets($id) {

    register_sidebar( array(
        'name'          =>  'Sidebar',
        'id'            =>  'sidebar',
        'before_widget' =>  '<div class="position-sticky"',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4>',
        'after_title'   =>  '</h4>',
    ));

    register_sidebar( array(
        'name'          =>  'box1',
        'id'            =>  'box1',
        'before_widget' =>  '<div class="box"',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3>',
        'after_title'   =>  '</h3>',
    ));

    register_sidebar( array(
        'name'          =>  'box2',
        'id'            =>  'box2',
        'before_widget' =>  '<div class="box"',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3>',
        'after_title'   =>  '</h3>',
    ));

}

add_action('widgets_init', 'wpsweeft_init_widgets');
 

// Customizer File 

require get_template_directory(). './inc/customizer.php';

 
?>