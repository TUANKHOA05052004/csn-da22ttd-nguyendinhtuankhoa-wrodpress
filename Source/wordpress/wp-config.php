<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogcanhan' );

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
define( 'AUTH_KEY',         'J2>t}8V]b_OQ{f,Zs|@oN=3=z/.pwqI;J<=9];SUCL/sM1f(@<=XJ+;bY+GKI2?F' );
define( 'SECURE_AUTH_KEY',  '_7kW5B;*3ebz(nIXXg?B5?w)`*s:>(3?@eby+IGB>}W3J&cVv225Cm]J/p3Ft;L7' );
define( 'LOGGED_IN_KEY',    's9NGjAgWo^,qR!E<#VORhjx+cqFdJdTY2$c5{)H1*Zg##v(Zxh_;fNyj)}6Q8RS~' );
define( 'NONCE_KEY',        's{uz{Cgf#Cf%<(sK/Jb?IFw:@u$)*hgV)oQ1#3[lGX#k6^lzc)}&Oz69rc7KF E>' );
define( 'AUTH_SALT',        ',j9IwaA?.mp[fHc;z^8x[$cUc&bAw#g+4uZRE!S)McxdlG2d724C~>W^Or6hPP:,' );
define( 'SECURE_AUTH_SALT', 'U 0H9[fd9|<M106,&d-]&SYvAHHkF>=fg7K,I8v;9:?6W(agH0=boIVjzRsv:&XU' );
define( 'LOGGED_IN_SALT',   'nB}_x<vMx<f+UkmhS[.:0_WI#Jn45=)JncB#v f/t(#9M,=9velR:)`dACrN[-Xk' );
define( 'NONCE_SALT',       'W3)$d<Q!(RDU(CQK`&xJS5% ren~D;<L<i{[{`+]F)1rOM<L!cQPTxG4m_?yBl:Z' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
