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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'physionic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'bh#yP_&@*+)Ky&E!^hzK4_diy8C2a6q/*kYa#[V8nv4TY_pJgy1=CqWQpZjJ}?p?' );
define( 'SECURE_AUTH_KEY',  '_Yn! +~bS7XJGy1;=fn7`B%u_,_ %u:*[/n7fYlE.r7G:U#8,Ab<c#=FqOPH~,L,' );
define( 'LOGGED_IN_KEY',    'eI45]j]?4=GpBoG+FIo+Wp4e8O9nOdEWd?fA:R|DBs<+J3[XikW))^nn7^FiCQyo' );
define( 'NONCE_KEY',        'xaKt)1#}t%5HPT),avAlr0|>>fDqh<D9/NsFwk5E;Xy`Y(KlZFHvm@0u]`u5}|`e' );
define( 'AUTH_SALT',        'D6p_r~s;0|UUhqe|#~<w8y].;g*=UXAtSSYlY|X[~1*<9X|DgWnGq5fLk+3YK Zs' );
define( 'SECURE_AUTH_SALT', '_I?hCt5qOU]([!$w(O4dKCZ6wlcC)8G]D,wt_c PKgH!tIuOxcQS]+%C<NB8m7^_' );
define( 'LOGGED_IN_SALT',   ' [g@ M5]>*A>2B~H;Z^VzR{rWXi`wiU%/tR{?5w~I{H_Z6p@cZq`$,@ E:q9C!lZ' );
define( 'NONCE_SALT',       'F!l[1MYazC56a%m MX{cI#4NNeVhN){q5{1(/&[^:` kGoU-4OiOgQ[-MYZx5z%Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ph_';

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
