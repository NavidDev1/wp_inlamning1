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
define( 'DB_NAME', 'labb1_user' );

/** Database username */
define( 'DB_USER', 'labb1_user' );

/** Database password */
define( 'DB_PASSWORD', 'navid123' );

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
define( 'AUTH_KEY',         'UON2`^=j(|i`sXB37$Cf`~0ilaX59E*g{CMrNzgzP#Fr#H(o~lPW:o(4OOA!&r7/' );
define( 'SECURE_AUTH_KEY',  '-C^4H +_#sa?s/Kumv+vSx4gN+O=>B|{zp=aL1=Z;JN51{dU6.WRQ)P4zR4<Sp5m' );
define( 'LOGGED_IN_KEY',    'XFNJwLJm==kf;W82fSt5l]B9mmQ|^M/pH([`CrN>c{G?MVf>Bc/fe`&xRDm5A0IO' );
define( 'NONCE_KEY',        'GhR^`0|?p*X#ZmveXJt=f:c%x+&6}fe}q0QDL+<3$(+*BV6U,O@LbSA~qSyP<5O_' );
define( 'AUTH_SALT',        '1t#Xm`.tvKU-aLOA2F*|$_*_9:[4h7$gIe01I`LOt;f{rE,gA_S-ebv;dmQ.B/qB' );
define( 'SECURE_AUTH_SALT', 'hEqk@y55C%`a%,H(PQg`rf-^-tVRP=G|a1M|!m41[(v5G3~bzHr&&?^Vzq5{_84L' );
define( 'LOGGED_IN_SALT',   'uu]H|UbZfvTtOVXYt3~wtz/3?U5q0JQG4sYb&s;O}kOoa0D6g7|`~$1zjx><0IZi' );
define( 'NONCE_SALT',       '6EMnRpQm9FzS`7 avs3WRju*B/V5&SQ*BrNpw,+CX995 M^|d,c%iGcxqJyaejlL' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
