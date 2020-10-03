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
define('AUTH_KEY',         'BdSH6e6xP89alPzMtuYlcbt35qFgL2oK4UoEviD/dFudo1SBAaUvLFb/0+0bPazpCJUrFsJQGghWZqqR4bKmsQ==');
define('SECURE_AUTH_KEY',  'hqVo5HYbo9XfTJ52yTz/4S4wGwpB1y+Ypdt3517h88IXBC/6FG5KwuD0XUk6xqd6YIUvsqLs3EiU97S29sdXAw==');
define('LOGGED_IN_KEY',    'D80F8ptpfkgU7ZFYJPCDhJjH9RvnPc7Kr1LY+9VKpLFoAdRTo2TcRjG11KbAYcFZnA9XnbezVztLNotQjNEtXQ==');
define('NONCE_KEY',        'l5Ii5271342iMI6lqVeXXcBzj9WGMxZe0coA0rE7i1+oHIlspQkGC/vrWrTYrBfHXfa5GjWnRvGZnyVDBLaFdg==');
define('AUTH_SALT',        'NDCtNVOaaAz/bRZs0Ol2Vnix8JHGZORpNsL4m1UArn3eRR3T9Wq6BE0bGmSn+KQyvuk8Zi7qRmv+HM3OCHzjHA==');
define('SECURE_AUTH_SALT', 'EVblfx4NuZeQabTy1fImxBiorfhAhaEBP1G8CxbxKljVxK/U6IVnftmPpGWKXcFGI8cW3vq598I+qE2ieJmB0w==');
define('LOGGED_IN_SALT',   'Pevyb5ufeZfaBXDRLmMYfeKjt+jKI9MSYyc+cHpda2CSKNevRyVgxfW9hEJPo4UOuj3zCFvoEVvWSQfKOuoDLg==');
define('NONCE_SALT',       'qt0V202BKAZgm+p9WwGUQIAxWAWpScYurl2XjIRoPKfpjS9gRd4aAr5Te3ZKQJEKmjnpAKukQxWaKSTbJ8fVGw==');

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
