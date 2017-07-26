<?php

require_once('wp-bootstrap-navwalker.php');

// Theme Support
function business_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'business_theme_setup');