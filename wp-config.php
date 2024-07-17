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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'josselc' );

/** Database username */
define( 'DB_USER', 'Jossel' );

/** Database password */
define( 'DB_PASSWORD', 'jossel1234' );

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
define( 'AUTH_KEY',         'R]Mu(<8i.cGAf!iFNm#VHiV{K]rW$k1|f^dUBR{hOy{dC7&h48@s|Ek,H55t!J+G' );
define( 'SECURE_AUTH_KEY',  '>^%9u$ 1DIzJNW}w(?sZ]%HP9w[nFlN^zRDy%kX-ia9 f6&DXQ]`H2v}][q8e.q^' );
define( 'LOGGED_IN_KEY',    ' LTxv!:YRQK#(]7dMX21_^w&f;]Il+MLnkwTAYJcdd 0`4SW7-KAwDz@K-^z<0&M' );
define( 'NONCE_KEY',        'HDXDSM37y-y5)9Yl2>qn+ED&b:g7`XK| #N;*J.#~xwx$s/z?]Msb{k.X3>0i5c$' );
define( 'AUTH_SALT',        'l?GA#-O%V6`DB[3hq&5YR%PJe%WmVPb*n=+bd=qsFnN<.>9h$2?yOl]B3N1I.Y$3' );
define( 'SECURE_AUTH_SALT', '_u$m^3h!S.hAEWAgVYK:Wc<Kn>uwJN/~`/3F!tY^,iD3OL1$Ce__(^FOM;7fF>c.' );
define( 'LOGGED_IN_SALT',   '?L/kr+Sy[q[UA*5|QuDhWKVd_ 0mQn4NUt;*3oJa`:VXO|PMtNgxGm@4u+zKKCXP' );
define( 'NONCE_SALT',       'gR%J6!oKx %-z*f&efFY549O!894)`(PZwb.!9L1hg<2 P7[kuHkL#B(KG]9xxEx' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
