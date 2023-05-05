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
define( 'DB_NAME', 'assessment5' );

/** Database username */
define( 'DB_USER', 'assessment5' );

/** Database password */
define( 'DB_PASSWORD', 'assessment5' );

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
define( 'AUTH_KEY',         '|dP{mlZEe5AijGo<&rrXYrT~w.?FgpTtkP83j}C]C#X+{EO@Qu+_X 0jWi^!g;hn' );
define( 'SECURE_AUTH_KEY',  '`Tp>O51/weI_!ByaW9.D_pnc;Zo^cx1He%D8hx*hvMxqrZ&8@l?U=_qL:!E%_ECj' );
define( 'LOGGED_IN_KEY',    '_Aumfn`?0j,&u;ZQe-C4x~HS+02({A}.bb4XJNJyY+)ePCFrmQ%r[rQQP ^2,Usr' );
define( 'NONCE_KEY',        '?4BMdI&]efRB]&D<&eQi8DHq;#O%5,{w>^2tH*kJ)?sM:<21l):~1[xs10GRNh&&' );
define( 'AUTH_SALT',        '20g*uR9{:cvvHcx-bwOeNExhu}.sxf>(]kku_EJPmGqJWDkkxf6&Z 5r m<T/@sx' );
define( 'SECURE_AUTH_SALT', '>sre#jkECKE`c/#o: {XCk1;y$my$,1n`5U3TQV_AG>cW8+i#9C:)Nu+N#VyUN]7' );
define( 'LOGGED_IN_SALT',   'a4pUslCAU|/l.? FX6#B5b/9&yl+90qnWD+8| .9ANmiZka&mfe1|#@uS#7<je/b' );
define( 'NONCE_SALT',       '=Ej6Zt(2+K.EdU+p;7XnI2r`fk__=qT9W_zNZJ3r> DK{/h]B-RL=;cAr>Y5*A4M' );

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
