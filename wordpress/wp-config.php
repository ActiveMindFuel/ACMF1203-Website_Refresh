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
define('DB_NAME', 'amf_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'nDZ{^WZe)S4>4z4<uPawf^E>IC#El|/@vS^=k,5/${HKl(9Q&)$85);-e-KF hjh');
define('SECURE_AUTH_KEY',  '!j*Iu/xVzF34G`x{U&-(cbKDQMgfwK2&g9.Wf#OV]5?CrvQj,{!V5T4HW* <2@%[');
define('LOGGED_IN_KEY',    ']zj>Y]SXe`M9d|wFnxfRT&kBKmnDPrk{x< :9PH<QEoL7kwztO1%hkXPfV%S<<&u');
define('NONCE_KEY',        'weskPA[Zz**zAWo [k1o+)ju_*g8R_wF*[XX%C)FH$r1i-$A/jr8*[nJ u5]z_-t');
define('AUTH_SALT',        '0NNg>%o^=D:^&BAthXR|TpbKg*#H5N,iTU[PV!V*Snf4I4iz.I}8<xs4d+H5yTSP');
define('SECURE_AUTH_SALT', 'aWM`EZ{96%V)oV^B}1nvqlG.5htDrgGIAa</hYHwM0+i-zn_!Oi<X&RFt|t-rxn.');
define('LOGGED_IN_SALT',   'F*Fhm [`lp!g%Z;)i9Q,r>FkT#0)ma-@0`LEGM:z-}`MHL1r3^za~x$Bf,|d#Kj)');
define('NONCE_SALT',       'BL4`{@UKY1s6*I>Q)1~Z&L)sruC:-ZBa])5#({0/!8A,:GhD*R|%jOEXa-q?<JCm');

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
