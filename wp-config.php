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
define( 'DB_NAME', 'poke' );

/** MySQL database username */
define( 'DB_USER', 'renny' );

/** MySQL database password */
define( 'DB_PASSWORD', 'renny' );

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
define( 'AUTH_KEY',         'Y&4]s|UwMM8:PyunhQ$6xYd5?hQ1m|D@g63X>w=P|/aGfQ)d`-FApsF^~SbQnXyg' );
define( 'SECURE_AUTH_KEY',  ':m!VsN{]PJQ$c|d]#,6v/.Tl?])=`l#Jg:;Y2$nNa2{v78yNc,X]lI+pO~vLHI23' );
define( 'LOGGED_IN_KEY',    '$T=TJ)sn)(C^&xYvw6f]6H6m4u(>]C)&.}c3%`KeyBNu&Cqyk!`1prty%_%Pg!aq' );
define( 'NONCE_KEY',        '.OZ3i-]Z2[lfqy<ad_fd NrFuRTdY*m8PEz!13^t=)s;hu:[u,/cZDPPEf)Qeq|~' );
define( 'AUTH_SALT',        'hCwzySM[&lKnpRxn:k<8?!R<O3qY5[U;LpG6;|!M),U6jwGI+b9(4bj_O:Tob;*`' );
define( 'SECURE_AUTH_SALT', 'A;DvAO=Ts+){?2t/}$Z;!Q7VR=JqeI:DLlLCDrY;5UbOcY6a0qIF}r,}broA<!%r' );
define( 'LOGGED_IN_SALT',   '2Y[Buq4pPLYu^QLoSXZ~BIr4/|,P7&A)DZ=IyGqqnp?kZQNR2p^kB$[I0;p!:ghd' );
define( 'NONCE_SALT',       '|)o-^|OxhW&OyL0i6YQ8X?{z4)%7?zwpl11^gwD{vj&V@Q>NDUg-r/cZ/u|9?@(|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pOKe_';

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
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');
define( 'AUTOMATIC_UPDATER_DISABLED', true );
