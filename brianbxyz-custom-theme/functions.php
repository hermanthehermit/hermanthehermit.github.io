<?php

function add_css()

{

   wp_register_style('first', get_template_directory_uri() . '/style.css', false,'1.1','all');

   wp_enqueue_style( 'first');

}

function add_css()

{

   wp_register_style('second', get_template_directory_uri() . '/css/bootstrap.css', false,'1.1','all');

   wp_enqueue_style( 'second');

}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()

{

   wp_register_script('jquery', get_template_directory_uri() . 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'jquery');

   wp_register_script('bootstrap', get_template_directory_uri() . 'js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'bootstrap');

   wp_register_script('rssembed', get_template_directory_uri() . 'https://www.twilik.com/assets/retainable/rss-embed/retainable-rss-embed.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'rssembed');

}

add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );