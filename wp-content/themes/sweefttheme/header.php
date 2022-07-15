 
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="<?php bloginfo('author'); ?>">
        <meta name="generator" content="<?php bloginfo('generator'); ?>">
        <title>
            <?php bloginfo('name'); ?>
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?> 
        </title>

        <!-- bootstrap -->
        <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" integrity="" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        
        <style>
        .section-bg-image {
            background: url(<?php echo get_theme_mod('section_image', get_bloginfo('template_url').'./img/showcase.jpg'); ?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
         
          }

        </style>

    <?php wp_head(); ?> 
    </head>
<body>
    
<div class="container">
    <header class="blog-header lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-12 text-start logosize">
                <!-- logo -->
                <?php 
                if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                    } 
                ?>
            
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="navbar navbar-expand-md navbar-light ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="main-menu">
                <?php
                    wp_nav_menu(array(
                    'menu' => '',
                    'theme_location' => '',
                    'container' => 'false',
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                ?>
                </div>
            </div>
        </nav>
    </div>


<!-- Banner -->
<div class="section-bg-image p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">
            <?php echo get_theme_mod('section_heading'); ?> 
        </h1>
        <p class="lead my-3">
            <?php echo get_theme_mod('section_text'); ?> 
        </p>
        <p class="lead mb-0">
            <a 
            href="<?php echo get_theme_mod('btn_url'); ?> " 
            class="text-white fw-bold">
            <?php echo get_theme_mod('btn_text'); ?> 
            </a>
        </p>
    </div>
</div>