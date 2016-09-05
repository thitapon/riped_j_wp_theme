<?php

// load all necessary files
function add_theme_scripts(){
  if (function_exists('wp_enqueue_style') ){
    wp_enqueue_style( 'bootstrap',get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
    wp_enqueue_style( 'style',get_stylesheet_uri() );

    // Registering script for the theme:
  	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
  	// Eenqueueing the script:
  	wp_enqueue_script( 'custom-script' );
  }
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts');


// Register Nav Walker
require_once('wp_bootstrap_navwalker.php');

// Theme support
function riped_j_theme_setup(){
  // add support for thumbnails
  add_theme_support('post-thumbnails');

  // Register Navigation menus
  if (function_exists('register_nav_menus') ){
    register_nav_menus(array(
      'header-menu' => __('Header Menu'),
      'header-subdetail-menu' => __('Header Subdetail Menu'),
      'left-col-menu' =>  __('Left Column Menu')
    ));
  }

}

add_action('after_setup_theme', 'riped_j_theme_setup');

// Excerpt Length Control
function set_excerpt_length(){
  return 50;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget creation
function riped_j_init_widgets($id){
  register_sidebar(array(
  'name'          => __( 'Main sidebar'),
	'id'            => 'main-sidebar',
	'description'   => 'Main widget area.',
  'class'         => '',
	'before_widget' => '<div class="sidebar-module">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
  ));

  register_sidebar(array(
  'name'          => __( 'Side-menu-page sidebar'),
	'id'            => 'smp-sidebar',
	'description'   => 'Widget area for side menu page template.',
  'class'         => '',
	'before_widget' => '<div class="sidebar-module">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
  ));

  register_sidebar(array(
  'name'          => __( 'Left-footer sidebar'),
	'id'            => 'lf-sidebar',
	'description'   => 'Widget area for Left footer area.',
  'class'         => '',
	'before_widget' => '<div class="left-footer-sidebar-module">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="footer-widget-title">',
	'after_title'   => '</h3>'
  ));

  register_sidebar(array(
  'name'          => __( 'Right-footer sidebar'),
	'id'            => 'rf-sidebar',
	'description'   => 'Widget area for right footer area.',
  'class'         => '',
	'before_widget' => '<div class="right-footer-sidebar-module">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="footer-widget-title">',
	'after_title'   => '</h3>'
  ));
  register_sidebar(array(
  'name'          => __( 'Center-footer sidebar'),
	'id'            => 'cf-sidebar',
	'description'   => 'Widget area for center footer area.',
  'class'         => '',
	'before_widget' => '<div class="center-footer-sidebar-module">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="footer-widget-title">',
	'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'riped_j_init_widgets');

// Add bootstrap pagination function
function wp_bs_pagination($pages = '', $range = 4){
  $showitems = ($range * 2) + 1;
  global $paged;

  if(empty($paged)){
    $paged = 1;
  }

  if($pages == ''){
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }
  if(1 != $pages){
    echo '<div class="text-center">';
    echo '<nav><ul class="pagination"><li class="disabled hidden-xs"><span><span aria-hidden="true">Page '.$paged.' of '.$pages.'</span></span></li>';
    if($paged > 2 && $paged > $range+1 && $showitems < $pages){
      echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> First</span></a></li>";
    }

    if($paged > 1 && $showitems < $pages){
      echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;<span class='hidden-xs'> Previous</span></a></li>";
    }

    for ($i=1; $i <= $pages; $i++){
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
        echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
      }
    }

    if ($paged < $pages && $showitems < $pages){
      echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'><span class='hidden-xs'>Next </span>&rsaquo;</a></li>";
    }

    if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){
      echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Last </span>&raquo;</a></li>";
    }

      echo "</ul></nav>";
      echo "</div>";
  }
}

// Customizer Files
require get_template_directory(). '/inc/customizer.php';


 ?>
