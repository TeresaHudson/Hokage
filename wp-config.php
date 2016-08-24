<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hokageDBdd1la');

/** MySQL database username */
define('DB_USER', 'hokageDBdd1la');

/** MySQL database password */
define('DB_PASSWORD', 'TF3H6wk3th');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ';*tmeW_+tlaSLDiaSLD5;#>$vnfY$vnfUMF7jbUME7<ME7>^yr6<^yqf,$unf');
define('SECURE_AUTH_KEY',  'WLQJB3},$B3},>^vnfYQIB3fXQE7{^E7>{.$unfXQIAKC4:|@wohgZRJCgZRJC4');
define('LOGGED_IN_KEY',    'LmbTLE6;<TL92]_+A2].+tmajcUMF70>NF70>@vB3},$vnf^zrjcUMFrjbUME3YQI');
define('NONCE_KEY',        'LmaSLD5;#OH91]_-91]_+tha#~wphZStldWOG91A3{.$qjb^yqjbUMEqiXPIA2XQI');
define('AUTH_SALT',        'rgYRJogYRF80cUNF70>^F80>@vng},$rjcUzrjcUNB3D5:#~wl]_-tldWO-sldVKC');
define('SECURE_AUTH_SALT', 'ncQJB3}YQIB3{,$7}^yrj<^yqjbQunfXQIB3fXQIA{.IA3{^yq-skdVNC4ZRKG');
define('LOGGED_IN_SALT',   'G4:!-sk]_+peWPtmeWPH92eWOH5;#LD5;#~tl1]_-tld~xphaSKDphZOKC5:OG91[');
define('NONCE_SALT',       'BjbUME7<IB3{,$u~wodVNG8dVOG81[!NG8:|@w4:|@wkdV!zskcVJogZRJC4}YRJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
