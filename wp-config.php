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
define( 'DB_NAME', 'fintech' );

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
define( 'AUTH_KEY',         ',O1}3gs<x_lH8`n-O{CRyby%MQ^wv$6^Df+i%P$g0`QBiPm<k8St:XtTsOtDjRY{' );
define( 'SECURE_AUTH_KEY',  'lyq-0k6)No/O=zX_Y0<EH#f5]HWLGL&?0{vdl>z|H^o[aVK{.PSzmuv2w/!G)*w#' );
define( 'LOGGED_IN_KEY',    '35w1Z4fG7t)foStzIC&x*|ZJ;S9D]iRP[gqAs.lf0+z>}B;ixcOgo]uer~rT+(z(' );
define( 'NONCE_KEY',        '=rh,5{mG^LRm8 :(_w?v41J R{%mGfm[->~L_}:s<`28a%GcX].*>6A8h0<`Oo[.' );
define( 'AUTH_SALT',        'r!ivLf}rU|aQB*+/r^y<D7B 5G%>F*B07p28-r@gi+=kGJJ{6s8l=4G$y3XDPJ:g' );
define( 'SECURE_AUTH_SALT', 'BzsU`1<(f%jG~h=ur}b.<aWtbCC0w<3*GIxM2o?`[y2(k@s_CA$^/%dll3)-+@w}' );
define( 'LOGGED_IN_SALT',   'R_fC3]a1U|K/}N*V:cyKYmZs5LK5!#t-:Z~^Dz4 3<Ex*3UuE+X2AeC?9dOl!*TT' );
define( 'NONCE_SALT',       'E;b7Q%ideU1zbn9gRXY.mmk$ya`,rBK_J~/,[Whv2Q:^Z#SA[Q7%@yVN;-!^I S+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
