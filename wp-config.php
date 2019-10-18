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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '|w8~%o6Cl%[xq1v7])RF9c2VPWsN7K8o]sGF<jj&k_joD!.O;eZOrXuunzb5hg[D' );
define( 'SECURE_AUTH_KEY',  'XtA#}/2JB225nKt|xP25@gqWDv2(E<|#aEzT?HKEA6bVH@/UiC3{!zd|sn[:$xGk' );
define( 'LOGGED_IN_KEY',    '@b&R< 3i>aJTJd #i6YTlp.xu4/kOg<iWl?)%A:efz<nW|)KlLm{kza{s6>fl%R5' );
define( 'NONCE_KEY',        'A{FP1s>J#Ln$20+!0M%S]uPk}rZWkJ,Q>E{Sx$I0m.7=<{Fa^JeYPn%B=<,&7Qa$' );
define( 'AUTH_SALT',        'q(5#H|Zc}5C;vSi1WEL|zV^xur2uA^ay:[*#2cdu1;@Av|VkCPR%A ]/aOi//R_U' );
define( 'SECURE_AUTH_SALT', '_VKWJ)*zJgN$< *8penRI!$ZZ/Ij{_PFv:x9av/IjS =r>f]jvXb$GKTPFY-d4A:' );
define( 'LOGGED_IN_SALT',   'ql#}Kxz[HefU5Dd SQC[?S<q`/xU}qD30so_$12qdr_i>n@I^V^+EorXI4i!b$.@' );
define( 'NONCE_SALT',       'c>UTh &/[!o~L7^@s]V{UOOGWWoJLwY^qK$VW6lDeu5f5:8&eUkfu!:PVn`mhZ@.' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
