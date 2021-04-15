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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sahil' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'TWXBhrDwy5jWnjyFZi60fm3G13bMEvj8ocTFTo8TNq4pdxjZvFW4LhwWWp2TTB6u');
define('SECURE_AUTH_KEY',  'I2vRNaZcgpCL8YChoKoE2UfYu21SqdYSlYOJWACVmJd2dIji0ky713AT087mHrmH');
define('LOGGED_IN_KEY',    'zpgTJFhVauVTftoZP2Zf5HRRtRlEt50femwFJ3YnRMUq4GQAiHAwrBDbH8pXjh43');
define('NONCE_KEY',        'SIKsSGksNn7K9K66Ju7dYkG9zA0fjMsaEVWhmsIF22tN2CFJpCEeluR7gri1RSKK');
define('AUTH_SALT',        'ss2D9mL9PCAMn1HKtQDzb9zWSRFfVjBTUuRI5crjVK3SrSQnseCKWXtVScdmSzKm');
define('SECURE_AUTH_SALT', '4KS4PpWepZoFvSoAjhA3upHIqNZLSQpdt962sEj4TIaryQFoCZTip1HFd4Hasv7c');
define('LOGGED_IN_SALT',   'Ol5CGLU6gOhBCTRD86Mm9BwWNFLJd7hRKTE7UUuSCaKqavbvyoc2mNwYdLaHgFaw');
define('NONCE_SALT',       'ISU9K5LNDWBQqm0EWgPZebRK2pxxnqBUbsuAZp7qHJlWmNlfuhRM7VLRKUiah0OC');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
