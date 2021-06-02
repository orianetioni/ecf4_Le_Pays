<?php
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        
        wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
       
        wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '1.1', 'all');
       
        wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.1, true);
       
      }
      add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


      function wpb_custom_new_menu() {
        register_nav_menu('menu_principal',__( 'Menu principal' ));
      }
      add_action( 'init', 'wpb_custom_new_menu' );

      function wpb_init_widgets_custom($id) {
        register_sidebar( array(
          'id' => 'sidebar',
          'name' => 'yolo',
          'before_widget'  => '<div class="site__sidebar__widget %2$s">',
          'after_widget'  => '</div>',
          'before_title' => '<p class="site__sidebar__widget__title">',
          'after_title' => '</p>',
        ) );
    }
    add_action('widgets_init','wpb_init_widgets_custom');    