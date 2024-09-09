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
define( 'AUTH_KEY',          'zMu)idswaM+7Rk*.dl~mEzaKT>#*iv8Bs17,`Zv6L.n@FE!Ao`iit{?*pF9<gX<[' );
define( 'SECURE_AUTH_KEY',   ';=P~3hk5C&u8!L1OA>za9#nA#%5coTo#o7tVo~S+;?(BI(:Mpz])Fl9:y*?_Ec9G' );
define( 'LOGGED_IN_KEY',     'O@0.s UVbzt/nwi?O@<Ud|LZuv3%nH$b>55|orC4ziaDRS1J<Lf{jw)]QCyv}z+l' );
define( 'NONCE_KEY',         'NLrdbhNLSKtz7h4w@Tx ADpje(&czj/PjP~i)%0wYtsNm$1RbZ?(6u/$v1_e!D%x' );
define( 'AUTH_SALT',         ':<l*,f=T),LU0#i&]! s}OExK;xMY-%#$w%.`=^9ZiOe^.l95bNKqhya1`8>r>#5' );
define( 'SECURE_AUTH_SALT',  'Ih-t,ZbKe1d<)9Aaw9d(`/PDtw<!e-6_mWhIyeeh<)V)]1d|V07{(CY8_SX]zTX2' );
define( 'LOGGED_IN_SALT',    'ESx.~:+CBJJxT=gHR+x6xuIB+KXpp#D35gWFN@nB%RrVD)qI}D8 {vYKD$3T]y,m' );
define( 'NONCE_SALT',        '5:si>+Q@nW#`ob%ea.|C>5LBI?nyYdNHZVdA1t4o)L;zaP_vj_9A6OWARzmw^F~%' );
define( 'WP_CACHE_KEY_SALT', 'XW?VF1_y3b$_qGUuU=:<FeF>/41c3NLRmi_2mMua%^5_s:Ur2Za?eUA7P$9-2v}<' );


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
