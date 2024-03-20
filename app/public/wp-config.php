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
define( 'AUTH_KEY',          'Pj#>Qo_/Y8,8Rt~_Piv@bG##N7|F`tnppSFe.Bz26;DO._}M`@@ySV<TV@j2=8.X' );
define( 'SECURE_AUTH_KEY',   ');KSZpJGQgNw_,)?cuE>>#ADJ-F96xw(0.[^~s_/s5k>&CvK^<JE~|U`L;avSvhO' );
define( 'LOGGED_IN_KEY',     '-H)_A_TRrb x@}s_3(z_;eN(WQmMw$/X_s:~a,u?8j!{Lq=YE=4;lT*Gr&e>6>gV' );
define( 'NONCE_KEY',         'vRP}>evx1)KZ}UM9+=PJoEoEhn$%`??,i4!hA777K_![RE(6sK>q0Q$tlQh[vvt ' );
define( 'AUTH_SALT',         'iw@]M.c&85-Hp,sqk_bDAg1:#Z}93O@y$j~1-3w&muLANr W&_PdH(g@|u#53`?Q' );
define( 'SECURE_AUTH_SALT',  ']WWP$U6p.1-u77e+,Ip X)~?EC+KZb6CBV{Zs+OQ<]j$PN)4D@lYe!R`2uE2=ZT/' );
define( 'LOGGED_IN_SALT',    'V7wNS8om%=Hp:@y;kZtA5QMMFXWbmLdAIF:S4*7QuC82s.Uo5nE!GP|r)+Ckd(rD' );
define( 'NONCE_SALT',        '1,-r9uF=to[X3l]e_4Bi[FNO<l9<V$yn#-ZxrsFZh=mW>9.(*-TJ0zny/_dT3hpw' );
define( 'WP_CACHE_KEY_SALT', ' }qg9*}S@RKoq-.E)M3j,#>f0V(-?XBZI~=Os|_zvzw;EN,0>&ubcwb2_86Y#CY}' );


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
