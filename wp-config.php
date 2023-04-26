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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'sarbendra' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'e9j[JNh[AsKFEUV,-4aJtNm2d;,(hJ.ghQ[4Mcb*J#A&Mm,Bo;Snbz,<8CY%=zPg' );
define( 'SECURE_AUTH_KEY',  'P!iDJ@Qyj@s[JC|mB,~p]0K?OwdCpami73x{>v7*52-AsKeeT5uZ=<jWFkE>qAk#' );
define( 'LOGGED_IN_KEY',    ' Y)-Y>wI$TU7xrr,=_@SIPGlV|I=9Llxc,y9<C0,|hLJ!dcg-v~NP#vOtAUA~A$*' );
define( 'NONCE_KEY',        '(y|0tz_j=C@aZuP wZJ@RHq>t+,8[a*xsC[ZD]PXYR4$DxL!R N.::FNQ5V[:rD/' );
define( 'AUTH_SALT',        'r=@QuD#t&AZ7i#*@TymFGO0o(C@[1t.GIhtz/}SP42V0JY|8zr,#`_;AG ,k]j:B' );
define( 'SECURE_AUTH_SALT', 'p@V+eZU|3sc[@GPV_KVh5MG|C_(]9Ii@D`=;k$8 k*R&`Z,,3e!{G{{0[n:>j*/o' );
define( 'LOGGED_IN_SALT',   '|Lsz><ulu5IDSy]d~-yvSOf^1$KK7}7p/Ix e;$AM)mHUp*H:)]f9EmsmH|G7?4a' );
define( 'NONCE_SALT',       'jnpEW^7-rjT+!=s42o98nKm1im!RHx-}(,-,Mb}!qT;Ex_y4d:H*$693K/G2}6 q' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
define('UPLOADS','wp-content/uploads');
require_once ABSPATH . 'wp-settings.php';
