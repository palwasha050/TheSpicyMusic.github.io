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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Dr#9# ~H(a(hiV?R*o=o[_TyGSiJpwgd:.y/6Qo367zXYonOl.E{=&I2?oeN;=l-' );
define( 'SECURE_AUTH_KEY',  'z*O1@B`%Acy6ZR^yR~C&MKm9D1r}floXzyFx*jzR#9^w.eOl 3/.P,Sy2.$mPPyY' );
define( 'LOGGED_IN_KEY',    '(b l,awj7 as_3~F>bw.](%3Av{CA![pH/SmJ7-xMqz`CEm/(lA!QSp4U,/J_vEO' );
define( 'NONCE_KEY',        '`ZO>,!iFrUh5uQO[Qk_-Bfc|0PoO]!a!?4@0y+Lvn;dY>k2#Kp-r-[Zx78HqlnAc' );
define( 'AUTH_SALT',        'imRVC%hsFr8*`l4<&4+Ul6VY^&G4I@[Awi|l!vlZ366{9~bg2(UO/7fjw=FXX?Sv' );
define( 'SECURE_AUTH_SALT', 'xWWZaQcjQt>9ce~:3O!4=!4zM3^k6*8#E`AU{Y3}2eYkFVD&i5^=0b^/8*|-PW3X' );
define( 'LOGGED_IN_SALT',   '!%),V><#E@>Obss;]>w.> V9?LH;Sx)0ID5H8,+FvEgaIVpzQ(%)V9@T9%ZnS1e3' );
define( 'NONCE_SALT',       '*#[s5kjD!8Er?r_~gU6v%D]YBPi9VrfdC2KS:.N>i?#$=3!L/lQVdh8:< yvyybn' );

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
