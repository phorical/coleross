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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpressP@55word' );

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
define( 'AUTH_KEY',         'u~2IxLOyAW% 4=0 ;?}s#WoCZ[k}JE6K+EDK?-qPaG^FLw2JYRYRVZK?UUL$H98$' );
define( 'SECURE_AUTH_KEY',  '[[;P^J9-MMu`pw`b$bnVHyS_O1PGOuy&H5T A:Pfc+;hb.Q^-[@77T|(m^?v1:Ok' );
define( 'LOGGED_IN_KEY',    '.-:(ZG0AGzhv*O:m@&37+$F}K42:liz:2>8<.+U5s&AR 9tCP#%Xl~dE2p5X]%72' );
define( 'NONCE_KEY',        'vfxtMH@ GT7cp-@BEQJo*#Hb+zB!_yU@5%7ol?m+!d*+D;e?L-o8[&Up6*xv+xVL' );
define( 'AUTH_SALT',        '7Mzh%aeom3(yM~+zJeB4U0zEye]En8:Egvo, ttW?0/cH.2C/`]<tB7N2miW>XUs' );
define( 'SECURE_AUTH_SALT', '9Wb~)[P@m>[4ohlW+!S{BL2>%W9OXheS4{y6*XYk.mm#u6J-60ZgD-@1Oq$QqWph' );
define( 'LOGGED_IN_SALT',   'jP?4Gy@il?AbB#`-g@>G.Ui^-tVP0!:l<i}A6Iy8e>*98qb%-}e}@K$ZmX{k)g#B' );
define( 'NONCE_SALT',       'KNs4 Qi!E,4}^gY)/.0cRbc36W*c|?H$#T?(Z/f8q|0+sNz5hDN%oAW}y-lP}kw[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'coleross_';

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

