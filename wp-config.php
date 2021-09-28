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
define('AUTH_KEY',         'MfbX7w0uqfdR8H5oeSBuDCN6EjLprBC+b5HyCrz5hkq2iTPSBsD/zX3cgWd8mjNhJcmmpSzoPktynC08MvtrVQ==');
define('SECURE_AUTH_KEY',  '2wOiS1OQgPQ1cGaBOhbmIuyHQv5D2AiIE51MmjvJmQNHGgzs3zaDHIrcq8iPOq5EbHhOnTQTXgo8DFJQqVwq8Q==');
define('LOGGED_IN_KEY',    'X3ZnnGakmev3+6T30gTjeOSpmxtvSAmeBJ6wye1si9By90Yxv8AyEkbgq0+AwFDK6KE6S9/WNsnD53txKJm2tg==');
define('NONCE_KEY',        'k+dtJ3rsXPkFZB5a6lxoOjDVG8V265gqzPBMa1LglPmpvToRL6aFcUyKqd9+s633yCeXwb1/TxCqD0ezhlP5Zw==');
define('AUTH_SALT',        'PYxwhoSpUEygJMo8XLISUQ6+MRhdWkZMjeHQzzhXipuqrLMvEft1SYhgY00FkliRj7GWW/3YtUXEeyKaUNilqA==');
define('SECURE_AUTH_SALT', 'UAJvqoQuqUdL+Ivo+5/X/y9JYczgAK/IIrI6G4YTL6WTXFt9+kXCNA/JQ+d+agoUMnMJZbUwWr1yR2DHbqF1Jw==');
define('LOGGED_IN_SALT',   'cKi4PXcNLbgrHmvzFxxr2mx/QSpJeMjj1dhMgISINHek3LQTSJx+j9/TBiQp21ghxd1FknxffdF45HQNJcVzqg==');
define('NONCE_SALT',       '5iqRnUD4RbDNl7BcHsWcg0Vd7D6AgprS2pjBbIihABXymv8Vx1sHbLKXKarJP+mLUJZhh6G/m7HIjfHmrD3L2Q==');

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
