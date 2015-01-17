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
define('DB_NAME', 'wp_makergames');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'hmEv?z-&t;)<KLj5qbM/r|G?-8U^aEJ8>j}ves+i -,mEw|y 1^:}{o07^P/-Pt.');
define('SECURE_AUTH_KEY',  '<WVrj-_+baL{-HK|&iSx@(q~}IuO!C}>^Ki(SJTEaTk}CDel_qWt9BxV _VN!xb-');
define('LOGGED_IN_KEY',    'xhe6hS(|,Ii7kg.vp+^pmMo8c#YaI6z+2T`B+{WP0d-yll){#L-;E`15imp9QHYh');
define('NONCE_KEY',        'nGZ-6J&H&;Sk~h3pee+b`z_=uVPz~dO644 AD$b,o- VivYk0@:|;Y;9*kq7q,GR');
define('AUTH_SALT',        '_CP74m3ZXU>V1|9`,mI%[l?c9^fhUfv#{XS]0wi+uC+Uf]$TW99t_ZIGCs+<OQ: ');
define('SECURE_AUTH_SALT', 'kg&&z/PZn9*>[teyeFy<qs>z{!?<^[xae8?LUlR/]II@7.]2*zn8f16_@BS+|tte');
define('LOGGED_IN_SALT',   '/ j!d0-Jy%|DiGcgmO.d7aoR$^~vRxv3.wgy^v9<dAuNMoakS{W|q7n?_-fL46lq');
define('NONCE_SALT',       'hUd?&:87^b5]%OZmHZBWd3M:uP&s*lOS+8@@;(*;L.H.gPNy$UP-/#35/&wg@.?[');

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
