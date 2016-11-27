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
define('DB_NAME', 'ma_nguon_mo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'llI^/:YMTVc#Ny.U0B%8O?e106kr{d3qu<e4-=]tuIN)/n-i!FTah-NSy]()99Ua');
define('SECURE_AUTH_KEY',  'Yg_&gk_d1s5-lO{kLL&C[ lJ39.cn(qjW[SBwhhPbeJn+aeN4A%-K6*9&x:`(B1X');
define('LOGGED_IN_KEY',    'O=E^Ea{+K6[l{1f,)K8-VW}Q0gd/ru6`j;*rNUbX~|:(yNv;$?&;S[uI9RMPBG06');
define('NONCE_KEY',        'pkl$yWs{DkqE_]a^Y~#iimfX7eiNNRe*]k?nFS.Ef&vo=;?-)!mlWdFqf0h><Sg>');
define('AUTH_SALT',        'fhSMWq^zf[`7w<Rl5>/c(xv`Z}c7JKvT$s/f4;DF,?_z4ry2cbNNby/q[/*BTIw2');
define('SECURE_AUTH_SALT', '@BFy!8Og-pTq0D]djh_BmYHyo@hMbd(dk~5!*@M[m|W1K<kkv?A45Py,D.vwC~5[');
define('LOGGED_IN_SALT',   'bH&<dU#X[F@j2g[ Oel.s4=+u^m-|o>+twc$9~!QB+=[Nis*B4vncIdJ]&wgoi2Y');
define('NONCE_SALT',       '={2!1?}.k8yr)a=y<c[H{Z8tK{3~PY2FT#ce,2PPMRJ{ht,d$$oBaLUf2#dLtI$]');

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
