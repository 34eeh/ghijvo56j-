<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hotel_db' );

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
define( 'AUTH_KEY',         'c5CVyVM^>^*-SsGXuYUZ ;a#A+G2;7KB4?%KS1P-|oyFM|p^x$=-;AA|8z!r~pd$' );
define( 'SECURE_AUTH_KEY',  '&H?nVlWY5_-^3i}!/jfj-:/p;v]n#c6?s6/:)p2L+lHfj{_D%x$}tczRn?SN>XVE' );
define( 'LOGGED_IN_KEY',    '6btdi2wlS;Oe]NyICni,a3Fgma:zAeJ]^H]kexp5..H3:mcDigwOKw0Rq`w8ZW7i' );
define( 'NONCE_KEY',        'js+} EE*,Q-0ICpYU<6Y)L]CY?KAda05s|06/[A`zT_q-xF:;d.P`IbCE>~x]^(-' );
define( 'AUTH_SALT',        'fFNHW~~Wz? `=N3{lE{e~6Mzw~qg>i{cC?e3akR21d!zaZGS`l^K!]fV.@pigQW0' );
define( 'SECURE_AUTH_SALT', 'hmX>-X2oK|f;(=.SxYl?&d{Y hKz(p6B0~Bs(d_4Wvm>fB !ZQ5.TaRC &3uKg`_' );
define( 'LOGGED_IN_SALT',   '@3QkU+m%LZ?y+J;TgRr|WG?N:._ hj6yP[E}C3`s9iGs@7lh8~|k[j6eXO5tiPu/' );
define( 'NONCE_SALT',       'F>^{W-3t9:3QG^I<n36t}3%>(.EY25$Ra{IA*s%>pJ65Ul5Oik#;LEaFItC+G^PW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
