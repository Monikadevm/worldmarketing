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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', ' );

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
define( 'AUTH_KEY',         '1(!G}-jL5vdY~yLp63?j =O<hBm~%b2(5]@w8w86UTRPid$*a`t#cQrwuE3EEe&O' );
define( 'SECURE_AUTH_KEY',  'Q](K16E9n)=TliQDA6x%tHFdfso{C! HP&P!Cy%K$Q3yUdzT7%:wdwhZ7d1i2Y)7' );
define( 'LOGGED_IN_KEY',    'I@4BBW E4bc9j-S_UeeZ1 g.MR.= -VYPkpcsefAjoan(@Ad_HSR!U0fQewJqZ+R' );
define( 'NONCE_KEY',        '/.{mIa#Ppn&H&@68J,:qt2qY}gz?Kr3T(p32xpyVP*QQKhda#+Jtc5{s-f~rHTpE' );
define( 'AUTH_SALT',        'qpzZ32084ShILo>`IUk-/VR}?!V!LAw>5YI{;@$%<J(*8m8^QuY,5Sah{f2y[%{0' );
define( 'SECURE_AUTH_SALT', 'm :HKikHEie2rxBg)d?%mWy.dy:xMVB&xJy8TkcFr_)!u&OR,M[Nk/$O3.Z<Dbhv' );
define( 'LOGGED_IN_SALT',   'YvSZp w#h`Kv/O?VktG+1xw:_sKzR<u?J|LZ$Xe2Q[b_V@x4 H&H<38eJUaztY8w' );
define( 'NONCE_SALT',       '^d&:6E!R}/4XBO,{Y@!g$OMgM@i`s43 wUVb8YsjN1r3x&j9}>kOY#%?jc|gm:dO' );

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
