<?php 
/*
 * Подключение стилей и скриптов
 * */

function my_assets()
{
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', get_stylesheet_directory_uri() . '/build/static/js/jquery-3.5.0.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_style('main-style', get_template_directory_uri() . '/build/static/css/main.css');

    wp_enqueue_script('smooth-scroll', get_stylesheet_directory_uri() . '/build/static/js/libs/SmoothScroll.min.js',  array('jquery'), '1.0', true);


    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/build/static/js/main.js',  array('jquery'), '1.0', true);


    if (is_front_page()) {

        wp_enqueue_style('front-page', get_template_directory_uri() . '/build/static/css/pages/front-page.css', array(), false, $media);
        
        wp_enqueue_script('marquee', get_stylesheet_directory_uri() . '/build/static/js/libs/marquee.js',  array('jquery'), '1.0', true);
        wp_enqueue_script('front-page', get_stylesheet_directory_uri() . '/build/static/js/pages/front-page.js',  array('jquery'), '1.0', true);
    }

    if (is_404()) {
        wp_enqueue_style('404_mob', get_template_directory_uri() . '/build/static/css/pages/404_mob.css');
        wp_enqueue_style('404', get_template_directory_uri() . '/build/static/css/pages/404.css');
        wp_enqueue_script('404', get_stylesheet_directory_uri() . '/build/static/js/pages/404.js',  array('jquery'), '1.0', true);
    }
}

add_action('wp_enqueue_scripts', 'my_assets');
