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
define( 'DB_NAME', 'meiskey' );

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
define( 'AUTH_KEY',         'x$BkwDc6#9 dF>I|bIpcSym4 9bW=47v`[0>{:z~|>#gjpC,ZsZb[Az)$nBn4#sJ' );
define( 'SECURE_AUTH_KEY',  '/uM;g{=@?{UWv<q}gW{(n1|:KV,<bP>#CQ6Gz54@lz:+>iBxAo}:swt5?FeB1|A@' );
define( 'LOGGED_IN_KEY',    '@X2U/U+:Fo&]&b=0P%n4,8)QeC%6Kg@KSx1FJ#-I[&SpRAFddgy2L:I$[`j#[)&}' );
define( 'NONCE_KEY',        'p82?0NTFT(^[0%`|[K*vtTj8?e$fW~zk^[=<{=|9r.dzqwze<k{Mk;H)1o{`dL9u' );
define( 'AUTH_SALT',        '=Os9EcoNk_RQF?aJ{V<Vu2f13CzX8Y2i)ip3C.+2K?p<`u2_N=Kn=0[6#-WxCp_Z' );
define( 'SECURE_AUTH_SALT', '!Eymb31Z^h{B_+G1),mh[OeGl29v5S!*vYu<;mBY}L(&VE(H|fJy&!Pn*(xN7c{2' );
define( 'LOGGED_IN_SALT',   'CN,@wZaVI?|h20I6)z%:29nb3,AK8bt%?,@m`H.Tb={WX/c%%i`Q?p}>3gh|iW;i' );
define( 'NONCE_SALT',       '4_E0ysp1sQF&072Pq;i-+Sg%$4^,%9%,}DNV^Xl^_zq6k|V,540Bj@gm+q(Q{W=/' );

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
