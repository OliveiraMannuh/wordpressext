<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (!defined('IS_PRIVACY_PAGE')) : ?>
<div class="header-hero-wrapper">
    <header class="site-header">
        <div class="site-branding">
            <a href="<?php echo home_url(); ?>" style="display: block;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoexitus.png" 
                     alt="<?php bloginfo('name'); ?>"
                     style="height: 90px; width: auto;">
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

        <div class="header-buttons">
            <a href="https://exituseduc-front-15207959809.us-central1.run.app/authentication/side-login" class="login-button" target="_blank" rel="noopener noreferrer">Log in</a>
            <a href="https://exituseduc-front-15207959809.us-central1.run.app/authentication/side-login" class="trial-button" target="_blank" rel="noopener noreferrer">Login</a>
        </div>
    </header>

    <div class="hero-section">
        <div class="hero-content-box">
            <h1>Exitus Educacional</h1>
            <p>Transformando aprendizado em diversão</p>
            <p class="justificado">Domine qualquer matéria com quizzes, simulados, flashcards gamificados e acompanhamento das métricas de evolução para turbinar seu aprendizado, tudo com a vibe de um jogo! 🎮</p>
            <a href="https://exituseduc-front-15207959809.us-central1.run.app/authentication/side-login" class="button" target="_blank" rel="noopener noreferrer">comece a jogar!</a>
        </div>
    </div>

    <div class="hero-foguete">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-foguete.png" alt="Hero Foguete">

    </div>
</div>
<?php endif; ?>
</body>
</html>