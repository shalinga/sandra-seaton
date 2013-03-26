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

if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+ii8s~_4g)jn+.TWxdlz*dg@vc7EzGA9|#]*O|3M~JjX80.xjVDQoq_/g@J:iFOx');
define('SECURE_AUTH_KEY',  'J*u|%tfm2za_Cx#.cO/rjL4>Skyz!}tG2M:nanwk;q-u1[Sd&|&WCrt8s)5*lg+a');
define('LOGGED_IN_KEY',    'CfD)XNkX$ENS0gd;QV%/o5uSwO!~TIZ$E>FIsZn@8|)CuI9|BJ?+Eus|9)ITWNC|');
define('NONCE_KEY',        'H,$>Cg?%c${v<mx(}Qw^A2&=-31 X+ k<S,!(I--FAm{Az#^/wfN#|LP{ cfVy5X');
define('AUTH_SALT',        'fG5@AYJJC4ncA_wjH-h-d*U$7Tp]cM2vD;WGaw.f=D|a7J|lh#gQLJM[dU17>Ogy');
define('SECURE_AUTH_SALT', '-?C.fPgwqa1^e}/S2?3HPr:Nk-w(Z,#4.17x-$&lHDKeSf!K^pWN7hi-}zL3E>~?');
define('LOGGED_IN_SALT',   'xRgff Y-_&u(pWKw.yHD.*sDsk>n }NTGYlN1i}Au<1B3X;QI}:eet.oOIY((-ZA');
define('NONCE_SALT',       'z70Okxx je+I/rg,40@aE;Z>c=,F dl`96@[+|HNpHf:VGG]Pylo:H6Nt>:U7w<X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
