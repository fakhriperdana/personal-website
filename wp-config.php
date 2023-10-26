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
define( 'DB_NAME', 'wp-fakhri' );

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
define( 'AUTH_KEY',         '(9KXWjRL~Gn,TpIt|PF?(; R(oQ*Nj6M|=e_K#[uOd[E`[v_>lz|40MAoq5K1`Y]' );
define( 'SECURE_AUTH_KEY',  'a)M54akA/@s2G2Gf-#BM9A2U,>bY$U4UP+|c`tZH}8#+R9Lv k80fs;_ij#N4bXL' );
define( 'LOGGED_IN_KEY',    'xw?2J=.38L*y<Y:._cpT^~dTkVRNCjsp_u(f~DrxAX5.;2QJp0BuZ[N}yUsQlsXw' );
define( 'NONCE_KEY',        'b7W^Dt~+nwSpaYffJ q1g#6EC9a!c8L295[&xtBt_o([:g*`H?G?(~7c8c3/9aO#' );
define( 'AUTH_SALT',        '|mmg^Bw&?JNGbRl5siJWk-<,2xN,/#yhoddlQDJ/$/SM!$O6?jfZM2=neRc(==!y' );
define( 'SECURE_AUTH_SALT', 'y}++`-}(]BHo]45I4Y~lDs,odhpjJpL_Z<N5%StaV%._ $6CDW0GPIUF+^!kNg,;' );
define( 'LOGGED_IN_SALT',   'UE{TWsb- QlcVl4!qU2rYJxY=Ym^77~OBkG1otjY3HS_h2c<<*:8|Y9^eI3!|[-M' );
define( 'NONCE_SALT',       'o Ro$Q9HoA:U4EQ02@MvjM.h/:0nn2$Pl/#S~AteP e<$@@H(. :VQbNbl}H!@F7' );

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

