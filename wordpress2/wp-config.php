<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'CR4PB1Q!kG]oac[.N$.CaA`B-1%0}SYr^_xI&~iw0|Ju IZ#O#r)$t%*um9[+^G|' );
define( 'SECURE_AUTH_KEY',  'F[w*ePS &hx%cdEtcAk7]k;1Ovxvi54yt4?/tzh<4P4um$5YOZN8-Q+eKoV.w-Gq' );
define( 'LOGGED_IN_KEY',    'Pa>J]Lyl=D[K 2.9u?KgRyKr(>A%W}CNUr:vbTu 5~plVW&%1_KEMr?OjrrD6/?8' );
define( 'NONCE_KEY',        ';i?j8V&fPj9GY12}i#@t7zpjn,~6~zN^,sAz8U4JP_PdZc/N+O4Dlky@H)=[m2Q;' );
define( 'AUTH_SALT',        'C,BBiVC4QJgN}JGXTM:kU/T>&?xeP,KXX*A_Y+3N6Ze;^4mRV;CRXBV1!dsG9Fm4' );
define( 'SECURE_AUTH_SALT', '/Q*cCnbND;0,Xf(Yj^P)k1<Q{`t3~nRo)%#-VL0?7b=kdY,/1vbKuR)R4|ofT_#`' );
define( 'LOGGED_IN_SALT',   '4y+tR.h>uBva-uLEXHNF(dzQ8Te/2)g(4eBhweFWhWPVB/=l9<[DvzZJB}36FN{o' );
define( 'NONCE_SALT',       'laV:Br6=*YZ&}os2N=g9W/k^x3F.7Oa)eB1cMu[Aa=jtST)1vu/zZsDS|ippsPLs' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
