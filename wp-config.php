<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UKG)K9*k=#5rs,BK,a,ID*)e=^ehngK*A:3Nh#?lh9{&N~?_`I5SKjIR~(g]E*Uo' );
define( 'SECURE_AUTH_KEY',  '8>-U l~fI: ?Dklm^H5aTzWkBs:GU1u+D(:=uyl/Mu*h)$H&)ev}jr:(m1^9:L-0' );
define( 'LOGGED_IN_KEY',    'h3oxm1~ne3P3ki:S,upOg>Pw/-92WvjCG2e?It%P0D(*DuKb%]5;tu(B<&~0Y>Bw' );
define( 'NONCE_KEY',        'Q-lN: LZ7_yE!46;oz:w=Pr):>!8&$Rtm5k#b5shqT-3MXzmB>$YxKB~3cn@F:cZ' );
define( 'AUTH_SALT',        'BQat7:hgirbzPP^D?l}:LNKro{V0RJCngP2|Fuw3mkA||PaZ4!vR+<.&#bPdxI!+' );
define( 'SECURE_AUTH_SALT', ')X8^Q[9Wex$zr-Y<KS(go0.T93Q`q`U<6C|qwpoMXmHl5AZ+cg~>`,R@z:Vh$UA]' );
define( 'LOGGED_IN_SALT',   '~A20!:ux04!;c=#pLE}t6v- k+CJ?Z+)Mo^E~f;J95|HJIY?VgK%SBO]Z%PB=eH~' );
define( 'NONCE_SALT',       '{08f+m$Wla&$kKlEk0zQK<AVfx9~b(4 u;FGUM)lTp#@KyVYR~,]2qI|)@`NZGn|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD','direct');
