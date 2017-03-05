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
define('DB_NAME', 'kelly_duprat');

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
define('AUTH_KEY',         '1u+xbUs.oK&i{}y%r=-nw!a|YIw|gtwF}(sEbsDywe@L#rVw:9.4)-gCpj9Vheh-');
define('SECURE_AUTH_KEY',  'v ~aI*[>Z^VrC6+JHHN1xl%@PH^)am2b7=+9>}Mt5{~,eD!u1]1?gMI$]cUwG{Ng');
define('LOGGED_IN_KEY',    ',~n{>p=2MxSjk?N!f:sEFpY<ma!4<<S_QWN<_DOF5U,O=aqi9~d6=^9PpG,_%#4P');
define('NONCE_KEY',        '/ V4OtEedU`/6yD@m^5@)z8X!h|(N7_?_@)+Lxh03!pV#? UNc#689G1v:lD$gdH');
define('AUTH_SALT',        '7DJp?[N6Xv:yem>`<<|E|E8,][~^P(hWk$;3e:z77u&U7!kubl4l~l0~$NcTsI*8');
define('SECURE_AUTH_SALT', ',.+>:qK?zhQxdEu6R0_4XEp^wkq!@TP#KkL5Vc{.1#<pDo7vwHq1D#X> Myc|1u~');
define('LOGGED_IN_SALT',   'jwGMjEc_GUq^|KOR<?4]b,b?o!2(RR,dxJWHes/CK)f]$wU*pFqO~O@RsqK,uKJM');
define('NONCE_SALT',       'G;;,rb.sDJ3uJbo/f?xECn9i3K9s{!HXj?6IC3H^-m/qS ;H$~/a?R|TFY;{>Ae0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '735hjq9_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
