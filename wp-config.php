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
define( 'DB_NAME', 'Madewgn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ']&V7|)F-tejbt#[b7a.}?5Msx)FbVjSjDbf*@u~]GsY_v+t=*XN79%K33vMu|%!x' );
define( 'SECURE_AUTH_KEY',  '7Mvy$_,vghFG(Qv2PDy:a~-l(Si!SDgD*AF2&n%r.hbc*UH]U<uJJZISerXYV/k5' );
define( 'LOGGED_IN_KEY',    'Wtj,MmD|0Ms@L)nN%g&XqE`1rHBfv?21zdD(|A%+-s2in+[uH}$@GbrFMV;_nQM<' );
define( 'NONCE_KEY',        'f/BTk2mQY:$%r4<{:*)[SRP?cM1piW6JfsTgpw1T]s>oh(j-~4^/WYaJE&I!Ww_:' );
define( 'AUTH_SALT',        ';wb,R%CwSHP@L(qn:2_-l)kzg,i98 PVlC@2/:KDy[1DY/bHKItp}g<q}o#fL_^a' );
define( 'SECURE_AUTH_SALT', '()+O%R?N<+{)< RRdd]da6u[Q_Ld6h7<]!(0W,t7]VQ`|_t Lo`Irf) sA>p+ClM' );
define( 'LOGGED_IN_SALT',   ')j/I_@`@@.{B2EGHT8vPPjbb ~]VR k4=B81{[7ly[qa!+d;1Y==:X..+`&Mgqsi' );
define( 'NONCE_SALT',       '>F~A@KB[~A_Pzr&^xNbaN6sLF@}f_xH2V/)<}6. >@}?74;*=jT5wcTM~1oq@FEs' );

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
