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
define( 'DB_NAME', 'cms-t3' );

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
define( 'AUTH_KEY',         ')[;mkx!y8/SZfFLDjY,P>_2l@:@B${RDH*O;,kD.Pqo=]:{GL=|x(Aig?/]iIi@d' );
define( 'SECURE_AUTH_KEY',  '>d>W.AzakC6$GmW=|{4+t{$~UWR1L_3BZlWO?[RH;5FJ#URLe[:~n~.3DTf%4;&;' );
define( 'LOGGED_IN_KEY',    '/`#E;]sF47Epi`T!sN!>CeS.;iul175[`/(<~V8QiF&e$b0KQ:kbN#NV?/XQ1 du' );
define( 'NONCE_KEY',        '&^TY)V0Ak3Ou!!4(DGtml-Q0xB4hPDibz$FDnk,|y_AFE;p{0uT]bWpUXE_Q#^3/' );
define( 'AUTH_SALT',        '[,z|ha%AkEh{(|<ihx<k3`p7r#=6027}J .Yt^9[79MdT<--Sv2{GY^VOY-Vn1jd' );
define( 'SECURE_AUTH_SALT', 'z.h;]?C%[rT-0aYwzER`K!|GQ19roCFkj/B d4GTxW>wb`aZJMZEaoGbSlb+=6ij' );
define( 'LOGGED_IN_SALT',   '07z9M36IKtmqEo;Klf6Eg~]sk,GLr3i}1$ 8;0Y#>Hk^{X.Oo+M-Ghr|!h/iYXgS' );
define( 'NONCE_SALT',       'F~IA-bLkz>m;LQP&GE]/@jS1a&A_CFE#7,?LG``[qe~B;}zaLSw OddP9L@X=<5L' );

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
