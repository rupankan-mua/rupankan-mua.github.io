<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rupankan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#0F9D.#H/Y,v]saAp6_3d^)et_2C@%;Hij3v-tDt9A/Yym[9&PL7u3!jr?HHE7)1' );
define( 'SECURE_AUTH_KEY',  'w70lJMl32OUN4o_h#25^{5>P)tV3WNUMN{sWmR1sl_!9j~5rE!bG[c!g*396?<q!' );
define( 'LOGGED_IN_KEY',    'w!1K-RT-|1!)[mjcyye~eu$7.Xs_J90Fx m n`efVk.FIQDS`CJF$iwC{(g8wkd#' );
define( 'NONCE_KEY',        'c~mUPp~y)re4lwg[&Wy%+ IBM8i|ya=D8P<Zmx0H!&FpMyut9}tU>Z>]IDN1>CCv' );
define( 'AUTH_SALT',        '{l;T#19KNZnuqW!1hPW?>Vkm<ndgco HpH%Mu+!N)~_a#6Y?Bdn*uzisz;tt%t6D' );
define( 'SECURE_AUTH_SALT', 'e&,}8_1[Umk1Zdw8o%#O;[R}]W`>zq-Ps1H~>}{:ChpT:8 u!#=Z*yqD@LNHtoH9' );
define( 'LOGGED_IN_SALT',   '@DueBV[%O-j(G!y2pzYN8`eou3m8p=ZD2{W(B)O?t!Xza$`$lHC}J2hQ@G=PcA=.' );
define( 'NONCE_SALT',       '- pTJs;K6$?e{&!$&tO[d>>`0jL5%8v_0!Pm]Y0haGeB1k)U7Y:E{W2XE>_cBHjq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'SURECART_ENCRYPTION_KEY', 'w!1K-RT-|1!)[mjcyye~eu$7.Xs_J90Fx m n`efVk.FIQDS`CJF$iwC{(g8wkd#' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
