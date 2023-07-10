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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogwebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'rU>b<9r)0LBLrYe%U6xzuN=v{3FBz|uLlJyF#(B#4U;2OLT/w1|2{_*!K6^N@fSS' );
define( 'SECURE_AUTH_KEY',  'za}!s)*zZj3bL%tMT7CZ:bm|kVElvSomm@;D]q}OXS%ax?#d+)c+:h-7daAn&k{B' );
define( 'LOGGED_IN_KEY',    '$]dGHl rmP-p5,q;@**A[WPso;OO_k~1${mS?E^<BOW*O$7u%0WB lyh_}:]`6Y5' );
define( 'NONCE_KEY',        'Ed,-Iip0a)n+`scno$FAC3jj:UG]/|AXvM{23/NzEH~k$LIIf7w5xOiDs+2p!shh' );
define( 'AUTH_SALT',        'g9Z4@|}CB=&5v:G$b[#3gZYPn3S/mLP63E`b<{x;-lk]_k#82;cLv^24:=RkW;G|' );
define( 'SECURE_AUTH_SALT', 'u)>b{HIHSO4z&fh4W+YJC5X(wgX]F^jd>mE3H+)[hy25WCDafbWn*0gB}(m_[lw~' );
define( 'LOGGED_IN_SALT',   'av+{/ 8QocNGb*lA,DC]cgoOrg,!Q.O0u,Yn ygQJQZ#cAN96Kw@&%cYB+2;/8e:' );
define( 'NONCE_SALT',       '|otygVPrhyE5Rn5tHo2z[c3P v=LD]@$DQ^1~+ Ascf-vi6ptG},%0y%}n?O}r%m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
