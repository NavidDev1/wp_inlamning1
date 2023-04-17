<?php

function theme_support(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support');


function lab1_menus(){
  $locations = array (
    'primary' => 'desktop header menu',
    'footer' => 'primary footer menu'
  );

 
    register_nav_menus($locations);


}

add_action('init', 'lab1_menus');




function register_styles () {

  wp_enqueue_style('lab1-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0', 'all');
  wp_enqueue_style('lab1-font', get_template_directory_uri() . '/assets/fonts/font-awesome.css', array(), '1.0', 'all');
  wp_enqueue_style('lab1-style', get_template_directory_uri() . '/style.css', array('lab1-bootstrap'), '1.0', 'all');
 
  

}

add_action('wp_enqueue_scripts', 'register_styles');







function labb1_register_scripts(){




  wp_enqueue_script('labb1-jquery', get_template_directory_uri()."/assets/js/jquery.js", array(), '5.0', false );
  
   wp_enqueue_script('labb1-js', get_template_directory_uri()."/assets/js/script.js", array(), '3.5', true );
  
  
  
  
  }
  
  
  
  
  add_action( 'wp_enqueue_scripts', 'labb1_register_scripts');


?>