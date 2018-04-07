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
define('DB_NAME', 'wp_shiro');

/** MySQL database username */
define('DB_USER', 'wp_shiro');

/** MySQL database password */
define('DB_PASSWORD', 'shirokazuma1022');

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
define('AUTH_KEY',         '*C?wca1)M{8Tw.?)q6drsyl&+V<D+olFGCJpD@nJGopkf(ZEnN@7QV4>smkRTKB%');
define('SECURE_AUTH_KEY',  'g,Zfe0536CnoY>}@-(<Unk(@ jhFQ)wp8tJM_Yg}v062|htnF7YdR!rxa+3/@Y;M');
define('LOGGED_IN_KEY',    '6(?9I#=3Eik_Q4vjcySZ=sI :lCXi^d)`7Oc~BAuLZE%wn-!qf}hYG(M0c7>L@c[');
define('NONCE_KEY',        '%;Gv}|&>v@ -UYbD_Lc==K=#)=TxU?o.GN}|+Ew@U9tYm[#H6H|xVIN56QQ&5/Pr');
define('AUTH_SALT',        'ta;7R!IBzz{F;K6i&&.A,=sp03`$oD69bPBBNgcH.sFt/:o:nFhr<9bR%w|<SU)I');
define('SECURE_AUTH_SALT', '%*5c_mGk0buD1JB<`Q*xN&Vq9yExXO/aLsc)Md-)k&xRdB`4X/5H H,g]GA~$$RJ');
define('LOGGED_IN_SALT',   '&=v{3X*]oqBYT_k`G.=EbpN?*N}pw^>1T^OAjuIz++I+5/+UwDD15jChe c|t/&K');
define('NONCE_SALT',       '5;>nlNDmB:ktn*tjF`oNr5~T}Fo(l,FnW{8s9>kc|+b%X-#zkx[m<c}7{Y_I*&A6');

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
