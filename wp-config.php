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
define( 'DB_NAME', 'wp-book' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'SKKpa+sN0tL~Pt=sL_K&#E!rJIj=E:jsYmGW;epw$$(b1E7*L$2fjmA<dv/5$qOn' );
define( 'SECURE_AUTH_KEY',  '@RhlL=%d<Oyg8I[Z=t=X<r)*OR+zz> Cv-X.[I*sf~X,=~ORbR`B^JX[x/*;VfgL' );
define( 'LOGGED_IN_KEY',    '=Fa#k`6Y;*OoEK1@H9X?msA005lC P4t`*Q5GWnu(%Jq3lw,FNwXky?O<}6guTIV' );
define( 'NONCE_KEY',        'zy&D^t(1NzD!WgkuAkE9fbays&NJQt(DU+Y,7 [[(r^<^6g|<w^|. 3X35qIS`+,' );
define( 'AUTH_SALT',        '8v@8X~0Sc(KQ~[,Cb$W|0,AEZj@?ob0 S8kH=}|{:4s;m&v9r``Zq32GTI*E>3; ' );
define( 'SECURE_AUTH_SALT', '#J1(obYh1)vL9.Kx:u2_;B},|;f$5kt-ioO6vnb=NQC,( ROee#<C/KiJ=EiY<fw' );
define( 'LOGGED_IN_SALT',   'I{g7wyIq0xvr^igRQbtESEQjqt+q9Ue3tUH9d*8CNm0O~Gpc|o^WcEwe7cPS0gO/' );
define( 'NONCE_SALT',       'Z=BSzSq*~<:+z{tIgQ@^Bgs1nY;P<xj0M0!1yQ0Wm]-4niV/)_($7]^*XkdNC.@Q' );

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
