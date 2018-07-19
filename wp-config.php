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
define('DB_NAME', 'joshpica_joshcoast');

/** MySQL database username */
define('DB_USER', 'joshpica_joshcoast');

/** MySQL database password */
define('DB_PASSWORD', 'Apple1984!');

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
define('AUTH_KEY',         '9%+@=|sGQIj +:j)r 5hu2CXeJA5E~*kt@`Pzto$pZu7W_>)jFpH#HGc_g,oGh^w');
define('SECURE_AUTH_KEY',  'uPu~F)TCP6e##@<uIHaGn],=kubgwyuvAYT$SBRl-]AdRVAx#WmtY(;@q]#=l<O4');
define('LOGGED_IN_KEY',    'Y-6w*NQw^z?C.e.D2kjw[5IpJNb>|5/<-iHx|bXd|K<:OJ25/nX*&W1$A6sK+@/~');
define('NONCE_KEY',        'bhKmx[),!IcW#vw+ bB}y_LKR.+42!Q(^AmQ&O([~H]yr~R*V+s!1|(uc^(wV^aU');
define('AUTH_SALT',        'uVt96JoB^XMG>C=6$= =1]rP7[[~4X$mF.uYtVG.]e$r0k+UYB@9dGLDj:61/%$}');
define('SECURE_AUTH_SALT', 'HMPV_d-a:Uq#b8pTusUM)$>Bz#J|Pg7<6(Bj`+W(a4d<gJMY2=V9p}k#:/W&Q#m,');
define('LOGGED_IN_SALT',   'DNvrpg)w)m8iq~.H26 q2_jajK09{ml7JBSGdv?vYH?1qH7[ks#e>BY?HC:@ko/a');
define('NONCE_SALT',       ',*h}bb)Q$w,GXmIm;6uGyRI~{X@P}kJdv+x@?G-07PgJ/%Y<xH][=NtP]|+mnx<s');

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
