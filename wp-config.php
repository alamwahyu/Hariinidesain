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
define( 'DB_NAME', 'latihan' );

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
define( 'AUTH_KEY',         '<OY4#/KC6SmX2)^gz%`IS_!x$67zj)#V[T??QHTmIQ]i~V&b8tB3~FY1Wud1=#vF' );
define( 'SECURE_AUTH_KEY',  '|MkY`.a6J;57cEQ_dP]MfeRG1L37j$,@- Mwthq4~vAekhKd7d@#^e$ZY)YdZ@38' );
define( 'LOGGED_IN_KEY',    'CtIkH/0hwsh|K8NCF%{0f%aTDY4LX5qkW{bOY0v-KO):F|(g4(YaGX=bY*$mJSuo' );
define( 'NONCE_KEY',        ' h?l~C!+;h/? &#U9;nCmX7QfdFYAG5!&UPK!xoRJA6&)z*]0$3s[~`j,l&zhkBG' );
define( 'AUTH_SALT',        'einm|3E-&R&*@(d!:9JQ;WMl&fWZ`|3;wIbv7K#f=JaC^&.^<C&37%8zZd&13kg@' );
define( 'SECURE_AUTH_SALT', ',]mzsy.FmjUtFrxaDO.p?U/MxJaKwBZO-93um+D}2<}5Iun?Z6:G7}{NB~R=4!F@' );
define( 'LOGGED_IN_SALT',   '~Yoj]?W`3S4)BjJb[D5=GY-F~?xgE9)>1#QYz%:C<+1pX=vbHQ(qxx=x&`f]PP-$' );
define( 'NONCE_SALT',       'rbu8!+:#-KLj$_9T[8.lk*v!,~xVil]vX&wIn-/|]BK.rtGCgQzz;,ldK!koA;_x' );

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
