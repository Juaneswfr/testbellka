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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


 
if(isset($_ENV['CLEARDB_DATABASE_URL'])) {
    $db = parse_url($_ENV['CLEARDB_DATABASE_URL']);
    define('DB_NAME', trim($db['path'],'/'));
    define('DB_USER', $db['user']);
    define('DB_PASSWORD', $db['pass']);
    define('DB_HOST', $db['host']);
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');
} else {
	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'heroku_034c68b26be29d8' );

	/** MySQL database username */
	define( 'DB_USER', 'bb2adf0934b584' );

	/** MySQL database password */
	define( 'DB_PASSWORD', '27127f69' );

	/** MySQL hostname */
	define( 'DB_HOST', 'us-cdbr-east-04.cleardb.com/heroku_034c68b26be29d8?reconnect=true' );

	/** Database charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8mb4' );

	/** The database collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );

}



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
define( 'AUTH_KEY',         'HMG!#%LmE%cwi+IiGP=-y&@6tNI+<vcWR0A]xyfzQ7|:X1Y2I0 :P;;VZdX@V[q$' );
define( 'SECURE_AUTH_KEY',  'Ia)Fn>$TW hgjhil@>,H9SLlZpEOriHDoEu}Cx|$Fk:[k0?b4r:LS.uwt%f=#NM,' );
define( 'LOGGED_IN_KEY',    'xULG:f]DnRXE9yIG*1^NZk&2u^.n#2zZN(lQD)s^0UK?}m{|o_s 2ya6|))pAA<A' );
define( 'NONCE_KEY',        'W5f[Pgnkt}-3=f`3S4*yOluFJ|XhTaGttq=^nJ^rM61p)DE6x%;pd<j:mzS,}..z' );
define( 'AUTH_SALT',        'Pca#_o}t8ZlnS<05S,:<y+Dq[X}?3k1JS~!!=8+i?d$hJ)3BG`6Ic}1J;-7BY%d!' );
define( 'SECURE_AUTH_SALT', '5rF<]M 43%s+:/O^XGbVpH=s{c=$=#xN9sk6SB=.e-LcD fOPv57REiVwq:Ac~cS' );
define( 'LOGGED_IN_SALT',   'hxpp!>,qis)B~=L3D]3*HiGyO0dY;qnK xlblkFTZAvu&I!FA.<y]!PGzZt.-qSr' );
define( 'NONCE_SALT',       '.L()ow<mOQgNAoIy;aFU:h2GO&k lOwS^5wCt#zLx^B<|/iS}Urd,v,)5*I!SN!O' );

/**#@-*/

/**
 * WordPress database table prefix.
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
