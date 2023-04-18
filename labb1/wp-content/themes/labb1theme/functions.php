<?php
//adding theme support
function theme_support(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support');


function lab1_menus(){
  //adding top menu
  $locations = array (
    'primary' => 'desktop header menu',
    'footer' => 'primary footer menu',
    'side-menu' => 'side undersida menu'
  );

 
   register_nav_menus($locations);


}

add_action('init', 'lab1_menus');




function register_styles () {
  //registering styles

  wp_enqueue_style('lab1-style', get_template_directory_uri() . '/style.css', array('lab1-bootstrap'), '1.0', 'all');
  wp_enqueue_style('lab1-font', get_template_directory_uri() . '/assets/fonts/font-awesome.css', array(), '1.0', 'all');
  wp_enqueue_style('lab1-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0', 'all');
 
 
  

}

add_action('wp_enqueue_scripts', 'register_styles');

/*

Försöktpå flera olika sätt att få fontawsome och jquery att funka gick dock inte

function labb1_register_styles(){




  //$version = wp_get_theme()->get( 'Version' );
  
  wp_enqueue_style('labb1-fontawesome', get_template_directory_uri(). "/assets/fonts/font-awesome.css", array(), '1.0', 'all');
  
  wp_enqueue_style('labb1-bootstrap', get_template_directory_uri(). "/assets/css/bootstrap.css", array(), '1.0', 'all');
  
  wp_enqueue_style('labb1-style', get_template_directory_uri(). "/style.css", array(), '1.0', 'all');
  
  
  
  
  }
  
  
  
  
  add_action( 'wp_enqueue_scripts', 'labb1_register_styles');


*/



function labb1_register_scripts(){
  //loading scripts

  wp_enqueue_script('labb1-jquery', get_template_directory_uri()."/assets/js/jquery.js", array(), '5.0', false );
  wp_enqueue_script('labb1-js', get_template_directory_uri()."/assets/js/script.js", array(), '3.5', true );
  
  
  
  
  }
  
  add_action( 'wp_enqueue_scripts', 'labb1_register_scripts');





function widget_areas () {
  //getting the sidebars and widgets
 register_sidebar (
    array(
    'before_title' => '',

    'after_title' => '',

    'before_title' => '',

    'before_widget' => '',

    'before_title' => '',

    'after_widget' => '',

    'name' => 'footer area-1',
    
    'id' => 'sidebar-1',

    'description' => 'footer widget area'
    
  )
    );
}

register_sidebar (
  array(
  'before_title' => '',

  'after_title' => '',

  'before_title' => '',

  'before_widget' => '',

  'before_title' => '',

  'after_widget' => '',

  'name' => 'footer area-2',
  
  'id' => 'sidebar-2',

  'description' => 'footer widget area'
  
)
  );

  register_sidebar (
    array(
    'before_title' => '',
  
    'after_title' => '',
  
    'before_title' => '',
  
    'before_widget' => '',
  
    'before_title' => '',
  
    'after_widget' => '',
  
    'name' => 'footer area-3',
    
    'id' => 'sidebar-3',
  
    'description' => 'footer widget area'
    
  )
    );

    register_sidebar (
      array(
      'before_title' => '',
    
      'after_title' => '',
    
      'before_title' => '',
    
      'before_widget' => '',
    
      'before_title' => '',
    
      'after_widget' => '',
    
      'name' => 'blogger area-1',
      
      'id' => 'bloggerbar-1',
    
      'description' => 'blog widget area'
      
    )
      );
  
      register_sidebar (
        array(
        'before_title' => '',
      
        'after_title' => '',
      
        'before_title' => '',
      
        'before_widget' => '',
      
        'before_title' => '',
      
        'after_widget' => '',
      
        'name' => 'blogger area-2',
        
        'id' => 'bloggerbar-2',
      
        'description' => 'blog widget area'
        
      )
        );

        register_sidebar (
          array(
          'before_title' => '',
        
          'after_title' => '',
        
          'before_title' => '',
        
          'before_widget' => '',
        
          'before_title' => '',
        
          'after_widget' => '',
        
          'name' => 'blogger area-3',
          
          'id' => 'bloggerbar-3',
        
          'description' => 'blog widget area'
          
        )
          );
          register_sidebar (
            array(
            'before_title' => '',
          
            'after_title' => '',
          
            'before_title' => '',
          
            'before_widget' => '',
          
            'before_title' => '',
          
            'after_widget' => '',
          
            'name' => 'blogger area-4',
            
            'id' => 'bloggerbar-4',
          
            'description' => 'blog widget area'
            
          )
            );

add_action('widgets_init', 'widget_areas');