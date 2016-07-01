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
define('AUTH_KEY',         'i [Na?;zVr)uCm^Y%8OAjX$E[.?Su16rY7=q~a5Av.Q_- lw!.7~9)zk5Y5WUjx,');
define('SECURE_AUTH_KEY',  '{h:fwZ55pRc$G0W[i*sj}1>O8g{^b|h|YZx;,IM/#btV $f&Dw`=QHdCwm9=9y$D');
define('LOGGED_IN_KEY',    'k_;#?JQ,+w#^k->V}lLI 6..)z%w*IrcbY{-&?93mFYO>,YJag,S{<O=yw_:I&NX');
define('NONCE_KEY',        'hjR QQ(X.a54hH05hDK[`UjS#!p]Wz7fAjAQ+OeTe9(}S-x#RT|7T?Cu*S6#Y_yu');
define('AUTH_SALT',        '0Mr>J]7#z|K4fqu@-^?h*}<Zyb(w-C1+#$]!<)MLa_U,vJJ&1Q:T;S(v<f.}IG &');
define('SECURE_AUTH_SALT', '*6WYU!qp)/]UI {R U(uBvZ;S}]0!2G0z(y!=|.Xw,EuQgFZgrI<B2ObnW>G+UC%');
define('LOGGED_IN_SALT',   'lX$WLi-E0I8|5NYz<|52A3d6hA^-7=DK5M51[T5:s/[~_?Ys]4.[=`-iW&1^j;~h');
define('NONCE_SALT',       'URg!677D[6mjtRxm9Nb@pctmnd5|STjU/#]6>];`*2BQ%HDV)G@*t>8wo`G<o[6q');

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
