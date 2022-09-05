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
define( 'DB_NAME', 'wordpress_project' );

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
define( 'AUTH_KEY',         'm. 3{H{vM44]q$5H{LaLku2yoxBUb$BsP[b{Y}ZDt6e<1UT1XVU|l5H!,R?!&Hod' );
define( 'SECURE_AUTH_KEY',  'hw/~2)[ZYu k=O!=2JdF4}La4DWo-ajlQ#vZMCFK[{**SMrzR9fdwPK|PgW8E/uX' );
define( 'LOGGED_IN_KEY',    'jW?IFkZ3=Smq+?j?A=6Fbs;5 .f;KS39$Jfh{,&J21uELlQsj&!.*V{I`/mT$HC;' );
define( 'NONCE_KEY',        '+s>t#=1#7,QZpEx)2y|.ai13wMOi!/a--0%jA1_xWX/lWH{yE3QIBH`X;IhkfT,%' );
define( 'AUTH_SALT',        'G4Ff&=:hYV~:;`T6%6t{<xb+2Wn+Jr4DgPIx>U[f71Dj*FePHZn5eZqjW),qgd)U' );
define( 'SECURE_AUTH_SALT', 'H9J~iH`shYZ~O@hYrOv+lLE[6}k]sn1aCIL8xki4y<?oLGtf@OZQAVa={mxHL=-{' );
define( 'LOGGED_IN_SALT',   '%N6[+GI]BVtUY;=!s&.k!Sv;^y]1u/>PVX);hRdSl6Wt.=m1V2!!yykujUH(Sqi[' );
define( 'NONCE_SALT',       '/l_qJ(XHBgt<iY.SNyw c6i_A~s/8/Q`r 6&t})UiZa(H*OJbToCtyR=}axnib=&' );

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
