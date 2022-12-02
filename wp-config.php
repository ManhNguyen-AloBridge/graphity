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
define( 'DB_NAME', 'new' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^Waa:)Du$osi7~bV{3e+u.m[Q?*SOF]Fo[N`;#I+;2lp;s_k,J//pTC4bRo$za]R' );
define( 'SECURE_AUTH_KEY',  'u vSQQ%`Tz<G^0@a/*Dj#q$0uBmeL5%h.ZFhl33xH?K-RKkx5?5Lxp6jYu|7_!9[' );
define( 'LOGGED_IN_KEY',    '{^3D((8M1Q/$#NkOu)@H2@Nm?5_;[DG[ 1@$4@]>-m%Qf/0y/8=,{WJn)/d[A>27' );
define( 'NONCE_KEY',        'uhx-WD& zyGTs_<`tg,Qvz/&})1{6o;6!X~}U+Sq-a~bb|v})p)}=sM4j7LWC~1P' );
define( 'AUTH_SALT',        '[XWc?Pi3m-lAXv* Z?9*RvUOrkr]hdyU? +nEYmq*Y2c~lir}W6n@GqX08fyVVa?' );
define( 'SECURE_AUTH_SALT', 'uJz:WEc.gndh74;F2F]5aL-8;l363;KQf*kOXv>^FH;FJR`44G~#%:1hMkTlviXR' );
define( 'LOGGED_IN_SALT',   '403[P2R1qIG`3DzHIkGTMZu5@WGoTfi;N=0,T;ZZzd&M7P0W=-5AR~dk{L<iov*+' );
define( 'NONCE_SALT',       'ZC!xG57DUI30,N:1/[e(7u5?Bg/rR&>]gW)Hm~t0P{?;T21fiP|#;{m]ju7 NJOM' );

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
require_once ABSPATH . 'wp-settings.php';
