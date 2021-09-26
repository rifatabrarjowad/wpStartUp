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
define( 'DB_NAME', 'admin' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '[.)UruKR.Xirx@MC' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'a=u=O=t7YTQPxYUvImuR82%[v6X!oTb(Jj0?6U7XK>Y:=k@/gE6pSXyFG?sw0Cdr' );
define( 'SECURE_AUTH_KEY',  ']wJG.JA%LL$n`_0iq^57CB:GxZ|oJ=a`dS[Wm e:oFP`FGJ}n(GZe)F8Bhh.J*_?' );
define( 'LOGGED_IN_KEY',    'Ng+Z,^z/w8 YO#7xQ~gHDmLe`>f~;z/pz59&GBK?qa$j!gzz`$IK7L# .T/gg*}I' );
define( 'NONCE_KEY',        ',2N5AJN/eQolvs:=`]5*;}N-zDx9M7tF n~8Eh,Bz{@T2q&OBVKOBCI(=^*<#-{L' );
define( 'AUTH_SALT',        'Zigxz-$LOLxyR5E7RhB_rvxi|w;%`27`qT^Yr&y W;T|H7`HND%8mI#$TMHq}}a]' );
define( 'SECURE_AUTH_SALT', 'Q^p:<_i{9)G@Lu!KYsW,n<6~`zPB]7XoU]qk!Ob[/Fe4sm?tbLOv>( ??G9dv@ |' );
define( 'LOGGED_IN_SALT',   'A/tD[?v1>=R E!G!8_3<6fQ/-jV16#9_t%GY_-;t{@V{J=?t{I#jri,N$MKWS++p' );
define( 'NONCE_SALT',       'GlhCUyM+$dHs(9`a|E6VFg@lJGI1DR+nbKIhRmwymjBR||{$ZMen^d%.Hx!$,*i5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ra_';

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
