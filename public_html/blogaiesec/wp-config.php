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
define( 'WPCACHEHOME', '/home/wwwaiese/public_html/blogaiesec/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'wwwaiese_wrdp1');

/** MySQL database username */
define('DB_USER', 'wwwaiese_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'Gks8gvABQvA7Oy');

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
define('AUTH_KEY',         '986nVjY*;sK\`~HGYcjtt6m7P)we-AN)l0;z>HvLDDcBCdQGZRVqt^KxP3o*:Bafv8Rd31z');
define('SECURE_AUTH_KEY',  '\`e99k\`W_h!>E/D8x5!Sw7rm?k|RpPL61FQQW;zR(RaXez_-Pn;=SL5MMy>rv267RbdKz$y2');
define('LOGGED_IN_KEY',    'ZQ|$@3ddrmBWrT@L|!iQIW1SoccluFYG\`Gal_NHQ87bqV_?NOzbge@lCB2|Hfqel^=7Cg(Sw#Q');
define('NONCE_KEY',        'IAX*!wjo2GF0Onh0K#tZMZ_zcNV5bi<W76u:~ujU4n^dfYD8/6PGl/t^vR<0zbOMNi8Kz(@)4;E!mJ1RX53');
define('AUTH_SALT',        'Aiqs0IQ1R|(^:(k5#J!(ZG!MaYa|~AL@NjhAja/*1aFvap<$>e;#X1azO~ZeV~ooZ*r7;)|bZ=/Y;*WyDb5YK');
define('SECURE_AUTH_SALT', 'zZ()P>Vh^DBEfrravn!lgC#s91zG!5Xy;DPQJ5>N*7Z7xah!t-~x40Yl6EbP');
define('LOGGED_IN_SALT',   'iNlR16!COyQm*7zAOk(_U(DryjI;pMcxWeBX44x|Pwb=2eIoERekaw>S9u40qNchBfnPlWn9SmC');
define('NONCE_SALT',       'r2H#ru9;F0EIM@>J-9a5=!2=gkjHUb;PYYN_EcjVpkuc=?pxvuZFeM=mW^Q-swgbSR5w_a');

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
