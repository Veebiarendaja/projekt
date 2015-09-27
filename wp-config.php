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
define('DB_NAME', 'evgeniy');

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
define('AUTH_KEY',         'EPV$1*dA,#vqaP|m+R?sy{z0JP:uE=NQ^xs-kUy:|yXbta&h( 6!ACiTwRgV8-0|');
define('SECURE_AUTH_KEY',  'd-Fjt+RCE^-r&P|QE-qeG$PirHvGc=bqid<6L9y9zFeR,bDpY5MVA/+63-hG125V');
define('LOGGED_IN_KEY',    '&.weANK`t!H&Cv;RD7c-]<tR0QRO){N%TuKD!;j>>)OJlY%ena))zwHI$n[=d~f}');
define('NONCE_KEY',        ' G-?!C#;[Ybj}AsQ`<}3I#B_-e~5XR4;|QE0]{ZBLb`f]%Bz>R6w^#Fcy0C|Ir%%');
define('AUTH_SALT',        '<8;EsY|y[rK{[x--*nn-TEek:x;AD`IHr6-@H?*vC+#YM)ucJg4i9e*Y|b:*-5%V');
define('SECURE_AUTH_SALT', 'dZmF|kEL::n.-B=B NVZ,c-1|&|0X$C5rGO`&KNMx]]tx43qSg]GPijkXIQ|sp14');
define('LOGGED_IN_SALT',   'zglvtCK//G9:^bpK+40CTKrg_yb+^Z|Y=7O#GikBgqO,_|9q6FFve`zSBX8(OWS5');
define('NONCE_SALT',       ':-r[LwFB5pig4^(qn&22EAUt?RQK![4}#97!`$xjT-PKNlbH=2x~8I*~[wZ|[(:l');

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
