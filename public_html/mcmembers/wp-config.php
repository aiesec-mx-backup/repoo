<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wwwaiese_mcmembers');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'wwwaiese_mcmem');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'P1x3l');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '?/jd.@35Sx6Pp{Jrlvle)2tx>%`dU=;f?Bp{gVxgdU5o[x~6v8-,0@5tMd%GZgb?'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'Ho~1P#nl)(e2sld&2)P&H%RWR+0$y )8D4djFPsRgX4N&^(0=Wa8CfhMXf.M!)Qt'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'H#Dpfaf*t#v&|y LVsJ{CKx0?hemZO{,@6mAI|0DotjR!fwS44#>0XVWqkkl*xNT'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '{9Y^&EQcbJ{GsJ%:uTz-f>q+XWGQLaC=+@vH_<+gxfANyxCsNBvSsATbDlx^VVAk'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'FK5Fm|%%cv#F||r?gweQ`i%?KBl?>-8=s* R_8Bh^<H9V<o8tI4cU1UfKL[=7|n!'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'zIz]/I;#@x#nEklvn0tn L,|cgP-p|cY1s<mMxNLYHju-SDI+MgV^5YpAWML4wD{'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'Yj|Jt81HAwp~3$&./)G9_n{py3jtEB:-%CwY&yHpW_E3~-pa~Cn-~be *b]H{&Qa'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'N8[&%_v<a_!R&~>a&0fMJPsCL|c* K ,(_GtO*be8Y9.xF cnp<3OX8v>Xr*`s%i'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Desactiva las actualizaciones automáticas de Wordpress */
define( 'WP_AUTO_UPDATE_CORE', false );