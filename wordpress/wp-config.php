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
define('AUTH_KEY',         '_X<%T<v_h5v`OjIh%{^76wP7fE87kW$ti>G$8H`KyvLnCK+hD7vxdVQB^_@/g9vH');
define('SECURE_AUTH_KEY',  'ZITr6UdoO]MC=wuGZ{Z5%LJz9~R!HFyIIz)09f9&hCWYpYapXir;}xAE9=oJ;%1k');
define('LOGGED_IN_KEY',    'eaklAhKEB]m]yiC]7=f!U=t>v/-k#eYsctZ{nJyr4ei<>N^FF;?}lK{5`h}L!H?)');
define('NONCE_KEY',        'BQVY-KoB}z*[${Z{5/by=$gM:e8CVO,ff,d0uex!Q8 GryHLE9kr.[8B}qIlG?8v');
define('AUTH_SALT',        '.`*~kDPQg<?PP]4+[:*9TQxV| LuU^hN~0vm~FQEzC&[V`UhiJde:8_7!+Y<62hC');
define('SECURE_AUTH_SALT', 'iyD~tH@d3h&cHyvhBt(3+K*N:vNOi;at@Q|}K`6&KOlzY8Say>fk[-N9;*Eo8yM9');
define('LOGGED_IN_SALT',   '2_`qekj5G)>*Kt4QR]3E)h5X6y@Y%NwwU;*jTx7X;Rn2nDy(JSKoN9$#YH6+{e4r');
define('NONCE_SALT',       '@$@]YEnz b:`kV,8@B_cu)dEdLSC*lYGO_EvrA2YrYOnZ&D%7[c&sx38 H|o_sUR');

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
