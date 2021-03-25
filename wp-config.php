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
define( 'DB_NAME', 'wpprojectp' );

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
define( 'AUTH_KEY',         'qk2V:dlmkj@SZ5-Qm[pX3b5=E}: CYsw~uA]j:s9<Su~#u4_nIa%oCoIm5d3nzPn' );
define( 'SECURE_AUTH_KEY',  '2M<V(0h$/~D81-/=EFH[4us(/m(4-4565JM2v6BLPmW@k6p+~Spy9KfiryjN))Z)' );
define( 'LOGGED_IN_KEY',    '=[$N3|`H[JiUJ O_BUSHwOX@PB %WP% (Wr!v8_=`__s yAxPWf64Iu,}{3FU}9<' );
define( 'NONCE_KEY',        '[N%u:IP$&kZP,3|ygkTDsRv^C/dF/M&v)?o`RrVhI8O70VCMU?*h&]7Ldt}6Rs 6' );
define( 'AUTH_SALT',        'vAIc*CK>jML0:8Q54Mn`!:1sJ}kjz0l8M*,`Sj0K36E[xDdF*pgD)D.?yhaqV@)A' );
define( 'SECURE_AUTH_SALT', 'z`*l6E!v:s19ge*zV#7M~04JfWOc>s/5,Y,?|Ormq`{c w|gyig_}L,z{1U*{vmd' );
define( 'LOGGED_IN_SALT',   '.aAH!?dBwhNGDX]V^l&tFA94:M+N99_x6bnisMP.jHohhN/$&`/4O4H%/>;BNb^T' );
define( 'NONCE_SALT',       '6)9iVi-ks(Q-wcK89US5y1x_hDoC[.tD=N_$S7Se 0NB1Aj6(P8gh^6vLQ}Pdo_x' );

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
