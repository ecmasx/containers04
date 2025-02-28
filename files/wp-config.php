<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         ' r/#|{|9r*TC8&Hs6B`o_TN=8[HP[3FcLeY%_|yduoKrI;>#^r<C.?#zdjSl~A.4' );
define( 'SECURE_AUTH_KEY',  '/jXBI}O8X7_-8 Y)?m@(R#3$ T-[S<[+ Bc>R) W#ZUt7Yy-9CtrbzgLh-/rd)gD' );
define( 'LOGGED_IN_KEY',    'vJ1bWi% -]a;q2uQR|S239aOle8|[[,iF@wq-v[t2K .peONnPO-I:iN8PPdB3j`' );
define( 'NONCE_KEY',        '*2e61en1q2%QD[6J{Per/4>zD_iCNI}w%6Q)lHpu3wUimQ@GQqV&P3%MSw4[kB;+' );
define( 'AUTH_SALT',        '%$sOeZQ^;`abH3{k>&$nLLxgwRRcir0Qb!A]-!oHZh>V-pq58X-g__t$!6NpO:)#' );
define( 'SECURE_AUTH_SALT', 'G&5FkCGeMJ *6WiuI&KMyo:J`G9G5(H,2*X,nfZykG+l7UF3$@%QA_tZuU$@O/:w' );
define( 'LOGGED_IN_SALT',   '^`R;i}a1F;05ZP)CTyRoSW<Bc|RJVYt&Ec^,CDX`$g]bDb%$=a;G&iSTx D&wUn]' );
define( 'NONCE_SALT',       'H=o@vY:,(}=M,#U;gQ3g=]I5wkmyb(j->G~tC%x@R@d;xNS`3>:U0hnM{B/$qDe7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
