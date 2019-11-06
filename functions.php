<?php
//Adds featured imgs to posts
  add_theme_support('post-thumbnails');


function example_theme_scripts(){
  wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton.css');
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('main-styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts' , 'example_theme_scripts');


//Adds widget areas
function blank_widgets_init() {
  //Header widget
  register_sidebar(array(
    'name'          => ('Right Header'),
    'id'            => 'right-header',
    'description'   => 'Right widget area in the header',
    'before_widget' => '<div class="widget-header widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Sidebar Widget
  register_sidebar(array(
    'name'          => ('Sidebar'),
    'id'            => 'sidebar',
    'description'   => 'Sidebar widget area',
    'before_widget' => '<div class="widget-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Left footer widget
  register_sidebar(array(
    'name'          => ('Left Footer'),
    'id'            => 'left-footer',
    'description'   => 'Left widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Middle footer widget
  register_sidebar(array(
    'name'          => ('Middle Footer'),
    'id'            => 'middle-footer',
    'description'   => 'Middle widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-middle">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Right footer widget
  register_sidebar(array(
    'name'          => ('Right Footer'),
    'id'            => 'right-footer',
    'description'   => 'Right widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
}
add_action('widgets_init', 'blank_widgets_init');


//Add Custom Menus
function custom_menus(){
  register_nav_menus(array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu')
  ));
}
add_action('init', 'custom_menus');

//Logo in the header
$custom_image_header = array(
  'width' => 150,
  'height' => 90,
  'uploads' => true,
);
add_theme_support('custom-header', $custom_image_header);

?>
