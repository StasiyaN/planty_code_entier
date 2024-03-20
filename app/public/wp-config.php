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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'u/sFd9W?z$Ao;?2B+5n_[XL.nFZlfMYP0R{mEHGh0b#ePWH1;BEAso)0|ms[0OK5' );
define( 'SECURE_AUTH_KEY',   '?:xDmphZn#XQi,Put?f<I)sGi}46hK4C|JUKj[bD-oHk3/`Wl!7<YCXnXi@Y7-e!' );
define( 'LOGGED_IN_KEY',     '^afRJ{%uu|ed>j~iozvt|uxo5S2A*|o.#2^Up=F4DP<{+n9IL($.@H7C Eis_YM{' );
define( 'NONCE_KEY',         'xAA!a(2n+^[*yA_p;Z9!m]dj`9zc,X?mV.^UrtwhO)Z&B-vb;n/g2{$mx[K_FjOO' );
define( 'AUTH_SALT',         '0{m>S&`cxWmA,i:kC g(6A%jo17$XA!]kE,S&RLY8VAmt&M83!/wZvN#)t}+>g-X' );
define( 'SECURE_AUTH_SALT',  'J55c+ 7mE>ws3;#4#jTmD;z,6 |Bj;ALZ2hQ*dZ#;9W-]: C(EX{gkA?F+1wX#Z_' );
define( 'LOGGED_IN_SALT',    'q{b@h9GNDr:;*hk9Qhl,cTY;~P)084bV.K-NP?J/}}iX2I&O~M7CSc:98Whz|s(m' );
define( 'NONCE_SALT',        'jQIgnYBq;zIkLB6$EHAq0NNK|z! oQHXX?+)ajEEA)Z}&.^AAh_LR;^71X,@i5zR' );
define( 'WP_CACHE_KEY_SALT', '&b^gHZb4tF7R?&_b,0YHO:P?_=_#+Db`QHny_J ldDM9XZ|g$qB65w*J!I4;<)0=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
