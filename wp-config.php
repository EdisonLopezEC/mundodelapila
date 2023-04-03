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
define( 'DB_NAME', 'pila' );

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
define( 'AUTH_KEY',         ']*T8iAc?;$o=xxz<RzY.Q4KyA^i;qbl%gx ixL2@*.Tq>_tccTF)7OD+av3u@V<Q' );
define( 'SECURE_AUTH_KEY',  '&4,,kL/BRD3 c&#`1PV*T6#6*:![^Z@%tAoydspdl)2-+pN.M|ckzX1{9/0n@1mD' );
define( 'LOGGED_IN_KEY',    'K$gV@ptjPbvH%Fd[iHf|6k_,B?W4-2d>YsIp4<*QLiirhVW?V>oL;UayI~9r3M.j' );
define( 'NONCE_KEY',        'tcX9^Q+&k(_Gw|p17+g#9# i?4Pp=~kkQX}#2Efm7:(x2N[I<EyIL5K({-4<vBg$' );
define( 'AUTH_SALT',        'o@UyRRcf0>#ppy;68TztJ)cVa$n=Qi6777 _z9XL3)l]vy%r^->b;]2,eY/-+/Ot' );
define( 'SECURE_AUTH_SALT', '[4t+}(2#FX;Yi_[k-7}*$s5ojPU$U 3MGwu![N)peiMg=+.M<@&pE.LLG`cD./p ' );
define( 'LOGGED_IN_SALT',   'pj7]l!_}8O;fyY?^3F]GnYtalk!Bsbg6V?:K&)h1O}[~Vora}$(,7CZ7cq|swis[' );
define( 'NONCE_SALT',       'cl]R.M1B/*plOf%5e5JG|{JXm@W&w)tEa07Uk*a|coQ1#wM_05Jt {#WVOSjN[%b' );

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
