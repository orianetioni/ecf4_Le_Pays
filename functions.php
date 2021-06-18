<?php
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    set_post_thumbnail_size( 350, 250, true );
    add_image_size( 'art', 750, 650, false);

    
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
          'name' => __( 'In Header Widget Area', 'rmccollin' ),
          'id' => 'in-header-widget-area',
          'description' => __( 'A widget area located to the right hand side of the header, next to the site title and description.', 'rmccollin' ),
          'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3 class="widget-title">',
          'after_title' => '</h3>',
         ) );  
       }
      add_action('widgets_init','wpb_init_widgets_custom');    

      function wp_version_remove_version() {
        return '';
        }
        add_filter('the_generator', 'wp_version_remove_version');