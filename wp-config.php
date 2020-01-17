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
define( 'DB_NAME', 'soly' );

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
define( 'AUTH_KEY',         '*lp^:r!lx>6lnnI9F^y<fsj9<l(t)eJ.;)bV88BzS&%_I0z,8_jS36V*Rff>puVu' );
define( 'SECURE_AUTH_KEY',  ')oauO5BG6Fe1AQ!k3eWLHN/b_HnbkiK:1_%D7kE &RL$NxH3@jMJ>%{hmlal]n.w' );
define( 'LOGGED_IN_KEY',    'W F6A953Zp>o,.ZF,8.%+u[zK`Bd)yRL5BOi<LEVf2~Y7iSX:m:`B7`6X3QJd8Fb' );
define( 'NONCE_KEY',        '98Br8bb;S`>rugnDGw5pax+:;A(=~Z:UaPHLE>,~IMXkTu}`vK,w;@$@LaLP0N/1' );
define( 'AUTH_SALT',        'MJmyi0,@NkoCW:F#r% ?R[*F`Y>{*cC@9j[oG=[kbL4D/]+XY-^^aU6Nzn6QQg!x' );
define( 'SECURE_AUTH_SALT', 'rBMt1DI[Xb)ykgU0udDBGxP(,I@|[{=^!s=p[0~]d/~z.m-jr&n2;rLUZ;?|j@N.' );
define( 'LOGGED_IN_SALT',   'uF5LoYF:dYf>%X59I/!m@ubR<LP_V=D7g&DChf&dDS@oPcnS0|9(++tVg4hNU=1/' );
define( 'NONCE_SALT',       'i]Z8YrgyVAHeii.O-9toWv[}!D2}eq.KN?XM)XBFG$,-).}?WNhS(H7j+dS4LJ(w' );

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
