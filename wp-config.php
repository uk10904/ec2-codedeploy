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
define('DB_NAME', 'wp-ec2-github');
//define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'root');
//define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '');
//define('DB_PASSWORD', 'dd3aa6f8dd');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'UZ2BB1 2)2iMZeq%d0Iu]2=0*![}}=4jl{f0mAW;3.#Woq}1@iBHg^CDm2nTBJvU');
define('SECURE_AUTH_KEY',  'Q1hndWrS_4KpS+F*Z2<#A,`o$ddF{~KPAEc`NTtOK[@vV[mdkx^tEM&&FL}5t,@}');
define('LOGGED_IN_KEY',    '_]-i@<*+T?.p#=w^>KEJ1T_PcZdt|Qn]LC ;y6C}H_[+leI78D1q6X_PM# ^B:]o');
define('NONCE_KEY',        '}*q#=XUCY>Nhg9 O7:|W`3W=iJ{Va9njpBql+2WG9s8*ID>6dS8f`Zc9A9cow@LJ');
define('AUTH_SALT',        'jk+l[u/Do_6+P+V3m,H>k~ jCY@kQu~M.uK,i<=WAWneJUdvLkcQlGD4VGpFVz1e');
define('SECURE_AUTH_SALT', ']q,~1{?[D!))%b=0Biv&=hOm:-1RJ~o-:<~7*bXH`{8lc@MW7nD}7.<N=d+AY1oE');
define('LOGGED_IN_SALT',   '3iUo2xqL/p6IIBv~3? lh*0D4t_k`P[6_aWN3l8Dx0:~}pn+qVF(!B,Dx}H8MW&T');
define('NONCE_SALT',       '7^]L/tp9E]M8B)PE3#[yl80~xt#|Wj6Tzq]3gX_SM>o#tq@4YGcgnC$6b?D&it_,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_m3a9e1y0_';
//$table_prefix  = 'wp_';

if($_SERVER['HTTP_HOST'] != 'localhost') {
   define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
   define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');
}
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
