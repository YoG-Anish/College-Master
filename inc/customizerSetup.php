<?php 
//Customizer Setup
function collegemaster_customizer($wp_customize) {

   // 1. Create a section for social links
    $wp_customize->add_section('header_section', array(
        'title'    => 'Header Section',
        'priority' => 30,
    ));

    // Phone number
    $wp_customize->add_setting('phone_number', array('default' => '', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('phone_number', array(
        'label'   => 'Phone Number',
        'section' => 'header_section',
        'type'    => 'text',
    ));

    //email 
    $wp_customize->add_setting('email', array('default' => '', 'sanitize_callback' => 'sanitize_email'));
    $wp_customize->add_control('email', array(
        'label'   => 'Email',
        'section' => 'header_section',
        'type'    => 'email',
    ));

    // 2. Add Settings and Controls for each link
    $social_networks = array(
        'facebook_url'  => 'Facebook URL',
        'twitter_url'   => 'Twitter URL',
        'instagram_url' => 'Instagram URL',
    );

    foreach ($social_networks as $id => $label) {
        $wp_customize->add_setting($id, array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
        $wp_customize->add_control($id, array(
            'label'   => $label,
            'section' => 'header_section',
            'type'    => 'url',
        ));
    }

    // header logo
    $wp_customize->add_setting('header_logo', array('default' => '', 'sanitize_callback' => 'absint'));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo', array(
        'label'   => 'Header Logo',
        'section' => 'header_section',
    )));

    // Customizer footer section
    $wp_customize->add_section('footer_section', array(
        'title'    => 'Footer Section',
        'priority' => 30,
    ));

    // footer text  
    $wp_customize->add_setting('footer_text', array('default' => '', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('footer_text', array(
        'label'   => 'Footer Text',
        'section' => 'footer_section',
        'type'    => 'text',
    ));

    //footer description
    $wp_customize->add_setting('footer_description', array('default' => '', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('footer_description', array(
        'label'   => 'Footer Description',
        'section' => 'footer_section',
        'type'    => 'text',
    ));

    //footer phone  
    $wp_customize->add_setting('footer_phone', array('default' => '', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('footer_phone', array(
        'label'   => 'Footer Phone',
        'section' => 'footer_section',
        'type'    => 'text',
    ));

    //footer email
    $wp_customize->add_setting('footer_email', array('default' => '', 'sanitize_callback' => 'sanitize_email'));
    $wp_customize->add_control('footer_email', array(
        'label'   => 'Footer Email',
        'section' => 'footer_section',
        'type'    => 'email',
    ));

    // footer menu title
    $wp_customize->add_setting('footer_menu_title', array('default' => '', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('footer_menu_title', array(
        'label'   => 'Footer Menu Title',
        'section' => 'footer_section',
        'type'    => 'text',
    ));

    //footer gallery title
    $wp_customize->add_setting('footer_gallery_title', array('default' => '', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('footer_gallery_title', array(
        'label'   => 'Footer Gallery Title',
        'section' => 'footer_section',
        'type'    => 'text',
    ));

    //footer map title  
    $wp_customize->add_setting('footer_map_title', array('default' => '', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('footer_map_title', array(
        'label'   => 'Footer Map Title',
        'section' => 'footer_section',
        'type'    => 'text',
    ));

    //footer map  select page
    $wp_customize->add_setting('footer_map_page', array('default' => '', 'sanitize_callback' => 'absint'));
    $wp_customize->add_control('footer_map_page', array(
        'label'   => 'Footer Map Page',
        'section' => 'footer_section',
        'type'    => 'dropdown-pages',
    ));
    
    //footer social links foreach
    $social_networks = array(
        'facebook_url'  => 'Facebook URL',
        'twitter_url'   => 'Twitter URL',
        'instagram_url' => 'Instagram URL',
        'youtube_url'   => 'Youtube URL',
    );

    foreach ($social_networks as $id => $label) {
        $wp_customize->add_setting($id, array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
        $wp_customize->add_control($id, array(
            'label'   => $label,
            'section' => 'footer_section',
            'type'    => 'url',
        ));
    }

}
add_action('customize_register', 'collegemaster_customizer');