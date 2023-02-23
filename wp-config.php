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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'sv|?4>/rb$k,3{wia%{4&iP%iiV?b+k)=_lNw7_)|x!jXxPp(s:72%31+r)sDq#^' );
define( 'SECURE_AUTH_KEY',  'r*8*K@u}7%,$R.^JpuKRgN/s_0rsL2]WQC  6Ci5mN0w6tHONAKtAV1$k Z)t{#^' );
define( 'LOGGED_IN_KEY',    'Qaw,Lzwa1aM#snWoQuL#8%C=V0TpI84Whm^SN q6>L:vXwmCh^BTH1[H3wC5jf+:' );
define( 'NONCE_KEY',        'Wh^`uu$)7CC%SXG`<J9}%qO&msj^w;9{X79:[g}hi<!{t>8tFmNE86q;@NFs;we@' );
define( 'AUTH_SALT',        '8A_Gf$z{LkL<jTo(g>IB< JD:6kr}R#C`Xa|;d])l7K+`e{oQHD]vb}MmKbcZf8$' );
define( 'SECURE_AUTH_SALT', 'cu_SZmv_%Jyfi9u5NI4+/.w,;JGyz&6%jWy0E!eJ[-KroGIoUX*h+@X,i},1ZLD)' );
define( 'LOGGED_IN_SALT',   'c|Xdv5JiJ&ia,kP)FJ(V0RyAUfzdgw8jml8isf**KF9bRMf|M4>G:.^lx;N]YPKl' );
define( 'NONCE_SALT',       '-G&9-5HI X WTsYH.Q-2P~Q?IddS3H@Pd83Bg6+ix>)hz4Z9016kb<!EchbIf)RX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iti_';

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
