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
define('DB_NAME', 'aie1433709053477');

/** MySQL database username */
define('DB_USER', 'aie1433709053477');

/** MySQL database password */
define('DB_PASSWORD', 'Vertex1314!');

/** MySQL hostname */
define('DB_HOST', 'aie1433709053477.db.12058720.hostedresource.com');

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
define('AUTH_KEY',         'sFzLt7bR(Zf54ZaX+MCE');
define('SECURE_AUTH_KEY',  '+BgphWC57)nWPBNX*RjR');
define('LOGGED_IN_KEY',    'vSAK9-tSBAAJR**$n9sL');
define('NONCE_KEY',        'M7J+DzxKbv@ntX9m1Mbm');
define('AUTH_SALT',        'vWKNCT4UHVBYrN5m8B6R');
define('SECURE_AUTH_SALT', 'GXG5Lad*YN#Q)5g#D)DX');
define('LOGGED_IN_SALT',   'tQ3x*4)US!aGFBUKfE2q');
define('NONCE_SALT',       'E (&$Y!jxdXb-pq#U9aG');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
