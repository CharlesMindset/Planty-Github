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
define( 'AUTH_KEY',          'iecH0n.!mXBPu3slp>EY;ve|[T1Oq09e7O 2&2F#*<~lN N~k;1:6(00IK/6cg<T' );
define( 'SECURE_AUTH_KEY',   'j36,g%lJ+%Z#uYTp&!7iWKQ)|^9R}jl?ds8@7aR3hfQKDy+8awf9t]#[tCKl4:~d' );
define( 'LOGGED_IN_KEY',     'lb|^Z NUz#n3O-+:bBOYC_Q{eV5!wOIH`]KO<J@nB/P+E4~_ k^Z_r4!2@>p {Qy' );
define( 'NONCE_KEY',         'n:+nd.;$`N2N}k~Io:EGr;p4,iKO?GXgpaNn_,+&}y!_j`c)I^7D AdcUi&G@!4/' );
define( 'AUTH_SALT',         'HvB!<1jw.nb[.w!HltVx1eDFaH,4+=Q:R/n>RUP,`h,aX$Ce%~#YlOIp;qj-|NS_' );
define( 'SECURE_AUTH_SALT',  'Am5[pB$DOu+tQx~~&D4N=cF:E~@ylf6t3w[RJQ<[3>XK^u7wbJw-OE+iS0ADz`WU' );
define( 'LOGGED_IN_SALT',    'ePI:C7F)|?Urc?<l$G88u3a& gwt-ej3`s/Y%[NmK#aeE^_g_8w}FaB!FmZN;A$]' );
define( 'NONCE_SALT',        'sK(73E:agDMYJ:lbVC2t:U~gH[uSQYqj%;XZ)1/C[MtrtmuI;BSve@Q$u1 34QPn' );
define( 'WP_CACHE_KEY_SALT', '7h,<q+0+3KTbk0(Y&ox[j_}yrE9E<.:GbZ?p0A@lr3#hA,0s~D/6^^%W,Ky(6/!z' );


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
