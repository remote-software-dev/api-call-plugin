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
define( 'DB_NAME', 'wordpress_api-call-plugin-dev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'fqcn*W78[::C7ZE91,}qpzAQ=V^k|{J=~b?#U&]@2AKcB.IFnI5):j8.BL_K81bB' );
define( 'SECURE_AUTH_KEY',  '?ifXs,DH>CTM_^s`qU^{i+*]s1,4+]L*L&6qoT*/`zM{IS~&Y^VvU.!sEjW(q4,0' );
define( 'LOGGED_IN_KEY',    'u}h[N:E$/dfAMQu-[N>c87dT)Z[q=B7JS 9>^4h>gW]Qjw~5yg ;7?9x#0*<wht-' );
define( 'NONCE_KEY',        '8Jhq5Hg_Fs}(dzBq9PlDwI$w^q$4w*ft!L0loYJSd=:68kYDv[p}ue.:GE!g~K7I' );
define( 'AUTH_SALT',        ']t4Vo}Hqh%_g^xb|l>^bv!CSc w&V@xaV?6t|@Ai503w_s~x,ea312t{}iu}&QDm' );
define( 'SECURE_AUTH_SALT', '^?!H$/?[=[Q!r&ZrWW.IGo5v@!PmTPzx{-7Xz`S_gRdO}_O%:ms@50$$+- _s,Nk' );
define( 'LOGGED_IN_SALT',   ',iOK0wbgOzkTki4%.dsM[5;{uw2qCU9=XiiL?qCk)#$S]TxI%R:HHRz#4Q:XO0>0' );
define( 'NONCE_SALT',       '0s,usi%?&CaO$qIDK}yn>DE)YVe=^.?On(b])w0u;!AI`/kK_[<;bw,>R%PFQRz4' );

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
