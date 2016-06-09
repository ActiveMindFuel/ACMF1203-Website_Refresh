<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         'v?_S2J|}C5aUBZ!d$4SK$K@_kC@PtJ#eW2Q%R`3E=j8^P~o|CrFqyF5J+Z0p]Mov');
define('SECURE_AUTH_KEY',  'Hk_3JUw`dTrDO._~+`G#D]K4ywOxmXv,nsW5+FQ+|J<3?ILJBI#GUAvSxRR]/-0_');
define('LOGGED_IN_KEY',    'CEtRL{o&O&2wqRS0oPz&A*FnE7y fCqOrl5Jhe|)wh;S{&e~OX*W^Mg=/y:ljtY@');
define('NONCE_KEY',        '7PG-8y~CGJf5:S#c@Wa%AYh8tN!4@~XSOO+|4Yd}H?ZWR}Xbk2cyK5UH1[~Qq[1/');
define('AUTH_SALT',        'fEh[@/slTN<kz}Ee85<n,0;2aaX{p.o4`PP*/wWokix|U{/jv $[<-40h|NeE=Ok');
define('SECURE_AUTH_SALT', 'g93d7rVTEs:l)`SbI6sm[k9<5-M?%Z:3CJ@NGme}4]oIz$Mmai W,j.@~uIewl6C');
define('LOGGED_IN_SALT',   'H6vFHYo|_TLA`a]S(BI0,/^ |C~g$guaGLm.z{!4Z|9}qQRl~isx-eRy&VcsiW8c');
define('NONCE_SALT',       '%Zro7*Rx7]5B]i/sS_Mw5JOj*Y$J&Xv%1]8+-4|:7W:fOS!?=4+!.Lu_dQlCG|tx');

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
