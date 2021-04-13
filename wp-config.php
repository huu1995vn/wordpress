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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Huu1995vn@' );

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
define( 'AUTH_KEY',         ':RptlA5L:vn6<A;H1{ak<m:/Y6-wS0s{!(HtRLak*z)a3)~EB/poZ(?F$~.G9rV3' );
define( 'SECURE_AUTH_KEY',  'ytf5gv+=c}=24!RsVxl&uHS#us0N>V L-J7a64x1RvvVat]In-b8R>R*TsoBpRMb' );
define( 'LOGGED_IN_KEY',    'j?-b:$jI^fb5 S&rD~xiz/ C}}rr)68F$S5Nk]I[Z_^1G8+}?v>*-qsaY76aoY+g' );
define( 'NONCE_KEY',        '9HXDEYxN]KuKMv;]sft,h?^n,a;Y?+@P}51LVP@[{OKv)c,zEhO2?rj]</?4kmM/' );
define( 'AUTH_SALT',        '%jB2^=;;wO-tQ&Q!hlhO:aT}2l_DS ]q#8Yk^Yoj>qDX=@Wk5~qwkyBy.}hlbC<~' );
define( 'SECURE_AUTH_SALT', '4t.4kvOWek6__$BmeltFKOdqTLt|DX~>%mdy/4P}gLkIqk*4rc%EtDDLVcycO&Gx' );
define( 'LOGGED_IN_SALT',   '5SEtmjkJ;Pct+C15NXm`(TB<UV!kmT;X@iODx/|_Htny?^.Py(qagL4|h.MmpEs-' );
define( 'NONCE_SALT',       'w{f>6Z5@4+WcU~L&xS&3{!S%]Dt@*bt7g2grEPqMQ`.NHPJl0[>w5D{qpEG>7]p%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tb_';

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
