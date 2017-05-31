<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'websigniDBwinbt');

/** MySQL database username */
define('DB_USER', 'websigniDBwinbt');

/** MySQL database password */
define('DB_PASSWORD', 'iD1ZcQI6F3');

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
define('AUTH_KEY',         '.{uuM62<PXLuf~H5D_aWG~eo1|!ZKG0okV:spZ_:sG5ClZhG~ozRB7}UgFznjB}zo');
define('SECURE_AUTH_KEY',  'UEqyuzB7QB{$PD_;~PAePA]dO_:1]epw-S9vcR7G@:!@cNT>rB,Uf+.Wea;{1wlW');
define('LOGGED_IN_KEY',    'a*#xH2;6_WSaH+xiXI<y*mA6<;+PLTAuqasdD:1_VSCG1whkVR|wlW5#]-OK59]pa');
define('NONCE_KEY',        'HiW;;xD9:a0}@!rRCFB}cNgR!rkhR!s|wG1:0!gRZGzwgyjI37<,YEMI$jqnX<yrn');
define('AUTH_SALT',        'mPAufmT<y{+P6EA]bLtd:~#_sG:51lSZVGwhlW#x~pD9#:~eOSD9tavsG040!RCUF');
define('SECURE_AUTH_SALT', 'H5hhKws9_BoNN,ok0^@Q70:hNVRCsdvg0!@|sFCXEyjfnT<y{$M63A<bMQBrcYfM^');
define('LOGGED_IN_SALT',   '|sJ4[-OK58[pZdOK~lsdC:F0}gQUF,vyjf3^>,YF8>|YFN8@orcY}@^rFBXEyufmT');
define('NONCE_SALT',       'Pu2l1_eOWH+xhlW5#]-OK5N8@ovc0}@!rRBF0}gNGCwdkgR!s|wG0:4!VRnY>yu$j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
