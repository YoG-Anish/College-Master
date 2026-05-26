<?php
function collegemaster_enqueue_scripts()
{

    wp_enqueue_style('collegemaster-style', get_stylesheet_uri());
    wp_enqueue_style('collegemaster-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('collegemaster-slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('collegemaster-all', get_template_directory_uri() . '/assets/css/all.min.css');
    wp_enqueue_style('collegemaster-responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('collegemaster-demo', get_template_directory_uri() . '/assets/css/demo.css');

    //enqueue script
    wp_enqueue_script('jquery');
    wp_enqueue_script('collegemaster-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('collegemaster-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('collegemaster-masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), '', true);
    wp_enqueue_script('collegemaster-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'collegemaster_enqueue_scripts');