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
define('AUTH_KEY',         '19^2**(&t`9g:C%X7[KM 1YM?Fb%;-S$,pHI,en=5N<|MYhaIw&&!49z{HYUhJ.7');
define('SECURE_AUTH_KEY',  'JjkI[-O;UJU7=~V.7#?lG{PL+c^ZaneRQv2<P&&e5K18gIo&&j<{t^7cdG_]MF8+');
define('LOGGED_IN_KEY',    'Rcheg}Y6NO<t:XF_(Fm=r1Y>8f]E,M)8(o7oc^{x)o]}Pogx`HqgV0II$nb pAS6');
define('NONCE_KEY',        'Wt:B0M}yp#yaD_se5q8k D^xw|_f[0W)Km#FdSMjJGcz2IyEbAz3LX^p-1}mx@p(');
define('AUTH_SALT',        '~5Y=SJbjy%`s[MiEsF<C%PCga_ThAcI;t`y)AN9G0*bpVpN6<3,Kf3J6L^Un}-XX');
define('SECURE_AUTH_SALT', 'unAmGW(,CtgVq(wpbO+madhr1CQ|WVp`G1^= b?]0Is+ZA*82e/s&=/|1)ob/kUZ');
define('LOGGED_IN_SALT',   '<- ~KHULR0sTL3NeyZq1BwR3Za<u<Vn-PEhtxS@bCg$*SX ]Qm=nQLhS#sBU OEi');
define('NONCE_SALT',       '[os*hEeXWRgQI!FT5_Mpln6~Eg)jegP0]|o$6F{(xd_G;&[GCI_g?6:`{u0-~>,(');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';