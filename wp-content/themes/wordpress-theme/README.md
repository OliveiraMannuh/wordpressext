# WordPress Theme Documentation

## Overview
This WordPress theme is designed for a commercial platform that offers educational resources, including interactive games, quizzes, and flashcards. The theme features a clean and educational layout, making it easy for users to navigate and find information.

## Project Structure
The theme is organized into several directories and files, each serving a specific purpose:

- **assets/**: Contains all the assets for the theme.
  - **css/**: Contains the main stylesheet.
    - `style.css`: Main styles for the theme, including color schemes and layout rules.
  - **js/**: Contains JavaScript files for dynamic interactions.
    - `scripts.js`: JavaScript for animations and event handling.
  - **images/**: Contains images used in the theme, such as logos and icons.

- **inc/**: Contains additional functionality for the theme.
  - `customizer.php`: Functions for customizing the theme via the WordPress customizer.
  - `theme-functions.php`: Auxiliary functions for theme support and menu registration.

- **template-parts/**: Contains reusable template parts for the theme.
  - **footer/**: Contains footer-related files.
    - `footer-widgets.php`: Structure for the footer widgets divided into 4 columns.
  - **header/**: Contains header-related files.
    - `navigation.php`: Code for the navigation menu displayed at the top of the site.
  - **sections/**: Contains sections for the homepage and other pages.
    - `section-hero.php`: Main section of the homepage with a title, description, and call-to-action button.
    - `section-features.php`: Highlights features of the educational portal.
    - `section-footer.php`: Additional information and links for the footer.

- **page-templates/**: Contains custom page templates.
  - `page-contact.php`: Layout for the contact page with a contact form.
  - `page-purchase.php`: Layout for the purchase page where users can buy the platform.

- **Other Files**:
  - `404.php`: Displays when a page is not found.
  - `footer.php`: Default footer code for the theme.
  - `functions.php`: Entry point for adding theme functionalities.
  - `header.php`: Default header code for the theme.
  - `index.php`: Default template for displaying content.
  - `page.php`: Template for displaying static pages.
  - `screenshot.png`: Screenshot of the theme for the WordPress admin area.
  - `style.css`: Theme information and main styles.

## Installation
1. Download the theme files.
2. Upload the `wordpress-theme` folder to the `/wp-content/themes/` directory of your WordPress installation.
3. Go to the WordPress admin panel, navigate to Appearance > Themes, and activate the theme.

## Customization
- Use the WordPress Customizer to adjust theme settings, including colors and layouts.
- Edit the `assets/css/style.css` file to modify styles directly.
- Use the Elementor page builder for easy editing of page content.

## Support
For support, please contact the theme developer or refer to the WordPress support forums.