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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'djpunjab_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qBH#i%|F;XVu5$0+,ge/[gv}/P>VG#~ YrN_k!*[i$o/XGh!5^x-|V(W?NS}7K y' );
define( 'SECURE_AUTH_KEY',  '#)}Fw,ScE1R-rB4N=KT!;UB2T!X9#1AL[mNjG% S?EP4%28V_RJ03$B:[>n]A1~4' );
define( 'LOGGED_IN_KEY',    'fTl]u[2}a)Rk]vN7Sx^nt|C3G`4<{I~{d-w5Nt*wZHsSV-sh!yn|wLoO02kP[]?9' );
define( 'NONCE_KEY',        '1Uo0$SO2~,^5623)w;D7%^ZDpsd+$P[kXsrg*RFxdz!r>4BvDWsGzM.kN~ot|S:e' );
define( 'AUTH_SALT',        'UBxazPNq:Zj]I` nMTL#._U;xrD2? [-s7s$~4dvIq|~~c,=am/aZT,1s p|+Q*3' );
define( 'SECURE_AUTH_SALT', '%~dfBM>^:D*nVU[ciJ1we!/CO5;q.(16Zzxb/e5b<ws{cc]R-6V!;VQ![}l/?U@$' );
define( 'LOGGED_IN_SALT',   'mi=6#&Odzpeba>zlZ*VmX< /AJ/}(#DnS*>[f{15z|r};,(~a,OZdV[oCke&n!v|' );
define( 'NONCE_SALT',       'kq+Gm:iKqfzZJ9Y7&w~}A8sxTJGw$!4wazR_U-E,5xIc.t]k,zr#Ejy]p$6Os@BW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
