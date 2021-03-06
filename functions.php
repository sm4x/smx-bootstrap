<?php
  // Load Style Sheets
  function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
    wp_enqueue_style('main');
  }
  add_action('wp_enqueue_scripts', 'load_css');

  // Load Java Script
  function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
  }
  add_action('wp_enqueue_scripts', 'load_js');

  // Theme Options
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('widgets');
  add_theme_support('custom-logo');
  add_theme_support('title-tag');

  // Menus
  register_nav_menus(
    [
      'top-menu' => 'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location',
      'footer-menu' => 'Footer Menu Location',
      'sidebar-menu' => 'Sidebar Menu Location',
    ]
  );

  // Sidebars
  function smx_sidebars(){
    register_sidebar(
      array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
      )
    );
    register_sidebar(
      array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
      )
    );
  }
  add_action('widgets_init', 'smx_sidebars');

  // Custom Image Sizes

  add_image_size('blog-large', 800, 400, false);
  add_image_size('blog-small', 300, 200, true);

  // Register Custom Post Type

  function smx_post_type(){
    $args = array(
      'menu_icon' => 'dashicons-carrot', // WP Dashicon
      'labels' => array(  // set a custom post type label in admin dashbord
        'name' => 'Produkte', //
        'singular_name' => 'Produkt',
      ),
      'hierarchical' => true, // true acts more like a page as opposed to a post
      'public' => true, //
      'has_archive' => true, // archive like a blog post entry
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // Users access to these modules
      // 'rewrite' => array('slug' => 'my-products'), // rewrite permalink
    );
    register_post_type('produkte', $args);
  }
  add_action('init', 'smx_post_type');

  // Taxonomy (categories for Custom Post Types)

  function smx_taxonomy(){
    $args = array(
      'labels' => array(
        'name' => 'Warengruppen',
        'singular_name' => 'Warengruppe',
      ),
      'public' => true,
      'hierarchical' => true, // true -> acts like CATEGORY, false acts like a tag
    );
    register_taxonomy('Warengruppen', array('produkte'), $args); // 2nd arg (array) determines for which Custom Post types this works
  }
  add_action('init', 'smx_taxonomy');
?>
