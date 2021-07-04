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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ElvQMW3gMGtk0dopaIJWa2/wIwx3yuc1DabTRp86R7dCTucnj5eDFcu3t/mCo6ZJRhFx5n/hUxIa15EuKqG+rw==');
define('SECURE_AUTH_KEY',  'jw3aksqYEjv8Fqw2Y3cezjuWyUwFh5NWqUwL03GBRm3fmxI+7d/ZSyY/quxZYOYbwppB24hrbNesKDkZ7VgJCQ==');
define('LOGGED_IN_KEY',    'iAONU943xWjGNkVfEUSrpMRmSOo5/x9rici1TH6o5LcKBofG8whZOu6XtvpXDoHaCHzTVF1RBQJNnxvMqAb5uw==');
define('NONCE_KEY',        '0enBrkLB7a48Ge/AcUuARlxD1wHs98DajZ5xnvM30I+MgKn4+8EEKgX3+Tfd5ubJ9mDOSxyv9k3XzWeCpY+tew==');
define('AUTH_SALT',        'wl36QzFmMH9UTVsUBHoxOll+/aEc0CYHbW2ABNYnevs0c9zKOCYsAMof4fMWNYWWvCvZfnJLEKY0eiXx2rImfw==');
define('SECURE_AUTH_SALT', 'R5jXJXYUxtMtVbo2QxNmGc2O4s3QYQl9/7/DHY1e3A2DWyQjvuJfxVCFcdflQ8enLZ/L6DE7SoWrvRAGG7nTVA==');
define('LOGGED_IN_SALT',   '3ImFbCpGhLm+ruYLW/qstY4Jg2u0FC173GtdiH83ss8A123iR9N1qOKki4eWIFLlwGuVGKnoHYSYp1288v3LhA==');
define('NONCE_SALT',       'MOXgMfvr75xqGQjklbC73d320aQXgLEaZ2w0xME4HDcdvHD+Vu5wjHEo+AD9qUyGdc6t72vETXUljWv+0ilhXA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
