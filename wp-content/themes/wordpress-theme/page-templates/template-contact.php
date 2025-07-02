<?php
/**
 * Template Name: Página de Contato
 */

// Define uma constante para identificar este template
define('IS_CONTACT_PAGE', true);

get_header(); ?>

<main id="primary" class="site-main contact-page">
    <header class="site-header">
        <div class="site-branding">
            <a href="<?php echo home_url(); ?>" style="display: block;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoexitus.png" 
                     alt="<?php bloginfo('name'); ?>"
                     style="height: 90px; width: auto;">
            </a>
        </div>    
    </header>
    
    <div class="contact-section">
        <div class="contact-container">
            <div class="contact-header">
                <h1><?php the_title(); ?></h1>
                <p>Entre em contato conosco através do formulário abaixo.</p>
            </div>
            <div class="contact-content">
                <div class="contact-form">
                    <?php 
                    // Substitua "FORM_ID" pelo ID do seu formulário WPForms
                    echo do_shortcode('[wpforms id="32"]');  /*57*/
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>