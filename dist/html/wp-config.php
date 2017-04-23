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
define('DB_NAME', 'csr_mgh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '>Xt*0SiB`vL&-k}#By*-;C^k)~FZ#sw~P)780Ue2u}6uqWuA92T;zV z^LxAQ08u');
define('SECURE_AUTH_KEY',  '[V3>v80;D(,ZQ}NZ(eD0>O{QM-)uIy_sdOBW4OE,*xIULc;m([H oXU$*IjQy=s]');
define('LOGGED_IN_KEY',    'ZO %ghg>Uz}YH{rj>wbS5LTUfT(Th90~?={b5g7SPi]El5KY-=PMqF]zB^!*Czvq');
define('NONCE_KEY',        '5FJS0%BL@7j]mDuNXf{6+]Tz[<Tt%n1u]47}wuyg)HB(sS!i(9eI.^:#8A[y,9Kc');
define('AUTH_SALT',        'YLo&kN,Ts&/x{_0wLYy&(/d^=iAi~4WK@.&Y-d{&3RC-D,>(_9Otjop]e=wvXOWu');
define('SECURE_AUTH_SALT', 'aOD7@P?p73-KfMS6WmqrETgdQo%u#(pe$VeB+]zIeGTDkp{c_bYMn`5<fg^!|EAE');
define('LOGGED_IN_SALT',   '?09+aWVG?_6AL>31Ke,N<@uE-<g/WgK!VQl jJGs>c`mVSdr{61g`gH!L:~/B;;8');
define('NONCE_SALT',       'BI<y-j2nJh2U`X?f:Tp_~N}v4_Q<-=yjzqM]UHjKrkZeSN^E %R5oeW$e<//xF#G');

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
