<?php
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wp_multisite/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'multisite' );

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
define( 'AUTH_KEY',         'f3Aj-7>P-{uMpU}=.#6J82b N9[!O$V~ vlqoFic;U(#]#+|v-0>`{$vB@&f(U0s' );
define( 'SECURE_AUTH_KEY',  'n|nCfJsh[5x}#jw*^cm/0swvHxdAVLy0HYPp?Q>4,&T/YVsz_M0NqWzq4(47>ND#' );
define( 'LOGGED_IN_KEY',    '-x~OY$Dd8UH]8U%4md>TZ(i~r&xnV*-^bwgYPLi4ur=~ud>DBQYxAUU-9ec}2g!3' );
define( 'NONCE_KEY',        '2!1ek>s%q(2n{DkVDaQ|A(X#d9x6O~eovG_w.>@&p0:m7ETH3GRb%a:!:VG/_}0o' );
define( 'AUTH_SALT',        '_[.OX#(6hNVwNd>-mB1:S}N7O GR]!>-D_)&kqYD-:f<;dC8P]1CUL{[0JrY|T.l' );
define( 'SECURE_AUTH_SALT', '>M%U7(RP$)sD{0-U+[_unt=4tOY3|zs9b{H]-dZPXFEyE^k2!9gNysBD{$rU|J[D' );
define( 'LOGGED_IN_SALT',   'RDnU&FPSU`{.KJBIGrzq@=gFV]H|6x)*ULs+`$`#[hio^h.w`UpDWY2U}hq5Eo^>' );
define( 'NONCE_SALT',       ')kCb0?CT^fS}I6)J4K[Q{4Z[,=j<j<p&&ZTS[=j- zVvP51lGp$3(H%9%lvY6V;T' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
