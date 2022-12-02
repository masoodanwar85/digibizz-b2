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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tr@d3m@rk5' );

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
define( 'AUTH_KEY',         'K3_->4xG8G0478K,URA#;~aq(_}91 T`e7q6-v=tWY.aNHqj]<,2JV?LgafM~dG&' );
define( 'SECURE_AUTH_KEY',  'Ho:h1WO&4SZV>LQ$84z*]mcOmuR}1N,{>Ykh FX=k9`s{>17~W2Jgh|=cixw4t>V' );
define( 'LOGGED_IN_KEY',    'b2|iTy8W6<}M3=o7Kz>(4*0Z|KZ$~zus0/V*.(bSq3=L.l3)&;/U1$#xp,2hb#wc' );
define( 'NONCE_KEY',        'OTY!d}8r@`&(2)*x7F=^R@eQnXN=ct _;|nRm~>yvM*1E4dy}*o-{}w~f`!}&HZw' );
define( 'AUTH_SALT',        'y7gXXT+ZHT$P+Y*2t3]F!{RuoV-Yk#Z8g[nSWVGEA[4.AUsl7OT7CT>Fe<,<@`{$' );
define( 'SECURE_AUTH_SALT', 'cjhLhRw##Y_ki>j~|=!LE/blrGoS]9Q|(Ee,-zsDGnSF6 4l?BxG|sc^-<*  A!i' );
define( 'LOGGED_IN_SALT',   ']N>9MvEg0.)iK@9-dLp)[vxDsX?:gX/8Q&XU? 16eC[*QNM,f&F+*t:@9)z,ZGTh' );
define( 'NONCE_SALT',       '<d|9))Iw3&,V>F0?;SJYeDs<KS:Hm<{/ Pauc6TTn]T%<29o+h6u@P_l6JH7Zj=6' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');
