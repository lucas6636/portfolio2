<?php

function add_files() {
  wp_deregister_script('jquery');
  wp_enqueue_style( 'drawer', get_template_directory_uri() . '/css/drawer.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js' );
  wp_enqueue_script( 'iscroll', get_template_directory_uri() . '/js/iscroll.js' );
  wp_enqueue_script( 'drawer', get_template_directory_uri() . '/js/drawer.min.js' );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js' );
}
add_action('wp_enqueue_scripts', 'add_files');

?>

<?php
add_theme_support('menus');
?>

<?php
add_theme_support('post-thumbnails'); 
?>

<?php
function include_custom_css(){
  if(is_single()||is_page()){
  if($css = get_post_meta(get_the_ID(), 'includeCSS', true)){
  echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"{$css}\" />\n";
                      }
                  }
              }
add_action('wp_head','include_custom_css');
?>

<?php
add_image_size( 'l-size', 300, 200, true );
?>