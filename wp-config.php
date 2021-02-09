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
define( 'DB_NAME', 'chrono_car' );

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
define( 'AUTH_KEY',         '1E eZpr3dz9z(h5p#D8TcZPQ]@WKleT$Mk1m1x$kg{^n_EY z=Q.7m}e&Vt~2V|t' );
define( 'SECURE_AUTH_KEY',  '-WiUfe|dW&)bZP5$Le]0y5vV9`}Yuz*CS(>=-J940yJ5:fV%ZDH6u.cr9w31L}YW' );
define( 'LOGGED_IN_KEY',    '4o76l*Un}5c=z]Jc1fo;3#cM]kY.<#<[b>E[A? dL`%m)9`M$f!}t<c8hJH4L_If' );
define( 'NONCE_KEY',        'L[v/]{*{xmL97I#hv)w^M2H~W4Avm!@Sef_?-;-+8&r.0!kFxAkJ cKX4Op?s&`8' );
define( 'AUTH_SALT',        'Ztl28TD$.*n0CT2}E[TH[Qc#-mc&_c8`d|G,w}Al;{(4iVXe_eLYfFidrrJH-TyY' );
define( 'SECURE_AUTH_SALT', 'o;BvS`y[GGC:IcX6W;MtCfvb[AE?s&(_=q2B5 4@)CC_R{<?G){G9~[ _)i5OX=1' );
define( 'LOGGED_IN_SALT',   '3~*W04IG`|.U64(2kQq:+f&6t%u9 H$Kh5vt<N:nxv*Af-z`SP$1A_2HQ ]VQ.L:' );
define( 'NONCE_SALT',       '8%P?-@(~SD/jj|m<]25t+&4_x9d^By0nQ&Wf,Ix&~Un-Ud.=#CKh#t-CZ<2En*eZ' );

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
