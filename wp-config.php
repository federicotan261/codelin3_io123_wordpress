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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress123');

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
define('AUTH_KEY',         'aK92y#0/G2SVIXT^E;qI#aw~975{o-GQ$8slX[L>DsLUEiW/`}Ss.CGS__}RK Cc');
define('SECURE_AUTH_KEY',  '3EiUdXy~:U*`upv[>M<)gl6|#*!%~F#I*Uez6FC%?FMn!n4>gd;^dME:0& Cl6RA');
define('LOGGED_IN_KEY',    '$K#OPpl7]g.;w4Q}#rQ=E3PZxT.AaIAA_qrCb|~ <BvFi?4;W#v%+I]hHe#8<J{(');
define('NONCE_KEY',        '(RrQnMI#gBel4urXVBscqvX#>SJ}J`aMbkVy;]5/12+@`Kc-4&)W!fsb_b54{;9G');
define('AUTH_SALT',        'ESMnSsrYjz(q4p;!sKg:f3*/}/w8iU%k-UeM^3Y3]WA*B@tapdOY8UPn`E(NCmz7');
define('SECURE_AUTH_SALT', 'VvWICvvp4rd`TQ,-?3ySPkLP4)rL+5wA#QJU{V!,*g:9jYL(p|#X-n*iKc+B?5 ,');
define('LOGGED_IN_SALT',   'Ioe0xw =sr!q;l{</*J/%&gLg:#x$+3i.sw:&n>tzAu f~oaF/EIK dy(YNU@[HU');
define('NONCE_SALT',       'o_?!z!(o*z}lvI)fz59[ZS~RJas%NPfB]A :rn>7sk$+}?+=M[|)|~Sy3%$:fBZh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
