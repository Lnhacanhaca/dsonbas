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
define( 'DB_NAME', 'dsonbas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'E^0GBjuF[/axL8X>wZ2gK/Z?>A*zY6qit)EZ}oSK(GM h3])NT`}VkTcLkfd]9f:' );
define( 'SECURE_AUTH_KEY',  'l!/h6*.3Im>>PW }dmqmMI=K3EeaaIu|+W_S2x:5|e4Px}]w2<Ka>9=7YpY}3q20' );
define( 'LOGGED_IN_KEY',    '.+*9),Edy+?MgPpmboKM>IeC/QVU?KUpAE;B|7M/je1pfb{cD_=.E4XA&ZctB426' );
define( 'NONCE_KEY',        'E`h^f=F+,w%7<<{b0NfyrlZ8/^*af*2&D!@6)OINhJu W%w,xBt&vfi?CAfrg5+S' );
define( 'AUTH_SALT',        'e07GnY+5:p;YB1rwIR_,Sm|86^(%B3WGSk*}1{oIlci,v%#BeVv5&<_5-*7Fy1@q' );
define( 'SECURE_AUTH_SALT', 'BU5[EkO g+43LzI/z[Pwjg4FzjWZOWnq98%/^OVW2G^6H.Bj.1RB+a2dg]81<{?c' );
define( 'LOGGED_IN_SALT',   '^6:^@w}lPBuA2fI;,lKnBlW^,;[#WVQc]uTjl[xrIf{@7ChZ*>3b&]a?vD-97a1o' );
define( 'NONCE_SALT',       '%eAFPlfWr$jwvI1@EjrgYt_`<pq,=L6E>!bRL_|-V({6! )c:zT3/f7g$GAA7tB8' );

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
