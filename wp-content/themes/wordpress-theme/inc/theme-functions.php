<?php
// Funções auxiliares do tema

// Registro de menus
function theme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'wordpress-theme'),
        'footer' => __('Menu do Rodapé', 'wordpress-theme')
    ));
}
add_action('init', 'theme_register_menus');

// Suporte a recursos do tema
function theme_setup() {
    // Suporte a thumbnails
    add_theme_support('post-thumbnails');
    
    // Suporte a título dinâmico
    add_theme_support('title-tag');
    
    // Suporte a formatos de post
    add_theme_support('post-formats', array('aside', 'gallery', 'quote'));
}
add_action('after_setup_theme', 'theme_setup');

// Enqueue de scripts e estilos
function theme_enqueue_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

// Função para exibir o footer
function theme_footer_widgets() {
    if (is_active_sidebar('footer-1')) {
        dynamic_sidebar('footer-1');
    }
}
?>