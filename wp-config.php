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
define( 'DB_NAME', 'ismme' );

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
define( 'AUTH_KEY',         'nGRh;])WDfpm6-qtjpl94636p{pa<bf/jAUO{oR]P&s/4p{UHH#Y3ggaHB`,6CVK' );
define( 'SECURE_AUTH_KEY',  '9FeMO,U>sNP_+hHiX^Jt7Dj lO{<_LD26[|q&* 4GET*gc#k#&BNDd`899PC*R8Y' );
define( 'LOGGED_IN_KEY',    'v2J?l%FaXWp4p$.4KENB/i~|Q $f})OqD)KI*xYy,mk<XU3WE +R6s3a03]%q-l-' );
define( 'NONCE_KEY',        'C jVo]1%pJr(R@Kv:}Vu 5=@nEH7=6QY1_e++SYYMh%:dC/@+Sa%VvU]rLM<=v46' );
define( 'AUTH_SALT',        'wCo9rJdz2eYPs;rg0&*W>xwrp6.](qeQ7tc~MkD+,!%{5]Jv?2pgxYDVwXoqJc3^' );
define( 'SECURE_AUTH_SALT', '6~iz.8Vp!3IZ=w<Mh?;mM0(Xk9fb83C8DS{N++y=@JrJ*Xuv?ZZ{I;h$)_`ytppB' );
define( 'LOGGED_IN_SALT',   'kk$%_<6 Oc# V[pUQDkD.W3rREh!Y{EKl#)|n@vJ3UTe3N-zj3Z>7S}cjlF<6Z7L' );
define( 'NONCE_SALT',       '^c[ JNQ<5#X`Yj8 <1<^P~Ie_xxfKDEe@~N=<gl+w`;Y_:(U+4^FnJz$xfLpaRae' );

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
