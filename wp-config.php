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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'S-id<b/D GS{NGj+6~8q+r>YsCZ.c|7lYEgWk.jHb=9%b[]^LnaYh@(&#4caLji]' );
define( 'SECURE_AUTH_KEY',   'n1><#}w1NOC`8;YgnA2@bP5I-$yT2+Yu&6>gtT-_hD^v`W:,~tnb*Y86[xElZoGc' );
define( 'LOGGED_IN_KEY',     'UDSf%~1$Qc/~SkEU@  K;{is&_K}]2^CKFIqj0CF6$ 3RPxrqc6J`^3SUJyN?)@u' );
define( 'NONCE_KEY',         '{|w3Lmqj|(0rs? <=tx1KXEBMFmTWBb)md[!uUW# MF6MBHIb7CodlLEtCTmX/~Z' );
define( 'AUTH_SALT',         '3(NRLp2KgR:[:`@C *B&.eA~#i(FQOd5Xl_Slegb @!ZdTWI+^`WZxv[vR>i8lot' );
define( 'SECURE_AUTH_SALT',  '&`yFFf}tQ`iBXVW(ns?@e`8.-y}$TDOym&BrUqx5VS#c<^2_65o^#V^$eJ21C;R]' );
define( 'LOGGED_IN_SALT',    'f+D(9b3p0SjS?OF|Y)ku)#?S_((*<mG_uBr)vkE&<t~:(77&Jf5E{ZcoV}9w}J5*' );
define( 'NONCE_SALT',        'cSx/:hoRC8T{=p&GOz)J*C(Wb3l8GvK IjVyn#1c(mM~%D{cH@xs8%h7MR 7VQ#-' );
define( 'WP_CACHE_KEY_SALT', 'W+Dy6Op_Qc+utQ4}`PSP]*_Qg*ZEy5H!Amyx0Og&m;|Xx#xO8S~c/7We(T=F;UMz' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
