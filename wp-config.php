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
define( 'DB_NAME', 'sayur' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1>~!@V{ItYzaUi~/Lxg~]g4b>;  c]Ja!gjZ=.ik!)T`P_NRd,7O6VLy)IH|,G5X' );
define( 'SECURE_AUTH_KEY',  ' S. ?OgfWsH-}yd]9EBhD(i+XF*/JBlzq,$%:K/1qo<+wO1NHe12<LN._9WFNF84' );
define( 'LOGGED_IN_KEY',    'ib)u!eS*.`#Gt;5EY<ILY RKQEs@@!.aHBv_UK*D:IoYLPAE&0CB]>zAL93$H~D3' );
define( 'NONCE_KEY',        '}X<|xkz$xS&*~rQ:MiWo$Rwc5.UF-p}3%~XYboBH>UmT(S`&#]@g&_K=tkgEhxz?' );
define( 'AUTH_SALT',        'H>zPJ<Ed;LU~GITR9rvzy|&W$%&+(TZW>+=I{ sG<oG=j|jG*?)YFScPUJ.Z3EOl' );
define( 'SECURE_AUTH_SALT', '6`$]pg&l3j~cs_EpmMG5k?qaV87JLomQ9AjaTjnLCxOjd|)m<^Zl]`D)x%F0WP`s' );
define( 'LOGGED_IN_SALT',   'I@RCX*PKaI^[hlh^T*ov&0+A:.&NcT@r[APT6zbH#KXqrxiB3yUPDPq(0uN2dY^f' );
define( 'NONCE_SALT',       '%0myHuzfrKJ=^o?D=2+o=H1;X9,2#g|vArcb+pO)03EbKIkE8>TdW~j-+*MvRyHo' );

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
