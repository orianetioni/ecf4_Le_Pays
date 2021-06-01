<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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