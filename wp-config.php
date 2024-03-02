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
define( 'DB_NAME', 'cloth' );

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
define( 'AUTH_KEY',         '0>i;_$Y1aFAC8Crfx;2`FgeJ%Su0H3]VPs#D)3%=%_X6B4>b}kQSNDVswW]_Hq;z' );
define( 'SECURE_AUTH_KEY',  '2jc>Y6(Vd~Q(iBI !iAU?buPk|n;2k[<9H/x|.uqqk*~4v_+##] )8rXxZ^]C<5~' );
define( 'LOGGED_IN_KEY',    'M[CW*<`YY!d)h#]#Ne*c(_/vwi#0Brh3Kvs!2JJ?h4xXoIIG@>-Xx?G8r4;J,BAH' );
define( 'NONCE_KEY',        '}_}| @$q&yrZaEfo(8EA.V82scfz2@QdNI}i`*tdBz~*4Il2}j~<vGj;I%O:rQON' );
define( 'AUTH_SALT',        'F!S8*x7=^)OG#}jO9F0C>f$q3tA%vx0pw*Rh%P)Al[jj}5rl6-h5Wc.6J!KoI4<z' );
define( 'SECURE_AUTH_SALT', '{L7`ZE@j<lzF%l,Nx@I?z+S`6w^Qeb5v{n##yA+IqOI_x}.$TWCazEq9!3*2bHAh' );
define( 'LOGGED_IN_SALT',   'M,Zyc$X w0b+90KZy@.v9O2X;y*Wu^frY>7{B.B.VpnoMyWp,feVT~X?Hnlejcqo' );
define( 'NONCE_SALT',       'PxG.gH1:(y4_oYmGHAw<_ s%ed,Ai+%*IQMg2r{Q>PkO!{KCh_17F$Ze7x5&ncRK' );

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
