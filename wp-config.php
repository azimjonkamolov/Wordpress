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
define( 'AUTH_KEY',         'dfo]8B=wK#]U)]A6p/S>NOk`__lIs+&j9u?gOSZEV=LOlAoNb.;q-UyN:csHALXi' );
define( 'SECURE_AUTH_KEY',  '!a}e_!p~f]{i0F5Y}@_dM=k1J~|DSP ikd4|aD*l>c&uqY5&7wLWhX{a[LJsx%F]' );
define( 'LOGGED_IN_KEY',    'z._]?~{mo;xfw1nME_5R5{CA-+FA3HTeqsg_8^}Ko3rKr` 8uQ2`6ns{P^dQnFDu' );
define( 'NONCE_KEY',        'zgd{]tk[C3Kk|r!NLbYCAbh+>9.x5 ;:e_,HlixP/j#sYdiJD;~U#b}m]PD+e{)8' );
define( 'AUTH_SALT',        'SJ1p4t%C|9zG;I+=}]1>um$}O8 N/7loi[>)zS=LP6[BXj=4DAI_{kS%:?OR*-Q-' );
define( 'SECURE_AUTH_SALT', '^ Zdu;KKWZW)1cPJ#u~4-``Bi6-tYw.-;buS|QfGrpPl?S&HOmA:f<G%>osvf[|u' );
define( 'LOGGED_IN_SALT',   ',ti5aIBTA-QOC=TaNvBRw1QVO<r6M_ApHIlfD2=djcsYMOmYOnz<M/eaDIv6ITED' );
define( 'NONCE_SALT',       '{[nJ$u&w~.iYLlPyd0gRQ#X]iiPG=O;i^o-;ElCY5N;38*&-*n_Gj.P-1.n6a6RO' );

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
