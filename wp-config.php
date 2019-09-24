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
define( 'DB_NAME', 'db_gennews' );

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
define( 'AUTH_KEY',         '8o}&peA>1xzl5I=,yYNtBxQxoz qr$j&=?R}~Bk{[s_65.[hG*|zp$z9fXkpXxeZ' );
define( 'SECURE_AUTH_KEY',  'QJd<CP&qFT^HJz+RDD4rJG]3Hsfeo<#zK(Dj_TX9j2!]7bjnBV6 YU(;qZmfTy4/' );
define( 'LOGGED_IN_KEY',    '_Jto9t].N}]*<)Y]@lL&2=6[)da)Ut{M^7OQFrx~i~t~5E5JUWmy!9T/[Qb _0(~' );
define( 'NONCE_KEY',        '8kbngWu%dHEZpeUr($=`e#T]@*[GcDBY>;ea7b_{CWbZ)h;^JT6r)(Ro]]+UAI*J' );
define( 'AUTH_SALT',        '+F.X0d>c9cwl#|E##L@2E%z&U%],x?4_3tl;khZw%Ur}0%piMjM{8)Si%n0:N xg' );
define( 'SECURE_AUTH_SALT', 'Z$zW&^,xJD#(3E?71]Jlg7tY1a-4{8K@tdNU`SwG){Ly 4X=EpC]~m1YN.bfvz&^' );
define( 'LOGGED_IN_SALT',   'kc=YYc2~,uA8!6,wB-s4<o-Ro<pwNn~A+u*X+mkW%N*xKJYgz@FvU&D_67HM%}ao' );
define( 'NONCE_SALT',       'jU2M[+zO~LXxyrh}QbIfbh^>?muo3%l,He:A^^=}~?j?WE7!:bqOLMx(]Q9^gYL-' );

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
