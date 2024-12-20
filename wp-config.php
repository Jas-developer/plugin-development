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
define( 'AUTH_KEY',          'ct&WI:f{0ET:84bnZ;[K<|?KBrX&gEvkh)F>&jPW~=[SiCjC+?a^+uD2P-^)2%QY' );
define( 'SECURE_AUTH_KEY',   'o1PspX,CQtFC}~12NibSKrZ8}u5N[YX|tr8^M*nF1sMO&>O+E^/N#p W/t8}p,mg' );
define( 'LOGGED_IN_KEY',     'IAFBn+=87{Unph+laD8rgOUXu=V`b3r2 #1zr/1lTO|]is3]B$=iN;mE>nX ;*-K' );
define( 'NONCE_KEY',         '$>bo,yzKx>]1 ^_5up-<fqZt=taH;7GM8N!<=g-t4*5._(,vs.O$T8)Cp!Sq]WQo' );
define( 'AUTH_SALT',         '/3g?+r$NR)SE2wEuW+Lln>i-|4{BVP3xj_YHUhJDOQRU2eDav!hv(hb%%EvQ>$,N' );
define( 'SECURE_AUTH_SALT',  'xKl!crI;u`O%c?>zxU>USzM/2JM,HBwbVnNA.<M_l!0g}^wLBatHp6th/eyPK#O%' );
define( 'LOGGED_IN_SALT',    'K?9}7$?CIaF0DNG%;3K<O;e?QX=_Gn$p:w]:?hn?,[;$M{-!nVOsVG&f$l(#V8*u' );
define( 'NONCE_SALT',        '-+yGdKXdDi5r@RT{Qx<;3`9JYPaxF$r%+lzN=~[^j6pt&zmlC/[t:i3IPNBKIgRX' );
define( 'WP_CACHE_KEY_SALT', 'D)a(o i>.XUwSd];!m%61E5b;?2# W|mTaku%d,{s1lz)YptMNaZ8cS0Pr`%eAw;' );


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
