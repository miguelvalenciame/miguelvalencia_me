<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'miguelvalencia_me');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L&W&U!9a<|z(:z{~sv/BLw1;2pXY80!3twLrL%9ft1UyE?:u)7u6{h#b]+)UtNXD');
define('SECURE_AUTH_KEY',  'NuR(#%^ g%)5S],Jw+1WLSvjyS1d%%-t8K3S-70e <c`IuVuL^:Qc_YgTO31U(x<');
define('LOGGED_IN_KEY',    'k3.Purj @SD|z^;A_kEUV2f2xa2#9J9(?C+Ao4ui&}7Z78a1xMD{),1Uz(G$2X~)');
define('NONCE_KEY',        '-BabEi%1iHZ8 tANz7w[h8/O_#/t/2Wh,D>M~$dyL9]@%!4$7qh)4.9^k`zg=bF4');
define('AUTH_SALT',        'J^d.S)TceGSp@liTIvb;5l_@z@-th,MD~pw&3;r0nx(Vh7C5[e6vuL)32Myn[7tx');
define('SECURE_AUTH_SALT', 'dNo |rO#!2F5Q(FG/4*eq;-KLrnkS7ze#UX*JY-jV3!4pvW1a/vj!@A30.!SW@f9');
define('LOGGED_IN_SALT',   'nIx`DgiT13;^|.8IpQ|G;et=T)c0:c1tU,+Sq-v/<Ak^z!Lv(HYGI7B~p23C`97x');
define('NONCE_SALT',       'l9K*>pvD~b2GN8.NiCRz|kix]WKDpIq}#>,Ed@fD3%hSc0:HsvCwN#P*]V=`wz e');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';