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
define('DB_NAME', 'max');

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
define('AUTH_KEY',         ';@Li{Faq+`=TF~r-?iXkD-i,LkTbrnNtvBg#9ir{kIMN-}nZy6%GI6>>>o8>bNa+');
define('SECURE_AUTH_KEY',  'hiUzj&QvOi]yI1+MtxM9GRt!Uy(VvmRNIOB4|BeHn&lfS@8]yp/+O+xp-8T5H~NP');
define('LOGGED_IN_KEY',    'Tlddy+y_,n8@=cN;XT]G4a|SQmen2m#BTrS6l#m|yQ?BvRe6+c,m# z-~Pf-z$#A');
define('NONCE_KEY',        'Q@r&RhmnB{UK#+^;je6niR:R6pYTuO+tc5Gj^C.{)30lj^[/b&$=AkE<3u%P1|+_');
define('AUTH_SALT',        'z-+7frcG@7mhT>]u:}eeuir]+3.G!mJqT>DZ,)#c18NKg?EBy+7t,Exj#pybk&R2');
define('SECURE_AUTH_SALT', 'i/X.+|aNm(V9L#&5j]a1TLA=zYMmbF-1n]d_i],<h?B|3=^^Nb{JrA8ihCum:NJC');
define('LOGGED_IN_SALT',   '{Yl$G@Ry e1MysNB{.-n21b*lk%cZvs7*F;A%g-h~rw<rqnxJ!/M?1rVq|0+cQS7');
define('NONCE_SALT',       'mU%r@=O>/RKj(-R/C qm1x4ni41!;2cn/fqvvezw6SBYK-|ni~4ZD:OPU?R2[2iA');

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
