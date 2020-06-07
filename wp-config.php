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
define( 'AUTH_KEY',         'nBMp+=G;[fAk]U WO&m%*>kk&[m(74[Xga[cX>;tCxLUm>N!vbheYBE`n!u;qJ9y' );
define( 'SECURE_AUTH_KEY',  'Qd7S85|L@5KyX>.R50Q3SBp DivWsjXtRPR#mfQ9iVYJ7Q~oei25rtg#,/3Gkavw' );
define( 'LOGGED_IN_KEY',    'NV]YM8q.ouZ6a|j[{MZ.V~dnBQ.uaI^(ZSjiE=(@j=95+KFt=5M63/sA<q5.VsN%' );
define( 'NONCE_KEY',        '}NQK~IEz!Gg24|HK9z@KY%mKB!]$eYBV(Cx/.U7&?99?5A x]z`4yTX}B~hS-hNE' );
define( 'AUTH_SALT',        'Bgx,Fys7pmmHwXl`^0^ _>bLPfgGjHp-=DWILx,9#@UZL3X=CViYwG^>}IdRv>$H' );
define( 'SECURE_AUTH_SALT', '(BrS~[G~?t>//79>xmMiX4-6NE,,A_6l,%P=L9:mGDc*`o}W!g+9x[a~;6P?g:<;' );
define( 'LOGGED_IN_SALT',   'mkj-w 4oAa@!E8N*]j2_M:i4YNXyQ{CGcQqqzp+yz6|`>^nBLRrv+pz>!KgOH[V&' );
define( 'NONCE_SALT',       '~UKE7_Vf^comgPMNfDZ/ay]z;3*9FZLKM$bvS6!Q?,X7uMWl|I^1NW#q[WC~(D>(' );

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
