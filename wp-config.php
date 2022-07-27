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
define( 'DB_NAME', 'cut2code_db' );

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
define( 'AUTH_KEY',         '?.8ihUaI@ak++LwBS[jy{V~rN<3LPYIB&R)td8uMKL;w_Y5%0PD;:lE_0RP)p)z^' );
define( 'SECURE_AUTH_KEY',  'D%;%;j)@?cyj-Hs[6o[uS0gN$v+08]>Sx[).Ot}Xf^J* r,2uCeKw2=bOQPt{;F-' );
define( 'LOGGED_IN_KEY',    'Ur&_r<GlTU59.&X0RZ4sOk6K5rWp.6#=/+CN4[mkI@6PW1AC$Z9ohnvtYm)18|5j' );
define( 'NONCE_KEY',        '.Rok+7c{WIQy8.oU$n@^[7?F|u!?MeQ2b!X3$S$HMQokZo>G9_Fs@u;=&7mn;NcI' );
define( 'AUTH_SALT',        '|XA4r=qG{:hNNs@*S[{otXhO.^=ODg$U`KIA >2@Sf4(Tt|rJVw`:;~%`pIF@eg#' );
define( 'SECURE_AUTH_SALT', 'E.*>Qtpkbevx6w6?p#%r:>9m_k=w{s0<[iL93}TUh:ZKLeZ}#%U~@JYG~s5Je>W{' );
define( 'LOGGED_IN_SALT',   'H@O^oA`;/IETd`@Z9>$IId^@%VSbJM!Z5`ra@QCOpa!I#*05dYA7%tm^?_z,y]h,' );
define( 'NONCE_SALT',       '~#:ZLl-}tb{}{]2R#t1>9tS0Z0+b-~VyB=xUE4R)H9ASEH/kq^!npV]WPdZtlq+U' );

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
