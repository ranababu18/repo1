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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'codefix007' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z#DT5e*Ik&D-K2&NV%XD0Cn*}j(FQ6[k)C3<.~xi&Q:c/Z&u,CO;,?`8SZ<[a55]' );
define( 'SECURE_AUTH_KEY',  '-{l=av[+~/95(YVs,:),}-v%)Ny/wE*!%ej6+n07z&2z b!ek|hTx`Za5 #-iekW' );
define( 'LOGGED_IN_KEY',    'N[CE/y6!a2^810e!% Ls6o^Ulpe44#mqs9zne@R 2VsB2~3mxyg`ZI;r0Cv|!@PC' );
define( 'NONCE_KEY',        'VD=v,3#1W4gbnoC[,,):n4&yTXaStWsR@EMF&leef.{:)X^r/b1>K?Rk=t<%}r*b' );
define( 'AUTH_SALT',        '[WK5s1:#FYL$q!lmm[z0hhu|RAy;4ByZlWVroM~YDQ2[>k+Rb%KcWf@;|Unc ge/' );
define( 'SECURE_AUTH_SALT', 'yh]Zfv;>}o!_pY]!o8|3y`G+q}U^nN%Yd^{tEF,<`4_cH}Fjfo(_Ii<S&fYJDGW@' );
define( 'LOGGED_IN_SALT',   '4z9t,|A]b;j%AGKL:{`ZW*j};8bR{PY^W_/W4{-Jh%BgYqk;gs5I0]*-Xm#BIoOh' );
define( 'NONCE_SALT',       '4^_.fXmq6`b?srA4lwK$aW#`c@uJkU/E!;B0S8opDrHTclYNiKi16$*e(]*2I>Vg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('FS_METHOD', 'direct');
