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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv( 'WP_DB_NAME' ) );

/** Database username */
define( 'DB_USER', getenv( 'WP_DB_USER' ) );

/** Database password */
define( 'DB_PASSWORD', getenv( 'WP_DB_PASSWORD' ) );

/** Database hostname */
define( 'DB_HOST', getenv( 'WP_DB_HOST' ) );

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
define( 'AUTH_KEY',         ',SR.I~||?91vCt9[ UmtlFc7U`:pCW_9(w@6XL~k0I]5(~[P<L } &R:Ysu[X$0}' );
define( 'SECURE_AUTH_KEY',  'm?YSKb) ;3c-N?7 ep]U/Qv_2;UjnXIq I,s7.@n8KD@XpC=cl%<:BUp<fs@cR|s' );
define( 'LOGGED_IN_KEY',    '~nL^8-E@+R*jl.+Jn6Uip1Im&3_)uB(B606LahK9.4gW^}1#Y=tgXb-p_FmC_{ev' );
define( 'NONCE_KEY',        '8$(V]+>geCMwIMEHVHEJtfkx1ZQp7QIL;e4/dr}knXMaLnk;Mq&I,]MgmN#|^cX=' );
define( 'AUTH_SALT',        '1|V?@@|>=si/6yDL3K+-4YqM/b5[0R/8;|pJdUL[y#/Y7WW`H^FP{U%PAiLNq0Rq' );
define( 'SECURE_AUTH_SALT', 'l2(|Zx{pAhS`pvAl;{GJ1[m]f;(*M_j-VBO`(}?/^>s)J^8T]iX;CyS]iVoN8kiS' );
define( 'LOGGED_IN_SALT',   'vzZ4t)YL-|[nS.Ib,e0p%.4x*9I+%n!^Q&3Iv,C&XW(zFb1NA@pNp[lD,QG&TMBy' );
define( 'NONCE_SALT',       ')1co$7v=U]rEJM@NcjkQ1%B8@2`x3EdWejqDgao[pOMcW2:+-i.pd5#14V,6b(8z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv( 'WP_TABLE_PREFIX' );

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
