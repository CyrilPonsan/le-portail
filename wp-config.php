<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portail_test' );

/** Database username */
define( 'DB_USER', 'firizgoude' );

/** Database password */
define( 'DB_PASSWORD', 'UmM8R8k9KimZdp1d' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UMg%R@g_a#}`g~Di+Vip?fHd?Y~nKa=n@[0`3&1{^3{#4!:jpD|ykz4g&N}PW?gQ' );
define( 'SECURE_AUTH_KEY',  'a sIr:.NNBL?3gEYF5(f0;e<6<J6]|]|%s<OoGpE)`jKm.oro;#mJlhso(u{Jtw#' );
define( 'LOGGED_IN_KEY',    'crU3:k3-*>qJA!W(EhCT);)i*L:#suM(Dh %(LZ50f(m75.eCh^+/!CURyeL)*|-' );
define( 'NONCE_KEY',        'gR}=UmLqu)*E=HdA!N<O}7Ij4WAj&slCM?9r-tQF^+a+S<m>0$q.XxWA`HcPb+?]' );
define( 'AUTH_SALT',        'Smwu +2TY%e4}Uktg0Lc~ 2hLa)N<e5ac^g@<?#>w3o1E21-FFS1.J~V/B.}i<?2' );
define( 'SECURE_AUTH_SALT', 'zL8i[|ExC6.SSk$D`F&{zs6WE`S4IaQ_V!vvHlwYX]Js[[7UpXJ~A%o4 =J?gU-K' );
define( 'LOGGED_IN_SALT',   'O!yiSt0tzUt{#:5OS=2}E;nHnX`O(Xr5r4&~]L^uuWRYA6v=-hi hTt3A)uZBTmV' );
define( 'NONCE_SALT',       'n4~6}PJ2c2Zj//>NmU@?R~_}z/i(+ZS HG%-AmIPKC*}+VDe5N;SCW@FW#D*gw`e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define("FS_METHOD", "direct");