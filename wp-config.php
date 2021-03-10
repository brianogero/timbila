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
define( 'DB_NAME', 'school_db' );

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
define( 'AUTH_KEY',         'E*VRv4/h=VJZvgzP<bd43V_QK%(lFE?>q#dv7G%!KP9?4|k)kTzWjzE TkNx+e8%' );
define( 'SECURE_AUTH_KEY',  'XM&L^7VE(?B1l``G,6>4t3Q+Zv,Ec|X?ZR$qM~yco*W?Y3l2ScbS<z-z@OU)W!DK' );
define( 'LOGGED_IN_KEY',    '(@qq_fk@q`vL2?M^B}4V@gvm;W$t2$&QVnp2nE(W!b1bn$NO37Jd*Cvd<nHpG1Zw' );
define( 'NONCE_KEY',        'O_+w8e5[EMt%w[:|#CGi!dpK9{ (p8,S7f_9oF@6sgF~p==|Lo].v0PqA~h2pE.^' );
define( 'AUTH_SALT',        '7-pxKUydvKTN9[3b+9L[/V9xV`H!kmqPl_q5ui{-(%Bv>bdU-}H*IzL%O(cVE75Z' );
define( 'SECURE_AUTH_SALT', 'gUJC+tR(do#mi?(<#HpsbOER,. Oo6Z6eHD{C~O.i=ffn)/KA eSU:{$<kD&v/x#' );
define( 'LOGGED_IN_SALT',   'RZkd< LDjd%y<{gW%kHO#|ZZ;1GHYIV?y?gD/|jNGMvjDroptN|)c`]VL%iLW3=_' );
define( 'NONCE_SALT',       'RpLQ2~<~ 8#B>Ou}IxTUY6I9SNtoEZ<J;GYrV)B|`uV]<>mW>qu<){M{Rdp4K2ut' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'schl_';

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
