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
define('DB_NAME', 'joshcoast');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'oh#x2_Y(hnI^+l A;[K^?,$iGAGk,]3XSPddETZH%2`k4lg5B9EZK8OyNFRMx-^z');
define('SECURE_AUTH_KEY',  'HN!JJl3(7,1X}sy;G@d,DPhnBm?o~8$)dgjJrtPMqA|CQ`:FR{;[-K$n3/8W{rp=');
define('LOGGED_IN_KEY',    'E{_QWK:Aqtt{N?V(DC[{db=#O6e*joPlx0_(#]Al&2{)-h@k9?XE .F+%-t7/f-5');
define('NONCE_KEY',        '2LMD5i`|FLquN]6}W !h!/l@,Eio+zcJq!L;hs!UGU,Za7QH=h?)5pRH.{Yb4$s&');
define('AUTH_SALT',        'o)>4$1ZwEUpGn+h<f8EvQoS*AZ8);r93n)w*YjbK?Qp7o~N?wZ$/mt+$r@N]1V`v');
define('SECURE_AUTH_SALT', '&wLb6C8eDyd a2ec`Bm2EvT.]Q*UOK3`ZxAq#`$I>qEH}o$vWH<j+0pyI=XZ;>78');
define('LOGGED_IN_SALT',   'lL?oO|)qB8qo pq{Oe<gxJHx4Nv=G)qyNd[j>XKc,czaM$-Z4;/j4q(Uiftn~[Wf');
define('NONCE_SALT',       'wstI2Yl/y>WBFM][}z?2Zr^6oG;Dt<g~y,b>(`, 6>r&s))-x eM,d,Hb,*,V#gy');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
