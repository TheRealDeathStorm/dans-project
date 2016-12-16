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
define('AUTH_KEY',         ' &l%RK4^>n|oUdI<9i9cT!y~X$4eQ]=|]k.M/gXK%s|,Gz4 %z};D:yKym)&IU>n');
define('SECURE_AUTH_KEY',  'w)a:DDE)Aqh_,ALX{u IsbT?Wdsive(RylvSIFL1,vx{]ajVv/y1+iKtJ?[zx*Ia');
define('LOGGED_IN_KEY',    'clF29SBd)$@I?UF$0B+S=zo+s4f#ddG+S/biphvQDTo5|Bvt5[W{, H:k~j~v[:y');
define('NONCE_KEY',        'gjwQoyv {QXla0[jW[_z[RKHN}^B<1*?#w=<x~[L`ISe!aiKVUO<vH>aVMJfnEcE');
define('AUTH_SALT',        'j4+X+|{.g04/Iy[A8/IqV++-O#6k}t1vLx0}4Pg!g}D`w7`@h?C3$JI3E$A,xZIK');
define('SECURE_AUTH_SALT', 'c&{QqmVZ_^8,wcYdUz$)Rx`Kc8QTNOcl3mjAKH<$,PxJOI1mK4XE|P<,#buTk[pW');
define('LOGGED_IN_SALT',   'zm{$sU_f|sx-bz-wM.i6Y5L8u8Y0J^5eeZ8?2:6W}Kadt*~O%t,t#usqfW`gGeg}');
define('NONCE_SALT',       ']d~=/FEfwCg<:g?X3_Lqq,S3TcA[d*[+*^GHwDXfS!,TP_8KQ7xR@u3=WY*)sl(N');

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
