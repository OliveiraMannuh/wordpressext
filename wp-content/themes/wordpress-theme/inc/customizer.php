<?php
function wordpress_theme_customize_register( $wp_customize ) {
    // Adiciona uma seção para as configurações de cores
    $wp_customize->add_section( 'color_settings', array(
        'title'    => __( 'Configurações de Cores', 'wordpress-theme' ),
        'priority' => 30,
    ) );

    // Configuração para a cor de fundo
    $wp_customize->add_setting( 'background_color', array(
        'default'   => '#FCFCFC',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color_control', array(
        'label'    => __( 'Cor de Fundo', 'wordpress-theme' ),
        'section'  => 'color_settings',
        'settings' => 'background_color',
    ) ) );

    // Configuração para a cor do texto
    $wp_customize->add_setting( 'text_color', array(
        'default'   => '#363564',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color_control', array(
        'label'    => __( 'Cor do Texto', 'wordpress-theme' ),
        'section'  => 'color_settings',
        'settings' => 'text_color',
    ) ) );

    // Configuração para a cor dos links
    $wp_customize->add_setting( 'link_color', array(
        'default'   => '#7D65E1',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color_control', array(
        'label'    => __( 'Cor dos Links', 'wordpress-theme' ),
        'section'  => 'color_settings',
        'settings' => 'link_color',
    ) ) );
}

add_action( 'customize_register', 'wordpress_theme_customize_register' );
?>