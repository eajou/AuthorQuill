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
define('AUTH_KEY',         'BYaafLrjm2nt4TPyenRZ4MZf4zhqxFiEDH71y67t8Scdp1x/SVuuopYkdjx+ewDtv8c7oP4tecOTGfK19o804g==');
define('SECURE_AUTH_KEY',  'qCTyY3MkW/iT5y7rYzbEivlRp96NP/qEmC6Yzzc2cj79f2e1pvarF7PvxOSL+SeKGHuV9ZB5ChPZb3vVO4bpsg==');
define('LOGGED_IN_KEY',    '2FMxjHkQ6gr/EvtIPow64uK5UPsIGVO+msFxbPRCex8NJLknkSsIISjFu7ldhmvXURmc7aG6x64sdNNIoB3BMw==');
define('NONCE_KEY',        'KFFPhkux5oRjCqzUu28Rq2STGQtLLRuXcEi97Vf0FGpxwxUWwt5qdFPrJDwryn5dDedNYiAzMisLZZwFIkBTog==');
define('AUTH_SALT',        '58yxuyeGJ5pQt61SLMEWBHhaocRe5iz/6PQwa3TKeDGYcmuo5qZTQvY8hvn6JjioeVdI+1VuNE23Od5lQC4Sug==');
define('SECURE_AUTH_SALT', '8sWxsqxWgxOi5t8BM9rAGBy+Hnc99Ngd8y2ewObQzsQBS2I0RBndrKTsBvMkUvdTp5SKuhqNTcB0eyTEVPIMzg==');
define('LOGGED_IN_SALT',   'HrUp6V2HX41drpRPvbLv1RNM+1JkbnrX0cUqvGi8q96OPRL/EtPDd2IGgihm4BNWVQ6pij/Iipqtv5ABxo22Mg==');
define('NONCE_SALT',       'Fma1R+hEYonUZrT8uE3J9M9Bgkv23s5P/9p9TAMo6HRDPFd91lg30NLiuOnNW/eIrDM1RaVQ+7aV2s3Rqf2h4Q==');

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
