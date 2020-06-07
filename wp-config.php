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
define( 'DB_NAME', 'mohabdu_db' );

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
define( 'AUTH_KEY',         'o<rlWefJl>N:x!ia?z6!.vif=lT44$%}OfYaP{S^Ny*ipxeZk.19iMB1Rlnf]Q!P' );
define( 'SECURE_AUTH_KEY',  'kN5HLi9.)@16GR!m13bmM^CYAND=4r:8l.U y(|K[aj f2&}h4,a3pA?#gIvcc1M' );
define( 'LOGGED_IN_KEY',    '*l3}}`N*R^IMRJrn-vB3F,4m)4j6A)y9mq9=8mPCH5{]ATQL8wXBUArq/9^n[0CS' );
define( 'NONCE_KEY',        'xhCFMogyaqz<<x!TT)`uX1Bebzy9 l1wJ9m.66:7{)tHzpkhtX:d/{Tos2CdT!$,' );
define( 'AUTH_SALT',        'f<RC_l*Y5Tgbm^4<;X^uo;IY3GNtHZbSXM_map:(m.CEX6|9tkgC^M9K>F} .l$S' );
define( 'SECURE_AUTH_SALT', 'sxhFM!znv:@y<1/s]f[ZN(xw(_z`Qhi9Wgi}NG+zN!l2|a]MI^TVgdk1koDub=QW' );
define( 'LOGGED_IN_SALT',   'k/{-PY$s2/ULbPx@kKwAcTf8c?N/.!q[N^}plN]y6Rh`WQFsdvNB*AjQ$_YyExXd' );
define( 'NONCE_SALT',       'Q0`Vj7Ac G+`5h~<_RS;>iJ.=l=-jMgN^A>~Io%lbj_[T+BCOXwk;SPzDLvj96&2' );

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
