<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header-hero-wrapper">
    <header class="site-header">
        <div class="site-branding">
            <a href="<?php echo home_url(); ?>" style="display: block;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoexitus.png" 
                     alt="<?php bloginfo('name'); ?>"
                     style="height: 70px; width: auto;">
            </a>
        </div>
        
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container_class'=> 'menu-primary-container',
                'menu_class'     => 'menu'
            ));
            ?>
        </nav>
    </header>

    <div class="hero-section">
        <div class="hero-content-box">
            <h1>Exitus Educacional</h1>
            <p>Transformando aprendizado em diversão</p>
            <p>Domine qualquer matéria com quizzes, simulados, flashcards gamificados e acompanhamento das métricas de evolução para turbinar seu aprendizado, tudo com a vibe de um jogo!</p>
            <a href="#" class="button">ACESSO ESTELAR GRATUITO</a>
        </div>
    </div>
</div>
</body>
</html>