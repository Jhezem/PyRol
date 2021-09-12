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
define( 'DB_NAME', 'pyrol' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'k>]g_6@n]vB3o701{)u&5?Z7fk}gK04IT1:oEH[A0Jb?CM_dJeIQQcBa%kUbk%Yk' );
define( 'SECURE_AUTH_KEY',  '@IK+C/Ylq}@VEX5P{X3`PmctR_@,YS4Ly>0+/ba39c/c<ZgvIJ~y`x7Q_=CfXa35' );
define( 'LOGGED_IN_KEY',    '4p;={lO)NHwI]39b0>N/4j!oO Gz8L&(NH}}dOO ?2d@A*9*]w*ltU3~Z(Ed3%G^' );
define( 'NONCE_KEY',        'dlXBbLd%4M!Luv+2S5QI7WxVLN>KUoTqJZq>sbeNt(%<(UAv==[f%2w|w9_>51dY' );
define( 'AUTH_SALT',        '5~a4%7biDLi1b-&1IS/A<DtqN_;%y,t`%`MQcRs5*lAYUq1v6INtX1FDDbV]:g0!' );
define( 'SECURE_AUTH_SALT', 'Wz_rE|OBk_Khq}&f^XVa%Tp0LNs1}T9I;M~|@ #*2RNQaFt^Sl8Em|g6q.:c}Vh:' );
define( 'LOGGED_IN_SALT',   'NPVqdHd~9<PPpzAo7!}%*&6eXUr6s6X+9Ao6r76 Ca&e:STT:AHJ[uMk/#MimHy9' );
define( 'NONCE_SALT',       'w^Wf1R&X2ioZuwH5Am/!{[qY w;TiPNU4=vz!^^hG3t}1~S1{@~FB5PO#6QGec6U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_agency';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
