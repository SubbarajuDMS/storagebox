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
define( 'DB_NAME', 'storagebox_test' );

/** MySQL database username */
define( 'DB_USER', 'bbs' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password@123!' );

/** MySQL hostname */
define( 'DB_HOST', 'bbg-ind-sql1' );

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
define( 'AUTH_KEY',         'mhq|:mT_af4O-w?d~dK{*x;}VhcV-m~/3)+cCJ<-OpUb*/{:eugKEY%o%Wf3 kvG' );
define( 'SECURE_AUTH_KEY',  't#MhcOV:VDy#T&QXgF>|Is1Aw(Ctx9vB7[>_#Z_W_:P|s~X&oa_0Mlvtr_]_>_Iz' );
define( 'LOGGED_IN_KEY',    '!hWMl2U$/mELZ9H7$h-KdfEa`f?./cYtF0~45+9.MB=H.;Y15X01cXMp+1N{GhkX' );
define( 'NONCE_KEY',        '<J$-Qq}.u|$1Ul1GVo3AhmX3CIv=|F-5|_w~BEcIs<E#68/32{m Hb-8D;!Il0|o' );
define( 'AUTH_SALT',        'Sow0{t/*dlv:W/m:k>c$|?$a,F!xPNRaS6SVC>8_YHpxum+a!+r3cfD=VCAz#<GJ' );
define( 'SECURE_AUTH_SALT', ')x7j)nW3LpzQMCoQ0Hc;_1xPF=EjT8=RKYZ~f84 G[Sj_a~0$B#QM,:e;KAYrXB^' );
define( 'LOGGED_IN_SALT',   ' AqO=O;uwXpSW6zkxc+v^Z7n0u>_`>p5kuj`>yzKuF*^X:[9-ywesJbU=nzs/6|U' );
define( 'NONCE_SALT',       ')@pgF;bhK{5.}DO6i/~]uTkDRWh}G5Ur}d@}.n#-zAAOz8&Q0ztwQRAJC&>QMk#&' );

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
