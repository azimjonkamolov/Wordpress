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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{%(4-UKI2}L(/djIFhLZ>=7WBY%t^4?,]`za1[eV0e}qA)UDD-E>-]<PMf;q_KSk' );
define( 'SECURE_AUTH_KEY',  'qyQ9@duLzM4id`tH@6*{^7]8gL#,X3e47ynWY` wy=oQP!YCS$RdW*JY9A}y}Mj9' );
define( 'LOGGED_IN_KEY',    'p.6IX*r!8IB1y?f1FHXPxbx~:9E_M;p$+T(&)o2_)co,|Lbq^!wFG9/vL$c@xm.a' );
define( 'NONCE_KEY',        ';l=^ZyDj#G[p>y&-/Lk2CAtyJ4/EXgnQd!C {,>x,j0}jI)ac]IPqi6.LG:ko<@C' );
define( 'AUTH_SALT',        'Th1z-Q[6AO4$/L-AIj-|?vrN5/@,>C1U?&OJj9Xj,`7jS#RtT<7<H1p&lJxLh(8n' );
define( 'SECURE_AUTH_SALT', 'i1dM laTmPk|oi4~jGAd?j4W4 );Qh;>Hf7/Tcuh`T,qZM@|oMgIxd<pxSoz- ^0' );
define( 'LOGGED_IN_SALT',   'XJV dy~9hSY7t-eD(E2N>j8`a#`8 V{aJY`Ce>uI9+_>50Fd[Z|^o#G!LXs)gm^%' );
define( 'NONCE_SALT',       'DkBh>4cUJe xbo<suBgM8M/DKXw~9?EPq$TAQVT38Mv9<SdzoP;>vaRx,.?Qz}A<' );

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
