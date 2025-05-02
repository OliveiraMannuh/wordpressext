<?php
/**
 * The main template file.
 *
 * This is the main template file for the theme. It displays the homepage and other pages.
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your_Theme_Version
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        // Include the hero section
        get_template_part('template-parts/sections/section', 'hero');

        // Include the features section
        get_template_part('template-parts/sections/section', 'features');

        // Include the footer section
        get_template_part('template-parts/sections/section', 'footer');
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();