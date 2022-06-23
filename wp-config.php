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
define( 'DB_NAME', 'phpintern' );

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
define( 'AUTH_KEY',         'a4NvLO8i{OyIbk-8;~^JA3Lz=SW`}_@_j@yEjdUm<7np{lCEByEr#C8~mcW3v|r!' );
define( 'SECURE_AUTH_KEY',  'p`oMVtN(8`L~F+FEz4#[Mg|jb,]pcRz9h4lYwt!CD@YAV]Rtrq:^$!JDv7xYx)o1' );
define( 'LOGGED_IN_KEY',    'qM8AX2pbuL WDohI|9>}WN#8N|W)g_;I}w{m$X~L?G$0Tpe;C=6}c21g/Rx)y?6|' );
define( 'NONCE_KEY',        '/)X}qGQ-,~xp !W9/IU*m_=dN,K^r+p!$!)/PuS~BSf$!HTt2h$R}k}k.;H.dSG3' );
define( 'AUTH_SALT',        '7sC-W`ugjNC5O=<lQOMc2m9p3L!v=-L#04_8&?VfM)=l_+r:pBjMxB/w9]}f_<>V' );
define( 'SECURE_AUTH_SALT', '>^-Y)PtpFWrWd/_nuSggC+PR)6gi=Uvs6tbo%ZrGmC-G)DUb.u5W ?~g|L@]A}%_' );
define( 'LOGGED_IN_SALT',   'ml>*U?Zr5S7GHVkk3RviVL$-S!9jYOM6vY3-XM&|hQftqJPD%;~ZPf_r;fI4H0Hu' );
define( 'NONCE_SALT',       'Eop!:mPtm&sXhbOXv}Hk^=lYh}NN@E$(00R3:z60uYN2C5&ma&cPmKs}G6J!}lJS' );

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
