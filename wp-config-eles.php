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
define('DB_NAME', 'epitkez8_epitkezz');

/** MySQL database username */
define('DB_USER', 'epitkez8_epitkezz');

/** MySQL database password */
define('DB_PASSWORD', 'Polip98765');

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
define('AUTH_KEY',         'Y>iSxX;)z#2{wm+ >Nb!F>J%{p4@hr/kS~[{OJ j]>jrMC8Icmkhsvh8M{=O=P.$');
define('SECURE_AUTH_KEY',  ';v[5#a:=Xvn3@|T{kHLF?[hXyprF0<@ty5[WF!lf_*iS= F<I=.xzo|aaJuY<:sg');
define('LOGGED_IN_KEY',    'xD 0mvry44dZTh~r?$SOut~=ZqiEqD%]Yl8SXNf,XE;Zw8~-[>H%]ar?{B5B2TA,');
define('NONCE_KEY',        '[#$4e4?2(YpjG%qo5U/n74~PVpE?7Q`fMT fXiO$7nsSUwMe^17,h6>jt^d7ej;W');
define('AUTH_SALT',        'IyB<kW`$t2r1cdo9XC[&J%<^;-apkGR(&GYYOS?p+;S~%.8hgpEb3OYIPAhDM3i0');
define('SECURE_AUTH_SALT', 'e~a:;F.%<2CM|dWYV.<s1i<R /v~Tth#*RI+ J0iZ^gWCY;[#u@S+LVf5T@b`6_j');
define('LOGGED_IN_SALT',   '94lb^A-iamwUvXGkD<0zjmLJn)am)?qnf*G,r!*NokU~&|`5G5DxKQGWK/P?VN.S');
define('NONCE_SALT',       'K9aQ*=Xs.f{BVvn_uIE3I~|?85G~K)0i2sq;:+HA j@WBKs< _m6vjgzTaRX:j!S');

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
