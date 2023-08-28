<?php

function farzaa_theme_support(){
    // Theme Support
    add_theme_support('title-tag');
    add_theme_support('thubnails');

    // Menus
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
    ));

    // slider custom post type
    // register_post_type('slider',array(
    //     'labels' => array(
    //         'name' => 'Slider',
    //         'add_new' => 'Add New Slider',
    //         'add_new_item' => 'Add New Slider',
    //     ),
    //     'public' => true,
    //     'supports' => array('title','editor'),
    //     'menu_icon' => 'dashicons-welcome-view-site',
    // ));


}
add_action('after_setup_theme','farzaa_theme_support');

// Theme css and js
function farzaa_css_js(){

    // css files
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/vendor/bootstrap/bootstrap.min.css');
    wp_enqueue_style('font-awesome-min',get_template_directory_uri().'/assets/vendor/font-awesome/all.min.css');
    wp_enqueue_style('font-awesome-sharp-regular',get_template_directory_uri().'/assets/vendor/font-awesome/sharp-regular.min.css');
    wp_enqueue_style('font-awesome-sharp-solid',get_template_directory_uri().'/assets/vendor/font-awesome/sharp-solid.min.css');
    wp_enqueue_style('modal-video',get_template_directory_uri().'/assets/vendor/modal-video/modal-video.min.css');
    wp_enqueue_style('mean-menu',get_template_directory_uri().'/assets/vendor/mean-menu/meanmenu.min.css');
    wp_enqueue_style('owl-carousel-css',get_template_directory_uri().'/assets/vendor/owl-carousel/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-carousel-css',get_template_directory_uri().'/assets/vendor/owl-carousel/owl.theme.default.min');
    wp_enqueue_style('slick',get_template_directory_uri().'/assets/vendor/slick/slick.css');
    wp_enqueue_style('nice-select',get_template_directory_uri().'/assets/vendor/nice-select/nice-select.css');
    wp_enqueue_style('main-css',get_template_directory_uri().'/assets/css/style.css');


    // script files
    wp_enqueue_script('jquery',get_template_directory_uri().'/assets/vendor/jquery/jquery-3.6.3.min.js', array(), '1.0.0', true );
    wp_enqueue_script('modal-video',get_template_directory_uri().'/assets/vendor/modal-video/jquery-modal-video.min.js', array(), '1.0.0', true );
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/vendor/bootstrap/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script('gsap-js',get_template_directory_uri().'/assets/vendor/gsap/gsap.min.js', array(), '1.0.0', true );
    wp_enqueue_script('syotimer-js',get_template_directory_uri().'/assets/vendor/syotimer/jquery.syotimer.min.js', array(), '1.0.0', true );
    wp_enqueue_script('nice-select-js',get_template_directory_uri().'/assets/vendor/nice-select/jquery.nice-select.min.js', array(), '1.0.0', true );
    wp_enqueue_script('owl-carouse-js',get_template_directory_uri().'/assets/vendor/owl-carousel/owl.carousel.min.js', array(), '1.0.0', true );
    wp_enqueue_script('mean-menu-js',get_template_directory_uri().'/assets/vendor/mean-menu/jquery.meanmenu.min.js', array(), '1.0.0', true );
    wp_enqueue_script('slick-js',get_template_directory_uri().'/assets/vendor/slick/slick.min.js', array(), '1.0.0', true );
    wp_enqueue_script('main-js',get_template_directory_uri().'/assets/js/main.js', array(), '1.0.0', true);

}
add_action('wp_enqueue_scripts','farzaa_css_js');

// farzaa widgets
function farzaa_sidebar_widgets(){
    // footer widgets
    register_sidebar(array(
        'name' => 'Footer Widgets',
        'id' => 'footer_widgets',
        'before_widget' => '<div class="col-xxl-2 col-lg-3 col-md-4 col-6 col-xxs-12 fz-footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="fz-footer-widget__title">',
        'after_title' => '</h5>',
    ));

}
add_action('widgets_init','farzaa_sidebar_widgets');


// Acf options
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme Option',
        'menu_title'    => 'Theme Option',
        'menu_slug'     => 'theme-Option',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'     =>'dashicons-welcome-widgets-menus',
        'position'     =>3
    ));


    acf_add_options_sub_page(array(
        'page_title'    => 'Header Options',
        'menu_title'    => 'Header Options',
        'parent_slug'   => 'theme-Option',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Options',
        'menu_title'    => 'Footer Options',
        'parent_slug'   => 'theme-Option',
    ));


}








?>