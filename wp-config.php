<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager
define('DB_NAME', 'mdarifme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|spekb[Js8o fH@ ?-@EtjNd0zVRAjj1;yk3SC-]d4 ;jsj-Y+t=hY>k~aEky@&C');
define('SECURE_AUTH_KEY',  '=%sZ7TPyN|G<1V@*W1#po:|!!|E8dgLTh((U5iN1ck9ACijK?8x82:9TrYd@<4qP');
define('LOGGED_IN_KEY',    '+3QFJ#?:u<xYCut9#3?u=^[PI*)-zpo~H6C/+xl+x8vJ^FFAtmn9FfoD]YlfJV8L');
define('NONCE_KEY',        '10e-4/.u&rw+vI$DoVjEQdk }0T(#FEm)/li|xTDU1NFVT_@hSijj[U-+DNjyZ7P');
define('AUTH_SALT',        'oUx71F;||lZ?%vaPanh7LvHy-o{zk$~qm[F~+=] >;Lau)4ADTsa dw*Vcu~uK0|');
define('SECURE_AUTH_SALT', '>g%ZYUDoE=0jgeckl|242h2H!wRxX!-CK<)eo}pXvJMj6%ek>qmP9ZFib..UX2C8');
define('LOGGED_IN_SALT',   '1$;z&5R34io_qW]0H^+dd5LuiG(I}93M>V[jKAbew;Lef6))ME@dI_q|,MZw2*xg');
define('NONCE_SALT',       'HTW}c,F:m+;,-[aM>*[}rX.Di`:yvBa}`/v^*^9XCq,dhffyZ@B:b/$|AP+fiMp^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/*Turn Off Post Revision In WordPress*/
define('WP_POST_REVISIONS', false);

/*Set high intervel to off autosave*/
define('AUTOSAVE_INTERVAL', 86400 ); // seconds (Default: 1 day)