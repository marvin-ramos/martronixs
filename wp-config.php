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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '/mAD/vl~M6pvJdGZm>E]AV{aJ[9Cqqm}0Jh44n!T+ngq6{wxC({o<-d~K5vvA30G' );
define( 'SECURE_AUTH_KEY',  '^1Ocw<J`n/*[V@;9hu}`di}2t^VKMOH^h`pl_J4wpD[7^Edqt_n+hky!q^@S9E1L' );
define( 'LOGGED_IN_KEY',    'h.N>M?;/<:e}r4^B/Z5.]8C@~xcFJJ/r|8tON-*rr*|!d8V,a=f{YRml&24t9R*(' );
define( 'NONCE_KEY',        'h.SuLsQygl$2f(`d2Q5gfDE$NwY4OK)>Bz[L;kT@o?2 yA6~1<3J^d$>uvu,56u4' );
define( 'AUTH_SALT',        '_d:.3xne(kVDEsH]5*L}2@j0+2yZ4[KsY~,kpR._$[CN@>1s6d{o^x=Oyek8Mh1x' );
define( 'SECURE_AUTH_SALT', '-|:c6{))N^m?@ZPO)G*J/<LBzq5UjHe~gAyymTIqcM@s(rMxD,<rQ;-Ca!qd;V=|' );
define( 'LOGGED_IN_SALT',   '(rt^UC;8n6q1Cmn) _ioCvOTs$R-L)=yTI99nqn_3w[mG2uo`BYLN$Y G+6@ahkr' );
define( 'NONCE_SALT',       '/2vi?&s4jlikJp40l&?<TanJdE5K{lsw,:)a69f*^`O8XNQW5{>&!eSH[GPK*>M<' );

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
