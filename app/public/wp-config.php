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
define( 'AUTH_KEY',          'Fg]NMF}wKM~M>F[uYS^HE99Tv|0k:AZMXpW$Dc:IP,_F~hT@G 4uWOZpb@5pm)hW' );
define( 'SECURE_AUTH_KEY',   '-j?rau4X}>39mcephVC_1lu`hE8m8TT2@G H-T?7;U6&:7Y[5Kz7Ff.?SZpjoe-5' );
define( 'LOGGED_IN_KEY',     '_W%;JqEy^~qbE3PfLi/mJdgW>`Y5#NHwkIe2,Ru;eMZHoku`u[8u.}&L;Pn@;yY9' );
define( 'NONCE_KEY',         'bF o2`% (e%Xc1psGh^R<Fr:uM1j]3{X9h]e@$)}`&m%Mk^8]!o}xI?Pc3O$y#(%' );
define( 'AUTH_SALT',         '4B]t]L3uVs{V/F9B0+m?BT~yL+g0QVF|#sIVsAJSmKX*4,fn>o}IdY[[{QZ_Jasx' );
define( 'SECURE_AUTH_SALT',  'fOI&SZr8u8$kDn!>og.S/0ifjC:MNlx[rJ-sX^m8Fyk_<Dak}&;SCXedAQY`8QOm' );
define( 'LOGGED_IN_SALT',    '6&sI]%[QRT3&LU=KF]#DH>vF^{*>u&U8?O%al4AlQTvit[$z|U<98{AI9J2OTxG6' );
define( 'NONCE_SALT',        'a2w,I#q%Htc:8bDq@_6^xw(VyYNGWD!O7qti2hK9|md+=DTM=^5.xMN`@)?IO+<f' );
define( 'WP_CACHE_KEY_SALT', 'Qmnv7lqOa;b.~!WEvD~QbSQ_WN2VEy-<_Fy]^4$L=&axLf,Npd$S$eF&SkTM+@e(' );


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
