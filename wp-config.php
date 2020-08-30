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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aquila' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3K31mk1MR0QQbf2EFRVMJBdlTC4MPiUucivu9ch5q3gn0ao35Fxx16LKY1I2865H' );
define( 'SECURE_AUTH_KEY',  '7qSP6UH9SPdTvuA44npYHcEWqlH5QU6E8wlB7yHeYqsUUfx13Msq0FHtbi8PzK25' );
define( 'LOGGED_IN_KEY',    'FnbMaQTRL1St9eSqEpJ61NweEfPB7LVpEwqYoWdlyxZzlzHT1uKUT4ERkuqg1Y9u' );
define( 'NONCE_KEY',        'ksjHKQypV0q33EhARHQNOTFgnFfteHQY4zHrQjQoo25O2CBDNhfqTlMkMv4VoMw7' );
define( 'AUTH_SALT',        'DfhdIt3yvOyvpgpjqSO2Afx6lZj7ySF9eFukF5JxYc6pDsu0rQQNNWjzygTbvxwB' );
define( 'SECURE_AUTH_SALT', '1lyVRe9popAvvvk2DcB35nOUsfNmcH5FN5PI5puzfIYBaHQISenLKeKwEXiFPVez' );
define( 'LOGGED_IN_SALT',   'gFoCa7Q0MpCbaTNduVToDYzHel0Oyc0vV5Ryx3EZBesNmmKCyp44dFuoDM2gmyK8' );
define( 'NONCE_SALT',       'JAVNdGxrHY8LCM1UNqf2uP7VPU3d3btA6lfXa2sNEvUS8tD2NNhQmdToUgOgQHwE' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
