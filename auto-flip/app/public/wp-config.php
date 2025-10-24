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
define( 'AUTH_KEY',          'C>d{M~,=jRV#2-#oyp%lf:v8Ll_)PxS4Qkl){4:DniU14Y:@;lF+{<LU.MAeHFV)' );
define( 'SECURE_AUTH_KEY',   'KP7C(<F9wUFes83^!+1]XGXOpNy4=8c)6h,7} FeomK9l2h8I4$dH^PJf1oxc2-d' );
define( 'LOGGED_IN_KEY',     '1S3/d`|;tz&vffg8>!|#8}rj)C94*:<_)njdrTSvfC%NK[Dlq)T_:hL$|[7I0R)3' );
define( 'NONCE_KEY',         '1Hc?vTyB7>XoFuI]/]nm8eNS%;1_*h)f Z.G$fzY1kx2Hb4bbwG)s2=%R_&!T6],' );
define( 'AUTH_SALT',         ';k*q%;5{ *C<L$oZs6Puw#@q3mzNPJy0T)Wxg@f+&#Z+baE8Z}BjaY:{?oV4?m?]' );
define( 'SECURE_AUTH_SALT',  'THqA*8o188t)5F!B^ R~UNhuKu1Dny^!%)xrY|=58rw H7lQ]5;B|Tb]wS`KOW<.' );
define( 'LOGGED_IN_SALT',    'g$O<nDt ]w!Hzb1F?7{|$iW?9scsTE|rH6{W ;|(GD077zIPm/b$]@{s@1 6AwQ#' );
define( 'NONCE_SALT',        'H2`o+Hphd:Zu6%_,{jh{_8jE^nl2gu80?;Loo@^heC?b+9/J (!n(Z1ftmwrGa7m' );
define( 'WP_CACHE_KEY_SALT', 'kPA+.G>m_Px}2:>rdcp/{fg0s2p%!0jOuj/{9>U7=^TUgM-qer.`EH18kj0%]qi|' );


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
