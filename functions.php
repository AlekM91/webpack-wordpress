<?php

// Load Files
function load_files() {
    // CSS
    wp_register_style('main-css',  get_template_directory_uri() . '/assets/dist/css/main.css', array(), false, 'all');
    wp_enqueue_style('main-css');
    
    // JS
    wp_register_script('main-js', get_template_directory_uri().'/assets/dist/js/main.js', array(), false, true);
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'load_files');

// Theme Features
function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    register_nav_menu('mainMenu', 'Main Menu');
}
add_action('after_setup_theme', 'theme_features');

// Custom image sizes
// add_image_size('blog-large', 800, 400, true);
// add_image_size('blog-small', 300, 200, true);
// add_image_size('banner', 1500, 350, array('center', 'center'));  
?>