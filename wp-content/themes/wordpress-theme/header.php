<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header-hero-wrapper">
    <header class="site-header" style="
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 5%;
        background: #2E2D60;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        
        <div class="site-branding" style="flex: 0 0 auto;">
            <a href="<?php echo home_url(); ?>" style="display: block;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoexitus.png" 
                     alt="<?php bloginfo('name'); ?>"
                     style="height: 50px; width: auto;">
            </a>
        </div>

        <nav class="main-navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container_class' => 'menu-primary-container',
                    'menu_class'     => 'menu'
                )
            );
            ?>
        </nav>
    </header>

    <div class="hero-section">
        <!-- Add hero section content here -->
    </div>
</div>
</body>
</html>