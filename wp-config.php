<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'imperioimportsco_wp553' );

/** Database username */
define( 'DB_USER', 'imperioimportsco_wp553' );

/** Database password */
define( 'DB_PASSWORD', 'p1nS6.-T2S' );

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
define( 'AUTH_KEY',         'tppqihswstiqyit8y6obn7ecufymunxojywruyvjyyh94s1qlzznmnpy8g2kdxo9' );
define( 'SECURE_AUTH_KEY',  'uopjwgn68ikq3dsu1ru1sqbabrpgxprpstkb5xocce5gndria9rvwm7rf8xgn8hv' );
define( 'LOGGED_IN_KEY',    'wu7dedsrwdyxgjj8vjnuyous4sf1bwtoo61swbdluuiteqczcd1ruppokk3wxx69' );
define( 'NONCE_KEY',        'ppg61jqlbqf93o19ogv7aeajhdusvnrjxumgjqgoun3sjbfaazhlytmyxfwq93ru' );
define( 'AUTH_SALT',        'zmi0sa7xdzdo5op7ew8wlrdpkafdkumj45xkimr3hfycomgmkpctf0ffezkf9sau' );
define( 'SECURE_AUTH_SALT', 'f5gxjrbflewlwjlrrybyzver9lstjyprjgkuqdcrnqvcwqebzgrcgdpvkkgkexc1' );
define( 'LOGGED_IN_SALT',   'bwi98qs7youdlcbumlk4qok6wz0gpkozrco5e999bw9oufd6jmw5hpki7k8y2zfu' );
define( 'NONCE_SALT',       'aelq2itbzsqf7hvesntiyoyyu9dmfshhfmyt9z0tnmfe0wif15kae19gqxmml2ab' );

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
$table_prefix = 'wpee_';

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
