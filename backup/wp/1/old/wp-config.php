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
define( 'DB_NAME', 'mobitelb_mobitelba' );

/** MySQL database username */
define( 'DB_USER', 'mobitelb_mobitelba' );

/** MySQL database password */
define( 'DB_PASSWORD', '&&0oC9h@c91w$Tdx' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'N9u:4#SmHJUz8|!r&7k+k2#i7-+8t_ulF~72~p9ar/bFV;6zOi6oS*jY6q6(eHf6');
define('SECURE_AUTH_KEY', '&qcY]Z@y08au*:k+#f0y_P2)PMc2h4A3lNY&V|18X6S&;!&VBDu+*28D8607DL_r');
define('LOGGED_IN_KEY', '_6-4|8t&!37|(S+YR7kh~XQmFlGMTMtSsT|Y96i#K6&857qm+/Y&S6u8TT*e:ZY-');
define('NONCE_KEY', 'R~@95dr@qE8@6)A]((/Q*M#3bYW63)[PL3Sp(OQr0V|Elbb4_K~n&JBzcav!;omO');
define('AUTH_SALT', 'H/O]Hq5+0MTtv1141X0h61w&77+!;6!9m4XUjBQ-:cZz)X]Cihy2AD!&v2#~ghRk');
define('SECURE_AUTH_SALT', 'Z~JK_Uvv9|9l&9sQ48)GF/1~0A7s3(K9k+u_lr15|9*lSgrfIv99;p4i3*W-vB2h');
define('LOGGED_IN_SALT', 'H1mF_m[2aMWCBVMq9rlZ[v7/7|:(Fk7tMXrkAb&m77C70OwbvTN71oLgjx8/sbJ[');
define('NONCE_SALT', 'P:X8KnNN578OI0J4)cTuo*k*g92#G7(BDlv5Z|7(6A;sxx&]n/7~8Gx%_6!%%4E9');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aSfIGn_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
