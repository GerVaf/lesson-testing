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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'TZM' );

/** Database password */
define( 'DB_PASSWORD', 'tzm' );

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
define( 'AUTH_KEY',         '@qEX.x7O{saRt=q{@9NG4akaj#Wq@9)D/vO~=9,V~rNkA?bsp%$Va-o:DVZ7YJkT' );
define( 'SECURE_AUTH_KEY',  '{cFGdE~h#TNg_^.5T2W,Rc qF)ZgC0Swdhr#y0r|YJcb@uZh[9_sR%MdunqIfIYO' );
define( 'LOGGED_IN_KEY',    'egSzvf5AD&jq59{_IhFo,ykEwbYZ`UiOvvf8>R*)KV^s9f8Yf|d5t27B/7w%riO/' );
define( 'NONCE_KEY',        'B<S;Iw,E5mkh+ng=b(Xy>9+V<kL9M,;e@<pUxzJ$bKejj~4UyV4aqSgi{H{b.6`L' );
define( 'AUTH_SALT',        '/qPLV7enw$sHwFn`VkWs! c|=QCB# 8~$Y2JvZjB`j2n 2~q8vBVL{H:t*mb{({j' );
define( 'SECURE_AUTH_SALT', '&Fgme>ti#A2Y}Wu44kp&oH[?+x4}VjgZMleV_I!K>D3CZ#tHns/Q-!BsBwO|F&1Z' );
define( 'LOGGED_IN_SALT',   '0WpKs/de(MSI[#r3kAb16 jZY@<kmflzV4K|P;mS sBN&U-HH+].i?oQQ$A2!+JP' );
define( 'NONCE_SALT',       '3rRr #w2VDaFi[+IP8Ed0s9@3T-]Z<~*96S&?hnFyWf]01~q$gJNsqIIoP&FCF4%' );

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
