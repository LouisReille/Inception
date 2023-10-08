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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv("DB_NAME") );

/** Database username */
define( 'DB_USER', getenv("DB_USER_NAME") );

/** Database password */
define( 'DB_PASSWORD', getenv("DB_USER_PWD") );

/** Database hostname */
define( 'DB_HOST', getenv("DB_SERVER"));

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


// https://wordpress.org/support/article/installing-wordpress-in-your-language/
define ('WPLANG', 'fr_FR');

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
define('AUTH_KEY',         'r7,<$f-5 ++$fJ-`i&1!}G[?B;F+`GDJ%vz-.[KZm.R6~-O;r+`Wt?Gg0/)S2z+c');
define('SECURE_AUTH_KEY',  'riF#SN:``}:BTUG+;HG{]j5?<U5xfz&uZkqIY!%nSF%5bNF/lzZh8O qZ{nKID+:');
define('LOGGED_IN_KEY',    'p!A20(lZB0M.|./T_e&-YNpJ,094;E$%ZA)J+{mnaAwzp<5NPl7|/YxRQ0O|?euG');
define('NONCE_KEY',        'N+tLL{or8l54dl+s(g$Tmp;9n|htk>KIRvx<f$E;AR*{8&vEV.,K=YK-+ ga5Jx@');
define('AUTH_SALT',        '7knTo)}^P8q?E(|rxM0$t=otyr@--e+%d_DH#e/BvWH=KkX94_+^H2nXh$y9`uwQ');
define('SECURE_AUTH_SALT', '1ES!P=;M!l-Lh.N+/0]#MaG&ZeoIUJV+Zfp6j&&~xmvU+8=/!ggs:bKe$vfHYLK,');
define('LOGGED_IN_SALT',   '0Q(bR[<?=ea*7/@-%/F|VNdTZY`X!{[t8te$@U+q.]EI3Rlosv #t[ED|VvSgc6a');
define('NONCE_SALT',       'ZD_gK@Bo3{%6qbr|I?+jk?NdpbBx8HU5Jsq,NF3RO*f3?b?BwXwVF:|H+q-G):kw');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
