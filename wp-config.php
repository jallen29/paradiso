<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jal1434112464012');

/** MySQL database username */
define('DB_USER', 'jal1434112464012');

/** MySQL database password */
define('DB_PASSWORD', 'Austin622#');

/** MySQL hostname */
define('DB_HOST', 'jal1434112464012.db.9215377.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ySh TTfXN9x-Pn-&(A J');
define('SECURE_AUTH_KEY',  'zDCNnnW&*qGfX1!q=N#r');
define('LOGGED_IN_KEY',    'adf0dY03PJMbvDjB716n');
define('NONCE_KEY',        '2195b4xxLkdBLxSO4OO7');
define('AUTH_SALT',        'jg#=6HPJ#2Zzf%NZSG&5');
define('SECURE_AUTH_SALT', '+A5rDG*g7Zt%!@3yqx9F');
define('LOGGED_IN_SALT',   'danf&F vsH-rynB3AX#B');
define('NONCE_SALT',       '(vF7nE&GL_2n3X&d6OL)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
