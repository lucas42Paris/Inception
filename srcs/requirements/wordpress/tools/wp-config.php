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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'lsalin' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         'y,~L`$Nk}OK940-,8HlPO].Gl_{,++p)yeiyxRp|;9Tr;e[vpuH%6QKFiz5f ;ek');
define('SECURE_AUTH_KEY',  ':@w&;|;td%CAZ4:_1{a+[E.8N@f|9nzw<x{duC.R/85Pz!-Voup{yWcS@FH|XUFv');
define('LOGGED_IN_KEY',    's.ltRA/E&{$4H6>[.O8Z?l$[t=GxHW<fakok{Qe=1}hZW+06b7` g88<?&TTCML?');
define('NONCE_KEY',        'aJsYA;|jO0Aa&8(o[kSA=HNf6n!|^KVeq JyPdF L.KQ#[si%+p:kgz#oj0~E!Mh');
define('AUTH_SALT',        'LMZhKVtviQNX<vq]D1~6DBf^-YHV+;b<E+Sn]I*aN-u/FROAL@BK!%:&ujo~6@u!');
define('SECURE_AUTH_SALT', '+?*NB|O!fr(yd-]*T)Dg6!aa}P+vuzT>GJ-sa58mH2;U?}}3q!,mXNK[+{Q.:7N]');
define('LOGGED_IN_SALT',   'X@i. m?C.iQluvTKbdW4Hk>`<pj`/@Q8E3XTJQ<R%,oW^3|<K+(#r?g=0czK6[SH');
define('NONCE_SALT',       'hMIGpc|gbHN:&V{?|sUZo wGK|mSj`,HO OLj*7nS;EQdVLG#rhlv0[&-qV3FrQ9');
/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
