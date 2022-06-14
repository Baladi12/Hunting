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
define( 'DB_NAME', 'first_proj' );

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
define( 'AUTH_KEY',         'r$,?r|k:ZX{M{iHo:g@)oprR)]}i;an8Gd3(6uNGe~id)x=/Dx!VY_dBdSy+9&Lf' );
define( 'SECURE_AUTH_KEY',  '<:clM+K2;]SRXI0j;DOM1:K&0(~GCSI2y@UUW6Q>1n4lR}*PTvBSS`86mXcw>>}@' );
define( 'LOGGED_IN_KEY',    'K]cVQ~NR!yB,xHyt:Hn!&5*9cFBfxaGV$DQRzMJc~AGI|%|4j]*p/g0|7H}1zoIa' );
define( 'NONCE_KEY',        'ze^I2J c1WR,w_<4~=EY33qx&)@@8r}/Jw[o:/B5Ti`-bMI]AcHBnCpU.tp]-d~j' );
define( 'AUTH_SALT',        'll7QW2T0s4UV1$N`j+lxEvBIeV|ssd;2A4rL$W(P9$S4F|^sQJ>U,y~+8n>%7To8' );
define( 'SECURE_AUTH_SALT', ')YT->bdehsUh8U-E#_Y&1AM-GMVsC2BRQWOj7_et=H}z4w?i~NoYe^yx|f-g(Pk?' );
define( 'LOGGED_IN_SALT',   '0z$vLs=`]Wegz+fYQ~Om^7Z:#HbS0k~UI2ph k0^TV!|v.r=LFp<lmOX0aaqJQKa' );
define( 'NONCE_SALT',       'JjvM[WZ4dyAuM@qrOJUw{jC8>0=C)7>wF!tTu;gi%pEYvv-=JIW,-Z!X8Fh)e(R6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
