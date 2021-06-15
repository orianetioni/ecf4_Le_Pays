    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <?php wp_head(); ?>
    </head>

    <body class="home blog logged-in admin-bar no-customize-support"
     <?php body_class(); ?>>
         <?php wp_body_open(); ?>
    
    <header class="header">
    <div class="col-12 mt-5">
            <a href="<?php echo home_url( '/' ); ?>">
                <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                    alt="Logo Le Pays" >
            </a>
        </div>
       <?php 


        wp_nav_menu ( array (
        'theme_location' => 'menu' ,
        'menu_class' => 'menu', 
        ) ); ?>
    
    </header>
            <?php if ( is_active_sidebar( 'in-header-widget-area' ) ) { ?>

        <aside class="in-header widget-area right" role="complementary">
            <?php dynamic_sidebar( 'in-header-widget-area' ); ?>
        </aside>

        <?php }
                
            