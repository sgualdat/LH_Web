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
define('DB_NAME', 'Lahormiga');

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
define('AUTH_KEY',         '+M=r:XrHDw3Gl.u* r`L;3R/ /g@d^OEw]xG=Zw2qy2NF?s!]/}&xs%SlDl}@T+W');
define('SECURE_AUTH_KEY',  'tgvV?N}(4HdTqU(#L>st_hDhqNQHf:axrQSJJ/1,kCR:KiWO9hlh+9uhcBqv[3Zo');
define('LOGGED_IN_KEY',    '(q}d&Wu6s Ql@~fz,>7z_2k1 [i0j,e`=D9z/T{APX~(Uvc5[r :b`Q+VHo`Y86&');
define('NONCE_KEY',        '$SrZsyXs_-wgNpc0l!M.)IT,UU)ZT{H>^P![J!75lQP2]b%RC$Z}^kO4yRWAyDx!');
define('AUTH_SALT',        'X4TR()E Rd}Z^ hg([!/cI?%4^^&U=9?*1&X~4;u&N;K#`HHlV<~Mm!eG~d!H>HO');
define('SECURE_AUTH_SALT', 'kZ{>{Q|6M~`ZJUj+u&?,@CJ_W$-tAJmg/>GL0-yoS3VrYpNpgAxk(%$/Qa(mtS?!');
define('LOGGED_IN_SALT',   'y0SH%cWfE09nQ Yk|xwpT<Q(J#[QJ?J7CV?049:mU#TAOjCqIldM~aLS*mm#^fp!');
define('NONCE_SALT',       '*LSf4_O*6yE,Gq3VrFyWw)#h]}ML2{!R8&}:U~#@x.<BT>$u3tL_}y8&gfoKeu(,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lh_';

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
