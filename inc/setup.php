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

// Register Cpt
function register_cpt()
{
    // Course
    $labels = array(
        'name' => 'Courses',
        'singular_name' => 'Course',
        'menu_name' => 'Courses',
        'name_admin_bar' => 'Course',
        'archives' => 'Course Archives',
        'attributes' => 'Course Attributes',
        'parent_item_colon' => 'Parent Course:',
        'all_items' => 'All Courses',
        'add_new_item' => 'Add New Course',
        'add_new' => 'Add New',
        'new_item' => 'New Course',
        'edit_item' => 'Edit Course',
        'update_item' => 'Update Course',
        'view_item' => 'View Course',
        'view_items' => 'View Courses',
        'search_items' => 'Search Courses',
        'not_found' => 'No Courses found',
        'not_found_in_trash' => 'No Courses found in Trash',
        'featured_image' => 'Featured Image',

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
        'show_in_rest' => true,
    );

    register_post_type('course', $args);

    $labels = array(
        'name'              => 'Course Categories',
        'singular_name'     => 'Course Category',
        'menu_name'         => 'Course Categories',
        'all_items'         => 'All Categories',
        'parent_item'       => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'new_item_name'     => 'New Category Name',
        'add_new_item'      => 'Add New Category',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'view_item'         => 'View Category',
        'search_items'      => 'Search Categories',
        'not_found'         => 'No Categories found',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true, // Makes it work like categories (with checkboxes)
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true, // Shows category column in the Course list
        'show_in_rest'      => true, // Important for Gutenberg support
        'query_var'         => true,
        'rewrite'           => array('slug' => 'course-category'), // URL will be /course-category/name
    );

    // Changed 'category' to 'course_cat' to avoid system conflicts
    register_taxonomy('course_cat', array('course'), $args);

    // create a cpt event
    $labels = array(
        'name' => 'Events',
        'singular_name' => 'Event',
        'menu_name' => 'Events',
        'name_admin_bar' => 'Event',
        'archives' => 'Event Archives',
        'attributes' => 'Event Attributes',
        'parent_item_colon' => 'Parent Event:',
        'all_items' => 'All Events',
        'add_new_item' => 'Add New Event',
        'add_new' => 'Add New',
        'new_item' => 'New Event',
        'edit_item' => 'Edit Event',
        'update_item' => 'Update Event',
        'view_item' => 'View Event',
        'view_items' => 'View Events',
        'search_items' => 'Search Events',
        'not_found' => 'No Events found',
        'not_found_in_trash' => 'No Events found in Trash',
        'featured_image' => 'Featured Image',

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
        'show_in_rest' => true,
    );

    register_post_type('event', $args);

    // testimonials cpt
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'menu_name' => 'Testimonials',
        'name_admin_bar' => 'Testimonial',
        'archives' => 'Testimonial Archives',
        'attributes' => 'Testimonial Attributes',
        'parent_item_colon' => 'Parent Testimonial:',
        'all_items' => 'All Testimonials',
        'add_new_item' => 'Add New Testimonial',
        'add_new' => 'Add New',
        'new_item' => 'New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'update_item' => 'Update Testimonial',
        'view_item' => 'View Testimonial',
        'view_items' => 'View Testimonials',
        'search_items' => 'Search Testimonials',
        'not_found' => 'No Testimonials found',
        'not_found_in_trash' => 'No Testimonials found in Trash',
        'featured_image' => 'Featured Image',

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
        'show_in_rest' => true,
    );

    register_post_type('testimonial', $args);

    //article cpt
    $labels = array(
        'name' => 'Articles',
        'singular_name' => 'Article',
        'menu_name' => 'Articles',
        'name_admin_bar' => 'Article',
        'archives' => 'Article Archives',
        'attributes' => 'Article Attributes',
        'parent_item_colon' => 'Parent Article:',
        'all_items' => 'All Articles',
        'add_new_item' => 'Add New Article',
        'add_new' => 'Add New',
        'new_item' => 'New Article',
        'edit_item' => 'Edit Article',
        'update_item' => 'Update Article',
        'view_item' => 'View Article',
        'view_items' => 'View Articles',
        'search_items' => 'Search Articles',
        'not_found' => 'No Articles found',
        'not_found_in_trash' => 'No Articles found in Trash',
        'featured_image' => 'Featured Image',

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
        'show_in_rest' => true,
    );

    register_post_type('article', $args);

}
add_action('init', 'register_cpt');