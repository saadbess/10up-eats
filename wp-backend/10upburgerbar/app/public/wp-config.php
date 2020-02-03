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
define('AUTH_KEY',         'mTQT2oqNye34i54iALVyMUqA+tb3rGgzb1DSKMerU0wevkUAaNxTCBBtgQ0g59CK931JAUHMCx+kv8Sja9ApDg==');
define('SECURE_AUTH_KEY',  'DIDHI+mJpLs1e6lQQKPyAkxQmg2+xv3csYSVx0osvl939z7NLSPlOHzR2xEBSOkKwXFcpB2XaspFChMz9g4m4g==');
define('LOGGED_IN_KEY',    'R6DK54yKF7HyFEyfTrmJqd3ippoC9o2sht5oqDVTwKvy4yIGv96iVNMfCGbQNbejmJt3VIh3DBicVM5aOZzSgQ==');
define('NONCE_KEY',        '9xktH71HjU6bv7Jzm7xdKbuJgycdDScd8EoKndk6rNBnl1kneuElX23r2KZWxTIpAUtFVWEkrUmYd+KqONUpOA==');
define('AUTH_SALT',        'UPnCIB9IUJ9dtmBMLg9UwV5dqisLuSZ59HngAeY59imzr0qsv7ic6lDf894WFr0Ry5NeORruBaol4b/2misyrQ==');
define('SECURE_AUTH_SALT', 'B3gJZB28v4qzfbFBgOkZzu1RPxzzd6DggdAvdiKKoOsgjXUYk89+xD5wGXB/+G2XNkvAk/cYNG4MvP0q+sKkJw==');
define('LOGGED_IN_SALT',   '/oJkt8u3DgD9zsAdIR/2DHlAXDmzYpaAMbFnWJadyckaEytbzPyrzIRnxoctcwkU7cpfVb7MmXf2qjTh6dpMKg==');
define('NONCE_SALT',       'htxoWe/4FCtFPv8VYrpgFaHdVPQDOs/jn0kVQUqcZApHnMP09Gbbstycbw0jo8w0JMdcKbQxuw4lOl3nl4fPGw==');

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
