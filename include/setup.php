<?php

function up_theme_styles(){
    $version = date('hmi');

    // CSS
        wp_enqueue_style('theme_css', get_template_directory_uri().'/style.css', [] , $version, false);
        wp_enqueue_style('fontawesome_css', get_template_directory_uri().'/public/fonts/fonts.css', [] , $version, false);

    // JAVASCRIPT
        wp_enqueue_script('jquery_js', get_template_directory_uri().'/src/assets/js/plugins/jquery-3.5.1.js', ['jquery'], true);
        wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.js', ['jquery_js'], $version, true);
        wp_enqueue_script('theme_js', get_template_directory_uri().'/public/all.js', ['jquery_js'], $version, true);
}


// Menu
function up_after_setup(){

    // add_theme_support('custom-logo', [
   
    //     $defaults = [
    //         'height' => 100,
    //         'width' => 400,
    //         'flex-height' => true,
    //         'flex-width' => true,
    //         'header-text' => ['site-title', 'site-description'],
    //     ]
        
    // ]);

    // add_theme_support('custom-header', [
    //     'default-image'      => get_template_directory_uri() . '/src/images/logo.png',
    //     'default-text-color' => '000',
    //     'width'              => 1000,
    //     'height'             => 250,
    //     'flex-width'         => true,
    //     'flex-height'        => true,
    // ]);

    register_nav_menu('main-menu', ('Menu Principal') );
    register_nav_menu('menu-internal', ('Menu Internal') );
    // register_nav_menu('footer-menu', ('Footer Menu') );
}