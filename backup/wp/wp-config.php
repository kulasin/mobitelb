<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mobitelb_wp591' );

/** Database username */
define( 'DB_USER', 'mobitelb_wp591' );

/** Database password */
define( 'DB_PASSWORD', '1p0Z.0ZS[9' );

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
define( 'AUTH_KEY',         '8fait7zljyozglzh5znsnapcdftxrvpgxb6nmghzspmz73duxo3innq4wjjfytze' );
define( 'SECURE_AUTH_KEY',  'r2bikcjyyaxft9fqhg4qsg0i1hdd3cgzp2akbvso1l1dkq6uebfyrjj7k382yl51' );
define( 'LOGGED_IN_KEY',    '5i2wcfulwtf68anx3rihtu3iuajrw3dmiqs4pcsob48yeodi7stjdtqsi7d4dzix' );
define( 'NONCE_KEY',        'vsmacirnh1btcnubtbvzw2ju39mp0zg1rjh5bi4jx9kgyfrhovjqw8fnlumtalvq' );
define( 'AUTH_SALT',        'bqtszmzv08ahtzcitnrbmdbl43rqpflvnmuksx0aeh9in91i9w1pydkqt8bnh4it' );
define( 'SECURE_AUTH_SALT', 'trhfob2rg5ruhynf3vr4rzqorvyvyhb6530j6tvoykucihv1ekxolb2hs8gvfghs' );
define( 'LOGGED_IN_SALT',   'pmccc6r01aup64djduiklcaydjv2mklq6uunpey7pa1euew3ufog2w4xeqv5r8st' );
define( 'NONCE_SALT',       '6nkjgiikgjunra9n1ieqgt0jqeokd2tpznzs3mx8rhrce4epntxexkrczdpq9qrg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvd_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
