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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wplocalhost' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9&0e3S/Iup>c:Jo w#B!t<}9<i+s63E;7g)gL~<wO#h9?MB*K/=*r&]T6OwX6l!z' );
define( 'SECURE_AUTH_KEY',  'NPcN6H|w{$jr@C`hy/LLj,d &T+p2gQwtv(yfAj:f]jKi4*|Dq+3[v]M8tJ@.|0n' );
define( 'LOGGED_IN_KEY',    '{HockzC[ 3IeaA/LhRN]Y.[1Q3m@Zx~P5N!B?6k[II[4{<iR{oed(JKXC)d,,<&e' );
define( 'NONCE_KEY',        '=jRph0p`Z1D3T-aHLymaQ~<5w:p_3N[<:kS_Csif$4NjjPr~{A0Z1V?x@N3Cv(`U' );
define( 'AUTH_SALT',        '=NLduG8{zTD?#g iLSdPU#qst$>9NRf|dzFl[^)vbHj[@2xiu60_vJo,^W2E}py#' );
define( 'SECURE_AUTH_SALT', '$eg!uy0C+zfi_hyDVf5h1O}eG&(fvso[QehEF$b>_J3M9IS-2y[r7xFf;2T~HOxn' );
define( 'LOGGED_IN_SALT',   '=u{!q||VxRC$Im+VMV3qg6 #oN-Dcf{_+qSfcAin<t6jdFROS<;m)I8kMs3Rqa>[' );
define( 'NONCE_SALT',       'h|Md?^`a_glk`BqvS!+JAsA5xGv8rD*1#mW%3S17Lnak<*MZ?Sh|1pdj,&xyinaJ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
