<?php
// Add this to your functions.php file
function my_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

//register menu supports
function register_my_menus()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu'),
    ));
}
add_action('init', 'register_my_menus');
