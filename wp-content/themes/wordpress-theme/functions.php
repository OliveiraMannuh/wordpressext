<?php
// Funções do tema

// Adiciona suporte a thumbnails
add_theme_support('post-thumbnails');

// Adiciona suporte a páginas estáticas
add_theme_support('page-templates');

// Registra os menus
register_nav_menus(
    array(
        'primary' => __('Menu Principal', 'wordpress-theme')
    )
);

// Enqueue scripts e estilos
function theme_enqueue_styles_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_scripts');

function add_scroll_to_top_script() {
    wp_enqueue_script('scroll-to-top', get_template_directory_uri() . '/js/scroll-to-top.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_scroll_to_top_script');

// Inclui arquivos de funções adicionais
require get_template_directory() . '/inc/theme-functions.php';
require get_template_directory() . '/inc/customizer.php';

function adicionar_customizador_header_hero($wp_customize) {
    // Adiciona nova seção
    $wp_customize->add_section('header_hero_background', array(
        'title'    => __('Header e Hero Background', 'wordpress-theme'),
        'priority' => 30,
    ));

    // Adiciona configuração para a imagem
    $wp_customize->add_setting('header_hero_background_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    // Adiciona o controle da imagem
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_hero_background_image', array(
        'label'    => __('Imagem de Fundo', 'wordpress-theme'),
        'section'  => 'header_hero_background',
        'settings' => 'header_hero_background_image',
    )));
}
add_action('customize_register', 'adicionar_customizador_header_hero');

function aplicar_header_hero_background() {
    $background_image = get_theme_mod('header_hero_background_image');
    if ($background_image) {
        echo '<style>
            .header-hero-wrapper {
                background-image: url("' . esc_url($background_image) . '");
            }
        </style>';
    }
}
add_action('wp_head', 'aplicar_header_hero_background');
?>