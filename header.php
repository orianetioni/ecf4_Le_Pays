<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>

   <body class="home blog logged-in admin-bar no-customize-support" <?php body_class(); ?>>
 

    <header class="header">
    <?php 


    wp_nav_menu ( array (
    'theme_location' => 'menu' ,
    'menu_class' => 'menu', 
    ) ); ?>
   <a href="<?php echo home_url( '/' ); ?>">    
    <img class="img_header" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
     </a>
    
  
      
    </header>
    
    <?php wp_body_open(); ?>