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
define( 'WPCACHEHOME', '/home/wwwaiese/public_html/vivamexico/blog/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'wwwaiese_wrdp2');

/** MySQL database username */
define('DB_USER', 'wwwaiese_wrdp2');

/** MySQL database password */
define('DB_PASSWORD', 'yEZpzRU2HAmA29L');

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
define('AUTH_KEY',         'kD>Ph#:2eWjZ~7imEVkLPcIt>5pRFo6?-8SYY|bE|WOCt2fSiqk?RWZY>(>#c|cojA(#');
define('SECURE_AUTH_KEY',  '|^kmG?\`XF5?OGi29Du<hvN70i4HWNqZDFPR$8/~DwTfg?#JTqmF#W:lO>ixICxt9Bi>pk_');
define('LOGGED_IN_KEY',    'SFZQXK0_OlFqFcPW!$vAR~7abVl>=*PHD!D:b~Hq;L77RMd5Rv2bQ_-^hs5)F?Hnq_f#-t#/Zx');
define('NONCE_KEY',        '9!W/?e3@i6/ln9MdnrnKt*UnB9)rBz?F)cjcsFZR2xZD:(t@KM~#pXpo!qoBhb#cT\`p*tKhni1');
define('AUTH_SALT',        '$fQb!YhsH?hpdBoD|00QmLR<@zO@eUpWPzZECL:Tq=Dc@ONSl;<Z*gDws~V9QU>XX:GjC?e');
define('SECURE_AUTH_SALT', '\`P-G;_$(!GA#5M(a?qQrnFMYs(ud8z<jYZJmkkDLLgFNfMZcs5~/)26Qcc^RedxF');
define('LOGGED_IN_SALT',   'UnBX$)vglF$y@RmFEv\`__KIVXKb9q^oup>iCZm8#//;rI~/|IaS>W<8X/KZo8yR<*<Wz6X');
define('NONCE_SALT',       '7sN>Zm~P97MO269N4*t_CCa|W2?$g7wN-H5f(IC0HU<k*wy-uC|qk*fnO8l1V=#b/KL)hg_');

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
