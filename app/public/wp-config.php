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
define( 'AUTH_KEY',          'xmzNG^5 #Q{$gJ-/fZJ;@kf(1K5,<E7HKSthVj:ficU3a+R{ZP#lf:=tzd%XVpMm' );
define( 'SECURE_AUTH_KEY',   '2=)1c4pc;*-s+]ZBmv!HHKeA&BzLF]<-[T*tMs?}*1{|h2M/us@`5@xN{:U7!8xR' );
define( 'LOGGED_IN_KEY',     '?A-K]?WbfTLMiv3*<5lq(B:JwUs2{ujkzZ[IQv6Q2]?de|u<esc,]::{GnsFsuh=' );
define( 'NONCE_KEY',         'skPM*lx8<dM_o>DdLA@AdpPHFg7.8t-^Wfbjj!PgP?H.J&yza#X)@%BxS-oyItY!' );
define( 'AUTH_SALT',         '}37H(cOI&ZD:dzk#Z#*8!JWe1PYxD+@e3@W1N_{V%8k -@3RqCh!JA9ek5g-bSx7' );
define( 'SECURE_AUTH_SALT',  '<j([R.w@o/5p.bc0{/=w[hh>9T5<t5F$KE(4HKU4iCyF:S3ZN#1/f$lx1DIs[GdH' );
define( 'LOGGED_IN_SALT',    'nX`z7;J~3bDA/h-1d0?_Cs$k6:4K={M6%|lw2yp:[F],0]?#;onsP{1L^(u{V<Us' );
define( 'NONCE_SALT',        'lV,W@Ilbg}m`Wx)Y|zxo^}6,:#4<=]Mkmil_T1Kd<t+6jOB~pSea]Ad@`bB?g:j:' );
define( 'WP_CACHE_KEY_SALT', 'jl,XriFldJ&ib*[~)y)%*c<D$no@w#}Ga?1.oyZ)7Nj]}eN_(03 BV|Z|>Y?u[jZ' );


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
