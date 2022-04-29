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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp572_db' );

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
define( 'AUTH_KEY',         '13odvbmN;^1,^Oiib#7*u$.AK5+5~J47[M4=}WrYp@%!j&ibY+#6P9C0haD=nM{+' );
define( 'SECURE_AUTH_KEY',  'D*dhmjscv+HI9UO@fKqhzr 3=nz5Q IQBaG8(v}Kd%vudFgz.C=K(q$$N+{FpxM8' );
define( 'LOGGED_IN_KEY',    'Xn@yj~D%]J*!7^aC_ }u=^e}E;6dylz%Fc4^SD26=Nn$Cu@vz/DH*)A(J`E92W)2' );
define( 'NONCE_KEY',        '0H#@,mZMbMl6JiY=[J@&Me]O4iia,Vx047k-ZwUNY+Th5;qvi!2~yLEW9r99AZ+?' );
define( 'AUTH_SALT',        'e1I?>)6f1QqciI{?G$ Si[!I?86Zx5)R~GSqvKBJv*E:<JmHjvNS.nc8@{[h8rxK' );
define( 'SECURE_AUTH_SALT', '-{v!e P$3EeRF:xr(zRM78;}@&:&&Zb)h}{p_j9!X}LJAj8]c{XbY6r?i(bEvbd^' );
define( 'LOGGED_IN_SALT',   '/>2k`?G6c`FUy~G[^z<Ps~I}X}g`JrGH@L b[G2Iq?~5VE$U068:iwEiE,Qfq?8y' );
define( 'NONCE_SALT',       '8JQ}7 ^.O~y?#u:I8HqBk{7cgH4d.`KK?FhR#x:/r*yyI8R<V&z|.<U4B0[,YACQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zp';

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

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
