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
define( 'DB_NAME', 'bodynami_wp967' );

/** MySQL database username */
define( 'DB_USER', 'bodynami_wp967' );

/** MySQL database password */
define( 'DB_PASSWORD', '23[.Q8ip2S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'cxih8rnmdeymocmygxydt6mt9sxdgyuvqwkapxvejs1fgphfblsp8d3cyrm6chfg' );
define( 'SECURE_AUTH_KEY',  'pfhpibn2v2g78joenapun6z3qzkqrdipuhue5oox0kizblx9dtnehr7bnjpj8kpu' );
define( 'LOGGED_IN_KEY',    'wva5ytkv1x1qlhqkuaazew2ba3aacelou1jkud2fa6hkydedlxfo5q7jc9udinjs' );
define( 'NONCE_KEY',        'jwyqxhhbk3pupqarvyhhedael87gi2qcmshcf0r8bsu2zjgqqkskwktki6zhm1ye' );
define( 'AUTH_SALT',        'diovy2se5pvslp44t2bntrkupvntzrfxifm8yn5ozhkqdv3tlsmfwv5vtszemo42' );
define( 'SECURE_AUTH_SALT', 'i78bdalavk3nvn2xxabpgys7pw5hwwsxofe0e4fx0oikfztlnkn4dsk5glwnvc8z' );
define( 'LOGGED_IN_SALT',   'gepxqolbdadplst3opg7ctkfw2spyppgcdwknqrhzkdesnijkr145sdjzpkpf8jr' );
define( 'NONCE_SALT',       'wva7afcb9wwsnqlsfyukb6lseg47kfcase3fvvg6imhel5xvc64fz1dl7imduusi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxg_';

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
