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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webfinal' );

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
define( 'AUTH_KEY',         'S |j(40#aL[hz*yhC)}kV%c512?j`m@$[d@GKY3u2dwz:/~na8}^kUAmpp>,c$}k' );
define( 'SECURE_AUTH_KEY',  'n+~U,b#d]KDJUQ>CBYT#UPsbSIR1|R~?X6*&Hc1UZa~erCvk=h3aVxLX)kP(rZjh' );
define( 'LOGGED_IN_KEY',    '|n{{|&4wx3x~>tV>G4$E_|O;%u31Mhl;G^=8E-i?lJ7&)J,pE42r^*!zc@&y{Hv8' );
define( 'NONCE_KEY',        'yHC/-,LNq9C5h8=:s:-b/Mx?1Y2u48v#6~9X]!X~JlfJ7?##$8>cG+jdtd~NYyMm' );
define( 'AUTH_SALT',        'bj=u5X}rHBz$.}kr?DT(GYA@X#ZZ#s0&Zu`Q;w[(k030f.u*+_Pw$`6j|gmcrXC*' );
define( 'SECURE_AUTH_SALT', '$#-+b`,D.F?b9|tupJ#K9:;e=@x+f==^!fzuXs/`;9u%`[NTDnX]@<+w@d<WE0Z ' );
define( 'LOGGED_IN_SALT',   '7ER)?N4s:O7A-/7%JhB5P>?~<F*{x6]AqU?oXgu^N)puQLRY1<*BhB*@ga(XDd?k' );
define( 'NONCE_SALT',       'g}B7{}fA32Xh5-Mk}fnQ42|SK6U`-5b_I^WceSyYY*s;9dbX3]he``F,{zG!e,HW' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
