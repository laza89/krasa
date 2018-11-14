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
define('DB_NAME', 'krasa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GusQ( QWAwLz[:{549Q}rqU#d{ [<#X)VD@RP;^.kx(<GCVHWVmE?H|rokD~XUzn');
define('SECURE_AUTH_KEY',  'NJl*:Gj=#P&[0|6thbbDv3M~ RRS5l+Y&_m0AE#3]sHH!$)wO-c]C=s^x/rtOrk<');
define('LOGGED_IN_KEY',    'vNRgAiLO;)sls$1{POy)6xkh7p>7&^Shm%_s@Eo>bsZE_=S_4j.@^eEDNXvvltD-');
define('NONCE_KEY',        'NL$X_ul]>c/4_`j+]%r9w15wZ}i%2ybU?z>|4n;MNh@!hx}YZ)$eAo;-a[yLZ61(');
define('AUTH_SALT',        '&d6|&yiP#K o/=^%&9MVEBJ-vCMpLm%^7ae6rN&5s,AVJI76DGck8 +xzc8.rh[{');
define('SECURE_AUTH_SALT', 'mR-#iX*}K:ws)6029Yp4<`kDX4mWERPn2Wj`+n(DYR{mhKh1xcj6D<G.+zcnjby,');
define('LOGGED_IN_SALT',   'm!>a #9ruJ+RH=9=L8TQb1DTCN pZ/>?,Ttx`w$ykC#61C*Qc0Ew`[R<oV0eY8 A');
define('NONCE_SALT',       'Ds``^3>o%]Q4pxX{ZZQNA0`-!]`7-P6!X`BMP<sIHMaL2TU&-4`p;GD0`E>c0}bz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
