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
define('AUTH_KEY',         '<2:X7x2ujocweNg;cq,yD R+&XIF.d?;w|?+|38O:yl-U?V_b}C_.w@K$D}>{nIN');
define('SECURE_AUTH_KEY',  '&N/^-Aac+}N T3h~GNSm=}Q5kHkG9Cy}67O{N|?z>JkoiU.SBIws^p1ZpP|(e/g+');
define('LOGGED_IN_KEY',    '<9kj+a-A(4+j+}kod@EuD1BGLv-&G1k6 [M91|R4k`g1/C{>tz>]64.q++oC=q%s');
define('NONCE_KEY',        'ZaJk%r]K)QvNdr;j`TNZ8l14F:rX}zs%sbm-G0^rG-n6?-j0N(eU~x<.!8[B@a]+');
define('AUTH_SALT',        '=ocX~tI|Z0xjD),+LA+/4Li:qoUZ<fD%=*3j+**(3`KJ%$ C!^ten9oXB/hs4&y>');
define('SECURE_AUTH_SALT', '.4vZ>K&t K%a.p0s|-%7>OAP6vLox|MJX]*U#w_=zzZCA`odG7]15Kq` ~T(iQso');
define('LOGGED_IN_SALT',   'TZ-OQZ|!$yi*a{zm@;)k>703]a,n/T&7M?D_q390`OE),zCCB[NMh$)Bw0-MjaRk');
define('NONCE_SALT',       'n$MRF#$AXPr0XS)I[ZYOPiK3mL}i*-;SHo (|XiM9CR-x(B+U5I(O8-%f-0kp#d*');

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
