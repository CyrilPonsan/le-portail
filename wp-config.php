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
define( 'DB_NAME', 'le_portail_wp' );

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
define( 'AUTH_KEY',         'c]M!zW7$D]vYe:,0_oA?Yk9-IP_cz S[PjB`)]U!.C&hN_Gs[yVv4UEeM+g-bp|r' );
define( 'SECURE_AUTH_KEY',  '9~G+&l?Bm<:iM8nLcdMDkS8@|9i}zBHn(3);+W5~&g#2W5=ZAZ@[8!n.ifrs@Tbc' );
define( 'LOGGED_IN_KEY',    'X,3kVyuZ<#k1L.q^~SMKV}/#t8nE+*V-]/R }Jm0M?Um_PR~*iatVx*)]~#I7?~l' );
define( 'NONCE_KEY',        '?G`-QvD6Jx9S&;7sxH&r/754ZMZPi#4=~@S1sr9LjK9PI/s6l{~k6bl]CqqMB7f5' );
define( 'AUTH_SALT',        '#[_ %hr awIL6.hnuqsR)yXHP4mj9<iFwIuG4ty{2OBxv@RHwV?Q2`qa$/j;fgvM' );
define( 'SECURE_AUTH_SALT', 'cQUzG7haIt@]-};Nb}VEmsno/|7zkvP$>N5:/WO@3gYnC,oY5;<TBvp>Di*{5A<9' );
define( 'LOGGED_IN_SALT',   'dfX7cIT 0uVR4IL;C*!_6{|65U&9U.Uoqwwe^n5Bq=MXqUX7K kyHmH_/0YK,<SB' );
define( 'NONCE_SALT',       'LM&m)BiKp_oB@S5y060gnLC]|hSvuonRKIH5/mW|UQc>[LD>](&K@#6L<-qdx0T2' );

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