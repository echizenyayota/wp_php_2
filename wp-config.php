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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define('AUTH_KEY',         ',IV#1gyjn}h%C+1EU~|T7f!h{LSuq3A:vTHzsJ]k|.gN7:(+%y&soj*<e!vbq/H&');
define('SECURE_AUTH_KEY',  'Kz9{Ug4U+X#ER^-IY{^>Y^^e$.7I+B4J0?ckHJH@0ZriN$O_qWqtz2|kaAHwQ$-k');
define('LOGGED_IN_KEY',    'T~|#@^$%^bSE7hU2!=MUdD~jH,)&$/8Dq,ZipIV:q3@gw@^O97z*pq;Le!4_G,Vc');
define('NONCE_KEY',        ';#5yR(L6JzRPWf=WnBAiX~e|RQR5K}I8yVe}-cLw$y[%)HZ!+AP@O`ptPD$L^<2a');
define('AUTH_SALT',        'R/.?$eZ1IogE:U*J@9w?%[68Cn@5~.-?&KiAz4-1^D]xQYRKXUwLbX(djw9*U4ge');
define('SECURE_AUTH_SALT', '.Oh$cE|w1vMJ!Gh|<^HE]&^+v<p]=z}En_xv;O.Ck;LP)9Z:49t1cz=2}XvwDt?B');
define('LOGGED_IN_SALT',   '#f-pI%F|_#SZ+Kj;5:^HG.Fw!<$ApnHDAih9O#S]1`[-+v,xvHmp_(7*o$_+R9z_');
define('NONCE_SALT',       'gy=mCu?O6:`G-f9K:kTCz$WIQ{$$& ?o#@Roq S.D?*!=2U[U&/(+Y.-NQ8D{En ');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
