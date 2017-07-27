<?php
function business_customize_register($wp_customize) {
// Banner Section
    $wp_customize->add_section('banner', array(
        'title' => __('Banner', 'business-theme'),
        'description' => sprintf(__('Options for homepage banner', 'business-theme')),
        'priority' => 130
    ));

// Heading Setting
    $wp_customize->add_setting('banner_heading', array(
        'default' => _x('Banner Heading', 'business-theme'),
        'type' => 'theme_mod'
    ));

// Heading Control
    $wp_customize->add_control('banner_heading', array(
        'label' => __('Heading', 'business-theme'),
        'section' => 'banner',
        'priority' => 20
    ));

// Text Setting
    $wp_customize->add_setting('banner_text', array(
        'default' => _x('Welcome to the Wordpress Business Theme. This theme uses the Twitter Bootstrap 3 framework and can be customized to your liking', 'business-theme'),
        'type' => 'theme_mod'
    ));

// Text Control
    $wp_customize->add_control('banner_text', array(
        'label' => __('Text', 'business-theme'),
        'section' => 'banner',
        'priority' => 20
    ));

// Button Text Setting
    $wp_customize->add_setting('banner_btn_text', array(
        'default' => _x('Sign Up', 'business-theme'),
        'type' => 'theme_mod'
    ));

// Button Text Control
    $wp_customize->add_control('banner_btn_text', array(
        'label' => __('Button Text', 'business-theme'),
        'section' => 'banner',
        'priority' => 20
    ));
// Button URL Setting
    $wp_customize->add_setting('banner_btn_url', array(
        'default' => _x('http://test.com', 'business-theme'),
        'type' => 'theme_mod'
    ));

// Button URL Control
    $wp_customize->add_control('banner_btn_url', array(
        'label' => __('Button URL', 'business-theme'),
        'section' => 'banner',
        'priority' => 20
    ));

// Background Image Setting
    $wp_customize->add_setting('banner_image', array(
        'default' => get_bloginfo('template_directory').'/img/banner.jpg',
        'type' => 'theme_mod'
    ));

// Background Image Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
        'label' => __('Background Image', 'business-theme'),
        'section' => 'banner',
        'settings' => 'banner_image'
    )));

// Boxes Section
    $wp_customize->add_section('boxes', array(
        'title' => __('Boxes', 'business-theme'),
        'description' => sprintf( __('Options for homepage boxes', 'business-theme')),
        'priority' => 130
    ));

// BOX 1
// Box 1 Heading Setting
    $wp_customize->add_setting('box1_heading', array(
        'default' => _x('Box 1 Heading', 'business-theme'),
        'type' => 'theme_mod'
    ));

//Box 1 Heading Control
    $wp_customize->add_control('box1_heaading', array(
        'label' => __('Box 1 Heading', 'business-theme'),
        'section' => 'boxes',
        'priority' => 20
    ));

// Box 1 Text Setting
    $wp_customize->add_setting('box1_text', array(
        'default' => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'business-theme'),
        'type' => 'theme_mod'
    ));

//Box 1 Text Control
    $wp_customize->add_control('box1_text', array(
        'label' => __('Box 1 Text', 'business-theme'),
        'section' => 'boxes',
        'priority' => 20
    ));

// Box 1 Icon Setting
    $wp_customize->add_setting('box1_icon', array(
        'default' => _x('bar-chart', 'business-theme'),
        'type' => 'theme_mod'
    ));

// Box 1 Icon Control
$wp_customize->add_control('box1_icon', array(
    'label' => __('Box 1 Icon' , 'business-theme'),
    'section' => 'boxes',
    'priority' => 20
));

// BOX 2
// Box 2 Heading Setting
$wp_customize->add_setting('box2_heading', array(
    'default' => _x('Box 2 Heading', 'business-theme'),
    'type' => 'theme_mod'
));

//Box 2 Heading Control
$wp_customize->add_control('box2_heaading', array(
    'label' => __('Box 2 Heading', 'business-theme'),
    'section' => 'boxes',
    'priority' => 20
));

// Box 2 Text Setting
$wp_customize->add_setting('box2_text', array(
    'default' => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'business-theme'),
    'type' => 'theme_mod'
));

//Box 2 Text Control
$wp_customize->add_control('box2_text', array(
    'label' => __('Box 2 Text', 'business-theme'),
    'section' => 'boxes',
    'priority' => 20
));

// Box 2 Icon Setting
$wp_customize->add_setting('box2_icon', array(
    'default' => _x('code', 'business-theme'),
    'type' => 'theme_mod'
));

// Box 2 Icon Control
$wp_customize->add_control('box2_icon', array(
    'label' => __('Box 2 Icon' , 'business-theme'),
    'section' => 'boxes',
    'priority' => 20
));

// BOX 3
// Box 3 Heading Setting
$wp_customize->add_setting('box3_heading', array(
    'default' => _x('Box 3 Heading', 'business-theme'),
    'type' => 'theme_mod'
));

//Box 3 Heading Control
$wp_customize->add_control('box3_heaading', array(
    'label' => __('Box 3 Heading', 'business-theme'),
    'section' => 'boxes',
    'priority' => 20
));

// Box 3 Text Setting
$wp_customize->add_setting('box3_text', array(
    'default' => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'business-theme'),
    'type' => 'theme_mod'
));

//Box 3 Text Control
$wp_customize->add_control('box3_text', array(
    'label' => __('Box 3 Text', 'business-theme'),
    'section' => 'boxes',
    'priority' => 20
));

// Box 3 Icon Setting
$wp_customize->add_setting('box3_icon', array(
    'default' => _x('desktop', 'business-theme'),
    'type' => 'theme_mod'
));

// Box 3 Icon Control
$wp_customize->add_control('box3_icon', array(
    'label' => __('Box 3 Icon' , 'business-theme'),
    'section' => 'boxes',
    'priority' => 20
));

}

add_action('customize_register', 'business_customize_register');
?>