<?php
//increase WP Memory Limit
define('WP_MEMORY_LIMIT', '256M');
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
define('DB_NAME', 'techponn_wp');

/** MySQL database username */
define('DB_USER', 'techponn_wp');

/** MySQL database password */
define('DB_PASSWORD', 'Spd]1w9!v7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'w0hwjl9gmmj9uy91drhxf7whit61lr4ha4it22u002bjqcnrpvki9srebvjscljb');
define('SECURE_AUTH_KEY',  'lrccxsiefpiicu6k5dnwd80qrxcmieaaraugokbpnjup7zg2b0rzxcykezewo5ce');
define('LOGGED_IN_KEY',    'lkom4ufskc1xt21waoip2v5aic5gccnjdmbmyzipnw2zdrrwdtipv7bqcyc6yf22');
define('NONCE_KEY',        'lgx0n5weexxwvdzaycztgzux6rmegkf4oy8rirb2at0pnx4n9kvx8eosuvmrffrs');
define('AUTH_SALT',        'xkicxp6cpeq6sjovkf28u1zlhnsycw83vjqrxis3nybcwslaunqvcbsf6t5lqhok');
define('SECURE_AUTH_SALT', 'khysvfi689vzhs9ibic7zjblc0drynkkirwypiekxvrkuamnhuj819teivu1pklp');
define('LOGGED_IN_SALT',   'cjncw47jxhe4p7tm4mqdlleezvgq8qv3ri0eordfqivv7wa2mlijmyrp1xny3gx7');
define('NONCE_SALT',       'qzseuazx37tlwpmjmdribqibec2iyrudtlng23fknbapan4liwqyeqtrp19pwt3s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpe1_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
