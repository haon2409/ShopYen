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
define('DB_NAME', 'shop');

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
define('AUTH_KEY',         '7+?i#$S:cyS*~5whYC8^dZ8p?Ojn4}~Ov$50C1n=}iEOy|%5u]/t^;WA>~g=OCrb');
define('SECURE_AUTH_KEY',  'gav%!9)nB.^!W7|+yo(_D0gy-z/(,j#/6n>^K,>Gp#$y!P>Ks<h*+ik^LKK;:];>');
define('LOGGED_IN_KEY',    '1d5z^b^71rPIcF3g[efADO1.3lOe[;oiTMq0bj;XlmIY.LK@$,hrO2fh&3MX])g,');
define('NONCE_KEY',        'b.pZI$rKq<nyYGq~ tHJct]^nL_-_k!G uD5Y!|?~lzFfZY g&I=`jIlZ~+iJYxZ');
define('AUTH_SALT',        '-Af.,|<i-.=8j_^ GX*oWYa/r()&0&KOTs=vd~o@L0RnwaF9),mM+N2SuG<Sx*AO');
define('SECURE_AUTH_SALT', 'c;>~J]9JbtBk^Av*SO vPn-e:Y-M{.*s]gH[FCW^&9Ih8Y]/ImOsJbJoJNa!A>A%');
define('LOGGED_IN_SALT',   '12DZBsq9BXM{D8VQ<WX~F q~sZECYvtN*LT7Q9BvcRL`5jV-Xe/<7MWzCj[r.B8u');
define('NONCE_SALT',       '[zt1{!wY_Yr3l|bOpC9aN[..)aOxg,Q&w6Rw6+;nEk{rCqQ4K^[6T:mG9|<} ]#<');

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
