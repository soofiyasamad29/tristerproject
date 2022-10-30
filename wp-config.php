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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dedote3c_trister' );

/** Database username */
define( 'DB_USER', 'dedote3c_trister' );

/** Database password */
define( 'DB_PASSWORD', ';0f%6G[#fM4*' );

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
define( 'AUTH_KEY',         '@M517Jftom`Qz?Y{bpD7p:h|,;S@:F7D|Df=H&FE|*X`m!xybUxz|PSi~/hP;pRl' );
define( 'SECURE_AUTH_KEY',  '4kujyiduS>{q8$-/YfgKshRH5dW=Vv?{?rKsy`4HX At0F`alP&HU:B@*`Cx^y`(' );
define( 'LOGGED_IN_KEY',    'c0K{^Q8.@E)Gf+)@wW7W].h9$Y!H.Z|0tkZy+53ex2EsD)1dX+Ct1?DZX?3|pTY6' );
define( 'NONCE_KEY',        'Bk;cj.,uj t2!D@<ZlQCpP<x1Hu9.l ;U_/u3FG6s7tbxrE(Aw[:q{P9,k,S:M]?' );
define( 'AUTH_SALT',        'Q/pvlH2%Fcf+210V8c1Qg+EU}cAISY-(hcZ>bRP3y8/dHjsJ88C,q~&:thM59HD}' );
define( 'SECURE_AUTH_SALT', '!T$KFp{:5b+?{aGUH]NnOM_lT}bSbUOQ2V(,8Y_|H7$9nsv`h6X[*#V}!eE`iyzF' );
define( 'LOGGED_IN_SALT',   'L]E[=tMI=^Y4=nIl4geRIkKs$ji&7hSpXObK?ga2`_4PMFq4;;9$>guIl-9dNuRl' );
define( 'NONCE_SALT',       'j4*o[Y*O91we7Ae6$| s0`!a&gv85r:CS`*|vV8dFYh1!VIG6(/~oj^~QY;9&Ov=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tri_';

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
