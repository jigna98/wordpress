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
define( 'AUTH_KEY',         '>R7w:9.(H1ri|Jfd$qkO_GuLRNwF+>Z?QcHMPdc~e6{hAsU~!Hvzr5?o;W5i8?QI' );
define( 'SECURE_AUTH_KEY',  'sBsWd|Ab>76U?g.E6>tjvYYPlv#IPf<u,T(ab+rUmp;xHg{g6b&2cGpn?m1>kCIr' );
define( 'LOGGED_IN_KEY',    'u,pg:k[kFEI;^Ue<wgD`?K3fg7`aD,tqP016C!dKr]<i351>!Y7@57Q:;W8=q3n@' );
define( 'NONCE_KEY',        '93>V!cEntKx(bvRfR%(tUqqw!O%;]+}X`%XaA7 `#.G>X{JzKc(20q .p%hv+YvO' );
define( 'AUTH_SALT',        'n;`l#IV9vMxH_n>k0S*bQ,nr(Q/0l_n+Uh?P5#wgBg>f5oUApU=Q42T}4{6;B}/E' );
define( 'SECURE_AUTH_SALT', '(~nN$VYND3?OZaUg{tqo},H9e@ZFjpK  aCzgh;EI7kDIa,5uOw,+j11<sxzt;Z.' );
define( 'LOGGED_IN_SALT',   '&aKuvE.#1s7GSBrv{FnD`ZsM=Y?7BOIjR:~e-d_MiLbo?>C5VXxf)GS9$zjv)Y.)' );
define( 'NONCE_SALT',       '2+U2PEF%m]@Ao}{ePUTvV{eOmJdA>NuZUDlZR/r~dH/m^_Q}jnenRH.(Wu^NeW2G' );

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
