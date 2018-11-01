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
define('DB_NAME', 'bw18b011_puskes');

/** MySQL database username */
define('DB_USER', 'bw18b011_puskes');

/** MySQL database password */
define('DB_PASSWORD', '3@.mTS1yp7');

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
define('AUTH_KEY',         'qpxhccba5ws4uq8mpmbcvhgjujpmnh3hptry62n0jwnknbnihwgc1earfyx6e83h');
define('SECURE_AUTH_KEY',  'mwmbyqwx52aycpp4qzrmswmrmfpdpmqwnxw0nf5fn3nh9g9fm3oez7x8jszawuia');
define('LOGGED_IN_KEY',    'rzyxgm7ykr48ahxa0k1lqrnhqguh9be06uvrofbcotqnjypugzosbne6ipvuvc7n');
define('NONCE_KEY',        'njusxk9k0xujqexok9sisprylmjsnqsgggvextmmdenlfuux9ulucl8mgontvez0');
define('AUTH_SALT',        'tilheqar7fxy1w6efypqldqcqdqgwf2ifnz174blob4k9ffyiqersrm9ncte0rub');
define('SECURE_AUTH_SALT', 's7boddhyi65olalvrigmadtljfiv0ztc4eyhomv6fxu8o56haybvigzxnocpxa59');
define('LOGGED_IN_SALT',   'nautpnmhsp5bvfmenjkgpn7ml0hwvfftf89b1z3sn0ukbyyr5vjkml8ikivfaiaz');
define('NONCE_SALT',       'obr1nwaqr7bvmskygdpba8kpgepk9sctecb6jwgng4vwp9rqmw24pa15mdto403w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdv_';

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
