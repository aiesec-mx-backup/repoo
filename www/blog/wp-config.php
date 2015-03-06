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
define( 'WPCACHEHOME', '/home/wwwaiese/public_html/blog/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'wwwaiese_wrdp3');

/** MySQL database username */
define('DB_USER', 'wwwaiese_wrdp3');

/** MySQL database password */
define('DB_PASSWORD', 'LCfa8iqb5N40m');

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
define('AUTH_KEY',         'XpV?oToWq6aNwD\`/R7GUxMT7u<(gFvrOc8BXL1TN|qgMqjDzl>zq\`ptCU/b$V?s~?hGddK;');
define('SECURE_AUTH_KEY',  '3iLtYzSOBjv=hpmG>kE1qqbfs28D@x<_?4HyQ:O|CjfL:2~Ul>QDW;<P$0p(H0wdpQ9dF');
define('LOGGED_IN_KEY',    'y;dP~*pJ8W>VC:PdbP$tNI)/;T;Hyc^JwH2:El-$r3Rj)?l#0;80joL@djB8OHcc#xvF=8^\`r^?Qw');
define('NONCE_KEY',        '3z0R~aj|n9GiSGc@>@Ohhn9F-!9!5d|VC3?j:80RM4?tmFvT@*3a*tlpAmjXXkgfH\`K/$MgpEa_L');
define('AUTH_SALT',        '>Rdz#rVFbBnKo9:kdqu3pMB^Y0l:/EHV8?Q@hr=GAF-CP!g$:KoZ?;WcdH-c~@@Mc*irGyfdukAY6VczxzI=');
define('SECURE_AUTH_SALT', 'mn2s9LZRICd#B\`xof*ieqLmB~pdTdUMyEeST-5Z=75Q*08lOvUdXJZ>@!UkReSIaZJ0U!p$oM5Kk');
define('LOGGED_IN_SALT',   'd2Vx:>1RU6kVUFA8xGH:b2l?)M)/#;D?H6Tx\`oofS?w-JIp|z_xj_$e#!9Mnz>k)CG');
define('NONCE_SALT',       'cLz/ERMlosQ#\`P_6u(G))ojjELANMkl04*KD8TPU<C3)Z2c1_AciZtk#P0pi@UvsQTR');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
