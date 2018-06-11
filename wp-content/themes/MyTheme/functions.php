<?php

function theme_name_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('eat.css', get_template_directory_uri() . '/assets/css/eat.css');
    wp_enqueue_style('bodybuilding.css', get_template_directory_uri() . '/assets/css/bodybuilding.css');
    wp_enqueue_style('fintess.css', get_template_directory_uri() . '/assets/css/fintess.css');
    wp_enqueue_style('powerlifting.css', get_template_directory_uri() . '/assets/css/powerlifting.css');
    wp_enqueue_style('training.css', get_template_directory_uri() . '/assets/css/training.css');
    wp_enqueue_script('script.js', get_template_directory_uri() . '/assets/js/script.js');
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
add_action( 'wp_enqueue_styles', 'theme_name_scripts' );


//headerMenu
register_nav_menu('menu', 'Меню в шапке');
?>


