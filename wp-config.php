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
define('DB_NAME', 'tappexp_wpdb');

/** MySQL database username */
define('DB_USER', 'tappexp_wpdb');

/** MySQL database password */
define('DB_PASSWORD', 'N(hps3M_2}(NoXZF4~');

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
define('AUTH_KEY',         '4Q]yDgN5y/]i0HsBzl[l6Ydy^+z#$`cTHQA1T5|:CVdx(%5!Qfabe-v++]3PQ8Jw');
define('SECURE_AUTH_KEY',  '7G!W,}xC _6~~x,0l@$t_Yyz@hDZxa,bk8=hUYyw<]xSrbD6#z/2j<F-ku&5X7yT');
define('LOGGED_IN_KEY',    'vLtzFu+MyyW/H`lnrbsr1tX|5D$&Wt;^bqD+h[i/-G}#[a7Rcp7$=qmmI*=+!*&m');
define('NONCE_KEY',        ')a5hwA:PjEg#GdV,.;&3<lnm~@pL0ZIS`?rO*vULa}j1fLD0;hm@4%[+PIC$x6gX');
define('AUTH_SALT',        'a6-Vof5`5G&1Z`t4=d9c!~?Q;Vg$|npwVhV_ pf!=i(MT]3>2lfp5_Tz%fmSupW[');
define('SECURE_AUTH_SALT', 'cLyw+:-mW|qu]?OwAv@7cQ$z^enffu~V/p1MW}&;:SkNOGz-LS+!TrEm~h0vK3rY');
define('LOGGED_IN_SALT',   'far}`0+OTFW@H3`M-xr~B=L0kuu^!1| [W1%FbF#}vC<+u-U:Cs{c6tbjvROhYi`');
define('NONCE_SALT',       'CBVBq0Xbm}j vRoX_#(*W:MU*;`%_^U`Q]pRj,>{+l@o.D4G@E_ ?qWB6=-a3K|@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdb_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

//Added below to fix buddypress slugs

define ( ‘BP_GROUPS_SLUG’, ‘resource-centers’ );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
