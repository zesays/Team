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
define( 'DB_NAME', 'team' );

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
define( 'AUTH_KEY',         'lUO~>g>.RQ-l]t(:yaR;!XPY(E/]!H0sb<vVAa,z&M5b7:ahx&sgBtLu8<B<P|,2' );
define( 'SECURE_AUTH_KEY',  ' v/l0lngY!G//;0gSFdlEQM#c!xAQ-AjA9s`s:a!{w8LJdfrNZy~q=!3*!^zCv/!' );
define( 'LOGGED_IN_KEY',    'zM;Ri].lV](e7W6&iLh&d;!X_n9j|L/D!d&PnugfLXr9!mI-8o:)}cP1Deghz}3v' );
define( 'NONCE_KEY',        'pvrENz6Zw1?ybIWZ{MM_`FfWyHP$?H/NV9KJ4=^kLGn+IK9(#G2^cgr=zS*j83xd' );
define( 'AUTH_SALT',        'c}tU{(YJ;nB#JPcm:G2v9Z3JUi:3q9d)ULTjler@ZF%=vG_%H+KP6wJhLT2joq7_' );
define( 'SECURE_AUTH_SALT', 'k)?]@+TT?UcQ=sdcC+;]MMa]/#g>jTko#.DxgvE}Wyf9#xZ?xumWG<qZ#)siUxt=' );
define( 'LOGGED_IN_SALT',   'Y84<h7B#qduB`w=D):Rv?wF2rq$Bdd(o97Ka@!vt.6v<]KoYwJ|Q7J% _XGaG5-3' );
define( 'NONCE_SALT',       '(_+YA*bA:fXgeLv9~Yau_?#$wpUtV[gAJIXS0X@a$%?6r(6BXWdBVE%GC70_`l6N' );

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
