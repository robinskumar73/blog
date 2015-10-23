<?php
/** Enable W3 Total Cache */
 //Added by WP-Cache Manager

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'robins');

/** MySQL database password */
define('DB_PASSWORD', 'myfunzone2030');

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
define('AUTH_KEY',         '&tGk_K[%MVh@+?/+D_?itKm]]dzyqCzH$.Q;L;i/s|7c>h%s=kexX|Vrra:/[`c~');
define('SECURE_AUTH_KEY',  ',5%f9`yevXH:w~.y%(;{h9KHTKU@_D4_J1Ibs#)]6i(?T/!]t!y:<zr6a#3#ZszK');
define('LOGGED_IN_KEY',    ') t&7;G]zMy(J2pe/G1A70GPbg~@eO^t5LaB1fb9:eUvVbo2!g0k{)Ez^S8?G>f)');
define('NONCE_KEY',        '1DMy8K;I}x._4KlbGJu=&3?zs)=5UdtB@bF//h+rF]i+.T9[*@2)^!(;UB_n2]}4');
define('AUTH_SALT',        '8TZ/^U{^992lDRDwfL{z!hLqtmK4Ec`3 *-7Q.iPghop8uU-I2ABiEwUIGim~GsX');
define('SECURE_AUTH_SALT', '<zyZh+o-8D~jR|4%Wh7xjU!kL`A#;1EHiSQEvU`](i]8!gB`+%IZ*H]RCY6&Zgn4');
define('LOGGED_IN_SALT',   'Nyx|2=t{IyZ_fpz9C*~SEcS 4+jid79]H$$FOW1^4:`5T<:*ssxk/F?@4xHDlQNS');
define('NONCE_SALT',       '%I#K{~{`+jwB$<n)C58y?gJYg|~dd(V!SV,^t9+S$(*V(T|gQJ$^&bGfE-qci-Wc');

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
