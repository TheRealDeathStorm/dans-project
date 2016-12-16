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
define('DB_NAME', 'dans');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '6zyx9k=,B+)bM1N^SY851i@bWpR=MxuGUUT2dLx*i_ZT)og9g)rl#Z]J/G}[)f`A');
define('SECURE_AUTH_KEY',  ' a6zBX7/Vs_Sm,$h^=0A .^/=yDI:?S-$d?oIc;(rMh;,wOqo4_}N-@$DZ*LTE-X');
define('LOGGED_IN_KEY',    'jna1Aqd*lEutT|qvi7U|iyC%SpyDSMco}ohp[9ogZ;e{9%R5%k^p6WC%^>cOJ[wS');
define('NONCE_KEY',        '2$m:z5QB>.[}ut)DlZvq b$leLtS5^(wfBL/BVRAFcIrs quj4r~!9(U(!+4F@yh');
define('AUTH_SALT',        'm`$<O|k:>AW?V8v8,1{CZkB}E|NxF.1A<!sq/Y:%[(5t%0&MIj~)Y085K0rTc2JD');
define('SECURE_AUTH_SALT', 'CM&Yf_1s&m]5!ksyXWvF;0- Epd&pZIVQ[/h!#(~y1T[|F=9TMRP*EB[|3}V6a3x');
define('LOGGED_IN_SALT',   '|G7Ed6I<FpHNz?/]cK.JIp >$Bo}`,gI#s;O6R!qm@ &?_r&SGlx&VI)OSNwhdn4');
define('NONCE_SALT',       'x/&Ix`bu,0CiD(2F. |U!?k/z]jH@Q<35r-6SkVYqp=?F!G2,-aLg{X8]RLDs)3d');

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
