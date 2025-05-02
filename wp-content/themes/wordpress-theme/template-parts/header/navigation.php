<?php
// Navigation Menu for the WordPress Theme

function custom_navigation() {
    ?>
    <nav class="main-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'primary-menu',
            'container' => false,
            'items_wrap' => '<ul class="primary-menu">%3$s</ul>'
        ));
        ?>
    </nav>
    <?php
}

// Call the navigation function in the header
custom_navigation();
?>