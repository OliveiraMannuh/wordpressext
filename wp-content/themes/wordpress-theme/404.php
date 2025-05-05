<?php
get_header(); ?>

<div class="error-404 not-found">
    <h1 class="page-title"><?php esc_html_e( 'Oops! Page not found.', 'your-text-domain' ); ?></h1>
    <div class="page-content">
        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'your-text-domain' ); ?></p>
        <?php get_search_form(); ?>
    </div>
</div>

<?php
get_footer();