<?php 

/**************************************
 *   THEME SUPORT
 **************************************/

 function add_suport_theme()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','add_suport_theme');

/**************************************
 *   CUSTOM LOGO
 **************************************/
function custom_logo_setup() {
  $defaults = array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo',$defaults);
}
add_action( 'after_setup_theme', 'custom_logo_setup' );


/**************************************
 *   REGISTRO MENU PERSONALIZADO
 **************************************/
register_nav_menus( array(
  'primary' => __( 'Menu header', 'menu-header' ),
) );
add_suport_theme('menu');

/**************************************
 *  SCRIPTS / CSS
 **************************************/
function wp_responsivo_scripts() 
{
  // Carregando CSS header
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  // Carregando Scripts header
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery') );

  //Carregando no footer
  //wp_enqueue_script('functions-js', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_responsivo_scripts' );

/**************************************
 *   REGISTRO CUSTOM POST TYPE SLIDER
 **************************************/
add_action('init','slider_registrer');
function slider_registrer()
{
  $labels = array
  (
      'name'               =>_x('Sldier','post type singular name'),
      'singular_name'      => _x('Sldier','post type singular name'),
      'add_new'            => _x('Adicionar slider','slider'),
      'add_new_item'       => __('Adicionar slider'),
      'edit_item'          => __('Novo slider'),
      'view_item'          => __('Ver slider'),
      'search_items'       => __('procurar slider'),
      'not_found'          => __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado no lixo'),
      'parent_item_colon'  => ''
  );
  $args = array
  (
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable'  => true,
      'show_ul'            => true,
      'query_var'          => true,
      'rewrite'            => true,
      'has_archive'        => true,
      'menu_icon'          => 'dashicons-images-alt2',
      'capability_type'    => 'post',
      'hierarchical'       => false,
      'menu_position'      => 6,
      'supports'           => array('title','thumbnail'),
  );
      register_post_type('slider',$args);
}
