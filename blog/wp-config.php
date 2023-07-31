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
define( 'DB_NAME', 'healingd_wp426' );

/** Database username */
define( 'DB_USER', 'healingd_wp426' );

/** Database password */
define( 'DB_PASSWORD', '[SYv156p(J' );

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
define( 'AUTH_KEY',         'g4b5tfyfoudutu62fu9evoqzbfzbl7crgdquouivyovtcvyigad9bnapabfcf4f4' );
define( 'SECURE_AUTH_KEY',  'znq8cbeci8vfame80f5ia7mlibdl7ff7g0d80durvv6ukqycnblgu1szp4uw1w69' );
define( 'LOGGED_IN_KEY',    'vjzusmcieqw3ottnzn5bc3hfbgb2crnqkzskwuqsydf3c1njakktkgfthybssffi' );
define( 'NONCE_KEY',        'pnsewvn6oh2wjbls9mjqpw5krdz9ctnztk8pjika3phrolxkoigyj1qiyby5wkuk' );
define( 'AUTH_SALT',        'lb35oswelbwaetgvhelgjtey8ots5oazczyhrkz4iqxbwsej2oypltjjkv2ppkab' );
define( 'SECURE_AUTH_SALT', 'dqqxyc2sjftyuzi4uwyvst0zopafyrpnohszxmfwlgwwaajkwph7lgaefoiwyxvf' );
define( 'LOGGED_IN_SALT',   'qwog4wfifytnc5h0uj86teqbmg8gpok3gzqtatfianrbuh4xaika8bahkrlzcxik' );
define( 'NONCE_SALT',       'vaolpliowfxizbfyrhdztrgcabwk2kshaqdujuvug1vzucomvibwmjxwsxppgd3u' );

/**#@-*/
@ini_set( 'upload_max_filesize' , '612M' );
@ini_set( 'post_max_size', '612M');
@ini_set( 'memory_limit', '612M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdq_';

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
