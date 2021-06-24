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
define( 'DB_NAME', 'afflixio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ve`T.[1[ l]=I7[cLv[#`md^E/{)s4(JVYD@,k+O`X<6wDif5kbEht*p92vHONgf' );
define( 'SECURE_AUTH_KEY',  'V.c6}q?DLfk*=ZD&w&kwuO^?.WYyBP)un@LI-F+tv/L2!<s^Z8,YjI;Vk[H7/Q&V' );
define( 'LOGGED_IN_KEY',    '.pfg=9|ked.]~G](t%WiuNyajngg#fM>iGXP43t>B7sej6._e}bl$-WL9Cawy$`4' );
define( 'NONCE_KEY',        '}VI>FdU?f)+&mRx` }N9ht5`Gv`1aK-H*X<6c1Xw[KLu1cs/1qW2dD+/K)L.CYM(' );
define( 'AUTH_SALT',        '/)-p73uG17l~FC{`k%(9`C&1Zn&+i%r>_,Q`ZV<F?qzw_[5=K2_>^~-_JI+)|-(z' );
define( 'SECURE_AUTH_SALT', ',|vaeqiM<L<}3@y+newYp<&~NZ!Cj2p~P(]*,p5*^[0j`Kg*8qk5yqGRHB>OW7`u' );
define( 'LOGGED_IN_SALT',   'O-=?038yJ4#&H28+$efjl.luE*XIP%.GKnFF,j5a+uiY@}O%MU<FW!j@-GVH(< s' );
define( 'NONCE_SALT',       'QQ[Ghk A8il1PIx<kl4J%TYwLql*D:.k+^b|{wG[fks4/)PD6a~G) 0<[fQKN:g7' );

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

