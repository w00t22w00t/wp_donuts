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
define( 'DB_NAME', 'TestTask' );

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
define( 'AUTH_KEY',         'SFDe[Bx,;kla*w.~UlUANtyDkZTCI v*|LTWAHm-*d|WbTlfLsh`djgpAi@.i;PL' );
define( 'SECURE_AUTH_KEY',  '|Dh*2M!UfG;q&&F*o7O>vtud=&RnZ$f;Ou$LU8LETud:Z%>h[7dy#@Wsm$@hA^/q' );
define( 'LOGGED_IN_KEY',    'D~|]vH&jXj /TT<W>2{bk55xp*ofqUamNkUjL7gan1St5:KOXqmva t9NEYoUoGD' );
define( 'NONCE_KEY',        'd>tj7V-b?5$T~*929_<,UcN^ggx!,RkH|Z?%nXOXbBv1jw1t^M:t2ho_@F5QzTi7' );
define( 'AUTH_SALT',        ')K: t+Exp)jK>6+Sh`kILL#)Z?Qp9jw)JB*o8DA[5^O|U:A+@rV8+;VXSaC;a`2e' );
define( 'SECURE_AUTH_SALT', 'AcYKiF({hapt[I}t,o-%Q<XJ5XibY%Nr=v/3@~A:S5e{;K :IL0f_o2,5YW{%HV.' );
define( 'LOGGED_IN_SALT',   'df59,snW=mn!g@P8;Y&8@>Ka,Hy47yUuY(1,8r</5C9U1=%jNY_?{&9#i}xcsDtW' );
define( 'NONCE_SALT',       '3-@I_,5/=MX}bh`)buRhfN!,U/`kOd4sL_)|!y|+@5oG_[={PG$]bSkFDl7NTU!V' );

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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
